<?php

require("Template.class.php");

$tpl = new Template("layout.html");
$tpl->PAGATUAL = "Serviços";

// Adicionando mais um arquivo HTML 
$tpl->addFile("CONTEUDO", "servicosInformatica.html");

$tpl->show();
