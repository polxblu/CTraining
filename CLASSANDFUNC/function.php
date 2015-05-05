<?php
function txaTOdb($txt,$dir){
   $car = array('"','¡','¨','«','°','±','´','µ','¶','¸','»','¿','À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü','Ý','Þ','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ð','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','þ','ÿ');
   $con = array('&quot;','&iexcl;','&uml;','&laquo;','&deg;','&plusmn;','&acute;','&micro;','&para;','&cedil;','&raquo;','&iquest;','&Agrave;','&Acute;','&Acirc;','&Atilde;','&Auml;','&Aring;','&AElig;','&Ccedil;','&Egrave;','&Eacute;','&Ecirc;','&Euml;','&Igrave;','&Iacute;','&Icirc;','&Iuml;','&ETH;','&Ntilde;','&Ograve;','&Oacute;','&Ocirc;','&Otilde;','&Ouml;','&Oslash;','&Ugrave;','&Uacute;','&Ucirc;','&Uuml;','&Yacute;','&ETHORN;','&szlig;','&agrave;','&aacute;','&acirc;','&atilde;','&auml;','&aring;','&aelig;','&ccedil;','&egrave;','&eacute;','&ecirc;','&euml;','&igrave;','&iacute;','&icirc;','&iuml;','&eth;','&ntilde;','&oacute;','&ograve;','&ocirc;','&otilde;','&ouml;','&oslash;','&ugrave;','&uacute;','&ucirc;','&uuml;','&yacute;','&thorn;','&yuml;');
   if ($dir){
      $txt = str_replace($car, $con, $txt);
      $txt = str_replace("'", "\'", $txt);
   }else{
      $txt = str_replace($con, $car, $txt);
   }

   return $txt;
}

function engine(){
    
    global $uar;
    global $kar;
    global $var;
    global $txtDB;
    global $testo;

    $testo['str']=$txtDB->select('languages');

    for ($i=0;$i<$testo['str']['num'];$i++){
        if ($testo['str']['defaultL'][$i]=='yes')$testo['defaultL']=$testo['str']['id'][$i];
    }

    if (isset($_GET['token'])){
        $var['dToken'] = pack("H*",$_GET['token']);
        $process=explode('#',$var['dToken']);
        for ($i=0;$i<count($process);$i=$i+2){
            $uar[$process[$i]]=$process[$i+1];    
        }
        $var['pag']=$uar['pag'];
        $var['lang']=$uar['lang'];
    }else{
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $var['ip'] = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $var['ip'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $var['ip'] = $_SERVER['REMOTE_ADDR'];
        }
        $cCode=file_get_contents("http://ipinfo.io/{$var['ip']}/country");
            
        $txtDB->setColWh(array('cCode'));
        $txtDB->setValWh(array($cCode));
        $res=$txtDB->select('languages');
            
        if(empty($res['id'])){$var['lang']=$uar['lang']=$testo['defaultL'];}
        else {$var['lang']=$uar['lang']=$res['id'];}
            
    }
}

function toUrl(){
    
    global $uar;
    global $var;
    global $kar;
    
    $var['token']='';
    foreach ($uar as $key => $value){
        $var['token'].=$key.'#'.$value.'#';
    }
    $var['token']=bin2hex(substr($var['token'],0,-1));
    
}

function langMAKER($comm){
    
    global $kar;
    global $var;
    global $uar;
    global $testo;
    global $txtDB;
    
    for ($i=0;$i<$testo['str']['num'];$i++){
        if ($testo['str']['id'][$i]==$var['lang']){
            $row=$txtDB->listTable('languages');
            foreach($row as $key => $value){
                $testo['curent'][$value]=$testo['str'][$value][$i];
            }
        }
    }
    
    for ($j=0;$j<$comm['num'];$j++){
        $txtDB->setColWh(array('languages','pages'));
        $txtDB->setValWh(array($var['lang'],$comm['idc'][$j]));
        $array=$txtDB->select('txtWeb');
        for ($i=0;$i<$array['num'];$i++){
            $testo[$comm['idc'][$j]][$array['rifTxt'][$i]]=$array['txt'][$i];
            $testo[$comm['idc'][$j]][$array['rifTxt'][$i].'id']=$array['id'][$i];
            $testo[$comm['idc'][$j]][$array['rifTxt'][$i].'sections']=$array['sections'][$i];
        }
    }

    $txtDB->setColWh(array('languages','pages'));
    $txtDB->setValWh(array($var['lang'],$var['pag']));
    $array=$txtDB->select('txt');
    for ($i=0;$i<$array['num'];$i++){
        $testo[$var['pag']][$array['rifTxt'][$i]]=$array['txt'][$i];
        $testo[$var['pag']][$array['rifTxt'][$i]]['type']=$array['type'][$i];
        $testo[$var['pag']][$array['rifTxt'][$i]]['id']=$array['id'][$i];
    }
}


