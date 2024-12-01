<?php
@session_start();
require_once('../Model/solicitudes.php');
include_once('../Config/Conexion.php');

// print_r($_POST);

$cnx = new Conexion();
$cadena = $cnx->abrirConexion();

$id_propiedad  = $_POST['dataId'];

$ID_object = mysqli_query($cadena, "SELECT cod_usu, cod_tipo_inmue, cod_sub_tipo_inmue, direccion, distrito FROM propiedades WHERE id_prop = $id_propiedad;");

if ($ID_object) {
    $ID_soli = mysqli_fetch_object($ID_object);

    if ($ID_soli) {
        // // Imprime valores específicos del objeto
        // echo "Usuario: " . $ID_soli->cod_usu . "\n";
        // echo "Tipo de Inmueble: " . $ID_soli->cod_tipo_inmue . "\n";
        // echo "Subtipo de Inmueble: " . $ID_soli->cod_sub_tipo_inmue . "\n";
        // echo "Dirección: " . $ID_soli->direccion . "\n";
        // echo "Distrito: " . $ID_soli->distrito . "\n";
    } else {
        echo "No se encontraron registros para el ID proporcionado.";
    }
} else {
    echo "Error en la consulta: " . mysqli_error($cadena);
}

$data[1] = $_POST['dataTarget'];
$data[2] = $id_propiedad;
$data[3] = $ID_soli->distrito;
$data[4] = $ID_soli->direccion;
$data[5] = $ID_soli->cod_usu;
$data[6] = $ID_soli->cod_tipo_inmue;
$data[7] = $ID_soli->cod_sub_tipo_inmue;


$oSoli = new solicitudes();
$r = $oSoli->add_Solicitudes_Prop($data, $cadena);

if ($r) {
    return $r;
} else {
    echo "Error al insertar el registro.";
}
