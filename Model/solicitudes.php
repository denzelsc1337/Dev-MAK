<?php
include_once('../Config/Conexion.php');
$cnx = new Conexion();
$cadena = $cnx->abrirConexion();
class solicitudes
{

    function __construct()
    {
        $this->selectorListSolicitudes = array();
    }


    public function add_Solicitudes_Prop($data, $cadena)
    {
        $query = "INSERT INTO `solicitudes_propiedades` (
            `tipo_solic`, `id_prop`, `distrito`, `direccion`, `fecha_reg`, `usuario`, `asignado`, `tipo_inmb`, `sub_tipo_inmb`, `status`, `estado`) 
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
            '" . $data[7] . "',
            '" . $data[8] . "',
            '" . $data[9] . "',
            '" . $data[10] . "',
            '" . $data[11] . "',
            );";

        // INSERT INTO `solicitudes_propiedades` (`id_soli_prop`, `tipo_solic`, `id_prop`, `distrito`, `direccion`, `fecha_reg`, `usuario`, `asignado`, `tipo_inmb`, `sub_tipo_inmb`, `status`, `estado`) 
        // VALUES (NULL, '2', '17', NULL, NULL, '2024-09-06 17:40:06', '1', '1', '1', '4', '1', '1');

        $result = mysqli_query($cadena, $query);

        if ($result) {
            // echo $result;
            return true;
        } else {
            echo "Error al insertar el registro: " . mysqli_error($cadena);
            return true;
        }
    }


    public function showListSolicitudes()
    {
        include_once('../config/Conexion.php');
        $cnx = new conexion();
        $cadena = $cnx->abrirConexion();

        $query = "SELECT * FROM solicitudes_propiedades";

        $resultado = mysqli_query($cadena, $query);

        while ($fila = mysqli_fetch_row($resultado)) {
            $this->selectorListSolicitudes[] = $fila;
        }


        $cnx->cerrarConexion($cadena);

        return $this->selectorListSolicitudes;
    }
}
