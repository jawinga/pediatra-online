<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preguntas Frecuentes - Calendario Pediátrico</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Aquí puedes agregar más archivos de estilo si lo necesitas -->
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
            <a class="nav-link" href="vacunas/vacunas.php?edad=2">Vacunas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vacuna/porquepvacunar.php">¿Por qué vacunar?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="vacuna/preguntas.php">Preguntas Frecuentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inicio.php">Inicio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sección de Preguntas Frecuentes -->
  <section class="faq py-5">
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

  <!-- Scripts de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
