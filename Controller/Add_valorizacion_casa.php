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
    // $pu_s = $_FILES["fls_pu"];
    // $cl_s = $_FILES["fls_cl"];

    $uploadedFilesJson_PU = $_POST['uploadedFiles_PU'];
    $uploadedFiles_PU = json_decode($uploadedFilesJson_PU, true);

    $uploadedFilesJson_CL = $_POST['uploadedFiles_CL'];
    $uploadedFiles_CL = json_decode($uploadedFilesJson_CL, true);


    $response = [];

    //ruta fptps
    $main_ruta = "../Valorizaciones/" . $id_registro . "/" . $dni_cli . "/";

    //ruta docs
    $fotos_ruta = $main_ruta . "/fotos_val/";
    $ruta_pu = $main_ruta . "Documentos/PU/";
    $ruta_cl = $main_ruta . "Documentos/CL/";


    // //envio de las fotos a la carpeta
    // $archivos_cont = count($archivos_selecc['name']);

    if (!file_exists($ruta_pu)) {
        mkdir($ruta_pu, 0777, true);
    }

    if (!file_exists($ruta_cl)) {
        mkdir($ruta_cl, 0777, true);
    }

    $archivos_total = 0;

    var_dump($uploadedFiles_PU);
    echo "-----------------------------------------------------";
    var_dump($uploadedFiles_CL);


    foreach ($uploadedFiles_PU as $key => $fileInfo) {
        $nombreArchivo = $fileInfo['name'];
        $rutaTemporal = $fileInfo['tmp_name'];
        echo $nombreArchivo;
        echo $rutaTemporal;
    }

    // foreach ($_FILES['fls_pu']['tmp_name'] as $key => $rutaTemporal) {
    //     $nombreArchivo = $uploadedFiles_PU['name'][$key];
    //     $rutaArchivoDestino =  $ruta_pu . $nombreArchivo;

    //     if (move_uploaded_file($rutaTemporal, $rutaArchivoDestino)) {
    //         // El archivo se ha movido exitosamente al directorio destino
    //     } else {
    //         // Error al mover el archivo
    //         error_log("Error al mover el archivo: $nombreArchivo");
    //     }
    // }

    // foreach ($_FILES['fls_cl']['tmp_name'] as $key => $rutaTemporal) {
    //     $nombreArchivo = $uploadedFiles_CL['name'][$key];
    //     $rutaArchivoDestino =  $ruta_pu . $nombreArchivo;

    //     if (move_uploaded_file($rutaTemporal, $rutaArchivoDestino)) {
    //         // El archivo se ha movido exitosamente al directorio destino
    //     } else {
    //         // Error al mover el archivo
    //         error_log("Error al mover el archivo: $nombreArchivo");
    //     }
    // }


    $response["success"] = true;
    // $response["message"] = "Total files uploaded: " . $archivos_total;

    echo json_encode($response);
} else {
    echo "Error al insertar el registro.";
}
