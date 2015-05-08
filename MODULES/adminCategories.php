<?php print_r($liste); include_once('../CLASSANDFUNC/categoriesJS.php'); ?>
<div id="newWbTxt">
<table align="center" width="100%" cellpadding="0">
<tr>
	<td width="100%" align="center">
		<form action="index.php?token=<?php echo $_GET['token'];?>" method="post" name="selCategoriesN" id="selCategoriesN">

<table align="center">
<tr>
	<td align="center" valign="middle">Titolo</td></td>
	<td align="center" valign="middle">Tipo</td>
	<td align="center" valign="middle">Appartenenza</td>
	<td align="center" valign="middle"><?php echo $var['er'];?></td>
</tr>
<tr>
	<td align="center" valign="middle"><input name="name" type="text" /></td>
	<td align="center" valign="middle">
		<select onChange="chgSelTxt('N');" name="typeN" id="typeN" size="1">
            <option></option>
<?php
   			for ($j=0;$j<$liste['type']['num'];$j++){
	   			echo '<option value="'.$liste['type']['idc'][$j].'">'.$liste['type']['idc'][$j].'</option>
                     ';
   			}
?>
		</select>
    </td>
	<td align="center" valign="middle">
		<select name="whoN" id="whoN" size="1">
            <option></option>
		</select>
    </td>
	<td align="center" valign="middle">
            <button name="ACT" type="submit" value="<?php echo $testo['buttons']['addCategory'];?>">
               <?php echo $testo['buttons']['addCategory'];?>
            </button>
    </td>
</tr>
</table>
		</form>
    </td>
</tr>
</table>
<table align="center" width="600" cellpadding="0">
<?php
$txtDB->setColWh(array('languages'));
$txtDB->setValWh(array($var['lang']));
$txtDB->setColOr(array('sections','pages','txt'));
$array=$txtDB->select('txtWeb');

$giro=0;
for ($i=0;$i<$array['num'];$i++){
if($giro==10)$giro=0;
if (is_int($i/2)){
   $var['cornColor']='2px dashed #FF00FF';
   $var['fontColor']='#00'.$giro.'FF0';
}else{
   $var['cornColor']='2px dashed #FFFF00';
   $var['fontColor']='#F0'.$giro.'F00';
}
$giro++;
$uar['pag']='chgText';toUrl();
echo'
<tr>
	<td style="border-right:'.$var['cornColor'].';" align="right" valign="bottom">
		<form action="index.php?token='.$var['token'].'" name="clrTxT" method="post">
            <span style="color:'.$var['fontColor'].'">
            '.$array['txt'][$i].'
            &nbsp;
            </span>
            <input name="id" type="hidden" value="'.$array['id'][$i].'"/>
            <input name="type" type="hidden" value="webTxt"/>
            <input name="round" type="hidden" value="yes"/>
            <input name="txt" type="hidden" value="'.$array['txt'][$i].'"/>
            <input name="token" type="hidden" value="'.$_GET['token'].'"/>
            <button name="ACT" type="submit" value="'.$testo['buttons']['chgTXT'].'">
               '.$testo['buttons']['chgTXT'].'
            </button>
		</form>
</tr>
<tr>
	<td style="border-right:'.$var['cornColor'].';" align="right" valign="bottom">
		<form action="index.php?token='.$_GET['token'].'" method="post" name="selSections'.$i.'" id="selSections'.$i.'">
		   Sections&nbsp;
		   <select onChange="chgSelTxt(\''.$i.'\');" name="sections'.$i.'" id="sections'.$i.'" size="1">
              <option></option>
   			  <option value="commonTxt" ';if ($array['sections'][$i]=='commonTxt')echo' selected '; echo '>commonTxt</option>
              ';
   			  for ($j=0;$j<$definitions['pagesTxt']['num'];$j++){
	   			 echo '<option value="'.$definitions['pagesTxt']['idc'][$j].'"';
                 if ($array['sections'][$i]==$definitions['pagesTxt']['idc'][$j])echo' selected'; 
                 echo '>'.$definitions['pagesTxt']['idc'][$j].'</option>
              ';
              }
   			  echo '
		   </select>
		   &nbsp;Pages&nbsp;
		   <select name="pages'.$i.'" id="pages'.$i.'" size="1">
              <option></option>
              ';
   			  if($array['sections'][$i]=='commonTxt'){
                for ($j=0;$j<$definitions['commonTxt']['num'];$j++){
	   			  echo '<option value="'.$definitions['commonTxt']['idc'][$j].'"';
                  if ($array['pages'][$i]==$definitions['commonTxt']['idc'][$j])echo' selected';
                  echo '>'.$definitions['commonTxt']['idc'][$j].'</option>
              ';
		        }
   			  }else{
                for ($j=0;$j<$definitions['menu'][$array['sections'][$i]]['num'];$j++){
	   			  echo '<option value="'.$definitions['menu'][$array['sections'][$i]]['idc'][$j].'"';
                  if ($array['pages'][$i]==$definitions['menu'][$array['sections'][$i]]['idc'][$j])echo' selected';
                  echo '>'.$definitions['menu'][$array['sections'][$i]]['idc'][$j].'</option>
              ';
   			      }
              }
              echo '
		   </select>
		   &nbsp;rifTxt&nbsp;
           <input name="rifTxt" type="text" value="'.$array['rifTxt'][$i].'"/>
           <input name="rifTxtOld" type="hidden" value="'.$array['rifTxt'][$i].'"/>
           <input name="id" type="hidden" value="'.$array['id'][$i].'"/>
           <input name="cont" type="hidden" value="'.$i.'"/>
           <button name="ACT" type="submit" value="'.$testo['buttons']['modRifWebTxt'].'">
               '.$testo['buttons']['modRifWebTxt'].'
           </button>
		</form>
    </td>
</tr>
<tr>
	<td style="';if($i!==$array['num']-1)echo'border-bottom:'.$var['cornColor'].';';echo'border-right:'.$var['cornColor'].';" align="right" valign="bottom">
		<form action="index.php?token='.$_GET['token'].'" name="clrTxT" method="post">
            Elimina Record
            &nbsp;
            <input type="checkbox" value="delSure" id="delSure" name="delSure" />
            &nbsp;
            <input name="id" type="hidden" value="'.$array['id'][$i].'"/>
            <input name="rifTxtOld" type="hidden" value="'.$array['rifTxt'][$i].'"/>
            <input name="rifTxt" type="hidden" value="'.$array['rifTxt'][$i].'"/>
            <button name="ACT" type="submit" value="'.$testo['buttons']['delTxtWeb'].'">
               '.$testo['buttons']['delTxtWeb'].'
            </button>
		</form>
    </td>
</tr>
';
}
?>
</table>
</div>
