<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <title>PediVax</title>
    <link rel="stylesheet" href="styles.css">
    <style>



        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        /*Comienza el contenido de la navbar*/

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 5%; /* Usamos porcentaje para mejor adaptación */
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            transition: background-color 0.3s, box-shadow 0.3s;
            z-index: 1000;
            box-sizing: border-box;
        }

        .logo {
        color: black;
        font-size: 1.5rem;
        font-weight: bold;
        }

        .scrolled {
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 30px; /* Reducido de 80px */
            white-space: nowrap;
            margin: 0 auto; /* Centra los links en el espacio disponible */
            padding: 0 20px; /* Espacio interno para evitar pegado a los bordes */
            /*text-wrap: nowrap;*/
        }

        .nav-links li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: auto;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .nav-links a:hover {
        color: gray;

        }

        .auth-buttons .btn {
            font-family: 'Montserrat', sans-serif;
            padding: 10px 12px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-wrap: nowrap;
            display: flex;
            align-items: center;
            gap: 12px; /* Reemplaza los márgenes individuales */
            margin-right: 15px; /* Margen derecho adicional para el contenedor */
        }

        .login {
            margin-right: 15px;
            background-color: #50b4e6;
            color: white;
            
        }

        .register {
            margin-right: 30px;
            background-color: #6a0dad;
            color: white;

        }

        .login:hover, .register:hover {
            opacity: 0.8;
        }

        .menu-toggle {
            display: none;
            font-size: 2rem;
            cursor: pointer;
        }


        /* Media queries ajustados */
        @media screen and (max-width: 1024px) {
            .nav-links {
                gap: 20px; /* Espacio aún más reducido en pantallas medianas */
            }
            
            .auth-buttons {
                gap: 5px;
                margin-right: 10px;
            }
        }

        @media screen and (max-width: 900px) {
            .nav-links {
                gap: 15px;
                font-size: 0.95rem; /* Reducimos ligeramente el tamaño de fuente */
            }
            
            .auth-buttons .btn {
                padding: 8px 10px;
                font-size: 0.8rem;
            }
        }

        /* Cambiamos el breakpoint a 850px para que salte antes */
        @media screen and (max-width: 850px) {
            .navbar {
                padding: 15px 20px; /* Más padding lateral en móvil */
                justify-content: space-between;
                flex-wrap: nowrap;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                width: 100%;
                background-color: white;
                position: absolute;
                top: 60px;
                left: 0;
                text-align: center;
                padding: 10px 0;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                gap: 15px;
            }

            .nav-links.active {
                display: flex;
            }

            .auth-buttons {
                order: 2;
                margin-left: auto;
                margin-right: 20px; /* Aseguramos margen derecho */
            }

            .auth-buttons .btn {
                padding: 8px 12px;
                font-size: 0.85rem;
            }

            .auth-buttons .login {
                margin-right: 10px;
            }

            .auth-buttons .register {
                margin-right: auto;
            }

            .menu-toggle {
                display: block;
                order: 3;
                margin-left: 0;
                padding-right: 0;
                font-size: 1.8rem;
                flex-shrink: 0;
            }

            .logo {
                order: 1;
                margin-left: 0;
                max-width: 120px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
        }

        @media screen and (max-width: 768px) {
            .info, .info:nth-child(even) {
                flex-direction: column;
                text-align: center;
                padding: 40px 20px;
            }

            .info-content, .info-image {
                max-width: 100%;
                padding: 20px 0;
            }

            .info-image {
                margin-top: 20px;
                order: 2;
            }
        }

        @media screen and (max-width: 480px) {
            .auth-buttons .btn {
                padding: 6px 10px;
                font-size: 0.75rem;
            }
            
            .menu-toggle {
                font-size: 1.6rem;
            }
            
            .navbar {
                padding: 15px 10px;
            }
            
            .logo {
                max-width: 100px;
            }

            .auth-buttons {
            margin-right: 10px;
            }
        }

        .auth-buttons {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 10px;
        }

        /*fin sección de la navbar y empieza el cuerpo del documento*/
        
        .hero {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background: linear-gradient(to right, #2a52be, #6a0dad);
            color: white;
            padding: 100px 50px 50px;
            margin-top: 30px;
        }

        .hero-content {
            max-width: 500px;
        }

        .hero-content h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        .cta {
            background-color: #ff3b5c;
            padding: 10px 20px;
            border: none;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 10px;
            border-radius: 5px;
        }

        .cta:hover {
            background-color: #6a0dad;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .hero-image img {
            width: 200px;
            height: auto;
            border-radius: 50%;
        }

        .info {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px 5%;
            text-align: left;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .info.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .info:nth-child(even) {
        flex-direction: row-reverse;
        background-color: #f0f2f5; /* Fondo alternado para mejor visualización */
        }

        .info h2 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .info-content {
        flex: 1;
        padding: 0 40px;
        max-width: 50%;
        }

        .info-image {
            flex: 1;
            max-width: 40%;
            text-align: center;
        }

        .info-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .info-image img:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        /*Barra de scroll con colores*/

        body::-webkit-scrollbar {
        width: 15px;               
        }

        body::-webkit-scrollbar-track {
            background: linear-gradient(165deg,rgb(247, 1, 214) 35%, #6a0dad,rgb(255, 255, 255));      /* color of the tracking area */
        }

        body::-webkit-scrollbar-thumb {
            background-color:rgb(114, 114, 114);
            border-radius: 20px;

        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar" id="navbar">
            <div class="logo"><img src="linkAlLogo" alt="PediVax"></div>
            <ul class="nav-links">
                <li><a href="#">Calendario</a></li>
                <li><a href="#">Quiénes somos</a></li>
                <li><a href="#">Recursos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
            
            <div class="auth-buttons">
                <button class="btn login"><strong>Iniciar Sesión</strong></button>
                <button class="btn register"><strong>Crear Cuenta</strong></button>
            </div>
            <div class="menu-toggle">&#9776;</div> <!-- Icono tipo hamburguesa -->
        </nav>
    </header>
    
    <section class="hero">
        <div class="hero-content">
            <h1>Texto para captar la atención de los usuarios</h1>
            <p>Texto explicativo <strong>más largo</strong> para desarrollar la frase de arriba con más detalle y aprovechando la <strong>negrita</strong>.</p>
            <button class="btn cta"><strong>¡Únete ahora!</strong></button>
        </div>
        <div class="hero-image">
            <img src="mother-child.png" alt="Madre con su hijo">
        </div>
    </section>
    
    <section class="info">
        <div class="info-content">
            <h2>Importancia de la vacunación infantil</h2>
            <p>Las vacunas previenen enfermedades peligrosas. Según la OMS, evitan 2-3 millones de muertes anuales. La inmunización completa protege a los niños y a toda la comunidad.</p>
        </div>
        <div class="info-image">
            <img src="https://via.placeholder.com/400x300?text=Niño+vacunado" alt="Vacunación infantil">
        </div>
    </section>

    <section class="info">
        <div class="info-content">
            <h2>Calendario de vacunación</h2>
            <p>Nuestro calendario sigue las recomendaciones de la Asociación Española de Pediatría. Incluye todas las vacunas desde el nacimiento hasta la adolescencia con recordatorios automáticos.</p>
        </div>
        <div class="info-image">
            <img src="https://via.placeholder.com/400x300?text=Calendario" alt="Calendario de vacunación">
        </div>
    </section>

    <section class="info">
        <div class="info-content">
            <h2>Seguridad comprobada</h2>
            <p>Las vacunas pasan por rigurosas pruebas. Menos del 0.01% experimenta efectos secundarios graves. Los beneficios superan ampliamente los riesgos potenciales.</p>
        </div>
        <div class="info-image">
            <img src="https://via.placeholder.com/400x300?text=Seguridad" alt="Seguridad de vacunas">
        </div>
    </section>

    <section class="info">
        <div class="info-content">
            <h2>Protección colectiva</h2>
            <p>Cuando el 95% de la población está vacunada, se logra inmunidad de grupo. Esto protege a quienes no pueden vacunarse por razones médicas.</p>
        </div>
        <div class="info-image">
            <img src="https://via.placeholder.com/400x300?text=Comunidad" alt="Protección colectiva">
        </div>
    </section>

    <script>
        //Transparencia al hacer scroll hacia abajo en la navbar.
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
        //Genera el menú de hamburguesa y lo esconde si el dispositivo es demasiado grande.
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>

    <script>
    // Animación al hacer scroll
    document.addEventListener('DOMContentLoaded', () => {
        const infoSections = document.querySelectorAll('.info');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1 // Activa cuando el 10% del elemento es visible
        });

        infoSections.forEach(section => {
            observer.observe(section);
        });
        
        // Efecto hover para imágenes (ya funciona solo con el CSS)
    });
    </script>
</body>
</html>