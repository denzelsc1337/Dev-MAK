<?php
require_once('../Model/Valorizacion.php');

$data[1] = $_POST["direccion_"];
$data[2] = $_POST["tipo_prop"];
$data[3] = $_POST["sub_tipo_prop"];
$data[4] = $_POST["tipo_prom"];
$data[5] = $_POST["a_t"];

//form terreno
$id_zonificacion = $_POST["cod_zonificacion"];
$data[6] = $_POST["tipo_suelo_tern"];

$data[7] = $_POST["params_tern"];
$data[8] = $_POST["frnte_tern"];
//form terreno

$oValor = new Valorizacion();
$r = $oValor->add_valorizacion_terreno($data, $id_zonificacion);
?>