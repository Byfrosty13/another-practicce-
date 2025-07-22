<?php
// Recibir datos del formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

// Mostrar datos en pantalla (puede ser opcional o para debug)
echo "<h2>Gracias por contactarnos, $nombre</h2>";
echo "<p><strong>Correo:</strong> $email</p>";
echo "<p><strong>Teléfono:</strong> $telefono</p>";
echo "<p><strong>Asunto:</strong> $asunto</p>";
echo "<p><strong>Mensaje:</strong> $mensaje</p>";

echo '<a href="../HTML/contactenos.html"><button>Volver al formulario</button></a>';
?>
