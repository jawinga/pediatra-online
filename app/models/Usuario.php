<?php



// 📌 Importamos la configuración de la base de datos desde `db.php`
require_once __DIR__ . "/../../config/db.php";
/*  🔍 Función para buscar un usuario por su correo en la base de datos.
 
  📌 Esta función se usa para verificar si un usuario existe antes de iniciar sesión.
  📌 Si el usuario existe, devuelve un array con sus datos.
  📌 Si no existe, devuelve `false`.
 
 */
function buscarUsuarioPorCorreo($correo) {
    global $conn; // ⚡ Usamos la conexión a la base de datos que está definida en `db.php`

    // 📌 Preparamos la consulta SQL para buscar un usuario con el correo proporcionado
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE correo = :correo");

    // 📌 Ejecutamos la consulta reemplazando `:correo` con el valor real del correo proporcionado
    $stmt->execute([":correo" => $correo]);

    // 📌 Obtenemos el resultado como un array asociativo y lo devolvemos
    // Si el usuario existe, devuelve sus datos. Si no, devuelve `false`
    return $stmt->fetch(PDO::FETCH_ASSOC);
}


?>