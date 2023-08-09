<?php
require_once('../Model/Valorizacion.php');

$data[1] = $_POST["direccion_"];
$data[2] = $_POST["tipo_prop"];
$data[3] = $_POST["sub_tipo_prop"];
$data[4] = $_POST["tipo_prom"];

$data[5] = $_POST["a_c"];
$data[6] = $_POST["a_o"];
$data[7] = $_POST["antig"];

//form oficina
$data[8] = $_POST["acabado_ofi"];
$data[9] = $_POST["opciones_zoni_ofi"];
$data[10] = $_POST["vista_ofi"];

$data[11] = $_POST["piso_ofi"];
$data[12] = $_POST["coch_ofi"];

$data[13] = isset($_POST['ascen_ofi']) ? true : false;
$data[14] = isset($_POST['aire_ofio']) ? true : false;
$data[15] = $_POST["ubic_ofi"];
//form oficina

$oValor = new Valorizacion();
$r = $oValor->add_valorizacion_oficina($data);
?>