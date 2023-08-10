<?php

$cod_solic = $_POST['id_solic_l'];
$dni_u = $_POST['dni_cli'];
$tipo_doc_ = $_POST['cod_tipo_doc'];


// Directorio donde se encuentran los archivos
$directorio = "../Solicitudes/".$cod_solic."/".$dni_u."/".$tipo_doc_."/";

$response = array();

echo $directorio;

if (is_dir($directorio)){
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


}else{
    $response['status_doc'] = "Carpeta no encontrada";
}

echo json_encode($response);

/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mak";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


$id_client = $conn->real_escape_string($id_client_);
$tipo_doc = $conn->real_escape_string($tipo_doc_);
$id_reg = $conn->real_escape_string($cod_solic);

$sql = "SELECT id_document, id_legal, file_destination, rutas_docs, file_name, status_doc
		from documents_clients dcl
		inner join docs_legal dl
		on dcl.id_client = dl.user_cod
		where dl.user_cod = '$id_client' and tipo_doc = '$tipo_doc' and id_legal = '$id_reg' ";

$result = $conn->query($sql);

$response =array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $archivo = array();
        $archivo['ruta'] = $row['file_destination'];
        $archivo['archivo'] = $row['file_name'];
        $archivo['estado'] = $row['status_doc'];

        $archivo['id_doc'] = $row['id_document'];

        $response['archivos'][] = $archivo;
    }
} else {
    $response['status_doc'] = "Archivo no encontrado";
}

$conn->close();

echo json_encode($response);*/


?>