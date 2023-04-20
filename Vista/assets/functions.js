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


  $('#btnValo_add').click(function(){
        var _data_prd=$('#form_valor').serialize();
        $.ajax({
            type:"POST",
            url:"../Controller/Add_Valorizacion.php",
            data: _data_prd,
            success:function(r){
                if (r==1) {
                    alert("Agregado correctamente");
                    event.returnValue=false;
                    /*document.getElementById("tipo_c_id").value = "";
                    document.getElementById("tipo_g_id").value = "";
                    document.getElementById("area_").value = "";
                    document.getElementById("fecha_reg").value = "";
                    document.getElementById("respons_").value = "";
                    document.getElementById("autoriz_").value = "";
                    document.getElementById("monto_").value = "";
                    document.getElementById("obs_").value = "";

                    // Reiniciar los campos de selección
                    $("#tipo_c_id").prop('selectedIndex',0);
                    $("#tipo_g_id").prop('selectedIndex',0);
                    $("#respons_").prop('selectedIndex',0);
                    $("#area_").prop('selectedIndex',0);
                    $("#autoriz_").prop('selectedIndex',0);
                    $('#area_').empty();*/

                    window.location.href = "valorizacion.php";
                    
                }else{
                    alert("Error al registrar, Verifique que los campos esten correctamente completos.");
                }
            }
        });
        return false;
  });


  

});