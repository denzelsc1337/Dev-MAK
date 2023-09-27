<?php

/**
 *
 */
class cLegal
{

	function __construct()
	{
		$this->lst_solics_legal = array();
		$this->lst_solics_legal_cli = array();
		$this->data_legal = array();
		$this->details_legal = array();
	}



	public function save_solic_legal($data, $cadena)
	{
		$query = "INSERT INTO `docs_legal`(`nom_client`,`ape_client`, `dir_client`,`fecha_reg`, `user_cod`)
	                               VALUES ('" . $data[1] . "','" . $data[2] . "','" . $data[3] . "',now(),'" . $data[4] . "');";

		$result = mysqli_query($cadena, $query);
		return $result;
	}


	public function save_borrador_legal($data, $cadena)
	{
		/*include_once('../config/Conexion.php');
	    $cnx = new Conexion();
	    $cadena = $cnx->abrirConexion();*/

		$query = "INSERT INTO `docs_legal`( `nom_client`,`ape_client`, `dir_client`,`fecha_reg`, `user_cod`, `status_solic`)
	                               VALUES ('" . $data[1] . "','" . $data[2] . "','" . $data[3] . "',now(),'" . $data[4] . "', 30);";

		$result = mysqli_query($cadena, $query);
		return $result;
	}


	function upload_documents_clients($file_name, $file_type, $file_destination, $file_size, $file_ext, $tipo_doc, $id_client, $dni_client)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = "INSERT INTO `documents_clients`(`id_document`,`file_name`, `file_type`, `file_destination`, `file_size`, `file_ext`, `fecha_reg`,`tipo_doc`,`id_client`, `dni_client`)
        VALUES (	 null,
        		'" . $file_name . "',
                '" . $file_type . "',
                '" . $file_destination . "',
                '" . $file_size . "',
                '" . $file_ext . "',
                	 now(),
                '" . $tipo_doc . "',
                '" . $id_client . "',
            	'" . $dni_client . "');";
		/*$result = mysqli_query($cadena, $query);


        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
            echo "Se han insertado $num_rows filas correctamente";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }*/
		mysqli_query($cadena, $query);


		$cnx->cerrarConexion($cadena);
	}




	public function updt_solic_legal_($id_solic_l)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = "UPDATE docs_legal
				  set status_solic = 10
				  WHERE id_legal = '$id_solic_l'";

		$result = mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);
		return $result;

		/*$result = mysqli_query($cadena, $query);


        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
            echo "Se han insertado $num_rows filas correctamente";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }*/

		/*echo mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);*/
	}



	public function listadoSolicDocsLegal()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_legal, CONCAT(cs.nom_client,' ',cs.ape_client) as nom_client , dir_client, fecha_reg, status_solic,user_cod,dni_client, comentario
				FROM docs_legal dl
				inner join clientes_servicios cs
				on dl.user_cod = cs.id_client where not status_solic = 30";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->lst_solics_legal[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->lst_solics_legal;
	}

	public function listadoSolicDocsLegal_clients($id_client, $dni_client)
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_legal, CONCAT(dl.nom_client,' ', dl.ape_client) as nom_client, CONCAT(cs.nom_client,' ',cs.ape_client) as nom_client , dir_client, fecha_reg, status_solic,user_cod,dni_client,comentario
				FROM docs_legal dl
				inner join clientes_servicios cs
				on dl.user_cod = cs.id_client
				where dl.user_cod = $id_client and cs.dni_client = $dni_client";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->lst_solics_legal_cli[] = $fila;
		}


		$cnx->cerrarConexion($cadena);

		return $this->lst_solics_legal_cli;
	}

	public function get_data_legal($id_reg)
	{

		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT nom_client, ape_client, dir_client FROM docs_legal WHERE id_legal = '$id_reg'";

		$resultado = mysqli_query($cadena, $query);

		if (mysqli_num_rows($resultado) > 0) {
			while ($fila = mysqli_fetch_assoc($resultado)) {
				$this->data_legal = $fila;
			}
		}

		$cnx->cerrarConexion($cadena);

		return $this->data_legal;
	}

	function updateSolicLegalDocs($Id_solic, $coment)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = "UPDATE docs_legal
				  set comentario = '$coment'
				  WHERE id_legal = '$Id_solic'";

		$result = mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);
		return $result;

		/*$result = mysqli_query($cadena, $query);


        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
            echo "Se han insertado $num_rows filas correctamente";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }*/

		/*echo mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);*/
	}

	public function details_legal_solic($id_reg, $id_client)
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		//$query = "SELECT * FROM valorizacion WHERE id_valor =$id_reg";

		$query = "SELECT dl.id_legal, dl.nom_client, dl.ape_client, dl.dir_client, dl.user_cod, cs.dni_client, dl.status_solic,dl.comentario
		FROM docs_legal dl
		INNER JOIN clientes_servicios cs
		on cs.id_client = dl.user_cod 
		WHERE id_legal = $id_reg and user_cod = $id_client";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->details_legal[] = $fila;
		}


		$cnx->cerrarConexion($cadena);

		return $this->details_legal;
	}

	public function updt_legal_status($id_solic_l, $status)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = "UPDATE docs_legal
				  set status_solic = '$status'
				  WHERE id_legal = '$id_solic_l'";

		$result = mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);
		return $result;

		/*$result = mysqli_query($cadena, $query);


        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
            echo "Se han insertado $num_rows filas correctamente";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }*/

		/*echo mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);*/
	}
}
