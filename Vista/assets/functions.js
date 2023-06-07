$(document).ready(function () {
  // Cuando cambia el valor del cboPais
  $("#respons_").change(function () {
    var cod_usu = $(this).val();

    // Realizar una llamada Ajax para obtener las ciudades del país seleccionado
    $.ajax({
      url: "../Controller/getArea.php",
      method: "POST",
      data: { cod_usu: cod_usu },
      success: function (area) {
        // Limpiar el cboCiudad y agregar las nuevas opciones
        var area = JSON.parse(area);
        console.log(area);
        $("#area_").empty();
        $.each(area, function (index, area) {
          $("#area_").append(
            $("<option>").text(area.desc_area).val(area.id_area)
          );
        });
      },
    });
  });

/*
  $('#btnValo_casa').click(function(){
      var _data_casa=$('#form_valor').serialize();
      $.ajax({
          type:"POST",
          url:"../Controller/Add_valorizacion_casa.php",
          data: _data_casa,
          success:function(r){
              if (r==1) {
                  alert("Solicitud enviada correctamente.");
              }else{
                  alert("Error en el servidor.");
              }
          }
      });
      return false;
  });
*/
  $("#btnValo_casa").click(function(e){
    e.preventDefault();
    var data = $("#form_valor").serialize();
      $.ajax({
        type: "POST",
        url: "../Controller/Add_valorizacion_casa.php",
        data: data,
        success: function (r) {
          if (r == 1) {
            alert("Solicitud enviada correctamente.");
            console.log(r);
            event.returnValue = false;
            window.location.href = "valorizacion.php";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            console.log(r);
            console.log(data);
          }
        },
        error: function (xhr, status, error) {
          console.error(error);
        }
      });
    return false;
  });

  $("#btnValo_depa").click(function(e){
    e.preventDefault();
    var data = $("#form_valor").serialize();
      $.ajax({
        type: "POST",
        url: "../Controller/Add_valorizacion_depa.php",
        data: data,
        success: function (r) {
          if (r == 1) {
            alert("Solicitud enviada correctamente.");
            console.log(r);
            event.returnValue = false;
            window.location.href = "valorizacion.php";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            console.log(r);
            console.log(data);
          }
        },
        error: function (xhr, status, error) {
          console.error(error);
        }
      });
    return false;
  });

  $("#btnValo_terren").click(function(e){
    e.preventDefault();
    var data = $("#form_valor").serialize();
      $.ajax({
        type: "POST",
        url: "../Controller/Add_valorizacion_terreno.php",
        data: data,
        success: function (r) {
          if (r == 1) {
            alert("Solicitud enviada correctamente.");
            console.log(r);
            event.returnValue = false;
            window.location.href = "valorizacion.php";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            console.log(r);
            console.log(data);
          }
        },
        error: function (xhr, status, error) {
          console.error(error);
        }
      });
    return false;
  });

  $("#btnValo_ofi").click(function(e){
    e.preventDefault();
    var data = $("#form_valor").serialize();
      $.ajax({
        type: "POST",
        url: "../Controller/Add_valorizacion_oficina.php",
        data: data,
        success: function (r) {
          if (r == 1) {
            alert("Solicitud enviada correctamente.");
            console.log(r);
            event.returnValue = false;
            window.location.href = "valorizacion.php";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            console.log(r);
            console.log(data);
          }
        },
        error: function (xhr, status, error) {
          console.error(error);
        }
      });
    return false;
  });

  $("#btnValo_lc_ind").click(function(e){
    e.preventDefault();
    var data = $("#form_valor").serialize();
      $.ajax({
        type: "POST",
        url: "../Controller/Add_valorizacion_localIndustrial.php",
        data: data,
        success: function (r) {
          if (r == 1) {
            alert("Solicitud enviada correctamente.");
            console.log(r);
            event.returnValue = false;
            window.location.href = "valorizacion.php";
          } else {
            alert(
              "Error al registrar, Verifique que los campos esten correctamente completos."
            );
            console.log(r);
            console.log(data);
          }
        },
        error: function (xhr, status, error) {
          console.error(error);
        }
      });
    return false;
  });

  /*function setBotonPresionado(boton) {
    document.getElementById("botonPresionado").value = boton;
  }*/

  /*$("#btnValo_add").on("click", function (e) {
    e.preventDefault();
    var botonPresionado = $(this).data("accion");
    var data = $("#form_valor").serialize();
    data += "&botonPresionado=" + botonPresionado;
    $.ajax({
      type: "POST",
      url: "../Controller/Add_Valorizacion.php",
      data: data,
      success: function (response) {
        console.log(response);
        // Realizar acciones adicionales con la respuesta del servidor
        if (r == 1) {
          alert("Agregado correctamente");
          event.returnValue = false;
          window.location.href = "valorizacion.php";
        } else {
          alert(
            "Error al registrar, Verifique que los campos esten correctamente completos."
          );
          console.log(r);
          console.log(data);
        }
      },
      error: function (xhr, status, error) {},
    }).done( function (data) {
      $("#salida").append(data);
      $("#pass_").val("");
    } );
  });*/

});
