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

	function upload_files_legal($file_name,$file_type, $file_destination, $file_size,$file_ext,$data )
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