<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/pediatra-online/config/config.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <!--Bootstraps icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <title>Contacto</title>
    <link rel="stylesheet" href="../css/calendario.css">
</head>
<body>

<!-- Navbar -->
<header><?php include($_SERVER['DOCUMENT_ROOT'] . '/pediatra-online/app/components/navbar.php'); ?></header>

<section class="hero text-center py-5 bg-light">
  <div class="container">
    <i class="fas fa-syringe fa-3x text-primary mb-4"></i>
    <h1 class="display-4 fw-bold">Calendario de Vacunación</h1>
    <p class="lead mb-4">
  Consulta las fechas y tipos de vacunas recomendadas para cada etapa de la vida.
</p>

    <a href="https://vacunasaep.org/profesionales/calendario-de-vacunaciones-e-inmunizaciones-aep-2025" class="btn btn-primary btn-lg">Ver Calendario</a>
  </div>
</section>

<!-- Botones de edad y calendario -->
<div class="container mt-5">
  <h2 class="mb-4">📌 Explora las vacunas según la edad</h2>
  <div class="row justify-content-center">
    <div class="col-auto mb-2">
      <a href="/app/views/calendario/vacunas/vacunas.php?edad=2" class="btn btn-outline-primary btn-lg">2 meses</a>
    </div>
    <div class="col-auto mb-2">
      <a href="/app/views/calendario/vacunas/vacunas.php?edad=4" class="btn btn-outline-success btn-lg">4 meses</a>
    </div>
    <div class="col-auto mb-2">
      <a href="/app/views/calendario/vacunas/vacunas.php?edad=6" class="btn btn-outline-info btn-lg">6 meses</a>
    </div>
    <div class="col-auto mb-2">
      <a href="/app/views/calendario/vacunas/vacunas.php?edad=9" class="btn btn-outline-warning btn-lg">9 meses</a>
    </div>
    <div class="col-auto mb-2">
      <a href="/app/views/calendario/vacunas/vacunas.php?edad=11" class="btn btn-outline-warning btn-lg">11 meses</a>
    </div>
    <div class="col-auto mb-2">
      <a href="/app/views/calendario/vacunas/vacunas.php?edad=12" class="btn btn-outline-danger btn-lg">12 meses</a>
    </div>
  </div>
</div>


  <!-- Calendario visual decorativo -->
  <div class="container mt-5">
    <h3 class="mb-3">🗓️ Vista general del calendario de vacunación</h3>
    <img src="./img/tabla.jpg" class="img-fluid shadow-lg rounded" alt="Calendario vacunas AEP 2025">
    <p class="text-muted mt-2">Fuente: Asociación Española de Pediatría</p>
  </div>
    <script>
        //Genera el menú de hamburguesa y lo esconde si el dispositivo es demasiado grande.
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>

    <script src="../js/pages.js"></script>

    <?php include('../../components/footer.php'); ?>

</body>
</html>