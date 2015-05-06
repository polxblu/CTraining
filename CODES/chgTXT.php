<?php
switch ($_POST['type']){
   case 'webTxt': //Cambio Testo Sito
      $var['inputTxt']='input';
      $var['txt2Mod']=$_POST['txt'];
      $var['table']='webTxt';
   break;
}

if (!isset($_POST['round'])){
    if(!empty($_POST['txt'])){
        
        $usageDB->setColWh(array('id'));
        $usageDB->setValWh(array($_POST['id']));
        $usageDB->setColDt(array('txt'));
        $usageDB->setValDt(array(txaTOdb($_POST['txt'],true)));
        $usageDB->update($var['table']);
        Redieasy('index.php?token='.$_POST['token']);

    }else  $var['er']=$testo['errors']['emptyField'];
}
        /*switch ($_POST['type']){
           case 'webTxt': //Cambio Testo Sito
                 
           break;
        }
        */
?>
