<?php
require_once __DIR__ . "/../models/Usuario.php"; //  Importa el modelo Usuario
require_once __DIR__ . "/../../config/db.php"; //  Importa la configuración de la base de datos
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $usuario = Usuario::buscarUsuarioPorCorreo($email); //  Usa la clase Usuario

    if ($usuario && password_verify($password, $usuario['password'])) {
        $_SESSION["usuario_id"] = $usuario["id"];
        $_SESSION["nombre_usuario"] = $usuario["nombre_usuario"];
        $_SESSION["avatar"] = $usuario["avatar"];

        header("Location: ../views/perfil.php");
        exit();
    } else {
        $_SESSION["error"] = "Correo o contraseña incorrectos.";
        header("Location: ../views/login.php");
        exit();
    }
}
?>
