<?php

require("Template.class.php");

$tpl = new Template("layout.html");
$tpl->PAGATUAL = "Hospedagem";

// Adicionando mais um arquivo HTML 
$tpl->addFile("CONTEUDO", "hospedagem.html");

$tpl->show();
