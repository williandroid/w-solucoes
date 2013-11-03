<?php

require("Template.class.php");

$tpl = new Template("layout.html");
$tpl->PAGATUAL = "Cadastro";

// Adicionando mais um arquivo HTML 
$tpl->addFile("CONTEUDO", "cadastro.html");

$tpl->show();
?>