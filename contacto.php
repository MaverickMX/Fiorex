<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$texto = $_POST['texto'];
$pais = $_POST['pais'];
$terminos = $_POST['terminos'];

$formcontent="
    Nombre: $nombre \n
    E-mail: $correo\n
    Mensaje: $texto\n
    Pais: $pais
";

$recipient = "jonathanmoreno996@gmail.com";

$subject = "$asunto";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");

?>