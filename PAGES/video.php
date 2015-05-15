<?php
include_once('../loader.php');
?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link href="../CONFIG/videopage.css" rel="stylesheet" type="text/css"/>
<link href="../CONFIG/barra.css" rel="stylesheet" type="text/css"/> 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="../CLASSANDFUNC/scriptmenu.js"></script>


</head>

<body>

<div id='cssmenu' class="align-center">

<ul>
   <li class="active"><a href='#'>Home</a></li>
   <li><a href='#'>Video</a></li>
   <li><a href='#'>WorkOut</a></li>
   <li><a href='#'>Ricette</a></li>
   <li><a href='#'>Chi sono</a></li>
   <li><a href='#'>Contatti/Assistenza</a></li>
   <li class='has-sub'><a href='#'>Login</a>
   	   <ul><form>
         <li style="text-align:center;"><a><big>Nome utente</big>
        		<br/><input name="user" class="loginform"/>
       			<br/><br/><big>Password</big>
        		<br/><input type="password" name="psw" class="loginform"/>
                <br/><br/><input type="submit" value="login">
         </a></li>
      </form></ul>
   </lb>

</ul>
</div>

<div id="filtermenu">
<table id="personalinfotable" cellpadding="2" cellspacing="6" border="0">
	<tr><td colspan="2">Ciao <b>GianGigi</b></td></tr>
	<tr><td width="80">Difficolta consigliata</td>
    	<td width="80">Ripetizioni consigliate</td>
    </tr>
    <tr><td><img src="../IMAGES/COMMON/diff_on.png" width="30"/>
    		<img src="../IMAGES/COMMON/diff_on.png" width="30"/>
            <img src="../IMAGES/COMMON/diff_off.png" width="30"/>
         </td>
         <td><big><big><b>20</b></big></big>
</table>
</div>


<div id="maincontent">
MAINCONTENTs

</div>



</body>

</html>