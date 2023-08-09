<?php
require_once('../Model/Legal.php');
$oLegal = new cLegal();

if (isset($_POST['btn_save_solic'])) {

    $data[1] = $_POST["nom_cli_solic"];
    $data[2] = $_POST["ape_cli_solic"];
    $data[3] = $_POST["dir_cli_solic"];
    $data[4] = $_POST["id_user"];

    $dni_client = $_POST["dni_user_l"];

    include_once('../config/Conexion.php');

    $cnx = new Conexion();
    $cadena = $cnx->abrirConexion();

    $oLegal = new cLegal();
    $r = $oLegal->save_solic_legal($data,$cadena);

    if ($r) {

        $lastID = mysqli_insert_id($cadena);

        $carpeta_nueva = "../Solicitudes/" . $lastID."/";

        if (!file_exists($carpeta_nueva)) {
            mkdir($carpeta_nueva, 0777, true);
        }

        $carpeta_dnis = "../Documentos Legal/".$dni_client."/";

        $carpeta_destino = $carpeta_nueva . $dni_client; // Ruta completa de la carpeta de destino

        echo $carpeta_dnis;

        $mover_carpeta = glob($carpeta_dnis . '/*');

        if (!file_exists($carpeta_destino)) {
            rename($carpeta_dnis, $carpeta_destino); // Mueve la carpeta a la nueva ubicación
        }

        foreach ($mover_carpeta as $file) {
            if (is_file($file)) {
                $newFilePath = $carpeta_nueva . "/" . basename($file);
                rename($file, $newFilePath);
            }
        }

        ?>
        <script type="text/javascript"> alert("Solicitud guardada y carpeta creada") </script>
        <META http-equiv='Refresh' content='0.2; URL =../Legal/'>
        <?php
        //echo $carpeta_nueva;
    } else {
        ?>
        <script type="text/javascript"> alert("Error al guardar la solicitud") </script>
        <?php
    }
}




if(isset($_POST["btn_save_borrador"])) {


    $data[1] = $_POST["nom_cli_solic"];
    $data[2] = $_POST["ape_cli_solic"];
    $data[3] = $_POST["dir_cli_solic"];
    $data[4] = $_POST["id_user"];

    $dni_client = $_POST["dni_user_l"];

    include_once('../config/Conexion.php');

    $cnx = new Conexion();
    $cadena = $cnx->abrirConexion();

    $oLegal = new cLegal();
    $r = $oLegal->save_borrador_legal($data,$cadena);

    if ($r) {

        $lastID = mysqli_insert_id($cadena);

        $carpeta_nueva = "../borradores/" . $lastID."/";

        if (!file_exists($carpeta_nueva)) {
            mkdir($carpeta_nueva, 0777, true);
        }


        $carpeta_dnis = "../Documentos Legal/".$dni_client."/";

        $carpeta_destino = $carpeta_nueva . $dni_client; // Ruta completa de la carpeta de destino

        echo $carpeta_dnis;

        $mover_carpeta = glob($carpeta_dnis . '/*');

        if (!file_exists($carpeta_destino)) {
            rename($carpeta_dnis, $carpeta_destino); // Mueve la carpeta a la nueva ubicación
        }

        foreach ($mover_carpeta as $file) {
            if (is_file($file)) {
                $newFilePath = $carpeta_nueva . "/" . basename($file);
                rename($file, $newFilePath);
            }
        }
    }
}
?>