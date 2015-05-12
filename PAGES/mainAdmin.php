<div id="cPannel">
<?php
   switch ($var['pag']){

	  case 'video':// Testi interni sito
          require('../MODULES/adminVideo.php');
	  break;

	  case 'webTxt':// Testi interni sito
          require('../MODULES/adminTxtWebSite.php');
	  break;

	  case 'category':// Testi interni sito
          require('../MODULES/adminCategories.php');
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

	  case 'chgFile':// Pagina Cambio Files
          require('../COMMON/chgFile.php');
	  break;

	  default://LogOut  DEVE ASSOLUTAMENTE ESSERE il ULTIMO
          
          echo '<br/>'.$testo['home']['intro'].'<br/><br/>';
          
	  break;

   }
?>
</div>
