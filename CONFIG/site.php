<?php
$uar=array(); //inizzializzazione array x URL
$testo=array(); //inizzializzazione array x TESTO

// Definizione Array Costruzione Sito
$definitions=array(
      'commonTxt'  => array (  // Tipi di Testo
                       'num'    =>  5   //numero di oggetti
                      ,'idc'  =>  array('menu','errors','buttons','login','common')      //definizione di oggetti
                      )
     ,'pagesTxt'  => array (  // Tipi di Testo
                       'num'    =>  1   //numero di oggetti
                      ,'idc'  =>  array('admin')      //definizione di oggetti
                      )
     ,'menu'  => array (  // Elenco menu
                      'admin'  => array (  // Elenco menu admin
                             'num'  =>  3   //numero di oggetti
                            ,'idc'  =>  array('home','webTxt','lingue')     //definizione di oggetti
                            ,'priv' =>  array('no','usage','si')      //definizione di oggetti
                            )
                      )
    );


// DEFINIZIONI UTILIZZO TABLE
$DBtable=array(
     'user'   => array (  // Tabella User
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
     ,'languages' => array (  // Tabella lingue
           'flag'     =>  true   
          ,'flago'    =>  true
          ,'cCode'    =>  true
          )  
    );


?>
