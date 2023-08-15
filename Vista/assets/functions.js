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

  $("#btnValo_casa").click(function (e) {
    e.preventDefault();
    //var data = $("#form_valor").serialize();
    var formData = new FormData($("#form_valor")[0]);
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_casa.php",
      data: formData,
      processData: false,
      contentType: false,
      success: function (r) {
        if (r) {
          //alert("Solicitud enviada correctamente.");
          console.log(r);
          event.returnValue = false;
          window.location.href = "../Valorizacion/";
        } else {
          alert(
            "Error al registrar, Verifique que los campos esten correctamente completos."
          );
          console.log(r);
          console.log(data);
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    return false;
  });

  $("#btnValo_depa").click(function (e) {
    e.preventDefault();
    //var data = $("#form_valor").serialize();
    var formData = new FormData($("#form_valor")[0]);
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_depa.php",
      data: formData,
      processData: false,
      contentType: false,
      success: function (r) {
        if (r) {
          //alert("Solicitud enviada correctamente.");
          console.log(r);
          event.returnValue = false;
          window.location.href = "../Valorizacion/";
        } else {
          alert(
            "Error al registrar, Verifique que los campos esten correctamente completos."
          );
          console.log(r);
          console.log(formData);
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
        console.log(xhr.responseText);
      },
    });
    return false;
  });

  $("#btnValo_terren").click(function (e) {
    e.preventDefault();
    //var data = $("#form_valor").serialize();
    var formData = new FormData($("#form_valor")[0]);
    //var id_zoni_t = 20;
    //console.log(id_zoni_t);
    console.log(formData);
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_terreno.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        if (r) {
          //alert("Solicitud enviada correctamente.");
          console.log(r);
          event.returnValue = false;
          window.location.href = "../Valorizacion/";
        } else {
          alert(
            "Error al registrar, Verifique que los campos esten correctamente completos."
          );
          console.log(r);
          console.log(data);
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
    return false;
  });

  $("#btnValo_ofi").click(function (e) {
    e.preventDefault();
    //var data = $("#form_valor").serialize();
    var formData = new FormData($("#form_valor")[0]);
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_oficina.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        if (r) {
          //alert("Solicitud enviada correctamente.");
          console.log(r);
          event.returnValue = false;
          window.location.href = "../Valorizacion/";
        } else {
          alert(
            "Error al registrar, Verifique que los campos esten correctamente completos."
          );
          console.log(r);
          console.log(data);
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
    return false;
  });

  $("#btnValo_lc_ex").click(function (e) {
    e.preventDefault();
    //var data = $("#form_valor").serialize();
    var formData = new FormData($("#form_valor")[0]);
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_localComercial.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        if (r) {
          //alert("Solicitud enviada correctamente.");
          console.log(r);
          event.returnValue = false;
          window.location.href = "../Valorizacion/";
        } else {
          alert(
            "Error al registrar, Verifique que los campos esten correctamente completos."
          );
          console.log(r);
          console.log(data);
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
    return false;
  });

  $("#btnValo_lc_com").click(function (e) {
    e.preventDefault();
    //var data = $("#form_valor").serialize();
    var formData = new FormData($("#form_valor")[0]);
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_localComercial_Comun.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        if (r) {
          //alert("Solicitud enviada correctamente.");
          console.log(r);
          event.returnValue = false;
          window.location.href = "../Valorizacion/";
        } else {
          alert(
            "Error al registrar, Verifique que los campos esten correctamente completos."
          );
          console.log(r);
          console.log(data);
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
    return false;
  });

  


  $("#btnValo_lc_ind").click(function (e) {
    e.preventDefault();
    //var data = $("#form_valor").serialize();
    var formData = new FormData($("#form_valor")[0]);
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_localIndustrial.php",
      data: formData,
      processData: false,
      contentType: false,

      success: function (r) {
        if (r) {
          //alert("Solicitud enviada correctamente.");
          console.log(r);
          event.returnValue = false;
          window.location.href = "../Valorizacion/";
        } else {
          alert(
            "Error al registrar, Verifique que los campos esten correctamente completos."
          );
          console.log(r);
          console.log(data);
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
    return false;
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

  // DRAG AND DROP FILES VALORIZACION
  var dragValo = document.querySelector(".up-archive");
  var inputBox = dragValo.querySelector("#btnFile");
  var inputDragValo = dragValo.querySelector("#inpt-file-valo");
  var texto = dragValo.querySelector(".item-box");

  inputBox.addEventListener("click", (e) => {
    inputDragValo.click();
  })

  dragValo.addEventListener("change", (e) => {
    files = this.files;
    files = inputDragValo.files;
    showValoFiles(files);
  });

  dragValo.addEventListener("dragover", (e) => {
    e.preventDefault();
    texto.textContent = "Soltar";
  });

  dragValo.addEventListener("dragleave", (e) => {
    e.preventDefault();
    texto.textContent = "Agregar Fotos";
  });

  dragValo.addEventListener("drop", (e) => {
    e.preventDefault();
    files = e.dataTransfer.files;
    inputDragValo.files = files;
    showValoFiles(files);
    texto.textContent = "Agregar Fotos";
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


        document.querySelectorAll(".btn-clear").forEach(btnClear => {
          btnClear.addEventListener("click", (e) => {
            let Object = document.querySelectorAll(".file-item:not(:first-child)");
            Object.forEach(element => {
              element.addEventListener("click", () => {
                element.remove();
              })
            });
          })
        });

      });





      fileReader.readAsDataURL(file);
    } else {
      // archivo no valido
      alert("Archivo no válido: " + file.name);
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
