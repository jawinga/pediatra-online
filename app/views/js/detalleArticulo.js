const params = new URLSearchParams(window.location.search);
const id = params.get("id");

fetch("../../articulos.json")
  .then((res) => res.json())
  .then((data) => {
    const articulo = data.find((art) => art.id == id);

    if (!articulo) {
      document.body.innerHTML = "<h2>Artículo no encontrado</h2>";
      return;
    }

    document.getElementById("titulo").textContent = articulo.titulo;
    document.getElementById("categoria").textContent = articulo.categoria;
    document.getElementById("imagen").src = articulo.imgUrl;
    document.getElementById("imagen").alt = "Imagen de " + articulo.titulo;
    document.getElementById("subtitulo").textContent = articulo.subtitulo;
    document.getElementById("texto").textContent = articulo.texto;
  })
  .catch((error) => {
    console.error("Error al cargar el artículo:", error);
  });
