<?php
$edad = isset($_GET['edad']) ? intval($_GET['edad']) : 2;

$vacunas = [
  2 => [
    'descripcion' => 'A los 2 meses se inicia el calendario de vacunación con protección frente a múltiples enfermedades potencialmente graves.',
    'video' => 'https://www.youtube.com/embed/X4g96CF-2X0',
    'imagen' => 'https://cdn-icons-png.flaticon.com/512/3039/3039431.png', // Silueta bebé
    'vacunas' => [
      [
        'titulo' => '💉 Hexavalente',
        'previene' => 'Hepatitis B, difteria, tétanos, tosferina, polio, Hib.',
        'cobertura' => 'Seguridad Social ✔️',
        'precio' => '~80€ (si no cubierta)',
        'importancia' => 'Protege contra 6 enfermedades graves.',
        'efectos' => 'Fiebre leve, dolor local.'
      ],
      [
        'titulo' => '🦠 Neumococo (VNC)',
        'previene' => 'Neumonía, meningitis y otitis.',
        'cobertura' => 'Seguridad Social ✔️',
        'precio' => '~90€',
        'importancia' => 'Reduce complicaciones respiratorias.',
        'efectos' => 'Fiebre leve, irritabilidad.'
      ],
      [
        'titulo' => '💩 Rotavirus',
        'previene' => 'Diarreas graves.',
        'cobertura' => 'Solo en algunas comunidades ⚠️',
        'precio' => '~90€ por dosis',
        'importancia' => 'Evita deshidratación severa.',
        'efectos' => 'Gases, diarrea leve.'
      ],
      [
        'titulo' => '🧠 MenB',
        'previene' => 'Meningitis tipo B.',
        'cobertura' => 'Sí en la mayoría de comunidades ✔️',
        'precio' => '~105€ por dosis',
        'importancia' => 'Una de las más peligrosas en lactantes.',
        'efectos' => 'Fiebre alta, dolor local.'
      ]
    ]
  ],
  4 => [
    'descripcion' => 'A los 4 meses se administran dosis de refuerzo para fortalecer la inmunidad adquirida.',
    'video' => 'https://www.youtube.com/embed/3ZhxM9v11Fw',
    'imagen' => 'https://cdn-icons-png.flaticon.com/512/2920/2920281.png',
    'vacunas' => [
      [
        'titulo' => '💉 Segunda dosis Hexavalente',
        'previene' => 'Refuerzo contra 6 enfermedades graves.',
        'cobertura' => 'Seguridad Social ✔️',
        'precio' => '~80€',
        'importancia' => 'Refuerza la protección inmunológica.',
        'efectos' => 'Fiebre leve, malestar.'
      ],
      [
        'titulo' => '🦠 Segunda dosis Neumococo',
        'previene' => 'Neumonía, meningitis.',
        'cobertura' => 'Seguridad Social ✔️',
        'precio' => '~90€',
        'importancia' => 'Mejora la respuesta inmunitaria.',
        'efectos' => 'Irritación, fiebre leve.'
      ],
      [
        'titulo' => '💩 Segunda dosis Rotavirus',
        'previene' => 'Diarreas severas.',
        'cobertura' => 'Depende de la comunidad ⚠️',
        'precio' => '~90€',
        'importancia' => 'Reduce hospitalizaciones.',
        'efectos' => 'Diarrea leve, gases.'
      ]
    ]
  ],
  6 => [
    'descripcion' => 'A los 6 meses se administran más dosis de refuerzo.',
    'video' => 'https://www.youtube.com/embed/GrbX4nR3Zm8',
    'imagen' => 'https://cdn-icons-png.flaticon.com/512/2920/2920281.png',
    'vacunas' => [
      [
        'titulo' => '💉 Tercera dosis Hexavalente',
        'previene' => 'Refuerzo contra 6 enfermedades graves.',
        'cobertura' => 'Seguridad Social ✔️',
        'precio' => '~80€',
        'importancia' => 'Refuerza la inmunidad.',
        'efectos' => 'Fiebre leve, malestar.'
      ],
      [
        'titulo' => '🦠 Tercera dosis Neumococo',
        'previene' => 'Neumonía, meningitis.',
        'cobertura' => 'Seguridad Social ✔️',
        'precio' => '~90€',
        'importancia' => 'Previene infecciones respiratorias.',
        'efectos' => 'Fiebre leve, irritabilidad.'
      ]
    ]
  ],
  9 => [
    'descripcion' => 'A los 9 meses se refuerzan las defensas del bebé.',
    'video' => 'https://www.youtube.com/embed/BXyFlT8z1rw',
    'imagen' => 'https://cdn-icons-png.flaticon.com/512/2920/2920281.png',
    'vacunas' => [
      [
        'titulo' => '💉 Refuerzo Hexavalente',
        'previene' => 'Seguridad contra 6 enfermedades.',
        'cobertura' => 'Seguridad Social ✔️',
        'precio' => '~80€',
        'importancia' => 'Refuerza la inmunización.',
        'efectos' => 'Dolor local, fiebre.'
      ]
    ]
  ],
  11 => [
    'descripcion' => 'En esta etapa se administran vacunas clave para proteger al bebé durante su segundo año de vida.',
    'video' => 'https://www.youtube.com/embed/vE8b0kKyZas',
    'imagen' => 'https://cdn-icons-png.flaticon.com/512/1998/1998610.png',
    'vacunas' => [
      [
        'titulo' => '🧠 Refuerzo MenB',
        'previene' => 'Meningitis B.',
        'cobertura' => 'Sí en muchas comunidades ✔️',
        'precio' => '~105€',
        'importancia' => 'Clave para completar la protección.',
        'efectos' => 'Fiebre, somnolencia.'
      ]
    ]
  ],
  12 => [
    'descripcion' => 'Se administran vacunas importantes para proteger frente al sarampión, rubeola, parotiditis y meningitis.',
    'video' => 'https://www.youtube.com/embed/PIrcN4cY7qI',
    'imagen' => 'https://cdn-icons-png.flaticon.com/512/3957/3957764.png',
    'vacunas' => [
      [
        'titulo' => '🧪 Triple Vírica (SRP)',
        'previene' => 'Sarampión, rubeola, paperas.',
        'cobertura' => 'Seguridad Social ✔️',
        'precio' => 'Cubierta',
        'importancia' => 'Previene brotes epidémicos.',
        'efectos' => 'Erupciones leves, fiebre.'
      ],
      [
        'titulo' => '🧠 MenACWY',
        'previene' => 'Meningitis tipos A, C, W e Y.',
        'cobertura' => 'Seguridad Social ✔️',
        'precio' => '~60€',
        'importancia' => 'Protege de meningitis graves.',
        'efectos' => 'Fiebre, dolor en la zona de punción.'
      ]
    ]
  ]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Vacunas a los <?= $edad ?> meses</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Calendario Pediátrico</a>
  </div>
</nav>
<div class="container my-5">
  <h1 class="text-center mb-4">Vacunas a los <?= $edad ?> meses</h1>

  <?php if (isset($vacunas[$edad])): ?>
    <div class="row mb-4">
      <div class="col-md-8">
        <p class="lead"><?= $vacunas[$edad]['descripcion'] ?></p>
      </div>
      <div class="col-md-4 text-center">
        <img src="<?= $vacunas[$edad]['imagen'] ?>" alt="Bebé" class="img-fluid" style="max-height: 200px;">
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
      <?php foreach ($vacunas[$edad]['vacunas'] as $v): ?>
        <div class="col">
          <div class="card h-100">
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

    <div class="mb-4 text-center">
      <h5>🎥 Video: Vacunas a los <?= $edad ?> meses</h5>
      <div class="ratio ratio-16x9" style="max-width: 560px; margin: auto;">
        <iframe src="<?= $vacunas[$edad]['video'] ?>" title="Video vacunas <?= $edad ?> meses" allowfullscreen></iframe>
      </div>
    </div>

    <div class="alert alert-info">
      <h5>ℹ️ Más información:</h5>
      <ul>
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

  <div class="text-center mt-4">
    <?php foreach ([2, 4, 6, 9, 11, 12] as $mes): ?>
      <a href="?edad=<?= $mes ?>" class="btn btn-outline-primary mx-1"><?= $mes ?> meses</a>
    <?php endforeach; ?>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto"> <!-- Alinea los enlaces a la derecha -->
        <li class="nav-item">
          <a class="nav-link" href="porquepvacunar.php">¿Por qué vacunar?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="preguntas.php">Preguntas frecuentes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calendario.php">Calendario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inicio.php">Inicio</a>
        </li>
      </ul>
    </div>
</div>
</body>
</html>
