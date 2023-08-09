<?php
include_once('../Config/Conexion.php');


if (isset($_POST['tipo_zoni_l'])) {
    $tipo_zoni = $_POST['tipo_zoni_l'];

    $cnx = new conexion();
    $cadena = $cnx->abrirConexion();

    $query = "SELECT * FROM tipo_zonificacion WHERE tipo_zona LIKE '$tipo_zoni%' and id_zona <> -1";

    $resultado = mysqli_query($cadena, $query);

    if ($resultado->num_rows > 0) {
        $options = '';

        
        while($row = $resultado->fetch_assoc()) {
            //$options .= $row["tipo_zona"] . "\n";
            $options .= '<option value="' . $row["id_zona"] . '">' . $row["tipo_zona"] . '</option>';
        }

        echo $options;
    } else {
        //echo "No se encontraron opciones para la zonificacion ingresada.";
        echo '<option value="">No se encontraron opciones para la zonificacion ingresada.</option>';
    }

    
    $cnx->cerrarConexion($cadena);
}
?>