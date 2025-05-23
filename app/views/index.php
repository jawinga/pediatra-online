<?php session_start(); 

if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calendario Pediátrico</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.min.js"></script>
  <link rel="stylesheet" href="../components/components.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../components/sin-hijos-banner/sin-hijos-banner.css">
    <link rel="stylesheet" href="./css/pageStyle.css">
    <link rel="stylesheet" href="../views/css/index.css">
</head>
<body class="body-calendar">

    <!-- Navbar -->
    <header><?php include(__DIR__ . '/../components/navbar.php'); ?></header>

  <main class="mb-5">
    <div class="container-xl container-calendar">
      <div class="calendar-form-wrapper">

        <div id="calendar"></div>

        <div class="form-container">
          <h2 class="mt-4 fw-bold">Agendar Cita</h2>
          <form id="formCita">
            <?php
            require_once '../models/Hijo.php';
            require_once '../models/Cita.php';
            require_once '../../config/database.php';
            $citas = Cita::obtenerPorUsuario($conn, $_SESSION['usuario_id']);
            $hijos = Hijo::obtenerPorUsuario($conn, $_SESSION['usuario_id']);
            ?>

            <label for="nombreHijo">Nombre del Niño:</label>
            <select id="nombreHijo" required>
              <?php foreach ($hijos as $hijo): ?>
                <option value="<?= $hijo['id'] ?>"><?= htmlspecialchars($hijo['nombre']) ?></option>
              <?php endforeach; ?>
            </select>

            <label for="tipoVacuna">Tipo de Vacuna:</label>
                <select id="tipoVacuna" required>
                <option value="" disabled selected>Selecciona una vacuna</option>
                <option value="Hexavalente">Hexavalente</option>
                <option value="Triple Vírica">Triple Vírica</option>
                <option value="Varicela">Varicela</option>
            <option value="MenACWY">MenACWY</option>
            </select>

            <label for="centroMedico">Centro Médico:</label>
            <select id="centroMedico" required>
      <option value="" disabled selected>Selecciona un centro</option>
      <optgroup label="Hospitales Públicos">
        <option value="Hospital Universitario La Paz">Hospital Universitario La Paz</option>
        <option value="Hospital General Universitario Gregorio Marañón">Hospital General Universitario Gregorio Marañón</option>
        <option value="Hospital Universitario 12 de Octubre">Hospital Universitario 12 de Octubre</option>
        <option value="Hospital Clínico San Carlos">Hospital Clínico San Carlos</option>
        <option value="Hospital Universitario Ramón y Cajal">Hospital Universitario Ramón y Cajal</option>
        <option value="Hospital Universitario Puerta de Hierro Majadahonda">Hospital Universitario Puerta de Hierro Majadahonda</option>
        <option value="Hospital Universitario Infanta Leonor">Hospital Universitario Infanta Leonor</option>
        <option value="Hospital Universitario Infanta Sofía">Hospital Universitario Infanta Sofía</option>
        <option value="Hospital Universitario Infanta Cristina">Hospital Universitario Infanta Cristina</option>
        <option value="Hospital Universitario Infanta Elena">Hospital Universitario Infanta Elena</option>
        <option value="Hospital Universitario del Henares">Hospital Universitario del Henares</option>
        <option value="Hospital Universitario de Fuenlabrada">Hospital Universitario de Fuenlabrada</option>
        <option value="Hospital Universitario de Móstoles">Hospital Universitario de Móstoles</option>
        <option value="Hospital Universitario Rey Juan Carlos">Hospital Universitario Rey Juan Carlos</option>
        <option value="Hospital Universitario Severo Ochoa">Hospital Universitario Severo Ochoa</option>
        <option value="Hospital Universitario Príncipe de Asturias">Hospital Universitario Príncipe de Asturias</option>
        <option value="Hospital Universitario del Tajo">Hospital Universitario del Tajo</option>
        <option value="Hospital Universitario de Getafe">Hospital Universitario de Getafe</option>
        <option value="Hospital Universitario de Torrejón">Hospital Universitario de Torrejón</option>
        <option value="Hospital Universitario de El Escorial">Hospital Universitario de El Escorial</option>
        <option value="Hospital Virgen de la Poveda">Hospital Virgen de la Poveda</option>
        <option value="Hospital Central de la Cruz Roja San José y Santa Adela">Hospital Central de la Cruz Roja San José y Santa Adela</option>
        <option value="Hospital Santa Cristina">Hospital Santa Cristina</option>
        <option value="Hospital Dr. Rodríguez Lafora">Hospital Dr. Rodríguez Lafora</option>
        <option value="Hospital Carlos III">Hospital Carlos III</option>
        <option value="Hospital de Guadarrama">Hospital de Guadarrama</option>
        <option value="Hospital de La Fuenfría">Hospital de La Fuenfría</option>
      </optgroup>
      <optgroup label="Hospitales Privados">
        <option value="Hospital Universitario HM Montepríncipe">Hospital Universitario HM Montepríncipe</option>
        <option value="Hospital Universitario HM Sanchinarro">Hospital Universitario HM Sanchinarro</option>
        <option value="Hospital Universitario HM Puerta del Sur">Hospital Universitario HM Puerta del Sur</option>
        <option value="Hospital Universitario HM Torrelodones">Hospital Universitario HM Torrelodones</option>
        <option value="Hospital Universitario HM Nuevo Belén">Hospital Universitario HM Nuevo Belén</option>
        <option value="Hospital Universitario HM Vallés">Hospital Universitario HM Vallés</option>
        <option value="Hospital Universitario HM Madrid">Hospital Universitario HM Madrid</option>
        <option value="Hospital Universitario Quirónsalud Madrid">Hospital Universitario Quirónsalud Madrid</option>
        <option value="Hospital Ruber Internacional">Hospital Ruber Internacional</option>
        <option value="Clínica Universidad de Navarra (Madrid)">Clínica Universidad de Navarra (Madrid)</option>
        <option value="Hospital Sanitas La Moraleja">Hospital Sanitas La Moraleja</option>
        <option value="Hospital Sanitas La Zarzuela">Hospital Sanitas La Zarzuela</option>
        <option value="Hospital Universitario Fundación Jiménez Díaz">Hospital Universitario Fundación Jiménez Díaz</option>
      </optgroup>
    </select>



            <label for="fechaCita">Fecha:</label>
            <input type="date" id="fechaCita" required>

            <label for="horaCita">Hora:</label>
            <input type="time" id="horaCita" required>

            <button type="button" onclick="guardarCita()">Guardar</button>
          </form>
        </div>

      </div>
    </div>
  </main>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    let calendarEl = document.getElementById('calendar');
    let calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'es',
      events: <?= json_encode(array_map(fn($cita) => [
        'title' => $cita['titulo'],
        'start' => $cita['fecha'],
        'allDay' => false
      ], $citas)); ?>,
      eventClick: function(info) {
        alert(`📌 ${info.event.title}\n🕒 ${info.event.start.toLocaleString()}`);
      }
    });
    calendar.render();
  });

  function guardarCita() {
    const hijo_id = document.getElementById('nombreHijo').value;
    const fecha = document.getElementById('fechaCita').value;
    const hora = document.getElementById('horaCita').value;
    const tipo_vacuna = document.getElementById('tipoVacuna').value;
    const centro_medico = document.getElementById('centroMedico').value;

    if (!hijo_id || !fecha || !hora || !tipo_vacuna || !centro_medico) {
      return alert('Por favor, completa todos los campos.');
    }

    const cita = {
      hijo_id: hijo_id,
      fecha: `${fecha}T${hora}`,
      tipo_vacuna: tipo_vacuna,
      centro_medico: centro_medico
    };

    fetch('../controllers/guardarCita.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(cita)
    })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          alert('✅ Cita guardada con éxito.');
          document.getElementById('formCita').reset();
          location.reload();
        } else {
          alert('❌ Error al guardar la cita.');
        }
      })
      .catch(error => {
        console.error('Error al enviar la cita:', error);
        alert('❌ Ocurrió un error inesperado.');
      });
  }
  </script>

    <!-- Footer -->
  <?php include(__DIR__ . '/../components/footer.php'); ?>

</body>
</html>