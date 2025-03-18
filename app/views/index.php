<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calendario Pediátrico</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
        #calendar {
            margin-top: 20px;
        }
        .btn {
            background: #28a745;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin: 10px;
        }
        .btn:hover {
            background: #218838;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Bienvenido, <?php echo $_SESSION['nombre'] ?? 'Invitado'; ?></h1>
    <button class="btn" onclick="mostrarModal()">Agendar Cita</button>
    <button class="btn" onclick="mostrarModalHijo()">Añadir Hijo</button>
    <div id="calendar"></div>
</div>

<!-- MODAL PARA AGENDAR CITA -->
<div id="modal" class="modal">
    <div class="modal-content">
        <h3>Agendar Cita</h3>
        <label>Nombre del Niño:</label>
        <select id="nombreHijo"></select>
        <label>Fecha:</label>
        <input type="date" id="fechaCita">
        <label>Hora:</label>
        <input type="time" id="horaCita">
        <button onclick="guardarCita()">Guardar</button>
        <button onclick="cerrarModal()">Cancelar</button>
    </div>
</div>

<!-- MODAL PARA AÑADIR HIJO -->
<div id="modalHijo" class="modal">
    <div class="modal-content">
        <h3>Añadir Hijo</h3>
        <label>Nombre:</label>
        <input type="text" id="nuevoHijo">
        <button onclick="guardarHijo()">Guardar</button>
        <button onclick="cerrarModalHijo()">Cancelar</button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let calendarEl = document.getElementById('calendar');
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'es',
        events: JSON.parse(localStorage.getItem('citas')) || [],
    });
    calendar.render();
});

// Funciones para modales
function mostrarModal() {
    cargarHijos();
    document.getElementById('modal').style.display = 'flex';
}
function cerrarModal() {
    document.getElementById('modal').style.display = 'none';
}
function mostrarModalHijo() {
    document.getElementById('modalHijo').style.display = 'flex';
}
function cerrarModalHijo() {
    document.getElementById('modalHijo').style.display = 'none';
}

// Guardar hijo en localStorage
function guardarHijo() {
    let nombreHijo = document.getElementById('nuevoHijo').value;
    if (!nombreHijo) return alert('Por favor, ingresa un nombre.');

    let hijos = JSON.parse(localStorage.getItem('hijos')) || [];
    hijos.push(nombreHijo);
    localStorage.setItem('hijos', JSON.stringify(hijos));

    alert('Hijo añadido con éxito');
    cerrarModalHijo();
}

// Cargar hijos en el selector
function cargarHijos() {
    let hijos = JSON.parse(localStorage.getItem('hijos')) || [];
    let select = document.getElementById('nombreHijo');
    select.innerHTML = '';
    hijos.forEach(hijo => {
        let option = document.createElement('option');
        option.value = hijo;
        option.textContent = hijo;
        select.appendChild(option);
    });
}

// Guardar cita en localStorage
function guardarCita() {
    let nombreHijo = document.getElementById('nombreHijo').value;
    let fecha = document.getElementById('fechaCita').value;
    let hora = document.getElementById('horaCita').value;
    
    if (!nombreHijo || !fecha || !hora) {
        return alert('Por favor, completa todos los campos.');
    }

    let nuevaCita = {
        title: `Cita para ${nombreHijo}`,
        start: `${fecha}T${hora}`,
        allDay: false
    };

    let citas = JSON.parse(localStorage.getItem('citas')) || [];
    citas.push(nuevaCita);
    localStorage.setItem('citas', JSON.stringify(citas));

    alert('Cita agendada con éxito.');
    location.reload(); // Recargar para actualizar el calendario
}
</script>

</body>
</html>

