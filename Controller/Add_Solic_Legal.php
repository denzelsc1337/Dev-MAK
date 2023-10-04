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
    $r = $oLegal->save_solic_legal($data, $cadena);

    if ($r) {

        $lastID = mysqli_insert_id($cadena);

        $carpeta_nueva = "../Solicitudes/" . $lastID . "/";

        if (!file_exists($carpeta_nueva)) {
            mkdir($carpeta_nueva, 0777, true);
        }

        $carpeta_dnis = "../Documentos Legal/" . $dni_client . "/";

        $carpeta_destino = $carpeta_nueva . $dni_client; // Ruta completa de la carpeta de destino

        //echo $carpeta_dnis;

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
        <script type="text/javascript">
            alert("Solicitud guardada y carpeta creada")
        </script>
        <!-- <META http-equiv='Refresh' content='0.2; URL =../Legal/'> -->
    <?php
        //echo $carpeta_nueva;
    } else {
    ?>
        <script type="text/javascript">
            alert("Error al guardar la solicitud")
        </script>
<?php
    }
}




if (isset($_POST['btn_updt_solic'])) {

    $id_solic = $_POST["id_legal_solic"];

    $dni = $_POST['dni_user_l'];

    $olegal = new cLegal();
    $r = $olegal->updt_solic_legal_($id_solic);
    // print_r($_POST);
    // echo $r;
    if ($r) {

        $carpeta_nueva = "../Solicitudes/" . $id_solic . "/";

        if (!file_exists($carpeta_nueva)) {
            mkdir($carpeta_nueva, 0777, true);
        }

        $carpeta_lyts = "../borradores/" . $id_solic . '/' . $dni . "/";

        $carpeta_destino = $carpeta_nueva . $dni; // Ruta completa de la carpeta de destino

        $mover_carpeta = glob($carpeta_lyts . '*');

        echo $test = implode(", ", $mover_carpeta);

        if (!file_exists($carpeta_destino)) {
            rename($carpeta_lyts, $carpeta_destino); // Mueve la carpeta a la nueva ubicación
        }

        foreach ($mover_carpeta as $file) {
            if (is_file($file)) {
                $newFilePath = $carpeta_nueva . "/" . basename($file);
                rename($file, $newFilePath);
            }
        }

        // actualizar el estado a pendiente // 10
        $oLegal = new cLegal();
        $r = $oLegal->updt_solic_legal_($id_solic);
    }
}


if (isset($_POST["btn_save_borrador"])) {

    $data[1] = $_POST["nom_cli_solic"];
    $data[2] = $_POST["ape_cli_solic"];
    $data[3] = $_POST["dir_cli_solic"];
    $data[4] = $_POST["id_user"];

    $dni_client = $_POST["dni_user_l"];

    include_once('../config/Conexion.php');

    $cnx = new Conexion();
    $cadena = $cnx->abrirConexion();

    $oLegal = new cLegal();
    $r = $oLegal->save_borrador_legal($data, $cadena);

    if ($r) {

        $lastID = mysqli_insert_id($cadena);

        $carpeta_nueva = "../borradores/" . $lastID . "/";

        if (!file_exists($carpeta_nueva)) {
            mkdir($carpeta_nueva, 0777, true);
        }


        $carpeta_dnis = "../Documentos Legal/" . $dni_client . "/";

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

if (isset($_POST["btn_updt_borrador"])) {
    $nom_cli_lyt = $_POST['nom_cli_solic'];
    $ape_cli_lyt = $_POST['ape_cli_solic'];
    $id_solic_l = $_POST['cod_reg_l'];

    include_once('../config/Conexion.php');

    $cnx = new Conexion();
    $cadena = $cnx->abrirConexion();

    $oLegal = new cLegal();
    $r = $oLegal->updt_lyt_legal_($nom_cli_lyt, $ape_cli_lyt, $id_solic_l);

    if ($r) {
        echo "Success";
    } else {
        echo "Error";
    }
}



?>