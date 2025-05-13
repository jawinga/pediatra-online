<?php
    session_start();
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../components/components.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../components/sin-hijos-banner/sin-hijos-banner.css">

    <title>PediVax</title>
    <link rel="stylesheet" href="./css/pageStyle.css">

</head>
<body>
    
    <header><?php include(__DIR__ . '/../components/navbar.php'); ?></header>
    
    <section class="hero">
        <div class="hero-content">
            <h1 class="mb-4">PediVax, tu calendario de vacunación interactivo</h1>
            <p>¡Únete a más de <strong>1000 padres y madres </strong>satisfechos con nuestro servicio! La salud de los más pequeños de casa es <strong>nuestra prioridad.</strong></p>
            <button class="btn cta">¡Únete ahora!</button>
        </div>
        <div class="hero-image">
            <img src="./img/inicio-img/header inicio.png" alt="Madre con su hijo">
        </div>
    </section>

    

    <?php
        require_once __DIR__ . '/../../config/database.php';
        require_once __DIR__ . '/../models/Hijo.php';

        /*if (!isset($_SESSION['usuario_id'])) {
             header("Location: login.php");
            exit();
        }*/

    $hijos = Hijo::obtenerPorUsuario($conn, $_SESSION["usuario_id"]);
    ?>

    <section class="container-hijos gap-4">
        <?php if (empty($hijos)): ?>
         <?php include "../components/sin-hijos-banner/sin-hijos-banner.php" ?>
        <?php else: ?>
            <h1>Tus Hijos</h1>
            <div class="lista-hijos-inicio d-flex align-items-center gap-4">

            <?php foreach ($hijos as $hijo): ?>
            <?php include __DIR__ . '/../components/hijo-carta.php'; ?>
            <?php endforeach; ?>
            <a href="hijoFormulario.php" class="btn btn-success btn-lg" style="height: fit-content;">
                <i class="bi bi-person-plus-fill"></i>
            </a>

            </div>
            
        <?php endif; ?>
        </section>

    
    <section class="info">
        <div class="info-content">
            <h2 class="text-pink">Importancia de la vacunación infantil</h2>
            <p class="text-white">Las vacunas previenen enfermedades peligrosas. Según la OMS, evitan 2-3 millones de muertes anuales. La inmunización completa protege a los niños y a toda la comunidad.</p>
        </div>
        <div class="info-image">
            <img src="./img/inicio-img/vacunacion.png" alt="Vacunación infantil">
        </div>
    </section>

    <section class="info">
        <div class="info-content">
            <h2>Calendario de vacunación</h2>
            <p>Nuestro calendario sigue las recomendaciones de la Asociación Española de Pediatría. Incluye todas las vacunas desde el nacimiento hasta la adolescencia con recordatorios automáticos.</p>
        </div>
        <div class="info-image">
            <img src="./img/inicio-img/calendario vacunacion.png" alt="Calendario de vacunación">
        </div>
    </section>

    <section class="info">
        <div class="info-content">
            <h2 class="text-pink">Seguridad comprobada</h2>
            <p class="text-white">Las vacunas pasan por rigurosas pruebas. Menos del 0.01% experimenta efectos secundarios graves. Los beneficios superan ampliamente los riesgos potenciales.</p>
        </div>
        <div class="info-image">
            <img src="./img/inicio-img/seguridad vacunacion.png" alt="Seguridad de vacunas">
        </div>
    </section>

    <div class="mt-5">
        <h1 class= "mt-5">¡Aquí te dejamos vídeos de interés!</h1>
        <section class="embed-carousel">
            <div class="div-carousel">
                <iframe src="./carousel.html" width="50%" height="700px" frameborder="0"></iframe>
            </div>
        </section>
    </div>

    <div class="d-flex justify-content-center">
        <div id="testimonialCarousel" class="carousel slide w-100" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="p-4 text-center">
                        <p class="fs-5 fst-italic">“Una experiencia maravillosa para los padres primerizos. ¡Muy recomendable!”</p>
                        <h5 class="mt-3">– María G.</h5>
                        <div class="mb-2 slider-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>     
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="p-4 text-center">
                        <p class="fs-5 fst-italic">“Gracias a PediVax, no se me olvida ni una sola vacuna. ¡Genial!”</p>
                        <h5 class="mt-3">– Javier L.</h5>
                        <div class="mb-2 slider-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="p-4 text-center">
                        <p class="fs-5 fst-italic">“Me encanta el diseño y lo fácil que es usarlo.”</p>
                        <h5 class="mt-3">– Laura P.</h5>
                        <div class="mb-2 slider-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>     
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    <script src="./js/pages.js"></script>

    <?php include(__DIR__ . '/../components/footer.php'); ?>

</body>
</html>
