<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link rel="stylesheet" href="css/registro.css">
  <link rel="stylesheet" href="../../public/css/reseteo.css">
  <link rel="stylesheet" href="../../app/components/components.css">
  <link rel="stylesheet" href="../../app/components/components.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="registro-container">
    <div class="form-wrapper">
      <div class="form-header">
        <!-- Ícono similar al login -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icono" viewBox="0 0 24 24" width="48" height="48">
          <polygon fill="#34495e" points="12.718 4.707 11.305 3.292 2.585 12 11.305 20.707 12.718 19.292 6.417 13 20 13 20 11 6.416 11 12.718 4.707"/>
        </svg>
        <h1 class="titulo-login">Registro</h1>
      </div>
      
      <!-- Contenedor para alertas de error -->
      <div id="alerta-container"></div>
      
      <form id="registro-form" class="formulario-contenedor" action="../app/controllers/RegisterController.php" method="POST">
        <div class="input-group">
          <label for="nombre" class="label">Nombre:</label>
          <input type="text" name="nombre" id="nombre" class="input" required>
        </div>
        <div class="input-group">
          <label for="email" class="label">Email:</label>
          <input type="email" name="email" id="email" class="input" required>
        </div>
        <div class="input-group">
          <label for="password" class="label">Contraseña:</label>
          <input type="password" name="password" id="password" class="input" required>
        </div>
        <div class="input-group">
          <label for="confirm_password" class="label">Confirmar Contraseña:</label>
          <input type="password" name="confirm_password" id="confirm_password" class="input" required>
        </div>
        <div class="input-group checkbox-group">
          <input type="checkbox" name="terminos_condiciones" id="terminos_condiciones" required>
          <label for="terminos_condiciones" class="label-check">Acepto los términos y condiciones</label>
        </div>
        <button type="submit" class="cta">Registrarse</button>
      </form>
      <p class="info">¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>
    </div>
    <div class="image-wrapper">
      <img src="img/login-img.jpg" alt="Registro" class="imagen">
    </div>
  </div>
  
  <script src="js/registro.js"></script>
</body>
</html>
