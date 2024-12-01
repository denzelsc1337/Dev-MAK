document.addEventListener("DOMContentLoaded", function () {
  var dataDrag = [];
  var dragContentAreas = document.querySelector(".file-content");
  var inputBox = dragContentAreas.querySelector(".up-archive.file-item");
  var iptFile = dragContentAreas.querySelector("#inputFile");

  function typeValidation(type) {
    const validExtensions = [
      "image/jpeg",
      "image/jpg",
      "image/png",
      "application/vnd.openxmlformats-officedocument.wordprocessingml.document", // Tipo MIME para .docx
    ];
    return validExtensions.includes(type);
  }

  function dataContent() {
    if (dataDrag.length > 0) {
      inputBox.classList.add("file-file");
    } else {
      inputBox.classList.remove("file-file");
    }
  }

  function removeFile(id) {
    // Elimina el archivo del array `dataDrag` por su ID
    const indexToRemove = dataDrag.findIndex((item) => item.id === id);
    if (indexToRemove !== -1) {
      dataDrag.splice(indexToRemove, 1); // Eliminar el archivo del array
    }
    // También eliminar el archivo del DOM
    const fileElement = document.getElementById(id);
    if (fileElement) {
      fileElement.remove();
    }
    console.log(dataDrag);
    dataContent();
  }

  function uploadFile(file, dragContent) {
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

      dataDrag.push({
        id: id,
        file: file, // Almacenar el archivo completo aquí
      });

      const closeButton = dragContent.querySelector(`#${id} .item-close`);

      closeButton.addEventListener("click", () => {
        removeFile(id); // Llamar a la función para eliminar el archivo
      });

      console.log(dataDrag);
      dataContent();
    };
    reader.readAsDataURL(file);
  }

  inputBox.addEventListener("click", () => iptFile.click());

  iptFile.addEventListener("change", () => {
    [...iptFile.files].forEach((file) => {
      if (typeValidation(file.type)) {
        uploadFile(file, dragContentAreas);
      } else {
        console.log("archivo no válido.");
      }
    });
    iptFile.value = ""; // Clear the input file value
  });

  dragContentAreas.addEventListener("dragover", (e) => {
    e.preventDefault();
    [...e.dataTransfer.items].forEach((item) => {
      if (typeValidation(item.type)) {
        dragContentAreas.classList.add("drag-over-effect");
      }
    });
  });

  dragContentAreas.addEventListener("dragleave", (e) => {
    e.preventDefault();
    dragContentAreas.classList.remove("drag-over-effect");
  });

  dragContentAreas.addEventListener("drop", (e) => {
    e.preventDefault();
    dragContentAreas.classList.remove("drag-over-effect");

    if (e.dataTransfer.items) {
      [...e.dataTransfer.items].forEach((item) => {
        if (item.kind === "file") {
          const file = item.getAsFile();
          if (typeValidation(file.type)) {
            uploadFile(file, dragContentAreas);
          }
        }
      });
    } else {
      [...e.dataTransfer.files].forEach((file) => {
        if (typeValidation(file.type)) {
          uploadFile(file, dragContentAreas);
        }
      });
    }
  });

  $("#saveBtn").click(function (e) {
    e.preventDefault();

    // Crear un nuevo FormData
    var formData = new FormData();

    // Agregar los archivos desde el array `dataDrag` al FormData
    dataDrag.forEach((item, index) => {
      formData.append("inputFile[]", item.file); // Agrega cada archivo al FormData
    });

    // Enviar el formulario con AJAX
    $.ajax({
      type: "POST",
      url: "../views/add.imageProperty.php",
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
