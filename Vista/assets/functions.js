$(document).ready(function() {
  // Cuando cambia el valor del cboPais
  $('#respons_').change(function() {

    var cod_usu = $(this).val();
    
    // Realizar una llamada Ajax para obtener las ciudades del país seleccionado
    $.ajax({
      url: '../Controller/getArea.php',
      method: 'POST',
      data: { cod_usu: cod_usu },
      success: function(area) {
        // Limpiar el cboCiudad y agregar las nuevas opciones
        var area = JSON.parse(area);
        console.log(area);
        $('#area_').empty();
        $.each(area, function(index, area) {
          $('#area_').append($('<option>').text(area.desc_area).val(area.id_area));
        });
      }
    });
  });


  $('#add').click(function(){
      //console.log("clickado");
        var data = $('#form_1').serialize();
        $.ajax({
            type:"POST",
            url:"../Controller/Add_Valorizacion.php",
            data: data,
            success:function(r){
                if (r==1) {
                    alert("Agregado correctamente");
                    event.returnValue=false;
                    window.location.href = "valorizacion.php";
                }else{
                    alert("Error al registrar, Verifique que los campos esten correctamente completos.");
                    console.log(r);
                    console.log(data);
                }
            },
            error: function(xhr, status, error) {
                console.error(error); // Log the error message from the server
            }
        });
        return false;
  });

});