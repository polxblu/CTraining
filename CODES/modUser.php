<?php
if(
      empty($_POST['nik'])
    ||empty($_POST['status'])
    ||empty($_POST['email'])
){
    $var['er']=$testo['errors']['emptyField'];    
}elseif($_POST['email']!==$_POST['email2']){
    $var['er']=$testo['errors']['mailMissMatch'];    
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
    if( 
         !($_POST['id']==$_SESSION['id'] && $chk['id']==$_SESSION['id'])
      || !(empty($chk['id']))
    )
        $var['er']=$testo['errors']['userExist'];
    
    $mainDB->setColWh(array('email'));
    $mainDB->setValWh(array($_POST['email']));
    $chk=$mainDB->select('user');
    if( 
         !($_POST['id']==$_SESSION['id'] && $chk['id']==$_SESSION['id'])
      || !(empty($chk['id']))
    )
        $var['er']=$testo['errors']['userMExist'];
    
    if($var['er']=='&nbsp;'){   
        $mainDB->setColWh(array('id'));
        $mainDB->setValWh(array($_POST['id']));
        $mainDB->setColDt(array('nik','email','status'));
        $mainDB->setValDt(array($_POST['nik'],$_POST['email'],$_POST['status']));
        $mainDB->update('user');
    
        for($i=0;$i<$DBtable['user']['num'];$i++){
            if($DBtable['user']['modFields'][$i]){
                $mainDB->setColWh(array('who','tableF','name'));
                $mainDB->setValWh(array($_POST['id'],'user',$DBtable['user']['fields'][$i]));
                $mainDB->setColDt(array('value'));
                $mainDB->setValDt(array($_POST[$DBtable['user']['fields'][$i]]));
                $mainDB->update('extraFields');
            }
        }
    
        Redieasy('index.php?token='.$_GET['token']);
    }
} 
?>
