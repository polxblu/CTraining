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
   <?php include_once 'COMMON/logIn.php'; ?>
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
    	<img src="IMAGES/COMMON/title.png" height="100%"/>
    </div>
    
<div id="stepscontainer">
    	<div id="step1" class="step">
        	<img src="IMAGES/HOME/step1.jpg" width="100%" height="100%"/>
            <div id="step1descr" class="stepdescr">
            	Programma i tuoi allenamenti
            </div>
        </div>
        <div id="step2" class="step">
        	<img src="IMAGES/HOME/step2.jpg" width="100%" height="100%"/>
            <div id="step2descr" class="stepdescr">
            	Porta i video sempre con te
            </div>
        </div>
        <div id="step3" class="step">
        	<img src="IMAGES/HOME/step3.png" width="100%" height="100%"/>
            <div id="step3descr" class="stepdescr">
            	Scopri consigli e ricette per il tuo allenamento
            </div>
        </div>
</div>
<div id="videoesempio">
<br>	QUI ALCUNI VIDEO DI ESEMPIO.<br><br><br>
Da decidere colori e sfondi, da riempire con immagini<br><br><br> Responsive Collaudato!
</div>

</div>

</body>
</html>