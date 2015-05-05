<?php
for ($i=0;$i<$langar['str']['num'];$i++){
    
    $txtDB->setColDt(array('id','name','cCode'));
    $txtDB->setValDt(array($var['newID'],$_POST['name'],strtoupper($_POST['cCode'])));
    $txtDB->insert('languages');

    DBtoAR::$colonne=array('lanID','Xsez','Xpag','rifTxt','txt');
    DBtoAR::$tabella='wbtxtz';
    DBtoAR::$valori=array($langar['str']['lanID'][$i],$_POST['XsezN'],$_POST['XpagN'],$_POST['rifTxt'],$_POST['txt']);
    DBtoAR::insert();
}
Redieasy('index.php?token='.$_POST['token']);
?>
