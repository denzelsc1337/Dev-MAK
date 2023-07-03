<?php

/**
 *
 */
class cLegal
{

	function __construct()
	{
		$this->lst_solics_legal = array();
	}

	function save_solic_legal($rutas,$data )
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$Query = "INSERT INTO `docs_legal`(`id_legal`,`rutas_docs`, `nom_client`,`ape_client`, `dir_client`,`fecha_reg`, `user_cod`)
								   VALUES (null,'".$rutas."','".$data[1]."','".$data[2]."','".$data[3]."',now(),'".$data[4]."');";

		echo mysqli_query($cadena, $Query);
		$cnx->cerrarConexion($cadena);

	}

	function upload_documents_clients($file_name, $file_type, $file_destination, $file_size, $file_ext, $id_client,$dni_client)
	{
	    include_once('../config/Conexion.php');
	    $cnx = new Conexion();
	    $cadena = $cnx->abrirConexion();

        $query = "INSERT INTO `documents_clients`(`id_document`,`file_name`, `file_type`, `file_destination`, `file_size`, `file_ext`, `fecha_reg`, `id_client`, `dni_client`)
        VALUES (	 null,
        		'" . $file_name . "',
                '" . $file_type . "',
                '" . $file_destination . "',
                '" . $file_size . "',
                '" . $file_ext . "',
                	 now(),
                '" . $id_client. "',
            	'" . $dni_client. "');";

        /*$result = mysqli_query($cadena, $query);


        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
            echo "Se han insertado $num_rows filas correctamente";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }*/
       echo mysqli_query($cadena, $query);


	   $cnx->cerrarConexion($cadena);
	}


	public function listadoSolicDocsLegal(){
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_legal,dir_client, fecha_reg, status_solic FROM docs_legal";

		$resultado = mysqli_query($cadena, $query);

        while ($fila = mysqli_fetch_row($resultado)) {
            $this->lst_solics_legal[] = $fila;
        }

        $cnx->cerrarConexion($cadena);

        return $this->lst_solics_legal;

	}
}

 ?>