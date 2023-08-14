<?php 

$cod_solic = $_POST['id_solic_v'];
$dni_u = $_POST['dni_cli_v'];

$directorio = "../Valorizaciones/".$cod_solic."/".$dni_u."/docs_val/";

$response = array(); 

if (!is_dir($directorio)) {
    $response['status'] = "error";
    $response['mensaje'] = "Sin archivos";
} else {
    $archivos = scandir($directorio);

    $archivos = array_diff($archivos, array('.', '..'));

    if (count($archivos) == 0) {
        $response['status'] = "empty";
        $response['mensaje'] = "Sin archivos";
    } else {
        $response['status'] = "success";
        $response['files'] = array_values($archivos);
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>