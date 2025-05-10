<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar hijo o hija</title>
    <link rel="stylesheet" href="../css/form.css"> <!-- opcional -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

    <div class="container">
        <h1 class="mb-4">Registrar hijo o hija</h1>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>

        <form action="../controllers/guardarHijo.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del hijo/a:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <select name="sexo" id="sexo" class="form-select" required>
                     <option value="">Selecciona una opción</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>

            </div>

            <div class="mb-3">

            </div>


            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="inicio.php" class="btn btn-secondary">Volver</a>
        </form>
    </div>

</body>
</html>
