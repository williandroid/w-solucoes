<?php

require("Template.class.php");


$tpl = new Template("layout.html");
$tpl->PAGATUAL = "Home";

// Adicionando mais um arquivo HTML 
$tpl->addFile("CONTEUDO", "index__.html");

$tpl->show();
?>