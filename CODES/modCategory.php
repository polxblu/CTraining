<?php
if ( empty($_POST['type'.$_POST['cont']])||( $_POST['type'.$_POST['cont']]!==$liste['type']['idc'][0] && empty($_POST['who'.$_POST['cont']])) )
    $var['er']=$testo['errors']['emptyField'];
else{    
    if($_POST['id']==$_POST['who'.$_POST['cont']])$var['er']=$testo['errors']['sameSubCategory'];
    else{
        if($_POST['typeN']==$liste['type']['idc'][0]){
            $dataDB->setColWh(array('who'));
            $dataDB->setValWh(array($_POST['who'.$_POST['cont']]));
            $res=$dataDB->select('category');
        }else $res['id']='';
    
        if(empty($res['id'])){
            $dataDB->setColWh(array('id'));
            $dataDB->setValWh(array($_POST['id']));
            $dataDB->setColDt(array('type','who'));
            $dataDB->setValDt(array($_POST['type'.$_POST['cont']],$_POST['who'.$_POST['cont']]));
            $dataDB->update('category');
        
            if (isset($_POST['main'])){
                for ($i=0;$i<$liste[$_POST['id']]['num'];$i++){
                    $dataDB->setColWh(array('id'));
                    $dataDB->setValWh(array($liste[$_POST['id']]['idc'][$i]));
                    $dataDB->setColDt(array('type','who'));
                    $dataDB->setValDt(array($liste['type']['idc'][0],''));
                    $dataDB->update('category');
                }
            }
            Redieasy('index.php?token='.$_GET['token']);
        }else $var['er']=$testo['errors']['catAlreadySel'];
    }
} 
?>
