function linker(link) {
  document.getElementById("paginas").src = link;
}

// -----------------------
// -----------------------

// Escucha mensajes desde el iframe
window.addEventListener(
  "message",
  function (event) {
    if (event.data) {
      console.log("Mensaje recibido:", event.data);

      // CONEXIONES ENTRE IFRAMES
      if (typeof event.data === "string" && /\.php$/.test(event.data)) {
        var iframe = document.getElementById("paginas");
        // console.log(iframe);
        // console.log(link);
        iframe.src = event.data;
      }
      // CONEXIONES ENTRE IFRAMES

      // ABRIR MODAL
      if (event.data === "openModal") {
        $("#exampleModal").modal("show");
      }
      // ABRIR MODAL
    } else {
      alert("PROBLEMAS");
    }
  },
  false
);

// ---------------------------------------------
// // Escucha mensajes desde el iframe
// window.addEventListener(
//   "message",
//   function (event) {
//     // console.log('Mensaje recibido:', event.data);

//     if (event.data === "views/menu_property.php") {
//       var iframe = document.getElementById("paginas");
//       if (iframe) {
//         iframe.src = "views/add_property.php";
//       } else {
//         console.error("No se encontró el iframe con id 'paginas'.");
//       }
//     }

//     if (event.data === "openModal") {
//       $("#exampleModal").modal("show");
//     }
//   },
//   false
// );
