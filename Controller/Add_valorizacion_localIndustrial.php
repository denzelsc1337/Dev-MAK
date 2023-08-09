<?php
require_once('../Model/Valorizacion.php');

$data[1] = $_POST["direccion_"];
$data[2] = $_POST["tipo_prop"];
$data[3] = $_POST["sub_tipo_prop"];
$data[4] = $_POST["tipo_prom"];
$data[5] = $_POST["a_t"];
$data[6] = $_POST["a_c"];
$data[7] = $_POST["antig"];


//form terreno
$data[8] = $_POST["acabado_lci"];
$data[9] = $_POST["acabado_lci"];

$data[10] = $_POST["frente_lci"];
$data[11] = $_POST["nave_lci"];
$data[12] = $_POST["ubic_lci"];
//form terreno

$oValor = new Valorizacion();
$r = $oValor->add_valorizacion_local_industrial($data);
?>