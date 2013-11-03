<?php

require("Template.class.php");

$tpl = new Template("layout.html");
$tpl->PAGATUAL = "Cadastro Juridica";

// Adicionando mais um arquivo HTML 
$tpl->addFile("CONTEUDO", "cadastro-empresa.html");

$tpl->show();
?>