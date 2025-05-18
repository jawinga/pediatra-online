<?php
// 1. Recogemos la edad por GET (por defecto, 2 meses)
$edad = isset($_GET['edad']) ? intval($_GET['edad']) : 2;

// 2. Definición de vacunas por edad
$vacunas = [
  2 => [
    'descripcion' => 'A los 2 meses se inicia el calendario de vacunación con protección frente a múltiples enfermedades potencialmente graves.',
    'video'       => 'https://www.youtube.com/embed/X4g96CF-2X0',
    'vacunas'     => [
      [
        'titulo'      => '💉 Hexavalente',
        'previene'    => 'Hepatitis B, difteria, tétanos, tosferina, polio, Hib.',
        'cobertura'   => 'Seguridad Social ✔️',
        'precio'      => '~80€ (si no cubierta)',
        'importancia' => 'Protege contra 6 enfermedades graves.',
        'efectos'     => 'Fiebre leve, dolor local.'
      ],
      [
        'titulo'      => '🦠 Neumococo (VNC)',
        'previene'    => 'Neumonía, meningitis y otitis.',
        'cobertura'   => 'Seguridad Social ✔️',
        'precio'      => '~90€',
        'importancia' => 'Reduce complicaciones respiratorias.',
        'efectos'     => 'Fiebre leve, irritabilidad.'
      ],
      [
        'titulo'      => '💩 Rotavirus',
        'previene'    => 'Diarreas graves.',
        'cobertura'   => 'Solo en algunas comunidades ⚠️',
        'precio'      => '~90€ por dosis',
        'importancia' => 'Evita deshidratación severa.',
        'efectos'     => 'Gases, diarrea leve.'
      ],
      [
        'titulo'      => '🧠 MenB',
        'previene'    => 'Meningitis tipo B.',
        'cobertura'   => 'Sí en la mayoría de comunidades ✔️',
        'precio'      => '~105€ por dosis',
        'importancia' => 'Una de las más peligrosas en lactantes.',
        'efectos'     => 'Fiebre alta, dolor local.'
      ]
    ]
  ],
  4 => [
    'descripcion' => 'A los 4 meses se administran dosis de refuerzo para fortalecer la inmunidad adquirida.',
    'video'       => 'https://www.youtube.com/embed/KZn6ATGzLyo',
    'vacunas'     => [
      [
        'titulo'      => '💉 Segunda dosis Hexavalente',
        'previene'    => 'Refuerzo contra 6 enfermedades graves.',
        'cobertura'   => 'Seguridad Social ✔️',
        'precio'      => '~80€',
        'importancia' => 'Refuerza la protección inmunológica.',
        'efectos'     => 'Fiebre leve, malestar.'
      ],
      [
        'titulo'      => '🦠 Segunda dosis Neumococo',
        'previene'    => 'Neumonía, meningitis.',
        'cobertura'   => 'Seguridad Social ✔️',
        'precio'      => '~90€',
        'importancia' => 'Mejora la respuesta inmunitaria.',
        'efectos'     => 'Irritación, fiebre leve.'
      ],
      [
        'titulo'      => '💩 Segunda dosis Rotavirus',
        'previene'    => 'Diarreas severas.',
        'cobertura'   => 'Depende de la comunidad ⚠️',
        'precio'      => '~90€',
        'importancia' => 'Reduce hospitalizaciones.',
        'efectos'     => 'Diarrea leve, gases.'
      ]
    ]
  ],
  6 => [
    'descripcion' => 'A los 6 meses se administran más dosis de refuerzo.',
    'video'       => 'https://www.youtube.com/embed/Jz3ydQV5HpI',
    'vacunas'     => [
      [
        'titulo'      => '💉 Tercera dosis Hexavalente',
        'previene'    => 'Refuerzo contra 6 enfermedades graves.',
        'cobertura'   => 'Seguridad Social ✔️',
        'precio'      => '~80€',
        'importancia' => 'Refuerza la inmunidad.',
        'efectos'     => 'Fiebre leve, malestar.'
      ],
      [
        'titulo'      => '🦠 Tercera dosis Neumococo',
        'previene'    => 'Neumonía, meningitis.',
        'cobertura'   => 'Seguridad Social ✔️',
        'precio'      => '~90€',
        'importancia' => 'Previene infecciones respiratorias.',
        'efectos'     => 'Fiebre leve, irritabilidad.'
      ]
    ]
  ],
  9 => [
    'descripcion' => 'A los 9 meses se refuerzan las defensas del bebé.',
    'video'       => 'https://www.youtube.com/embed/TJ0IIgsLHE8',
    'vacunas'     => [
      [
        'titulo'      => '💉 Refuerzo Hexavalente',
        'previene'    => 'Seguridad contra 6 enfermedades.',
        'cobertura'   => 'Seguridad Social ✔️',
        'precio'      => '~80€',
        'importancia' => 'Refuerza la inmunización.',
        'efectos'     => 'Dolor local, fiebre.'
      ]
    ]
  ],
  11 => [
    'descripcion' => 'En esta etapa se administran vacunas clave para proteger al bebé durante su segundo año de vida.',
    'video'       => ' https://www.youtube.com/embed/LNlSpm5vCV8',
    'vacunas'     => [
      [
        'titulo'      => '🧠 Refuerzo MenB',
        'previene'    => 'Meningitis B.',
        'cobertura'   => 'Sí en muchas comunidades ✔️',
        'precio'      => '~105€',
        'importancia' => 'Clave para completar la protección.',
        'efectos'     => 'Fiebre, somnolencia.'
      ]
    ]
  ],
  12 => [
    'descripcion' => 'Se administran vacunas importantes para proteger frente al sarampión, rubeola, parotiditis y meningitis.',
    'video'       => 'https://www.youtube.com/embed/i4a7g-1wgUs',
    'vacunas'     => [
      [
        'titulo'      => '🧪 Triple Vírica (SRP)',
        'previene'    => 'Sarampión, rubeola, paperas.',
        'cobertura'   => 'Seguridad Social ✔️',
        'precio'      => 'Cubierta',
        'importancia' => 'Previene brotes epidémicos.',
        'efectos'     => 'Erupciones leves, fiebre.'
      ],
      [
        'titulo'      => '🧠 MenACWY',
        'previene'    => 'Meningitis tipos A, C, W e Y.',
        'cobertura'   => 'Seguridad Social ✔️',
        'precio'      => '~60€',
        'importancia' => 'Protege de meningitis graves.',
        'efectos'     => 'Fiebre, dolor en la zona de punción.'
      ]
    ]
  ]
];

