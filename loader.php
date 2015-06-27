<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link href="CONFIG/videopage.css" rel="stylesheet" type="text/css"/>
<link href="CONFIG/index.css" rel="stylesheet" type="text/css"/>
<link href="CONFIG/barra.css" rel="stylesheet" type="text/css"/>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="CLASSANDFUNC/scriptmenu.js"></script>

</head>

<body>

<div id='cssmenu' class="align-center">
<ul>
   <li class="active"><a href='index.php?token=<?php $uar['pag']='home';toUrl();echo $var['token'];?>'>Home</a></li>
   <li><a href='#'>Video</a></li>
   <li><a href='#'>WorkOut</a></li>
   <li><a href='#'>Ricette</a></li>
   <li><a href='#'>Chi sono</a></li>
   <li><a href='#'>Contatti/Assistenza</a></li>
   <?php
       if(isset($_SESSION['id'])) include_once 'COMMON/loggedIn.php'; 
       else include_once 'COMMON/logIn.php'; 
   ?>
</ul>
</div>

<?php include_once 'PAGES/'.$var['pag'].'.php'; ?>

</body>

</html>