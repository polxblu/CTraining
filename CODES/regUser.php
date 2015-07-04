<?php
if(
      empty($_POST['nik'])
    ||empty($_POST['email'])
    ||empty($_POST['passwd1'])
){
    $var['er']=$testo['errors']['emptyField'];
}elseif($_POST['email']!==$_POST['email2']){
    $var['er']=$testo['errors']['mailMissMatch'];      
}elseif($_POST['passwd1']!==$_POST['passwd2']){
    $var['er']=$testo['errors']['passwdMiss'];      
}else{
    for($i=0;$i<$DBtable['user']['num'];$i++){
        if($DBtable['user']['modFields'][$i]){
            if($_POST[$DBtable['user']['fields'][$i]]==''){    
                $var['er']=$testo['errors']['emptyField'];    
            }
        }
    }
}
if($var['er']=='&nbsp;'){   

    $mainDB->setColWh(array('nik'));
    $mainDB->setValWh(array($_POST['nik']));
    $chk=$mainDB->select('user');
    if(!empty($chk['id']))
        $var['er']=$testo['errors']['userExist'];
    
    $mainDB->setColWh(array('email'));
    $mainDB->setValWh(array($_POST['email']));
    $chk=$mainDB->select('user');
    if(!empty($chk['id']))
        $var['er']=$testo['errors']['userMExist'];
    
    if($var['er']=='&nbsp;'){
        $var['newID']='user'.time();
        
        $mainDB->setColDt(array('id','prefLang','nik','passwd','email'));
        $mainDB->setValDt(array($var['newID'],$var['lang'],$_POST['nik'],md5($_POST['passwd1']),$_POST['email']));
        $mainDB->insert('user');
    
        for($i=0;$i<$DBtable['user']['num'];$i++){
            $mainDB->setColDt(array('who','tableF','name','value'));
            $mainDB->setValDt(array($var['newID'],'user',$DBtable['user']['fields'][$i],$_POST[$DBtable['user']['fields'][$i]]));
            $mainDB->insert('extraFields');
        }
        
        $mainDB->setColDt(array('user','token'));
        $mainDB->setValDt(array($var['newID'],md5($_POST['passwd1'].$var['newID'])));
        $mainDB->insert('checkToken');
    
        //invio mail per conferma
        $var['nome']=$_SESSION['nome'];
        $var['surname']=$_SESSION['surname'];
        $var['email']=$_SESSION['email'];
        $uar['lang']=$var['lang'];toUrl();
        include_once 'CODES/sendMail.php';
        
        $uar['lang']=$var['lang'];$uar['message']='newUser';toUrl();
        Redieasy('PAGES/redAlert.php?token='.$var['token']);
    }
} 
?>
