<?php

$cod_solic = $_POST['id_solic_v'];
$dni_u = $_POST['dni_cli_v'];

$directorio_PU = "../Valorizaciones/" . $cod_solic . "/" . $dni_u . "/Documentos/PU/";

$directorio_CL = "../Valorizaciones/" . $cod_solic . "/" . $dni_u . "/Documentos/CL/";

$response = array();


//busqueda para el pu

$response_pu = array();

if (!is_dir($directorio_PU)) {
    $response_pu['status'] = "error";
    $response_pu['mensaje'] = "No se Encontraron Predios Urbanos";
} else {
    $archivos_pu = scandir($directorio_PU);

    $archivos_pu = array_diff($archivos_pu, array('.', '..'));

    if (count($archivos_pu) == 0) {
        $response_pu['status'] = "empty";
        $response_pu['mensaje'] = "No se Encontraron Predios Urbanos";
    } else {
        $response_pu['status'] = "success";
        $response_pu['files'] = array_values($archivos_pu);
    }
}

$response['pu'] = $response_pu;

//fin busqueda para el pu


//busqueda para el cl

$response_cl = array();

if (!is_dir($directorio_CL)) {
    $response_cl['status'] = "error";
    $response_cl['mensaje'] = "No se Encontraron Copias Literales";
} else {
    $archivos_cl  = scandir($directorio_CL);

    $archivos_cl  = array_diff($archivos_cl, array('.', '..'));

    if (count($archivos_cl) == 0) {
        $response_cl['status'] = "empty";
        $response_cl['mensaje'] = "No se Encontraron Copias Literales";
    } else {
        $response_cl['status'] = "success";
        $response_cl['files'] = array_values($archivos_cl);
    }
}

$response['cl'] = $response_cl;

//fin busqueda para el cl




header('Content-Type: application/json');
echo json_encode($response);
