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
    const validExtensions = ["image/jpeg", "image/jpg", "image/png"];
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
  var contentArea = document.querySelector(".table-file-archive");
  var fileBtn = contentArea.querySelector("tr th");
  var iptFile = fileBtn.querySelector("#table-inputFile");

  fileBtn.addEventListener("click", () => iptFile.click());

  iptFile.onchange = () => {
    file = this.files;
    file = iptFile.files;
    showFiles(file);
  };
  // UP FILES TABLE
});
