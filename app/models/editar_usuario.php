<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="../app/controllers/EditarUsuarioController.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required><br>
        <label>Contraseña:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>