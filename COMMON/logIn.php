<li class='has-sub'><a href='#'><?php echo $testo['buttons']['logIn'];?></a>
<form action="index.php<?php if(isset($_GET['token'])) echo '?token='.$_GET['token'];?>" method="post" name="chgText" id="chgText">
   	   <ul>
         <li style="text-align:center;"><a><big><?php echo $testo['login']['logINUser'];?></big>
        		<br/><input type="text" name="user" class="loginform"/>
       			<br/><br/><big><?php echo $testo['login']['logINPasswd'];?></big>
        		<br/><input type="password" name="passwd" class="loginform"/>
                <br/><br/>
                <button name="ACT" type="submit" value="<?php echo $testo['buttons']['logIn'];?>">
                    <?php echo $testo['buttons']['logIn'];?>
                </button>
         </a></li>
      </ul>
</form>
</li>


