<?php
// logout.php

// Iniciar sesión
session_start();

// Eliminar la sesión
session_unset();
session_destroy();

// Redirigir al login
header("Location: index.php");
exit();
?>
