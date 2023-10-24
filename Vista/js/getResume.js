$("#lst_resume_").on("click", function () {
  var id_valo_soli = $(this).data("id_solic_val");
  var id_valo_cli = $(this).data("id_cli");
  var dni_cli = $(this).data("dni_cli");

  getResumen(id_valo_soli, id_valo_cli, dni_cli);
});

function getResumen(idsolicitud, idclient, dniclient) {
  $.ajax({
    type: "POST",
    url: "../Controller/Get_Details_Valorizacion.php",
    data: {
      id_solic_l: idsolicitud,
      id_client: idclient,
      dni_client: dniclient,
    },
    success: function (response) {
      var data = JSON.parse(response);
      console.log(data);
      var resumeContent = "<ul>"; // Iniciar una lista

      data.forEach(function (item) {
        // Verificar si el valor no es nulo (null)
        if (item !== null) {
          // Agregar cada elemento a la lista en su propio <li>
          resumeContent += "<li>" + item + "</li>";
        }
      });

      resumeContent += "</ul>"; // Cerrar la lista

      // Imprimir el contenido en el div con id lst_resume_
      $("#resume_lst").html(resumeContent);
    },
    error: function (xhr, status, error) {
      console.log(error);
    },
  });
}

// $("#dir_rsm").text(detalles[0][2]);
