<?php

require("Template.class.php");

$tpl = new Template("layout.html");
$tpl->PAGATUAL = "Desenvolvimento";

// Adicionando mais um arquivo HTML 
$tpl->addFile("CONTEUDO", "desenvolvimento.html");

$tpl->show();
