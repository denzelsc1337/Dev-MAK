<?php

$id_client_ = $_POST['id_client'];
$dni_u = $_POST['dni_client'];
$tipo_doc_ = $_POST['id_tipo_doc'];

$directorio = "../Documentos Legal/" . $dni_u . "/" . $tipo_doc_ . "/";





// echo $directorio;

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
?>

<?php

/*$id_client_ = $_POST['id_client'];
$dni_u = $_POST['dni_client'];
$tipo_doc_ = $_POST['id_tipo_doc'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mak";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


$id_client = $conn->real_escape_string($id_client_);
$dni_client = $conn->real_escape_string($dni_u);
$tipo_doc = $conn->real_escape_string($tipo_doc_);

$sql = "SELECT * FROM documents_clients
        WHERE id_client = '$id_client' and dni_client = '$dni_client' and tipo_doc = '$tipo_doc'";

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