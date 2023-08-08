<?php

$id_client_ = $_POST['id_client'];
$tipo_doc_ = $_POST['id_tipo_doc'];
$cod_solic = $_POST['id_solic_l'];


$servername = "localhost";
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

echo json_encode($response);


?>