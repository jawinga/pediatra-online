<?php
require_once __DIR__ . "/../../config/db.php"; // Incluye el archivo de configuración

class Usuario {
    public static function registrar($nombre, $email, $password) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        return $stmt->execute([$nombre, $email, $hashedPassword]);
    }

    public static function buscarUsuarioPorCorreo($email) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function actualizar($id, $nombre, $email, $password) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE usuarios SET nombre = ?, email = ?, password = ? WHERE id = ?");
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        return $stmt->execute([$nombre, $email, $hashedPassword, $id]);
    }

    public static function eliminar($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        return $stmt->execute([$id]);
    }

    // Agregar la función buscarUsuarioPorId
    public static function buscarUsuarioPorId($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Agregar la función obtenerTodos
    public static function obtenerTodos() {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM usuarios");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>