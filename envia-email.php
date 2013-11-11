<?php

require("Template.class.php");

$tpl = new Template("layout.html");
$tpl->PAGATUAL = "Contato";

$to = 'ottoniwillian@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

// Adicionando mais um arquivo HTML 
$tpl->addFile("CONTEUDO", "index.html");

$tpl->show();
?>
