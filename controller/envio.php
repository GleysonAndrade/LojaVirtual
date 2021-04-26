<?php
$to      = Config::EMAIL_USER;
$subject = 'Contato Loja Virtual';
$message =  'Email de ' .$_GET['txtName'] . "\r\n" .$_GET['txtMsg']; 
$dest = $_GET['txtEmail'];

$headers = "'From: " .$dest;

mail($to, $subject, $message, $headers);
?>
<script>alert('Email enviado com Sucesso!!')</script>
<meta http-equiv="refresh" content="0; url=contato">