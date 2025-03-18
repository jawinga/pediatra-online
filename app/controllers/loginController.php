<?php
require_once __DIR__ . "/../models/Usuario.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $usuario = Usuario::buscarPorCorreo($email);

    if ($usuario && password_verify($password, $usuario['password'])) {
        $_SESSION["usuario_id"] = $usuario["id"];
        $_SESSION["nombre_usuario"] = $usuario["nombre"];
        header("Location: ../../views/perfil.php");
    } else {
        $_SESSION["error"] = "Correo o contraseña incorrectos.";
        header("Location: ../../views/login.php");
    }
}
?>

