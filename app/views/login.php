<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="../../app/components/components.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="contenedor">

    <div class="formulario">
        <span class="subtitulo-login">Estamos encantados de verte volver</span>

        
        <div class="contenedor-titulo">


        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
        <polygon fill="#34495e" points="12.718 4.707 11.305 3.292 2.585 12 11.305 20.707 12.718 19.292 6.417 13 20 13 20 11 6.416 11 12.718 4.707"/>
        </svg>

        <h1 class="titulo-login">Iniciar Sesión</h1>



        </div>
        


        <?php if (isset($_SESSION["error"])): ?>
    <p style="color: red;"><?php echo $_SESSION["error"]; unset($_SESSION["error"]); ?></p>
        <?php endif; ?>

        <form method="POST" class="formulario-contenedor" action="../controllers/loginController.php">

        <label class="label">Email:</label>
        <input type="email" name="email" required class="input" ><br>
    
        <label class="label">Contraseña:</label>
        <input type="password" name="password" required class="input"><br>

        <button type="submit" class="cta">Iniciar sesión</button>
        </form>

        <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>

            </div>

         
            <img src="img/login-img.jpg" class="imagen-login">


    </div>

    <script src="js/login.js"></script>

    
</body>
</html>
