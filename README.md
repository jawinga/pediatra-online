📂 Descripción de Cada Carpeta
A continuación, se explica la función de cada carpeta:

📁 APP/ → Lógica de la aplicación
Contiene la estructura principal del backend, separando la lógica en componentes, controladores, modelos y vistas.

📂 components/ → Archivos reutilizables para la interfaz
        🏗 Ejemplo: header.php, footer.php, navbar.php

📂 controllers/ → Controladores (manejo de lógica de negocio)
          📄 LoginController.php → Procesa el inicio de sesión y manejo de sesiones.
          📄 RegisterController.php → Maneja el registro de usuarios en la base de datos.
          📄 LogoutController.php → Permite cerrar sesión de forma segura.

📂 models/ → Modelos (interacción con la base de datos)
          📄 Usuario.php → Modelo de usuario para manejar autenticación y consultas SQL.

📂 views/ → Vistas (páginas que el usuario ve)
        📄 login.php → Página de inicio de sesión.
        📄 signup.php → Página de registro de nuevos usuarios.
        📄 perfil.php → Página de perfil del usuario después del inicio de sesión.



📁 CONFIG/ → Configuración del proyecto
Contiene archivos esenciales para la conexión a la base de datos y otras configuraciones globales.

        📄 database.php → Archivo de conexión a la base de datos (PDO con MySQL).
        📄 config.php → Variables de entorno y ajustes generales.


📁 public/ → Archivos públicos (Frontend)
Almacena archivos estáticos utilizados en el proyecto.

      📂 css/ → Hojas de estilo
      🎨 styles.css → Archivo principal para darle diseño al proyecto.
      📂 img/ → Imágenes
      🖼 Íconos, avatares y otros gráficos del proyecto.
      📂 js/ → Archivos JavaScript
      ⚡ scripts.js → Interacciones dinámicas del frontend.
      📂 svg/ → Íconos vectoriales
      🖌 Archivos en formato SVG para mejorar el diseño.

        
