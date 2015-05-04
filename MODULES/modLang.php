<?php ?>
<div id="ModLang">
<table align="center" width="100%" cellpadding="0">
<tr>
	<td width="100%" align="center">
		<form action="index.php?token=<?php echo $_GET['token'];?>" method="post">
<table align="center">
<tr>
	<td align="center" valign="middle">Nome</td></td>
	<td align="center" valign="middle">Country Code</td>
	<td align="center" valign="middle"><?php echo $var['er']; ?></td>
</tr>
<tr>
	<td align="center" valign="middle">
        <input name="nome" type="text" />
    </td>
	<td align="center" valign="middle">
        <input name="cCode" type="text" maxlength="2" />
    </td>
	<td align="center" valign="middle">
            <button name="ACT" type="submit" value="addLanguages">
               Agg. Lingua
            </button>
    </td>
</tr>
</table>
</form>
    </td>
</tr>
</table>
</div>

<br />

<form action="index.php?token=<?php echo $_GET['token'];?>" method="post">
<?php
$def=$txtDB->select('languages');

for ($i=0;$i<$def['num'];$i++){
    echo '<input type="radio" value="'.$def['id'][$i].'" ';if ($def['defaultL'][$i]='yes')echo 'checked="checked"';echo' name="default" />'.$def['name'][$i].'<br/>';
}
?>
            <button name="ACT" type="submit" value="setDefLang">
               Set Default Languages
            </button>
</form>

<br />


<table>
<tr>
	<td>Name</td>
	<td>Flag</td>
	<td>Flag Over</td>
	<td>Codice Paese</td>
	<td><?php echo $var['er']; ?></td>
</tr>
<?php
for ($i=0;$i<$def['num'];$i++){
    echo '
<form action="index.php?token='.$_GET['token'].'" method="post">
<tr>
	<td>
    <input name="name" value="'.$def['name'][$i].'" type="text" maxlength="2" />
    </td>
	<td>
    ';
    if($def['flag']=='noPicz') echo 'NoPics';
    else echo '<img src="../'.$kar['flagdir'].$def['flag'][$i].'" />';
    echo'
    <br/>
            <button name="ACT" type="submit" value="modFlag">
               Modda a Bandiera Sopra
            </button>
    </td>
	<td>
    ';
    if($def['flago']=='noPicz') echo 'NoPics';
    else echo '<img src="../'.$kar['flagdir'].$def['flago'][$i].'" />';
    echo'
    <br/>
            <button name="ACT" type="submit" value="modFlago">
               Modda a Bandiera Sopra
            </button>
    </td>
	<td>
    <input name="cCode" value="'.$def['cCode'][$i].'" type="text" maxlength="2" />
    </td>
	<td>
            <input type="hidden" name="id" value="'.$def['id'][$i].'" />
            <button name="ACT" type="submit" value="modLanguages">
               Modda a Lingua
            </button>
    </td>
</tr>
</form>
    ';
}

?>
</table>
