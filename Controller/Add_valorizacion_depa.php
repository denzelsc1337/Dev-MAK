<?php
require_once('../Model/Valorizacion.php');

$data[1] = $_POST["direccion_"];
$data[2] = $_POST["tipo_prop"];
$data[3] = $_POST["sub_tipo_prop"];
$data[4] = $_POST["tipo_prom"];


$data[5] = $_POST["a_c"];
$data[6] = $_POST["a_o"];
$data[7] = $_POST["antig"];

//form depa
$data[8] =  isset($_POST['sala_com_d']) ? true : false;
$data[9] = isset($_POST['sala_d']) ? true : false;
$data[10] = isset($_POST['comedor_d']) ? true : false;
$data[11] = isset($_POST['cocina_d']) ? true : false;
$data[12] = isset($_POST['amoblado_d']) ? true : false;

$data[13] = $_POST["cant_dorm_d"];
$data[14] = $_POST["cant_dorm_b_d"];

$data[15] = $_POST["cant_banho_d"];
$data[16] = isset($_POST['banho_vis_d']) ? true : false;

$data[17] = isset($_POST['cuarto_serv_d']) ? true : false;
$data[18] = isset($_POST['banho_serv_d']) ? true : false;

$data[19] = $_POST["cant_estac_d"];
$data[20] = isset($_POST['deposito__d']) ? true : false;

$data[21] = isset($_POST['ascensor_d']) ? true : false;
$data[22] = isset($_POST['ascensor_directo_d']) ? true : false;


$data[23] = $_POST["pisos_edif_d"];
$data[24] = $_POST["piso_dpto_"];

$data[25] = $_POST["ubic"];
$data[26] = $_POST["vista_"];
$data[27] = $_POST["acabado_"];
//form depa

$oValor = new Valorizacion();
$r = $oValor->add_valorizacion_depa($data);
?>