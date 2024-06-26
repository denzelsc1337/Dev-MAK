function linker(link) {
  document.getElementById("paginas").src = link;
}

// -----------------------
// -----------------------

// Escucha mensajes desde el iframe
window.addEventListener(
  "message",
  function (event) {
    // Evitar ejecutar si el evento es setup_new_selection
    if (event.data.action === "setup_new_selection") {
      return;
    }
    if (event.data) {
      // console.log("Mensaje recibido:", event.data);

      // CONEXIONES ENTRE IFRAMES
      if (typeof event.data === "string" && /\.php$/.test(event.data)) {
        var iframe = document.getElementById("paginas");
        // console.log(iframe);
        // console.log(link);
        iframe.src = event.data;
      }
      // CONEXIONES ENTRE IFRAMES

      // ABRIR MODALF
      else if (event.data === "verOptions_01") {
        $("#verOptions_01").modal("show");

        // $("#verOptions_01").on("shown.bs.modal", function () {
        //   // Your code to execute inside the modal
        //   initializeEvents(document);
        // });
      } else if (event.data === "verOptions_02") {
        $("#verOptions_02").modal("show");

        // $("#verOptions_02").on("shown.bs.modal", function () {
        //   // Your code to execute inside the modal
        //   initializeEvents(document);
        // });
      } else {
        alert("PROBLEMAS1");
      }
      // ABRIR MODAL
    } else {
      alert("PROBLEMAS2");
    }
  },
  false
);

// ---------------------------------------------
