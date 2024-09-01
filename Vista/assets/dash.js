// function linker(link) {
//   document.getElementById("paginas").src = link;
// }

// -----------------------
// -----------------------

// CODIGO PRINCIPAL PARA RECIBIR MENSAJES
window.addEventListener(
  "message",
  function (event) {
    // Verificar el origen del mensaje para seguridad
    // if (event.origin !== "http://your-origin.com") {
    //   return;
    // }

    if (event.data) {
      // CONEXIONES ENTRE IFRAMES
      if (typeof event.data === "string" && /\.php$/.test(event.data)) {
        var iframe = document.getElementById("paginas");
        iframe.src = event.data;
      }
      // CONEXIONES ENTRE IFRAMES

      // ABRIR MODAL
      else if (event.data === "verOptions_01") {
        $("#verOptions_01").modal("show");

        console.log("Datos recibidos del iframe:", event.data);

        // Asegurarse de adjuntar el evento después de que el modal se haya mostrado
        $("#verOptions_01").on("shown.bs.modal", function () {
          const makOptionsElement = document.querySelector(".mak-options");

          // Eliminar el listener existente antes de agregar uno nuevo
          makOptionsElement.removeEventListener("click", handleModalClick);
          makOptionsElement.addEventListener("click", handleModalClick);
          // handleModalClick();
        });

        function handleModalClick() {
          const inputValue = document.querySelector(
            'input[type="checkbox"]'
          ).value;
          console.log(inputValue);
          console.log("hola", inputValue.checked);

          // Enviar el valor de vuelta al iframe
          event.source.postMessage(
            { type: "modalValue", value: inputValue },
            event.origin
          );
        }

        document
          .querySelector(".mak-options")
          .addEventListener("click", function () {
            var iframe = document.getElementById("paginas");
            // console.log(iframe);
            iframe.contentWindow.postMessage(
              { action: "executeFunction", params: "modalValue" },
              "*"
            );
          });
      } else if (event.data === "verOptions_02") {
        $("#verOptions_02").modal("show");

        $("#verOptions_02").on("shown.bs.modal", function () {
          // Similar setup for verOptions_02 if needed
        });
      } else {
        // console.error("Mensaje desconocido recibido:", event.data);
      }
      // ABRIR MODAL
    } else {
      console.error("Mensaje sin datos recibido.");
    }
  },
  false
);

// ---------------------------------------------
