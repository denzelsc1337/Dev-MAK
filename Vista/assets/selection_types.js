$(document).ready(function(){

	let $tipo_inmue_ = document.querySelector('#tipo_prop');
	let $sub_tipo_inmue_ = document.querySelector('#sub_tipo_prop');

	let $tipo_z = document.querySelector('#tipo_zoni');

	function load_tipo_inmue(){
		$.ajax({
			type: "GET",
			url: "../Controller/Select.php",
			success:function(response){

				const tipo_inm = JSON.parse(response);
				let template = '<option disabled selected="selected" value ="-1">Seleccione un tipo</option>';

				tipo_inm.forEach(tipo_prop_ =>{
					template += `<option value="${tipo_prop_.cod_tipo_inm}">${tipo_prop_.tipo}</option>`;
				});

				$tipo_inmue_.innerHTML = template;

				console.log(response);
			}
		});
	}

	load_tipo_inmue();

	function cargarSubTipos(sendDatos){
		if ($tipo_inmue_.value == -1 || $tipo_inmue_.value == null ) {
	        $sub_tipo_inmue_.html('<option selected disabled> Primero debes seleccionar el tipo de inmueble </option>').prop('disabled', true);
	        $sub_tipo_inmue_.disabled = true;
	        return;
    	}
        $.ajax({
            type:"POST",
            url:"../Controller/Select.php",
            data: sendDatos,
            charset: "utf-8",
            success:function(response){
                const subtipos = JSON.parse(response);
                let template = '<option selected value="-1"> Selecciona </option>';

                subtipos.forEach(_subtipos =>{
                    template += `<option value="${_subtipos.id_sub}">${_subtipos.nom_sub}</option>`;
                });
                console.log("uwu"+response);
                $('#sub_tipo_prop').html(template);

            }
        })
    }

    function cargarTiposZona(sendDatos_){
        $.ajax({
            type:"POST",
            url:"../Controller/Select.php",
            data: sendDatos_,
            charset: "utf-8",
            success:function(response_){
                const zonifi = JSON.parse(response_);
                let template = '<option selected value="-1"> Selecciona </option>';

                zonifi.forEach(_zoni =>{
                    template += `<option value="${_zoni.id_zn}">${_zoni.nom_zn}</option>`;
                });
                console.log(" - "+response_);
                $('#tipo_zoni').html(template);

            }
        })
    }

    $tipo_inmue_.addEventListener('change',function () {
        const codigoTipo = $tipo_inmue_.value
        const codigoTipo_ = $tipo_inmue_.value

        console.log(codigoTipo)
        console.log(codigoTipo_)

        const sendDatos = {
            'cod_tipo' : codigoTipo
        }

        const sendDatos_ = {
            'codTipo_i' : codigoTipo_
        }
        cargarSubTipos(sendDatos)
        cargarTiposZona(sendDatos_)
    })



})