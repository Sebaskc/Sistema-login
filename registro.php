<!-- registro.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Formulario de Registro</h1>

        <!-- Formulario de registro -->
        <form method="POST" action="guardar_registro.php">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" required><br><br>

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" required><br><br>

            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" required><br><br>

            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
