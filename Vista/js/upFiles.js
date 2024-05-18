// var contentFile = document.querySelector(".content-file");
var dragContent = document.querySelector(".file-content"),
  inputBox = dragContent.querySelector("#btnFile"),
  iptFile = dragContent.querySelector("#inputFile"),
  txtBox = dragContent.querySelector(".ole");
var listFile = document.querySelector(".list-file");
var saveBtn = document.querySelector("#saveBtn");

inputBox.onclick = () => iptFile.click();

iptFile.onchange = () => {
  [...iptFile.files].forEach((file) => {
    if (typeValidation(file.type)) {
      console.log(file);
      uploadFile(file);
    }
  });
};

// CUANDO EL ARCHIVO ESTA EN EL DRAG AREA
dragContent.ondragover = (e) => {
  e.preventDefault();
  [...e.dataTransfer.items].forEach((item) => {
    if (typeValidation(item.type)) {
      dragContent.classList.add("drag-over-effect");
    }
  });
};

// CUANDO EL ARCHIVO ESTA FUERA DEL DRAG AREA
dragContent.ondragleave = (e) => {
  e.preventDefault();
  dragContent.classList.remove("drag-over-effect");
};

// CUANDO EL ARCHIVO SE SUELTA EN EL DRAG AREA
dragContent.ondrop = (e) => {
  e.preventDefault();
  dragContent.classList.remove("drag-over-effect");

  if (e.dataTransfer.items) {
    [...e.dataTransfer.items].forEach((item) => {
      if (item.kind === "file") {
        const file = item.getAsFile();
        if (typeValidation(file.type)) {
          uploadFile(file);
        }
      }
    });
  } else {
    [...e.dataTransfer.files].forEach((file) => {
      if (typeValidation(file.type)) {
        uploadFile(file);
      }
    });
  }
};

function typeValidation(type) {
  const docType = type;
  const validExtensions = [
    "image/jpeg",
    "image/jpg",
    "image/png",
    // "application/pdf",
    "image/gif",
    "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
    // "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
    // "application/vnd.openxmlformats-officedocument.presentationml.presentation",
    // "text/plain",
  ];

  return validExtensions.includes(type);
  if (validExtensions.includes(docType)) {
    return true;
  }
}

function uploadFile(file) {
  const reader = new FileReader();
  reader.onload = (e) => {
    const imgSrc = e.target.result;
    const id = `file-${Math.random().toString(32).substring(7)}`;
    dragContent.innerHTML += `
        <div id="${id}" class="file-item">
            <img src="${imgSrc}" alt="${file.name}">
            <div class="item-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
      `;

    const closeButton = dragContent.querySelectorAll(".item-close");

    closeButton.forEach((element) => {
      //   console.log(element);
      element.addEventListener("click", () => {
        // console.log(element);

        const dlt = element.closest(".file-item");

        if (dlt) {
          const id = dlt.id;
          dlt.remove();
        }
      });
    });
  };
  reader.readAsDataURL(file);

  // upArchive(file);
  saveBtn.addEventListener("click", () => {
    upArchive(file);
  });
}

saveBtn.addEventListener("click", () => {
  selectedFiles.forEach((file) => {
    upArchive(file);
  });
});

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
