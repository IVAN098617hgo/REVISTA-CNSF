<?php
    $destino="ivan3956@outlook.com";
    $nombre= $_POST["nombre"];
    $correo= $_POST["correo"];
    $asunto= $_POST["asunto"];
    $mensaje= $_POST["mensaje"];
    $contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\Asunto: " . $asunto . "\nMensaje: " . $mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location:contacto.html");
?>