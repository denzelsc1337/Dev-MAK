<?php
// Obtener valores de $_POST
$dni_cli = isset($_POST['dni_cli']) ? $_POST['dni_cli'] : '';
$tipo_file = isset($_POST['dataTarget']) ? $_POST['dataTarget'] : '';

// Crear la ruta de destino para el archivo
$ruta = "../DocumentosPropiedad/" . $dni_cli . "/" . $tipo_file . "/";

// Verificar si el directorio existe, y si no, crearlo
if (!file_exists($ruta)) {
    mkdir($ruta, 0777, true);
}

// Verificar si se subió un archivo y obtener sus propiedades
if (isset($_FILES['table-inputFile'])) {
    $file_name = $_FILES['table-inputFile']['name'];
    $tmp_name = $_FILES['table-inputFile']['tmp_name'];
    $file_up_name = time() . "_" . $file_name;

    // Definir el directorio destino completo para el archivo
    $directorio_destino = $ruta . $file_up_name;

    // Mover el archivo subido al directorio destino
    if (move_uploaded_file($tmp_name, $directorio_destino)) {
        echo 'El archivo se subió correctamente.';
    } else {
        echo 'Hubo un error al subir el archivo.';
    }
} else {
    echo 'No se recibió ningún archivo.';
}
