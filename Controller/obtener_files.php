<?php

$id_client_ = $_POST['id_client'];
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

echo json_encode($response);


/*
$dir = '../Documentos Legal/'.$dni_u.'/'.$concepto_;


//agregar consulta a la bd para obtener su id y usarlo en el delete

$files = [];

if (!is_dir($dir)) {

} else {
    $fileNames = array_diff(scandir($dir), array('.', '..'));
    $files = array_values($fileNames);
}

echo json_encode($files);*/

/*if (!is_dir($dir)) {
    echo "Aun no se han subido archivos.";
}else{
    //se lista los archvos
    $files = scandir($dir);

    $files = array_diff($files, array('.', '..'));

    if (empty($files)) {
        echo "No se encontraron archivos.";
    }else{
        //imprmir los archivos
        foreach ($files as $each_file_) {
             echo $each_file_;
        }
    }
}*/



/*
$last_file = '';
if (!is_dir($dir)) {
    echo "Aun no se han subido archivos";
} else {
    // Obtener lista de todos los archivos en la carpeta
    $files = scandir($dir);

    $files = array_diff($files, array('.', '..'));

    if (empty($files)) {
        echo "no se encontraron archivos";
    } else {
        // Ordenar archivos por fecha de modificación
        usort($files, function ($a, $b) use ($dir) {
            return filemtime("$dir/$b") - filemtime("$dir/$a");
        });

        // Obtener el primer archivo de la lista (el más reciente)
        //$last_file = $files[0];
        $last_file = $files[0];
        echo $last_file;
    }
}*/
//echo $last_file;

?>