<?php
// inicio.php

// Iniciar sesión
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    // Si no está autenticado, redirigir al login
    header("Location: index.php");
    exit();
}

// Obtener el nombre de usuario de la sesión
$usuario = $_SESSION['usuario'];

// Mostrar el mensaje de bienvenida con el nombre de usuario
echo '<div class="welcome-message">';
echo 'Bienvenido al sistema, Señor/a: ' . htmlspecialchars($usuario);
echo '</div>';
echo "<a href='logout.php'>Cerrar sesión</a>";
?>
