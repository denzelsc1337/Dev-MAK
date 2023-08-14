<?php
require_once('../Model/Valorizacion.php');
include_once('../config/Conexion.php');

$data[1] = $_POST["direccion_"];
$data[2] = $_POST["tipo_prop"];
$data[3] = $_POST["sub_tipo_prop"];
$data[4] = $_POST["tipo_prom"];
$data[5] = $_POST["a_t"];

//form terreno
//$data[6] = $_POST["cod_zonificacion"];
$data[6] = $_POST["opciones_zoni_t"];

$data[7] = $_POST["tipo_suelo_tern"];

$data[8] = $_POST["params_tern"];
$data[9] = $_POST["frnte_tern"];
$data[10] = $_POST['id_client_v'];
//form terreno

$dni_cli = $_POST['dni_client_v'];


$cnx = new Conexion();
$cadena = $cnx->abrirConexion();

$oValor = new Valorizacion();
$r = $oValor->add_valorizacion_terreno($data, $cadena);

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