<?php
session_start();
$conn = require __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/Hijo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['usuario_id'])) {
    $usuario_id = $_SESSION['usuario_id'];
    $nombre = trim($_POST['nombre']);
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $sexo = $_POST['sexo'];
    $avatar = $_POST['avatar'] ?? 'default-avatar.png';


    if (empty($nombre) || empty($fecha_nacimiento) || empty($sexo)) {
        $_SESSION['error'] = "Todos los campos (excepto avatar)son obligatorios.";
        header("Location: ../views/crearHijo.php");
        exit();
    }

    if (Hijo::crear($conn, $usuario_id, $nombre, $fecha_nacimiento, $sexo, $avatar)) {
        $_SESSION['mensaje'] = "Hijo/a registrado correctamente.";
    } else {
        $_SESSION['error'] = "Hubo un problema al guardar los datos.";
    }

    header("Location: ../views/inicio.php");
    exit();
} else {
    $_SESSION['error'] = "Acceso no autorizado.";
    header("Location: ../views/login.php");
    exit();
}
