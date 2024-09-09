document.addEventListener("DOMContentLoaded", function () {
  var badges = document.querySelectorAll(".solicitar");

  badges.forEach((badge) => {
    // Definir la función de clic
    const handleClick = () => {
      // Obtener los valores de los atributos data-target y data-id
      var dataId = badge.getAttribute("data-id");
      var dataTarget = badge.getAttribute("data-attr");

      if (dataTarget !== undefined && dataId !== undefined) {
        // Crear una instancia de FormData y añadir los datos
        var formData = new FormData();
        formData.append("dataId", dataId); // Añadir con nombre y valor
        formData.append("dataTarget", dataTarget); // Añadir con nombre y valor

        // Realizar una solicitud AJAX con jQuery
        $.ajax({
          url: "./../Controller/add.solicitudes.php", // Archivo PHP al que se enviarán los datos
          type: "POST", // Método de envío
          data: formData, // Datos a enviar
          processData: false, // No procesa los datos (necesario para FormData)
          contentType: false, // No establecer contentType, usa FormData
          success: function (response) {
            console.log("Respuesta del servidor:", response); // Mostrar respuesta del servidor
          },
          error: function (xhr, status, error) {
            console.error("Error en la solicitud:", error); // Mostrar error en caso de fallo
          },
          complete: function (jqXHR, textStatus) {
            if (jqXHR.responseText == "1") {
              console.log(badge);
              badge.classList.add("opacity");

              setTimeout(() => {
                badge.className = "";
                badge.classList.add("badge-tp", "proceso");
                badge.setAttribute("disabled", "true");
                badge.textContent = "En proceso";

                // Eliminar el listener después de ejecutarlo
                badge.removeEventListener("click", handleClick);
              }, 1200);
            }
          },
        });
      } else {
        console.log(
          "Los atributos 'data-target' o 'data-id' no se encuentran."
        );
      }
    };

    // Añadir el listener de clic
    badge.addEventListener("click", handleClick);
  });
});
