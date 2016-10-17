<?php

// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
require("Template.class.php");


$tpl = new Template("layout.html");
$tpl->PAGATUAL = "Enviado";

$destino = "ottoniwillian@gmail.com";

$nome = $_POST['cpNomeEmpresa'];
$email = $_POST['cpEmail'];
$mensage = $_POST['txMensagem'];


$_POST['msg'] = 0;
if ($nome != "" && $email != "") {

      
    
    $mensagem = "<strong>Nome: </strong>" . $nome;  
    $mensagem .= "<br><strong>Email: </strong>" . $email;
    $mensagem .= "<br><strong>Mensagem: </strong>" . $mensage;

    $headers = "Content-Type:text/html; charset=UTF-8";
    $headers .= "From: dominio.com.br<sistema@wsolucoes.com.br>n"; //Vai ser mostrado que o email partiu deste email e seguido do nome
    $headers .= "X-Sender: <sistema@wsolucoes.com.br>n"; //email do servidor que enviou
    $headers .= "X-Mailer: PHP v" . phpversion() . "n";
    $headers .= "X-IP: " . $_SERVER['REMOTE_ADDR'] . "n";
    $headers .= "Return-Path: <no-reply@wsolucoes.com.br>n"; //caso a msg seja respondida vai para este email.
    $headers .= "MIME-Version: 1.0n";

    $envio = mail($destino, "Mensagem de: ".$nome, $mensagem, $headers);




// Adicionando mais um arquivo HTML 
    if ($envio) {
        $msg = 1;
        $_POST['nome'] = $nome;
        $_POST['email'] = $email;
        $_POST['msgPOST'] = $mensagem;
    } else {
        $msg = 2;
        $_POST['nome'] = $nome;
        $_POST['email'] = $email;
        $_POST['msgPOST'] = $mensagem;
    }
    $_POST['msg'] = $msg;
} else {
    $_POST['msg'] = 3;
    $_POST['nome'] = $nome;
    $_POST['email'] = $email;
    $_POST['msgPOST'] = $mensagem;
}
$tpl->addFile("CONTEUDO", "contato_.php");

$tpl->show();

