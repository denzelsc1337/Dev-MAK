<?php
$id_solic = $_POST['id_solic_l'];
$dni_u = $_POST['dni_client'];
$tipo_doc_ = $_POST['id_tipo_doc'];

// print_r($_POST);


// Directorio donde se encuentran los archivos
$directorio = "../borradores/" . $id_solic . "/" . $dni_u . "/" . $tipo_doc_ . "/";
// $directorio = "../borradores/" . $id_solic . "/" . $dni_u . "/" . $tipo_doc_ . "/";


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
            $archivo_info['tipo_doc'] = $tipo_doc_;
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
