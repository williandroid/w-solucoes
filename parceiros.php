<?php

require("Template.class.php");

$tpl = new Template("layout.html");
$tpl->PAGATUAL = "Parceiros";

// Adicionando mais um arquivo HTML 
$tpl->addFile("CONTEUDO", "parceiros.html");

$tpl->show();
