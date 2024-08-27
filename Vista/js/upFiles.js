document.addEventListener("DOMContentLoaded", function () {
  // DRAG AND DROP FILES
  var dataDrag = [];
  var dragContentAreas = document.querySelectorAll(".file-content");

  dragContentAreas.forEach((dragContent) => {
    var inputBox = dragContent.querySelector(".up-archive.file-item");
    var iptFile = dragContent.querySelector("#inputFile");

    if (inputBox && iptFile) {
      inputBox.addEventListener("click", () => iptFile.click());

      iptFile.addEventListener("change", () => {
        [...iptFile.files].forEach((file) => {
          if (typeValidation(file.type)) {
            console.log(file);
            uploadFile(file, dragContent);
          }
        });
        iptFile.value = ""; // Clear the input file value
      });

      dragContent.addEventListener("dragover", (e) => {
        e.preventDefault();
        [...e.dataTransfer.items].forEach((item) => {
          if (typeValidation(item.type)) {
            dragContent.classList.add("drag-over-effect");
          }
        });
      });

      dragContent.addEventListener("dragleave", (e) => {
        e.preventDefault();
        dragContent.classList.remove("drag-over-effect");
      });

      dragContent.addEventListener("drop", (e) => {
        e.preventDefault();
        dragContent.classList.remove("drag-over-effect");

        if (e.dataTransfer.items) {
          [...e.dataTransfer.items].forEach((item) => {
            if (item.kind === "file") {
              const file = item.getAsFile();
              if (typeValidation(file.type)) {
                uploadFile(file, dragContent);
              }
            }
          });
        } else {
          [...e.dataTransfer.files].forEach((file) => {
            if (typeValidation(file.type)) {
              uploadFile(file, dragContent);
            }
          });
        }
      });
    }
  });

  function typeValidation(type) {
    const validExtensions = [
      "image/jpeg",
      "image/jpg",
      "image/png",
      "application/pdf",
      "application/vnd.openxmlformats-officedocument.wordprocessingml.document", // Tipo MIME para .docx
    ];
    return validExtensions.includes(type);
  }

  function uploadFile(file, dragContent) {
    dataDrag.push(dragContent);
    // console.log(dataDrag.length);
    var contenedor = dragContent.querySelector(".up-archive");

    if (dataDrag.length >= 1) {
      contenedor.classList.add("file-file");
      // tata.style.order = "2";
    }

    const reader = new FileReader();
    reader.onload = (e) => {
      const imgSrc = e.target.result;
      const id = `file-${Math.random().toString(32).substring(7)}`;
      dragContent.insertAdjacentHTML(
        "beforeend",
        `
        <div id="${id}" class="file-item">
            <img src="${imgSrc}" alt="${file.name}">
            <div class="item-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
      `
      );

      const closeButton = dragContent.querySelector(`#${id} .item-close`);
      closeButton.addEventListener("click", () => {
        const dlt = closeButton.closest(".file-item");
        if (dlt) {
          dlt.remove();
          console.log(dataDrag.length);
          if (dataDrag.length == 1) {
            contenedor.classList.remove("file-file");
          }
        }
      });
    };
    reader.readAsDataURL(file);
  }

  function upArchive(file) {
    var http = new XMLHttpRequest();
    var data = new FormData();
    data.append("file", file);
    http.onload = () => {
      // complete
    };
    http.upload.onprogress = (e) => {
      var percent_complete = (e.loaded / e.total) * 100;
      // console.log(percent_complete);
    };
    http.open("POST", "../views/sender.php", true);
    http.send(data);
  }
  // DRAG AND DROP FILES

  // UP FILES TABLE
  // var contentArea = document.querySelector(".table-file-archive");
  // var selectAllCheckbox = document.getElementById("select-all");
  // var resetSelectedButton = document.getElementById("reset-selected");

  // function bindEventsToRow(row) {
  //   var fileBtn = row.querySelector("td.cursor");
  //   var inputFile = row.querySelector("input[type='file']");
  //   var fileBtnIcon = fileBtn.querySelector("i");

  //   function handleFileBtnClick() {
  //     if (fileBtnIcon.classList.contains("fa-plus")) {
  //       inputFile.click();
  //     } else if (fileBtnIcon.classList.contains("fa-xmark")) {
  //       resetRow(row);
  //     }
  //   }

  //   function handleInputFileChange({ target }) {
  //     let file = target.files[0];
  //     if (file) {
  //       let fileName = file.name;
  //       let dataTarget = target.getAttribute("data-target");
  //       updateTableRow(row, file);
  //       uploadFile(fileName, target.id, dataTarget, target);
  //       toggleIconToCheckbox(fileBtnIcon, row);
  //     }
  //   }

  //   fileBtn.addEventListener("click", handleFileBtnClick);
  //   inputFile.addEventListener("change", handleInputFileChange);

  //   // Store the event listeners so we can remove them later if needed
  //   row._fileBtnClickHandler = handleFileBtnClick;
  //   row._inputFileChangeHandler = handleInputFileChange;
  // }

  // function updateTableRow(row, file) {
  //   let rowContent = row.querySelectorAll("td");
  //   let inputFile = row.querySelector("input[type='file']");
  //   let inputFileId = inputFile.id;
  //   let inputFileName = inputFile.name;
  //   let inputDataTarget = inputFile.getAttribute("data-target");

  //   rowContent[1].innerHTML = `<i class="fa-solid fa-xmark"></i>
  //                            <input type="file" name="${inputFileName}" id="${inputFileId}" data-target="${inputDataTarget}" hidden>`;
  //   rowContent[2].querySelector("span").textContent = file.name;
  //   rowContent[3].textContent = file.type;
  //   rowContent[4].textContent = `${Math.round(file.size / 1024)} KB`;
  // }

  // function resetRow(row) {
  //   let rowContent = row.querySelectorAll("td");
  //   let inputFile = row.querySelector("input[type='file']");
  //   let inputFileId = inputFile.id;
  //   let inputFileName = inputFile.name;
  //   let inputDataTarget = inputFile.getAttribute("data-target");

  //   rowContent[1].innerHTML = `<i class="fa-solid fa-plus"></i>
  //                            <input type="file" name="${inputFileName}" id="${inputFileId}" data-target="${inputDataTarget}" hidden>`;
  //   rowContent[2].innerHTML = `<span>TuArchivo</span>
  //                            <div class="progress-area">
  //                                <li class="row">
  //                                    <div class="content">
  //                                        <div class="details">
  //                                            <span class="name"></span>
  //                                            <span class="percent"></span>
  //                                        </div>
  //                                        <div class="progress-bar">
  //                                            <div class="progress"></div>
  //                                        </div>
  //                                    </div>
  //                                </li>
  //                            </div>`;
  //   rowContent[3].textContent = "(png, jpg, pdf)";
  //   rowContent[4].textContent = "1 KB";

  //   // Unbind the previous event listeners
  //   let fileBtn = row.querySelector("td.cursor");
  //   let newInputFile = row.querySelector("input[type='file']");

  //   fileBtn.removeEventListener("click", row._fileBtnClickHandler);
  //   inputFile.removeEventListener("change", row._inputFileChangeHandler);

  //   // Re-bind the click and change events for the reset input element
  //   bindEventsToRow(row);
  // }

  // function uploadFile(fileName, inputFileId, dataTarget, inputFileElement) {
  //   let xhr = new XMLHttpRequest();
  //   xhr.open("POST", "../Controller/Add_propiedades.php");

  //   xhr.upload.addEventListener("progress", ({ loaded, total }) => {
  //     let fileLoaded = Math.floor((loaded / total) * 100);
  //     let progressElement = inputFileElement
  //       .closest("tr")
  //       .querySelector(".progress-bar .progress");
  //     progressElement.style.width = fileLoaded + "%";
  //     progressElement.textContent = fileLoaded + "%";
  //   });

  //   let form = document.querySelector("#form_prop");
  //   let formData = new FormData(form);
  //   formData.append("dni_cli", document.querySelector("#dni_cli").value);
  //   formData.append("inputFileId", inputFileId);
  //   formData.append("dataTarget", dataTarget);

  //   xhr.onreadystatechange = function () {
  //     if (xhr.readyState == 4 && xhr.status == 200) {
  //       console.log("Response from server: ", xhr.responseText);
  //     } else if (xhr.readyState == 4) {
  //       console.error("Error: ", xhr.status, xhr.statusText);
  //     }
  //   };

  //   xhr.send(formData);

  //   // $.ajax({
  //   //   type: "POST",
  //   //   url: "../views/add.propertyTable.php",
  //   //   data: formData,
  //   //   processData: false,
  //   //   contentType: false,
  //   //   beforeSend: function () {
  //   //     console.log("Enviando...");
  //   //   },
  //   //   success: function (r) {
  //   //     console.log("Éxito:", r);
  //   //   },
  //   //   error: function (xhr, status, error) {
  //   //     console.log("Error:", error);
  //   //   },
  //   // });
  // }
  // var fileRows = contentArea.querySelectorAll(".tr-list-upfile");
  // fileRows.forEach((row) => {
  //   bindEventsToRow(row);
  // });

  // selectAllCheckbox.addEventListener("change", function () {
  //   let checkboxes = contentArea.querySelectorAll(".select-file");
  //   checkboxes.forEach((checkbox) => {
  //     checkbox.checked = selectAllCheckbox.checked;
  //   });
  // });

  // resetSelectedButton.addEventListener("click", function () {
  //   let checkboxes = contentArea.querySelectorAll(".select-file:checked");
  //   checkboxes.forEach((checkbox) => {
  //     let row = checkbox.closest("tr");
  //     resetRow(row);
  //   });
  // });
  // UP FILES TABLE

  var upTable = document.querySelector("#upTable");
  var tableContent = upTable.querySelector(".table-file-archive");
  var rowContent = tableContent.querySelectorAll(".tr-list-upfile");

  var inputFile = document.querySelector("#table-inputFile");

  var arrayFile = [];

  let currentRowTarget = "";

  // Agregar eventos de clic a cada botón de las filas
  rowContent.forEach((element) => {
    const firstTD = element.querySelector("td:first-child");
    const btnRow = firstTD.querySelector("label");

    btnRow.addEventListener("click", () => {
      currentRowTarget = element.getAttribute("data-row-target");
      // console.log(currentRowTarget);
    });
  });

  // Evento para manejar el cambio en el input file
  inputFile.addEventListener("change", () => {
    [...inputFile.files].forEach((file) => {
      // Lógica de validación de tipo de archivo
      if (typeValidation(file.type)) {
        uploadFile(currentRowTarget, file); // Llama a tu función de subida de archivos
      } else {
        console.log("archivo no soportado.");
      }
    });
    inputFile.value = ""; // Limpia el valor del input file
  });

  // let form = document.querySelector("#form_prop");
  // let formData = new FormData(form);

  // Función para subir el archivo (añade tu lógica aquí)
  function uploadFile(target, file) {
    // Tu lógica para subir el archivo

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../Controller/Add_propiedades.php");

    // Mostrar área de progreso
    let row = tableContent.querySelector(
      `.tr-list-upfile[data-row-target="${target}"]`
    );
    let progressArea = row.querySelector(".progress-area");
    let fileDetailsTD = row.querySelectorAll("td")[1];
    // Ocultar el td y mostrar el área de progreso
    progressArea.style.display = "block";
    // fileDetailsTD.style.display = "none";

    xhr.upload.addEventListener("progress", ({ loaded, total }) => {
      let fileLoaded = Math.floor((loaded / total) * 100);
      let fileTotal = Math.floor(total / 1000);

      let progressHTML = `
                        <div class="progress-area">
                          <div class="content">
                            <div class="details">
                              <span class="name"><${file.name}/span>
                              <span class="percent">${fileLoaded}%</span>
                            </div>
                            <div class="progress-bar">
                              <div class="progress" style="width: ${fileLoaded}%"></div>
                            </div>
                          </div>  
                        </div>`;

      fileDetailsTD.innerHTML = progressHTML;
    });

    // updateTableRow(tableContent, target, file);
    xhr.addEventListener("load", () => {
      if (xhr.status === 200) {
        // Ocultar área de progreso y mostrar el td
        progressArea.style.display = "none";
        // fileDetailsTD.style.display = "none";

        // arrayFile.push(file);
        arrayFile.push({
          name: file.name,
          type: file.type,
          size: file.size,
          lastModified: file.lastModified,
        });
        console.log(arrayFile);

        // Actualizar la fila de la tabla con los datos del archivo
        updateTableRow(tableContent, target, file);
      } else {
        console.error("Error al subir el archivo");
      }
    });

    xhr.send(arrayFile);
  }

  function getExtension(mimeType) {
    const mimeTypes = {
      "image/jpeg": "jpeg",
      "image/jpg": "jpg",
      "image/png": "png",
      "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
        "docx",
      // Puedes agregar más tipos MIME si es necesario
    };
    return mimeTypes[mimeType] || mimeType; // Devuelve la extensión o el tipo MIME si no está en la lista
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

  // $("#table-inputFile").value();

  $(document).ready(function () {
    $("#saveBtn").click(function (e) {
      e.preventDefault();

      // Crear un objeto FormData
      var formData = new FormData();

      // Obtener los archivos del input file múltiple
      var inputFiles = $("#table-inputFile")[0].files;

      // Añadir cada archivo al FormData
      $.each(inputFiles, function (i, file) {
        formData.append("files[]", file);
      });

      $.ajax({
        type: "POST",
        url: "../views/add.propertyTable.php",
        data: arrayFile,
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
});
