<?php

// Questa classe snellisce le operazioni di user
class User{
    var $data=array;        // Dati personali user
    var $grants=array();    // Privilegi
    var $db='';             // Handle DataBases
    var $error='';

    // Logga lutente
    function __construct(){

    }

    // slogga utente
    function __desctruct(){

    }

    // Debug
    function debug(){
	   return $this->$error;
    }
  
    function onScreen($in){echo $this->$data[$in];}
    
    function setProfile($in,$idc){
        
    }
    
      

}
?>