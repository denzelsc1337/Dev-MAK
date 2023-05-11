const bsStepper = document.querySelector(".bs-stepper");
const bsStepperContent = bsStepper.querySelector(".bs-stepper-content");
const bsSContent = bsStepperContent.querySelectorAll(".content");

(() => {
  // const section = document.querySelectorAll(".section");
  // section.forEach((section) => {
  //   if (!section.classList.contains("show")) {
  //     section.classList.add("hide");
  //   }
  // });

  function hideScreen() {
    // Ocultar todas las pantallas
    const pantallas = document.querySelectorAll(".section");
    pantallas.forEach(function (pantalla) {
      // pantalla.style.display = "none";
      // pantalla.classList.add("hide");
      if (!pantalla.classList.contains("show")) {
        pantalla.classList.add("hide");
      }
    });
  }
  hideScreen();

  const nextPag = document.querySelector(".nextPag");
  const backPag = document.querySelectorAll(".backPag");
  const sigPag = document.querySelectorAll(".sigPag");
  const atrPag = document.querySelector(".atrPag");

  document.addEventListener("DOMContentLoaded", function () {
    // código JavaScript que se ejecutará cuando se cargue la página
    // console.log("aol");
    Pasos();
  });

  function pantallaActual() {
    const screens = document.querySelector(".section.show");
    screens.classList.remove("show");
    // if (screens) {

    // }
    // const pantallaActual = document.querySelector('[style*="display: block"]');
    // pantallaActual.style.display = "none";
  }

  function Pasos() {
    // var dash = document.querySelector('[style*="display: block"]'),k
    var dash = document.querySelector(".section.show"),
      dashTarget = dash.getAttribute("data-target");
    let steps = document.querySelectorAll(".step");

    let lines = document.querySelectorAll(".line");
    // console.log(line);

    lines.forEach((lns) => {
      var line = lns.getAttribute("data-target");

      if (dashTarget !== line) {
        lns.style.display = "none";
      } else {
        lns.style.display = "block";
      }
    });

    steps.forEach((element) => {
      let step = element.getAttribute("data-target");

      if (dashTarget === step) {
        element.classList.add("active");
      } else {
        element.classList.remove("active");
      }
    });
  }

  nextPag.addEventListener("click", () => {
    // Obtener el valor seleccionado del combobox
    const pantallaSeleccionada = document.getElementById("tipo_prop").value;

    if (pantallaSeleccionada > 0) {
      pantallaActual();
      hideScreen();

      //   // Mostrar la siguiente pantalla correspondiente al valor seleccionado
      //   // if (pantallaSeleccionada !== "") {
      const siguientePantalla = document.getElementById(pantallaSeleccionada);
      //   //   // siguientePantalla.style.display = "block";
      siguientePantalla.classList.remove("hide");
      siguientePantalla.classList.add("show");
      //   //   hideScreen();
      Pasos();
      //   // }
      //   const siguientePantalla = document.getElementById(pantallaSeleccionada);
      //   siguientePantalla.classList.add("show");

      localStorage.setItem('dir_r', document.getElementById('direccion_').value);
      localStorage.setItem('tipo_prop_r', document.getElementById('tipo_prop').selectedOptions[0].textContent);
      localStorage.setItem('sub_tipo_prop_r', document.getElementById('sub_tipo_prop').selectedOptions[0].textContent);
      localStorage.setItem('tipo_prom_r', document.getElementById('tipo_prom').selectedOptions[0].textContent);


      document.getElementById('dire_resumen').innerHTML = localStorage.getItem('dir_r');
      document.getElementById('tipo_prop_resumen').innerHTML = localStorage.getItem('tipo_prop_r');
      
      document.getElementById('sub_tipo_prop_resumen').innerHTML = localStorage.getItem('sub_tipo_prop_r');
      document.getElementById('tipo_i').innerHTML = localStorage.getItem('sub_tipo_prop_r');

      document.getElementById('tipo_prom_resumen').innerHTML = localStorage.getItem('tipo_prom_r');


      //direccion
      if (localStorage.getItem('dir_r')) {
        document.getElementById('dire_resumen').innerHTML = 'Dirección: ' + localStorage.getItem('dir_r');
      }

      //tipo de propiedad
      if(localStorage.getItem('tipo_prop_r')){
        document.getElementById('tipo_prop_resumen').innerHTML = 'Tipo de propiedad: '+localStorage.getItem('tipo_prop_r');
      }

      //subtipo de propiedad
      if(localStorage.getItem('sub_tipo_prop_r')){
        document.getElementById('sub_tipo_prop_resumen').innerHTML = 'SubTipo de propiedad: '+localStorage.getItem('sub_tipo_prop_r');
      }

      //tipo promo
      if(localStorage.getItem('tipo_prom_r')){
        document.getElementById('tipo_prom_resumen').innerHTML = 'Tipo de Promocion: '+localStorage.getItem('tipo_prom_r');
      }


    } else {
      alert("Seleccione un tipo de Inmueble.");
    }
  });

  backPag.forEach((element) => {
    element.addEventListener("click", () => {
      // Ocultar la pantalla actual
      pantallaActual();
      hideScreen();
      // Mostrar la primera pantalla
      const primeraPantalla = document.getElementById("0");
      // primeraPantalla.style.display = "block";
      primeraPantalla.classList.remove("hide");
      primeraPantalla.classList.add("show");

      Pasos();
    });
  });

  sigPag.forEach((element) => {
    element.addEventListener("click", () => {
      // Ocultar la pantalla actual
      pantallaActual();
      hideScreen();
      // Mostrar la última pantalla
      const ultimaPantalla = document.querySelector(".section:last-of-type");
      // ultimaPantalla.style.display = "block";
      ultimaPantalla.classList.remove("hide");
      ultimaPantalla.classList.add("show");

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
      // siguientePantalla.style.display = "block";
      siguientePantalla.classList.remove("hide");
      siguientePantalla.classList.add("show");

      Pasos();
    }
  });
})();
