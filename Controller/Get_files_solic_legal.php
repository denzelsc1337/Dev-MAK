<?php

$cod_solic = $_POST['id_solic_l'];
$dni_u = $_POST['dni_cli'];
$tipo_doc_ = $_POST['cod_tipo_doc'];

$id_cli = $_POST['id_cli_lgl'];
$id_tipo_doc = $_POST['id_tipo_doc'];

// print_r($_POST);


// Directorio donde se encuentran los archivos
$directorio = "../Solicitudes/" . $cod_solic . "/" . $dni_u . "/" . $tipo_doc_ . "/";

$response = array();

if (is_dir($directorio)) {

    $archivos = scandir($directorio);


    foreach ($archivos as $archivo) {
        // ignorar archivos '.' y '..'
        if ($archivo !== '.' && $archivo !== '..') {

            $archivo_info = array();
            $archivo_info['ruta'] = $directorio;
            $archivo_info['archivo'] = $archivo;

            $archivo_info['estado'] = 'estado_desconocido';

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mak";

            $dni_ = $dni_u;
            $tipo_doc = $id_tipo_doc;
            $id_reg = $cod_solic;

            $conn = new mysqli($servername, $username, $password, $dbname);


            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }
            //echo "id_client: $id_client, tipo_doc: $tipo_doc, id_reg: $id_reg, archivo: $archivo"; // Agregar esta línea

            $sql = "SELECT id_document, id_legal, file_name, status_doc, tipo_usu_cod
                        FROM documents_clients dcl
                        INNER JOIN docs_legal dl ON dcl.id_client = dl.user_cod
                        INNER JOIN clientes_servicios cs ON cs.id_client = dl.user_cod
                        WHERE dcl.dni_client = '$dni_' AND tipo_doc = '$tipo_doc' AND id_legal = '$id_reg' 
                        AND file_name = '$archivo'
                        GROUP BY file_name";

            //echo "Consulta SQL: $sql<br>";

            $result = $conn->query($sql);


            if ($result->num_rows > 0) {

                $response['status_doc'] = "Archivos encontrados";

                while ($row = $result->fetch_assoc()) {


                    $db_info = array();
                    $db_info['id_document'] = $row['id_document'];
                    $db_info['id_legal'] = $row['id_legal'];
                    $db_info['file_name'] = $row['file_name'];
                    $db_info['status_doc_'] = $row['status_doc'];
                    $db_info['tipo_usu_cod'] = $row['tipo_usu_cod'];


                    $archivo_info['id_doc_'] = $row['id_document'];
                    $archivo_info['estado'] = $row['status_doc'];

                    $response['base_de_datos'][] = $db_info;
                }
            } else {
                //echo $archivo;
                $response['status_doc_'] = "No se encontraron archivos en la base de datos.";
            }

            $conn->close();

            $response['archivos'][] = $archivo_info;
        }
    }

    if (empty($response['archivos'])) {
        $response['status_doc'] = "Archivo no encontrado.";
    }
} else {
    $response['status_doc'] = "Carpeta no encontrada.";
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
