<?php
$uar=array(); //inizzializzazione array x URL
$testo=array(); //inizzializzazione array x TESTO

// Definizione Array Costruzione Sito
$definitions=array(
      'commonTxt'  => array (  // Tipi di Testo
                       'num'    =>  4   //numero di oggetti
                      ,'idc'  =>  array('menu','errors','buttons','login')      //definizione di oggetti
                      )
     ,'pageTxt'  => array (  // Tipi di Testo
                       'num'    =>  1   //numero di oggetti
                      ,'idc'  =>  array('admin')      //definizione di oggetti
                      )
     ,'menu'  => array (  // Elenco menu
                      'admin'  => array (  // Elenco menu admin
                             'num'  =>  2   //numero di oggetti
                            ,'idc'  =>  array('webTxt','lingue')     //definizione di oggetti
                            ,'priv' =>  array('usage','si')      //definizione di oggetti
                            )
                      )
    );


// DEFINIZIONI UTILIZZO TABLE
$DBtable=array(
     'user'   => array (  // Service
           'name'     =>  true   
          ,'surname'  =>  true
          ,'zip'      =>  true
          ,'city'     =>  true
          ,'state'    =>  true
          ,'preflang' =>  true
          ,'addres'   =>  true
          ,'opt0'     =>  true
          ,'opt1'     =>  true
          ,'opt2'     =>  true
          ,'opt3'     =>  true
          ,'opt4'     =>  true
          ,'opt5'     =>  true
          ,'opt6'     =>  true
          ,'opt7'     =>  true
          ,'opt8'     =>  true
          ,'opt9'     =>  true
          )  
    );


?>
