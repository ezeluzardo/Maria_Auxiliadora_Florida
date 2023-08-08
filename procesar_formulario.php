<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $email = $_POST["exampleInputEmail1"];
    $consulta = $_POST["exampleFormControlTextarea1"];

    $to = "mariaauxiliadoraflorida@gmail.com"; 
    $subject = "Nuevo formulario de contacto";
    $message = "Nombre: $nombre $apellido\n";
    $message .= "Teléfono: $telefono\n";
    $message .= "Correo electrónico: $email\n";
    $message .= "Consulta: $consulta\n";

    // Envía el correo
    mail($to, $subject, $message);

    // Redirige a una página de éxito o muestra un mensaje
    header("./index.html");
}
?>
