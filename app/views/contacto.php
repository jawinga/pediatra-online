<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <title>Contacto</title>
    <link rel="stylesheet" href="./css/pageStyle.css">

</head>
<body>
    <header>
        <nav class="navbar" id="navbar">
            <div class="logo"><img src="linkAlLogo" alt="PediVax"></div>
            <ul class="nav-links">
                <li><a href="#">Calendario</a></li>
                <li><a href="./quienesSomos.php">Quiénes somos</a></li>
                <li><a href="#">Recursos</a></li>
                <li><a href="./contacto.php">Contacto</a></li>
            </ul>
            
            <div class="auth-buttons">
                <button class="btn login"><strong>Iniciar Sesión</strong></button>
                <button class="btn register"><strong>Crear Cuenta</strong></button>
            </div>
            <div class="menu-toggle">&#9776;</div> <!-- Icono tipo hamburguesa -->
        </nav>
    </header>
    
    <section class="hero">
        <h1><strong>¡Contacta con nosotros!<strong></h1>
        <p>Haznos saber tus dudas rellenando este formulario.</p>
    </section>

    <form method="post" action="addEvent2.php">
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" name="fecha" id="fecha" required><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required><br><br>
        <label for="mensaje" name="mensaje" id="mensaje">Mensaje:</label><textarea></textarea>
        
        <input type="submit" class="btn enviar" value="Enviar">
    </form>

    <script>
        //Genera el menú de hamburguesa y lo esconde si el dispositivo es demasiado grande.
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>

    <script src="./js/pages.js"></script>

</body>
</html>