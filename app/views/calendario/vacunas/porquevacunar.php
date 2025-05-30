<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/pediatra-online/config/config.php'); ?>

<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario de Vacunación</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/calendario.css">
</head>
<body>

    <!-- Navbar -->
    <header><?php include($_SERVER['DOCUMENT_ROOT'] . '/pediatra-online/app/components/navbar.php'); ?></header>


<section class="hero text-center py-5 bg-light">
  <div class="container">
    <i class="fas fa-syringe fa-3x text-primary mb-4"></i>
    <h1 class="display-4 fw-bold">¿Por qué vacunar?</h1>
    <p class="lead mb-4">
 Vacunar es un acto de amor y protección. Las vacunas salvan vidas, previenen enfermedades graves y protegen a toda la comunidad.
</p>

    <a href="https://www.sanidad.gob.es/campannas/campanas16/vacunacionBeneficios.htm?utm_source=chatgpt.com" class="btn btn-primary btn-lg">Descubre los beneficios</a>
  </div>
</section>


  <!-- Sección Explicativa sobre la Importancia de las Vacunas -->
  <section class="why-vaccinate py-5" data-aos="fade-up">
    <div class="container">
      <h2 class="text-center mb-4">¿Por qué es importante vacunar a los niños?</h2>
      <p class="text-justify mb-4">
        Las vacunas son una de las herramientas más efectivas para prevenir enfermedades graves en los niños. Al vacunar a los niños, se les protege de enfermedades peligrosas como el sarampión, la polio, la tos ferina y muchas otras. Las vacunas no solo protegen a quien las recibe, sino también a quienes están a su alrededor, creando lo que se conoce como "inmunidad colectiva". Esto es fundamental para proteger a aquellos que no pueden recibir ciertas vacunas debido a condiciones de salud.
      </p>
      <p class="text-justify mb-4">
        Las vacunas son seguras y eficaces, y a lo largo de los años han demostrado reducir drásticamente las tasas de enfermedades infecciosas, lo que ha resultado en una mayor esperanza de vida y en una mejora significativa de la salud pública. Además, las vacunas son un medio económico para prevenir brotes de enfermedades que podrían ser costosos y devastadores para las familias y los sistemas de salud.
      </p>
      <p class="text-justify mb-4">
        Vacunar a tu hijo no solo lo protege a él, sino también a la comunidad en general. Es un acto de responsabilidad social y de solidaridad con quienes están en mayor riesgo. La inmunización es una de las intervenciones de salud pública más exitosas de todos los tiempos y ayuda a evitar la propagación de enfermedades graves.
      </p>

      <h3 class="text-center mt-5 mb-4">Páginas de Interés y Noticias sobre Vacunas</h3>
      <ul class="list-group">
        <li class="list-group-item">
          <a href="https://www.who.int/es/news-room/fact-sheets/detail/vaccines-and-immunization" target="_blank">Organización Mundial de la Salud (OMS) - Vacunas e Inmunización</a>
        </li>
        <li class="list-group-item">
          <a href="https://www.cdc.gov/vaccines/index.html" target="_blank">Centros para el Control y la Prevención de Enfermedades (CDC) - Vacunas</a>
        </li>
        <li class="list-group-item">
          <a href="https://www.unicef.org/es/vacunacion" target="_blank">UNICEF - Vacunación</a>
        </li>
        <li class="list-group-item">
          <a href="https://www.abc.es/sociedad/abci-vacunas-imprescindibles-y-cuando-deben-colocarse-202304060148_noticia.html" target="_blank">Noticias sobre las vacunas en ABC - Vacunas imprescindibles</a>
        </li>
        <li class="list-group-item">
          <a href="https://www.elpais.com/sociedad/salud" target="_blank">El País - Salud: Noticias sobre Vacunas</a>
        </li>
        <li class="list-group-item">
          <a href="https://www.bbc.com/mundo/noticias-52351512" target="_blank">BBC Mundo - La importancia de la vacunación</a>
        </li>
      </ul>
    </div>
  </section>

  <!-- Carrusel de Videos -->
<!-- Carrusel de Videos Educativos -->
<section class="video-carousel py-5" data-aos="fade-up">
  <div class="container">
    <h3 class="text-center mb-4 text-purple fw-bold">
      <i class="bi bi-play-circle-fill me-2"></i> Videos Educativos sobre Vacunas
    </h3>

    <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner rounded shadow">

        <!-- Video 1 -->
        <div class="carousel-item active">
          <iframe class="d-block w-100 rounded" height="400" src="https://www.youtube.com/embed/KZn6ATGzLyo" title="Vacunas: Lo que debes saber" allowfullscreen></iframe>
        </div>

        <!-- Video 2 -->
        <div class="carousel-item">
          <iframe class="d-block w-100 rounded" height="400" src="https://www.youtube.com/embed/kXJvOiP_aJM" title="¿Por qué vacunar?" allowfullscreen></iframe>
        </div>

        <!-- Video 3 -->
        <div class="carousel-item">
          <iframe class="d-block w-100 rounded" height="400" src="https://www.youtube.com/embed/i4a7g-1wgUs" title="Vacunas explicadas" allowfullscreen></iframe>
        </div>

        <!-- Video 4 -->
        <div class="carousel-item">
          <iframe class="d-block w-100 rounded" height="400" src="https://www.youtube.com/embed/TJ0IIgsLHE8" title="Vacunación infantil" allowfullscreen></iframe>
        </div>
      </div>

      <!-- Controles del carrusel -->
      <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </div>
</section>

      <!-- Botones de control del carrusel -->
      <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </div>
</section>


  <!-- Agregar Bootstrap JS y AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
 
 <script>
        //Genera el menú de hamburguesa y lo esconde si el dispositivo es demasiado grande.
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>

    <script src="../../js/pages.js"></script>

    <?php include('../../../components/footer.php'); ?>
 
</body>
</html>
