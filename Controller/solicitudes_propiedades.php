<?php
require_once('../Model/solicitudes.php');
include_once('../Config/Conexion.php');

// print_r($_POST);

$cnx = new Conexion();
$cadena = $cnx->abrirConexion();


$id = $_POST['idProp'];
$usu = $_POST['usuario'];

$oSoli = new solicitudes();
$r = $oSoli->updateAsignado($usu, $id);

if ($r) {
    echo "Success";
} else {
    echo "Error";
}
