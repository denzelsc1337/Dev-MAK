const tabContents = document.querySelectorAll(".tab-content");

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

tabItems.forEach((element) => {
  // console.log(element);
  element.addEventListener("click", () => {
    // Remueve la clase "mak-primary" de todos los tabs
    tabItems.forEach((item) => {
      // console.log(item);
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

// --------------------------------
// --------------------------------

// const tabItems = document.querySelectorAll(".tab");
// const contentContainers = document.querySelectorAll(".tab-content");

// tabItems.forEach((element) => {
//   element.addEventListener("click", () => {
//     // Remueve la clase "mak-primary" de todos los tabs
//     tabItems.forEach((item) => {
//       item.classList.remove("mak-primary");
//       const checkbox = item.querySelector(".tab-checkbox");
//       if (checkbox) {
//         checkbox.checked = false; // Desactiva la casilla de verificación
//       }
//     });

//     // Agrega la clase "mak-primary" solo al tab clicado
//     element.classList.add("mak-primary");

//     // Activa la casilla de verificación si existe
//     const checkbox = element.querySelector(".tab-checkbox");
//     if (checkbox) {
//       checkbox.checked = true;
//     }

//     // Oculta todos los contenedores de contenido
//     contentContainers.forEach((container) => {
//       container.classList.remove("active");
//     });

//     // Muestra el contenedor de contenido correspondiente al tab clicado
//     const targetId = element.getAttribute("data-target");
//     document.getElementById(targetId).classList.add("active");
//   });
// });

// document.addEventListener("DOMContentLoaded", () => {
//   const tabItems = document.querySelectorAll(".tab");
//   const contentContainers = document.querySelectorAll(".tab-content");

//   tabItems.forEach((element) => {
//     element.addEventListener("click", () => {
//       const checkbox = element.querySelector(".tab-checkbox");

//       if (checkbox) {
//         // Si el tab tiene un checkbox
//         if (checkbox.checked) {
//           // Si el checkbox está marcado, desmarcarlo y remover la clase
//           checkbox.checked = false;
//           element.classList.remove("mak-primary");
//         } else {
//           // Si el checkbox no está marcado, marcarlo y añadir la clase
//           checkbox.checked = true;
//           element.classList.add("mak-primary");
//         }
//       } else {
//         // Para el tab sin checkbox (tab 1)
//         // Remover la clase "mak-primary" de todos los tabs y desmarcar todos los checkboxes
//         tabItems.forEach((item) => {
//           item.classList.remove("mak-primary");
//           const itemCheckbox = item.querySelector(".tab-checkbox");
//           if (itemCheckbox) {
//             itemCheckbox.checked = false;
//           }
//         });
//         // Agregar la clase "mak-primary" solo al tab clicado
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
//     });
//   });

//   // Asegurar que el primer tab siempre tenga la clase "mak-primary" al cargar la página
//   const firstTab = tabItems[0];
//   firstTab.classList.add("mak-primary");
// });

// -----------------------
// -----------------------

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

const clearBtns = document.querySelectorAll(".card-body");

clearBtns.forEach((element) => {
  // console.log(element);
  let btn = element.querySelectorAll(".clear");
  // console.log(btn);
  btn.forEach((btn) => {
    btn.addEventListener("click", () => {
      // console.log(btn);
      // console.log(element);

      let allTags = element.querySelectorAll(
        "input, textarea, select, li, .file-item"
      );
      console.log(allTags);

      allTags.forEach((field) => {
        console.log(field);
        if (
          field.tagName.toLowerCase() === "input" ||
          field.tagName.toLowerCase() === "textarea"
        ) {
          field.value = "";
        } else if (field.tagName.toLowerCase() === "li") {
          field.classList.remove("mak-primary");
        } else if (field.tagName.toLowerCase() === "select") {
          field.value = "-1";
        } else if (field.classList.contains("file-item")) {
          if (!field.classList.contains("up-archive")) {
            field.remove();
          }
        }
      });
    });
  });
});

// -----------------------
// -----------------------

$(document).ready(function () {
  $("#saveBtn").click(function (e) {
    e.preventDefault();

    var formData = new FormData($("#form_prop")[0]);
    console.log(formData);

    $.ajax({
      type: "POST",
      url: "../Controller/Add_propiedades.php",
      data: formData,
      processData: false,
      contentType: false,
      beforeSend: function () {
        console.log("Enviando...");
      },
      success: function (r) {
        console.log("Éxito:", r);
      },
      error: function (xhr, status, error) {
        console.log("Error:", error);
      },
    });
  });
});
