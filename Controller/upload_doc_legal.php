<?php
require_once('../Model/Legal.php');


print_r($_POST);
print_r($_FILES);

$idProp = $_POST["idProp"];

$folderPath = "../DocumentosPropiedad/" . $idProp . "/Estudio/";;

if (!file_exists($folderPath)) {
    if (mkdir($folderPath, 0777, true)) {
        echo "Directorio creado: $folderPath\n";
    } else {
        die("Error al crear el directorio: $folderPath\n");
    }
} else {
    echo "Directorio ya existe: $folderPath\n";
}

$file = $_FILES["file"];



if (isset($_FILES['file'])) {
    // Obtener la información del archivo
    $fileName = basename($_FILES["file"]["name"]);
    $fileTmpPath = $_FILES["file"]["tmp_name"];
    $fileDestPath = $folderPath . $fileName;

    // Mover el archivo desde la ubicación temporal a la carpeta destino
    if (move_uploaded_file($fileTmpPath, $fileDestPath)) {
        echo "Archivo subido exitosamente: $fileDestPath\n";
    } else {
        echo "Error al mover el archivo al directorio: $fileDestPath\n";
    }
} else {
    echo "Error en la subida del archivo. Código de error: " . $_FILES["file"]["error"] . "\n";
}
