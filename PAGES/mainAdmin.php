<div id="cPannel">
<?php
   switch ($var['pag']){

	  case 'webTxt':// Testi interni sito
          require('../MODULES/txtWebSite.php');
	  break;

	  case 'lingue':// Pagina modifica aggiunta lingue
          require('../MODULES/adminLanguages.php');
	  break;

	  case 'chgImage':// Pagina Cambio Immagini
          require('../COMMON/chgImage.php');
	  break;

	  default://LogOut  DEVE ASSOLUTAMENTE ESSERE il ULTIMO
          echo 'Ciao!';
	  break;

   }
?>
</div>
