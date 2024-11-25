<?php
// guardar_registro.php

// Incluir el archivo de conexión
include('db.php');

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];     // Obtener los datos del formulario
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    // Cifrar la contraseña para guardarla de forma segura
    $contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

    // Preparar la consulta SQL para insertar los datos
    $query = "INSERT INTO usuarios (username, email, password) VALUES ('$usuario', '$email', '$contraseña')";

    // Ejecutar la consulta
    if ($mysqli->query($query) === TRUE) {
        echo "<h2>Registro exitoso!</h2>";
        echo "<p><a href='index.php'>Volver al login</a></p>";
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
}

// Cerrar la conexión
$mysqli->close();
?>
