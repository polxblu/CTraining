<?php
include_once('loader.php');
?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link href="CONFIG/index.css" rel="stylesheet" type="text/css"/>
<link href="CONFIG/barra.css" rel="stylesheet" type="text/css"/>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="CLASSANDFUNC/scriptmenu.js"></script>

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

<div id="formaazzurra" class="sologrande"></div>
<div id="formaazzurrasmall" class="solopiccolo"></div>
<img id="pictop" src="IMAGES/HOME/pictop.jpg"/>

<div id="registrazione">
    <span style="font-size:35px;">
        Crea la tua scheda,<br />inizia il tuo allenamento.
    </span>
    
    <hr style="width:100%; height:4px; background-color:white;"/>
    
    <form id="registrazioneform">
        Nome e cognome:<br />
        <input class="formreg" /><br /><br />
        
        Indirizzo eMail:<br />
        <input class="formreg" /><br /><br />
        
        Tipo di allenamento:<br />
        <select class="formreg">
            <option value=""></option>
            <option value="">ButtaGiuLaPanza</option>
        </select><br /><br />
        
        Range di eta':<br />
        <input type="radio"/>0-25 &nbsp;&nbsp;
        <input type="radio"/>25-45 &nbsp;&nbsp;
        <input type="radio"/>45-99
        <br /><br />
        <input type="submit" class="formreg" style="font-size:17px;" value="Programma la tua Settimana!"/>
    </form>
</div>

<div id="maincontent">
    <div id="titolo">
    #COLOMBOTRAINING
    </div>
    
   
</div>

</body>
</html>