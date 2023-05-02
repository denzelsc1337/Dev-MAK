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

		$this->selector_ubic = array();
		$this->selector_vista = array();
		$this->selector_acabado = array();

		$this->selector_zonificacion = array();
		$this->selector_suelo = array();
	}

	public function add_Valorizacion($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$ubic = isset($data[20]) ? $data[20] : NULL;
	    $vista = isset($data[21]) ? $data[21] : NULL;
	    $acabado = isset($data[22]) ? $data[22] : NULL;

		$query = "INSERT INTO `valorizacion`(`id_valor`,`direccion`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`,`cod_tipo_prom`,
													`area_terreno`, `area_construida`, `area_ocupada`,`antiguedad`,

												`sala_comedor`,`sala`,`comedor`,`cocina`,`jardin_trasero`, 
												`cant_dorm`,`cant_banho`, 
												`cuarto_serv`,`banho_serv`, 
												`estacionamiento`, `deposito`, 
												`cod_ubi`, `cod_vista`, `cod_acabado`, 
												`dormitorio_banho`, `banho_visita`, 
												`pisos`, `amoblado`,


												`sala_comedor_dep`, `sala_dep`, `comedor_dep`,`cocina_dep`,`jardin_trasero_dep`,
												`cant_dorm_dep`, `cant_banho_dep`,
												`cuarto_serv_dep`,`banho_serv_dep`,
												`estac_dep`, `deposito_dep`,
												`dormitorio_banho_dep`, `banho_visita_dep`, `ascensor_dep`, `ascensor_dir_dep`,
												`pisos_edif_dep`, `piso_dep`, `amoblado_dep`, `piscina_dep`,

												`cod_zonificacion`, `cod_tipo_suelo`,`param_terreno`,`frent_terreno`,
												`izq_terreno`, `fondo_terreno`, `der_terreno`

												) 

						 VALUES(null, '".$data[1]."', '".$data[2]."', '".$data[3]."','".$data[4]."', 
						 	'".$data[5]."', '".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."',
						 	'".$data[11]."', '".$data[12]."','".$data[13]."','".$data[14]."','".$data[15]."','".$data[16]."'
						 	,'".$data[17]."','".$data[18]."','".$data[19]."','".$ubic."','".$vista."','".$acabado."'
						 	,'".$data[23]."','".$data[24]."','".$data[25]."','".$data[26]."'

						 	,'".$data[27]."','".$data[28]."','".$data[29]."','".$data[30]."','".$data[31]."'
						 	,'".$data[32]."','".$data[33]."','".$data[34]."','".$data[35]."','".$data[36]."'
						 	,'".$data[37]."','".$data[38]."','".$data[39]."','".$data[40]."','".$data[41]."'
						 	,'".$data[42]."','".$data[43]."','".$data[44]."','".$data[45]."'

						 	,'".$data[46]."','".$data[47]."','".$data[48]."','".$data[49]."'
						 	,'".$data[50]."','".$data[51]."','".$data[52]."');";
						 	


		echo mysqli_query($cadena, $query);


        $cnx->cerrarConexion($cadena);
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

	public function selector_type_ubi()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_ubicacion, tipo_ubic from ubicacion";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selector_ubic[] = $fila;
		}
		$cnx->cerrarConexion($cadena);

		return $this->selector_ubic;
	}

	public function selector_type_vista()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_vista, tipo_vista from tipo_vista";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selector_vista[] = $fila;
		}
		$cnx->cerrarConexion($cadena);

		return $this->selector_vista;
	}

	public function selector_type_acabado()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_acabado, tipo_acabado from tipo_acabado";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selector_acabado[] = $fila;
		}
		$cnx->cerrarConexion($cadena);

		return $this->selector_acabado;
	}

	public function selector_zonificacion()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_zona, tipo_zona from tipo_zonificacion";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selector_zonificacion[] = $fila;
		}
		$cnx->cerrarConexion($cadena);

		return $this->selector_zonificacion;
	}

	public function selector_type_suelo()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_tipo_suelo, tipo_suelo from tipo_suelo";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selector_suelo[] = $fila;
		}
		$cnx->cerrarConexion($cadena);

		return $this->selector_suelo;
	}
}



 ?>