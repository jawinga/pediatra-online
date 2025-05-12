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
    
    <header><?php include(__DIR__ . '/../components/navbar.php'); ?></header>

    <section class="hero">
        <h1>¿Quiénes somos?</h1>
        <p>Conoce el equipo detrás de PediVax.</p>
    </section>
    
    <section class="info">
        <div class="info-content">
            <h2>Nuestro equipo</h2>
            <p>Somos un grupo de expertos en el sector de desarrollo web respaldados por los mejores profesionales del sector de la salud, especializados tanto en vacunas
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
        <h2>¿Quién está detrás de PediVax?</h2>
        <p>Somos un equipo multidisciplinar formado por desarrolladores web apasionados por la tecnología y profesionales del sector sanitario, especialmente en el ámbito de la pediatría y la vacunación. Nuestra misión es facilitar a las familias el seguimiento de las vacunas y citas médicas de sus hijos, contribuyendo así al bienestar infantil.</p>
    </div>
    <div class="info-image">
        <img src="https://via.placeholder.com/400x300?text=Equipo+PediVax" alt="Equipo PediVax">
    </div>
</section>

<section class="info">
    <div class="info-content">
        <h2>¿Cómo nació PediVax?</h2>
        <p>PediVax surge de una necesidad real: muchos padres y madres olvidaban citas importantes o no sabían cuándo tocaba cada vacuna. Nuestro equipo decidió crear una herramienta digital clara, intuitiva y confiable que ayude a llevar un control eficaz del calendario de vacunación pediátrica.</p>
    </div>
    <div class="info-image">
        <img src="https://via.placeholder.com/400x300?text=Nacimiento+del+proyecto" alt="Origen de la idea">
    </div>
</section>

<section class="info">
    <div class="info-content">
        <h2>Nuestros valores</h2>
        <p>En PediVax creemos en la accesibilidad, la prevención médica, la privacidad de los datos y el acompañamiento familiar. Cada decisión de diseño y funcionalidad está pensada para hacer la vida más fácil a madres y padres, y más segura para sus hijos.</p>
    </div>
    <div class="info-image">
        <img src="https://via.placeholder.com/400x300?text=Valores" alt="Valores PediVax">
    </div>
</section>

<section class="info">
    <div class="info-content">
        <h2>Privacidad ante todo</h2>
        <p>Todos los datos personales y médicos de los usuarios están protegidos conforme al RGPD. Solo se utilizan con fines médicos dentro de la plataforma. Creemos firmemente en que la tecnología debe respetar siempre la confidencialidad familiar.</p>
    </div>
    <div class="info-image">
        <img src="https://via.placeholder.com/400x300?text=Privacidad" alt="Privacidad de datos">
    </div>
</section>

<section class="info">
    <div class="info-content">
        <h2>Nuestro impacto</h2>
        <ul>
            <li>✔ Más de 100 familias ya usan PediVax</li>
            <li>✔ 1.200 eventos médicos gestionados</li>
            <li>✔ 95% de usuarios satisfechos en encuestas</li>
        </ul>
    </div>
    <div class="info-image">
        <img src="https://via.placeholder.com/400x300?text=Impacto" alt="Impacto de la plataforma">
    </div>
</section>

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
