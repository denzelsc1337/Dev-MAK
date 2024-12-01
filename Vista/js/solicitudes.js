document.addEventListener("DOMContentLoaded", function () {
  // Asignar eventos a las solicitudes
  var badges = document.querySelectorAll(".solicitar");

  badges.forEach((badge) => {
    // Definir la función de clic
    const handleClick = () => {
      var dataId = badge.getAttribute("data-id");
      var dataTarget = badge.getAttribute("data-attr");

      if (dataTarget && dataId) {
        var formData = new FormData();
        formData.append("dataId", dataId);
        formData.append("dataTarget", dataTarget);

        // Realizar la solicitud AJAX
        $.ajax({
          url: "./../Controller/add.solicitudes.php",
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          success: function (response) {
            console.log("Respuesta del servidor:", response);
          },
          error: function (xhr, status, error) {
            console.error("Error en la solicitud:", error);
          },
          complete: function (jqXHR) {
            if (jqXHR.responseText == "1") {
              badge.classList.add("opacity");

              setTimeout(() => {
                badge.className = "";
                badge.classList.add("badge-tp", "proceso");
                badge.setAttribute("disabled", "true");
                badge.textContent = "En proceso";
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

    badge.addEventListener("click", handleClick);
  });

  // Función para cargar solicitudes
  async function showSolis() {
    try {
      const response = await $.ajax({
        type: "GET",
        url: "../views/data.php",
        data: { accion: "showSolic" },
        dataType: "json",
      });

      if (response.error) {
        console.error("Error del servidor:", response.error);
        return;
      }

      const items = response;
      let users = [];
      try {
        users = await loadUserOptions();
      } catch (err) {
        console.error("No se pudieron cargar los usuarios", err);
      }

      let html = "";
      items.forEach((item) => {
        let userOptions = `<option value="" disabled selected>Seleccione</option>`;
        const currentAssignedUser = item.asignado;

        users.forEach((user) => {
          const isSelected =
            user.id_usu == currentAssignedUser ? "selected" : "";
          userOptions += `<option value="${user.id_usu}" ${isSelected}>${user.nombre_usu}</option>`;
        });

        html += `
          <div class="item-list mak-bdr">
            <div class="item-list-content">
              <div class="content-head">
                <div class="header">
                  <span>ID Propiedad: <b>${item.id_prop}</b></span>
                  <div class="d-flex">
                    <div class="btn-save" hidden><i class="fa-solid fa-floppy-disk"></i></div>
                    <div class="btn-edit"><i class="fa-solid fa-pencil"></i></div>
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
        `;
      });

      $(".list-items").html(html);
      assignEvents();
    } catch (error) {
      console.error("Error en la solicitud:", error);
    }
  }

  // Función para manejar solicitudes asignadas
  async function showSolicAsig() {
    let usuAsigElement = document.querySelector("#asignado");
    if (!usuAsigElement) {
      console.error("El elemento #asignado no está presente en el DOM.");
      return;
    }

    try {
      const response = await $.ajax({
        type: "GET",
        url: "../views/data.php",
        data: { accion: "showSolicAsig" },
        dataType: "json",
      });

      if (response.error) {
        console.error("Error del servidor:", response.error);
        return;
      }

      const items = response;
      let html = "";

      // Itera sobre cada propiedad
      for (const item of items) {
        let folderData = [];

        // Llama a loadDocuments para obtener las carpetas asociadas con cada propiedad
        try {
          folderData = await loadDocuments(item.id_prop);
        } catch (err) {
          console.error("No se pudieron cargar las carpetas", err);
        }

        // Generar el HTML para las carpetas
        let foldersHtml = "";
        if (folderData.length > 0) {
          foldersHtml = "<ul>";
          folderData.forEach((folder) => {
            foldersHtml += `<li>
              <a href="javascript:void(0);" class="folder" data-idprop="${
                item.id_prop
              }">
                ${folder.nombre_carpeta}
              </a>
              <ul class="files-list" data-folder="${folder.nombre_carpeta}">
                ${folder.archivos
                  .map(
                    (file) =>
                      `<li><a href="${file.url}" target="_blank">${file.nombre_doc}</a></li>`
                  )
                  .join("")}
              </ul>
            </li>`;
          });
          foldersHtml += "</ul>";
        } else {
          foldersHtml = "<p>No hay carpetas disponibles</p>";
        }

        // Generar el HTML de la propiedad
        html += `
          <div class="item-list mak-bdr">
            <div class="item-list-content">
              <div class="content-head">
                <div class="header">
                  <span>ID Propiedad: <b>${item.id_prop}</b></span>
                  <div class="d-flex">
                    <div class="btn-upload" hidden><i class="fa-solid fa-floppy-disk"></i></div>
                    <div class="btn-change"><i class="fa-solid fa-pencil"></i></div>
                  </div>
                </div>
              </div>
              <div id="content-item" class="d-flex">
                <div class="data">
                  <ul>
                    <li><span><b>Tipo propiedad:</b> ${item.tipo_inmb}</span></li>
                    <li><span><b>Dirección:</b> ${item.direccion}</span></li>
                    <li><span><b>Distrito:</b> ${item.distrito}</span></li>
                  </ul>
                  <div class="documents">
                    <span><b>Documentos:</b></span>
                      ${foldersHtml}
                  </div>
                </div>
                <div class="upload hidden">
                  <input type="file" name="upload_legal_file" id="upload_legal_file" style="width:100%">
                </div>  
              </div>
            </div>
          </div>
        `;
      }

      // Actualiza el HTML con la información de las propiedades y documentos
      $(".list-items-asig").html(html);

      // Asigna los eventos correspondientes
      assignEvents();
    } catch (error) {
      console.error("Error en la solicitud:", error);
    }
  }

  // Función para cargar documentos de una propiedad
  function loadDocuments(idProp) {
    return new Promise((resolve, reject) => {
      $.ajax({
        type: "GET",
        url: "../views/data.php",
        data: {
          accion: "documentsRead",
          idProp: idProp,
        },
        dataType: "json",
        success: function (response) {
          // console.log("Archivos recibidos para idProp", idProp, ":", response);
          if (response.error) {
            reject(response.error);
          } else {
            resolve(response); // Devuelve la lista de archivos
          }
        },
        error: function (xhr, status, error) {
          reject(error);
        },
      });
    });
  }

  // Función para cargar los usuarios
  function loadUserOptions() {
    return new Promise((resolve, reject) => {
      $.ajax({
        type: "GET",
        url: "../views/data.php",
        data: { accion: "selectorUsersXArea" },
        dataType: "json",
        success: function (response) {
          if (response.error) {
            reject(response.error);
          } else {
            resolve(response);
          }
        },
        error: function (xhr, status, error) {
          reject(error);
        },
      });
    });
  }

  // Asignar eventos de edición y guardado
  function assignEvents() {
    $(".btn-edit").on("click", function () {
      const btnEdit = $(this);
      const btnSave = btnEdit.siblings(".btn-save");
      const input = btnEdit
        .closest(".item-list-content")
        .find("select[name='usu_lgl']");
      const icon = btnEdit.find("i");

      if (icon.hasClass("fa-pencil")) {
        icon.removeClass("fa-pencil").addClass("fa-times");
        input.prop("disabled", false);
        btnSave.removeAttr("hidden");
      } else {
        icon.removeClass("fa-times").addClass("fa-pencil");
        input.prop("disabled", true);
        btnSave.attr("hidden", true);
        input[0].selectedIndex = 0;
      }
    });

    $(".btn-change").on("click", function () {
      const btnChange = $(this);
      const btnUpload = btnChange.siblings(".btn-upload");
      const contentData = $(".data");
      const contentUpload = $(".upload");
      const input = btnChange
        .closest(".content-itemS")
        .find("input[name='upload_legal_file']");
      const icon = btnChange.find("i");

      if (icon.hasClass("fa-pencil")) {
        icon.removeClass("fa-pencil").addClass("fa-times");
        // data
        contentUpload.removeClass("hidden");
        contentData.addClass("hidden");
        // btnupload
        btnUpload.removeAttr("hidden");
      } else {
        icon.removeClass("fa-times").addClass("fa-pencil");
        //upload
        contentData.removeClass("hidden");
        contentUpload.addClass("hidden");
        // btnupload
        btnUpload.attr("hidden", true);
      }
    });

    $(".btn-save").on("click", function () {
      const btnSave = $(this);
      const btnEdit = btnSave.siblings(".btn-edit");
      const item = btnSave.closest(".item-list");
      const idProp = item.find("b:first").text().trim();
      const idUsu = item.find("select[name='usu_lgl']").val();

      $.ajax({
        url: "./../Controller/solicitudes_propiedades.php",
        type: "POST",
        data: {
          idProp: idProp,
          usuAsignado: idUsu,
          accion: "guardar",
        },
        success: function (response) {
          console.log(response);
        },
        error: function (xhr, status, error) {
          console.error("Error en la solicitud:", error);
        },
        complete: function () {
          const icon = btnEdit.find("i");
          icon.removeClass("fa-times").addClass("fa-pencil");
          const input = item.find("select[name='usu_lgl']");
          input.prop("disabled", true);
          btnSave.attr("hidden", true);
          showSolicAsig();
        },
      });
    });

    $(".btn-upload").on("click", function () {
      const btnUpload = $(this);
      const item = btnUpload.closest(".item-list");
      const idProp = item.find("b:first").text().trim();

      // Asegúrate de que el input de archivo se haya creado dinámicamente
      const fileInput = document.getElementById("upload_legal_file");
      if (!fileInput) {
        console.error("El input de archivo no está disponible");
        return;
      }

      const file = fileInput.files[0]; // Obtener el archivo seleccionado
      // console.log(file);

      // Verificar si se seleccionó un archivo
      if (!file) {
        console.error("No se ha seleccionado ningún archivo");
        return;
      }

      // Crear un objeto FormData para enviar el archivo
      const formData = new FormData();
      formData.append("idProp", idProp); // Añadir el idProp al FormData
      formData.append("file", file); // Añadir el archivo al FormData
      formData.append("accion", "subir"); // Acción para el backend

      // Enviar el archivo usando AJAX
      $.ajax({
        url: "./../Controller/upload_doc_legal.php",
        type: "POST",
        data: formData, // Enviar el FormData
        contentType: false, // Para que jQuery no establezca un contentType incorrecto
        processData: false, // Para evitar que jQuery procese el FormData
        success: function (response) {
          // console.log(response);
        },
        error: function (xhr, status, error) {
          console.error("Error en la solicitud:", error);
        },
        complete: function () {
          // window.location.reload(true);
          // window.location.reload(true);
          showSolicAsig();
        },
      });
    });
  }
  // Ejecuta la función para cargar los datos
  showSolis();
  showSolicAsig();
});
