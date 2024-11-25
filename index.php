<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>BIENVENIDO AL SISTEMA DE PRUEBA</h1>

        <!-- Formulario de login que manda los datos a login.php -->
        <form method="POST" action="login.php">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" required><br><br>

            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" required><br><br>

            <button type="submit">Iniciar sesión</button>
        </form>

        <!-- Botón para redirigir al formulario de registro -->
        <a href="registro.php" class="register-button">No posee cuenta? REGISTRESE</a>
    </div>  
    
</body>
</html>

