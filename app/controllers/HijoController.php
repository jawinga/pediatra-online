<?php
require_once __DIR__ . '../../models/Hijo.php';
require_once __DIR__ . '../../models/Cita.php';

class HijoController {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getHijosPorUsuario($usuario_id) {
        try {
            $hijos = Hijo::obtenerPorUsuario($this->conn, $usuario_id);
            $result = [];
            foreach ($hijos as $hijo) {
                $proximaCita = Cita::obtenerProximaPorHijo($this->conn, $hijo['id']);
                $result[] = [
                    'hijo' => $hijo,
                    'proximaCita' => $proximaCita
                ];
            }
            return $result;
        } catch (Exception $e) {
            return ['error' => 'Error al obtener los hijos: ' . $e->getMessage()];
        }
    }

    public function getPerfilHijo($hijo_id, $usuario_id) {
        try {
            $hijo = Hijo::obtenerPorId($this->conn, $hijo_id, $usuario_id);
            if (!$hijo) {
                return ['error' => 'Hijo no encontrado o no autorizado'];
            }
            $citas = Cita::obtenerPorHijo($this->conn, $hijo_id);
            return [
                'hijo' => $hijo,
                'citas' => $citas
            ];
        } catch (Exception $e) {
            return ['error' => 'Error al obtener el perfil del hijo: ' . $e->getMessage()];
        }
    }
}
?>