<?php
switch ($_POST['type']){
   case 'flag': //Cambio bandierine
      $var['dirImg']=$kar['flagdir'];
   break;

   default:
      sllog();
   break;

}
if (!isset($_POST['round'])){
    $var['img']=chkImgFile('pics');
    if ($var['img']=='ok'){
        $var['rediMod']=rediMod('Xpag','Xsez');
        switch ($_POST['type']){
           case 'flag': //Cambio bandierine
              unlink($var['dirImg'].$_POST['nomeImg']);
              move_uploaded_file($_FILES['pics']['tmp_name'], $var['dirImg'].$_FILES['pics']['name']);
              DBtoAR::$colonne=array('lanID','flag');
              DBtoAR::$tabella='langz';
              DBtoAR::$valori=array($_POST['ID'],$_FILES['pics']['name']);
              DBtoAR::update();
              Redieasy('index.php?Xsez='.$_POST['Xsez'].'&Xpag='.$_POST['Xpag'].$var['rediMod']);
           break;
        }
    }else{
       switch ($var['img']){
          case '3':
             $var['er']=$_FILES['pics']['name'].$langar['errors']['imgPLoad'];
             unlink($_FILES['pics']['tmp_name']);
          break;
          case '4':
             $var['er']=$langar['errors']['imgNoFile'];
          break;
          case 'type':
             $var['er']=$_FILES['pics']['name'].$langar['errors']['imgType'];
             unlink($_FILES['pics']['tmp_name']);
          break;
          default:
             $var['er']=$_FILES['pics']['name'].$langar['errors']['imgToBig'];
          break;
       }// switch
    }
}
?>
