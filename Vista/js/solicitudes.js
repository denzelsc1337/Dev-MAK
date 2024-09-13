document.addEventListener("DOMContentLoaded", function () {
  var badges = document.querySelectorAll(".solicitar");

  badges.forEach((badge) => {
    // Definir la función de clic
    const handleClick = () => {
      // Obtener los valores de los atributos data-target y data-id
      var dataId = badge.getAttribute("data-id");
      var dataTarget = badge.getAttribute("data-attr");

      if (dataTarget !== undefined && dataId !== undefined) {
        // Crear una instancia de FormData y añadir los datos
        var formData = new FormData();
        formData.append("dataId", dataId); // Añadir con nombre y valor
        formData.append("dataTarget", dataTarget); // Añadir con nombre y valor

        // Realizar una solicitud AJAX con jQuery
        $.ajax({
          url: "./../Controller/add.solicitudes.php", // Archivo PHP al que se enviarán los datos
          type: "POST", // Método de envío
          data: formData, // Datos a enviar
          processData: false, // No procesa los datos (necesario para FormData)
          contentType: false, // No establecer contentType, usa FormData
          success: function (response) {
            console.log("Respuesta del servidor:", response); // Mostrar respuesta del servidor
          },
          error: function (xhr, status, error) {
            console.error("Error en la solicitud:", error); // Mostrar error en caso de fallo
          },
          complete: function (jqXHR, textStatus) {
            if (jqXHR.responseText == "1") {
              console.log(badge);
              badge.classList.add("opacity");

              setTimeout(() => {
                badge.className = "";
                badge.classList.add("badge-tp", "proceso");
                badge.setAttribute("disabled", "true");
                badge.textContent = "En proceso";

                // Eliminar el listener después de ejecutarlo
                badge.removeEventListener("click", handleClick);
              }, 1200);
            }
          },
        });
      } else {
        console.log(
          "Los atributos 'data-target' o 'data-id' no se encuentran."
        );
      }
    };

    // Añadir el listener de clic
    badge.addEventListener("click", handleClick);
  });

  // ----------------------------------------------------------------------
  async function showSolis() {
    try {
      // Realizar la solicitud AJAX para obtener las solicitudes
      const response = await $.ajax({
        type: "GET",
        url: "../views/data.php", // Ruta al archivo PHP
        data: { accion: "showSolic" }, // Enviar el parámetro 'accion'
        dataType: "json", // Indica que esperas recibir JSON
      });

      if (response.error) {
        console.error("Error del servidor:", response.error);
        return;
      }

      const items = response;

      // Obtener lista de usuarios antes de construir el HTML
      let users = [];
      try {
        users = await loadUserOptions(); // Espera a que la función de carga de usuarios se complete
      } catch (err) {
        console.error("No se pudieron cargar los usuarios", err);
      }

      let html = "";

      // Construir HTML dinámico para cada ítem
      items.forEach((item) => {
        let userOptions = `<option value="" disabled selected>Seleccione</option>`;

        // Guardar el valor actual del campo "asignado" de la base de datos
        const currentAssignedUser = item.asignado;

        // Construir opciones para el select de usuarios
        users.forEach((user) => {
          // Marcar la opción como "selected" si coincide con el valor de la BD
          const isSelected =
            user.id_usu == currentAssignedUser ? "selected" : "";
          userOptions += `<option value="${user.id_usu}" ${isSelected}>${user.nombre_usu}</option>`;
        });

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
                    <li><span><b>Tipo propiedad:</b> ${item.tipo_inmb}</span></li>
                    <li><span><b>Dirección:</b> ${item.direccion}</span></li>
                    <li><span><b>Distrito:</b> ${item.distrito}</span></li>
                    <li>
                      <span><b>Asignado:</b></span>
                      <select name="usu_lgl" id="usu_lgl-${item.id_soli_prop}" disabled>
                        ${userOptions}
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
    } catch (error) {
      console.error("Error en la solicitud:", error);
    }
  }

  // ----------------------------------------------------------------

  // Función que verifica si el elemento #asignado está presente antes de realizar la solicitud
  async function showSolicAsig() {
    // Asegúrate de que el elemento #asignado existe
    let usuAsigElement = document.querySelector("#asignado");
    if (!usuAsigElement) {
      console.error("El elemento #asignado no está presente en el DOM.");
      return; // Salir de la función si el elemento no está presente
    }

    var usuAsig = usuAsigElement.value;

    try {
      // Realizar la solicitud AJAX para obtener las solicitudes asignadas
      const response = await $.ajax({
        type: "GET",
        url: "../views/data.php", // Ruta al archivo PHP
        data: { accion: "showSolicAsig" }, // Enviar el parámetro 'accion'
        dataType: "json", // Indica que esperas recibir JSON
      });

      if (response.error) {
        console.error("Error del servidor:", response.error);
        return;
      }

      const items = response;
      // console.log(items);

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
                              <li><span><b>Tipo propiedad:</b> ${item.tipo_inmb}</span></li>
                              <li><span><b>Dirección:</b> ${item.direccion}</span></li>
                              <li><span><b>Distrito:</b> ${item.distrito}</span></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          `;

          var documents = 
      });

      // Insertar el HTML generado en el contenedor
      $(".list-items-asig").html(html);

      // Asignar eventos a los botones de edición y guardado
      assignEvents();
    } catch (error) {
      console.error("Error en la solicitud:", error);
    }
  }

  // En el caso de que el elemento #asignado no esté visible, la función no se ejecutará.

  // ------------------------------------------------------------------

  // Asegúrate de que la función que carga los usuarios también sea async
  function loadUserOptions() {
    return new Promise((resolve, reject) => {
      $.ajax({
        type: "GET",
        url: "../views/data.php", // Ruta al archivo PHP
        data: { accion: "selectorUsersXArea" }, // Parámetro 'accion' para obtener usuarios
        dataType: "json",
        success: function (response) {
          if (response.error) {
            console.error("Error del servidor:", response.error);
            reject(response.error);
          } else {
            resolve(response); // Devolver la lista de usuarios
          }
        },
        error: function (xhr, status, error) {
          console.error("Error en la solicitud:", error);
          reject(error);
        },
      });
    });
  }

  // Función para asignar eventos después de cargar los elementos
  function assignEvents() {
    // Manejar evento de clic en los botones de editar
    $(".btn-edit").on("click", function () {
      const btnEdit = $(this);
      const btnSave = btnEdit.siblings(".btn-save");
      console.log(btnSave);

      const input = btnEdit
        .closest(".item-list-content")
        .find("select[name='usu_lgl']");
      const icon = btnEdit.find("i");

      if (icon.hasClass("fa-pencil")) {
        // Cambiar a modo edición
        icon.removeClass("fa-pencil").addClass("fa-times");
        input.prop("disabled", false);
        btnSave.removeAttr("hidden");
      } else {
        // Cambiar a modo visualización
        icon.removeClass("fa-times").addClass("fa-pencil");
        input.prop("disabled", true);
        btnSave.attr("hidden", true);
        input[0].selectedIndex = 0;
      }
    });

    // Manejar evento de clic en los botones de guardar
    $(".btn-save").on("click", function () {
      const btnSave = $(this);
      const btnEdit = btnSave.siblings(".btn-edit");
      const icon = btnEdit.find("i");
      const item = btnSave.closest(".item-list");
      const idProp = item.find("b:first").text().trim();
      const idUsu = item.find("select[name='usu_lgl']").val();

      $.ajax({
        url: "./../Controller/solicitudes_propiedades.php",
        type: "POST",
        data: {
          idProp: idProp,
          usuario: idUsu,
        },
        success: function (response) {
          // console.log("Respuesta del servidor:", response);

          if (response === "Success") {
            alert("Usuario asignado correctamente");

            // Volver a cargar la lista de solicitudes con la información actualizada
            showSolis();
          }
        },
        error: function (xhr, status, error) {
          console.error("Error en la solicitud:", error);
        },
        complete: function (jqXHR, textStatus) {
          // Recargar la lista de elementos después de la actualización
          showSolis();
          showSolicAsig();
        },
      });
    });
  }

  // Ejecuta la función para cargar los datos
  showSolis();
  showSolicAsig();
});
