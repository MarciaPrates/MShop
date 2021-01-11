<?php


$to      = Config::EMAIL_USER;
$subject = 'Contato | M-Shop';
$message = 'Email de: '.$_GET['nome']. "\r\n";
$message = '~~~~~~~~~~~~~~~~ '. "\r\n";
$message = 'Mensagem: '.$_GET['mensagem'];
$dest = $_GET['email'];

$headers = "From: " .$dest;

mail($to, $subject, $message, $headers);


?>

<script>alert('Email enviado com sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contato">