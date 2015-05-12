<?php
$uar=array(); //inizzializzazione array x URL
$testo=array(); //inizzializzazione array x TESTO
$video=array(); //inizzializzazione array x VIDEO

$liste=array( //inizzializzazione array dele Liste e categorie
      'type'  => array (  // Tipi di categorie
                       'num'    =>  2   //numero di oggetti
                      ,'idc'  =>  array('main','slave')      //definizione di oggetti
                      )
     ,'property'  => array (  // propieta liste Tabelle
                       'num'    =>  3   //numero di oggetti
                      ,'idc'  =>  array(
                            'videoCategory'      //Workout, panca,etc    
                           ,'videoMuscleGroup'   // gruppo muscolare
                           ,'videoDifficult'     // Difficolta    
                           )         //definizione di oggetti
                      )
     );   

// Definizione Array Costruzione Sito
$definitions=array(
      'commonTxt'  => array (  // Tipi di Testo
                       'num'    =>  6   //numero di oggetti
                      ,'idc'  =>  array('menu','errors','buttons','login','common','category')      //definizione di oggetti
                      )
     ,'pagesTxt'  => array (  // Tipi di Testo
                       'num'    =>  2   //numero di oggetti
                      ,'idc'  =>  array('admin','home')      //definizione di oggetti
                      )
     ,'menu'  => array (  // Elenco menu
                      'admin'  => array (  // Elenco menu admin
                             'num'  =>  5   //numero di oggetti
                            ,'idc'  =>  array('home','video','category','webTxt','lingue')     //definizione di oggetti
                            ,'priv' =>  array('no','si','si','usage','si')      //definizione di oggetti
                            )
                     ,'home'  => array (  // Elenco menu admin
                             'num'  =>  1   //numero di oggetti
                            ,'idc'  =>  array('home')     //definizione di oggetti
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
