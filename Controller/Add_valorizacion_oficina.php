<?php
require_once('../Model/Valorizacion.php');
include_once('../config/Conexion.php');

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


$dni_cli = $_POST['dni_client_v'];


$cnx = new Conexion();
$cadena = $cnx->abrirConexion();

$oValor = new Valorizacion();

$r = $oValor->add_valorizacion_oficina($data, $cadena);


if ($r) {

    $id_registro = mysqli_insert_id($cadena);

    $target_dir = "../Valorizaciones/".$id_registro."/".$dni_cli."/fotos_val/";


    echo " se guarda en esta ruta -> " . $target_dir;

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $archivos_selecc = $_FILES["inpt-file-valo"];

  	$archivos_cont = count($archivos_selecc['name']);

  	$archivos_total = 0;


  	for ($i=0; $i < $archivos_cont ; $i++) {
    $ubicacion_save = $target_dir . basename($archivos_selecc["name"][$i]);
    	if (move_uploaded_file($archivos_selecc["tmp_name"][$i], $ubicacion_save)) {
	        $archivos_total++;
    	}
  	}
} else {
    echo "Error al insertar el registro.";
}
?>