<?php
// Conexión a la base de datos
include('db.php');

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];     // Obtener los datos del formulario
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Preparar la consulta SQL para insertar los datos
    $query = "INSERT INTO usuarios (usuario, correo, contraseña) VALUES ('$usuario', '$correo', '$contraseña')";

    // Ejecutar la consulta
    if ($mysqli->query($query) === TRUE) {
        echo "Nuevo registro insertado exitosamente";
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
}

// Cerrar la conexión
$mysqli->close();
?>


<html>
<body>
    <h1>Formulario de Registro</h1>
    <form method="POST" action="index.php">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required><br><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" required><br><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
