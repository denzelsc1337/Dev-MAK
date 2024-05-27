<?php
require_once('../Model/Legal.php');

$id_reg = $_POST["id_new_file"];
$dni_cli = $_POST["id_new_reg"];
$ruta = $_POST["_ruta_new_"];

// Directorio de destino
$target_dir = $ruta;

// Crear directorio si no existe
if (!file_exists($target_dir)) {
    if (!mkdir($target_dir, 0777, true)) {
        echo "Error al crear directorio.";
        exit;
    }
}

// Obtener información del archivo cargado
$archivo_seleccionado = $_FILES["new_files"];
$target_file = $target_dir . basename($archivo_seleccionado["name"]);

// Verificar si el archivo ya existe y eliminarlo
if (file_exists($target_file)) {
    if (!unlink($target_file)) {
        echo "Error al eliminar el archivo existente.";
        exit;
    }
}

// Mover el archivo cargado a la ruta de destino
if (move_uploaded_file($archivo_seleccionado["tmp_name"], $target_file)) {
    echo "El archivo " . basename($archivo_seleccionado["name"]) . " ha sido reemplazado correctamente.";
} else {
    echo "Error al cargar el archivo.";
}
