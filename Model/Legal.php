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

	/*function upload_files_legal($file_names, $file_types, $file_destinations, $file_sizes, $file_exts, $data)
	{
	    include_once('../config/Conexion.php');
	    $cnx = new Conexion();
	    $cadena = $cnx->abrirConexion();

	    $total_files = count($file_names);

	    for ($i = 0; $i < $total_files; $i++) {
	        $file_name = $file_names[$i];
	        $file_type = $file_types[$i];
	        $file_destination = $file_destinations[$i];
	        $file_size = $file_sizes[$i];
	        $file_ext = $file_exts[$i];

	        $Query = "INSERT INTO `docs_legal`(`file_name`, `file_type`, `file_destination`, `file_size`, `file_desc`, `file_ext`, `cod_doc_tipo_legl`, `user_cod`)
	        VALUES ('" . $file_name . "',
	                '" . $file_type . "',
	                '" . $file_destination . "',
	                '" . $file_size . "',
	                '" . $data[1] . "',
	                '" . $file_ext . "',
	                '" . $data[2] . "',
	                '" . $data[3] . "');";

	        mysqli_query($cadena, $Query);
	    }

	    $cnx->cerrarConexion($cadena);
	}*/


	public function listadoSolicDocsLegal(){
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_legal,dir_client, fecha_reg, status_doc FROM docs_legal";

		$resultado = mysqli_query($cadena, $query);

        while ($fila = mysqli_fetch_row($resultado)) {
            $this->lst_solics_legal[] = $fila;
        }

        $cnx->cerrarConexion($cadena);

        return $this->lst_solics_legal;

	}
}

 ?>