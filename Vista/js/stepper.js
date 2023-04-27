const bsStepper = document.querySelector(".bs-stepper");
const bsStepperContent = bsStepper.querySelector(".bs-stepper-content");
const bsSContent = bsStepperContent.querySelectorAll(".content");

(() => {
  const section = document.querySelectorAll(".section");
  section.forEach((section) => {
    if (!section.classList.contains("show")) {
      section.classList.add("hide");
    }
  });

  const nextPag = document.querySelector(".nextPag");
  const backPag = document.querySelectorAll(".backPag");
  const sigPag = document.querySelectorAll(".sigPag");
  const atrPag = document.querySelector(".atrPag");

  document.addEventListener("DOMContentLoaded", function () {
    // código JavaScript que se ejecutará cuando se cargue la página
    console.log("aol");
    Pasos();
  });

  function pantallaActual() {
    const pantallaActual = document.querySelector('[style*="display: block"]');
    pantallaActual.style.display = "none";
  }

  function Pasos() {
    var dash = document.querySelector('[style*="display: block"]'),
      dashTarget = dash.getAttribute("data-target");

    let steps = document.querySelectorAll(".step");

    steps.forEach((element) => {
      let step = element.getAttribute("data-target");

      if (dashTarget === step) {
        element.classList.add("active");
        if (element.classList.contains("active")) {
          var newLine = '<div class="line"></div>';

          element.insertAdjacentHTML("afterend", newLine);
        } else {
          // var line = document.querySelector(".line");
          element.removeChild(newLine);
        }
      } else {
        element.classList.remove("active");
      }
    });
  }

  nextPag.addEventListener("click", () => {
    // Obtener el valor seleccionado del combobox
    const pantallaSeleccionada = document.getElementById("tipo_prop").value;

    if (pantallaSeleccionada !== "Seleccione un tipo") {
      // Ocultar todas las pantallas
      const pantallas = document.querySelectorAll(".section");
      pantallas.forEach(function (pantalla) {
        pantalla.style.display = "none";
      });

      // Mostrar la siguiente pantalla correspondiente al valor seleccionado
      if (pantallaSeleccionada !== "") {
        const siguientePantalla = document.getElementById(pantallaSeleccionada);
        siguientePantalla.style.display = "block";

        Pasos();
      }
    } else {
      alert("Seleccione un tipo de Inmueble.");
    }
  });

  backPag.forEach((element) => {
    element.addEventListener("click", () => {
      // Ocultar la pantalla actual
      pantallaActual();

      // Mostrar la primera pantalla
      const primeraPantalla = document.getElementById("0");
      primeraPantalla.style.display = "block";

      Pasos();
    });
  });

  sigPag.forEach((element) => {
    element.addEventListener("click", () => {
      // Ocultar la pantalla actual
      pantallaActual();

      // Mostrar la última pantalla
      const ultimaPantalla = document.querySelector(".section:last-of-type");
      ultimaPantalla.style.display = "block";

      Pasos();
    });
  });

  atrPag.addEventListener("click", () => {
    // Ocultar la pantalla actual
    pantallaActual();

    // Obtener el valor seleccionado del combobox
    const pantallaSeleccionada = document.getElementById("tipo_prop").value;

    // // Obtener la pantalla anterior
    // const pantallas = document.querySelectorAll('[id^="pantalla"]');

    if (pantallaSeleccionada !== "") {
      const siguientePantalla = document.getElementById(pantallaSeleccionada);
      siguientePantalla.style.display = "block";

      Pasos();
    }
  });
})();
