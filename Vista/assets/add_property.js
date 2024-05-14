const tabContents = document.querySelectorAll(".tab-content");

console.log(tabContents);

tabContents.forEach((tabs) => {
  if (!tabs.classList.contains("active")) {
    tabs.classList.add("hide");
  }
});

// -----------------------
// -----------------------

// Selecciona todos los elementos con la clase "tab-content"
const tabItems = document.querySelectorAll(".tab");
const contentContainers = document.querySelectorAll(".tab-content");

console.log(contentContainers);

tabItems.forEach((element) => {
  element.addEventListener("click", () => {
    // Remueve la clase "mak-primary" de todos los tabs
    tabItems.forEach((item) => {
      item.classList.remove("mak-primary");
    });

    // Agrega la clase "mak-primary" solo al tab clicado
    element.classList.add("mak-primary");

    // Oculta todos los contenedores de contenido
    contentContainers.forEach((container) => {
      container.classList.remove("active");
    });

    // Muestra el contenedor de contenido correspondiente al tab clicado
    const targetId = element.getAttribute("data-target");
    document.getElementById(targetId).classList.add("active");
  });
});

// -----------------------
// -----------------------

const tipoModalidad = document.querySelectorAll(".tp-md");

tipoModalidad.forEach((element) => {
  element.addEventListener("click", () => {
    tipoModalidad.forEach((item) => {
      item.classList.remove("mak-primary");
    });
    element.classList.add("mak-primary");
    const data = element.getAttribute("data-target");

    document.querySelector("#tp-md").value = data;
  });
});
