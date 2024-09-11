<?php
include_once('../Config/Conexion.php');
require_once('../Config/security.php');
require_once('../Controller/controladorListar.php');

$user = $_SESSION['id_usu'];
$area = $_SESSION['area_cod'];

function selectorUsersXArea($user, $area)
{
    include_once('../Config/Conexion.php');
    $cnx = new conexion();
    $cadena = $cnx->abrirConexion();

    // Sanitiza el input para prevenir inyección SQL
    $area = mysqli_real_escape_string($cadena, $area);

    // Corrige la consulta sin exponerla con echo
    $query = "SELECT id_usu, CONCAT(nom_usu, ' ', ape_usu) AS nombre_usu 
              FROM usuarios 
              WHERE area_cod = '$area' AND id_usu != $user";

    $resultado = mysqli_query($cadena, $query);

    // Verifica si la consulta tuvo éxito
    if (!$resultado) {
        die('Error en la consulta: ' . mysqli_error($cadena));
    }

    $json = array();

    while ($row = mysqli_fetch_array($resultado)) {
        $json[] = array(
            'id' => $row['id_usu'],
            'desc' => $row['nombre_usu']
        );
    }

    // Cierra la conexión
    // $cnx->cerrarConexion();

    // Convierte el array a JSON
    echo json_encode($json);
}

// Llama a la función
selectorUsersXArea($user, $area);
