<?php

require("Template.class.php");

$tpl = new Template("layout.html");
$tpl->PAGATUAL = "Login";

// Adicionando mais um arquivo HTML 
$tpl->addFile("CONTEUDO", "login.html");

$tpl->show();
?>