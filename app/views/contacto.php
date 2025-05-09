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

    <title>Contacto</title>
    <link rel="stylesheet" href="./css/pageStyle.css">

</head>
<body>
    <header><?php include('../components/navbar.php'); ?></header>

    <main>
        <section class="hero">
            <h1>¡Contacta con nosotros!</h1>
            <p>Haznos saber tus dudas rellenando este formulario.</p>
        </section>

        <form method="post" action="addEvent2.php">
            <label for="nombre_contactForm">Nombre:</label>
            <input type="text" name="nombre_contactForm" id="nombre_contactForm" required><br><br>
            <label for="asunto_contactForm">Asunto:</label>
            <input type="text" name="asunto_contactForm" id="asunto_contactForm" required><br><br>
            <label for="mensaje_contactForm" name="mensaje_contactForm" id="mensaje_contactForm">Mensaje:</label><textarea></textarea>
            
            <input type="submit" class="btn btn-success" value="Enviar">
        </form>
    </main>
    
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

    <?php include('../components/footer.php'); ?>

</body>
</html>