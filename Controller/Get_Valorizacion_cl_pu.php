<?php 

$cod_solic = $_POST['id_solic_v'];
$dni_u = $_POST['dni_cli_v'];

$directorio = "../Valorizaciones/".$cod_solic."/".$dni_u."/Documentos/CL/";
$directorio_2 = "../Valorizaciones/".$cod_solic."/".$dni_u."/Documentos/PU/";

$response = array();
$response_2 = array();

//cl

if (!is_dir($directorio)) {
    $response['status'] = "error";
    $response['mensaje'] = "Sin fotos.";
} else {
    $archivos = scandir($directorio);

    $archivos = array_diff($archivos, array('.', '..'));

    if (count($archivos) == 0) {
        $response['status'] = "empty";
        $response['mensaje'] = "Sin fotos.";
    } else {
        $response['status'] = "success";
        $response['files'] = array_values($archivos);
    }
}


//pu

if (!is_dir($directorio_2)) {
    $response_2['status'] = "error";
    $response_2['mensaje'] = "Sin fotos.";
} else {
    $archivos_2 = scandir($directorio_2);

    $archivos_2 = array_diff($archivos_2, array('.', '..'));

    if (count($archivos_2) == 0) {
        $response_2['status'] = "empty";
        $response_2['mensaje'] = "Sin fotos.";
    } else {
        $response_2['status'] = "success";
        $response_2['files'] = array_values($archivos_2);
    }
}

header('Content-Type: application/json');
echo json_encode($response);
echo json_encode($response_2);
?>