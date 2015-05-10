<?php

if (isset($_POST['delSure'])){

    $txtDB->setColWh(array('rifTxt'));
    $txtDB->setValWh(array($_POST['id']));
    $txtDB->delete('txtWeb');
    
    $dataDB->setColWh(array('id'));
    $dataDB->setValWh(array($_POST['id']));
    $dataDB->delete('category');
        
    if ( isset($_POST['main']) && $_POST['type'.$_POST['cont']]!==$liste['type']['idc'][0]){
        for ($i=0;$i<$liste[$_POST['id']]['num'];$i++){
            $dataDB->setColWh(array('id'));
            $dataDB->setValWh(array($liste[$_POST['id']]['idc'][$i]));
            $dataDB->setColDt(array('type','who'));
            $dataDB->setValDt(array($liste['type']['idc'][0],''));
            $dataDB->update('category');
        }
    }
    Redieasy('index.php?token='.$_GET['token']);

}else $var['er']=$testo['errors']['confErase'];
?>
