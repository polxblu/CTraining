<?php include_once('../CLASSANDFUNC/txtWebSiteJS.php'); ?>
<div id="newWbTxt">
<table align="center" width="100%" cellpadding="0">
<tr>
	<td width="100%" align="center">
		<form action="index.php?token=<?php echo $_GET['token'];?>" method="post" name="selSectionsN" id="selSectionsN">

<table align="center">
<tr>
	<td align="center" valign="middle">sections</td></td>
	<td align="center" valign="middle">pages</td>
	<td align="center" valign="middle">rifTxt</td>
	<td align="center" valign="middle">txt</td>
	<td align="center" valign="middle"><?php echo $var['er'];?></td>
</tr>
<tr>
	<td align="center" valign="middle">
		<select onChange="chgSelTxt('N');" name="sectionsN" id="sectionsN" size="1">
            <option></option>
            <option value="commonTxt">commonTxt</option>
<?php
   			for ($j=0;$j<$definitions['pagesTxt']['num'];$j++){
	   			echo '<option value="'.$definitions['pagesTxt']['idc'][$j].'">'.$definitions['pagesTxt']['idc'][$j].'</option>
                     ';
   			}
?>
		</select>
    </td>
	<td align="center" valign="middle">
		<select name="pagesN" id="pagesN" size="1">
            <option></option>
		</select>
    </td>
	<td align="center" valign="middle"><input name="rifTxt" type="text" /></td>
	<td align="center" valign="middle"><input name="txt" type="text" /></td>
	<td align="center" valign="middle">
            <button name="ACT" type="submit" value="Agg. WebTxt">
               Agg. WebTxt
            </button>
    </td>
</tr>
</table>
		</form>
    </td>
</tr>
</table>
<?php
$txtDB->setColWh(array('languages'));
$txtDB->setValWh(array($var['lang']));
$txtDB->setColOr(array('sections','pages'));
$array=$txtDB->select('txtWeb');


echo '
<table align="center" width="600" cellpadding="0">
';
$giro=0;
for ($i=0;$i<$array['num'];$i++){
if($giro==10)$giro=0;
if (is_int($i/2)){
   $var['cornColor']='2px dashed #FF00FF';
   $var['fontColor']='#00'.$giro.'FF0';
}else{
   $var['cornColor']='2px dashed #FFFF00';
   $var['fontColor']='#F0'.$giro.'F00';
}
$giro++;
echo'
<tr>
	<td style="border-right:'.$var['cornColor'].';" align="right" valign="bottom">
		<form action="index.php?Xpag=modTxt&Xsez=cPannel'.$var['rediMod'].'" name="clrTxT" method="post">
            <span style="color:'.$var['fontColor'].'">
            '.$array['txt'][$i].'
            &nbsp;
            </span>
            <input name="ID" type="hidden" value="'.$array['ID'][$i].'"/>
            <input name="type" type="hidden" value="webTxt"/>
            <input name="round" type="hidden" value="yes"/>
            <input name="txt" type="hidden" value="'.$array['txt'][$i].'"/>
            <input name="Xsez" type="hidden" value="'.$var['Xsez'].'"/>
            <input name="Xpag" type="hidden" value="'.$var['Xpag'].'"/>
            <button name="ACT" type="submit" value="'.$langar['buttons']['chgTxt'].'">
               '.$langar['buttons']['chgTxt'].'
            </button>
		</form>
</tr>
<tr>
	<td style="border-right:'.$var['cornColor'].';" align="right" valign="bottom">
		<form action="index.php'.$var['redi'].'" method="post" name="selXsez'.$i.'" id="selXsez'.$i.'">
		   Xsez&nbsp;
		   <select onChange="chgSelTxt(\''.$i.'\');" name="Xsez'.$i.'" id="Xsez'.$i.'" size="1">
              <option></option>
   			  ';
   			  for ($j=0;$j<$definitions['Xsez']['num'];$j++){
	   			 echo '<option value="'.$definitions['Xsez']['idc'][$j].'"';if ($array['Xsez'][$i]==$definitions['Xsez']['idc'][$j])echo' selected'; echo '>'.$definitions['Xsez']['idc'][$j].'</option>
                      ';
              }
   			  echo '
		   </select>
		   &nbsp;Xpag&nbsp;
		   <select name="Xpag'.$i.'" id="Xpag'.$i.'" size="1">
              <option></option>
              ';
   			  for ($j=0;$j<$definitions[$array['Xsez'][$i]]['num'];$j++){
	   			echo '<option value="'.$definitions[$array['Xsez'][$i]]['idc'][$j].'"';if ($array['Xpag'][$i]==$definitions[$array['Xsez'][$i]]['idc'][$j])echo' selected'; echo '>'.$definitions[$array['Xsez'][$i]]['idc'][$j].'</option>
                     ';
   			  }
   			  echo '
		   </select>
		   &nbsp;rifTxt&nbsp;
           <input name="rifTxt" type="text" value="'.$array['rifTxt'][$i].'"/>
           <input name="ID" type="hidden" value="'.$array['ID'][$i].'"/>
           <input name="cont" type="hidden" value="'.$i.'"/>
           <button name="ACT" type="submit" value="Mod WebTxt">
               Mod WebTxt
           </button>
		</form>
    </td>
</tr>
<tr>
	<td style="';if($i!==$array['num']-1)echo'border-bottom:'.$var['cornColor'].';';echo'border-right:'.$var['cornColor'].';" align="right" valign="bottom">
		<form action="index.php'.$var['redi'].'" name="clrTxT" method="post">
            Elimina Record
            &nbsp;
            <input type="checkbox" value="delSure" id="delSure" name="delSure" />
            &nbsp;
            <input name="Xsez" type="hidden" value="'.$array['Xsez'][$i].'"/>
            <input name="Xpag" type="hidden" value="'.$array['Xpag'][$i].'"/>
            <input name="rifTxt" type="hidden" value="'.$array['rifTxt'][$i].'"/>
            <button name="ACT" type="submit" value="Del WebTxt">
               Del WebTxt
            </button>
		</form>
    </td>
</tr>
';
}
echo'

</table>
</div>
';

?>
