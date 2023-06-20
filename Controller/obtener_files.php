<?php

$dni_u = $_POST['usu_dni'];
$concepto_ = $_POST['_concept'];

$dir = '../Documentos Legal/'.$dni_u.'/'.$concepto_;

//echo $dir;
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
}
//echo $last_file;

?>