document.addEventListener("DOMContentLoaded", function () {
    let calendarEl = document.getElementById("calendar");

    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        locale: "es",
        events: "../app/controllers/CalendarioController.php?action=obtenerCitas"
    });

    calendar.render();
});


