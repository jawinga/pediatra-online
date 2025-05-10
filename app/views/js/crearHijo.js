const avatarLabels = document.querySelectorAll(".avatar-label");

avatarLabels.forEach((label) => {
  label.addEventListener("click", () => {
    avatarLabels.forEach((l) => l.classList.remove("selected"));

    label.classList.add("selected");

    const radio = label.querySelector("input[type='radio']");
    radio.checked = true;

    const img = label.querySelector("img");
    console.log("Has seleccionado el avatar", img.dataset.key);
  });
});
