<?php

// if (isset($_POST["saveBtn"])) {
// var_dump($_FILES);


// Mostrar errores en PHP (solo para depuración, no en producción)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Obtener valores de $_POST
$dni_cli = isset($_POST['dni_cli']) ? $_POST['dni_cli'] : '';
$tipo_file = isset($_POST['dataTarget']) ? $_POST['dataTarget'] : '';

// Crear la ruta de destino para el archivo
$ruta = "../DocumentosPropiedad/" . $dni_cli . "/" . $tipo_file . "/";

// Verificar si el directorio existe, y si no, crearlo
if (!file_exists($ruta)) {
    if (mkdir($ruta, 0777, true)) {
        echo "Directorio creado: $ruta\n";
    } else {
        die("Error al crear el directorio: $ruta\n");
    }
} else {
    echo "Directorio ya existe: $ruta\n";
}

// Verificar si se subió un archivo y obtener sus propiedades
if (isset($_FILES['table-inputFile'])) {
    foreach ($_FILES['table-inputFile']['name'] as $key => $file_name) {
        $tmp_name = $_FILES['table-inputFile']['tmp_name'][$key];
        $error = $_FILES['table-inputFile']['error'][$key];
        $file_up_name = time() . "_" . $file_name;

        // Verificar si hubo algún error durante la subida del archivo
        if ($error !== UPLOAD_ERR_OK) {
            die("Error en la subida del archivo. Código de error: $error\n");
        }

        // Definir el directorio destino completo para el archivo
        $directorio_destino = $ruta . $file_up_name;

        // Mover el archivo subido al directorio destino
        if (move_uploaded_file($tmp_name, $directorio_destino)) {
            echo "El archivo se subió correctamente a: $directorio_destino\n";
        } else {
            $error_message = error_get_last();
            echo "Hubo un error al subir el archivo. Detalles del error: " . $error_message['message'] . "\n";
        }
    }
} else {
    echo "No se recibió ningún archivo.\n";
}
// }

// print_r($_POST);
