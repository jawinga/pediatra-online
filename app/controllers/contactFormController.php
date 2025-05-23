<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../components/components.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<!--Bootstraps icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <title>Contacto añadido</title>
    <link rel="stylesheet" href="../views/css/pageStyle.css">
</head>
<body>
    
    <?php

    # Conectar a la base de datos
    $conn = mysqli_connect('localhost', 'root', '', 'calendario-pediatra');

    if (!$conn) {
        die("<div class='alert alert-danger'>Conexión fallida: " . mysqli_connect_error() . "</div>");
    }
    
    # Recoger datos del formulario
    $nombre = trim($_POST['nombre_contactForm']);
    $correo = trim($_POST['email_contactForm']);
    $asunto = trim($_POST['asunto_contactForm']);
    $mensaje = trim($_POST['mensaje_contactForm']);

    # Validación de datos
    if (empty($nombre) || empty($correo) || empty($asunto) || empty($mensaje)) {
        echo "<div class='alert alert-warning'>Todos los campos son obligatorios.</div>";
        exit;
    }


    # Consulta para insertar el contacto en nuestra base de datos
    $sql = "INSERT INTO contacto (nombre_contactForm, email_contactForm, asunto_contactForm, mensaje_contactForm) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $nombre, $correo, $asunto, $mensaje);

    # Ejecutar y mostrar mensaje
    if (mysqli_stmt_execute($stmt)) {
        echo "<div class='alert alert-success'><h4>Mensaje enviado correctamente. Contactaremos contigo a la mayor brevedad posible, ¡Gracias!</h4></div>";
    } else {
        echo "<div class='alert alert-danger'>Error al enviar el mensaje: " . mysqli_error($conn) . "</div>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    ?>

    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo "<div class='mt-4 d-grid gap-3'>";
        echo "<a href='./inicio.php' class='btn btn-success'>Volver al Inicio</a>";
        echo "<a href='./logout.php' class='btn btn-secondary'>Cerrar Sesión</a>";
        echo "</div>";
        

    } else {
        echo "<div class='mt-4 d-grid gap-3'>";
        echo "<a href='../views/inicio.php' class='btn btn-success'>Volver al Inicio</a>";
        echo "<a href='../views/login.php' class='btn btn-success'>Iniciar sesión</a>";
        echo "</div>";
    }
    ?>

</body>
</html>