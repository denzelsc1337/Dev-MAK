function getResumen(idsolicitud, idclient, dniclient) {
  $.ajax({
    type: "POST",
    url: "../Controller/getDetails_valo.php",
    data: {
      id_solic_l: idsolicitud,
      id_client: idclient,
      dni_client: dniclient,
    },
    success: function (response) {
      var data = JSON.parse(response);
      console.log(data);
      var lblContent = [
        "ID propiedad",
        "Cliente",
        "Dirección",
        "Tipo inmueble",
        "Sub tipo inmueble",
        "Promoción",
        "Área terreno",
        "Área construida",
        "Área ocupada",
        "Antigüedad",
        // CASA
        "Sala/Comedor",
        "Sala",
        "Comedor",
        "Cocina",
        "Amoblado",
        "Piscina",
        "N° dormitorios",
        "Dormitorio con baño",
        "N° baños",
        "Baño visita",
        "Cuarto de servicio",
        "Baño de servicio",
        "Estacionamiento",
        "Depósito",
        "Ubicación",
        "Vista",
        "Acabado",
        // DEPARTAMENTO
        "Sala/Comedor",
        "Sala",
        "Comedor",
        "Cocina",
        "Amoblado",
        "N° dormitorios",
        "Dormitorio con baño",
        "N° baños",
        "Baño visita",
        "Cuarto de servicio",
        "Baño de servicio",
        "Estacionamiento",
        "Depósito",
        "Ascensor",
        "Ascensor directo",
        "Pisos del edificio",
        "Piso del depa",
        "Zonificación",
        "Suelo",
        // TERRENO
        "Parámetros",
        "Frente",
        "Izquierda",
        "Fondo",
        "Derecha",
        // OFICINA
        "Piso de la oficina",
        "Cochera",
        "Ascensor",
        "Aire acond",
        // LOCAL COMERCIAL
        "Frente",
        "Cochera",
        "Piso del local",
        "Ascensor",
        "Aire acond",
        // LOCAL INDUSTRIAL
        "Frente",
        "Nave",
        //
        "Estado",
        "Comentario",
        "Observación",
        // "Documentos",
      ];

      var resumeContent = ""; // Iniciar una lista
      data.forEach(function (data, type) {
        if (data !== null) {
          for (let index = 0; index < data.length; index++) {
            // resumeContent += "<li>" + data[index] + "</li>";

            var valor1 = lblContent[index];
            var valor2 = data[index].valor;
            var valor3 = data[index].tipo;

            console.log(valor2);
            console.log(valor3);

            var lbl = "<li><strong>" + valor1 + ": </strong>";
          }
        }
      });

      // Imprimir el contenido en el div con id lst_resume_
      $("#resume_lst").html(resumeContent);
    },
    error: function (xhr, status, error) {
      console.log(error);
    },
  });
}

$(".avanza_pa_atras").on("click", function () {
  $("#resume_lst").empty();
});
