<?php
// Definizione Array Costanti
$kar=array(
     'dbMAIN'    => 'CTrayMainDB'   // Name of your database
    ,'dbDATA'    => 'CTrayDataDB'       // Name of your database
    ,'dbTXT'     => 'CTrayTxtDB'       // Name of your database
    ,'dbuser'    => 'SColombo'       // Username used to access it.
    ,'dbpw'      => '2EYGBKnneZQFWD9B'     // Password used to access it
    ,'dbhostIn'  => '127.0.0.1'      // host used to access it
    ,'dbhostOut' => 'multipol.no-ip.org:3306'      // host used to access it
    ,'debug'	 =>  true	// Sito in modalità debug
    ,'noInt'	 =>  false	// Sito in modalità sviluppo senza internete
    ,'flagdir'	 =>  'IMAGES/LANG/'	// Directory Bandierine
    ,'videodir'	 =>  'VIDEO/'	// Directory Bandierine
    ,'divHight'  => 35     // Altezza Div Ordinamento Categorie
	,'upsize'    => 10485760   // Max file upload size 10M
    ,'addTimeNum'  => 3     // Numero Abbonamenti 
    ,'addTime'     => array(86400,2592000,31536000)      // Giorno(24 * 60 * 60)Settimana(7 * 24 * 60 * 60)Mese(30 * 24 * 60 * 60)Anno(365 * 24 * 60 * 60)
	,'rangeAgeNum' => 3     // numero range eta
	,'rangeAge'    => array('0-25','26-45','46-99')    // range eta
 	);

// Definizione Array Variabil

$var=array(
     'pag'    => 'home'  // variabile di sezione Sezione Sito
    ,'menu'   => 'home'  // variabile di errore
    ,'er'     => '&nbsp;'  // variabile di errore
    ,'idx'    => array (  // variabile di randomizzazione per l'index
                       'gon'    =>  true   //Variabile primo giro
                      ,'round'  =>  0      //Variabile reset
                      )
 	);

// Definizioni Status
$grants=array(
     'num'   => 4 
    ,'type'  => array('boss','webber','traduttori','user')
    ,'boss'  => array(   'all'       =>  true     // tipo accesso completo
                        ,'webTxt'    =>  false    // accesso al testo sito
                        ,'testo'     =>  true     // Traduzione testi
                        ,'lingue'    =>  true     // Sistemazione lingue
                        ,'video'     =>  true     // gestione video
                        ,'user'      =>  true     // gestioni utenti
                        ,'category'  =>  true     // sistemazione categorie
                        )
    ,'webber'=> array(   'all'       =>  false    // tipo accesso completo
                        ,'webTxt'    =>  true     // accesso al testo sito
                        ,'testo'     =>  true     // Traduzione testi
                        ,'lingue'    =>  true     // Sistemazione lingue
                        ,'video'     =>  false    // gestione video
                        ,'user'      =>  false    // gestioni utenti
                        ,'category'  =>  false    // sistemazione categorie
                        )
    ,'traduttori'=> array( 'all'     =>  false    // tipo accesso parziale
                        ,'webTxt'    =>  false    // accesso al testo sito
                        ,'testo'     =>  true     // Traduzione testi
                        ,'lingue'    =>  false    // Sistemazione lingue
                        ,'video'     =>  false    // gestione video
                        ,'user'      =>  false    // gestioni utenti
                        ,'category'  =>  false    // sistemazione categorie
                        )
    ,'user'=>  array( 'all'          =>  false    // tipo accesso parziale
                        ,'webTxt'    =>  false    // accesso al testo sito
                        ,'testo'     =>  false    // Traduzione testi
                        ,'lingue'    =>  false    // Sistemazione lingue
                        ,'video'     =>  false    // gestione video
                        ,'user'      =>  false    // gestioni utenti
                        ,'category'  =>  false    // sistemazione categorie
                        )
    );

?>
