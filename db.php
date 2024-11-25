<?php
$host = 'localhost';
$dbname = 'sistema_login';
$username = 'root';
$password = '';

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}
?>