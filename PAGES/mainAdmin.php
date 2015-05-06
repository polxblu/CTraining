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

	  case 'chgText':// Pagina Cambio Testi
          require('../COMMON/chgText.php');
	  break;

	  default://LogOut  DEVE ASSOLUTAMENTE ESSERE il ULTIMO
          echo $testo['home']['intro'].'<br/>';
          print_r($testo);
          
	  break;

   }
?>
</div>
