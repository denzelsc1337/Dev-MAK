<?php
include_once('../Config/Conexion.php');
$cnx = new conexion();
$cadena = $cnx->abrirConexion();

// ID propiedad
$ID_prop = mysqli_query($cadena, "SELECT id_prop + 1 AS total_props FROM propiedades ORDER BY id_prop DESC LIMIT 1;");
$ID_object = mysqli_fetch_object($ID_prop);
if ($ID_object) {
    $ID = $ID_object->total_props;
} else {
    $ID = 1;
}
// ID propiedad


// Crear la ruta de destino para el archivo
echo $ruta = "../DocumentosPropiedad/" . $ID . "/Fotos/";
echo "\n";


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


if (isset($_FILES['inputFile'])) {
    foreach ($_FILES['inputFile']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['inputFile']['name'][$key];
        $file_tmp = $_FILES['inputFile']['tmp_name'][$key];

        $destination = $ruta . basename($file_name);

        // Mueve el archivo a la carpeta de destino
        if (move_uploaded_file($file_tmp, $destination)) {
            echo "Archivo subido exitosamente: " . $file_name . "<br>";
        } else {
            echo "Error al subir el archivo: " . $file_name . "<br>";
        }
    }
}
