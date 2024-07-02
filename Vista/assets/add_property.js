document.addEventListener("DOMContentLoaded", () => {
  var arrayData = [];

  function initializeCheckboxListeners() {
    var contentCaract = document.querySelectorAll(".chks .mak-options");

    contentCaract.forEach(function (label) {
      console.log(label);

      var checkbox = label.querySelector('input[type="checkbox"]');
      var lastInput = label.querySelector(
        'input[type="number"]:not(.mak-control-event)'
      );

      // console.log(checkbox);
      // console.log(lastInput);

      checkbox.addEventListener("click", () => {
        console.log("hola");
        var chkValue = checkbox.checked; // valor ON / OFF del checkbox
        var chkID = checkbox.id; // valor ID del checkbox

        if (checkbox.checked) {
          // Verifica si el objeto ya existe en el array
          var existingIndex = arrayData.findIndex((obj) => obj.id === chkID);
          console.log(existingIndex);

          if (existingIndex === -1 /* || existingIndex === 0 */) {
            if (checkbox.classList.contains("mak-control-event")) {
              // Definir el valor inicial del número
              let valorInputNumber = lastInput.value;
              lastInput.addEventListener("change", () => {
                valorInputNumber = lastInput.value;
                console.log(valorInputNumber);

                // Actualizar el número en el array cuando cambie el valor del input
                const indexToUpdate = arrayData.findIndex(
                  (obj) => obj.id === chkID
                );
                console.log(indexToUpdate);
                if (indexToUpdate !== -1) {
                  arrayData[indexToUpdate].number = valorInputNumber;
                }
              });

              // Añadir el nuevo objeto al array
              arrayData.push({
                id: chkID,
                checked: chkValue,
                number: valorInputNumber,
              });
            } else {
              arrayData.push({
                id: chkID,
                checked: chkValue,
                number: null,
              });
            }
          } else {
            // Actualiza el objeto existente
            // arrayData[existingIndex].checked = checkbox.checked;
            arrayData[existingIndex].number = numberValue;
          }
        } else {
          // Si el checkbox está desmarcado, eliminar el objeto del array
          var index = arrayData.findIndex((obj) => obj.id === chkID);
          if (index !== -1) {
            arrayData.splice(index, 1);
          }
        }
        // Mostrar el array actualizado en la consola
        console.log(arrayData);
      });
    });
  }

  // Llamar a initializeCheckboxListeners cuando el modal se abra
  var modal = document.getElementById("verOptions_01");
  modal.addEventListener("show.bs.modal", initializeCheckboxListeners);
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

// Función para inicializar los eventos
// function initializeEvents(container) {
// console.log(container);
// var lblContent = document.querySelectorAll(".chks .mak-options");
// var lblContent = document.querySelectorAll(".chks .caracteristicas");
// console.log(lblContent);

// lblContent.forEach(function (label) {
//   // console.log(label);
//   var checkbox = label.querySelector('input[type="checkbox"]');
//   var lastInput = label.querySelector(
//     'input[type="number"]:not(.mak-control-event)'
//   );

//   // Agregar evento al checkbox
//   checkbox.addEventListener("click", function () {
//     // console.log(label);
//     // console.log(checkbox);

//     // var checkboxValue = checkbox.value || checkbox.id; // Usar el id como valor si el valor está vacío
//     var chkValue = checkbox.checked; // valor ON / OFF del checkbox
//     var chkID = checkbox.id; // valor ID del checkbox

//     var numberValue = lastInput ? lastInput.value : 0;

//     // console.log(checkboxValue);
//     // console.log(chkValue);
//     // console.log(chkID);

//     // Si el checkbox está marcado, agregar el objeto al array
//     if (checkbox.checked) {
//       // Verifica si el objeto ya existe en el array
//       var existingIndex = arrayData.findIndex((obj) => obj.id === chkID);
//       console.log(existingIndex);

//       if (existingIndex === -1 /* || existingIndex === 0 */) {
//         if (checkbox.classList.contains("mak-control-event")) {
//           console.log("eh?");
//           console.log(arrayData);

//           // Definir el valor inicial del número
//           let valorInputNumber = lastInput.value;

//           // Añadir evento change solo una vez
//           lastInput.addEventListener("change", () => {
//             valorInputNumber = lastInput.value;
//             console.log(valorInputNumber);

//             // Actualizar el número en el array cuando cambie el valor del input
//             const indexToUpdate = arrayData.findIndex(
//               (obj) => obj.id === chkID
//             );
//             console.log(indexToUpdate);
//             if (indexToUpdate !== -1) {
//               arrayData[indexToUpdate].number = valorInputNumber;
//             }
//             console.log(arrayData);
//           });

//           // Añadir el nuevo objeto al array
//           arrayData.push({
//             id: chkID,
//             checked: chkValue,
//             number: valorInputNumber,
//           });
//         } else {
//           arrayData.push({
//             id: chkID,
//             checked: chkValue,
//             number: null,
//           });
//         }
//         // console.log(arrayData);
//       } else {
//         // Actualiza el objeto existente
//         // arrayData[existingIndex].checked = checkbox.checked;
//         arrayData[existingIndex].number = numberValue;
//       }
//     } else {
//       // Si el checkbox está desmarcado, eliminar el objeto del array
//       var index = arrayData.findIndex((obj) => obj.id === chkID);
//       if (index !== -1) {
//         arrayData.splice(index, 1);
//       }
//     }

//     // Mostrar el array actualizado en la consola
//     console.log(arrayData);

//     // Agrega o elimina la clase 'checked' del label dependiendo del estado del checkbox
//     label.classList.toggle("checked", checkbox.checked);

//     // Si el checkbox se desmarca y hay un último input, limpia su valor
//     if (!checkbox.checked && lastInput) {
//       lastInput.value = "";
//     }
//   });

//   // // Agregar evento al input de número
//   // if (lastInput) {
//   //   lastInput.addEventListener("input", function () {
//   //     var numberValue = lastInput.value;
//   //     var checkboxValue = checkbox.value || checkbox.id;

//   //     // Verifica si el objeto ya existe en el array
//   //     var existingIndex = arrayData.findIndex(
//   //       (obj) => obj.id === checkboxValue
//   //     );
//   //     if (existingIndex !== -1) {
//   //       // Actualiza el objeto existente con el nuevo valor del número
//   //       arrayData[existingIndex].number = numberValue;
//   //     }

//   //     // Mostrar el array actualizado en la consola
//   //     console.log(arrayData);
//   //   });
//   // }
// });

// -----------------------------------------------------------------------------------------
// }

// // // Inicializar eventos en el contenido principal
// // if (window.location.href.includes("add_property")) {
// //   document
// //     .querySelector(".verOptions_01")
// //     .addEventListener("click", function () {
// //       // Enviar mensaje a la página principal para abrir el modal
// //       parent.postMessage("verOptions_01", "*");
// //     });

// //   window.addEventListener("message", function (event) {
// //     if (event.data.type === "modalValue") {
// //       console.log("Valor recibido del modal:", event.data.value);
// //       // Aquí puedes procesar el valor recibido según tus necesidades
// //     }
// //   });

// //   document;
// // }
// if (
//   window.location.href ===
//   "http://localhost/Project-DEVs/Dev-MAK/views/add_property.php"
// ) {
// initializeEvents(document);
// }

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

// $(document).ready(function () {
//   $("#saveBtn").click(function (e) {
//     e.preventDefault();

//     var formData = new FormData($("#form_prop")[0]);
//     console.log(arrayFile);

//     $.ajax({
//       type: "POST",
//       url: "../Controller/Add_propiedades.php",
//       data: formData,
//       processData: false,
//       contentType: false,
//       beforeSend: function () {
//         console.log("Enviando...");
//       },
//       success: function (r) {
//         console.log("Éxito:", r);
//       },
//       error: function (xhr, status, error) {
//         console.log("Error:", error);
//       },
//     });
//   });
// });

// --------------------------------
// --------------------------------
