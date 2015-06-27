<div>

<table align="center" width="800" cellpadding="0">
<tr>
	<td align="right" valign="bottom">
        <br />&nbsp;<br />&nbsp;<br />
	   <form action="index.php?token=<?php echo $_GET['token']; ?>" method="post">
		   <?php echo $testo['common']['proSelDL'];?><br/>
           <?php
           for ($i=0;$i<$testo['str']['num'];$i++){
            echo '<input type="radio" value="'.$testo['str']['id'][$i].'" ';if ($testo['str']['id'][$i]==$_SESSION['prefLang'])echo 'checked="checked"';echo' name="prefLang" />'.$testo['str']['name'][$i].'<br/>';
           }
           ?><br />
           <?php echo $testo['common']['commName']; ?>&nbsp;
           <input name="name" type="text" value="<?php echo $_SESSION['name']; ?>"/><br />
           <?php echo $testo['common']['commSurName']; ?>&nbsp;
           <input name="surname" type="text" value="<?php echo $_SESSION['surname']; ?>"/><br/>
		   <?php echo $testo['common']['userAge']; ?>&nbsp;
           <select name="age" id="age" size="1">
              <option></option>
              <?php
              for ($j=0;$j<$kar['rangeAgeNum'];$j++){
			     echo '<option value="'.$j.'"';
                 if ($_SESSION['age']==$j)echo' selected';
                 echo '>'.$kar['rangeAge'][$j].'</option>
              ';
              }
              ?>
		   </select><br/>
		   <?php echo $testo['common']['userTypeTraining']; ?>&nbsp;
           <select name="typeTraining" id="typeTraining" size="1">
              <option></option>
              <?php
              for ($j=0;$j<$liste['typeTraining']['num'];$j++){
			     echo '<option value="'.$liste['typeTraining']['idc'][$j].'"';
                 if ($_SESSION['typeTraining']==$liste['typeTraining']['idc'][$j])echo' selected';
                 echo '>'.$liste['typeTraining']['name'][$j].'</option>
              ';
              }
              ?>
		   </select><br/>
           <?php echo $testo['common']['commUName']; ?>&nbsp;
           <input name="nik" type="text" value="<?php echo $_SESSION['nik']; ?>"/><br />
           <?php echo $testo['common']['commEmail']; ?>&nbsp;
           <input placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="email" name="email" required value="<?php echo $_SESSION['email']; ?>"/><br/>
           <?php echo $testo['common']['commEmailRet']; ?>&nbsp;
           <input placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="email" name="email2" required value="<?php echo $_SESSION['email']; ?>"/><br/>
           <input name="id" type="hidden" value="<?php echo $_SESSION['id']; ?>"/>
           <button name="ACT" type="submit" value="<?php echo $testo['buttons']['setProfile']; ?>">
               <?php echo $testo['buttons']['setProfile']; ?>
           </button>
	   </form>
	   <form action="index.php?token=<?php echo $_GET['token']; ?>" method="post">

	   <form action="index.php?token=<?php echo $_GET['token']; ?>" name="clrTxT" method="post">
            <?php echo $testo['common']['passwdOldT']; ?>&nbsp;<input name="passwdOldTyped" id="passwdOldTyped" type="password" required value="" /><br/>
            <?php echo $testo['common']['passwdT']; ?>&nbsp;<input name="passwd1" id="passwd1" type="password" required value="" /><br/>
            <?php echo $testo['common']['passwdTR']; ?>&nbsp;<input name="passwd2" id="passwd2" type="password" required value="" /><br/>
            </span>
            <input name="passwdOld" type="hidden" value="<?php echo $_SESSION['passwd']; ?>"/>
            <input name="type" type="hidden" value="self"/>
            <button name="ACT" type="submit" value="<?php echo $testo['buttons']['chgPASSWD']; ?>">
               <?php echo $testo['buttons']['chgPASSWD']; ?>
            </button>
	   </form>
       <br /><?php echo $var['er']; ?><br />

    </td>
</tr>
';
    }
}
?>
</table>
</div>
