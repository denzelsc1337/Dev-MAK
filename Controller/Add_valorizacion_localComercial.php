<?php
require_once('../Model/Valorizacion.php');

$data[1] = $_POST["direccion_"];
$data[2] = $_POST["tipo_prop"];
$data[3] = $_POST["sub_tipo_prop"];
$data[4] = $_POST["tipo_prom"];
$data[5] = $_POST["a_t"];

//form terreno
$data[6] = $_POST["opciones_zoni"];
$data[7] = $_POST["tipo_suelo"];

$data[8] = $_POST["params_"];
$data[9] = $_POST["frnte_"];
//form terreno

$oValor = new Valorizacion();
$r = $oValor->add_valorizacion_terreno($data);
?>