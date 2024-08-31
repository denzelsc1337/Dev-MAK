<?php
// // // // include_once('../Config/Conexion.php');
// // // // $cnx = new conexion();
// // // // $cadena = $cnx->abrirConexion();



// // // // // Obtener valores de $_POST
var_dump($_POST);
print_r($_FILES);
// // // // $archivos_seleccionados = $_FILES["legal_files"];
// // // // $archivos_cont = count($archivos_seleccionados['name']);

// // // // // ID propiedad
// // // // $ID_prop = mysqli_query($cadena, "SELECT id_prop + 1 AS total_props FROM propiedades ORDER BY id_prop DESC LIMIT 1;");

// // // // $ID_object  = mysqli_fetch_object($ID_prop);

// // // // if ($ID_object) {
// // // //     $ID = $ID_object->total_props;
// // // // } else {
// // // //     die("No se pudo obtener el ID de la propiedad.");
// // // // }
// // // // // ID propiedad

// // // // // Obtener los datos del arrayFile
// // // // // Target de los archivos (DNI, HR, PU, ETC)
// // // // if (isset($_POST['arrayFile'])) {
// // // //     // Obtener el valor del POST
// // // //     $jsonString = $_POST['arrayFile'];

// // // //     // Decodificar el string JSON en un array asociativo
// // // //     $filesArray = json_decode($jsonString, true);

// // // //     // Verificar si la decodificación fue exitosa
// // // //     if ($filesArray && is_array($filesArray)) {
// // // //         // Recorrer el array para obtener los atributos
// // // //         foreach ($filesArray as $file) {
// // // //             $target = isset($file['attr']) ? $file['attr'] : '';
// // // //             $name = isset($file['name']) ? $file['name'] : '';
// // // //             $type = isset($file['type']) ? $file['type'] : '';
// // // //             $size = isset($file['size']) ? $file['size'] : '';
// // // //             $lastModified = isset($file['lastModified']) ? $file['lastModified'] : '';

// // // //             // // Imprimir los atributos
// // // //             // echo "Attr: $target\n";
// // // //             // echo "Name: $name\n";
// // // //             // echo "Type: $type\n";
// // // //             // echo "Size: $size\n";
// // // //             // echo "Last Modified: $lastModified\n";
// // // //         }
// // // //     } else {
// // // //         echo "Error: No se pudo decodificar el JSON o no es un array válido.";
// // // //     }
// // // // } else {
// // // //     echo "No se recibió ningún archivo.";
// // // // }
// // // // // Target de los archivos (DNI, HR, PU, ETC)


// // // // // Crear la ruta de destino para el archivo
// // // // $ruta = "../DocumentosPropiedad/" . $ID . "/" . $target . "/";

// // // // // Verificar si el directorio existe, y si no, crearlo
// // // // if (!file_exists($ruta)) {
// // // //     if (mkdir($ruta, 0777, true)) {
// // // //         echo "Directorio creado: $ruta\n";
// // // //     } else {
// // // //         die("Error al crear el directorio: $ruta\n");
// // // //     }
// // // // } else {
// // // //     echo "Directorio ya existe: $ruta\n";
// // // // }

// // // // // Verificar si se subió un archivo y obtener sus propiedades

// // // // // var_dump($_FILES);



// include_once('../Config/Conexion.php');
// $cnx = new conexion();
// $cadena = $cnx->abrirConexion();

// // Obtener el ID de la propiedad (como en tu código anterior)
// $ID_prop = mysqli_query($cadena, "SELECT id_prop + 1 AS total_props FROM propiedades ORDER BY id_prop DESC LIMIT 1;");
// $ID_object  = mysqli_fetch_object($ID_prop);

// if ($ID_object) {
//     $ID = $ID_object->total_props;
// } else {
//     die("No se pudo obtener el ID de la propiedad.");
// }

// // Crear la ruta de destino para los archivos
// $ruta = "../DocumentosPropiedad/" . $ID . "/";
// if (!file_exists($ruta)) {
//     if (mkdir($ruta, 0777, true)) {
//         echo "Directorio creado: $ruta\n";
//     } else {
//         die("Error al crear el directorio: $ruta\n");
//     }
// } else {
//     echo "Directorio ya existe: $ruta\n";
// }

// // Procesar los archivos enviados (suponiendo que 'arrayFile' es el campo POST con los detalles)
// if (isset($_POST['arrayFile'])) {
//     $jsonString = $_POST['arrayFile'];
//     $filesArray = json_decode($jsonString, true);
//     // var_dump($filesArray);

//     if ($filesArray && is_array($filesArray)) {
//         foreach ($filesArray as $file) {
//             // var_dump($file);
//             if (isset($file['name'])) {
//                 //     $tmpName = $file['tmp_name'];
//                 $fileName = basename($file['name']);
//                 $targetFilePath = $ruta . $fileName;

//                 // Mover el archivo a la carpeta de destino
//                 if (move_uploaded_file($fileName, $targetFilePath)) {
//                     echo "Archivo subido exitosamente: $targetFilePath\n";
//                 } else {
//                     echo "Error al mover el archivo: $fileName\n";
//                 }
//             } else {
//                 echo "Datos de archivo incompletos en el array.\n";
//             }
//         }
//     } else {
//         echo "Error: No se pudo decodificar el JSON o no es un array válido.";
//     }
// } else {
//     echo "No se recibió ningún archivo.";
// }
