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
    formData.append('uploadedFiles_PU', JSON.stringify(uploadedFiles_PU));
    formData.append('uploadedFiles_CL', JSON.stringify(uploadedFiles_CL));
    formData.append('uploadedPictures', JSON.stringify(uploadedPictures));
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
            console.log(r);
            /*const mensaje = JSON.stringify({ tipo: 'nuevo_registro', mensaje: 'Nuevo registro insertado' });
            socket.send(mensaje);*/
            // No es necesario cambiar event.returnValue a false
            window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            // console.log(r);
            // console.log(data);
          }
          // console.log(r);
          // console.log(data);
        }, 900);
      },
      error: function (xhr, status, error) {
        $("#loader").hide()
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

    formData.append('uploadedFiles_PU', JSON.stringify(uploadedFiles_PU));
    formData.append('uploadedFiles_CL', JSON.stringify(uploadedFiles_CL));
    formData.append('uploadedPictures', JSON.stringify(uploadedPictures));

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
            console.log(r);
            //event.returnValue = false;
            window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            console.log(r);
            //console.log(formData);
          }
        }, 900);
      },
      error: function (xhr, status, error) {
        $("#loader").hide()
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

    formData.append('uploadedFiles_PU', JSON.stringify(uploadedFiles_PU));
    formData.append('uploadedFiles_CL', JSON.stringify(uploadedFiles_CL));
    formData.append('uploadedPictures', JSON.stringify(uploadedPictures));


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
            console.log(r);
            //event.returnValue = false;
            window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            console.log(r);
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

    formData.append('uploadedFiles_PU', JSON.stringify(uploadedFiles_PU));
    formData.append('uploadedFiles_CL', JSON.stringify(uploadedFiles_CL));
    formData.append('uploadedPictures', JSON.stringify(uploadedPictures));

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
            console.log(r);
            //event.returnValue = false;
            window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            console.log(r);
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

    formData.append('uploadedFiles_PU', JSON.stringify(uploadedFiles_PU));
    formData.append('uploadedFiles_CL', JSON.stringify(uploadedFiles_CL));
    formData.append('uploadedPictures', JSON.stringify(uploadedPictures));

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
            console.log(r);
            //event.returnValue = false;
            window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            console.log(r);
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

    formData.append('uploadedFiles_PU', JSON.stringify(uploadedFiles_PU));
    formData.append('uploadedFiles_CL', JSON.stringify(uploadedFiles_CL));
    formData.append('uploadedPictures', JSON.stringify(uploadedPictures));

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
            console.log(r);
            //event.returnValue = false;
            window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            console.log(r);
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

    formData.append('uploadedFiles_PU', JSON.stringify(uploadedFiles_PU));
    formData.append('uploadedFiles_CL', JSON.stringify(uploadedFiles_CL));
    formData.append('uploadedPictures', JSON.stringify(uploadedPictures));


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
            console.log(r);
            //event.returnValue = false;
            window.location.href = "../Valorizacion/";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            console.log(r);
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



  $("#btn_save_valo_file").click(function (e) {
    e.preventDefault();

    var formData = new FormData($("#adding_valo_file")[0]);

    $.ajax({
      type: "POST",
      url: "../Controller/upload_doc_valorizacion.php",
      data: formData,
      processData: false,
      contentType: false,

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
        if (response === 'empty_fields') {
          $("#message").text("Please fill in all fields.");

        } else if (response === 'incorrect_auth') {

          $("#message").text("Incorrect authentication. Please try again.");

        } else if (response === 'success') {

          window.location.href = 'dashboard.php';
        } else {
          $("#message").text("Unknown error while logging in.");
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
      }
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
               <span class="drop-item"><i class="fa-solid fa-xmark"></i></span>
               `;

          switch (fileExtension) {
            case "jpg":
            case "jpeg":
            case "png":
            case "gif":
              FaceArchive += `<img class="file-icon" src="${fileUrl}" alt="${file.name}">`;
              break;
            case "pdf":
              FaceArchive += `<div><i class="file-icon fa-solid fa-file-pdf"></i></div>`;
              break;
            case "doc":
            case "docx":
              FaceArchive += `<div><i class="file-icon fa-regular fa-file-word"></i></div>`;
              break;
            case "xls":
            case "xlsx":
              FaceArchive += `<div><i class="file-icon fa-solid fa-file-excel"></i></div>`;
              break;
            // Agregar más casos para otros tipos de archivos
            default:
              FaceArchive += `<div><i class="file-icon fa-regular fa-file"></i></div>`;
          }
          FaceArchive += `
               <div class="archive">
                 <span>${file.name}</span>
               </div>
             </div>
             `;

          /////////////
          const html = element.querySelectorAll(".file-archives");

          html.forEach((element) => {
            element.innerHTML += FaceArchive;

            // ACÁ LLAMAR FUNCTION
            contTagFiles();

            const dropItem = document.querySelectorAll(".drop-item");
            dropItem.forEach((dropItem) => {
              dropItem.addEventListener("click", (e) => {
                let Object = document.querySelectorAll(".archive-item");
                Object.forEach((element) => {
                  element.addEventListener("click", (e) => {
                    element.remove();
                    contTagFiles();
                  });
                });
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
    }

    function contTagFiles() {
      const fileMessage = element.querySelector(".file-message");
      const fileArchives = element.querySelector(".file-archives");
      var cantFileMessage = element.querySelectorAll(".archive-item").length;
      var btnDisable = element.querySelectorAll("button");



      if (cantFileMessage > 0) {
        fileMessage.style.display = "none";
        fileArchives.style.display = "grid";
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
      }


    }

    function getFileExtension(filename) {
      return filename.slice(((filename.lastIndexOf(".") - 1) >>> 0) + 2);
    }



  });
  // DRAG AND DROP FILES


  // APARTADO SUBIR DOCUMENTOS  
  var buttonPu = document.querySelector(".pu");
  var buttonCl = document.querySelector(".cl");

  var inputPU_file = document.querySelector("#fls_pu");
  var inputCL_file = document.querySelector("#fls_cl");


  var uploadedFiles_PU = [];
  var uploadedFiles_CL = [];
  var uploadedArray = [];

  buttonPu.addEventListener("click", (e) => {
    inputPU_file.click();
  });

  inputPU_file.addEventListener("change", (e) => {
    files = inputPU_file.files;
    showArchives(files, "pu")
  });

  // ---------------------------------

  buttonCl.addEventListener("click", () => {
    inputCL_file.click();
  });

  inputCL_file.addEventListener("change", (e) => {
    files = inputCL_file.files;
    showArchives(files, "cl")
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
      const archiveContainer = type === 'pu' ? document.querySelector(".archives_pu") : document.querySelector(".archives_cl");
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
        const uploadedArray = type === 'pu' ? uploadedFiles_PU : uploadedFiles_CL;
        uploadedArray.push({ id, name: file.name, type: file.type, size: file.size, lastModified: file.lastModified, tmp_name: fileReader.result });

        cantFilesValor();


        // ELIMINAR
        const dropUpld = document.querySelectorAll(".drop-upld");
        dropUpld.forEach(dropupld => {
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
      const indexToRemovePU = uploadedFiles_PU.findIndex(item => item.id === id);
      if (indexToRemovePU !== -1) {
        uploadedFiles_PU.splice(indexToRemovePU, 1);
      }
      console.log(uploadedFiles_PU);
    }


    if (type === "cl") {
      const indexToRemoveCL = uploadedFiles_CL.findIndex(item => item.id === id);

      if (indexToRemoveCL !== -1) {
        uploadedFiles_CL.splice(indexToRemoveCL, 1);
      }
      console.log(uploadedFiles_CL);
    }

  };



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

  };
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

    modalElements.forEach(element => {
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

    modalElements.forEach(element => {
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
  })

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
    const validExtensions = [
      "image/jpeg",
      "image/jpg",
      "image/png",
    ];

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
        uploadedPictures.push({ id, name: file.name, type: file.type, size: file.size, lastModified: file.lastModified, tmp_name: fileReader.result });


        const dropPict = document.querySelectorAll(".btn-clear");
        dropPict.forEach(droppict => {
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
          })
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
    const indexToRemove = uploadedPictures.findIndex(item => item.id === id);
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
  /*
  $('#btnValo_casa').click(function(){
      var _data_casa=$('#form_valor').serialize();
      $.ajax({
          type:"POST",
          url:"../Controller/Add_valorizacion_casa.php",
          data: _data_casa,
          success:function(r){
              if (r==1) {
                  alert("Solicitud enviada correctamente.");
              }else{
                  alert("Error en el servidor.");
              }
          }
      });
      return false;
  });
*/

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
          console.log(r);
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
