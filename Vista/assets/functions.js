$(document).ready(function () {
  // Cuando cambia el valor del cboPais
  $("#respons_").change(function () {
    var cod_usu = $(this).val();

    // Realizar una llamada Ajax para obtener las ciudades del país seleccionado
    $.ajax({
      url: "../Controller/getArea.php",
      method: "POST",
      data: { cod_usu: cod_usu },
      success: function (area) {
        // Limpiar el cboCiudad y agregar las nuevas opciones
        var area = JSON.parse(area);
        console.log(area);
        $("#area_").empty();
        $.each(area, function (index, area) {
          $("#area_").append(
            $("<option>").text(area.desc_area).val(area.id_area)
          );
        });
      },
    });
  });

  //--------------------------------------------EN USO-------------------------------------------------------------------//
  //--------------------------------------------EN USO-------------------------------------------------------------------//
  //--------------------------------------------EN USO-------------------------------------------------------------------//

  /*const socket = new WebSocket('ws://localhost:8080'); // Cambia la URL según tu configuración

  socket.addEventListener('message', (event) => {
    const mensaje = JSON.parse(event.data);
    console.log('Mensaje recibido:', mensaje);
    if (mensaje.tipo === 'nuevo_registro') {
      cargarTabla(); // Carga la tabla actualizada cuando se recibe la notificación
    }
  });*/

  $("#btnValo_casa").click(function (e) {
    e.preventDefault();
    $("#loader").show();
    var formData = new FormData($("#form_valor")[0]);
    // --
    formData.append("uploadedFiles_PU", JSON.stringify(uploadedFiles_PU));
    formData.append("uploadedFiles_CL", JSON.stringify(uploadedFiles_CL));
    formData.append("uploadedPictures", JSON.stringify(uploadedPictures));
    // --
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_casa.php",
      data: formData,
      processData: false,
      contentType: false,

      beforeSend: function () {
        $("#loader").show();
      },

      success: function (r) {
        setTimeout(function () {
          $("#loader").hide();

          if (r) {
            //alert("Solicitud enviada correctamente.");
            // // console.log(r);
            /*const mensaje = JSON.stringify({ tipo: 'nuevo_registro', mensaje: 'Nuevo registro insertado' });
            socket.send(mensaje);*/
            // No es necesario cambiar event.returnValue a false
            // window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // // console.log(r);
            // console.log(data);
          }
          // // console.log(r);
          // console.log(data);
        }, 900);
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    // No es necesario cambiar event.returnValue a false
    return false;
  });

  $("#btnValo_depa").click(function (e) {
    e.preventDefault();
    $("#loader").show();
    //var data = $("#form_valor").serialize();
    var formData = new FormData($("#form_valor")[0]);

    formData.append("uploadedFiles_PU", JSON.stringify(uploadedFiles_PU));
    formData.append("uploadedFiles_CL", JSON.stringify(uploadedFiles_CL));
    formData.append("uploadedPictures", JSON.stringify(uploadedPictures));

    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_depa.php",
      data: formData,
      processData: false,
      contentType: false,

      beforeSend: function () {
        $("#loader").show();
      },

      success: function (r) {
        setTimeout(function () {
          $("#loader").hide();
          if (r) {
            //alert("Solicitud enviada correctamente.");
            // console.log(r);
            //event.returnValue = false;
            window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // console.log(r);
            //console.log(formData);
          }
        }, 900);
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    return false;
  });

  $("#btnValo_terren").click(function (e) {
    $("#loader").show();
    e.preventDefault();
    //var data = $("#form_valor").serialize();
    var formData = new FormData($("#form_valor")[0]);
    //var id_zoni_t = 20;
    //console.log(id_zoni_t);

    formData.append("uploadedFiles_PU", JSON.stringify(uploadedFiles_PU));
    formData.append("uploadedFiles_CL", JSON.stringify(uploadedFiles_CL));
    formData.append("uploadedPictures", JSON.stringify(uploadedPictures));

    console.log(formData);
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_terreno.php",
      data: formData,
      processData: false,
      contentType: false,

      beforeSend: function () {
        $("#loader").show();
      },

      success: function (r) {
        setTimeout(function () {
          $("#loader").hide();
          if (r) {
            //alert("Solicitud enviada correctamente.");
            // console.log(r);
            //event.returnValue = false;
            window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // console.log(r);
            //console.log(formData);
          }
        }, 900);
      },

      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
      },
    });
    return false;
  });

  $("#btnValo_ofi").click(function (e) {
    $("#loader").show();
    e.preventDefault();
    //var data = $("#form_valor").serialize();
    var formData = new FormData($("#form_valor")[0]);

    formData.append("uploadedFiles_PU", JSON.stringify(uploadedFiles_PU));
    formData.append("uploadedFiles_CL", JSON.stringify(uploadedFiles_CL));
    formData.append("uploadedPictures", JSON.stringify(uploadedPictures));

    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_oficina.php",
      data: formData,
      processData: false,
      contentType: false,

      beforeSend: function () {
        $("#loader").show();
      },

      success: function (r) {
        setTimeout(function () {
          $("#loader").hide();
          if (r) {
            //alert("Solicitud enviada correctamente.");
            // console.log(r);
            //event.returnValue = false;
            window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // console.log(r);
            //console.log(formData);
          }
        }, 900);
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
      },
    });
    return false;
  });

  $("#btnValo_lc_ex").click(function (e) {
    $("#loader").show();
    e.preventDefault();
    //var data = $("#form_valor").serialize();
    var formData = new FormData($("#form_valor")[0]);

    formData.append("uploadedFiles_PU", JSON.stringify(uploadedFiles_PU));
    formData.append("uploadedFiles_CL", JSON.stringify(uploadedFiles_CL));
    formData.append("uploadedPictures", JSON.stringify(uploadedPictures));

    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_localComercial.php",
      data: formData,
      processData: false,
      contentType: false,

      beforeSend: function () {
        $("#loader").show();
      },

      success: function (r) {
        setTimeout(function () {
          $("#loader").hide();
          if (r) {
            //alert("Solicitud enviada correctamente.");
            // console.log(r);
            //event.returnValue = false;
            window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // console.log(r);
            //console.log(formData);
          }
        }, 900);
      },

      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
      },
    });
    return false;
  });

  $("#btnValo_lc_com").click(function (e) {
    $("#loader").show();
    e.preventDefault();
    //var data = $("#form_valor").serialize();
    var formData = new FormData($("#form_valor")[0]);

    formData.append("uploadedFiles_PU", JSON.stringify(uploadedFiles_PU));
    formData.append("uploadedFiles_CL", JSON.stringify(uploadedFiles_CL));
    formData.append("uploadedPictures", JSON.stringify(uploadedPictures));

    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_localComercial_Comun.php",
      data: formData,
      processData: false,
      contentType: false,

      beforeSend: function () {
        $("#loader").show();
      },

      success: function (r) {
        setTimeout(function () {
          $("#loader").hide();
          if (r) {
            //alert("Solicitud enviada correctamente.");
            // console.log(r);
            //event.returnValue = false;
            window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // console.log(r);
            //console.log(formData);
          }
        }, 900);
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
      },
    });
    return false;
  });

  $("#btnValo_lc_ind").click(function (e) {
    $("#loader").show();
    e.preventDefault();
    //var data = $("#form_valor").serialize();
    var formData = new FormData($("#form_valor")[0]);

    formData.append("uploadedFiles_PU", JSON.stringify(uploadedFiles_PU));
    formData.append("uploadedFiles_CL", JSON.stringify(uploadedFiles_CL));
    formData.append("uploadedPictures", JSON.stringify(uploadedPictures));

    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_localIndustrial.php",
      data: formData,
      processData: false,
      contentType: false,

      beforeSend: function () {
        $("#loader").show();
      },

      success: function (r) {
        setTimeout(function () {
          $("#loader").hide();
          if (r) {
            //alert("Solicitud enviada correctamente.");
            // console.log(r);
            //event.returnValue = false;
            window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // console.log(r);
            //console.log(formData);
          }
        }, 900);
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
      },
    });
    return false;
  });

  $("#btnValo_obs_set").click(function (e) {
    e.preventDefault();

    var data = $("#add_obs_val_0").serialize();

    $.ajax({
      type: "POST",
      url: "../Controller/update_obs_solic.php",
      data: data,
      success: function (response) {
        console.log(response);
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
  });

  $("#btnValo_obs_save").click(function (e) {
    e.preventDefault();

    var data = $("#add_data_val").serialize();
    $.ajax({
      type: "POST",
      url: "../Controller/update_status_solic.php",
      data: data,
      success: function (response) {
        console.log(response);

        event.returnValue = false;
        window.location.href = "../Valorizacion/";
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
  });

  $("#btn_updt_solic_l").click(function (e) {
    e.preventDefault();
    var _data = {
      btn_updt_solic_l: true,
      _id_doc: $("#id_solic_doc").val(),
      _slct_status: $("#status_solic_legal_cbo").val(),
    };
    $.ajax({
      type: "POST",
      url: "../Controller/update_status_legal.php",
      data: _data,
      success: function (response) {
        console.log(response);

        event.returnValue = false;
        window.location.href = "../Legal/";
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
  });

  $("#btn_save_valo_file").click(function (e) {
    e.preventDefault();

    var formData = new FormData($("#adding_valo_file")[0]);

    $.ajax({
      type: "POST",
      url: "../Controller/upload_doc_valorizacion.php",
      data: formData,
      processData: false,
      contentType: false,
      beforeSend: function () {
        $("#loader_add_valo").show();
        $(".adding_valo_content").hide();
      },
      success: function (response) {
        if (response) {
          $("#message_aprob").text("Archivos cargados exitosamente.");
          console.log("e?" + response);
        } else if (response.error) {
          $("#message_aprob").text(response.error);
          console.log("uwu" + response);
        } else {
          $("#message_aprob").text("Error desconocido al cargar archivos.");
          console.log("p" + response);
        }
      },
      complete: function () {
        setTimeout(() => {
          $(".adding_valo_content").show();
          $("#loader_add_valo").hide();

          $("#upload_valorizacion").modal("hide");
        }, 2000);
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
  });

  $("#btn_save_legal_file").click(function (e) {
    e.preventDefault();

    var formData = new FormData($("#adding_legal_file")[0]);

    $.ajax({
      type: "POST",
      url: "../Controller/upload_doc_legal.php",
      data: formData,
      processData: false,
      contentType: false,
      beforeSend: function () {
        $("#loader_add_legal").show();
        $(".adding_legal_content").hide();
      },
      success: function (response) {
        if (response) {
          $("#message_aprob").text("Archivos cargados exitosamente.");
          console.log("e?" + response);
        } else if (response.error) {
          $("#message_aprob").text(response.error);
          console.log("uwu" + response);
        } else {
          $("#message_aprob").text("Error desconocido al cargar archivos.");
          console.log("p" + response);
        }
      },
      complete: function () {
        setTimeout(() => {
          $(".adding_legal_content").show();
          $("#loader_add_legal").hide();

          $("#modal_upld_File").modal("hide");
        }, 2000);
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
  });

  $("#loginButton").click(function (e) {
    e.preventDefault();

    var data = $("#loginForm").serialize();

    $.ajax({
      type: "POST",
      url: "Controller/login.php",
      data: data,
      success: function (response) {
        if (response === "empty_fields") {
          $("#message").text("Please fill in all fields.");
        } else if (response === "incorrect_auth") {
          $("#message").text("Incorrect authentication. Please try again.");
        } else if (response === "success") {
          window.location.href = "dashboard.php";
        } else {
          $("#message").text("Unknown error while logging in.");
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
  });

  // INPUT WITH LIST
  $(document).ready(function () {
    $(".auto-input").on("keyup", function () {
      var letra = $(this).val();
      var listaZonas = $(".lista");

      if (letra.length > 0) {
        $.ajax({
          url: "../Controller/getZon.php",
          method: "POST",
          data: {
            caracter: letra,
          },
          success: function (response) {
            var zonas = JSON.parse(response);
            console.log(zonas);

            listaZonas.empty();

            if (zonas.length >= 1) {
              zonas.forEach(function (zona) {
                listaZonas.append(
                  '<li id="' + zona.id_zona + '">' + zona.tipo_zona + "</li>"
                );
                listaZonas.addClass("visible");
              });
            } else {
              // Si no se encontraron opciones, mostramos el mensaje en un <li> deshabilitado
              listaZonas.append(
                '<li class="disabled-li">No se encontraron opciones para la zonificacion ingresada.</li>'
              );
              listaZonas.addClass("visible");
            }

            listaZonas.find("li").click(function () {
              var texto = $(this).text();
              var id = $(this).attr("id");
              console.log(texto);
              console.log(id);
              $("#btnValo_terren").attr("data-id-zoni", id);
              $("#opciones_zoni_t").val(id);
              $("#opciones_zoni_ofi").val(id);
              $("#opciones_zoni_lc").val(id);
              $("#opciones_zoni_lc_c").val(id);

              // $(".auto-input").val(id);
              $(".auto-input").val(texto);

              listaZonas.empty(); // Vaciamos la lista después de seleccionar
              listaZonas.removeClass("visible");
            });
          },
        });
      } else {
        listaZonas.empty();
        listaZonas.removeClass("visible");
      }
    });
  });
  function displayNames(value) {
    input.value = value;
  }
  // INPUT WITH LIST

  // DRAG AND DROP FILES
  var dragArea = document.querySelectorAll(".content-file");
  var DataFiles = [];

  dragArea.forEach((element) => {
    var dragText = element.querySelector("span");
    var buttonFile = element.querySelectorAll("#buttonFile");
    var inputFile = element.querySelector(".upload");

    buttonFile.forEach((buttonFile) => {
      buttonFile.addEventListener("click", (e) => {
        inputFile.click();
      });
    });

    //inputFile.forEach((inputFile) => {
    inputFile.addEventListener("change", (e) => {
      files = inputFile.files;
      showFiles(files);
    });
    //});

    element.addEventListener("dragover", (e) => {
      e.preventDefault();
      dragText.textContent = "Suelta los archivos aquí para subirlos.";
    });

    element.addEventListener("dragleave", (e) => {
      e.preventDefault();
      dragText.textContent = "Arrastre los archivos aquí para subirlos.";
    });

    element.addEventListener("drop", (e) => {
      e.preventDefault();
      files = e.dataTransfer.files;
      inputFile.files = files;
      showFiles(files);
      dragText.textContent = "Arrastre los archivos aquí para subirlos.";
    });

    function showFiles(files) {
      if (files.length === undefined) {
        processFile(files);
      } else {
        for (const file of files) {
          processFile(file);
        }
      }
    }

    function processFile(file) {
      const docType = file.type;
      const validExtensions = [
        "image/jpeg",
        "image/jpg",
        "image/png",
        "image/gif",
        "application/pdf",
        "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
        "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
        "application/vnd.openxmlformats-officedocument.presentationml.presentation",
        "text/plain",
      ];

      if (validExtensions.includes(docType)) {
        // archivo valido
        const fileReader = new FileReader();

        const id = `file-${Math.random().toString(32).substring(7)}`;

        fileReader.addEventListener("load", (e) => {
          const fileUrl = fileReader.result;
          const fileExtension = getFileExtension(file.name);

          let FaceArchive = "";
          FaceArchive += `
             <div id="${id}" class="archive-item" title="${file.name}">
               <span class="drop-item bg-danger"><i class="fa-solid fa-xmark"></i></span>
               <div class="upld-file">
                <img src="../Vista/images/document.svg" alt="">
               </div>
               <div class="archive">
                 <span>${file.name}</span>
               </div>
             </div>
             `;

          /////////////
          const html = element.querySelectorAll(".file-archives");

          html.forEach((element) => {
            element.innerHTML += FaceArchive;

            //
            DataFiles.push({
              id,
              name: file.name,
              type: file.type,
              size: file.size,
              lastModified: file.lastModified,
              tmp_name: fileReader.result,
            });
            //

            // ACÁ LLAMAR FUNCTION
            contTagFiles();

            const dropItem = document.querySelectorAll(".drop-item");
            dropItem.forEach((dropItem) => {
              dropItem.addEventListener("click", (e) => {
                const itemdrop = dropItem.closest(".archive-item");
                if (itemdrop) {
                  const id = itemdrop.id;
                  itemdrop.remove();
                  removeFile(id);
                  contTagFiles();
                }
              });
            });
          });

          /////////////
        });
        fileReader.readAsDataURL(file);
        // uploadFile(file, id);
      } else {
        // archivo no valido
        alert("Archivo no válido: " + file.name);
      }
      // console.log(DataFiles);
    }

    function removeFile(id) {
      const indexToRemove = DataFiles.findIndex((item) => item.id === id);
      if (indexToRemove !== -1) {
        DataFiles.splice(indexToRemove, 1);
        // console.log(DataFiles);
      }
    }

    function contTagFiles() {
      const fileMessage = element.querySelector(".file-message");
      const fileArchives = element.querySelector(".file-archives");
      // const iptFile = element.querySelector(".upload");
      var cantFileMessage = element.querySelectorAll(".archive-item").length;
      var btnDisable = element.querySelectorAll("button");

      // console.log(fileArchives);
      // console.log(cantFileMessage);
      // console.log(btnDisable);

      if (cantFileMessage > 0) {
        fileMessage.style.display = "none";
        fileArchives.style.display = "flex";
        // DISABLE BUTTON
        btnDisable.forEach((element) => {
          element.disabled = false;
        });
        // DISABLE BUTTON
      } else {
        fileMessage.style.display = "flex";
        fileArchives.style.display = "none";
        // DISABLE BUTTON
        btnDisable.forEach((element) => {
          element.disabled = true;
        });
        // DISABLE BUTTON
        // iptFile.value = "";
      }
    }

    function getFileExtension(filename) {
      return filename.slice(((filename.lastIndexOf(".") - 1) >>> 0) + 2);
    }
  });
  // DRAG AND DROP FILES

  //
  $("#btn_save_hr").click(function (e) {
    e.preventDefault();
    // $("#loader").show();

    // var formData = $("#file_HR").serialize();
    var formData = new FormData($("#file_HR")[0]);

    formData.append("btn_save_hr", true);
    formData.append("DataFiles", JSON.stringify(DataFiles));

    $.ajax({
      type: "POST",
      url: "../Controller/Upload_Legal_Docs.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        // // console.log(r);

        setTimeout(function () {
          if (r) {
            $("#loader__hr").show();
            $(".file-message").hide();
            $(".file-archives").hide();
            alert("Solicitud enviada correctamente.");
            // $("#modal_archive_HR").modal("hide");
            // console.log(r);

            var modal = document.querySelector("#modal_archive_HR"),
              files = modal.querySelector(".input-file"),
              fileMessage = files.querySelector(".file-message"),
              fileArchives = files.querySelector(".file-archives");

            setTimeout(() => {
              // Oculta el contenedor estableciendo su estilo a "display: none"
              fileArchives.style.display = "none";
              fileMessage.style.display = "flex";
              // Borra todos los elementos hijos del contenedor
              while (fileArchives.firstChild) {
                fileArchives.removeChild(fileArchives.firstChild);
              }
            }, 100);

            //event.returnValue = false;
            // window.location.href = "../Legal/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // // console.log(r);
            //console.log(formData);
          }
        }, 1500);
      },
      complete: function () {
        // funcion para borrar los files subidos
        EraseContent();
        setTimeout(() => {
          $("#loader__hr").hide();
          $(".file-archives").hide();
          $(".file-message").show();
        }, 1500);
        $("#modal_archive_HR").modal("hide");
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    return false;
  });

  $("#btn_save_pu").click(function (e) {
    e.preventDefault();
    // $("#loader").show();

    // var formData = $("#file_HR").serialize();
    var formData = new FormData($("#file_PU")[0]);

    formData.append("btn_save_pu", true);
    formData.append("DataFiles", JSON.stringify(DataFiles));

    $.ajax({
      type: "POST",
      url: "../Controller/Upload_Legal_Docs.php",
      data: formData,
      processData: false,
      contentType: false,

      beforeSend: function () {
        $("#loader").show();
      },

      success: function (r) {
        // // console.log(r);

        setTimeout(function () {
          $("#loader").hide();
          if (r) {
            alert("Solicitud enviada correctamente.");
            $("#modal_archive_PU").modal("hide");
            // console.log(r);

            var modal = document.querySelector("#modal_archive_PU"),
              files = modal.querySelector(".input-file"),
              fileMessage = files.querySelector(".file-message"),
              fileArchives = files.querySelector(".file-archives");

            setTimeout(() => {
              // Oculta el contenedor estableciendo su estilo a "display: none"
              fileArchives.style.display = "none";
              fileMessage.style.display = "flex";
              // Borra todos los elementos hijos del contenedor
              while (fileArchives.firstChild) {
                fileArchives.removeChild(fileArchives.firstChild);
              }
            }, 100);
            //event.returnValue = false;
            // window.location.href = "../Legal/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // // console.log(r);
            //console.log(formData);
          }
        }, 900);
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    return false;
  });

  $("#btn_save_cl").click(function (e) {
    e.preventDefault();
    // $("#loader").show();

    // var formData = $("#file_HR").serialize();
    var formData = new FormData($("#file_CL")[0]);

    formData.append("btn_save_cl", true);
    formData.append("DataFiles", JSON.stringify(DataFiles));

    $.ajax({
      type: "POST",
      url: "../Controller/Upload_Legal_Docs.php",
      data: formData,
      processData: false,
      contentType: false,

      beforeSend: function () {
        $("#loader").show();
      },

      success: function (r) {
        // // console.log(r);

        setTimeout(function () {
          $("#loader").hide();
          if (r) {
            alert("Solicitud enviada correctamente.");
            $("#modal_archive_CL").modal("hide");
            // console.log(r);

            var modal = document.querySelector("#modal_archive_CL"),
              files = modal.querySelector(".input-file"),
              fileMessage = files.querySelector(".file-message"),
              fileArchives = files.querySelector(".file-archives");

            setTimeout(() => {
              // Oculta el contenedor estableciendo su estilo a "display: none"
              fileArchives.style.display = "none";
              fileMessage.style.display = "flex";
              // Borra todos los elementos hijos del contenedor
              while (fileArchives.firstChild) {
                fileArchives.removeChild(fileArchives.firstChild);
              }
            }, 100);
            //event.returnValue = false;
            // window.location.href = "../Legal/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // // console.log(r);
            //console.log(formData);
          }
        }, 900);
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    return false;
  });

  $("#btn_save_dni").click(function (e) {
    e.preventDefault();
    // $("#loader").show();

    // var formData = $("#file_HR").serialize();
    var formData = new FormData($("#file_DNI")[0]);

    formData.append("btn_save_dni", true);
    formData.append("DataFiles", JSON.stringify(DataFiles));

    $.ajax({
      type: "POST",
      url: "../Controller/Upload_Legal_Docs.php",
      data: formData,
      processData: false,
      contentType: false,

      beforeSend: function () {
        $("#loader").show();
      },

      success: function (r) {
        // // console.log(r);

        setTimeout(function () {
          $("#loader").hide();
          if (r) {
            alert("Solicitud enviada correctamente.");
            $("#modal_archive_DNI").modal("hide");
            // console.log(r);

            var modal = document.querySelector("#modal_archive_DNI"),
              files = modal.querySelector(".input-file"),
              fileMessage = files.querySelector(".file-message"),
              fileArchives = files.querySelector(".file-archives");

            setTimeout(() => {
              // Oculta el contenedor estableciendo su estilo a "display: none"
              fileArchives.style.display = "none";
              fileMessage.style.display = "flex";
              // Borra todos los elementos hijos del contenedor
              while (fileArchives.firstChild) {
                fileArchives.removeChild(fileArchives.firstChild);
              }
            }, 100);
            //event.returnValue = false;
            // window.location.href = "../Legal/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // // console.log(r);
            //console.log(formData);
          }
        }, 900);
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    return false;
  });
  //

  // LEGAL_
  //
  $("#btn_isrt_hr").click(function (e) {
    e.preventDefault();
    // $("#loader").show();

    // var formData = $("#file_HR").serialize();
    var formData = new FormData($("#isrt_HR")[0]);

    formData.append("btn_isrt_hr", true);
    formData.append("DataFiles", JSON.stringify(DataFiles));

    $.ajax({
      type: "POST",
      url: "../Controller/Upload_Legal_Docs.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        $("#loader__hr").show();
        $(".file-message").hide();
        $(".file-archives").hide();
        setTimeout(function () {
          if (r) {
            alert("Solicitud enviada correctamente.");
            // console.log(r);
            var modal = document.querySelector("#modal_archive_HR"),
              files = modal.querySelector(".input-file"),
              fileMessage = files.querySelector(".file-message"),
              fileArchives = files.querySelector(".file-archives");
            setTimeout(() => {
              // Oculta el contenedor estableciendo su estilo a "display: none"
              fileArchives.style.display = "none";
              fileMessage.style.display = "flex";
              // Borra todos los elementos hijos del contenedor
              while (fileArchives.firstChild) {
                fileArchives.removeChild(fileArchives.firstChild);
              }
            }, 100);
            // event.returnValue = false;
            // window.location.href = "../Legal/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
          }
        }, 1500);
      },
      complete: function () {
        // funcion para borrar los files subidos
        EraseContent();
        setTimeout(() => {
          $("#modal_archive_HR").hide();
          $("#modal_archive_HR").modal("hide");

          $("#loader__hr").hide();
          $(".file-archives").hide();
          $(".file-message").show();
        }, 1500);
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    return false;
  });

  $("#btn_isrt_pu").click(function (e) {
    e.preventDefault();
    // $("#loader").show();

    // var formData = $("#file_HR").serialize();
    var formData = new FormData($("#isrt_PU")[0]);

    formData.append("btn_isrt_pu", true);
    formData.append("DataFiles", JSON.stringify(DataFiles));

    $.ajax({
      type: "POST",
      url: "../Controller/Upload_Legal_Docs.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        $("#loader__pu").show();
        $(".file-message").hide();
        $(".file-archives").hide();
        setTimeout(function () {
          if (r) {
            alert("Solicitud enviada correctamente.");
            // console.log(r);
            var modal = document.querySelector("#modal_archive_PU"),
              files = modal.querySelector(".input-file"),
              fileMessage = files.querySelector(".file-message"),
              fileArchives = files.querySelector(".file-archives");
            setTimeout(() => {
              // Oculta el contenedor estableciendo su estilo a "display: none"
              fileArchives.style.display = "none";
              fileMessage.style.display = "flex";
              // Borra todos los elementos hijos del contenedor
              while (fileArchives.firstChild) {
                fileArchives.removeChild(fileArchives.firstChild);
              }
            }, 100);
            // event.returnValue = false;
            // window.location.href = "../Legal/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
          }
        }, 1500);
      },
      complete: function () {
        // funcion para borrar los files subidos
        EraseContent();
        setTimeout(() => {
          $("#modal_archive_PU").hide();
          $("#modal_archive_PU").modal("hide");

          $("#loader__pu").hide();
          $(".file-archives").hide();
          $(".file-message").show();
        }, 1500);
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    return false;
  });

  $("#btn_isrt_cl").click(function (e) {
    e.preventDefault();
    // $("#loader").show();

    // var formData = $("#file_HR").serialize();
    var formData = new FormData($("#isrt_CL")[0]);

    formData.append("btn_isrt_cl", true);
    formData.append("DataFiles", JSON.stringify(DataFiles));

    $.ajax({
      type: "POST",
      url: "../Controller/Upload_Legal_Docs.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        $("#loader__cl").show();
        $(".file-message").hide();
        $(".file-archives").hide();
        setTimeout(function () {
          if (r) {
            alert("Solicitud enviada correctamente.");
            // console.log(r);
            var modal = document.querySelector("#modal_archive_CL"),
              files = modal.querySelector(".input-file"),
              fileMessage = files.querySelector(".file-message"),
              fileArchives = files.querySelector(".file-archives");
            setTimeout(() => {
              // Oculta el contenedor estableciendo su estilo a "display: none"
              fileArchives.style.display = "none";
              fileMessage.style.display = "flex";
              // Borra todos los elementos hijos del contenedor
              while (fileArchives.firstChild) {
                fileArchives.removeChild(fileArchives.firstChild);
              }
            }, 100);
            // event.returnValue = false;
            // window.location.href = "../Legal/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // console.log(r);
            console.log(formData);
          }
        }, 1500);
      },
      complete: function () {
        // funcion para borrar los files subidos
        EraseContent();
        setTimeout(() => {
          $("#modal_archive_CL").hide();
          $("#modal_archive_CL").modal("hide");

          $("#loader__cl").hide();
          $(".file-archives").hide();
          $(".file-message").show();
        }, 1500);
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    return false;
  });

  $("#btn_isrt_dni").click(function (e) {
    e.preventDefault();
    // $("#loader").show();

    // var formData = $("#file_HR").serialize();
    var formData = new FormData($("#isrt_DNI")[0]);

    formData.append("btn_isrt_dni", true);
    formData.append("DataFiles", JSON.stringify(DataFiles));

    $.ajax({
      type: "POST",
      url: "../Controller/Upload_Legal_Docs.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        $("#loader__dni").show();
        $(".file-message").hide();
        $(".file-archives").hide();
        setTimeout(function () {
          if (r) {
            alert("Solicitud enviada correctamente.");
            // console.log(r);
            var modal = document.querySelector("#modal_archive_DNI"),
              files = modal.querySelector(".input-file"),
              fileMessage = files.querySelector(".file-message"),
              fileArchives = files.querySelector(".file-archives");
            setTimeout(() => {
              // Oculta el contenedor estableciendo su estilo a "display: none"
              fileArchives.style.display = "none";
              fileMessage.style.display = "flex";
              // Borra todos los elementos hijos del contenedor
              while (fileArchives.firstChild) {
                fileArchives.removeChild(fileArchives.firstChild);
              }
            }, 100);
            // event.returnValue = false;
            // window.location.href = "../Legal/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // console.log(r);
            console.log(formData);
          }
        }, 1500);
      },
      complete: function () {
        // funcion para borrar los files subidos
        EraseContent();
        setTimeout(() => {
          $("#modal_archive_DNI").hide();
          $("#modal_archive_DNI").modal("hide");

          $("#loader__dni").hide();
          $(".file-archives").hide();
          $(".file-message").show();
        }, 1500);
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    return false;
  });
  //
  // LEGAL_

  // MODALES UPDATE UPLOAD FILES
  $("#btn_updt_hr").click(function (e) {
    e.preventDefault();
    //
    var formData = new FormData($("#updt_HR")[0]);
    //
    formData.append("btn_updt_hr", true);
    // --
    $.ajax({
      type: "POST",
      url: "../Controller/Upload_Legal_Docs.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        // console.log(r);

        $("#loader__hr").show();
        $(".file-message").hide();
        $(".file-archives").hide();
      },
      complete: function () {
        // funcion para borrar los files subidos
        EraseContent();
        setTimeout(() => {
          $("#loader__hr").hide();
          $(".file-archives").hide();
          $(".file-message").show();
          $("#modal_archive_HR").modal("hide");
        }, 1500);
      },
      error: function (xhr, status, error) {
        // $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    // No es necesario cambiar event.returnValue a false
    return false;
  });

  $("#btn_updt_pu").click(function (e) {
    e.preventDefault();
    //
    var formData = new FormData($("#updt_PU")[0]);
    //
    formData.append("btn_updt_pu", true);
    // --
    $.ajax({
      type: "POST",
      url: "../Controller/Upload_Legal_Docs.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        // console.log(r);
        $("#loader__pu").show();
        $(".file-archives").hide();
      },
      complete: function () {
        // funcion para borrar los files subidos
        EraseContent();
        setTimeout(() => {
          $("#loader__pu").hide();
          $(".file-archives").hide();
          $(".file-message").show();
          $("#modal_archive_PU").modal("hide");
        }, 1500);
      },
      error: function (xhr, status, error) {
        // $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    // No es necesario cambiar event.returnValue a false
    return false;
  });

  $("#btn_updt_cl").click(function (e) {
    e.preventDefault();
    //
    var formData = new FormData($("#updt_CL")[0]);
    //
    formData.append("btn_updt_cl", true);
    // --
    $.ajax({
      type: "POST",
      url: "../Controller/Upload_Legal_Docs.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        // console.log(r);
        $("#loader__cl").show();
        $(".file-archives").hide();
      },
      complete: function () {
        // funcion para borrar los files subidos
        EraseContent();
        setTimeout(() => {
          $("#loader__cl").hide();
          $(".file-archives").hide();
          $(".file-message").show();
          $("#modal_archive_CL").modal("hide");
        }, 1500);
      },
      error: function (xhr, status, error) {
        // $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    // No es necesario cambiar event.returnValue a false
    return false;
  });

  $("#btn_updt_dni").click(function (e) {
    e.preventDefault();
    //
    var formData = new FormData($("#updt_DNI")[0]);
    //
    formData.append("btn_updt_dni", true);
    // --
    $.ajax({
      type: "POST",
      url: "../Controller/Upload_Legal_Docs.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        // console.log(r);
        $("#loader__dni").show();
        $(".file-archives").hide();
      },
      complete: function () {
        // funcion para borrar los files subidos
        EraseContent();
        setTimeout(() => {
          $("#loader__dni").hide();
          $(".file-archives").hide();
          $(".file-message").show();
          $("#modal_archive_DNI").modal("hide");
        }, 1500);
      },
      error: function (xhr, status, error) {
        // $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    // No es necesario cambiar event.returnValue a false
    return false;
  });
  // MODALES UPDATE UPLOAD FILES
  // ---------------------
  $("#btn_updt_solic").click(function (e) {
    e.preventDefault();
    //
    var formData = new FormData($("#updt_files")[0]);
    //
    formData.append("btn_updt_solic", true);
    // --
    $.ajax({
      type: "POST",
      url: "../Controller/Add_Solic_Legal.php",
      data: formData,
      processData: false,
      contentType: false,

      beforeSend: function () {
        // $("#loader").show();
      },

      success: function (r) {
        // console.log(r);
        if (r) {
          alert("Solicitud enviada correctamente.");
          window.location.href = "../Legal/";
        } else {
          alert("Ocurrio un error.");
        }
      },
      error: function (xhr, status, error) {
        // $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    // No es necesario cambiar event.returnValue a false
    return false;
  });

  $("#btn_updt_borrador").click(function (e) {
    e.preventDefault();
    //
    var formData = new FormData($("#updt_files")[0]);
    //
    formData.append("btn_updt_borrador", true);
    // --
    $.ajax({
      type: "POST",
      url: "../Controller/Add_Solic_Legal.php",
      data: formData,
      processData: false,
      contentType: false,

      beforeSend: function () {
        // $("#loader").show();
      },

      success: function (r) {
        // console.log(r);
        if (r == 1) {
          alert("Datos actualizados.");
          window.location.href = "../Legal/";
        } else {
          alert("Ocurrio un error.");
        }
      },
      error: function (xhr, status, error) {
        // $("#loader").hide();
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    // No es necesario cambiar event.returnValue a false
    return false;
  });

  function EraseContent() {
    // Obtén referencias a los elementos relevantes
    const fileArchives = document.querySelector(".file-archives");
    const fileMessage = document.querySelector(".file-message");
    const btnDisable = document.querySelectorAll(".content-file button");

    // Borra el contenido de fileArchives
    fileArchives.innerHTML = "";

    // Actualiza la cantidad de archivos
    const cantFileMessage =
      fileArchives.querySelectorAll(".archive-item").length;

    setTimeout(() => {
      // Muestra u oculta los elementos según la cantidad de archivos
      fileMessage.style.display = cantFileMessage > 0 ? "none" : "flex";
      fileArchives.style.display = cantFileMessage > 0 ? "flex" : "none";
    }, 1500);

    // Habilita o deshabilita los botones según la cantidad de archivos
    btnDisable.forEach((element) => {
      element.disabled = cantFileMessage === 0;
    });

    // Limpia el valor del input de archivo
    const iptFile = document.querySelector(".content-file .upload");
    iptFile.value = "";
  }

  // ---------------------
  // APARTADO SUBIR DOCUMENTOS
  var buttonPu = document.querySelector(".pu");
  var buttonCl = document.querySelector(".cl");

  var inputPU_file = document.querySelector("#fls_pu");
  var inputCL_file = document.querySelector("#fls_cl");

  var uploadedFiles_PU = [];
  var uploadedFiles_CL = [];

  buttonPu.addEventListener("click", (e) => {
    inputPU_file.click();
  });

  inputPU_file.addEventListener("change", (e) => {
    files = inputPU_file.files;
    showArchives(files, "pu");
  });

  // ---------------------------------

  buttonCl.addEventListener("click", () => {
    inputCL_file.click();
  });

  inputCL_file.addEventListener("change", (e) => {
    files = inputCL_file.files;
    showArchives(files, "cl");
  });
  // ---------------------------------

  // });

  function showArchives(files, type) {
    if (files.length === undefined) {
      processDataArchives(files, type);
    } else {
      for (const file of files) {
        processDataArchives(file, type);
      }
    }
  }

  function processDataArchives(file, type) {
    const docType = file.type;
    const validExtensions = [
      "application/pdf",
      "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
      "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
      "application/vnd.openxmlformats-officedocument.presentationml.presentation",
      "text/plain",
    ];

    if (validExtensions.includes(docType)) {
      // archivo valido
      const fileReader = new FileReader();
      const id = `upld-${Math.random().toString(32).substring(5)}`;
      // const innerFiles = type === 'pu' ? document.querySelector(".archives_pu") : document.querySelector(".archives_cl");
      const archiveContainer =
        type === "pu"
          ? document.querySelector(".archives_pu")
          : document.querySelector(".archives_cl");
      fileReader.addEventListener("load", (e) => {
        // const fileUrl = fileReader.result;
        // const fileExtension = getFileExtension(file.name);
        let upldArchive = "";

        upldArchive += `
          <div id="${id}" class="upld-valo" title="${file.name}">
            <span class="drop-upld bg-danger"><i class="fa-solid fa-xmark"></i></span>
            <div class="upld-file">
              <img src="../Vista/images/document.svg" alt="">
            </div>
            <div class="upld-name">
              <span class="mak-txt">${file.name}</span>
            </div>
          </div>
        `;

        // innerFiles.innerHTML += upldArchive;
        archiveContainer.innerHTML += upldArchive;

        // Agregar el archivo al array de archivos subidos
        const uploadedArray =
          type === "pu" ? uploadedFiles_PU : uploadedFiles_CL;
        uploadedArray.push({
          id,
          name: file.name,
          type: file.type,
          size: file.size,
          lastModified: file.lastModified,
          tmp_name: fileReader.result,
        });

        cantFilesValor();

        // ELIMINAR
        const dropUpld = document.querySelectorAll(".drop-upld");
        dropUpld.forEach((dropupld) => {
          dropupld.addEventListener("click", (e) => {
            const upldValo = dropupld.closest(".upld-valo");
            if (upldValo) {
              const id = upldValo.id;
              upldValo.remove();
              removeFileFromList(id, type);
              cantFilesValor();
            }
          });
        });
      });

      fileReader.readAsDataURL(file);
    } else {
      // archivo no valido
      alert("Archivo no válido: " + file.name);
    }

    console.log(uploadedFiles_PU);
    console.log(uploadedFiles_CL);
  }

  function removeFileFromList(id, type) {
    if (type === "pu") {
      const indexToRemovePU = uploadedFiles_PU.findIndex(
        (item) => item.id === id
      );
      if (indexToRemovePU !== -1) {
        uploadedFiles_PU.splice(indexToRemovePU, 1);
      }
      console.log(uploadedFiles_PU);
    }

    if (type === "cl") {
      const indexToRemoveCL = uploadedFiles_CL.findIndex(
        (item) => item.id === id
      );

      if (indexToRemoveCL !== -1) {
        uploadedFiles_CL.splice(indexToRemoveCL, 1);
      }
      console.log(uploadedFiles_CL);
    }
  }

  function cantFilesValor() {
    const archivesPU = document.querySelector(".archives_pu");
    const upldValoPU = archivesPU.children.length;
    const archivesCL = document.querySelector(".archives_cl");
    const upldValoCL = archivesCL.children.length;

    if (upldValoPU > 0) {
      archivesPU.style.display = "inline-flex";
    } else {
      archivesPU.style.display = "none";
    }

    if (upldValoCL > 0) {
      archivesCL.style.display = "inline-flex";
    } else {
      archivesCL.style.display = "none";
    }
  }
  // APARTADO SUBIR DOCUMENTOS

  // VER FOTOS
  const verFotos = document.getElementById("verFotos_");
  const modalFotos = document.getElementById("verFotos");
  const modalContentFotos = modalFotos.querySelector(".showPictures");

  verFotos.addEventListener("click", () => {
    const pictures = document.getElementById("fileValorArchives");

    // Clona los elementos y elimina la etiqueta <span> de los clones
    const clonedPictures = removeDropPictures(pictures);

    modalContentFotos.innerHTML = ""; // Limpia el contenido actual
    modalContentFotos.appendChild(clonedPictures);

    // Llama a la función que actualiza la visibilidad de los archivos (si es necesario)
    cantFilesValor();
  });
  // VER FOTOS

  // VER DOCUMENTOS
  const verDocs = document.getElementById("verDocs_");
  const modal = document.getElementById("verDocs");
  const modalContentDocuments = modal.querySelector(".showDocuments");
  // --
  const PU_docs = modalContentDocuments.querySelector(".PU_docs");
  const CL_docs = modalContentDocuments.querySelector(".CL_docs");

  // console.log(PU_docs);
  // console.log(CL_docs);

  verDocs.addEventListener("click", () => {
    const docsPu = document.querySelector(".archives_pu");
    const docsCl = document.querySelector(".archives_cl");

    // Clona los elementos y elimina la etiqueta <span> de los clones
    const clonedDocsPu = removeDropDocs(docsPu);
    const clonedDocsCl = removeDropDocs(docsCl);
    // ----
    PU_docs.appendChild(clonedDocsPu);
    CL_docs.appendChild(clonedDocsCl);

    modalContentDocuments.innerHTML = ""; // Limpia el contenido actual
    modalContentDocuments.appendChild(PU_docs);
    modalContentDocuments.appendChild(CL_docs);
    // ----

    // Llama a la función que actualiza la visibilidad de los archivos (si es necesario)
    cantFilesValor();
  });

  function removeDropDocs(element) {
    const clonedElement = element.cloneNode(true);
    const modalElements = clonedElement.querySelectorAll(".upld-valo");

    modalElements.forEach((element) => {
      const spanElement = element.querySelector(".drop-upld");
      if (spanElement) {
        spanElement.remove();
      }
    });

    return clonedElement;
  }

  function removeDropPictures(element) {
    const clonedElement = element.cloneNode(true);
    const modalElements = clonedElement.querySelectorAll(".file-item");

    // Elimina solo el primer elemento clonado
    if (modalElements.length > 0) {
      const firstClonedElement = modalElements[0];
      firstClonedElement.remove();
    }

    modalElements.forEach((element) => {
      const clearElement = element.querySelector(".btn-clear");
      if (clearElement) {
        clearElement.remove();
      }
    });

    return clonedElement;
  }
  // VER DOCUMENTOS

  // DRAG AND DROP FILES VALORIZACION
  var dragValo = document.querySelector(".up-archive");
  var inputBox = dragValo.querySelector("#btnFile");
  var inputDragValo = dragValo.querySelector("#inpt-file-valo");
  var texto = dragValo.querySelector(".item-box");

  var uploadedPictures = [];

  inputBox.addEventListener("click", (e) => {
    inputDragValo.click();
  });

  inputDragValo.addEventListener("change", (e) => {
    files = this.files;
    files = inputDragValo.files;
    showValoFiles(files);
  });

  dragValo.addEventListener("dragover", (e) => {
    e.preventDefault();
    texto.textContent = "Soltar Archivos";
  });

  dragValo.addEventListener("dragleave", (e) => {
    e.preventDefault();
    texto.textContent = "Agregar Archivos";
  });

  dragValo.addEventListener("drop", (e) => {
    e.preventDefault();
    files = e.dataTransfer.files;
    inputDragValo.files = files;
    showValoFiles(files);
    texto.textContent = "Agregar Archivos";
  });

  function showValoFiles(files) {
    const html_Val = document.querySelector("#fileValorArchives");

    for (const file of files) {
      processValoFile(file, html_Val);
    }
  }

  function processValoFile(file, targetElement) {
    const docType = file.type;
    const validExtensions = ["image/jpeg", "image/jpg", "image/png"];

    if (validExtensions.includes(docType)) {
      // archivo valido
      const fileReader = new FileReader();
      const id = `file-${Math.random().toString(32).substring(7)}`;

      fileReader.addEventListener("load", (e) => {
        const fileUrl = fileReader.result;

        const newFileItem = document.createElement("div");
        newFileItem.className = "file-item";
        newFileItem.id = id;

        const imgElement = document.createElement("img");
        imgElement.className = "file-img";
        imgElement.src = fileUrl;
        imgElement.alt = file.name;

        const archiveDiv = document.createElement("div");
        archiveDiv.className = "archive";

        const btnClearDiv = document.createElement("div");
        btnClearDiv.className = "btn-clear";
        const deleteImg = document.createElement("img");
        deleteImg.src = "../Vista/images/delete-filled-svgrepo-com 3.svg";
        deleteImg.alt = "";

        btnClearDiv.appendChild(deleteImg);
        archiveDiv.appendChild(btnClearDiv);

        newFileItem.appendChild(imgElement);
        newFileItem.appendChild(archiveDiv);

        targetElement.appendChild(newFileItem);

        // Agregar el archivo al array de archivos subidos
        uploadedPictures.push({
          id,
          name: file.name,
          type: file.type,
          size: file.size,
          lastModified: file.lastModified,
          tmp_name: fileReader.result,
        });

        const dropPict = document.querySelectorAll(".btn-clear");
        dropPict.forEach((droppict) => {
          droppict.addEventListener("click", (e) => {
            // let Object = document.querySelectorAll(".file-item:not(:first-child)");
            // Object.forEach(element => {
            //   element.addEventListener("click", () => {
            //     element.remove();
            //     removePictureFromList(id);
            //     // inputDragValo.value = '';
            //   })
            // });
            const upldValoPict = droppict.closest(".file-item");
            if (upldValoPict) {
              const id = upldValoPict.id;
              upldValoPict.remove();
              removePictureFromList(id);
            }
          });
        });
      });

      fileReader.readAsDataURL(file);
    } else {
      // archivo no valido
      alert("Archivo no válido: " + file.name);
    }
    console.log(uploadedPictures);
  }

  function removePictureFromList(id) {
    const indexToRemove = uploadedPictures.findIndex((item) => item.id === id);
    if (indexToRemove !== -1) {
      uploadedPictures.splice(indexToRemove, 1);
      console.log(uploadedPictures);
    }
  }
  // DRAG AND DROP FILES VALORIZACION

  //--------------------------------------------EN USO-------------------------------------------------------------------//
  //--------------------------------------------EN USO-------------------------------------------------------------------//
  //--------------------------------------------EN USO-------------------------------------------------------------------//

  //************************************************************************************************************************************//

  //--------------------------------------------FUERA DE USO-------------------------------------------------------------------//
  //--------------------------------------------FUERA DE USO-------------------------------------------------------------------//
  //--------------------------------------------FUERA DE USO-------------------------------------------------------------------//

  /*function setBotonPresionado(boton) {
    document.getElementById("botonPresionado").value = boton;
  }*/

  /*$("#btnValo_add").on("click", function (e) {
    e.preventDefault();
    var botonPresionado = $(this).data("accion");
    var data = $("#form_valor").serialize();
    data += "&botonPresionado=" + botonPresionado;
    $.ajax({
      type: "POST",
      url: "../Controller/Add_Valorizacion.php",
      data: data,
      success: function (response) {
        console.log(response);
        // Realizar acciones adicionales con la respuesta del servidor
        if (r == 1) {
          alert("Agregado correctamente");
          event.returnValue = false;
          window.location.href = "valorizacion.php";
        } else {
          alert(
            "Error al registrar, Verifique que los campos esten correctamente completos."
          );
          // console.log(r);
          console.log(data);
        }
      },
      error: function (xhr, status, error) {},
    }).done( function (data) {
      $("#salida").append(data);
      $("#pass_").val("");
    } );
  });*/
  //--------------------------------------------FUERA DE USO-------------------------------------------------------------------//
  //--------------------------------------------FUERA DE USO-------------------------------------------------------------------//
  //--------------------------------------------FUERA DE USO-------------------------------------------------------------------//
});
