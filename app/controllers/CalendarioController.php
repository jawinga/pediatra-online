<?php
require_once __DIR__ . "/../models/Usuario.php"; // 👈 Importa el modelo
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action'])) {
    if ($_GET['action'] == "obtenerCitas") {
        obtenerCitas();
    }
}

function obtenerCitas() {
    if (!isset($_SESSION["usuario_id"])) {
        echo json_encode([]);
        exit;
    }

    $usuario_id = $_SESSION["usuario_id"];
    $citas = Cita::obtenerPorUsuario($usuario_id); // 👈 Aquí usa la clase Cita

    $eventos = [];
    foreach ($citas as $cita) {
        $eventos[] = [
            "title" => $cita["titulo"],
            "start" => $cita["fecha"] . "T" . $cita["hora"],
            "description" => $cita["descripcion"]
        ];
    }

    echo json_encode($eventos);
}
?>
