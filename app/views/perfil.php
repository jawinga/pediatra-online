<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../components/components.css">
    <link rel="stylesheet" href="../views/css/perfil.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../components/sin-hijos-banner/sin-hijos-banner.css">
    <title>PediVax</title>
    <link rel="stylesheet" href="./css/pageStyle.css">

</head>
<body>

<?php include('../components/navbar.php'); ?>

<section class="perfil-container container">
  <h2>Mi perfil</h2>

  <div class="perfil-card">
    <i class="bi bi-person-circle perfil-icon"></i>

    <div class="perfil-info">
      <p><strong>Nombre:</strong> <?= htmlspecialchars($_SESSION['nombre_usuario']) ?></p>
      <p><strong>Apellidos:</strong> <?= htmlspecialchars($_SESSION['apellido_usuario'] ?? 'No disponible') ?></p>
      <p><strong>Email:</strong> <?= htmlspecialchars($_SESSION['email_usuario'] ?? 'No disponible') ?></p>
    </div>
  </div>

  <a href="editarPerfil.php" class="auth-buttons">Editar perfil</a>
</section>
    
</body>
</html>