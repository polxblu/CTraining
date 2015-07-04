<li class="has-sub"><a><?php echo $testo['login']['logged'].'&nbsp;'.$_SESSION['surname'].'&nbsp;'.$_SESSION['name'];?></a>
<ul>
<li><a href='index.php?token=<?php $uar['pag']='profile';toUrl();echo $var['token'];?>'><?php echo $testo['login']['profile'];?></a></li>
<li><a href='PAGES/messages.php?token=<?php $uar['message']='logOut';toUrl(); echo $var['token'].'\'>'.$testo['login']['logOut'];?></a></li>
</ul>
</li>