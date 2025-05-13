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

<header>  
  <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="container">
      <div class="logo"><img src="./img/logoPedivax" alt="PediVax"></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        &#9776;
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav-links navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="./calendario.php">Calendario</a></li>
          <li class="nav-item"><a class="nav-link" href="./vacunas/vacunas.php">Vacunas</a></li>
          <li class="nav-item"><a class="nav-link" href="./vacunas/porquevacunar.php">Por qué vacunar</a></li>
          <li class="nav-item"><a class="nav-link" href="./vacunas/preguntas.php">Preguntas</a></li>
          <li class="nav-item"><a class="nav-link" href="../inicio.php">Inicio</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<section class="hero text-center py-5 bg-light">
  <h1>Vacunas</h1>

</section>

    <div class="container">
      <h2 class="text-center mb-4 text-primary">¡Resolvemos tus Dudas sobre Vacunas!</h2>

      <div class="accordion" id="faqAccordion">
        <!-- Pregunta 1 -->
        <div class="accordion-item shadow-lg mb-3 border-0 rounded">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button bg-warning text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              🍼 ¿Por qué es importante vacunar a los niños?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Las vacunas son superhéroes para tu salud. Protegen a los niños de enfermedades graves y contribuyen a que la comunidad esté más sana. ¡No te la juegues, vacúnalos!
              <br><img src="https://via.placeholder.com/150" alt="Vacuna" class="img-fluid mt-3">
            </div>
          </div>
        </div>

        <!-- Pregunta 2 -->
        <div class="accordion-item shadow-lg mb-3 border-0 rounded">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button bg-warning text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              💉 ¿Las vacunas tienen efectos secundarios?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Algunas vacunas pueden causar efectos secundarios leves como fiebre o dolor en el sitio de la inyección. Sin embargo, estos efectos suelen ser temporales y son mucho menores que los riesgos de las enfermedades que previenen.
            </div>
          </div>
        </div>

        <!-- Pregunta 3 -->
        <div class="accordion-item shadow-lg mb-3 border-0 rounded">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button bg-warning text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              🤔 ¿Cuántas vacunas necesita mi hijo?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              El número de vacunas que necesita tu hijo depende de su edad y el calendario de vacunación vigente en tu país. Es importante seguir las recomendaciones de tu pediatra para asegurar que tu hijo esté bien protegido.
            </div>
          </div>
        </div>
<!-- Pregunta 4 -->
<div class="accordion-item shadow-lg mb-3 border-0 rounded">
  <h2 class="accordion-header" id="headingFour">
    <button class="accordion-button bg-warning text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      🕒 ¿Por qué no puedo esperar hasta que mi hijo empiece el colegio para ponerle las vacunas?
    </button>
  </h2>
  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
    <div class="accordion-body">
      Las vacunaciones deben comenzar a los 2 meses de edad, y la mayoría se administran dentro de los dos primeros años de vida. Vacunar a tu hijo a tiempo lo protege de infecciones y evita que contagie a otros en la escuela o guardería.
    </div>
  </div>
</div>

<!-- Pregunta 5 -->
<div class="accordion-item shadow-lg mb-3 border-0 rounded">
  <h2 class="accordion-header" id="headingFive">
    <button class="accordion-button bg-warning text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      🧬 ¿Es mejor la inmunidad natural que la vacunación?
    </button>
  </h2>
  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
    <div class="accordion-body">
      No. En general, es mejor prevenir la enfermedad mediante la vacunación que contraer la infección. Algunas enfermedades pueden tener consecuencias graves, como sordera o daño cerebral, que se pueden evitar con las vacunas.
    </div>
  </div>
</div>

<!-- Pregunta 6 -->
<div class="accordion-item shadow-lg mb-3 border-0 rounded">
  <h2 class="accordion-header" id="headingSix">
    <button class="accordion-button bg-warning text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      🌍 ¿Es necesario vacunar a mi hijo si todos los demás niños están vacunados?
    </button>
  </h2>
  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
    <div class="accordion-body">
      Sí. Aunque la mayoría de los niños estén vacunados, tu hijo aún puede estar expuesto a personas no vacunadas en otros entornos. Vacunarlo protege su salud y contribuye a la inmunidad colectiva.
    </div>
  </div>
</div>

<!-- Pregunta 7 -->
<div class="accordion-item shadow-lg mb-3 border-0 rounded">
  <h2 class="accordion-header" id="headingSeven">
    <button class="accordion-button bg-warning text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      🧪 ¿Las vacunas pueden causar enfermedades?
    </button>
  </h2>
  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
    <div class="accordion-body">
      No. Las vacunas contienen gérmenes inactivos, debilitados o solo una parte del germen que causa la enfermedad. No pueden causar la enfermedad, sino que ayudan al sistema inmunológico a aprender a combatirla.
    </div>
  </div>
</div>

<!-- Pregunta 8 -->
<div class="accordion-item shadow-lg mb-3 border-0 rounded">
  <h2 class="accordion-header" id="headingEight">
    <button class="accordion-button bg-warning text-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
      🧒 ¿Cuáles son los efectos secundarios más comunes de las vacunas en niños?
    </button>
  </h2>
  <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
    <div class="accordion-body">
      Los efectos secundarios más comunes son leves y temporales, como dolor, hinchazón o enrojecimiento en el lugar de la inyección, fiebre leve o malestar general. Estos síntomas suelen desaparecer en pocos días.
    </div>
  </div>
</div>
        <!-- Aquí puedes añadir más preguntas si lo deseas -->
      </div>

      <!-- Enlaces a más información -->
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
