<?php

require("Template.class.php");

$tpl = new Template("layout.html");
$tpl->PAGATUAL = "Contato";
// Adicionando mais um arquivo HTML 

$tpl->addFile("CONTEUDO", "contato.html");

$tpl->show();
?>