<?php
include_once('../Config/Conexion.php');
require_once('../Config/security.php');
require_once('../Controller/controladorListar.php');

$user = $_SESSION['id_usu'];
$area = $_SESSION['area_cod'];

function showSolic()
{
    include_once('../Config/Conexion.php');
    $cnx = new conexion();
    $cadena = $cnx->abrirConexion();

    $query = "SELECT 
                    id_soli_prop, 
                    CASE tipo_solic
                        WHEN 1 THEN 'VALORIZACIÓN'
                        WHEN 2 THEN 'LEGAL' 
                        ELSE 'OTRO' 
                    END AS tipo_solic,
                    id_prop, distrito, direccion, fecha_reg, 
                    u.cod_usu,
                    asignado,
                    CASE tipo_inmb 
                        WHEN 1 THEN 'DEPARTAMENTO'
                        WHEN 2 THEN 'CASA'
                        WHEN 3 THEN 'CASA DE PLAYA'
                        WHEN 4 THEN 'CASA DE CAMPO'
                        WHEN 5 THEN 'TERRENO / LOTE'
                        WHEN 6 THEN 'TERRENO AGRICOLA'
                        WHEN 7 THEN 'OFICINA'
                        WHEN 8 THEN 'HOTEL'
                        WHEN 9 THEN 'LOCAL COMERCIAL'
                        WHEN 10 THEN 'LOCAL INDUSTRIAL'
                        ELSE 'OTRO'
                    END AS tipo_inmb,
                    CASE sub_tipo_inmb 
                        WHEN 1 THEN 'FLAT'
                        WHEN 2 THEN 'DÚPLEX'
                        WHEN 3 THEN 'TRÍPLEX'
                        WHEN 4 THEN 'PENT-HOUSE'
                        ELSE 'OTRO'
                    END AS sub_tipo_inmb,
                    status, estado
                    FROM 
                    solicitudes_propiedades sp
                    INNER JOIN usuarios u ON sp.usuario = u.id_usu
                    WHERE sp.tipo_solic = 2 -- Solicitud a Legal
                    ORDER BY sp.id_soli_prop DESC;";
    $resultado = mysqli_query($cadena, $query);

    $json = array();

    while ($row = mysqli_fetch_array($resultado)) {
        $json[] = array(
            // 'rol' => $row['id_rol'],
            'id_soli_prop' => $row['id_soli_prop'],
            'tipo_solic' => $row['tipo_solic'],
            'id_prop' => $row['id_prop'],
            'distrito' => $row['distrito'],
            'direccion' => $row['direccion'],
            'fecha_reg' => $row['fecha_reg'],
            'cod_usu' => $row['cod_usu'],
            'asignado' => $row['asignado'],
            'tipo_inmb' => $row['tipo_inmb'],
            'sub_tipo_inmb' => $row['sub_tipo_inmb'],
            'status' => $row['status'],
            'estado' => $row['estado'],
        );
    }

    $jsonstring = json_encode($json);
    // print_r($json[]);

    echo $jsonstring;
}

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
            'id_usu' => $row['id_usu'],
            'nombre_usu' => $row['nombre_usu']
        );
    }

    // Convierte el array a JSON
    echo json_encode($json);
}

function showSolicAsig($user)
{
    include_once('../Config/Conexion.php');
    $cnx = new conexion();
    $cadena = $cnx->abrirConexion();

    // print_r($_POST);

    $query = "SELECT 
                    id_soli_prop, 
                    CASE tipo_solic
                        WHEN 1 THEN 'VALORIZACIÓN'
                        WHEN 2 THEN 'LEGAL' 
                        ELSE 'OTRO' 
                    END AS tipo_solic,
                    id_prop, distrito, direccion, fecha_reg, 
                    u.cod_usu,
                    asignado,
                    CASE tipo_inmb 
                        WHEN 1 THEN 'DEPARTAMENTO'
                        WHEN 2 THEN 'CASA'
                        WHEN 3 THEN 'CASA DE PLAYA'
                        WHEN 4 THEN 'CASA DE CAMPO'
                        WHEN 5 THEN 'TERRENO / LOTE'
                        WHEN 6 THEN 'TERRENO AGRICOLA'
                        WHEN 7 THEN 'OFICINA'
                        WHEN 8 THEN 'HOTEL'
                        WHEN 9 THEN 'LOCAL COMERCIAL'
                        WHEN 10 THEN 'LOCAL INDUSTRIAL'
                        ELSE 'OTRO'
                    END AS tipo_inmb,
                    CASE sub_tipo_inmb 
                        WHEN 1 THEN 'FLAT'
                        WHEN 2 THEN 'DÚPLEX'
                        WHEN 3 THEN 'TRÍPLEX'
                        WHEN 4 THEN 'PENT-HOUSE'
                        ELSE 'OTRO'
                    END AS sub_tipo_inmb,
                    status, estado
                    FROM 
                    solicitudes_propiedades sp
                    INNER JOIN usuarios u ON sp.usuario = u.id_usu
                    WHERE sp.tipo_solic = 2 -- Solicitud a Legal
                    AND sp.asignado = $user
                    ORDER BY sp.id_soli_prop DESC;";
    $resultado = mysqli_query($cadena, $query);

    $json = array();

    while ($row = mysqli_fetch_array($resultado)) {
        $json[] = array(
            // 'rol' => $row['id_rol'],
            'id_soli_prop' => $row['id_soli_prop'],
            'tipo_solic' => $row['tipo_solic'],
            'id_prop' => $row['id_prop'],
            'distrito' => $row['distrito'],
            'direccion' => $row['direccion'],
            'fecha_reg' => $row['fecha_reg'],
            'cod_usu' => $row['cod_usu'],
            'asignado' => $row['asignado'],
            'tipo_inmb' => $row['tipo_inmb'],
            'sub_tipo_inmb' => $row['sub_tipo_inmb'],
            'status' => $row['status'],
            'estado' => $row['estado'],
        );
    }

    $jsonstring = json_encode($json);
    // print_r($json[]);

    echo $jsonstring;
}


function documentsRead()
{
    // Ruta de la carpeta que deseas leer
    $folderPath = 'ruta/a/tu/carpeta';

    if (is_dir($folderPath)) {
        // Abrir la carpeta
        $files = scandir($folderPath);

        // Filtrar los archivos para excluir '.' y '..'
        $files = array_diff($files, array('.', '..'));

        // Devolver los archivos como un array JSON
        echo json_encode(array_values($files));
    } else {
        // En caso de que no se encuentre la carpeta, devolver un error
        echo json_encode(['error' => 'Carpeta no encontrada']);
    }
}




if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];

    // Llama a la función correspondiente
    switch ($accion) {
        case 'showSolic':
            showSolic();
            break;
        case 'selectorUsersXArea':
            selectorUsersXArea($user, $area);
            break;
        case 'showSolicAsig':
            showSolicAsig($user);
            break;
        default:
            echo json_encode(['error' => 'Acción no válida']);
            break;
    }
} else {
    echo json_encode(['error' => 'No se especificó ninguna acción']);
}