// 3. Mapa de colores por mes (Bootstrap)
$colores = [
  2  => 'primary',
  4  => 'success',
  6  => 'warning',
  9  => 'info',
  11 => 'danger',
  12 => 'dark'
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calendario de Vacunación</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/calendario.css">
</head>
<body>

  <!-- HEADER / NAVBAR -->
  <header>  
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="../../inicio.php">
          <img src="/app/views/calendario/img/logoPedivax.png" alt="PediVax" style="height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
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

  <!-- HERO -->
<section class="hero text-center py-5 bg-light">
  <div class="container">
    <i class="fas fa-syringe fa-3x text-primary mb-4"></i>
    <h1 class="display-4 fw-bold">Vacunas</h1>
    <p class="lead mb-4">
  Conoce el calendario de vacunación infantil y protege el futuro de tu bebé.
</p>

    <a href="https://vacunasaep.org/" class="btn btn-primary btn-lg">Infórmate</a>
  </div>
</section>


  <!-- CONTENIDO PRINCIPAL -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Vacunas a los <?= $edad ?> meses</h2>

    <?php if (isset($vacunas[$edad])): ?>
      <!-- DESCRIPCIÓN + IMAGEN -->
      <div class="row mb-4 align-items-center">
        <div class="col-md-8">
          <p class="lead"><?= $vacunas[$edad]['descripcion'] ?></p>
        </div>
      

      <!-- BOTONES DE EDADES (antes de las tarjetas) -->
      <div class="text-center mb-4">
        <?php foreach (array_keys($vacunas) as $mes): ?>
          <?php $clase = $colores[$mes] ?? 'secondary'; ?>
          <a href="?edad=<?= $mes ?>" class="btn btn-<?= $clase ?> mx-1 <?= $mes === $edad ? 'active' : '' ?>">
            <?= $mes ?> meses
          </a>
        <?php endforeach; ?>
      </div>

      <!-- TARJETAS DE VACUNAS -->
      <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
        <?php foreach ($vacunas[$edad]['vacunas'] as $v): ?>
          <div class="col">
            <div class="card h-100 shadow-sm">
              <div class="card-body">
                <h5 class="card-title"><?= $v['titulo'] ?></h5>
                <p><strong>Previene:</strong> <?= $v['previene'] ?></p>
                <p><strong>Cobertura:</strong> <?= $v['cobertura'] ?></p>
                <p><strong>Precio:</strong> <?= $v['precio'] ?></p>
                <p><strong>Importancia:</strong> <?= $v['importancia'] ?></p>
                <p><strong>Efectos:</strong> <?= $v['efectos'] ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- VÍDEO EXPLICATIVO -->
      <?php if (!empty($vacunas[$edad]['video'])): ?>
        <div class="text-center mb-4">
          <h5>🎥 Video: Vacunas a los <?= $edad ?> meses</h5>
          <div class="ratio ratio-16x9 mx-auto" style="max-width:560px;">
            <iframe src="<?= $vacunas[$edad]['video'] ?>" title="Video vacunas <?= $edad ?> meses" allowfullscreen></iframe>
          </div>
        </div>
      <?php endif; ?>

      <!-- ENLACES DE INTERÉS -->
      <div class="alert alert-info">
        <h5>ℹ️ Más información:</h5>
        <ul class="mb-0">
          <li><a href="https://www.sanidad.gob.es/profesionales/saludPublica/prevPromocion/vacunaciones/" target="_blank">Ministerio de Sanidad</a></li>
          <li><a href="https://vacunasaep.org" target="_blank">Asociación Española de Pediatría</a></li>
          <li><a href="https://enfamilia.aeped.es/temas-salud/calendario-vacunaciones" target="_blank">EnFamilia – AEP</a></li>
        </ul>
      </div>

    <?php else: ?>
      <div class="alert alert-warning text-center">
        <p>No hay información disponible para los <?= $edad ?> meses.</p>
      </div>
    <?php endif; ?>
  </div>

  <!-- FOOTER -->
  <?php include('../../../components/footer.php'); ?>

 
  <script src="../../js/pages.js"></script>
</body>
</html>