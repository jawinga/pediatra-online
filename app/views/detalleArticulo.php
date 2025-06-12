<!--Documento-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/detalleArticulo.css">
	<link rel="stylesheet" href="../../app/components/components.css">
  	<link rel="stylesheet" href="../../app/views/css/pageStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

<body>

    <!-- Navbar -->
    <header><?php include(__DIR__ . '/../components/navbar.php'); ?></header>

  <main id="detalle-articulo">

  <div class="titulo-container">


  <a href="../views/recursos.php">

  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
    <polygon fill="#34495e" points="12.718 4.707 11.305 3.292 2.585 12 11.305 20.707 12.718 19.292 6.417 13 20 13 20 11 6.416 11 12.718 4.707"/>
  </svg>

  </a>
    <h1 id="titulo"></h1>



  </div>

    <p id="categoria"></p>
    <img id="imagen" src="" alt="" />
    <h2 id="subtitulo"></h2>
    <p id="texto"></p>
  </main>

  <script src="js/detalleArticulo.js"></script>
</body>

<body>
    
</body>
</html>