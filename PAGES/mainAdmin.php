<div id="cPannel">
<?php
   switch ($var['pag']){

	  case 'webTxt':// Testi interni sito
          require('../MODULES/wsTxtz.php');
	  break;

	  case 'lingue':// Pagina modifica aggiunta lingue
          require('../MODULES/modLang.php');
	  break;

	  case 'admin':// Crea Modifica Rimuove Lingue
          echo 'Ciao!';
	  break;

	  default://LogOut  DEVE ASSOLUTAMENTE ESSERE il ULTIMO
        //  sllog();
	  break;

   }
?>
</div>
