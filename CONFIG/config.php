<?php
// Definizione Array Costanti
$kar=array(
     'dbMAIN'    => 'CTrayMainDB'   // Name of your database
    ,'dbTXT'     => 'CTrayTxtDB'       // Name of your database
    ,'dbuser'    => 'SColombo'       // Username used to access it.
    ,'dbpw'      => '2EYGBKnneZQFWD9B'     // Password used to access it
    ,'dbhostIn'  => '127.0.0.1'      // host used to access it
    ,'dbhostOut' => 'multipol.no-ip.org:3306'      // host used to access it
    ,'debug'	 =>  true	// Sito in modalità debug
    ,'noInt'	 =>  false	// Sito in modalità sviluppo senza internete
    ,'flagdir'	 =>  'IMAGES/LANG/'	// Directory Bandierine
    ,'imgdir'	 =>  'image/upload/'	// Directory Immagini
    ,'imgwid'    => 600     // larghezza immagine
    ,'imghig'    => 600     // altezza immagine
	,'upsize'    => 10485760   // Max file upload size 10M
 	);

// Definizione Array Variabil

$var=array(
     'pag'    => 'home'  // variabile di sezione Sezione Sito
    ,'er'      => '&nbsp;'  // variabile di errore
    ,'idx'     => array (  // variabile di randomizzazione per l'index
                       'gon'    =>  true   //Variabile primo giro
                      ,'round'  =>  0      //Variabile reset
                      )
 	);

// Definizioni Status
$statz=array(
     'num'   => 7 
    ,'tipi'  => array('boss','webber','traduttori','clienti')
    ,'boss'  => array(   'all'       =>  true     // tipo accesso completo
                        ,'webTxt'    =>  true     // accesso al testo sito
                        ,'lingue'    =>  true     // modelli di fatture od oggetti
                        ,'video'     =>  true     // liste di hotel o fatture o camere etc etc
                        ,'testi'     =>  true     // prenotazioni
                        ,'g'     =>  true     // file da fare download.. esempio pdf disoccupazione
                        ,'site'      =>  true     // aggiunta pezzi di sito, esempio descrizione pdf disoccupazione
                        ,'langz'     =>  true     // modifica lingue
                        ,'privez'    =>  true     // modifica privilegi
                        ,'typz'      =>  true     // modifica typologie es campeggi od hotel
                        ,'user'      =>  true     // modifica user
                        ,'webTxt'    =>  true    // modifica testo del sito in fase di costruzione o modifica solo per WEBBER
                        )
    ,'webber'=> array(   'all'       =>  true     // tipo accesso completo
                        ,'billingz'  =>  false    // fatture
                        ,'modelz'    =>  true     // modelli di fatture od oggetti
                        ,'list'      =>  true     // liste di hotel o fatture o camere etc etc
                        ,'bookz'     =>  false    // prenotazioni
                        ,'filez'     =>  true     // file da fare download.. esempio pdf disoccupazione
                        ,'site'      =>  true     // aggiunta pezzi di sito, esempio descrizione pdf disoccupazione
                        ,'langz'     =>  true     // modifica lingue
                        ,'privez'    =>  true     // modifica privilegi
                        ,'objz'      =>  false    // modifica camere o piazzole o altro
                        ,'shopz'     =>  true    // modifica strutture
                        ,'typz'      =>  true     // modifica typologie es campeggi od hotel
                        ,'user'      =>  true     // modifica user
                        ,'modLang'   =>  true     // Aggiunge e rimuove lingue
                        ,'webTxt'    =>  true     // modifica testo del sito in fase di costruzione o modifica solo per WEBBER
                        ,'ccred'     =>  false)   // visione carta credito cliente
    ,'traduttori'=> array( 'all'     =>  false    // tipo accesso parziale
                        ,'billingz'  =>  false    // fatture
                        ,'modelz'    =>  false    // modelli di fatture od oggetti
                        ,'list'      =>  false    // liste di hotel o fatture o camere etc etc
                        ,'bookz'     =>  false    // prenotazioni
                        ,'filez'     =>  false    // file da fare download.. esempio pdf disoccupazione
                        ,'site'      =>  false    // aggiunta pezzi di sito, esempio descrizione pdf disoccupazione
                        ,'langz'     =>  true     // modifica lingue
                        ,'privez'    =>  false    // modifica privilegi
                        ,'objz'      =>  false     // modifica camere o piazzole o altro
                        ,'shopz'     =>  false    // modifica strutture
                        ,'typz'      =>  false    // modifica typologie es campeggi od hotel
                        ,'user'      =>  false    // modifica user
                        ,'modLang'   =>  false    // Aggiunge e rimuove lingue
                        ,'webTxt'    =>  false    // modifica testo del sito in fase di costruzione o modifica solo per WEBBER
                        ,'ccred'     =>  false)   // visione carta credito cliente
    ,'clienti'=>  array( 'all'       =>  false    // tipo accesso parziale
                        ,'billingz'  =>  false    // fatture
                        ,'modelz'    =>  false    // modelli di fatture od oggetti
                        ,'list'      =>  false    // liste di hotel o fatture o camere etc etc
                        ,'bookz'     =>  true     // prenotazioni
                        ,'filez'     =>  false    // file da fare download.. esempio pdf disoccupazione
                        ,'site'      =>  false    // aggiunta pezzi di sito, esempio descrizione pdf disoccupazione
                        ,'langz'     =>  false    // modifica lingue
                        ,'privez'    =>  false    // modifica privilegi
                        ,'objz'      =>  false    // modifica camere o piazzole o altro
                        ,'shopz'     =>  false    // modifica strutture
                        ,'typz'      =>  false    // modifica typologie es campeggi od hotel
                        ,'user'      =>  false    // modifica user
                        ,'modLang'   =>  false    // Aggiunge e rimuove lingue
                        ,'webTxt'    =>  false    // modifica testo del sito in fase di costruzione o modifica solo per WEBBER
                        ,'ccred'     =>  true )   // visione carta credito cliente
    );

?>
