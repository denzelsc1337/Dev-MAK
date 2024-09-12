// document.addEventListener("DOMContentLoaded", function () {
//   var badges = document.querySelectorAll(".solicitar");

//   badges.forEach((badge) => {
//     // Definir la función de clic
//     const handleClick = () => {
//       // Obtener los valores de los atributos data-target y data-id
//       var dataId = badge.getAttribute("data-id");
//       var dataTarget = badge.getAttribute("data-attr");

//       if (dataTarget !== undefined && dataId !== undefined) {
//         // Crear una instancia de FormData y añadir los datos
//         var formData = new FormData();
//         formData.append("dataId", dataId); // Añadir con nombre y valor
//         formData.append("dataTarget", dataTarget); // Añadir con nombre y valor

//         // Realizar una solicitud AJAX con jQuery
//         $.ajax({
//           url: "./../Controller/add.solicitudes.php", // Archivo PHP al que se enviarán los datos
//           type: "POST", // Método de envío
//           data: formData, // Datos a enviar
//           processData: false, // No procesa los datos (necesario para FormData)
//           contentType: false, // No establecer contentType, usa FormData
//           success: function (response) {
//             console.log("Respuesta del servidor:", response); // Mostrar respuesta del servidor
//           },
//           error: function (xhr, status, error) {
//             console.error("Error en la solicitud:", error); // Mostrar error en caso de fallo
//           },
//           complete: function (jqXHR, textStatus) {
//             if (jqXHR.responseText == "1") {
//               console.log(badge);
//               badge.classList.add("opacity");

//               setTimeout(() => {
//                 badge.className = "";
//                 badge.classList.add("badge-tp", "proceso");
//                 badge.setAttribute("disabled", "true");
//                 badge.textContent = "En proceso";

//                 // Eliminar el listener después de ejecutarlo
//                 badge.removeEventListener("click", handleClick);
//               }, 1200);
//             }
//           },
//         });
//       } else {
//         console.log(
//           "Los atributos 'data-target' o 'data-id' no se encuentran."
//         );
//       }
//     };

//     // Añadir el listener de clic
//     badge.addEventListener("click", handleClick);
//   });

//   var itemsList = document.querySelectorAll(".item-list");

//   itemsList.forEach((btn) => {
//     var buttonsEdit = btn.querySelector(".btn-edit");
//     const input = btn.querySelector("#usu_lgl");
//     const icon = buttonsEdit.querySelector("i");
//     const save = btn.querySelector(".btn-save");

//     buttonsEdit.addEventListener("click", () => {
//       if (icon.classList.contains("fa-pencil")) {
//         // Cambia a "X"
//         icon.classList.remove("fa-pencil");
//         icon.classList.add("fa-times");
//         input.removeAttribute("disabled");
//         save.removeAttribute("hidden");
//       } else {
//         // Cambiar a "lápiz"
//         icon.classList.remove("fa-times");
//         icon.classList.add("fa-pencil");
//         input.setAttribute("disabled", "true");
//         save.setAttribute("hidden", "true");
//         input.selectedIndex = 0;
//       }
//     });

//     save.addEventListener("click", () => {
//       const idProp = btn.querySelector("#id_prop").textContent.trim();
//       const idUsu = btn.querySelector("#usu_lgl").value;

//       $.ajax({
//         url: "./../Controller/solicitudes_propiedades.php",
//         type: "POST",
//         data: {
//           idProp: idProp,
//           usuario: idUsu,
//         },
//         success: function (response) {
//           console.log("Respuesta del servidor:", response);
//         },
//         error: function (xhr, status, error) {
//           console.error("Error en la solicitud:", error);
//         },
//       });
//     });
//   });
// });
document.addEventListener("DOMContentLoaded", function () {
  function showSolis() {
    $.ajax({
      type: "GET",
      url: "../views/data.php", // Ruta al archivo PHP
      data: { accion: "showSolic" }, // Enviar el parámetro 'accion'
      dataType: "json", // Indica que esperas recibir JSON
      success: function (response) {
        console.log(response);

        if (response.error) {
          console.error("Error del servidor:", response.error);
          return;
        }

        const items = response;
        let html = "";

        // Construir HTML dinámico para cada ítem
        items.forEach((item) => {
          html += `
            <div class="item-list mak-bdr">
              <div class="row">
                <div class="item-list-content">
                  <div class="content-head">
                    <div class="header">
                      <span>ID Propiedad: <b>${item.id_prop}</b></span>
                      <div class="d-flex">
                        <div class="btn-save" hidden>
                          <i class="fa-solid fa-floppy-disk"></i>
                        </div>
                        <div class="btn-edit">
                          <i class="fa-solid fa-pencil"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <ul>
                      <li><span><b>Tipo propiedad:</b> ${
                        item.tipo_inmb
                      }</span></li>
                      <li><span><b>Dirección:</b> ${item.direccion}</span></li>
                      <li><span><b>Distrito:</b> ${item.distrito}</span></li>
                      <li>
                        <span><b>Asignado:</b></span>
                        <select name="usu_lgl" id="usu_lgl-${
                          item.id_soli_prop
                        }" disabled>
                          <option selected>${
                            item.asignado || "No asignado"
                          }</option>
                        </select>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          `;
        });

        // Insertar el HTML generado en el contenedor
        $(".list-items").html(html);

        // Asignar eventos a los botones de edición y guardado
        assignEvents();
      },
      error: function (xhr, status, error) {
        console.error("Error en la solicitud:", error);
      },
    });
  }

  // Función para asignar eventos después de cargar los elementos
  function assignEvents() {
    console.log("hpña");

    // Manejar evento de clic en los botones de editar
    $(".btn-edit").on("click", function () {
      const btnEdit = $(this);
      const btnSave = btnEdit.siblings(".btn-save");
      const input = btnEdit
        .closest(".item-list-content")
        .find("select[name='usu_lgl']");
      const icon = btnEdit.find("i");

      if (icon.hasClass("fa-pencil")) {
        // Cambiar a modo edición
        icon.removeClass("fa-pencil").addClass("fa-times");
        input.prop("disabled", false);
        btnSave.show();
      } else {
        // Cambiar a modo visualización
        icon.removeClass("fa-times").addClass("fa-pencil");
        input.prop("disabled", true);
        btnSave.hide();
        input[0].selectedIndex = 0;
      }
    });

    // Manejar evento de clic en los botones de guardar
    $(".btn-save").on("click", function () {
      const btnSave = $(this);
      const btnEdit = btnSave.siblings(".btn-edit");
      const icon = btnEdit.find("i");
      const item = btnSave.closest(".item-list");
      const idProp = item.find("b").text().trim();
      const idUsu = item.find("select[name='usu_lgl']").val();

      $.ajax({
        url: "./../Controller/solicitudes_propiedades.php",
        type: "POST",
        data: {
          idProp: idProp,
          usuario: idUsu,
        },
        success: function (response) {
          console.log("Respuesta del servidor:", response);
        },
        error: function (xhr, status, error) {
          console.error("Error en la solicitud:", error);
        },
        complete: function (jqXHR, textStatus) {
          // Recargar la lista de elementos después de la actualización
          showSolis();
        },
      });
    });
  }

  // Ejecuta la función para cargar los datos
  showSolis();
});
