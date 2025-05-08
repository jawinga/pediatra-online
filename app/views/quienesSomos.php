<?php
    session_start();
?>

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

    <title>Quiénes somos</title>
    <link rel="stylesheet" href="./css/pageStyle.css">

</head>
<body>
    
    <header><?php include('../components/navbar.php'); ?></header>

    <section class="hero">
        <h1>¿Quiénes somos?</h1>
        <p>Conoce el equipo detrás de PediVax.</p>
    </section>
    
    <section class="info">
        <div class="info-content">
            <h2>Nuestro equipo</h2>
            <p>Somos un grupo de compañeros expertos en el sector de desarrollo web respaldados por los mejores profesionales del sector de la salud, especializados tanto en vacunas
                como en pediatría
            </p>
        </div>
        <div class="info-image">
            <img src="https://via.placeholder.com/400x300?text=Niño+vacunado" alt="Vacunación infantil">
        </div>
    </section>

    <section class="info">
        <div class="info-content">
            <h2>Nuestra misión</h2>
            <p>El cuidado de los más pequeños de la casa es algo complicado, por ello nos hemos querido comprometer a facilitar a los padres el seguimiento de las vacunas y citas
                médicas para sus hijos.
            </p>
        </div>
        <div class="info-image">
            <img src="https://via.placeholder.com/400x300?text=Calendario" alt="Calendario de vacunación">
        </div>
    </section>

    <section class="info">
        <div class="info-content">
            <h2>Seguridad comprobada</h2>
            <p>Las vacunas pasan por rigurosas pruebas. Menos del 0.01% experimenta efectos secundarios graves. Los beneficios superan ampliamente los riesgos potenciales.</p>
        </div>
        <div class="info-image">
            <img src="https://via.placeholder.com/400x300?text=Seguridad" alt="Seguridad de vacunas">
        </div>
    </section>

    <section class="info">
        <div class="info-content">
            <h2>Protección colectiva</h2>
            <p>Cuando el 95% de la población está vacunada, se logra inmunidad de grupo. Esto protege a quienes no pueden vacunarse por razones médicas.</p>
        </div>
        <div class="info-image">
            <img src="https://via.placeholder.com/400x300?text=Comunidad" alt="Protección colectiva">
        </div>
    </section>

    <section class="embed-carousel">
        <div class="div-carousel">
            <iframe src="./carousel.html" width="50%" height="700px" frameborder="0"></iframe>
        </div>
    </section>

    <section class="info">
        <div class="info-content">
            <h2>Seguridad comprobada</h2>
            <p>Las vacunas pasan por rigurosas pruebas. Menos del 0.01% experimenta efectos secundarios graves. Los beneficios superan ampliamente los riesgos potenciales.</p>
        </div>
        <div class="info-image">
            <img src="https://via.placeholder.com/400x300?text=Seguridad" alt="Seguridad de vacunas">
        </div>
    </section>

    <script src="./js/pages.js"></script>

    <?php include('../components/footer.php'); ?>

</body>
</html>
