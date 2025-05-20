<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/pediatra-online/config/config.php'); ?>

<?php
    session_start();
    $isLoggedIn = isset($_SESSION['usuario_id']);

    require_once __DIR__ . '/../../config/database.php';
    require_once __DIR__ . '/../models/Hijo.php';
    require_once __DIR__ . '/../models/Cita.php';

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

    <!-- Navbar -->
    <header><?php include(__DIR__ . '/../components/navbar.php'); ?></header>

    <!-- Validación de sesión -->
    <?php
    

        /*if (!isset($_SESSION['usuario_id'])) {
             header("Location: login.php");
            exit();
        }

    $hijos = Hijo::obtenerPorUsuario($conn, $_SESSION["usuario_id"]);*/
    ?>

    <!-- Sección del banner principal -->
    <section class="hero">
        <div class="hero-content">
            <?php if ($isLoggedIn): ?>
                <h1 class="mb-4">¡Bienvenid@ a PediVax!</h1>
                <p>Aquí puedes consultar tu <strong>Calendario Personal </strong>para poder gestionar las citas de tu hij@. Para cualquier duda puedes ponerte en <a  class="text-pink" href="./contacto.php"
                >contacto </a>con nosotros</p>
                <div class="btn cta">
                    <a href="/pediatra-online/app/views/index.php" class="text-white">Calendario Personal</a>
                </div>
            <?php else: ?>        
                <h1 class="mb-4">PediVax, tu calendario de vacunación interactivo</h1>
                <p>¡Únete a más de <strong>1000 padres y madres </strong>satisfechos con nuestro servicio! La salud de los más pequeños de casa es <strong>nuestra prioridad.</strong></p>
                <div class="btn cta">
                    <a href="/pediatra-online/app/views/registro.php" class="text-white">¡Únete ahora!</a>
                </div>
            <?php endif; ?>

        </div>
        <div class="hero-image">
            <img src="./img/inicio-img/header inicio.png" alt="Madre con su hijo">
        </div>
    </section>




<?php


$hijos = [];
if ($isLoggedIn) {
    $hijos = Hijo::obtenerPorUsuario($conn, $_SESSION["usuario_id"]);
}?>

<section class="container-hijos gap-4">
    <?php if (empty($hijos)): ?>
        <?php include "../components/sin-hijos-banner/sin-hijos-banner.php" ?>
    <?php else: ?>
        <h1>Tus Hijos</h1>
        <div class="lista-hijos-inicio gap-4">


            <?php foreach ($hijos as $hijo): ?>
                <?php 
                    // Obtener la próxima cita para este hijo
                    $proximaCita = Cita::obtenerProximaPorHijo($conn, $hijo['id']);
                ?>
                <?php 
                    // Incluye la carta pasando ambas variables
                    // Importante: en hijo-carta.php usas $hijo y $proximaCita
                    include __DIR__ . '/../components/hijo-carta.php'; 
                ?>
            <?php endforeach; ?>

            <a href="hijoFormulario.php" class="btn btn-success btn-lg" style="height: fit-content;">
                <i class="bi bi-person-plus-fill"></i>
            </a>

        </div>
    <?php endif; ?>
</section>


    <!-- Sección del cuerpo general -->
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

    <!-- Sección del carrusel de vídeos -->
    <div class="mt-5">
        <h1 class= "mt-5">¡Aquí te dejamos vídeos de interés!</h1>
        <section class="embed-carousel">
            <div class="div-carousel">
                <iframe src="./carousel.html" width="50%" height="700px" frameborder="0"></iframe>
            </div>
        </section>
    </div>

    <!-- Sección razones y banner lateral -->
    <div class="container-xl mt-5">
        <div class="row">
            <div class="col-lg-8">
            <!-- Sección de por qué elegirnos -->
            <section class="py-5">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-auto">
                            <h2 class="fw-bold mb-3">¿Por qué usar PediVax?</h2>
                        </div>
                        <div class="col-md-auto">
                            <ul>
                                <li>✔ Más de 100 familias ya usan PediVax</li>
                                <li>✔ 1.200 eventos médicos gestionados</li>
                                <li>✔ 95% de usuarios satisfechos en encuestas</li>
                            </ul>
                        </div>
                        <div class="col-md-auto">
                            <img src="/pediatra-online/app/views/img/quienesSomos-img/medico-vacunando.png" alt="Blog PediVax" class="img-fluid rounded-3 mb-3" style="max-height: 180px;">
                        </div>
                        <div class="col-md-auto text-center mb-3">
                            ¿Sigues con dudas? ¡Contacta con nosotros totalmente <strong>gratis!</strong>
                        </div>
                        <div class="row">
                                <button class="btn btn-secondary w-100 mt-auto text-white">
                                    <a href="/pediatra-online/app/views/contacto.php">¡Tengo dudas!</a>
                                </button>

                        </div>
                    </div>
                </div>
            </section>
            </div>
            <div class="col-lg-4">
                    <!-- Banner lateral -->
                <aside class="blog-banner d-flex flex-column align-items-center p-3 shadow rounded-4">
                    <img src="/pediatra-online/app/views/img/quienesSomos-img/medico-vacunando.png" alt="Blog PediVax" class="img-fluid rounded-3 mb-3" style="max-height: 180px; object-fit: cover;">
                    <h5 class="fw-bold text-center text-pink">Descubre nuestros recursos</h5>
                    <p class="text-center small mb-3">Consejos pediátricos, artículos de expertos y contenido útil para padres y madres.</p>
                    <a href="/pediatra-online/app/views/recursos.php" class="btn btn-pink w-100 mt-auto">Ir al Blog</a>
                </aside>
            </div>
        </div>
    </div>


    <!-- Sección de FAQs -->
    <section class="faq my-5 mb-5 container-xl faq-container">
    <h2 class="text-center mb-4 text-pink fw-bold">
        <i class="bi bi-chat-dots-fill me-2"></i> Preguntas frecuentes
    </h2>
    <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq1-heading">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                    ¿PediVax es gratuito?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faq1-heading" data-bs-parent="#faqAccordion">
                <div class="accordion-body fw-bold">
                    Sí, PediVax es completamente gratuito para todas las familias. Solo necesitas registrarte para empezar a usarlo, aunque contamos con funcionalidades prémium.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq2-heading">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                    ¿Mis datos están seguros?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-heading" data-bs-parent="#faqAccordion">
                <div class="accordion-body fw-bold">
                    Totalmente. Cumplimos con el RGPD y todos tus datos médicos y personales están encriptados y protegidos.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq3-heading">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                    ¿Quién valida el contenido médico de la app?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-heading" data-bs-parent="#faqAccordion">
                <div class="accordion-body fw-bold">
                    Todo el contenido ha sido revisado por pediatras colegiados y expertos en vacunación infantil que colaboran con nosotros.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faq4-heading">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                    ¿Puedo llevar el control de más de un hijo?
                </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4-heading" data-bs-parent="#faqAccordion">
                <div class="accordion-body fw-bold">
                    Sí, puedes registrar y gestionar los calendarios de vacunación y citas médicas de varios hijos desde una misma cuenta.
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Sección de testimonios -->           
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
    
    <!-- Footer -->
    <?php include(__DIR__ . '/../components/footer.php'); ?>

</body>
</html>