document.addEventListener("DOMContentLoaded", function () {
  var dataDrag = [];
  var dragContentAreas = document.querySelectorAll(".file-content");

  dragContentAreas.forEach((dragContent) => {
    console.log(dragContent);

    var buttonFile = dragContent.querySelector("#btnFile");
    var inputBox = dragContent.querySelector(".up-archive.file-item");
    var iptFile = dragContent.querySelector("#inputFile");

    // buttonFile.forEach((buttonFile) => {
    buttonFile.addEventListener("click", (e) => {
      iptFile.click();
    });
    // });

    iptFile.addEventListener("change", (e) => {
      files = iptFile.files;
      showFiles(files);
    });

    dragContent.addEventListener("dragover", (e) => {
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
    //   e.preventDefault();
      console.log(e);

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

    function showFiles(files) {
      if (files.length === undefined) {
        processFile(files);
      } else {
        for (const file of files) {
          processFile(file);
        }
      }
    }

    function typeValidation(type) {
      const validExtensions = [
        "image/jpeg",
        "image/jpg",
        "image/png",
        "application/vnd.openxmlformats-officedocument.wordprocessingml.document", // Tipo MIME para .docx
      ];
      return validExtensions.includes(type);
    }

    function processFile(file) {
      const docType = file.type;
      const validExtensions = [
        "image/jpeg",
        "image/jpg",
        "image/png",
        "application/pdf",
        "application/vnd.openxmlformats-officedocument.wordprocessingml.document", // Tipo MIME para .docx
      ];

      if (validExtensions.includes(docType)) {
        // archivo valido
        const fileReader = new FileReader();

        fileReader.addEventListener("load", (e) => {
          const imgSrc = e.target.result;
          const id = `file-${Math.random().toString(32).substring(7)}`;
          const fileUrl = fileReader.result;
          const fileExtension = getFileExtension(file.name);

          //   console.log(fileUrl);
          //   console.log(fileExtension);

          let FaceArchive = "";
          FaceArchive += `
            <div id="${id}" class="file-item">
                <img src="${imgSrc}" alt="${file.name}">
                <div class="item-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
             `;

          //   var html = dragContent.querySelector("");
          dragContent.innerHTML += FaceArchive;

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
        });
        fileReader.readAsDataURL(file);
        // uploadFile(file, id);
      } else {
        // archivo no valido
        alert("Archivo no válido: " + file.name);
      }
      // console.log(DataFiles);
    }

    function getFileExtension(filename) {
      return filename.slice(((filename.lastIndexOf(".") - 1) >>> 0) + 2);
    }
  });
});
