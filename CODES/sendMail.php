<?php

$to      = $var['email'];
$subject = $testo['common']['regUserChk'];
$message = 
$testo['common']['regUserChk'].' '.$var['name'].' '.$var['surname']. "\r\n".

;
$headers = 'From: '. $kar['mailConfirm'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


?>
