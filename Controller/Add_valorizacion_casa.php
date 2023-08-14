<?php
require_once('../Model/Valorizacion.php');

$data[1] = $_POST["direccion_"];

$data[2] = $_POST["tipo_prop"];
$data[3] = $_POST["sub_tipo_prop"];
$data[4] = $_POST["tipo_prom"];


$data[5] = $_POST["a_t"];
$data[6] = $_POST["a_c"];
$data[7] = $_POST["antig"];

//form casa
$data[8] =  isset($_POST['sala_com']) ? true : false;
$data[9] = isset($_POST['sala_']) ? true : false;
$data[10] = isset($_POST['comedor_']) ? true : false;
$data[11] = isset($_POST['cocina_']) ? true : false;
$data[12] = isset($_POST['amoblado_']) ? true : false;
$data[13] = isset($_POST['piscina_d']) ? true : false;

$data[14] = $_POST["cant_dorm"];
$data[15] = $_POST["cant_dorm_b_"];

$data[16] =  $_POST["cant_banho"];
$data[17] = isset($_POST['banho_vis']) ? true : false;

$data[18] = isset($_POST['cuarto_serv']) ? true : false;
$data[19] = isset($_POST['banho_serv']) ? true : false;

$data[20] = $_POST["cant_estac"];
$data[21] = isset($_POST['deposito_']) ? true : false;

$data[22] = $_POST["ubic_casa"];
$data[23] = $_POST["vista_casa"];
$data[24] = $_POST["acabado_casa"];
$data[25] = $_POST['id_client_v'];
//form casa

$dni_cli = $_POST['dni_client_v'];



include_once('../config/Conexion.php');
$cnx = new Conexion();
$cadena = $cnx->abrirConexion();

$oValor = new Valorizacion();
$r = $oValor->add_valorizacion_casa($data, $cadena);


if ($r) {

    $id_registro = mysqli_insert_id($cadena);

    $target_dir = "../Valorizaciones/".$id_registro."/".$dni_cli."/";


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
