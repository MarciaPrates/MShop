<?php


$to = $_GET['janynascimento1988@gmail.com'];
$subject = 'Contato | Loja M-Shop';
$message = 'Email de: '.$_GET['nome']. "\r\n""\r\n" .$_GET['mensagem'];
$dest = $_GET['email'];

$headers = "From: " .$dest;

mail($to, $subject, $message, $headers);


?>

<script>alert('Email enviado com sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contato">