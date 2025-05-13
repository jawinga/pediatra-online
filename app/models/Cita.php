<?php
require_once(__DIR__ . '/../../config/database.php');

class Cita {
    public static function crear($conn, $usuario_id, $hijo_id, $fecha, $tipo_vacuna, $centro_medico) {
        $titulo = "Vacuna: $tipo_vacuna";
        $stmt = $conn->prepare("INSERT INTO citas (usuario_id, hijo_id, fecha, tipo_vacuna, centro_medico, titulo) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$usuario_id, $hijo_id, $fecha, $tipo_vacuna, $centro_medico, $titulo]);
    }

    public static function obtenerPorUsuario($conn, $usuario_id) {
        $stmt = $conn->prepare("SELECT fecha, titulo FROM citas WHERE usuario_id = ?");
        $stmt->execute([$usuario_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function obtenerProximaCitaPorHijo($conn, $hijo_id) {
        $stmt = $conn->prepare("SELECT fecha FROM citas WHERE hijo_id = ? AND fecha >= NOW() ORDER BY fecha ASC LIMIT 1");
        $stmt->execute([$hijo_id]);
        return $stmt->fetchColumn();
    }
    

}
?>

