<?php
$host = "localhost";
$user = "root"; // Cambia si tienes un usuario diferente
$password = ""; // Cambia si tienes una contraseña
$dbname = "laboratoria-12";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>