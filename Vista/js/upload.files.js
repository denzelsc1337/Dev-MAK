document.addEventListener("DOMContentLoaded", function () {
  var arrayFile = [];
  var tableFile = document.querySelector("#upTable");
  var tableContent = tableFile.querySelector(".table-file-archive");
  var rowContent = tableFile.querySelectorAll(".tr-list-upfile");
  var inputFile = document.querySelector("#table-inputFile");

  function typeValidation(type) {
    const validExtensions = [
      "image/jpeg",
      "image/jpg",
      "image/png",
      "application/pdf",
      "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
    ];
    return validExtensions.includes(type);
  }

  function getExtension(mimeType) {
    const mimeTypes = {
      "image/jpeg": "jpeg",
      "image/jpg": "jpg",
      "image/png": "png",
      "application/pdf": "pdf",
      "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
        "docx",
      // Puedes agregar más tipos MIME si es necesario
    };
    return mimeTypes[mimeType] || mimeType; // Devuelve la extensión o el tipo MIME si no está en la lista
  }
  function uploadFile(target, file) {
    const reader = new FileReader();

    reader.onload = (e) => {
      arrayFile.push({
        // id: id,
        attr: target,
        file: file, // Almacenar el archivo completo aquí
      });

      console.log(arrayFile);
      updateTableRow(tableContent, target, file);
    };
    reader.readAsDataURL(file);
  }

  function updateTableRow(tableContent, target, file) {
    // Encuentra la fila con el atributo data-row-target que coincide con el valor de target
    let row = tableContent.querySelector(
      `.tr-list-upfile[data-row-target="${target}"]`
    );
    if (row) {
      let rowContent = row.querySelectorAll("td");

      // Eliminar todas las clases de cada td
      rowContent.forEach((td) => {
        td.className = "";
      });

      // Cambiar el icono plus por input checkbox
      rowContent[0].innerHTML = `<input type="checkbox" id="${target}">`;
      // Actualizar el contenido de cada td
      rowContent[1].innerHTML = `<span>${file.name}</span>`;
      rowContent[2].textContent = getExtension(file.type);
      rowContent[3].textContent = `${Math.round(file.size / 1024)} KB`;
    } else {
      console.log(
        `No se encontró ninguna fila con data-row-target="${target}"`
      );
    }
  }

  rowContent.forEach((element) => {
    const firstTD = element.querySelector("td:first-child");
    const btnRow = firstTD.querySelector("label");
    btnRow.addEventListener("click", () => {
      currentRowTarget = element.getAttribute("data-row-target");
      //   console.log(currentRowTarget);
    });
  });

  inputFile.addEventListener("change", () => {
    [...inputFile.files].forEach((file) => {
      // Lógica de validación de tipo de archivo
      if (typeValidation(file.type)) {
        // console.log(file);
        uploadFile(currentRowTarget, file); // Llama a tu función de subida de archivos
      } else {
        console.log("archivo no soportado.");
      }
    });
    // inputFile.value = ""; // Limpia el valor del input file
  });

  $(document).ready(function () {
    $("#saveBtn").click(function (e) {
      e.preventDefault();

      // Crear un nuevo FormData
      var formData = new FormData();

      // Agregar los archivos desde el array `arrayFile` al FormData
      arrayFile.forEach((item, index) => {
        formData.append("table-inputFile[]", item.file); // Agrega cada archivo al FormData
      });

      // Serializar el array `arrayFile` a JSON y agregarlo al FormData
      formData.append("arrayFile", JSON.stringify(arrayFile));

      // Enviar el formulario con AJAX
      $.ajax({
        type: "POST",
        url: "../views/add.propertyTable.php",
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

  //   --------------------------------
  //   --------------------------------

  //   var upTable = document.querySelector("#upTable");
  //   var tableContent = upTable.querySelector(".table-file-archive");
  //   var rowContent = tableContent.querySelectorAll(".tr-list-upfile");
  //   var inputFile = document.querySelector("#table-inputFile");
  //   var arrayFile = [];
  //   let currentRowTarget = "";
  //   function typeValidation(type) {
  //     const validExtensions = [
  //       "image/jpeg",
  //       "image/jpg",
  //       "image/png",
  //       "application/pdf",
  //       "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
  //     ];
  //     return validExtensions.includes(type);
  //   }
  //   // Agregar eventos de clic a cada botón de las filas
  //   rowContent.forEach((element) => {
  //     const firstTD = element.querySelector("td:first-child");
  //     const btnRow = firstTD.querySelector("label");
  //     btnRow.addEventListener("click", () => {
  //       currentRowTarget = element.getAttribute("data-row-target");
  //       // console.log(currentRowTarget);
  //     });
  //   });
  //   // Evento para manejar el cambio en el input file
  //   inputFile.addEventListener("change", () => {
  //     [...inputFile.files].forEach((file) => {
  //       // Lógica de validación de tipo de archivo
  //       if (typeValidation(file.type)) {
  //         uploadFile(currentRowTarget, file); // Llama a tu función de subida de archivos
  //       } else {
  //         console.log("archivo no soportado.");
  //       }
  //     });
  //     inputFile.value = ""; // Limpia el valor del input file
  //   });
  //   let form = document.querySelector("#form_prop");
  //   let formData = new FormData(form);
  //   // Función para subir el archivo (añade tu lógica aquí)
  //   function uploadFile(target, file) {
  //     // Tu lógica para subir el archivo
  //     let xhr = new XMLHttpRequest();
  //     xhr.open("POST", "../Controller/Add_propiedades.php");
  //     // Mostrar área de progreso
  //     let row = tableContent.querySelector(
  //       `.tr-list-upfile[data-row-target="${target}"]`
  //     );
  //     // // let progressArea = row.querySelector(".progress-area");
  //     // let fileDetailsTD = row.querySelectorAll("td")[1];
  //     // Ocultar el td y mostrar el área de progreso
  //     // // progressArea.style.display = "block";
  //     // fileDetailsTD.style.display = "none";
  //     xhr.upload.addEventListener("progress", ({ loaded, total }) => {
  //       let fileLoaded = Math.floor((loaded / total) * 100);
  //       let fileTotal = Math.floor(total / 1000);
  //       let progressHTML = `
  //                       <div class="progress-area">
  //                         <div class="content">
  //                           <div class="details">
  //                             <span class="name"><${file.name}/span>
  //                             <span class="percent">${fileLoaded}%</span>
  //                           </div>
  //                           <div class="progress-bar">
  //                             <div class="progress" style="width: ${fileLoaded}%"></div>
  //                           </div>
  //                         </div>
  //                       </div>`;
  //       fileDetailsTD.innerHTML = progressHTML;
  //     });
  //     // updateTableRow(tableContent, target, file);
  //     xhr.addEventListener("load", () => {
  //       if (xhr.status === 200) {
  //         // Ocultar área de progreso y mostrar el td
  //         // progressArea.style.display = "none";
  //         // fileDetailsTD.style.display = "none";
  //         // arrayFile.push(file);
  //         arrayFile.push({
  //           name: file.name,
  //           type: file.type,
  //           size: file.size,
  //           lastModified: file.lastModified,
  //         });
  //         console.log(arrayFile);
  //         // Actualizar la fila de la tabla con los datos del archivo
  //         updateTableRow(tableContent, target, file);
  //       } else {
  //         console.error("Error al subir el archivo");
  //       }
  //     });
  //     xhr.send(arrayFile);
  //   }
  //   function getExtension(mimeType) {
  //     const mimeTypes = {
  //       "image/jpeg": "jpeg",
  //       "image/jpg": "jpg",
  //       "image/png": "png",
  //       "application/pdf": "pdf",
  //       "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
  //         "docx",
  //       // Puedes agregar más tipos MIME si es necesario
  //     };
  //     return mimeTypes[mimeType] || mimeType; // Devuelve la extensión o el tipo MIME si no está en la lista
  //   }
  //   function updateTableRow(tableContent, target, file) {
  //     // Encuentra la fila con el atributo data-row-target que coincide con el valor de target
  //     let row = tableContent.querySelector(
  //       `.tr-list-upfile[data-row-target="${target}"]`
  //     );
  //     if (row) {
  //       let rowContent = row.querySelectorAll("td");
  //       // Eliminar todas las clases de cada td
  //       rowContent.forEach((td) => {
  //         td.className = "";
  //       });
  //       function obtenerNombreArchivo(fileName) {
  //         var indicePunto = fileName.lastIndexOf(".");
  //         return fileName.substring(0, indicePunto);
  //       }
  //       // Cambiar el icono plus por input checkbox
  //       rowContent[0].innerHTML = `<input type="checkbox" id="${target}">`;
  //       // Actualizar el contenido de cada td
  //       //   rowContent[1].innerHTML = `<span>${file.name}</span>`;
  //       rowContent[1].innerHTML = `<span>${obtenerNombreArchivo(
  //         file.name
  //       )}</span>`;
  //       rowContent[2].textContent = getExtension(file.type);
  //       rowContent[3].textContent = `${Math.round(file.size / 1024)} KB`;
  //     } else {
  //       console.log(
  //         `No se encontró ninguna fila con data-row-target="${target}"`
  //       );
  //     }
  //   }
  //   $(document).ready(function () {
  //     $("#saveBtn").click(function (e) {
  //       e.preventDefault();
  //       var formData = new FormData();
  //       arrayFile.forEach((item, index) => {
  //         formData.append("table-inputFile[]", item.file); // Agrega cada archivo al FormData
  //       });
  //       $.ajax({
  //         type: "POST",
  //         url: "../views/add.propertyTable.php",
  //         data: formData,
  //         processData: false,
  //         contentType: false,
  //         beforeSend: function () {
  //           console.log("Enviando...");
  //         },
  //         success: function (r) {
  //           console.log("Éxito:", r);
  //         },
  //         error: function (xhr, status, error) {
  //           console.log("Error:", error);
  //         },
  //       });
  //     });
  //   });
});
