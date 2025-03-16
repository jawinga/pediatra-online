<?php
require_once __DIR__ . "/../models/Usuario.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (Usuario::actualizar($id, $nombre, $email, $password)) {
        $_SESSION["mensaje"] = "Usuario actualizado con éxito.";
        header("Location: ../../views/lista_usuarios.php"); // Redirige a la lista de usuarios
    } else {
        $_SESSION["error"] = "Error al actualizar el usuario.";
        header("Location: ../../views/editar_usuario.php?id=" . $id); // Redirige al formulario de edición
    }
} else if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuario = Usuario::buscarUsuarioPorId($id); // Debes implementar esta función en el modelo
    // Muestra el formulario de edición con los datos del usuario
}
?>