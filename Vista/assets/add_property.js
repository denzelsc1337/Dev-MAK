document.addEventListener("DOMContentLoaded", () => {
  // ------------------------------------------------------------------------------------------------------
  // ------------------------------------------------------------------------------------------------------
  $(
    ".departamento, .casa, .casa_playa, .casa_campo, .terr_lote, .terr_agricola, .oficina, .hotel, .local_comercial, .local_industrial"
  ).hide();

  // $('#')

  $("#tipo_prop").change(function () {
    $(
      ".departamento, .casa, .casa_playa, .casa_campo, .terr_lote, .terr_agricola, .oficina, .hotel, .local_comercial, .local_industrial"
    ).hide();

    var selectedValue = $(this).val(); // Obtiene el valor seleccionado
    var item_html = "";

    var caracteristics_serv = document.querySelector(".servicios");
    var caracteristics_serv_plus = document.querySelector(".servicios_plus");
    var caracteristics_gene = document.querySelector(".generales");
    var caracteristics_gene_plus = document.querySelector(".generales_plus");
    var caracteristics_comu = document.querySelector(".comunes");
    var caracteristics_comu_plus = document.querySelector(".comunes_plus");

    // borrar los elementos label creados
    const labels = document.querySelectorAll("label.mak-options");

    labels.forEach((label) => {
      label.remove();
    });
    // borrar los elementos label creados

    function generateItemHtml(items) {
      // console.log(items);
      const otherServicesHtml = Object.keys(items)
        .filter(
          (key) =>
            key !== "servicios_plus" &&
            key !== "generales_plus" &&
            key !== "comunes_plus"
        )
        .map((key) => {
          const item = items[key];

          if (item.cantidad) {
            return `
            <label class="mak-options cursor m-0" for="${item.id}">
              <input id="${item.id}" name="" type="checkbox" class="mak-control-event">
              <span>${item.nombre}</span>
              <input type="number" min="0" id="cant_${item.id}" name="cant_${item.id}" class="mak-options-brd-bottom p-0">
            </label>
          `;
          } else {
            return `
            <label class="mak-options cursor m-0" for="${item.id}">
              <input id="${item.id}" name="${item.id}" type="checkbox" class="mak-control-event">
              <span>${item.nombre}</span>
            </label>
          `;
          }
        })
        .join("");

      return otherServicesHtml;
    }

    function chkChange() {
      var contentCaract = document.querySelectorAll(
        ".chks .mak-options:not(.details)"
      );

      contentCaract.forEach((label) => {
        var checkbox = label.querySelector('input[type="checkbox"]');
        var lastInput = label.querySelector(
          'input[type="number"]:not(.mak-control-event)'
        );

        checkbox.addEventListener("change", (event) => {
          var estadoChk = event.target.checked;
          // console.log(estadoChk);

          // // // if (estadoChk === true) {
          // // //   console.log(checkbox);
          // // //   console.log(lastInput);

          // // //   // Verifica si el objeto ya existe en el array
          // // //   var chkID = checkbox.id; // Asegúrate de tener el ID del checkbox
          // // //   var existingIndex = arrayData.findIndex((obj) => obj.id === chkID);
          // // //   console.log(existingIndex);

          // // //   if (existingIndex === -1) {
          // // //     if (checkbox.classList.contains("mak-control-event")) {
          // // //       // Definir el valor inicial del número
          // // //       let valorInputNumber = lastInput.value;

          // // //       // Añadir evento change solo una vez
          // // //       lastInput.addEventListener("change", () => {
          // // //         valorInputNumber = lastInput.value;
          // // //         console.log(valorInputNumber);

          // // //         // Actualizar el número en el array cuando cambie el valor del input
          // // //         const indexToUpdate = arrayData.findIndex(
          // // //           (obj) => obj.id === chkID
          // // //         );
          // // //         console.log(indexToUpdate);

          // // //         if (indexToUpdate !== -1) {
          // // //           arrayData[indexToUpdate].number = valorInputNumber;
          // // //         }
          // // //       });
          // // //       // Añadir el nuevo objeto al array
          // // //       arrayData.push({
          // // //         id: chkID,
          // // //         checked: estadoChk,
          // // //         number: valorInputNumber,
          // // //       });
          // // //     } else {
          // // //       arrayData.push({
          // // //         id: chkID,
          // // //         checked: estadoChk,
          // // //         number: null,
          // // //       });
          // // //     }
          // // //   } else {
          // // //     // Actualiza el objeto existente
          // // //     // arrayData[existingIndex].checked = checkbox.checked;
          // // //     arrayData[existingIndex].number = numberValue;
          // // //   }
          // // // } else {
          // // //   console.log("falcedad");
          // // //   // Si el checkbox está desmarcado, eliminar el objeto del array
          // // //   var chkID = checkbox.id; // Asegúrate de tener el ID del checkbox
          // // //   var index = arrayData.findIndex((obj) => obj.id === chkID);
          // // //   console.log(index);
          // // //   if (index !== -1) {
          // // //     arrayData.splice(index, 1);
          // // //   }
          // // // }

          // Mostrar el array actualizado en la consola
          // // // console.log(arrayData);

          // Agrega o elimina la clase 'checked' del label dependiendo del estado del checkbox
          label.classList.toggle("checked", estadoChk);

          // Si el checkbox se desmarca y hay un último input, limpia su valor
          // // // if (!checkbox.checked && lastInput) {
          // // //   lastInput.value = "";
          // // // }
        });
      });
    }

    function printHTML(data, value) {
      // console.log(data);
      // console.log(value);
      var type = "";

      switch (value) {
        case "1":
          type = "departamento";
          $(".departamento").show();
          break;
        case "2":
          type = "casa";
          $(".casa").show();
          break;
        case "3":
          type = "casa_playa";
          $(".casa").show();
          break;
        case "4":
          type = "casa_campo";
          $(".casa").show();
          break;
        case "5":
          type = "terr_lote";
          $(".terr_lote").show();
          break;
        case "6":
          type = "terr_agricola";
          $(".terr_agricola").show();
          break;
        case "7":
          type = "oficina";
          $(".oficina").show();
          break;
        case "8":
          type = "hotel";
          $(".hotel").show();
          break;
        case "9":
          type = "local_comercial";
          $(".local_comercial").show();
          break;
        case "10":
          type = "local_industrial";
          $(".local_industrial").show();
          break;
        default:
          console.error("Valor no reconocido:", value);
          return; // Salir de la función si el valor no es reconocido
      }

      // Verifica que las propiedades existan antes de usarlas

      // APARTADO DE SERVICIOS
      if (data[type] && data[type].servicios) {
        // Imprimir servicios en caracteristics_serv
        caracteristics_serv.innerHTML += generateItemHtml(data[type].servicios);
        chkChange();
      } else {
        console.log(`No se encontraron servicios para el tipo: ${type}`);
      }

      // // APARTADO DE SERVICIOS_PLUS
      if (
        data[type] &&
        data[type].servicios &&
        data[type].servicios.servicios_plus
      ) {
        // Imprimir servicios_plus en caracteristics_serv_plus
        caracteristics_serv_plus.innerHTML += generateItemHtml(
          data[type].servicios.servicios_plus
        );
        chkChange();
      } else {
        console.log(`No se encontraron servicios_plus para el tipo: ${type}`);
      }
      // // APARTADO DE SERVICIOS_PLUS
      // APARTADO DE SERVICIOS

      // APARTADO DE GENERALES
      if (data[type] && data[type].generales) {
        // Imprimir servicios en caracteristics_serv
        caracteristics_gene.innerHTML += generateItemHtml(data[type].generales);
        chkChange();
      } else {
        console.log(`No se encontraron generales para el tipo: ${type}`);
      }

      // // APARTADO DE GENERALES_PLUS
      if (
        data[type] &&
        data[type].generales &&
        data[type].generales.generales_plus
      ) {
        // Imprimir generales_plus en caracteristics_serv_plus
        caracteristics_gene_plus.innerHTML += generateItemHtml(
          data[type].generales.generales_plus
        );
        chkChange();
      } else {
        console.log(`No se encontraron generales_plus para el tipo: ${type}`);
      }
      // // APARTADO DE GENERALES_PLUS
      // APARTADO DE GENERALES

      // APARTADO DE COMUNES
      if (data[type] && data[type].comunes) {
        // Imprimir servicios en caracteristics_serv
        caracteristics_comu.innerHTML += generateItemHtml(data[type].comunes);
        chkChange();
      } else {
        console.log(`No se encontraron comunes para el tipo: ${type}`);
      }

      // // APARTADO DE COMUNES_PLUS
      if (data[type] && data[type].comunes && data[type].comunes.comunes_plus) {
        // Imprimir comunes_plus en caracteristics_serv_plus
        caracteristics_comu_plus.innerHTML += generateItemHtml(
          data[type].comunes.comunes_plus
        );
        chkChange();
      } else {
        console.log(`No se encontraron comunes_plus para el tipo: ${type}`);
      }
      // // APARTADO DE COMUNES_PLUS
      // APARTADO DE COMUNES
    }

    $.ajax({
      type: "GET",
      url: "../Controller/details_property.php",
      success: function (response) {
        const data = JSON.parse(response);

        printHTML(data, selectedValue);
      },
    });
  });

  // ------------------------------------------------------------------------------------------------------
  // ------------------------------------------------------------------------------------------------------

  // // // var arrayData = [];

  // // // // initializeCheckboxListeners();
});

