<?php
// login.php

// Incluir el archivo de conexión
include('db.php');

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario']; // Obtener el nombre de usuario
    $contraseña = $_POST['contraseña']; // Obtener la contraseña

    // Preparar la consulta SQL para buscar al usuario en la base de datos
    $query = "SELECT * FROM usuarios WHERE username = '$usuario'";

    // Ejecutar la consulta
    $result = $mysqli->query($query);

    // Verificar si el usuario existe
    if ($result->num_rows > 0) {
        // El usuario existe, obtener los datos
        $row = $result->fetch_assoc();
        
        // Verificar si la contraseña es correcta
        if (password_verify($contraseña, $row['password'])) {
            // Iniciar sesión
            session_start();
            $_SESSION['usuario'] = $usuario; // Almacenar el usuario en la sesión

            // Redirigir a la página de inicio 
            header("Location: inicio.php");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "El usuario no existe.";
    }
}

// Cerrar la conexión
$mysqli->close();
?>
