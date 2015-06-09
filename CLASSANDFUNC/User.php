<?php

// Questa classe snellisce le operazioni di user
class User{
    var $data=array();        // Dati personali user
    var $grants=array();      // Privilegi
    var $db='';               // Handle DataBases
    var $unSet=true;          // Variabile controllo login 
    var $error='';

    // Logga lutente
    function __construct($uname,$pass){

        $db->setColWh(array('nik'));
        $db->setValWh(array($_POST['nik']));
        $check=$db->select('user');

        if (empty($check['usrID'])){
            $var['er']='Il Nik lè wrong!';
        }elseif($check['psw']!==$_POST['passwd']){
            $var['er']='La password lè wrong';
        }else{

    $var['redi']='?Xlang='.$check['preflang'];
    foreach($_GET as $key => $value){
         if ('preflang'!==$key)$var['redi'].='&'.$key.'='.$value;
    }
    
    foreach(DBtoAR::$colonne as $key => $value){
        $var['redi'].='&'.$value.'='.$check[$value];
    }

    DBtoAR::$colonne=array('who','what');
    DBtoAR::$dove=array($check['usrID']);
    DBtoAR::$tabella='privez';
    DBtoAR::$valori=array();
    $privz=DBtoAR::selectSeparated();

    $var['redi'].='&PZnum='.$privz['num'];
    for ($i=0;$i<$privz['num'];$i++){
        $var['redi'].='&PZ'.$i.'='.$privz['what'][$i];
    }
    Redirect($kar['addrssl'][$var['Xplat']].'SLD/logg.php'.$var['redi'],$kar['sslin'][$var['Xplat']]);
}
   }

    // slogga utente
    function __desctruct(){

    }

    // Debug
    function debug(){
	   return $this->$error;
    }
  
    function onScreen($in){echo $this->$data[$in];}
    
    function setDB($db){$this->db=$db;}
    
      

}
?>