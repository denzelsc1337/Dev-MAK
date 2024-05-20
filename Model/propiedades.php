<?php

class propiedades
{

    function __construct()
    {
        $this->selectorTypes_prop = array();
    }

    public function add_Propiedades($data, $cadena)
    {
        $query = "";

        $result = mysqli_query($cadena, $query);

        if ($result) {
            echo "OK";
            return true;
        } else {
            echo "Error al insertar el registro: " . mysqli_error($cadena);
            return true;
        }
    }
}
