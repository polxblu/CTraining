<?php
if (($_POST['passwd1']!==$_POST['passwd2'])||(empty($_POST['passwd1'])))$var['er']=$testo['errors']['passwdMiss'];
else{
    $mainDB->setColWh(array('id'));
    $mainDB->setValWh(array($_POST['id']));
    $mainDB->setColDt(array('passwd'));
    $mainDB->setValDt(array(md5($_POST['passwd1'])));
    if ($_POST['type']=='admin'){
        $mainDB->update($var['user']);
        Redieasy('index.php?token='.$_POST['token']);
    }else{  
        if($_POST['passwdOld']!==$_POST['passwdOldTyped']){
            $var['er']=$testo['errors']['passwdOldMiss'];
            $mainDB->resVar();
        }else{
            $mainDB->update($var['user']);
            //sloog();
        }
         
    }
}
?>
