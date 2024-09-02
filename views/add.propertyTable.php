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

// Verificar si se recibió el array de archivos
if (isset($_POST['arrayFile'])) {
    $jsonString = $_POST['arrayFile'];
    $filesArray = json_decode($jsonString, true);

    // Verificar si el array es válido
    if ($filesArray && is_array($filesArray)) {
        if (isset($_FILES['table-inputFile'])) {
            foreach ($filesArray as $index => $file) {
                $target = isset($file['attr']) ? $file['attr'] : '';
                $name = isset($file['name']) ? $file['name'] : '';
                $type = isset($file['type']) ? $file['type'] : '';
                $size = isset($file['size']) ? $file['size'] : '';
                $lastModified = isset($file['lastModified']) ? $file['lastModified'] : '';

                // Crear la ruta de destino para el archivo
                echo $ruta = "../DocumentosPropiedad/" . $ID . "/" . $target . "/";
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

                // Procesar el archivo correspondiente
                if (isset($_FILES['table-inputFile']['tmp_name'][$index])) {
                    $file_name = $_FILES['table-inputFile']['name'][$index];
                    $file_tmp = $_FILES['table-inputFile']['tmp_name'][$index];

                    $destination = $ruta . basename($file_name);

                    // Mueve el archivo a la carpeta de destino
                    if (move_uploaded_file($file_tmp, $destination)) {
                        echo "Archivo subido exitosamente: " . $file_name . "<br>";
                    } else {
                        echo "Error al subir el archivo: " . $file_name . "<br>";
                    }
                } else {
                    echo "Error: No se encontró el archivo correspondiente a los datos proporcionados.<br>";
                }
            }
        } else {
            echo "Error: No se encontraron archivos en la solicitud.";
        }
    } else {
        echo "Error: No se pudo decodificar el JSON o no es un array válido.";
    }
} else {
    echo "No se recibió ningún archivo.";
}
