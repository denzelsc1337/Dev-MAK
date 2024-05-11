$("#btn_id_prop").click(function () {
  var id_prop = $("#id_prop_search").val();
  // Realiza la petición AJAX
  $.ajax({
    url: "Controller/getID_prop.php", // URL del archivo PHP que manejará la petición
    type: "POST", // Método HTTP (POST en este caso)
    data: {
      id_prop: id_prop,
    }, // Datos a enviar
    success: function (response) {
      // Maneja la respuesta exitosa
      // console.log("Respuesta del servidor:", response);
      if (response === "1") {
        alert("La propiedad se ha creado correctamente");
      } else {
        alert("La propiedad ya existe.");
      }
    },
    error: function (xhr, status, error) {
      // Maneja errores de la petición
      console.error("Error en la petición AJAX:", error);
    },
  });
});
