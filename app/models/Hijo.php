<?php

require_once(__DIR__ . '/../../config/database.php');

class Hijo {
    public static function crear($conn, $usuario_id, $nombre, $fecha_nacimiento, $sexo, $avatar) {
        $stmt = $conn->prepare("INSERT INTO hijos (usuario_id, nombre, fecha_nacimiento, sexo, avatar) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$usuario_id, $nombre, $fecha_nacimiento, $sexo, $avatar]);
    }

    public static function obtenerPorUsuario($conn, $usuario_id) {
        $stmt = $conn->prepare("SELECT * FROM hijos WHERE usuario_id = ?");
        $stmt->execute([$usuario_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

  

}
?>
