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

$data[25] = $_POST["ubic_depa"];
$data[26] = $_POST["vista_depa"];
$data[27] = $_POST["acabado_depa"];
$data[28] = $_POST['id_client_v'];
$data[29] = $_POST["coment_valr"];
//form depa

$dni_cli = $_POST['dni_client_v'];


$cnx = new Conexion();
$cadena = $cnx->abrirConexion();

$oValor = new Valorizacion();

$r = $oValor->add_valorizacion_depa($data, $cadena);


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