
<?php
require_once(__DIR__ . '/../php/config/database.php');






class Usuario {
    public static function buscarPorCorreo($email) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute([":email" => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function registrar($nombre, $email, $password) {
        global $conn;

        if (self::buscarPorCorreo($email)) {
            return false;
        }

        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre, $email, $passwordHash]);
    }
}
?>
