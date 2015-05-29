<div id="newWbTxt">
<table align="center" width="800" cellpadding="0">
<?php
$mainDB->setColOr(array('status'));
$array=$mainDB->select('user');
for ($i=0;$i<$array['num'];$i++){
    $mainDB->forceList();
    $mainDB->setColWh(array('who','tableF'));
    $mainDB->setValWh(array($array['id'][$i],'user'));
    $tmp=$mainDB->select('extraFields');
    for ($f=0;$f<$DBtable['user']['num'];$f++){
        for ($d=0;$d<$tmp['num'];$d++){
            if($DBtable['user']['fields'][$f]==$tmp['name'][$d])
                $extra[$tmp['name'][$d]]=$tmp['value'][$d];
        }
    }
echo'
<tr>
	<td align="right" valign="bottom">
	   <form action="index.php?token='.$_GET['token'].'" method="post">
           '.$testo['common']['commUName'].'&nbsp;
           <input name="nik" type="text" value="'.$array['nik'][$i].'"/>&nbsp;
		   '.$testo['user']['admUserStatus'].'&nbsp;
		   <select name="status" id="status" size="1">
              <option></option>
              ';
   			  for ($j=0;$j<$grants['num'];$j++){
	   			 echo '<option value="'.$grants['type'][$j].'"';
                 if ($array['status'][$i]==$grants['type'][$j])echo' selected'; 
                 echo '>'.$grants['type'][$j].'</option>
              ';
              }
   			  echo '
		   </select>&nbsp;
		   '.$testo['user']['admUserAge'].'&nbsp;
		   <select name="age" id="age" size="1">
              <option></option>
              ';
              for ($j=0;$j<$kar['rangeAgeNum'];$j++){
			     echo '<option value="'.$j.'"';
                 if ($extra['age']==$j)echo' selected';
                 echo '>'.$kar['rangeAge'][$j].'</option>
              ';
              }
              echo '
		   </select><br/>
           '.$testo['common']['commName'].'&nbsp;
           <input name="name" type="text" value="'.$extra['name'].'"/>&nbsp;
           '.$testo['common']['commSurName'].'&nbsp;
           <input name="surname" type="text" value="'.$extra['surname'].'"/>&nbsp;
           '.$testo['common']['commEmail'].'&nbsp;
           <input placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="email" name="email" required value="'.$array['email'][$i].'"/><br/>
           <input name="rifTxtOld" type="hidden" value="'.$array['rifTxt'][$i].'"/>
           <input name="id" type="hidden" value="'.$array['id'][$i].'"/>
           <input name="cont" type="hidden" value="'.$i.'"/>
           <button name="ACT" type="submit" value="'.$testo['buttons']['setProfile'].'">
               '.$testo['buttons']['setProfile'].'
           </button>
	   </form>
    </td>
    <td>
		<form action="index.php?token='.$_GET['token'].'" name="clrTxT" method="post">
            <input name="passwd1" id="passwd1" type="password" value="" required/><br/>
            <input name="passwd2" id="passwd2" type="password" value="" required/><br/>
            </span>
            <input name="id" type="hidden" value="'.$array['id'][$i].'"/>
            <input name="type" type="hidden" value="admin"/>
            <button name="ACT" type="submit" value="'.$testo['buttons']['chgPASSWD'].'">
               '.$testo['buttons']['chgPASSWD'].'
            </button>
		</form>
    </td>
</tr>
<tr>
	<td colspan="2" align="right" valign="bottom">
		<form action="index.php?token='.$_GET['token'].'" name="clrTxT" method="post">
            '.$testo['common']['deleteSure'].'
            &nbsp;
            <input type="checkbox" value="delSure" id="delSure" name="delSure" />
            &nbsp;
            <input name="id" type="hidden" value="'.$array['id'][$i].'"/>
            <input name="rifTxtOld" type="hidden" value="'.$array['rifTxt'][$i].'"/>
            <input name="rifTxt" type="hidden" value="'.$array['rifTxt'][$i].'"/>
            <button name="ACT" type="submit" value="'.$testo['buttons']['delUser'].'">
               '.$testo['buttons']['delUser'].'
            </button>
		</form>
    </td>
</tr>
';
}
?>
</table>
</div>
