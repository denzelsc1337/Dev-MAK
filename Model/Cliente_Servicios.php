<?php 

/**
 * 
 */
class Cliente_Servicio
{
	
	function __construct()
	{
		$this->selectorTypes_Cl = array();
	}

	function add_Client_service($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$corredor_cod = isset($data[9]) && !empty($data[9]) ? $data[9] : 'No es Corredor';

		$query = "INSERT INTO `clientes_servicios`(`id_client`,`dni_client`, `nom_client`, `ape_client`,`telef_client`,
													`email_client`,`usu_client`,`pass_client`,`tipo_client_service_cod`,
													`corredor_cod`) 
						 VALUES(null, '".$data[1]."', '".$data[2]."', '".$data[3]."','".$data[4]."', 
						 	'".$data[5]."', '".$data[6]."','".$data[7]."','".$data[8]."','".$corredor_cod."');";
		$result = mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);
		return $result;
		
	}

	public function selectorType_Client_Service()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_tipo_client_s, nombre_tipo_client from tipo_client_service";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selectorTypes_Cl[] = $fila;
		}
		$cnx->cerrarConexion($cadena);

		return $this->selectorTypes_Cl;
	}
}











 ?>