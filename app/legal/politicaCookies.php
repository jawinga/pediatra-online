<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/pediatra-online/config/config.php'); ?>

<?php session_start(); ?>
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

    <title>Política de Cookies | PediVax</title>
    <link rel="stylesheet" href="../views/css/pageStyle.css">
</head>
<body>
  <header><?php include(__DIR__ . '/../components/navbar.php'); ?></header>

    <main class="container-xl mt-3 pt-5 px-4">
        <div class="legal-container mb-4">
            <div class="text-center">
                <img src="../views/img/logoPedivax.png" alt="Logo PediVax" class="img-fluid" style="max-width: 200px;">
            </div>
            <div class="py-5">
                <h1 class="mb-4">Política de Cookies</h1>

                <p>En <strong>PediVax</strong>, utilizamos cookies con el objetivo de mejorar tu experiencia de navegación, analizar el tráfico del sitio y ofrecerte contenidos personalizados. Al continuar navegando en nuestra web, aceptas el uso de cookies en los términos establecidos en esta política.</p>

                <h3 class="mb-4">¿Qué son las cookies?</h3>
                <p>Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo (ordenador, móvil o tablet) al visitar un sitio web. Sirven para recordar tus preferencias y recopilar información sobre tu interacción con el sitio.</p>

                <h3 class="mb-4">Tipos de cookies que utilizamos</h3>
                <ul class="text-start">
                <li><strong>Cookies técnicas:</strong> Son necesarias para el correcto funcionamiento del sitio web y permiten, por ejemplo, la navegación entre páginas o el acceso a zonas seguras.</li><br>
                <li><strong>Cookies de análisis:</strong> Nos permiten conocer el comportamiento de los usuarios en la web (por ejemplo, mediante Google Analytics), ayudándonos a mejorar la usabilidad y el contenido.</li><br>
                <li><strong>Cookies de personalización:</strong> Permiten recordar tus preferencias como idioma, diseño o configuración regional.</li><br>
                <li><strong>Cookies de terceros:</strong> Algunos servicios integrados en nuestra web (como YouTube o ConsentManager) pueden instalar cookies para su correcto funcionamiento o para recopilar información con fines propios.</li><br>
                </ul>

                <h3 class="mb-4">Gestión y eliminación de cookies</h3>
                <p>En cualquier momento puedes configurar tu navegador para permitir, bloquear o eliminar las cookies instaladas. La desactivación de algunas cookies puede afectar a la funcionalidad del sitio.</p>
                <p>También puedes gestionar tus preferencias desde nuestra herramienta de gestión de consentimiento, que se activa al visitar la web por primera vez o desde el enlace disponible al pie de página.</p>

                <h3 class="mb-4">Consentimiento</h3>
                <p>Al acceder a nuestra web por primera vez, se te muestra un banner con información básica sobre el uso de cookies. Si continúas navegando, se entenderá que aceptas su uso, aunque siempre puedes revocar o modificar tu consentimiento.</p>

                <h3 class="mb-4">Actualizaciones</h3>
                <p>Esta política de cookies puede modificarse en función de cambios legales o técnicos. Recomendamos revisar esta página periódicamente para estar informado de cualquier cambio.</p>

                <p class="mb-4 text-center">Última actualización: mayo de <?= date("Y") ?>.</p>
            </div>
        </div>
    </main>


  <?php include(__DIR__ . '/../components/footer.php'); ?>
</body>
</html>
