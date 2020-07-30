<?php

// Llamando a los campos

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $msg = $_POST['msg'];
    $email = $_POST['email'];

// Datos para el correo

    $destinatario = "nellybep@gmail.com";
    $asunto = "Contacto desde nuestra web";

    $carta = "De: $nombre \n";
    $carta = "Correo: $email \n";
    $carta = "Telefono: $telefono \n";
    $carta = "Mensaje: $msg";

// Enviando mensaje

mail($destinatario, $asunto, $carta);

?>
