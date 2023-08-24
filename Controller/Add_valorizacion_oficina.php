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
$data[16] = $_POST["id_client_v"];
$data[17] = $_POST["coment_valr"];
//form oficina


$dni_cli = $_POST['dni_client_v'];


$cnx = new Conexion();
$cadena = $cnx->abrirConexion();

$oValor = new Valorizacion();

$r = $oValor->add_valorizacion_oficina($data, $cadena);


if ($r) {

    $id_registro = mysqli_insert_id($cadena);

    $archivos_selecc = $_FILES["inpt-file-valo"];
    $pu_s = $_FILES["fls_pu"];
    $cl_s = $_FILES["fls_cl"];



    //ruta fptps
    $main_ruta = "../Valorizaciones/" . $id_registro . "/" . $dni_cli . "/";

    //ruta docs
    $fotos_ruta = $main_ruta . "/fotos_val/";
    $ruta_pu = $main_ruta . "Documentos/PU/";
    $ruta_cl = $main_ruta . "Documentos/CL/";

    $uploadedFilesJson_PU = $_POST['uploadedFiles_PU'];
    $uploadedFiles_PU = json_decode($uploadedFilesJson_PU, true);

    $uploadedFilesJson_CL = $_POST['uploadedFiles_CL'];
    $uploadedFiles_CL = json_decode($uploadedFilesJson_CL, true);

    $uploadedPicturesJson = $_POST['uploadedPictures'];
    $uploadedPictures = json_decode($uploadedPicturesJson, true);


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

    $archivos_total = 0;
    $fotos_total = 0;
    //envio de las fotos a la carpeta
    $archivos_cont = count($archivos_selecc['name']);


    foreach ($uploadedPictures as $key => $filePic) {
        $nombresFotos = $filePic['name'];
        $picture = explode(",", $nombresFotos);

        for ($i = 0; $i < $archivos_cont; $i++) {
            $nombreFoto = $archivos_selecc["name"][$i];
            $ubicacion_save = $fotos_ruta . basename($archivos_selecc["name"][$i]);

            if (in_array($nombreFoto, $picture)) {
                if (move_uploaded_file($archivos_selecc["tmp_name"][$i], $ubicacion_save)) {
                    $fotos_total++;
                }
            }
        }
    }


    //envio de los pu a la carpeta
    $pu_archivos_cont = count($pu_s['name']);

    foreach ($uploadedFiles_PU as $key => $fileInfo_PU) {
        $nombresArchivos = $fileInfo_PU['name'];
        $filePU = explode(",", $nombresArchivos);

        for ($i = 0; $i < $pu_archivos_cont; $i++) {
            $nombreArchivo = $pu_s["name"][$i];
            $ubicacion_save = $ruta_pu . basename($pu_s["name"][$i]);

            if (in_array($nombreArchivo, $filePU)) {
                if (move_uploaded_file($pu_s["tmp_name"][$i], $ubicacion_save)) {
                    $archivos_total++;
                }
            }
        }
    }

    //envio de las cl a la carpeta
    $cl_archivos_cont = count($cl_s['name']);

    foreach ($uploadedFiles_CL as $key => $fileInfo_CL) {
        $nombresArchivos = $fileInfo_CL['name'];
        $filesCL = explode(",", $nombresArchivos);

        for ($i = 0; $i < $cl_archivos_cont; $i++) {
            $nombreArchivo = $cl_s["name"][$i];
            $ubicacion_save = $ruta_cl . basename($cl_s["name"][$i]);

            if (in_array($nombreArchivo, $filesCL)) {
                if (move_uploaded_file($cl_s["tmp_name"][$i], $ubicacion_save)) {
                    $archivos_total++;
                }
            }
        }
    }

    echo " -> total files " . $archivos_total . " archivos.";
    echo " -> total pictures " . $fotos_total . " archivos.";
} else {
    echo "Error al insertar el registro.";
}
?>