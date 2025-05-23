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

    <title>Aviso Legal | PediVax</title>
    <link rel="stylesheet" href="../views/css/pageStyle.css">
</head>
<body>
  <header><?php include(__DIR__ . '/../components/navbar.php'); ?></header>

    <main class="container-xl mt-3 pt-5 px-4">
        <div class="legal-container text-center mb-4">
            <div class="text-center">
                <img src="../views/img/logoPedivax.png" alt="Logo PediVax" class="img-fluid" style="max-width: 200px;">
            </div>
            <div class="py-4">
                <h1 class="mb-4">Aviso Legal</h1>

                <h3 class="text-center mb-4">1. Titularidad del Sitio Web</h4>
                <p>Este sitio web pertenece y es operado por <strong>PediVax</strong>, una iniciativa educativa sin ánimo de lucro. Todos los contenidos publicados tienen fines informativos y educativos.</p>

                <h3 class="text-center mb-4">2. Propiedad Intelectual</h3>
                <p>Todos los contenidos (textos, imágenes, logotipos, diseño gráfico, código fuente, etc.) son propiedad de PediVax o se han utilizado con licencia o consentimiento. Queda prohibida su reproducción total o parcial sin autorización expresa.</p>

                <h3 class="text-center mb-4">3. Responsabilidad del Contenido</h3>
                <p>La información ofrecida no sustituye en ningún caso al asesoramiento médico profesional. PediVax no se hace responsable del mal uso de la información publicada ni de los daños derivados de dicho uso.</p>

                <h3 class="text-center mb-4">4. Enlaces Externos</h3>
                <p>Este sitio puede contener enlaces a páginas de terceros. PediVax no se responsabiliza del contenido ni de las políticas de privacidad de dichos sitios.</p>

                <h3 class="text-center mb-4">5. Protección de Datos</h3>
                <p>Los datos personales que puedan recopilarse se tratarán conforme a lo establecido en nuestra <a href="politicaPrivacidad.php">Política de Privacidad</a>.</p>

                <h3 class="text-center mb-4">6. Legislación Aplicable</h3>
                <p>El presente aviso legal se rige por la legislación española. Para la resolución de cualquier conflicto, las partes se someterán a los juzgados y tribunales del domicilio del usuario, cuando así lo disponga la normativa vigente.</p>

                <p>© <?= date("Y") ?> PediVax. Todos los derechos reservados.</p>
            </div>
        </div>
    </main>

  <?php include(__DIR__ . '/../components/footer.php'); ?>
</body>
</html>
