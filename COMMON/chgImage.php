<form action="index.php?token=<?php $uar['pag']=$var['uar']; toUrl(); echo $var['redi'];?>" method="post" enctype="multipart/form-data" name="chgImg" id="chgImg">
<br/>
<table>
<tr>
	<td align="center" colspan="2"><?php echo $var['er'];?></td>
</tr>
<tr>
	<td align="center" colspan="2">
<?php    
if ($_POST['picsName']=='noPicz')
    echo 'NO Pictures';
    else echo '<img src="'.$var['dirImg'].$_POST['picsName'].'" />';

?>    
    </td>
</tr>
<tr>
	<td>
    <input onchange="chgImgF();" type="file" size="10" name="pics" />
    </td>
	<td>
       <input name="round" type="hidden" value="yes"/>
       <input name="picsName" type="hidden" value="<?php echo $_POST['picsName'];?>"/>
       <input name="id" type="hidden" value="<?php echo $_POST['id'];?>"/>
       <input name="type" type="hidden" value="<?php echo $_POST['type'];?>"/>
       <input name="token" type="hidden" value="<?php echo $_POST['token'];?>"/>
       <button name="ACT" type="submit" value="<?php echo 'chgIMG';?>">
         <?php echo 'Cambia Immagine';?>
       </button>
    </td>
</tr>
</table>
</form>
