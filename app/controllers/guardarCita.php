<?php
session_start();
require_once __DIR__ . '/../models/Cita.php';
require_once __DIR__ . '../../../config/database.php';

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($_SESSION['usuario_id'])) {
    echo json_encode(['success' => false, 'message' => 'No autenticado']);
    exit();
}

$usuario_id = $_SESSION['usuario_id'];
$hijo_id = $data['hijo_id']; 
$fecha_completa = $data['fecha']; 
$tipo_vacuna = $data['tipo_vacuna']; 
$centro_medico = $data['centro_medico']; 

// Llamar al modelo para guardar la cita
$ok = Cita::crear($conn, $usuario_id, $hijo_id, $fecha_completa, $tipo_vacuna, $centro_medico);

// Responder al frontend
echo json_encode(['success' => $ok]);
