<?php
include_once('../Config/Conexion.php');

$tipo_zoni = $_POST['caracter'];

$cnx = new conexion();
$cadena = $cnx->abrirConexion();

$query = "SELECT * FROM tipo_zonificacion WHERE tipo_zona LIKE '$tipo_zoni%'";

$resultado = mysqli_query($cadena, $query);

$datos_array = array();

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $datos_array[] = $row;
    }
} else {
    $datos_array[] = array("id_zona" => "-", "tipo_zona" => "No se encontraron opciones para la zonificacion ingresada.");
}

$datos_json = json_encode($datos_array, JSON_UNESCAPED_SLASHES);
echo $datos_json;

$cnx->cerrarConexion($cadena);
