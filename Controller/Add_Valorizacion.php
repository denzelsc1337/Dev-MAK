<?php


//Guardamos los datos el post
$data[1] = $_POST["direccion_"];
$data[2] = $_POST["tipo_prop"];
$data[3] = $_POST["sub_tipo_prop"];
$data[4] = $_POST["tipo_prom"];


$data[5] = $_POST["a_t"];
$data[6] = $_POST["a_c"];
$data[7] = $_POST["a_o"];
$data[8] = $_POST["antig"];

//casa inputs
$data[9] =  isset($_POST['sala_com'])? true : false;
$data[10] = isset($_POST['sala_'])? true : false;
$data[11] = isset($_POST['comedor_'])? true : false;
$data[12] = isset($_POST['cocina_'])? true : false;
$data[13] = isset($_POST['jardin_t'])? true : false;

$data[14] = $_POST["cant_dorm"];
$data[15] = $_POST["cant_banho"];

$data[16] = isset($_POST['cuarto_serv'])? true : false;
$data[17] = isset($_POST['banho_serv'])? true : false;;

$data[18] = $_POST["cant_estac"];
$data[19] = isset($_POST['deposito_'])? true : false;

$data[20] = $_POST["ubic"];
$data[21] = $_POST["vista_"];
$data[22] = $_POST["acabado_"];

//$data[20] = isset($_POST["ubic"]) && $_POST["ubic"] !== "" ? $_POST["ubic"] : null;

//$data[21] = isset($_POST["vista_"]) && $_POST["vista_"] !== "" ? $_POST["vista_"] : null;

//$data[22] = isset($_POST["acabado_"]) && $_POST["acabado_"] !== "" ? $_POST["acabado_"] : null;


/*if(isset($_POST["ubic"]) && !empty($_POST["ubic"])){
   $data[20] = $_POST["ubic"];
} else {
   $data[20] = 'NULL';
}

if(isset($_POST["vista_"]) && !empty($_POST["vista_"])){
    $data[21] = $_POST["vista_"];
} else {
   $data[21]  = 'NULL';
}

if(isset($_POST["acabado_"]) && !empty($_POST["acabado_"])){
    $data[22] = $_POST["acabado_"];
} else {
   $data[22] = 'NULL';
}*/

$data[23] = $_POST["cant_dorm_b_"];
$data[24] = isset($_POST['banho_vis'])? true : false;
$data[25] = $_POST["pisos_"];
$data[26] = isset($_POST['amoblado_'])? true : false;
//casa inputs


//depa inputs
$data[27] =  isset($_POST['sala_com_d'])? true : false;
$data[28] = isset($_POST['sala_d'])? true : false;
$data[29] = isset($_POST['comedor_d'])? true : false;
$data[30] = isset($_POST['cocina_d'])? true : false;
$data[31] = isset($_POST['jardin_t_d'])? true : false;

$data[32] = $_POST["cant_dorm_d"];
$data[33] = $_POST["cant_banho_d"];

$data[34] = isset($_POST['cuarto_serv_d'])? true : false;
$data[35] = isset($_POST['banho_serv_d'])? true : false;

$data[36] = $_POST["cant_estac_d"];
$data[37] = isset($_POST['deposito__d'])? true : false;

$data[38] = $_POST["cant_dorm_b_d"];
$data[39] = isset($_POST['banho_vis_d'])? true : false;
$data[40] = isset($_POST['ascensor_d'])? true : false;
$data[41] = isset($_POST['ascensor_directo_d'])? true : false;

$data[42] = $_POST["pisos_edif_d"];
$data[43] = $_POST["piso_dpto_"];

$data[44] = isset($_POST['amoblado_d'])? true : false;
$data[45] = isset($_POST['piscina_d'])? true : false;
//depa inputs

//terreno inputs
$data[46] = $_POST["tipo_zoni"];
$data[47] = $_POST["tipo_suelo"];


/*$data[46] = isset($_POST["tipo_zoni"]) && $_POST["tipo_zoni"] !== "" ? $_POST["tipo_zoni"] : 'null';

$data[47] = isset($_POST["tipo_suelo"]) && $_POST["tipo_suelo"] !== "" ? $_POST["tipo_suelo"] : 'null';*/


$data[48] = $_POST["params_"];
$data[49] = $_POST["frnte_"];
$data[50] = $_POST["izq_"];
$data[51] = $_POST["fndo_"];
$data[52] = $_POST["derc_"];
//terreno inputs

//oficina inputs
$data[53] = $_POST["piso_ofi"];
$data[54] = $_POST["coch_ofi"];

$data[55] = isset($_POST['ascen_ofi'])? true : false;
$data[56] = isset($_POST['aire_ofio'])? true : false;


//local comercial inputs
$data[57] = $_POST["frnt_lcl_com"];
$data[58] = $_POST["coch_lcl_com"];
$data[59] = $_POST["piso_lcl_com"];

$data[60] = isset($_POST['ascen_lcl_com'])? true : false;
$data[61] = isset($_POST['aire_lcl_com'])? true : false;


//Local industrial inputs
$data[62] = $_POST["frnt_lcl_com"];
$data[63] = $_POST["coch_lcl_com"];



try {
	require_once('../Model/Valorizacion.php');

	$oValor= new Valorizacion();
	$r = $oValor->add_Valorizacion($data);
	//var_dump($data);


} catch (Exception $e) {
    ?>
        <script>
            alert("Ha ocurrido un error al registrar la valorizacion: <?php echo $e->getMessage(); ?>");
        </script>
    <?php
}


?>