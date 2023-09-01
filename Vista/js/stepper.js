const bsStepper = document.querySelector(".bs-stepper");
const bsStepperContent = bsStepper.querySelector(".bs-stepper-content");
const bsSContent = bsStepperContent.querySelectorAll(".content");

//buttons
var btn_casa = document.getElementById("btnValo_casa");
var btn_depa = document.getElementById("btnValo_depa");
var btn_terr = document.getElementById("btnValo_terren");
var btn_ofi = document.getElementById("btnValo_ofi");
var btn_lc_ex = document.getElementById("btnValo_lc_ex");
var btn_lc_com = document.getElementById("btnValo_lc_com");
var btn_li = document.getElementById("btnValo_lc_ind");

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
  const lstPag = document.querySelectorAll(".lstPag");
  const atrPag = document.querySelector(".atrPag");
  const antPag = document.querySelector(".antPag");

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

    console.log(dash);
    console.log(dashTarget);
    console.log(steps);
    console.log(lines);

    lines.forEach((lns) => {
      console.log(lns);
      var line = lns.getAttribute("data-target");
      console.log(line);


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

    if (pantallaSeleccionada > 0 && pantallaSeleccionada !== "5") {
      switch (pantallaSeleccionada) {
        case "1":
          btn_casa.style.display = "block"; // Muestra el botón
          btn_depa.style.display = "none";
          btn_terr.style.display = "none";
          btn_ofi.style.display = "none";
          btn_lc_ex.style.display = "none";
          btn_lc_com.style.display = "none";
          btn_li.style.display = "none";
          break;

        case "2":
          btn_casa.style.display = "none";
          btn_depa.style.display = "block";
          btn_terr.style.display = "none";
          btn_ofi.style.display = "none";
          btn_lc_ex.style.display = "none";
          btn_lc_com.style.display = "none";
          btn_li.style.display = "none";
          break;

        case "3":
          btn_casa.style.display = "none";
          btn_depa.style.display = "none";
          btn_terr.style.display = "block";
          btn_ofi.style.display = "none";
          btn_lc_ex.style.display = "none";
          btn_lc_com.style.display = "none";
          btn_li.style.display = "none";
          break;

        case "4":
          btn_casa.style.display = "none";
          btn_depa.style.display = "none";
          btn_terr.style.display = "none";
          btn_ofi.style.display = "block";
          btn_lc_ex.style.display = "none";
          btn_lc_com.style.display = "none";
          btn_li.style.display = "none";
          break;

        case "6":
          btn_casa.style.display = "none";
          btn_depa.style.display = "none";
          btn_terr.style.display = "none";
          btn_ofi.style.display = "none";
          btn_lc_ex.style.display = "none";
          btn_lc_com.style.display = "none";
          btn_li.style.display = "block";
          break;

        default:
          btn_casa.style.display = "none";
          btn_depa.style.display = "none";
          btn_terr.style.display = "none";
          btn_ofi.style.display = "none";
          btn_li.style.display = "none";
          break;
      }
      Pasos();
      pantallaActual();
      hideScreen();

      const siguientePantalla = document.getElementById(pantallaSeleccionada);

      siguientePantalla.classList.remove("hide");
      siguientePantalla.classList.add("show");


    } else if (pantallaSeleccionada === "5") {
      const sub_tipo_prop = document.querySelector("#sub_tipo_prop").value;

      if (sub_tipo_prop !== "-1") {
        const siguientePantalla_ =
          document.getElementById(pantallaSeleccionada);

        siguientePantalla_.classList.remove("hide");
        siguientePantalla_.classList.add("show");
        pantallaActual();
        hideScreen();

        const siguientePantalla_lcl_c =
          document.getElementById(pantallaSeleccionada);
        // console.log(siguientePantalla_lcl_c);
        const exclusivo = siguientePantalla_lcl_c.querySelector(".exclusivo");
        const comun = siguientePantalla_lcl_c.querySelector(".comun");

        if (sub_tipo_prop === "13") {
          exclusivo.classList.remove("hide");
          exclusivo.classList.add("show");

          btn_casa.style.display = "none";
          btn_depa.style.display = "none";
          btn_terr.style.display = "none";
          btn_ofi.style.display = "none";
          btn_lc_ex.style.display = "block";
          btn_li.style.display = "none";
        } else {
          exclusivo.classList.add("hide");
          exclusivo.classList.remove("show");
          btn_lc_ex.style.display = "none";
        }
        if (sub_tipo_prop === "14") {
          comun.classList.remove("hide");
          comun.classList.add("show");

          btn_casa.style.display = "none";
          btn_depa.style.display = "none";
          btn_terr.style.display = "none";
          btn_ofi.style.display = "none";
          btn_lc_com.style.display = "block";
          btn_li.style.display = "none";
        } else {
          comun.classList.add("hide");
          comun.classList.remove("show");
          btn_lc_com.style.display = "none";
        }
      } else {
        alert("Seleccione un Subtipo de Inmueble.");
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
      // Mostrar la penultima pantalla
      const penultimaPantalla = document.querySelector(
        ".section:nth-last-of-type(2)"
      );
      // penultimaPantalla.style.display = "block";
      penultimaPantalla.classList.remove("hide");
      penultimaPantalla.classList.add("show");

      Pasos();
    });
  });

  lstPag.forEach((element) => {
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
    hideScreen();

    // Obtener el valor seleccionado del combobox
    const pantallaSeleccionada = document.getElementById("tipo_prop").value;
    // console.log(pantallaSeleccionada);
    // // Obtener la pantalla anterior
    // const pantallas = document.querySelectorAll('[id^="pantalla"]');

    if (pantallaSeleccionada !== "") {
      const siguientePantalla = document.getElementById(pantallaSeleccionada);
      //console.log(siguientePantalla);
      // siguientePantalla.style.display = "block";
      siguientePantalla.classList.remove("hide");
      siguientePantalla.classList.add("show");

      Pasos();
    }
  });

  antPag.addEventListener("click", () => {
    // Ocultar la pantalla actual
    pantallaActual();
    hideScreen();

    const pantallaCargaArchivos = document.getElementById("pantalla-SA");
    const ultimaPantalla = document.querySelector(".section:last-of-type");
    const dataLastWindow = ultimaPantalla.getAttribute("data-target");

    if (pantallaCargaArchivos) {
      pantallaCargaArchivos.classList.remove("hide");
      pantallaCargaArchivos.classList.add("show");

      Pasos();
    }
  });
})();
