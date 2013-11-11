<?php
// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.

$destino = "ottoniwillian@gmail.com";

$nome = $_POST['cpNomeEmpresa'];
$email = $_POST['cpEmail'];

$mensagem = "<strong>Nome: </strong>".$nome;
$mensagem .= "<br><strong>Mensagem: </strong>".$_POST['cpMensagem'];

$headers = "Content-Type:text/html; charset=UTF-8n";
$headers .= "From: dominio.com.br<sistema@wsolucoes.com.br>n"; //Vai ser mostrado que o email partiu deste email e seguido do nome
$headers .= "X-Sender: <sistema@wsolucoes.com.br>n"; //email do servidor que enviou
$headers .= "X-Mailer: PHP v".phpversion()."n";
$headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."n";
$headers .= "Return-Path: <no-reply@wsolucoes.com.br>n"; //caso a msg seja respondida vai para este email.
$headers .= "MIME-Version: 1.0n";

$envio = mail($destino, "Assunto", $mensagem, $headers);
 
if($envio)
 echo "Mensagem enviada com sucesso".$nome .$email . $mensagem. $headers;
else
 echo "A mensagem não pode ser enviada";
?>