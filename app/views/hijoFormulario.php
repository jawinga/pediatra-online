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
    <link rel="stylesheet" href="../components/components.css">
    <link rel="stylesheet" href="../views/css/crearHijo.css">
    <link rel="stylesheet" href="../views/css/pageStyle.css">
    <link rel="stylesheet" href="../components/sin-hijos-banner/sin-hijos-banner.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="p-5">

     <a href="../views/inicio.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
        <polygon fill="#34495e" points="12.718 4.707 11.305 3.292 2.585 12 11.305 20.707 12.718 19.292 6.417 13 20 13 20 11 6.416 11 12.718 4.707"/>
        </svg>
        </a>

    <div class="container">

        <h1 class="titulo-crear-hijo">Registrar hijo o hija</h1>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>

        <form action="../controllers/guardarHijo.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del hijo/a:</label>
                <input type="text" name="nombre" id="nombre" class="input" required>
            </div>

            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="input" required>
            </div>

            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <select name="sexo" id="sexo" class="input" required>
                     <option value="">Selecciona una opción</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>

            </div>

            <div class="mb-3">

            <div class="avatar-options">
                <label>Elige un avatar:</label><br>
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <label class="avatar-label">
                        <input type="radio" class="avatar-radio" name="avatar" value="avatar-<?= $i ?>.png">
                            <img src="../views/img/avatars/avatar-<?= $i ?>.png" alt="Avatar <?= $i ?>" class="avatar-img" data-key="<?= $i ?>">
                    </label>
                <?php endfor; ?>
            </div>


            </div>


            <button type="submit" class="btn login btn-primary" id="guardar-hijo">Guardar</button>
            <a href="inicio.php" class="btn register btn-secondary" id="volver-inicio">Volver</a>
        </form>
    </div>


    <script src="../views/js/crearHijo.js"></script>
</body>
</html>
