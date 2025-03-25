a📂 Descripción de Cada Carpeta
A continuación, se explica la función de cada carpeta:

📁 app/ → Lógica de la aplicación
Contiene la estructura principal del backend.

        📂 components/ → Contiene archivos reutilizables para la interfaz (ej. header, footer).

        📂 controllers/ → Procesa las solicitudes HTTP y maneja la lógica de negocio.
                📄 LoginController.php → Controlador para manejar el inicio de sesión.
                📄 RegisterController.php → Controlador para registrar usuarios.

        📂 models/ → Se conecta con la base de datos y define las entidades.
                📄 Usuario.php → Modelo que maneja las operaciones de usuario en la BD.

        📂 views/ → Contiene las páginas visibles para el usuario.
                📄 login.php → Página de inicio de sesión.
                📄 signup.php → Página de registro.
                📄 perfil.php → Perfil del usuario después de iniciar sesión.

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


