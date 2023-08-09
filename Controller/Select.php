<?php

function selectorTipoProp(){
    include_once('../Config/Conexion.php');
	$cnx = new Conexion();
	$cadena = $cnx->abrirConexion();

    $query = "SELECT * FROM `tipo_inmuebles` WHERE `id_tipo_inmb` <> -1";

    $result = mysqli_query($cadena, $query);

    $json = array();

    while ($row = mysqli_fetch_array($result)) {
        $json [] = array(
            'cod_tipo_inm' => $row['id_tipo_inmb'],
            'tipo' => $row['tipo_inmb']
        );
    }

    $jsonstring = json_encode($json);

    echo $jsonstring;

}

function obtenerSubtipos_prop($codTipo){
        include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

        $query = "SELECT id_sub_tipo_inmb,sub_tipo_inmb from sub_tipo_inmuebles subtip
        INNER JOIN tipo_inmuebles tipo_inmue
        on subtip.cod_tipo_inmb = tipo_inmue.id_tipo_inmb
        where tipo_inmue.id_tipo_inmb = '$codTipo' and id_sub_tipo_inmb <> -1";

        $result = mysqli_query($cadena, $query);

        // Verifica si la consulta SQL se ejecutó correctamente
	    if (!$result) {
	        die('Error al ejecutar la consulta SQL: ' . mysqli_error($cadena));
	    }

        $jsonstring = array();

        while ($row = mysqli_fetch_array($result)) {
            $jsonstring [] = array(
            	'id_sub' => $row['id_sub_tipo_inmb'],
                'nom_sub' => $row['sub_tipo_inmb']
            );
        }
        $jsonstring = json_encode($jsonstring);
        echo $jsonstring;

}

function obtener_tipos_zonificacion($codTipo_in){
        include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

        $query = "SELECT id_zona,tipo_zona from tipo_zonificacion zn
        INNER JOIN tipo_inmuebles tipo_inmue
        on zn.cod_tipo_inmb = tipo_inmue.id_tipo_inmb
        where tipo_inmue.id_tipo_inmb = '$codTipo_in' and id_zona <> -1";

        $result = mysqli_query($cadena, $query);

        // Verifica si la consulta SQL se ejecutó correctamente
	    if (!$result) {
	        die('Error al ejecutar la consulta SQL: ' . mysqli_error($cadena));
	    }

        $jsonstring = array();

        while ($row = mysqli_fetch_array($result)) {
            $jsonstring [] = array(
            	'id_zn' => $row['id_zona'],
                'nom_zn' => $row['tipo_zona']
            );
        }

        $jsonstring = json_encode($jsonstring);
        echo $jsonstring;

}

    if (isset($_POST['cod_tipo'])) {
        $codTipo = $_POST['cod_tipo'];
        obtenerSubtipos_prop($codTipo);
    }elseif(isset($_POST['codTipo_i'])){
    	$codTipo_in = $_POST['codTipo_i'];
        obtener_tipos_zonificacion($codTipo_in);
    }else{
        selectorTipoProp();
    }
?>