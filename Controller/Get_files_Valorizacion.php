<?php

$cod_solic = $_POST['id_solic_v'];

$directorio = "../Valorizaciones/" . $cod_solic . "/docs_val/";

$response = array();

if (!is_dir($directorio)) {
    $response['status'] = "error";
    $response['mensaje'] = "Sin Archivos.";
} else {
    $archivos = scandir($directorio);

    $archivos = array_diff($archivos, array('.', '..'));

    if (count($archivos) == 0) {
        $response['status'] = "empty";
        $response['mensaje'] = "Sin Archivos.";
    } else {
        $response['status'] = "success";
        $response['archivos'] = array();

        foreach ($archivos as $archivo) {
            $archivoInfo = array(
                'nombre' => $archivo,
                'ruta' => $directorio . $archivo
            );
            $response['archivos'][] = $archivoInfo;
        }
    }
}


header('Content-Type: application/json');
echo json_encode($response);
