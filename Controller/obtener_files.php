<?php
$id_client = $_POST['id_client'];
$dni_client = $_POST['dni_client'];
$id_tipo_doc = $_POST['id_tipo_doc'];
$docCode = $_POST['bla'];

// print_r($_POST);


// Directorio donde se encuentran los archivos
$directorio = "../borradores/" . $id_client . "/" . $dni_client . "/" . $docCode . "/";

// $directorio = $ruta_docs;


$response = array();

if (is_dir($directorio)) {
    // Obtener la lista de archivos en el directorio
    $archivos = scandir($directorio);

    foreach ($archivos as $archivo) {
        // Ignorar archivos '.' y '..'
        if ($archivo !== '.' && $archivo !== '..') {
            // Aquí puedes agregar lógica para filtrar los archivos basados en los valores de $id_client_, $dni_u y $tipo_doc_

            $archivo_info = array();
            $archivo_info['ruta'] = $directorio;
            $archivo_info['archivo'] = $archivo;
            // Puedes establecer el estado del archivo como desees
            $archivo_info['estado'] = 'estado_desconocido';

            $response['archivos'][] = $archivo_info;
        }
    }

    if (empty($response['archivos'])) {
        $response['status_doc'] = "Archivo no encontrado";
    }
} else {
    $response['status_doc'] = "Carpeta no encontrada";
}

echo json_encode($response);
