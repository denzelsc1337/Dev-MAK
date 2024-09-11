<?php
include_once('../Config/Conexion.php');
$cnx = new Conexion();
$cadena = $cnx->abrirConexion();
class solicitudes
{

    function __construct()
    {
        $this->selectorListSolicitudesAdmin = array();
        $this->selectorListSolicitudes = array();
    }


    public function add_Solicitudes_Prop($data, $cadena)
    {
        if ($data[2] == 1) {
            $query = "INSERT INTO `solicitudes_propiedades` (
                `tipo_solic`, `id_prop`,`distrito`, `direccion`, `fecha_reg`, `usuario`, `tipo_inmb`, `sub_tipo_inmb`
                )
                VALUES
                (
                '" . $data[1] . "',
                '" . $data[2] . "',
                '" . $data[3] . "',
                '" . $data[4] . "',
                NOW(), 
                '" . $data[5] . "',
                '" . $data[6] . "',
                '" . $data[7] . "'
                );";
        } else {
            $query = "INSERT INTO `solicitudes_propiedades` (
                `tipo_solic`, `id_prop`,`distrito`, `direccion`, `fecha_reg`, `usuario`, `tipo_inmb`
                )
                VALUES
                (
                '" . $data[1] . "',
                '" . $data[2] . "',
                '" . $data[3] . "',
                '" . $data[4] . "',
                NOW(), 
                '" . $data[5] . "',
                '" . $data[6] . "'
                );";
        }

        $result = mysqli_query($cadena, $query);
        // $result = "1";

        if ($result) {
            echo $result;
            return true;
        } else {
            echo "Error al insertar el registro: " . mysqli_error($cadena);
            return true;
        }
    }


    public function showListSolicitudesAdmin()
    {
        include_once('../config/Conexion.php');
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
                    ORDER BY sp.id_soli_prop DESC;";

        $resultado = mysqli_query($cadena, $query);

        while ($fila = mysqli_fetch_row($resultado)) {
            $this->selectorListSolicitudesAdmin[] = $fila;
        }


        $cnx->cerrarConexion($cadena);

        return $this->selectorListSolicitudesAdmin;
    }

    public function showListSolicitudes($asignado)
    {
        include_once('../config/Conexion.php');
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
                    WHERE sp.asignado = $asignado
                    ORDER BY sp.id_soli_prop DESC;";

        $resultado = mysqli_query($cadena, $query);

        while ($fila = mysqli_fetch_row($resultado)) {
            $this->selectorListSolicitudes[] = $fila;
        }


        $cnx->cerrarConexion($cadena);

        return $this->selectorListSolicitudes;
    }



    public function updateAsignado($asignado, $id_soli)
    {
        include_once('../config/Conexion.php');
        $cnx = new conexion();
        $cadena = $cnx->abrirConexion();

        $query = "UPDATE solicitudes_propiedades
                    SET asignado = $asignado
                    where id_soli_prop = $id_soli";

        $result = mysqli_query($cadena, $query);

        $cnx->cerrarConexion($cadena);

        return $result;
    }
}
