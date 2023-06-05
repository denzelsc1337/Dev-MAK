const bsStepper = document.querySelector(".bs-stepper");
const bsStepperContent = bsStepper.querySelector(".bs-stepper-content");
const bsSContent = bsStepperContent.querySelectorAll(".content");

//buttons
var btn_casa = document.getElementById("btnValo_add");
var btn_depa = document.getElementById("btnValo_add_depa");
var btn_terr = document.getElementById("btnValo_add_terr");
var btn_ofi = document.getElementById("btnValo_add_ofi");
var btn_lc = document.getElementById("btnValo_add_lc");
var btn_li = document.getElementById("btnValo_add_li");

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

    if (pantallaSeleccionada > 0 && pantallaSeleccionada !== "5") {
      const botonAddID = document.querySelector(".btn_submit");
      console.log(botonAddID);
      switch (pantallaSeleccionada) {
        case "1":
          // btn_casa.style.display = "block"; // Muestra el botón
          botonAddID.id = "btnValo_add";
          console.log("boton casa");
          break;

        case "2":
          // btn_depa.style.display = "block";
          botonAddID.id = "btnValo_add_depa";
          console.log("boton depa");
          break;

        case "3":
          // btn_terr.style.display = "block";
          botonAddID.id = "btnValo_add_terr";
          console.log("boton terreno");
          break;

        case "4":
          // btn_ofi.style.display = "block";
          botonAddID.id = "btnValo_add_ofi";
          console.log("boton oficina");
          break;

        case "5":
          // btn_lc.style.display = "block";
          botonAddID.id = "btnValo_add_lc";
          console.log("boton local comercial");
          break;

        case "6":
          // btn_li.style.display = "block";
          botonAddID.id = "btnValo_add_li";
          console.log("boton local industrial");
          break;
      }

      pantallaActual();
      hideScreen();

      const siguientePantalla = document.getElementById(pantallaSeleccionada);

      siguientePantalla.classList.remove("hide");
      siguientePantalla.classList.add("show");

      Pasos();

      localStorage.setItem(
        "dir_r",
        document.getElementById("direccion_").value
      );
      localStorage.setItem(
        "tipo_prop_r",
        document.getElementById("tipo_prop").selectedOptions[0].textContent
      );
      localStorage.setItem(
        "sub_tipo_prop_r",
        document.getElementById("sub_tipo_prop").selectedOptions[0].textContent
      );
      localStorage.setItem(
        "tipo_prom_r",
        document.getElementById("tipo_prom").selectedOptions[0].textContent
      );

      //datos generales casa
      localStorage.setItem(
        "cocin_casa_r",
        document.getElementById("cocina_").checked
      );
      localStorage.setItem(
        "dorms_casa_r",
        document.getElementById("cant_dorm").value
      );
      //datos generales casa

      //datos iniciales
      document.getElementById("dire_resumen").innerHTML =
        localStorage.getItem("dir_r");
      document.getElementById("tipo_prop_resumen").innerHTML =
        localStorage.getItem("tipo_prop_r");
      document.getElementById("sub_tipo_prop_resumen").innerHTML =
        localStorage.getItem("sub_tipo_prop_r");

      //datos generales casa
      document.getElementById("cant_dorm_cas_resumen").innerHTML =
        localStorage.getItem("dorms_casa_r");
      //datos generales casa

      //direccion
      if (localStorage.getItem("dir_r")) {
        document.getElementById("dire_resumen").innerHTML =
          "Dirección: " + localStorage.getItem("dir_r");
        document.getElementById("dire_resumen").style.display = "list-item";
      } else {
        document.getElementById("dire_resumen").style.display = "none";
      }

      //tipo de propiedad
      if (localStorage.getItem("tipo_prop_r")) {
        document.getElementById("tipo_prop_resumen").innerHTML =
          "Tipo de propiedad: " + localStorage.getItem("tipo_prop_r");
      }

      //subtipo de propiedad
      if (localStorage.getItem("sub_tipo_prop_r")) {
        document.getElementById("sub_tipo_prop_resumen").innerHTML =
          "SubTipo de propiedad: " + localStorage.getItem("sub_tipo_prop_r");
      }

      //tipo promo
      if (localStorage.getItem("tipo_prom_r")) {
        document.getElementById("tipo_prom_resumen").innerHTML =
          "Tipo de Promocion: " + localStorage.getItem("tipo_prom_r");
      }

      if (localStorage.getItem("dorms_casa_r")) {
        document.getElementById("cant_dorm_cas_resumen").innerHTML =
          "Dorms.: " + localStorage.getItem("dorms_casa_r");
        document.getElementById("cant_dorm_cas_resumen").style.display =
          "list-item";
      } else {
        //document.getElementById('cant_dorm_cas_resumen').style.display = 'none';
      }

      //casa
      const salaComCheckbox = document.getElementById("sala_com");
      const salaComResumen = document.getElementById("sala_com_resumen");

      salaComCheckbox.addEventListener("change", function () {
        localStorage.setItem("sala_com_casa_r", salaComCheckbox.checked);

        if (salaComCheckbox.checked) {
          salaComResumen.innerHTML = "Sala Comedor: Si";
          salaComResumen.style.display = "list-item";
        } else {
          salaComResumen.innerHTML = "No";
          salaComResumen.style.display = "none";
        }
      });

      const cocinaCasaCheckbox = document.getElementById("cocina_");
      const cocinaCasaResumen = document.getElementById("cocin_cas_resumen");

      cocinaCasaCheckbox.addEventListener("change", function () {
        localStorage.setItem("cocin_casa_r", cocinaCasaCheckbox.checked);

        if (cocinaCasaCheckbox.checked) {
          cocinaCasaResumen.innerHTML = "Cocina: Si";
          cocinaCasaResumen.style.display = "list-item";
        } else {
          cocinaCasaResumen.innerHTML = "No";
          cocinaCasaResumen.style.display = "none";
        }
      });

      const salaCasaChk = document.getElementById("sala_");
      const salaCasaResum = document.getElementById("sala_cas_resumen");

      salaCasaChk.addEventListener("change", function () {
        localStorage.setItem("sala_casa_r", salaCasaChk.checked);

        if (salaCasaChk.checked) {
          salaCasaResum.innerHTML = "Sala: Si";
          salaCasaResum.style.display = "list-item";
        } else {
          salaCasaResum.innerHTML = "No";
          salaCasaResum.style.display = "none";
        }
      });

      const amobCasaChk = document.getElementById("amoblado_");
      const amobCasaResum = document.getElementById("amob_cas_resumen");

      amobCasaChk.addEventListener("change", function () {
        localStorage.setItem("amob_casa_r", amobCasaChk.checked);

        if (amobCasaChk.checked) {
          amobCasaResum.innerHTML = "Amoblado: Si";
          amobCasaResum.style.display = "list-item";
        } else {
          amobCasaResum.innerHTML = "No";
          amobCasaResum.style.display = "none";
        }
      });

      const comedCasaChk = document.getElementById("comedor_");
      const comedCasaResum = document.getElementById("comed_cas_resumen");

      comedCasaChk.addEventListener("change", function () {
        localStorage.setItem("comd_casa_r", comedCasaChk.checked);

        if (comedCasaChk.checked) {
          comedCasaResum.innerHTML = "Comedor: Si";
          comedCasaResum.style.display = "list-item";
        } else {
          comedCasaResum.innerHTML = "No";
          comedCasaResum.style.display = "none";
        }
      });

      const piscCasaChk = document.getElementById("piscina_d");
      const piscCasaResum = document.getElementById("pisc_cas_resumen");

      piscCasaChk.addEventListener("change", function () {
        localStorage.setItem("pisc_casa_r", piscCasaChk.checked);

        if (piscCasaChk.checked) {
          piscCasaResum.innerHTML = "Piscina: Si";
          piscCasaResum.style.display = "list-item";
        } else {
          piscCasaResum.innerHTML = "No";
          piscCasaResum.style.display = "none";
        }
      });

      const banhoCasaChk = document.getElementById("banho_vis");
      const banhoCasaResum = document.getElementById("banho_vis_resumen");

      banhoCasaChk.addEventListener("change", function () {
        localStorage.setItem("pisc_casa_r", banhoCasaChk.checked);

        if (banhoCasaChk.checked) {
          banhoCasaResum.innerHTML = "Baño visita: Si";
          banhoCasaResum.style.display = "list-item";
        } else {
          banhoCasaResum.innerHTML = "No";
          banhoCasaResum.style.display = "none";
        }
      });

      const cartoServCasaChk = document.getElementById("cuarto_serv");
      const cuartoServCasaResum = document.getElementById(
        "cuarto_serv_resumen"
      );

      cartoServCasaChk.addEventListener("change", function () {
        localStorage.setItem("pisc_casa_r", cartoServCasaChk.checked);

        if (cartoServCasaChk.checked) {
          cuartoServCasaResum.innerHTML = "Cuarto Servicio: Si";
          cuartoServCasaResum.style.display = "list-item";
        } else {
          cuartoServCasaResum.innerHTML = "No";
          cuartoServCasaResum.style.display = "none";
        }
      });

      const banhoServCasaChk = document.getElementById("banho_serv");
      const banhoServCasaResum = document.getElementById("banho_serv_resumen");

      banhoServCasaChk.addEventListener("change", function () {
        localStorage.setItem("pisc_casa_r", banhoServCasaChk.checked);

        if (banhoServCasaChk.checked) {
          banhoServCasaResum.innerHTML = "Baño servicio: Si";
          banhoServCasaResum.style.display = "list-item";
        } else {
          banhoServCasaResum.innerHTML = "No";
          banhoServCasaResum.style.display = "none";
        }
      });

      const depoCasaChk = document.getElementById("deposito_");
      const depoCasaResum = document.getElementById("deposito_resumen");

      depoCasaChk.addEventListener("change", function () {
        localStorage.setItem("pisc_casa_r", depoCasaChk.checked);

        if (depoCasaChk.checked) {
          depoCasaResum.innerHTML = "Depóstio: Si";
          depoCasaResum.style.display = "list-item";
        } else {
          depoCasaResum.innerHTML = "No";
          depoCasaResum.style.display = "none";
        }
      });
      //casa

      //Departamento
      const salaComDepaChk = document.getElementById("sala_com_d");
      const salaComDepaResum = document.getElementById("sala_com_resumen");

      salaComDepaChk.addEventListener("change", function () {
        localStorage.setItem("pisc_casa_r", salaComDepaChk.checked);

        if (salaComDepaChk.checked) {
          salaComDepaResum.innerHTML = "Sala Comedor: Si";
          salaComDepaResum.style.display = "list-item";
        } else {
          salaComDepaResum.innerHTML = "No";
          salaComDepaResum.style.display = "none";
        }
      });

      const cocinaDepaChk = document.getElementById("cocina_d");
      const cocinaDepaResum = document.getElementById("cocin_cas_resumen");

      cocinaDepaChk.addEventListener("change", function () {
        localStorage.setItem("pisc_casa_r", cocinaDepaChk.checked);

        if (cocinaDepaChk.checked) {
          cocinaDepaResum.innerHTML = "Cocina: Si";
          cocinaDepaResum.style.display = "list-item";
        } else {
          cocinaDepaResum.innerHTML = "No";
          cocinaDepaResum.style.display = "none";
        }
      });

      const salaDepaChk = document.getElementById("sala_d");
      const salaDepaResum = document.getElementById("sala_cas_resumen");

      salaDepaChk.addEventListener("change", function () {
        localStorage.setItem("pisc_casa_r", salaDepaChk.checked);

        if (salaDepaChk.checked) {
          salaDepaResum.innerHTML = "Sala: Si";
          salaDepaResum.style.display = "list-item";
        } else {
          salaDepaResum.innerHTML = "No";
          salaDepaResum.style.display = "none";
        }
      });

      const amobDepaChk = document.getElementById("amoblado_d");
      const amobDepaResum = document.getElementById("amob_cas_resumen");

      amobDepaChk.addEventListener("change", function () {
        localStorage.setItem("pisc_casa_r", amobDepaChk.checked);

        if (amobDepaChk.checked) {
          amobDepaResum.innerHTML = "Amoblado: Si";
          amobDepaResum.style.display = "list-item";
        } else {
          amobDepaResum.innerHTML = "No";
          amobDepaResum.style.display = "none";
        }
      });

      const comedorDepaChk = document.getElementById("comedor_d");
      const comedorDepaResum = document.getElementById("comed_cas_resumen");

      comedorDepaChk.addEventListener("change", function () {
        localStorage.setItem("pisc_casa_r", comedorDepaChk.checked);

        if (comedorDepaChk.checked) {
          comedorDepaResum.innerHTML = "Comedor: Si";
          comedorDepaResum.style.display = "list-item";
        } else {
          comedorDepaResum.innerHTML = "No";
          comedorDepaResum.style.display = "none";
        }
      });

      const banoVisDepa = document.getElementById("banho_vis_d");
      const banoVisDepaResum = document.getElementById("bano_resumen");

      banoVisDepa.addEventListener("change", function () {
        localStorage.setItem("pisc_casa_r", banoVisDepa.checked);

        if (banoVisDepa.checked) {
          banoVisDepaResum.innerHTML = "Baño de Visita: Si";
          banoVisDepaResum.style.display = "list-item";
        } else {
          banoVisDepaResum.innerHTML = "No";
          banoVisDepaResum.style.display = "none";
        }
      });

      const cuartoServDepa = document.getElementById("cuarto_serv_d");
      const cuartoServDepaResum = document.getElementById(
        "cuarto_serv_resumen"
      );

      cuartoServDepa.addEventListener("change", function () {
        localStorage.setItem("pisc_casa_r", cuartoServDepa.checked);

        if (cuartoServDepa.checked) {
          cuartoServDepaResum.innerHTML = "Cuarto Servicio: Si";
          cuartoServDepaResum.style.display = "list-item";
        } else {
          cuartoServDepaResum.innerHTML = "No";
          cuartoServDepaResum.style.display = "none";
        }
      });

      const banoServDepa = document.getElementById("banho_serv_d");
      const banoServDepaResum = document.getElementById("banho_serv_resumen");

      banoServDepa.addEventListener("change", function () {
        localStorage.setItem("pisc_casa_r", banoServDepa.checked);

        if (banoServDepa.checked) {
          banoServDepaResum.innerHTML = "Baño Servicio: Si";
          banoServDepaResum.style.display = "list-item";
        } else {
          banoServDepaResum.innerHTML = "No";
          banoServDepaResum.style.display = "none";
        }
      });

      const depoDepaChk = document.getElementById("deposito__d");
      const depoDepaResum = document.getElementById("deposito_resumen");

      depoDepaChk.addEventListener("change", function () {
        localStorage.setItem("pisc_Depa_r", depoDepaChk.checked);

        if (depoDepaChk.checked) {
          depoDepaResum.innerHTML = "Depóstio: Si";
          depoDepaResum.style.display = "list-item";
        } else {
          depoDepaResum.innerHTML = "No";
          depoDepaResum.style.display = "none";
        }
      });

      const ascensDepaChk = document.getElementById("ascensor_d");
      const ascensDepaResum = document.getElementById("ascensor_resumen");

      ascensDepaChk.addEventListener("change", function () {
        localStorage.setItem("pisc_Depa_r", ascensDepaChk.checked);

        if (ascensDepaChk.checked) {
          ascensDepaResum.innerHTML = "Ascensor: Si";
          ascensDepaResum.style.display = "list-item";
        } else {
          ascensDepaResum.innerHTML = "No";
          ascensDepaResum.style.display = "none";
        }
      });

      const ascensDirDepaChk = document.getElementById("ascensor_directo_d");
      const ascensDirDepaResum = document.getElementById(
        "ascensor_Dir_resumen"
      );

      ascensDirDepaChk.addEventListener("change", function () {
        localStorage.setItem("pisc_Depa_r", ascensDirDepaChk.checked);

        if (ascensDirDepaChk.checked) {
          ascensDirDepaResum.innerHTML = "Ascensor Directo: Si";
          ascensDirDepaResum.style.display = "list-item";
        } else {
          ascensDirDepaResum.innerHTML = "No";
          ascensDirDepaResum.style.display = "none";
        }
      });

      //Departamento

      //oficina
      const ascensOfiChk = document.getElementById("ascen_ofi");
      const ascensOfiResum = document.getElementById("ascensor_resumen");

      ascensOfiChk.addEventListener("change", function () {
        localStorage.setItem("pisc_Depa_r", ascensOfiChk.checked);

        if (ascensOfiChk.checked) {
          ascensOfiResum.innerHTML = "Ascensor: Si";
          ascensOfiResum.style.display = "list-item";
        } else {
          ascensOfiResum.innerHTML = "No";
          ascensOfiResum.style.display = "none";
        }
      });

      const aireOfiChk = document.getElementById("aire_ofio");
      const aireOfiResum = document.getElementById("aire_acon_resumen");

      aireOfiChk.addEventListener("change", function () {
        localStorage.setItem("pisc_Depa_r", aireOfiChk.checked);

        if (aireOfiChk.checked) {
          aireOfiResum.innerHTML = "Aire Acondicionado: Si";
          aireOfiResum.style.display = "list-item";
        } else {
          aireOfiResum.innerHTML = "No";
          aireOfiResum.style.display = "none";
        }
      });
      //oficina

      //local comercial
      const ascensLocal_c_Chk = document.getElementById("ascen_lcl_com");
      const ascensLocalComResum = document.getElementById("ascensor_resumen");

      ascensLocal_c_Chk.addEventListener("change", function () {
        localStorage.setItem("pisc_Depa_r", ascensLocal_c_Chk.checked);

        if (ascensLocal_c_Chk.checked) {
          ascensLocalComResum.innerHTML = "Ascensor: Si";
          ascensLocalComResum.style.display = "list-item";
        } else {
          ascensLocalComResum.innerHTML = "No";
          ascensLocalComResum.style.display = "none";
        }
      });

      const aireLocal_C_Chk = document.getElementById("aire_lcl_com");
      const aireLocalComResum = document.getElementById("aire_acon_resumen");

      aireLocal_C_Chk.addEventListener("change", function () {
        localStorage.setItem("pisc_Depa_r", aireLocal_C_Chk.checked);

        if (aireLocal_C_Chk.checked) {
          aireLocalComResum.innerHTML = "Aire Acondicionado: Si";
          aireLocalComResum.style.display = "list-item";
        } else {
          aireLocalComResum.innerHTML = "No";
          aireLocalComResum.style.display = "none";
        }
      });
      //local comercial

      /*const valorSalaComCasaR = localStorage.getItem('sala_com_casa_r');
        if (valorSalaComCasaR === 'true') {
          salaComCheckbox.checked = true;
          salaComResumen.innerHTML = 'Si';
        } else {
          salaComCheckbox.checked = false;
          salaComResumen.innerHTML = 'Sala Comedor: No';
          salaComResumen.style.display = 'none';
        }*/
    } else if (pantallaSeleccionada === "5") {
      pantallaActual();
      hideScreen();

      const siguientePantalla_ = document.getElementById(pantallaSeleccionada);

      siguientePantalla_.classList.remove("hide");
      siguientePantalla_.classList.add("show");

      const sub_tipo_prop = document.querySelector("#sub_tipo_prop").value;

      if (sub_tipo_prop !== "-1") {
        const siguientePantalla_lcl_c =
          document.getElementById(pantallaSeleccionada);
        const exclusivo = siguientePantalla_lcl_c.querySelector(".exclusivo");
        const comun = siguientePantalla_lcl_c.querySelector(".comun");
        if (sub_tipo_prop === "12") {
          exclusivo.classList.remove("hide");
          exclusivo.classList.add("show");
        } else {
          exclusivo.classList.add("hide");
          exclusivo.classList.remove("show");
        }
        if (sub_tipo_prop === "13") {
          comun.classList.remove("hide");
          comun.classList.add("show");
        } else {
          comun.classList.add("hide");
          comun.classList.remove("show");
        }
      } else {
        alert("Seleccione un Subtipo de Inmueble.");
      }

      // if (sub_tipo_prop === "12") {
      //   const lcl_exc = document.getElementById("5");
      //   lcl_exc.classList.add("show");
      //   lcl_exc.classList.remove("hide");
      //   const siguientePantalla_lcl_exc = document.getElementById("0");
      //   siguientePantalla_lcl_exc.classList.remove("show");
      //   siguientePantalla_lcl_exc.classList.add("hide");
      // } else if (sub_tipo_prop === "13") {
      //   const lcl_com = document.getElementById("6");
      //   lcl_com.classList.add("show");
      //   lcl_com.classList.remove("hide");
      //   const siguientePantalla_lcl_com = document.getElementById("0");
      //   siguientePantalla_lcl_com.classList.remove("show");
      //   siguientePantalla_lcl_com.classList.add("hide");
      // } else {
      //   alert("Seleccione un Subtipo de Inmueble.");
      // }
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
