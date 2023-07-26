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
    var data = $("#form_valor").serialize();
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_casa.php",
      data: data,
      success: function (r) {
        if (r == 1) {
          alert("Solicitud enviada correctamente.");
          console.log(r);
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
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
    return false;
  });

  $("#btnValo_depa").click(function (e) {
    e.preventDefault();
    var data = $("#form_valor").serialize();
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_depa.php",
      data: data,
      success: function (r) {
        if (r == 1) {
          alert("Solicitud enviada correctamente.");
          console.log(r);
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
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
    return false;
  });

  $("#btnValo_terren").click(function (e) {
    e.preventDefault();
    var data = $("#form_valor").serialize();
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_terreno.php",
      data: data,
      success: function (r) {
        if (r == 1) {
          alert("Solicitud enviada correctamente.");
          console.log(r);
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
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
    return false;
  });

  $("#btnValo_ofi").click(function (e) {
    e.preventDefault();
    var data = $("#form_valor").serialize();
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_oficina.php",
      data: data,
      success: function (r) {
        if (r == 1) {
          alert("Solicitud enviada correctamente.");
          console.log(r);
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
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
    return false;
  });

  $("#btnValo_lc_ind").click(function (e) {
    e.preventDefault();
    var data = $("#form_valor").serialize();
    $.ajax({
      type: "POST",
      url: "../Controller/Add_valorizacion_localIndustrial.php",
      data: data,
      success: function (r) {
        if (r == 1) {
          alert("Solicitud enviada correctamente.");
          console.log(r);
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
            console.log(response);

            listaZonas.empty();

            if (zonas.length > 1) {
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
  var dragArea = document.querySelector(".content-file");
  var dragText = dragArea.querySelector("span");
  var buttonFile = dragArea.querySelector("#buttonFile");
  var inputFile = dragArea.querySelector("#upload");
  let files;

  buttonFile.addEventListener("click", (e) => {
    inputFile.click();
  });

  inputFile.addEventListener("change", (e) => {
    files = inputFile.files;
    showFiles(files);
  });

  dragArea.addEventListener("dragover", (e) => {
    e.preventDefault();
    dragText.textContent = "Suelta los archivos aquí para subirlos.";
  });

  dragArea.addEventListener("dragleave", (e) => {
    e.preventDefault();
    dragText.textContent = "Arrastre los archivos aquí para subirlos.";
  });

  dragArea.addEventListener("drop", (e) => {
    e.preventDefault();
    files = e.dataTransfer.files;
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
    ];

    if (validExtensions.includes(docType)) {
      // archivo valido
      const fileReader = new FileReader();
      const id = `file-${Math.random().toString(32).substring(7)}`;

      fileReader.addEventListener("load", (e) => {
        const fileUrl = fileReader.result;
        const image = `
          <div id="${id}" class="">
            <img src="${fileUrl}" alt="${file.name}" width="50">
            <div>
              <span>${file.name}</span>
            </div>
          </div>
          `;

        const html = document.querySelector("#preview");
        html.innerHTML += image;
      });
      fileReader.readAsDataURL(file);
      uploadFile(file, id);
    } else {
      // archivo no valido
      alert("nel");
    }
  }

  async function uploadFile(file, id) {
    const formData = new FormData();
    formData.append("file", file);

    try {
      const response = await fetch("http://localhost:3000/upload", {
        method: "POST",
        body: formData,
      });

      const responseText = await response.text();

      document.querySelector(`${id}`).innerHTML = `<span>Uploaded</span>`;
    } catch (error) {
      document.querySelector(`${id}`).innerHTML = `<span>NHE</span>`;
    }
  }
  // DRAG AND DROP FILES

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

  // DROPDOWN
  const dropDown = document.querySelector(".dropdown");

  dropDown.addEventListener("click", () => {
    const filter = document.querySelector(".filter-drop");
    const table = document.querySelector(".table");
    const optnFilter = document.querySelector(".optn-filter");
    const listGroupItem = optnFilter.querySelectorAll(".list-group-item");
    console.log(optnFilter);
    console.log(listGroupItem);

    // optnFilter.forEach((element) => {
    //   let
    //   console.log(element);
    // });

    if (table.style.width === "100%") {
      let items = listGroupItem.length + 1;
      let dropHeight = items * "49.33" + "40";

      console.log(dropHeight);

      // filter.style.height = "100%";
      table.style.width = "83%";
      // filter.style.height = "";
      // filter.style.minHeight = "100%";
      filter.style.height = dropHeight + "px";

      // dropDown.style.minHeight = "100%";
    } else {
      table.style.width = "100%";
      filter.style.height = "40px";

      // filter.style.minHeight = "";
    }
  });

  dropDown.addEventListener("click", function name(params) {});
  // DROPDOWN
});
