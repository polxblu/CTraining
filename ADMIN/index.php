<?php

//init
session_start();
header("Cache-control:private"); //IE 6 Fix
require '../CONFIG/config.php';
require '../CONFIG/site.php';
require '../CLASSANDFUNC/Db2Ar.php';
require '../CLASSANDFUNC/function.php';

// init DataBase
$Wh='Out';
if($kar['noInt']){
    if(isset($uar['mysqlWh'])){
        if($uar['mysqlWh']=='Out'){
            $Wh='Out';
        }
    }
    $uar['mysqlWh']='In';
    toUrl();
    echo('<a href="index.php?token='.$var['redi'].'">In</a>&nbsp');
    $uar['mysqlWh']='Out';
    toUrl();
    echo('<a href="index.php?token='.$var['redi'].'">Out</a></BR>');
    $uar['mysqlWh']=$Wh;
}
$txtDB=new Db2Ar($kar['dbhost'.$Wh],$kar['dbuser'],$kar['dbpw'],$kar['dbTXT']);

//SetUp
engine();

//Creazione array Testo
langMAKER($definitions['commonTxt']);

//Inizio codice Sito

if (isset($_POST['ACT'])){
   switch ($_POST['ACT']){

//LogIn DEVE ASSOLUTAMENTE ESSERE il PRIMO
	  case $testo['buttons']['LogIn']:
          require('../CODES/LogIn.php');
	  break;

//Aggiunge Lingua solo x webber
	  case $testo['buttons']['addLanguages']:
          require('../CODES/addLanguages.php');
	  break;

//Modifica Lingua solo x webber
	  case $testo['buttons']['setDefLang']:
          require('../CODES/7DefLanguages.php');
	  break;

//Modifica Lingua solo x webber
	  case $testo['buttons']['modLanguages']:
          require('../CODES/modLanguages.php');
	  break;

//Elimina Lingua solo x webber
	  case $testo['buttons']['delLanguages']:
          require('../CODES/delLanguages.php');
	  break;

//Aggiungi Testo al sito
	  case $testo['buttons']['addWebTxt']:
          require('../CODES/addWebTxt.php');
	  break;

//Modifica Riferimenti Testo del sito
	  case $testo['buttons']['modRifWebTxt']:
          require('../CODES/modWebTxt.php');
	  break;

//Elimina Riferimenti e Testo dal sito
	  case $testo['buttons']['delTxtWeb']:
          require('../CODES/delWebTxt.php');
	  break;

//Modifica Immagine
	  case $testo['buttons']['chgIMG']:
          require('../CODES/chgIMG.php');
	  break;

//Modifica Testo
	  case $testo['buttons']['chgTXT']:
          require('../CODES/modTXT.php');
	  break;





//LogOut  DEVE ASSOLUTAMENTE ESSERE il ULTIMO
	  default:
          //sllog();
	  break;

   }
}

//Draw
include_once('loader.php');

//close DB
unset($txtDB);

// zona dedicata al debug
if ($kar['debug']) include_once '../CLASSANDFUNC/debug.php';
// zona dedicat al debug */

?>
