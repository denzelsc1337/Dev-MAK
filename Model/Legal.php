<?php

/**
 *
 */
class cLegal
{

	function __construct()
	{
		$this->lst_docs_legal = array();
	}

	/*function upload_files_legal($file_name,$file_type, $file_destination, $file_size,$file_ext,$data )
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$Query = "INSERT INTO `docs_legal`(`file_name`, `file_type`,`file_destination`, `file_size`, `file_desc` ,
											   `file_ext`,`cod_doc_tipo_legl`,`user_cod`)
		VALUES ('".$file_name."',
				'".$file_type."',
				'".$file_destination."',
				'".$file_size."',
				'".$data[1]."',
				'".$file_ext."',
				'".$data[2]."',
				'".$data[3]."');";

		echo mysqli_query($cadena, $Query);
		$cnx->cerrarConexion($cadena);

	}*/

	function upload_files_legal($file_names, $file_types, $file_destinations, $file_sizes, $file_exts, $data)
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
	}


	public function listadoTiposDocsLegal(){
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT * FROM tipos_doc_legal";

		$resultado = mysqli_query($cadena, $query);

        while ($fila = mysqli_fetch_row($resultado)) {
            $this->lst_docs_legal[] = $fila;
        }

        $cnx->cerrarConexion($cadena);

        return $this->lst_docs_legal;

	}
}

 ?>