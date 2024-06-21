// --------------------------------
// --------------------------------

// document.addEventListener("DOMContentLoaded", () => {
//   const tabItems = document.querySelectorAll(".tab");
//   const contentContainers = document.querySelectorAll(".tab-content");

//   tabItems.forEach((element) => {
//     element.addEventListener("click", () => {
//       const checkbox = element.querySelector(".tab-checkbox");

//       if (checkbox) {
//         // Manejo de tabs con checkbox
//         tabItems[0].classList.remove("mak-primary");

//         if (checkbox.checked) {
//           // Si el checkbox está marcado, desmarcarlo y remover la clase
//           checkbox.checked = false;
//           element.classList.remove("mak-primary");

//           if (checkbox.value == "2") {
//             // document.querySelector(".comision").style.display = "none";
//           }
//         } else {
//           // Si el checkbox no está marcado, marcarlo y añadir la clase
//           checkbox.checked = true;
//           element.classList.add("mak-primary");

//           if (checkbox.value == "2") {
//             // document.querySelector(".comision").style.display = "block";
//           }

//           // Activar el segundo tab si se hace clic en el tercer tab
//           if (checkbox.value == "2") {
//             const secondTab = document
//               .querySelector('.tab .tab-checkbox[value="1"]')
//               .closest(".tab");
//             if (secondTab) {
//               const secondCheckbox = secondTab.querySelector(".tab-checkbox");
//               secondCheckbox.checked = true;
//               secondTab.classList.add("mak-primary");

//               // Mostrar el contenido del segundo tab
//               const secondTabTargetId = secondTab.getAttribute("data-target");
//               const secondTabTargetContainer =
//                 document.getElementById(secondTabTargetId);
//               if (secondTabTargetContainer) {
//                 secondTabTargetContainer.classList.add("active");
//               }
//             }
//           }
//         }
//       } else {
//         // Manejo del tab sin checkbox (tab 1)
//         tabItems.forEach((item) => {
//           item.classList.remove("mak-primary");
//           const itemCheckbox = item.querySelector(".tab-checkbox");
//           if (itemCheckbox) {
//             itemCheckbox.checked = false;
//             // document.querySelector(".comision").style.display = "none";
//           }
//         });
//         element.classList.add("mak-primary");
//       }

//       // Ocultar todos los contenedores de contenido
//       contentContainers.forEach((container) => {
//         container.classList.remove("active");
//       });

//       // Mostrar el contenedor de contenido correspondiente al tab clicado
//       const targetId = element.getAttribute("data-target");
//       const targetContainer = document.getElementById(targetId);

//       if (targetContainer) {
//         targetContainer.classList.add("active");
//       }

//       // Verificar si ambos checkboxes están desmarcados
//       const checkboxes = document.querySelectorAll(".tab-checkbox");
//       const anyCheckboxChecked = [...checkboxes].some((chk) => chk.checked);
//       if (!anyCheckboxChecked) {
//         // Activar el primer tab si ninguno de los checkboxes está marcado
//         tabItems[0].classList.add("mak-primary");

//         const firstTabTargetId = tabItems[0].getAttribute("data-target");
//         const firstTabTargetContainer =
//           document.getElementById(firstTabTargetId);

//         if (firstTabTargetContainer) {
//           tabItems[0].click();
//         }
//       }
//     });
//   });
// });

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
function initializeEvents(container) {
  var lblContent = container.querySelectorAll(".chks label");

  lblContent.forEach(function (label) {
    var checkbox = label.querySelectorAll('input[type="checkbox"]');
    var lastInput = label.querySelector(
      'input[type="number"]:not(.mak-control-event)'
    );

    // checkbox.forEach((element) => {
    //   element.addEventListener("click", function () {
    //     console.log("Checkbox clicked");
    //     if (element.classList.contains("mak-control-event")) {
    //       if (element.checked) {
    //         label.classList.add("checked");
    //       } else {
    //         label.classList.remove("checked");
    //         if (lastInput) {
    //           lastInput.value = "";
    //         }
    //       }
    //     } else {
    //       if (element.checked) {
    //         label.classList.add("checked");
    //       } else {
    //         label.classList.remove("checked");
    //       }
    //     }
    //   });
    // });
    checkbox.forEach((element) => {
      element.addEventListener("click", function () {
        console.log("Checkbox clicked");

        // Verifica si el elemento es de clase 'mak-control-event'
        if (element.classList.contains("mak-control-event")) {
          console.log(element.checked);
          // Agrega o elimina la clase 'checked' del label dependiendo del estado del checkbox
          label.classList.toggle("checked", element.checked);

          // Si el checkbox se desmarca y hay un último input, limpia su valor
          if (!element.checked && lastInput) {
            lastInput.value = "";
          }
        } else {
          // Agrega o elimina la clase 'checked' del label dependiendo del estado del checkbox
          label.classList.toggle("checked", element.checked);
        }
      });
    });
  });
}

// Inicializar eventos en el contenido principal
initializeEvents(document);

// // Inicializar eventos cuando los modales se muestren
// $("#verOptions_01").on("shown.bs.modal", function () {
//   initializeEvents(this);
// });

// $("#verOptions_02").on("shown.bs.modal", function () {
//   initializeEvents(this);
// });

// --------------------------------
// --------------------------------

const clearBtns = document.querySelectorAll(".card-body");

// clearBtns.forEach((element) => {
//   // console.log(element);
//   let btn = element.querySelectorAll(".clear");
//   // console.log(btn);
//   btn.forEach((btn) => {
//     btn.addEventListener("click", () => {
//       // console.log(btn);
//       // console.log(element);

//       let allTags = element.querySelectorAll(
//         "input, textarea, select, li, .file-item"
//       );
//       console.log(allTags);

//       allTags.forEach((field) => {
//         // console.log(field);
//         if (
//           field.tagName.toLowerCase() === "input" ||
//           field.tagName.toLowerCase() === "textarea"
//         ) {
//           field.value = "";
//         } else if (field.tagName.toLowerCase() === "li") {
//           field.classList.remove("mak-primary");
//         } else if (field.tagName.toLowerCase() === "select") {
//           field.value = "-1";
//         } else if (field.classList.contains("file-item")) {
//           if (!field.classList.contains("up-archive")) {
//             field.remove();
//           }
//         }
//       });
//     });
//   });
// });

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
