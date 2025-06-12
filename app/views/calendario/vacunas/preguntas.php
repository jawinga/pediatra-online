<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario de Vacunación</title>
   <!-- <link rel="stylesheet" href="../../css/pageStyle.css"> -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/calendario.css">
</head>
<body>

<header>  
  <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="container">
      <div class="logo"><img src="/app/views/calendario/img/logoPedivax.png" alt="PediVax"></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        &#9776;
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav-links navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="/app/views/calendario/calendario.php">Calendario</a></li>
          <li class="nav-item"><a class="nav-link" href="/app/views/calendario/vacunas/vacunas.php">Vacunas</a></li>
          <li class="nav-item"><a class="nav-link" href="/app/views/calendario/vacunas/porquevacunar.php">Por qué vacunar</a></li>
          <li class="nav-item"><a class="nav-link" href="/app/views/calendario/vacunas/preguntas.php">Preguntas</a></li>
          <li class="nav-item"><a class="nav-link" href="/app/views/inicio.php">Inicio</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<section class="hero text-center py-5 bg-light">
  <div class="container">
    <h1 class="display-4 fw-bold mb-3">❓ Preguntas Frecuentes</h1>
    <p class="lead mb-4">Encuentra respuestas a las dudas más comunes sobre el calendario de vacunación infantil.</p>
    <a href="/app/views/contacto.php" class="btn btn-outline-primary btn-lg">
      📬 ¿Tienes más preguntas? Contáctanos
    </a>
  </div>
</section>
<!-- Sección de FAQs -->
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


   
      <!--  Enlaces a más información  -->
      <div class="mt-4 text-center">
        <h4>Enlaces Útiles sobre Vacunas</h4>
        <p>¡Explora estos sitios para más información!</p>
        <ul class="list-unstyled">
          <li><a href="https://www.who.int/es/news-room/fact-sheets/detail/vaccines-and-immunization" target="_blank">Organización Mundial de la Salud (OMS)</a></li>
          <li><a href="https://www.cdc.gov/vaccines/vac-gen/imz-basics.htm" target="_blank">Centros para el Control y la Prevención de Enfermedades (CDC)</a></li>
          <li><a href="https://www.vaccines.gov/" target="_blank">Vacunas.gov</a></li>
        </ul>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-primary text-white text-center py-4">
    <p>&copy; 2025 Calendario Pediátrico. Todos los derechos reservados.</p>
  </footer>

 
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
