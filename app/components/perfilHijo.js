import React, { useState } from 'react';

function PerfilHijo() {
  const [nombre, setNombre] = useState('Nombre del niño');
  // ... otros estados

  return (
    <div>
      <h2>Perfil de {nombre}</h2>
      {/* ... otros campos del perfil */}
      <button>Guardar</button>
    </div>
  );
}

export default PerfilHijo;