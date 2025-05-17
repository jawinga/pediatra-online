<?php
session_start();
require_once __DIR__ . '../../../config/database.php';

if (!isset($_SESSION['usuario_id'])) {
    header('Location: ../views/login.php');
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$nombre = trim($_POST['nombre']);
$apellidos = trim($_POST['apellidos']);

if ($nombre && $apellidos) {
    $stmt = $conn->prepare("UPDATE usuario SET nombre = ?, apellidos = ? WHERE id = ?");
    $success = $stmt->execute([$nombre, $apellidos, $usuario_id]);

    if ($success) {
        $_SESSION['nombre_usuario'] = $nombre;
        $_SESSION['apellido_usuario'] = $apellidos;
        $_SESSION['mensaje'] = "Perfil actualizado correctamente.";
    } else {
        $_SESSION['error'] = "Error al actualizar el perfil.";
    }
}

header('Location: ../views/perfil.php');
exit();
