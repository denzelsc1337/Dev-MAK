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

        if ($result) {
            echo $result;
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
