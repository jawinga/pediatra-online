<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calendario Pediátrico</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="logo"><img src="linkAlLogo" alt="PediVax"></div>
  <!-- Navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="calendario.php">Calendario Pediátrico</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <!-- Enlace directo a Vacunas -->
          <li class="nav-item">
          <a class="nav-link" href="vacunas/index.php?edad=2">Vacunas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="porquepvacunar.php">¿Por qué vacunar?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="preguntas.php">Preguntas frecuentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nicio.php">Inicio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenido -->
    <!-- Botones de edad y calendario -->
    <div class="container mt-5">
    <h2 class="mb-4">📌 Explora las vacunas según la edad</h2>
    <div class="row justify-content-center">
      <div class="col-auto mb-2">
        <a href="vacunas/index.php?edad=2" class="btn btn-outline-primary btn-lg">2 meses</a>
      </div>
      <div class="col-auto mb-2">
        <a href="vacunas/index.php?edad=4" class="btn btn-outline-success btn-lg">4 meses</a>
      </div>
      <div class="col-auto mb-2">
        <a href="vacunas/index.php?edad=6" class="btn btn-outline-info btn-lg">6 meses</a>
      </div>
      <div class="col-auto mb-2">
        <a href="vacunas/index.php?edad=11" class="btn btn-outline-warning btn-lg">11 meses</a>
      </div>
      <div class="col-auto mb-2">
        <a href="vacunas/index.php?edad=12" class="btn btn-outline-danger btn-lg">12 meses</a>
      </div>
    </div>
  </div>

  <!-- Calendario visual decorativo -->
  <div class="container mt-5">
    <h3 class="mb-3">🗓️ Vista general del calendario de vacunación</h3>
    <img src="./img/tabla.jpg" class="img-fluid shadow-lg rounded" alt="Calendario vacunas AEP 2025">
    <p class="text-muted mt-2">Fuente: Asociación Española de Pediatría</p>
  </div>
