<?php

$ruta_archivo = $_POST['ruta_doc'];

$nombre_archivo_input = $_POST['ruta_archivo'];


$file_delete = $ruta_archivo . $nombre_archivo_input;


$archivo_eliminar = urldecode($file_delete);

if (unlink($archivo_eliminar)) {
    echo "archivo eliminado del directorio";
} else {
    echo "error al eliminar del directorio";
}


// $ruta_archivo = $_POST['ruta_doc'];
// $nombre_archivo_input = $_POST['ruta_archivo'];

// $file_delete = $ruta_archivo . $nombre_archivo_input;
// $archivo_eliminar = urldecode($file_delete);

// if (unlink($archivo_eliminar)) {
//     echo "Archivo eliminado del directorio";

//     // Escanea el directorio después de eliminar el archivo
//     $directorio = $ruta_archivo; // Reemplaza con la ruta de tu directorio
//     $archivos = scandir($directorio);

//     if ($archivos !== false) {
//         echo "Archivos restantes en el directorio:<br>";
//         foreach ($archivos as $archivo) {
//             if ($archivo != "." && $archivo != "..") {
//                 echo $archivo . "<br>";
//                 // Aquí puedes agregar lógica adicional si es necesario
//             }
//         }
//     } else {
//         echo "No se pudieron listar los archivos en el directorio.";
//     }
// } else {
//     echo "Error al eliminar el archivo del directorio";
// }
