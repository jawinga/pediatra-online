<?php
require_once __DIR__ . "/../models/Usuario.php"; //  Importa el modelo Usuario
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($nombre) || empty($email) || empty($password)) {
        $_SESSION["error"] = "Todos los campos son obligatorios.";
        header("Location: ../../views/registro.php");
        exit();
    }

    if (Usuario::registrar($nombre, $email, $password)) { //  Usa la clase Usuario
        $_SESSION["mensaje"] = "Registro exitoso. Inicia sesión.";
        header("Location: ../../views/login.php");
    } else {
        $_SESSION["error"] = "Error al registrar el usuario.";
        header("Location: ../../views/registro.php");
    }
}
?>

