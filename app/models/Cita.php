<?php
require_once __DIR__ . '/../config/database.php';
// 👈 Conexión a la BD

class Cita {
    public static function obtenerPorUsuario($usuario_id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM citas WHERE usuario_id = ?");
        $stmt->execute([$usuario_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>

