<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Registro</h1>

    <form action="../app/controllers/RegisterController.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Registrarse</button>
    </form>

    <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>
</body>
</html>
