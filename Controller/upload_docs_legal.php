<?php

$data[1] = 'test';
$data[2] = $_POST["id_doc_type"];
$data[3] = $_POST["id_usu"];

$file = $_FILES["fileToUpload"];

$dni = $_POST["usu_dni"];

$concepto = 'test';

$file_name = $file["name"];
$file_tmp = $file["tmp_name"];
$file_size = $file["size"];
$file_error = $file["error"];
$file_type = $file["type"];

$file_ext = explode('.', $file_name);
$file_ext = strtolower(end($file_ext));

$file_desc = pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_FILENAME);
$file_ext = pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION);

$allowed = array('txt', 'jpg', 'jpeg', 'png', 'pdf', 'docx');

if (in_array($file_ext, $allowed)) {
    if ($file_error === 0) {
        if ($file_size <= 2097152) {
            $file_name_new = uniqid('', true) . '.' . $file_ext;
            $file_destination = '../Documentos_Legal/' . $dni . '/' . $concepto . '/';

            if (!file_exists($file_destination)) {
                mkdir($file_destination, 0777, true);
            }

            $target_file = $file_destination . basename($_FILES["fileToUpload"]["name"]);

            if (move_uploaded_file($file_tmp, $target_file)) {
                require_once('../Model/Legal.php');
                $olegal = new cLegal();

                // Modificar la llamada a la función del modelo con los nuevos parámetros
                $u = $olegal->upload_files_legal($file_name_new, $file_type, $file_destination, $file_size, $file_ext, $data);
                ?>
                <META http-equiv='Refresh' content='0.2; URL=../Legal/InfoLegal.php'>;
                <script type="text/javascript">
                    alert("Archivo subido");
                </script>
                <?php
            } else {
                echo "Ocurrió un error al subir el archivo.";
            }
        } else {
            echo "Tamaño de archivo muy grande. Tamaño máximo: 2MB.";
        }
    } else {
        echo "Hubo un error al cargar el archivo.";
    }
} else {
    echo "Tipo de archivo no permitido. Tipos permitidos: txt, jpg, jpeg, png, pdf.";
}
?>
