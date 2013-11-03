<?php

require("Template.class.php");

$tpl = new Template("layout.html");
$tpl->PAGATUAL = "Contato";
// Adicionando mais um arquivo HTML 

$to      = 'ottoniwillian@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com'."\r\n" .
    'Reply-To: webmaster@example.com'."\r\n" .
    'X-Mailer: PHP/'.phpversion();

mail($to, $subject, $message, $headers);

$tpl->addFile("CONTEUDO", "contato.html");

$tpl->show();
?>