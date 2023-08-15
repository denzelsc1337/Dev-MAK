<?php
require_once('../Model/Valorizacion.php');
include_once('../config/Conexion.php');

$oValor = new Valorizacion();
$cnx = new Conexion();


$data[1] = $_POST["direccion_"];
$data[2] = $_POST["tipo_prop"];
$data[3] = $_POST["sub_tipo_prop"];
$data[4] = $_POST["tipo_prom"];
$data[5] = $_POST["a_c"];
$data[6] = $_POST["a_o"];
$data[7] = $_POST["antig"];


//form terreno
$data[8] = $_POST["tipo_lcl_ubi"];
$data[9] = $_POST["acabado_"];
$data[10] = $_POST["opciones_zoni_lc_c"];

$data[11] = $_POST["frnt_lcl_com_cmn"];
$data[12] = $_POST["coch_lcl_com_cmn"];

$data[13] = $_POST["piso_lcl_com_cmn"];

$data[14] = isset($_POST['ascen_lcl_com_comun']) ? true : false;
$data[15] = isset($_POST['aire_lcl_com_comun']) ? true : false;

$data[16] = $_POST["id_client_v"];
$data[17] = $_POST["coment_valr"];
//form terreno

$dni_cli = $_POST['dni_client_v'];


$cadena = $cnx->abrirConexion();
$r = $oValor->add_valorizacion_local_comercial($data, $cadena);

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