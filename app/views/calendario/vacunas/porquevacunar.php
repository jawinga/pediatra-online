<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>¿Por qué Vacunar?</title>
  <!-- Agregar Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Agregar AOS (Animaciones en Scroll) -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Barra de Navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="vacunas/index.php?edad=2">Vacunas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="porquepvacunar.php">¿Por qué vacunar?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="preguntas.php">Preguntas frecuentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inicio.php">Inicio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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
  <section class="video-carousel py-5" data-aos="fade-up">
  <div class="container">
    <h3 class="text-center mb-4">Videos Educativos sobre Vacunas</h3>
    <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <!-- Corregir el enlace del iframe -->
          <iframe class="d-block w-100" height="315" src="https://www.youtube.com/embed/KZn6ATGzLyo" title="Video 1" allowfullscreen></iframe>
        </div>
        <div class="carousel-item">
          <!-- Corregir el enlace del iframe -->
          <iframe class="d-block w-100" height="315" src="https://www.youtube.com/embed/kXJvOiP_aJM" title="Video 2" allowfullscreen></iframe>
        </div>
        <div class="carousel-item">
          <!-- Corregir el enlace del iframe -->
          <iframe class="d-block w-100" height="315" src="https://www.youtube.com/embed/i4a7g-1wgUs" title="Video 3" allowfullscreen></iframe>
        </div>
      </div>
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
    AOS.init();
  </script>
</body>
</html>
