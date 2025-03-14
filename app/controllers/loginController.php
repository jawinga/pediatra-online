<?php

// 📌 Importamos la configuración de conexión a la base de datos
require_once __DIR__ . "/../../config/db.php";

// 📌 Importamos el modelo `Usuario.php` para obtener los datos del usuario desde la base de datos
require_once __DIR__ . "/../../app/models/Usuario.php";

// 📌 Iniciamos una sesión para almacenar información del usuario después de iniciar sesión
session_start();

/**
 * 🔍 Verificamos si la solicitud es de tipo `POST`
 * 
 * - Esto asegura que el script solo se ejecute cuando se envíe el formulario de inicio de sesión.
 * - Si alguien intenta acceder a este archivo directamente en el navegador, no hará nada.
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // 📌 Obtenemos el correo electrónico y eliminamos espacios en blanco al inicio y final
    $email = trim($_POST['email']);

    // 📌 Obtenemos la contraseña ingresada en el formulario
    $password = $_POST['password'];

    // 📌 Buscamos al usuario en la base de datos usando su correo electrónico
    $usuario = buscarUsuarioPorCorreo($email);

    /**
     * 🔑 Verificamos si el usuario existe y si la contraseña ingresada coincide con la almacenada
     * 
     * - `password_verify()` compara la contraseña ingresada con la contraseña hasheada en la base de datos.
     * - Si coinciden, el usuario es autenticado correctamente.
     */
    if ($usuario && password_verify($password, $usuario['password'])) {

        // 📌 Almacenamos la información del usuario en la sesión
        $_SESSION["usuario_id"] = $usuario["id"];
        $_SESSION["nombre_usuario"] = $usuario["nombre_usuario"];
        $_SESSION["avatar"] = $usuario["avatar"];

        // 📌 Redirigimos al usuario a la página de perfil después de iniciar sesión exitosamente
        header("Location: ../views/perfil.php");
        exit();

    } else {
        // ❌ Si el correo o la contraseña son incorrectos, mostramos un mensaje de error

        // 📌 Guardamos el mensaje de error en la sesión para mostrarlo en la vista de login
        $_SESSION["error"] = "Correo o contraseña incorrectos.";

        // 📌 Redirigimos de vuelta a la página de inicio de sesión
        header("Location: ../views/loginView.php");
        exit();
    }
}

?>
