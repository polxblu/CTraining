<?php

//init
session_start();
header("Cache-control:private"); //IE 6 Fix
require '../CONFIG/config.php';
require '../CONFIG/site.php';
require '../CLASSANDFUNC/Db2Ar.php';
require '../CLASSANDFUNC/function.php';
$var['pag']='admin';

//SetUp
engine();

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

//SetUp Testo
$testo=langMAKER($definitions['commonTxt']);

//Inizio codice Sito

if (isset($_POST['ACT'])){
   switch ($_POST['ACT']){

//LogIn DEVE ASSOLUTAMENTE ESSERE il PRIMO
	  case $but['LogIn']:
          require('SLD/CODE/LogIn.php');
	  break;

//Aggiunge Lingua solo x webber
	  case 'Agg. Lingua':
          require('SLD/CODE/addLang.php');
	  break;

//Modifica Lingua solo x webber
	  case 'Mod Lingua':
          require('SLD/CODE/moddLang.php');
	  break;

//Elimina Lingua solo x webber
	  case 'Del Lingua':
          require('SLD/CODE/delLang.php');
	  break;

//Modifica Immagine
	  case $langar['buttons']['chgImg']:
          require('SLD/CODE/modIMG.php');
	  break;

//Modifica Testo
	  case $langar['buttons']['chgTxt']:
          require('SLD/CODE/modTXT.php');
	  break;





//LogOut  DEVE ASSOLUTAMENTE ESSERE il ULTIMO
	  default:
          sllog();
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
