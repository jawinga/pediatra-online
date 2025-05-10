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
