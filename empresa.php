<?php

require("Template.class.php");

$tpl = new Template("layout.html");
$tpl->PAGATUAL = "Empresa";

// Adicionando mais um arquivo HTML 
$tpl->addFile("CONTEUDO", "empresa.html");

$tpl->show();
?>