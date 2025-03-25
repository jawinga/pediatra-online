document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".formulario-contenedor");
  const emailInput = form.querySelector('input[name="email"]');
  const passwordInput = form.querySelector('input[name="password"]');

  form.addEventListener("submit", function (e) {
    // Limpiar mensajes anteriores
    const existingAlert = document.querySelector(".alerta");
    if (existingAlert) {
      existingAlert.remove();
    }

    let errores = [];

    // Validación de email
    const email = emailInput.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      errores.push("Introduce un email válido.");
    }

    // Si hay errores, prevenir envío y mostrar mensaje
    if (errores.length > 0) {
      e.preventDefault();

      const alerta = document.createElement("div");
      alerta.classList.add("alerta");
      alerta.style.color = "red";
      alerta.style.marginTop = "10px";
      alerta.innerHTML = errores.join("<br>");

      form.insertBefore(alerta, form.firstChild);
    }
  });
});
