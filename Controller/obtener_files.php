<?php


$dni_u = $_POST['usu_dni'];
$concepto_ = $_POST['_concept'];

$dir = '../Documentos Legal/'.$dni_u.'/'.$concepto_;


//agregar consulta a la bd para obtener su id y usarlo en el delete

$files = [];

if (!is_dir($dir)) {

} else {
    $fileNames = array_diff(scandir($dir), array('.', '..'));
    $files = array_values($fileNames);
}

echo json_encode($files);

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