// --------------------------------
// --------------------------------
const tabItems = document.querySelectorAll(".mak-control[data-tab]");

tabItems.forEach((element) => {
  element.addEventListener("click", function () {
    const checkbox = element.querySelector(".tab-checkbox");

    if (checkbox) {
      if (checkbox.checked) {
        // Si el checkbox está marcado, desmarcarlo y remover la clase
        checkbox.checked = false;
        element.classList.remove("mak-primary");
        if (checkbox.value == "2") {
          document.querySelector(".comision").classList.add("hide");
        } else if (checkbox.value == "1") {
          document.querySelector(".anunciar").value = "";
        }
      } else {
        // Si el checkbox no está marcado, marcarlo y añadir la clase
        checkbox.checked = true;
        element.classList.add("mak-primary");
        if (checkbox.value == "2") {
          document.querySelector(".comision").classList.remove("hide");
        } else if (checkbox.value == "1") {
          document.querySelector(".anunciar").value = 1;
        }
      }
    }
  });
});

// --------------------------------
// --------------------------------

const tipoModalidad = document.querySelectorAll(".tp-md");

document.addEventListener("DOMContentLoaded", function () {
  tipoModalidad.forEach((element) => {
    // console.log(element);
    element.addEventListener("click", () => {
      tipoModalidad.forEach((item) => {
        // console.log(item);
        item.classList.remove("mak-primary");
      });
      element.classList.add("mak-primary");
      const data = element.getAttribute("data-target");

      document.querySelector("#modalidad_prop").value = data;
    });
  });
});

