<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "laspihora1@hotmail.com";
    $asunto = "Nuevo mensaje de contacto";
    $cuerpo = "Nombre: $nombre\nTeléfono: $telefono\nMensaje: $mensaje";

    mail($destinatario, $asunto, $cuerpo);
    echo "<script>alert('Mensaje enviado. Te contactaremos pronto.');window.location='index.html';</script>";
}
?>
