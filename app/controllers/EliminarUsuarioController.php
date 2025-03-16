<?php
require_once __DIR__ . "/../models/Usuario.php";
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (Usuario::eliminar($id)) {
        $_SESSION["mensaje"] = "Usuario eliminado con éxito.";
    } else {
        $_SESSION["error"] = "Error al eliminar el usuario.";
    }
    header("Location: ../../views/lista_usuarios.php"); // Redirige a la lista de usuarios
}
?>