function resizeImage($img,$fold,$mx_h,$mx_w){

	global $var;

	// Recupero Altezza e larghezza
	$imgar = GetImageSize($_FILES[$img]['tmp_name']);
	$imgar['w']=$imgar[0];$imgar['h']=$imgar[1];
	$var['wratio'] = $mx_w / $imgar['w'];
	$var['hratio'] = $mx_h / $imgar['h'];

	// e setto la dimensione finale
	if( ($imgar['w'] <= $mx_w) && ($imgar['h'] <= $mx_h) ){
		$var['n_width'] = $imgar['w'];
		$var['n_height'] = $imgar['h'];
	}elseif (($var['wratio'] * $imgar['h']) < $mx_h){
		$var['n_height'] = ceil($var['wratio'] * $imgar['h']);
		$var['n_width'] = $mx_w;
	}else{
		$var['n_width'] = ceil($var['hratio'] * $imgar['w']);
		$var['n_height'] = $mx_h;
	}

	// Creazione immgine vuota con dimensioni giuste
	$var['newImg'] = imagecreatetruecolor($var['n_width'], $var['n_height']);

	//recupero della risorsa immagine da ridimensionare e settaggio della variabile di trasparenza
	switch ($imgar['mime']){
		case 'image/gif': $var['imgRes'] = imagecreatefromgif($_FILES[$img]['tmp_name']);$var['trasp']=true; break;
		case 'image/png': $var['imgRes'] = imagecreatefrompng($_FILES[$img]['tmp_name']);$var['trasp']=true;  break;
		default : $var['imgRes'] = imagecreatefromjpeg($_FILES[$img]['tmp_name']);$var['trasp']=false; break;
	}

	// Settaggio della trasparenza
	if($var['trasp']){
		imagealphablending($var['newImg'], false);
		imagesavealpha($var['newImg'],true);
		$transparent = imagecolorallocatealpha($var['newImg'], 255, 255, 255, 127);
		imagefilledrectangle($var['newImg'], 0, 0, $var['n_width'], $var['n_height'], $transparent);
	}

	//Ridimensionamento
	imagecopyresampled($var['newImg'], $var['imgRes'], 0, 0, 0, 0, $var['n_width'], $var['n_height'], $imgar['w'], $imgar['h']);

	//copia file in destinazione finale
	switch ($imgar['mime']){
		case 'image/gif': imagegif($var['newImg'],$fold.$_FILES[$img]['name']); break;
		case 'image/png': imagepng($var['newImg'],$fold.$_FILES[$img]['name'],0); break;
		default : ImageJpeg($var['newImg'],$fold.$_FILES[$img]['name'],100);  break;
	}
}

function chkImgFile($img){

global $kar;

$temp='';
if ($_FILES[$img]['error']!==0){
	$temp=$_FILES[$img]['error'];
}elseif ($_FILES[$img]['size']>$kar['upsize']){
	$temp='size';
}elseif (($_FILES[$img]['type']=='image/png')||($_FILES[$img]['type']=='image/gif')||($_FILES[$img]['type']=='image/jpeg')||($_FILES[$img]['type']=='image/pjpeg')){
    $temp='ok';
}else $temp='type';

return $temp;
}

function sllog(){
global $var;
global $kar;
$_SESSION=array();
session_destroy();
Redirect($kar['addr'][$var['Xplat']].'index.php',false);
}


function Redirect($url,$ssl) {
       if(headers_sent()) {
            echo "<script type='text/javascript'>location.href='http";if($ssl)echo's';echo"://$url';</script>";
       } else {
            if($ssl)$tmp='s';else$tmp='';
            header("Location: http$tmp://$url");
       }
}

function Redieasy($url) {
            echo "<script type='text/javascript'>location.href='$url';</script>";
}

function RandIndex(){

         global $var;
         if ($var['idx']['gon']){

            DBtoAR::$colonne=array('ID','word');
            DBtoAR::$dove='';
            DBtoAR::$valori='';
            DBtoAR::$tabella='index';
            $var['idx']['data']=DBtoAR::select();

            $var['idx']['randK'] = range (0,($var['idx']['data']['num']-1));
            shuffle($var['idx']['randK']);
            $var['idx']['gon']=false;
         }
         if ($var['idx']['data']['num']==0){echo 'no data';}
         else{
              echo $var['idx']['data']['word'][$var['idx']['randK'][$var['idx']['round']]];
              $var['idx']['round']++;
              if ($var['idx']['round']==$var['idx']['data']['num'])  $var['idx']['round']=0;
         }
}
?>
