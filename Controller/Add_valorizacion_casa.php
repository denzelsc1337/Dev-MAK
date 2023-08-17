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
$data[26] = $_POST['coment_valr'];
//form casa

$dni_cli = $_POST['dni_client_v'];



include_once('../config/Conexion.php');
$cnx = new Conexion();
$cadena = $cnx->abrirConexion();

$oValor = new Valorizacion();
$r = $oValor->add_valorizacion_casa($data, $cadena);


if ($r) {

    $id_registro = mysqli_insert_id($cadena);

    $archivos_selecc = $_FILES["inpt-file-valo"];
    $pu_s = $_FILES["fls_pu"];
    $cl_s = $_FILES["fls_cl"];

    //ruta fptps
    $main_ruta = "../Valorizaciones/".$id_registro."/".$dni_cli."/";

    //ruta docs
    $fotos_ruta = $main_ruta."/fotos_val/";
    $ruta_pu = $main_ruta."Documentos/PU/";
    $ruta_cl = $main_ruta."Documentos/CL/";
    

    if (!file_exists($fotos_ruta)) {
        mkdir($fotos_ruta, 0777, true);
    }

    if (!file_exists($ruta_pu)) {
        mkdir($ruta_pu, 0777, true);
    }

    if (!file_exists($ruta_cl)) {
        mkdir($ruta_cl, 0777, true);
    }

    set_time_limit(0);
  
    //envio de las fotos a la carpeta
  	$archivos_cont = count($archivos_selecc['name']);
  	$archivos_total = 0;


  	for ($i=0; $i < $archivos_cont ; $i++) { 
        $ubicacion_save = $fotos_ruta . basename($archivos_selecc["name"][$i]);
    	if (move_uploaded_file($archivos_selecc["tmp_name"][$i], $ubicacion_save)) {
	        $archivos_total++;
    	}
  	}

    //envio de los pu a la carpeta
    $pu_archivos_cont = count($pu_s['name']);

    for ($i=0; $i < $pu_archivos_cont ; $i++) { 
        $ubicacion_save = $ruta_pu . basename($pu_s["name"][$i]);
        if (move_uploaded_file($pu_s["tmp_name"][$i], $ubicacion_save)) {
            $archivos_total++;
        }
    }

    //envio de las cl a la carpeta
    $cl_archivos_cont = count($cl_s['name']);

    for ($i=0; $i < $cl_archivos_cont ; $i++) { 
        $ubicacion_save = $ruta_cl . basename($cl_s["name"][$i]);
        if (move_uploaded_file($cl_s["tmp_name"][$i], $ubicacion_save)) {
            $archivos_total++;
        }
    }

    echo "total files " . $archivos_total . " archivos.";

    $mensaje = array("tipo" => "nuevo_registro", "mensaje" => "Nuevo registro insertado");
    echo json_encode($mensaje);

} else {
    echo "Error al insertar el registro.";
}
?>
