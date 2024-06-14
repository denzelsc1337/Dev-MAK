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
  var selectAllCheckbox = document.getElementById("select-all");
  var resetSelectedButton = document.getElementById("reset-selected");

  function bindEventsToRow(row) {
    var fileBtn = row.querySelector("td.cursor");
    var inputFile = row.querySelector("input[type='file']");
    var fileBtnIcon = fileBtn.querySelector("i");

    function handleFileBtnClick() {
      if (fileBtnIcon.classList.contains("fa-plus")) {
        inputFile.click();
      } else if (fileBtnIcon.classList.contains("fa-xmark")) {
        resetRow(row);
      }
    }

    function handleInputFileChange({ target }) {
      let file = target.files[0];
      if (file) {
        let fileName = file.name;
        let dataTarget = target.getAttribute("data-target");
        updateTableRow(row, file);
        uploadFile(fileName, target.id, dataTarget, target);
        toggleIconToCheckbox(fileBtnIcon, row);
      }
    }

    fileBtn.addEventListener("click", handleFileBtnClick);
    inputFile.addEventListener("change", handleInputFileChange);

    // Store the event listeners so we can remove them later if needed
    row._fileBtnClickHandler = handleFileBtnClick;
    row._inputFileChangeHandler = handleInputFileChange;
  }

  function updateTableRow(row, file) {
    let rowContent = row.querySelectorAll("td");
    let inputFile = row.querySelector("input[type='file']");
    let inputFileId = inputFile.id;
    let inputFileName = inputFile.name;
    let inputDataTarget = inputFile.getAttribute("data-target");

    rowContent[1].innerHTML = `<i class="fa-solid fa-xmark"></i>
                             <input type="file" name="${inputFileName}" id="${inputFileId}" data-target="${inputDataTarget}" hidden>`;
    rowContent[2].querySelector("span").textContent = file.name;
    rowContent[3].textContent = file.type;
    rowContent[4].textContent = `${Math.round(file.size / 1024)} KB`;
  }

  function resetRow(row) {
    let rowContent = row.querySelectorAll("td");
    let inputFile = row.querySelector("input[type='file']");
    let inputFileId = inputFile.id;
    let inputFileName = inputFile.name;
    let inputDataTarget = inputFile.getAttribute("data-target");

    rowContent[1].innerHTML = `<i class="fa-solid fa-plus"></i>
                             <input type="file" name="${inputFileName}" id="${inputFileId}" data-target="${inputDataTarget}" hidden>`;
    rowContent[2].innerHTML = `<span>TuArchivo</span>
                             <div class="progress-area">
                                 <li class="row">
                                     <div class="content">
                                         <div class="details">
                                             <span class="name"></span>
                                             <span class="percent"></span>
                                         </div>
                                         <div class="progress-bar">
                                             <div class="progress"></div>
                                         </div>
                                     </div>
                                 </li>
                             </div>`;
    rowContent[3].textContent = "(png, jpg, pdf)";
    rowContent[4].textContent = "1 KB";

    // Unbind the previous event listeners
    let fileBtn = row.querySelector("td.cursor");
    let newInputFile = row.querySelector("input[type='file']");

    fileBtn.removeEventListener("click", row._fileBtnClickHandler);
    inputFile.removeEventListener("change", row._inputFileChangeHandler);

    // Re-bind the click and change events for the reset input element
    bindEventsToRow(row);
  }

  function uploadFile(fileName, inputFileId, dataTarget, inputFileElement) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../Controller/Add_propiedades.php");

    xhr.upload.addEventListener("progress", ({ loaded, total }) => {
      let fileLoaded = Math.floor((loaded / total) * 100);
      let progressElement = inputFileElement
        .closest("tr")
        .querySelector(".progress-bar .progress");
      progressElement.style.width = fileLoaded + "%";
      progressElement.textContent = fileLoaded + "%";
    });

    let form = document.querySelector("#form_prop");
    let formData = new FormData(form);
    formData.append("dni_cli", document.querySelector("#dni_cli").value);
    formData.append("inputFileId", inputFileId);
    formData.append("dataTarget", dataTarget);

    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        console.log("Response from server: ", xhr.responseText);
      } else if (xhr.readyState == 4) {
        console.error("Error: ", xhr.status, xhr.statusText);
      }
    };

    xhr.send(formData);

    // $.ajax({
    //   type: "POST",
    //   url: "../views/add.propertyTable.php",
    //   data: formData,
    //   processData: false,
    //   contentType: false,
    //   beforeSend: function () {
    //     console.log("Enviando...");
    //   },
    //   success: function (r) {
    //     console.log("Éxito:", r);
    //   },
    //   error: function (xhr, status, error) {
    //     console.log("Error:", error);
    //   },
    // });
  }
  var fileRows = contentArea.querySelectorAll(".tr-list-upfile");
  fileRows.forEach((row) => {
    bindEventsToRow(row);
  });

  selectAllCheckbox.addEventListener("change", function () {
    let checkboxes = contentArea.querySelectorAll(".select-file");
    checkboxes.forEach((checkbox) => {
      checkbox.checked = selectAllCheckbox.checked;
    });
  });

  resetSelectedButton.addEventListener("click", function () {
    let checkboxes = contentArea.querySelectorAll(".select-file:checked");
    checkboxes.forEach((checkbox) => {
      let row = checkbox.closest("tr");
      resetRow(row);
    });
  });
  // UP FILES TABLE
});
