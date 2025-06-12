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

<!--  Sección de FAQs  -->
<section class="faq my-5 mb-5 container-xl faq-container">
    <h2 class="text-center mb-4 text-pink fw-bold">
        <i class="bi bi-chat-dots-fill me-2"></i> Preguntas Frecuentes
    </h2>
    <div class="accordion" id="faqAccordion">

        <!-- Pregunta 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq1-heading">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                    🍼 ¿Por qué es importante vacunar a los niños?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faq1-heading" data-bs-parent="#faqAccordion">
                <div class="accordion-body fw-bold">
                    Las vacunas son superhéroes para tu salud. Protegen a los niños de enfermedades graves y contribuyen a que la comunidad esté más sana. ¡No te la juegues, vacúnalos!
                </div>
            </div>
        </div>

        <!-- Pregunta 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq2-heading">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                    💉 ¿Las vacunas tienen efectos secundarios?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-heading" data-bs-parent="#faqAccordion">
                <div class="accordion-body fw-bold">
                    Algunas vacunas pueden causar efectos secundarios leves como fiebre o dolor en el sitio de la inyección. Sin embargo, estos efectos suelen ser temporales y son mucho menores que los riesgos de las enfermedades que previenen.
                </div>
            </div>
        </div>

        <!-- Pregunta 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq3-heading">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                    🤔 ¿Cuántas vacunas necesita mi hijo?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-heading" data-bs-parent="#faqAccordion">
                <div class="accordion-body fw-bold">
                    El número de vacunas que necesita tu hijo depende de su edad y el calendario de vacunación vigente en tu país. Es importante seguir las recomendaciones de tu pediatra para asegurar que tu hijo esté bien protegido.
                </div>
            </div>
        </div>

        <!-- Pregunta 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq4-heading">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                    🕒 ¿Por qué no puedo esperar hasta que mi hijo empiece el colegio para ponerle las vacunas?
                </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4-heading" data-bs-parent="#faqAccordion">
                <div class="accordion-body fw-bold">
                    Las vacunaciones deben comenzar a los 2 meses de edad, y la mayoría se administran dentro de los dos primeros años de vida. Vacunar a tu hijo a tiempo lo protege de infecciones y evita que contagie a otros en la escuela o guardería.
                </div>
            </div>
        </div>

        <!-- Pregunta 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq5-heading">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                    🧬 ¿Es mejor la inmunidad natural que la vacunación?
                </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5-heading" data-bs-parent="#faqAccordion">
                <div class="accordion-body fw-bold">
                    No. En general, es mejor prevenir la enfermedad mediante la vacunación que contraer la infección. Algunas enfermedades pueden tener consecuencias graves, como sordera o daño cerebral, que se pueden evitar con las vacunas.
                </div>
            </div>
        </div>

        <!-- Pregunta 6 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq6-heading">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                    🌍 ¿Es necesario vacunar a mi hijo si todos los demás niños están vacunados?
                </button>
            </h2>
            <div id="faq6" class="accordion-collapse collapse" aria-labelledby="faq6-heading" data-bs-parent="#faqAccordion">
                <div class="accordion-body fw-bold">
                    Sí. Aunque la mayoría de los niños estén vacunados, tu hijo aún puede estar expuesto a personas no vacunadas en otros entornos. Vacunarlo protege su salud y contribuye a la inmunidad colectiva.
                </div>
            </div>
        </div>

        <!-- Pregunta 7 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq7-heading">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false" aria-controls="faq7">
                    🧪 ¿Las vacunas pueden causar enfermedades?
                </button>
            </h2>
            <div id="faq7" class="accordion-collapse collapse" aria-labelledby="faq7-heading" data-bs-parent="#faqAccordion">
                <div class="accordion-body fw-bold">
                    No. Las vacunas contienen gérmenes inactivos, debilitados o solo una parte del germen que causa la enfermedad. No pueden causar la enfermedad, sino que ayudan al sistema inmunológico a aprender a combatirla.
                </div>
            </div>
        </div>

        <!-- Pregunta 8 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq8-heading">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false" aria-controls="faq8">
                    🧒 ¿Cuáles son los efectos secundarios más comunes de las vacunas en niños?
                </button>
            </h2>
            <div id="faq8" class="accordion-collapse collapse" aria-labelledby="faq8-heading" data-bs-parent="#faqAccordion">
                <div class="accordion-body fw-bold">
                    Los efectos secundarios más comunes son leves y temporales, como dolor, hinchazón o enrojecimiento en el lugar de la inyección, fiebre leve o malestar general. Estos síntomas suelen desaparecer en pocos días.
                </div>
            </div>
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
