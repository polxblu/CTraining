<?php
switch ($_POST['type']){
   case 'webTxt': //Cambio Testo Sito
      $var['inputTxt']='input';
      $var['txt2Mod']=$_POST['txt'];
      $var['table']='txtWeb';
   break;
}

if (!isset($_POST['round'])){
    if(!empty($_POST['txt'])){
        
        $txtDB->setColWh(array('id'));
        $txtDB->setValWh(array($_POST['id']));
        $txtDB->setColDt(array('txt'));
        $txtDB->setValDt(array(txaTOdb($_POST['txt'],true)));
        $txtDB->update($var['table']);
        Redieasy('index.php?token='.$_POST['token']);

    }else  $var['er']=$testo['errors']['emptyField'];
}
        /*switch ($_POST['type']){
           case 'webTxt': //Cambio Testo Sito
                 
           break;
        }
        */
?>
