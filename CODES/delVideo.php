<?php

if (isset($_POST['delSure'])){

    $txtDB->setColWh(array('rifTxt'));
    $txtDB->setValWh(array($_POST['id']));
    $txtDB->delete('txtData');
    
    $dataDB->setColWh(array('id'));
    $dataDB->setValWh(array($_POST['id']));
    $dataDB->delete('video');
        
    Redieasy('index.php?token='.$_GET['token']);

}else $var['er']=$testo['errors']['confErase'];
?>
