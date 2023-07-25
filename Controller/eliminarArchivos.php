<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mak";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}


$id_document = $_POST['cod_doc_'];
$id_client = $_POST['id_client'];
$dni_client = $_POST['dni_client'];
$ruta_archivo = $_POST['ruta_doc'];
$nombre_archivo_input = $_POST['ruta_archivo'];


$id_document = mysqli_real_escape_string($conn, $id_document);
$id_client = mysqli_real_escape_string($conn, $id_client);
$dni_client = mysqli_real_escape_string($conn, $dni_client);
$ruta_archivo = mysqli_real_escape_string($conn, $ruta_archivo);

$nombre_archivo_input = mysqli_real_escape_string($conn, $nombre_archivo_input);


$nombre_archivo_ruta = basename($ruta_archivo);

if ($nombre_archivo_ruta !== $nombre_archivo_input) {
    die("El nombre del archivo proporcionado no coincide con el nombre en el input. Operación cancelada.");
}



$sql = "DELETE FROM documents_clients WHERE id_document = '$id_document' AND id_client = '$id_client' AND dni_client = '$dni_client'";

if (mysqli_query($conn, $sql)) {
    echo "Registro eliminado correctamente en la base de datos.<br>";
} else {
    echo "Error al eliminar el registro: " . mysqli_error($conn) . "<br>";
}

if (unlink($ruta_archivo)) {
    echo "Archivo eliminado correctamente del sistema de archivos.";
} else {
    echo "Error al eliminar el archivo.";
}

mysqli_close($conn);
?>