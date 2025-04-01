<?php
$host = "localhost";
$dbname = "calendario-pediatra"; // <- Aquí está el cambio importante
$username = "root"; // Cambia si usas otro usuario en MySQL
$password = ""; // Añade tu contraseña si la tienes

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Se ha conectado con la BBDD";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
