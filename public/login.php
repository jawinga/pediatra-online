<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
    <h1>Iniciar Sesión</h1>

    <?php if (isset($_SESSION["error"])): ?>
        <p style="color: red;"><?php echo $_SESSION["error"]; unset($_SESSION["error"]); ?></p>
    <?php endif; ?>
    <form action="/pediatra-online/app/controllers/LoginController.php" method="POST">
        <label>Email:</label>
        <input type="email" name="email" required><br>
        
        <label>Contraseña:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Iniciar sesión</button>
    </form>
    
    <p>¿No tienes una cuenta? <a href="signup.php">Regístrate aquí</a></p>
</body>
</html>