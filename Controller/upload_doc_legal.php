<?php
require_once('../Model/Legal.php');

$id_reg = $_POST["id_reg_lgl"];
$dni_cli = $_POST["dni_solic_lgl"];

$target_dir = "../Informes Legal/{$id_reg}/{$dni_cli}/";
// $target_dir = "../Informes Legal/{$id_reg}/{$dni_cli}/docs_lgl/";

if (!file_exists($target_dir)) {
    if (!mkdir($target_dir, 0777, true)) {
        echo "Error al crear directorio.";
        exit;
    }
}

$archivos_seleccionados = $_FILES["legal_files"];
$archivos_cont = count($archivos_seleccionados['name']);

if ($archivos_cont > 0) {
    for ($i = 0; $i < $archivos_cont; $i++) {
        $nombre_archivo = $archivos_seleccionados['name'][$i];
        $archivo_temporal = $archivos_seleccionados['tmp_name'][$i];
        $ruta_archivo = $target_dir . $nombre_archivo;

        if (move_uploaded_file($archivo_temporal, $ruta_archivo)) {
            echo "El archivo '{$nombre_archivo}' se subió con éxito.";
        } else {
            echo "Error al subir el archivo '{$nombre_archivo}'.";
        }
    }
} else {
    echo "Ningún archivo seleccionado.";
}
