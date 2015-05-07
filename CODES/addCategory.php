<?php
if( empty($_POST['typeN']) || empty($_POST['name'])  || ( $_POST['typeN']!==$liste['type']['idc'][0] && empty($_POST['rifTxt'])) ){
    $var['er']=$testo['errors']['emptyField'];    
}else{    
    $var['newID']='cate'.time();
    $dataDB->setColDt(array('id','type','who'));
    $dataDB->setValDt(array($var['newID'],$_POST['typeN'],$_POST['whoN']));
    $dataDB->insert('category');

    for ($i=0;$i<$testo['str']['num'];$i++){
        $txtDB->setColDt(array('languages','pages','sections','rifTxt','txt'));
        $txtDB->setValDt(array($testo['str']['id'][$i],'category','commonTxt',$var['newID'],txaTOdb($_POST['name'],true)));
        $txtDB->insert('txtWeb');
    }
    Redieasy('index.php?token='.$_GET['token']);
}
?>
