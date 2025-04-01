<?php
require_once(__DIR__ . '/../../config/database.php');

class Usuario {
    public static function buscarPorCorreo($email) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = :email");
        $stmt->execute([":email" => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function registrar($nombre, $apellidos, $email, $password) {
        global $conn;
    
        if (self::buscarPorCorreo($email)) {
            return false;
        }
    
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO usuario (nombre, apellidos, email, password_hash) VALUES (?, ?, ?, ?)");
        
        if (!$stmt->execute([$nombre, $apellidos, $email, $passwordHash])) {
            $errorInfo = $stmt->errorInfo();
            error_log("Error al insertar: " . print_r($errorInfo, true));
            return false;
        }
        return true;
    }
    
}