<?php
require_once('../Model/Legal.php');

$_id_new_file = $_POST["id_new_file"];
$_dni_new_reg = $_POST["dni_new_reg"];
$__estado_new_ = $_POST["_estado_new_"];
$_tipo_doc_ = $_POST["tipo_doc_"];

$ruta = $_POST["_ruta_new_"];

$target_dir = $ruta;

$nombre_tipo_doc = "";

switch ($_tipo_doc_) {
    case '1':
        $nombre_tipo_doc = "H_R";
        break;
    case '2':
        $nombre_tipo_doc = "P_U";
        break;
    case '3':
        $nombre_tipo_doc = "C_L";
        break;
    case '4':
        $nombre_tipo_doc = "DNI";
        break;
}

// Ruta a guardar el nuevo archivo
$target = "../Documentos Legal/" . $_dni_new_reg . "/" . $nombre_tipo_doc;

// Directorio de destino
$target_dir = $ruta;

// Crear directorio si no existe
if (!file_exists($target_dir)) {
    if (!mkdir($target_dir, 0777, true)) {
        echo "Error al crear directorio.";
        exit;
    }
}

// Eliminar todos los archivos en el directorio de destino
$files = glob($target_dir . '*'); // Obtener todos los archivos en el directorio
foreach ($files as $file) {
    if (is_file($file)) {
        if (!unlink($file)) {
            echo "Error al eliminar el archivo existente: " . $file;
            exit;
        }
    }
}

// Obtener información del archivo cargado
$archivo_seleccionado = $_FILES["new_files"];
$file = $target_dir . basename($archivo_seleccionado["name"]);


$fileName = $archivo_seleccionado['name'];

$fileType = $archivo_seleccionado['type'];
$fileSize = $archivo_seleccionado['size'];

$file_ext = explode('.', $file);
$file_ext = strtolower(end($file_ext));




// Mover el archivo cargado a la ruta de destino
if (move_uploaded_file($archivo_seleccionado["tmp_name"], $file)) {
    require_once('../Model/Legal.php');
    $olegal = new cLegal();

    // Modificar la llamada a la función del modelo con los nuevos parámetros
    $olegal->upload_documents_clients($fileName, $fileType, $target, $fileSize, $file_ext, $_tipo_doc_, $_id_new_file, $_dni_new_reg);
    echo "El archivo " . basename($archivo_seleccionado["name"]) . " ha sido reemplazado correctamente.";
} else {
    echo "Error al cargar el archivo.";
}
