<?php 


/**
 * 
 */
class Valorizacion
{
	
	function __construct()
	{
		$this->selectorTypes_prop = array();
		$this->selector_promo = array();
	}

	function add_Valorizacion($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		

		$query = "INSERT INTO `valorizacion`(`id_valor`,`direccion`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`,`cod_tipo_prom`,
													`tipo_frente`,`cant_dorm`,`cant_banho`,`cant_cochera`,
													`dormitorio_banho`, `banho_visita`,`cuarto_visita`, `banho_servicio`,
													`banho_compl`, `piscina`) 
						 VALUES(null, '".$data[1]."', '".$data[2]."', '".$data[3]."','".$data[4]."', 
						 	'".$data[5]."', '".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."',
						 	'".$data[11]."', '".$data[12]."','".$data[13]."','".$data[14]."');";
						 	
		$result = mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);
		return $result;
		
	}

	public function selectorType_props()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_tipo_inmb, tipo_inmb from tipo_inmuebles";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selectorTypes_prop[] = $fila;
		}
		$cnx->cerrarConexion($cadena);

		return $this->selectorTypes_prop;
	}

	public function selector_type_promo()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_promo, tipo_promo from tipo_promocion";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selector_promo[] = $fila;
		}
		$cnx->cerrarConexion($cadena);

		return $this->selector_promo;
	}
}



 ?>