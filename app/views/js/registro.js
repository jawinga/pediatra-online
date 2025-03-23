document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("registro-form");
  const alertaContainer = document.getElementById("alerta-container");

  form.addEventListener("submit", function (e) {
    // Limpiar alertas previas
    alertaContainer.innerHTML = "";

    const nombre = document.getElementById("nombre").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm_password").value;
    const terminos = document.getElementById("terminos_condiciones").checked;

    let errores = [];

    // Validación de cada campo
    if (nombre === "") {
      errores.push("El nombre es obligatorio.");
    }

    // Validación básica del email con expresión regular
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      errores.push("El email no es válido.");
    }

    if (password.length < 6) {
      errores.push("La contraseña debe tener al menos 6 caracteres.");
    }

    if (password !== confirmPassword) {
      errores.push("Las contraseñas no coinciden.");
    }

    if (!terminos) {
      errores.push("Debes aceptar los términos y condiciones.");
    }

    // Si hay errores, prevenimos el envío y mostramos la alerta
    if (errores.length > 0) {
      e.preventDefault();
      const alerta = document.createElement("div");
      alerta.classList.add("alerta");
      alerta.innerHTML = errores.join("<br>");
      alertaContainer.appendChild(alerta);
      return;
    }

    // Si todo es correcto, guardamos los datos en localStorage (solo para demostración)
    localStorage.setItem("registro_nombre", nombre);
    localStorage.setItem("registro_email", email);
  });
});
