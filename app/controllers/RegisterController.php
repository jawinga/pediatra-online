<?php
require_once __DIR__ . "/../models/Usuario.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $apellidos = trim($_POST['apellidos'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    if ($password !== $confirmPassword) {
        $_SESSION["error"] = "Las contraseñas no coinciden.";
        header("Location: /../pediatra-online/app/views/registro.php");
        exit();
    }

    if (Usuario::registrar($nombre, $apellidos, $email, $password)) {
        $_SESSION["mensaje"] = "Registro exitoso. Ahora puedes iniciar sesión.";
        header("Location: /../pediatra-online/app/views/login.php");
        exit();
    } else {
        $_SESSION["error"] = "El correo ya está registrado o ocurrió un error.";
        header("Location: /../pediatra-online/app/views/registro.php");
        exit();
    }
}
?>