// --------------------------------
// --------------------------------

function updateCounter(event) {
  const textarea = event.target;
  const container = textarea.parentElement;
  const counter = container.querySelector(".char-counter");
  const maxLength = textarea.getAttribute("maxlength");
  const currentLength = textarea.value.length;

  counter.textContent = `${currentLength}/${maxLength}`;
}

document.querySelectorAll(".txt-area").forEach((textarea) => {
  textarea.addEventListener("input", updateCounter);
  // Inicializa el contador para cada textarea
  updateCounter({ target: textarea });
});

// --------------------------------
// --------------------------------

const clearBtns = document.querySelectorAll(".card-body");

clearBtns.forEach((element) => {
  let btn = element.querySelectorAll(".clear");

  btn.forEach((btn) => {
    btn.addEventListener("click", () => {
      let allTags = element.querySelectorAll(
        "input, textarea, select, li, .file-item"
      );
      // console.log(allTags);

      allTags.forEach((field) => {
        if (
          field.tagName.toLowerCase() === "input" ||
          field.tagName.toLowerCase() === "textarea"
        ) {
          field.value = "";
          // Actualiza el contador de caracteres a 0 / maxLength
          if (field.classList.contains("txt-area")) {
            const maxLength = field.getAttribute("maxlength");
            const counter = field.parentElement.querySelector(".char-counter");
            if (counter) {
              counter.textContent = `0/${maxLength}`;
            }
          }
        } else if (field.tagName.toLowerCase() === "li") {
          field.classList.remove("mak-primary");
        } else if (field.tagName.toLowerCase() === "select") {
          field.value = "-1";
        } else if (field.classList.contains("file-item")) {
          if (!field.classList.contains("up-archive")) {
            field.remove();
            allTags[0].classList.remove("file-file");
          }
        }
      });
    });
  });
});

// --------------------------------
// --------------------------------
$(document).ready(function () {
  $("#saveBtn").click(function (e) {
    e.preventDefault();
    // Crear una instancia de FormData
    var formData = new FormData();
    // Recoger los datos de la sesión
    var sessionData = new FormData($("#session_start")[0]);
    // Agregar los valores de session
    // Iterar sobre los campos de sessionData y agregarlos a formData
    for (var pair of sessionData.entries()) {
      formData.append(pair[0], pair[1]);
    }
    $("#form_prop")
      .find(
        ".control-group:not([style*='display: none']) [name], .mak-options [name], input[type='hidden'][name]"
      )
      .each(function () {
        var name = $(this).attr("name");
        // Verifica si es un checkbox
        if ($(this).is(":checkbox")) {
          if ($(this).is(":checked")) {
            var value = 1; // Si está marcado, envía su valor o "true" por defecto
            /*$(this).val()  || "true"; */ formData.append(name, value);
          } else {
            formData.append(name, "false"); // Si no está marcado, envía "false"
          }
        } else {
          var value = $(this).val();
          formData.append(name, value);
        }
      });
    // Enviar los datos usando AJAX
    $.ajax({
      type: "POST",
      url: "../Controller/Add_propiedades.php",
      data: formData, // Enviar el objeto FormData
      processData: false, // Evitar que jQuery procese los datos (FormData se maneja por sí mismo)
      contentType: false, // No establecer el contentType, para permitir el envío del FormData
      beforeSend: function () {
        console.log("Enviando...");
      },
      success: function (r) {
        // console.log("Éxito:", r);
        // window.location.reload(true);
      },
      afterSend: function () {},
      error: function (xhr, status, error) {
        console.log("Error:", error);
      },
    });
  });
});
