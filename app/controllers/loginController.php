<?php
session_start();
require_once __DIR__ . "/../models/Usuario.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $usuario = Usuario::buscarPorCorreo($email);

    if ($usuario && password_verify($password, $usuario['password_hash'])) {
        $_SESSION["usuario_id"] = $usuario["id"];
        $_SESSION["nombre_usuario"] = $usuario["nombre"];
        $_SESSION["apellido_usuario"] = $usuario["apellidos"]; 
        $_SESSION["mensaje"] = "¡Ha iniciado sesión!";
        session_write_close();

        // ✅ Redirige al inicio correctamente
        header("Location: ../views/inicio.php");
        exit();
    } else {
        $_SESSION["error"] = "Correo o contraseña incorrectos.";
        session_write_close();
        header("Location: ../views/login.php");
        exit();
    }
}
?>


