<?php
$host = "localhost";
$dbname = "calendario_pediatrico";
$username = "root"; // Cambia si tienes otro usuario en MySQL
$password = ""; // Si tienes contraseña en MySQL, ponla aquí

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>