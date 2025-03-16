import FullCalendar from '@fullcalendar/react';
import dayGridPlugin from '@fullcalendar/daygrid';

function Calendario() {
  return (
    <FullCalendar
      plugins={[dayGridPlugin]}
      initialView="dayGridMonth"
      events={[
        { title: 'Cita con el pediatra', date: '2024-10-27' },
        // ... otros eventos
      ]}
    />
  );
}

export default Calendario;