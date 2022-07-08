<?php
$name = $_POST['name'];
$mail = $_POST['mail'];

$header = 'Form: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message = "Su correo es: " . $mail . " \r\n";

$para = 'benjamin.adelaido.guajardo.vargas@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>