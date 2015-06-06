<?php

//init
session_start();
header("Cache-control:private"); //IE 6 Fix
require 'CONFIG/config.php';
require 'CONFIG/site.php';
require 'CLASSANDFUNC/Db2Ar.php';
require 'CLASSANDFUNC/function.php';

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
$dataDB=new Db2Ar($kar['dbhost'.$Wh],$kar['dbuser'],$kar['dbpw'],$kar['dbDATA']);
$mainDB=new Db2Ar($kar['dbhost'.$Wh],$kar['dbuser'],$kar['dbpw'],$kar['dbMAIN']);

//SetUp
engine();

//Creazione array Testo
langMAKER($var['lang'],$var['menu'],$var['pag']);


//draw
include_once('loader.php');




?>
