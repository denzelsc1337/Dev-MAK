<?php 


/**
 * 
 */
class Valorizacion
{
	
	function __construct()
	{
		$this->selectorTypes_prop = array();
		$this->selector_sub_Types_prop = array();
		
		$this->selector_promo = array();

		$this->selector_ubic = array();
		$this->selector_vista = array();
		$this->selector_acabado = array();

		$this->selector_zonificacion = array();
		$this->selector_suelo = array();
	}

	public function add_valorizacion_casa($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = "INSERT INTO `valorizacion`(`id_valor`,`direccion`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`,`cod_tipo_prom`,
													`area_terreno`, `area_construida`,`antiguedad`,

												`sala_comedor`,`sala`,`comedor`,`cocina`, `amoblado`, `piscina_prop`,

												`cant_dorm`,`dormitorio_banho`,

												`cant_banho`, `banho_visita`,

												`cuarto_serv`,`banho_serv`,
												`estacionamiento`, `deposito`,
												`cod_ubi`, `cod_vista`, `cod_acabado`)

						 VALUES(null, '".$data[1]."', '".$data[2]."', '".$data[3]."','".$data[4]."',
						 	'".$data[5]."', '".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."',
						 	'".$data[11]."', '".$data[12]."','".$data[13]."','".$data[14]."','".$data[15]."','".$data[16]."',
						 	'".$data[17]."','".$data[18]."','".$data[19]."','".$data[20]."','".$data[21]."','".$data[22]."',
						 	'".$data[23]."','".$data[24]."');";

		/*
		$result = mysqli_query($cadena, $query);

        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }

		*/
		echo mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);


	}

	public function add_valorizacion_depa($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = "INSERT INTO `valorizacion`(`id_valor`,`direccion`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`,`cod_tipo_prom`,
													`area_construida`, `area_ocupada`,`antiguedad`,

												`sala_comedor_dep`,`sala_dep`,`comedor_dep`,`cocina_dep`, `amob_dep`, `cant_dorm_dep`,

												`dormitorio_banho_dep`,`cant_banho_dep`,`banho_visita_dep`,

												`cuarto_serv_dep`, `banho_serv_dep`,`estac_dep`,`deposito_dep`,

												`ascensor_dep`,`ascensor_dir_dep`,
												`pisos_edif_dep`, `piso_dep`,

												`cod_ubi`, `cod_vista`, `cod_acabado`)

						 VALUES(null, '".$data[1]."', '".$data[2]."', '".$data[3]."','".$data[4]."',
						 	'".$data[5]."', '".$data[6]."','".$data[7]."',

						 	'".$data[8]."','".$data[9]."','".$data[10]."','".$data[11]."', '".$data[12]."','".$data[13]."',

						 	'".$data[14]."','".$data[15]."','".$data[16]."',

						 	'".$data[17]."','".$data[18]."','".$data[19]."','".$data[20]."',

						 	'".$data[21]."','".$data[22]."',
						 	'".$data[23]."','".$data[24]."',

						 	'".$data[25]."','".$data[26]."','".$data[27]."');";

		/*
		$result = mysqli_query($cadena, $query);

        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }

		*/
		echo mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);


	}

	public function add_valorizacion_terreno($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = "INSERT INTO `valorizacion`(`id_valor`,`direccion`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`,`cod_tipo_prom`,`area_terreno`,

												`cod_zonificacion`,`cod_tipo_suelo`,

												`param_terreno`,`frent_terreno`)

						 VALUES(null, '".$data[1]."', '".$data[2]."', '".$data[3]."','".$data[4]."','".$data[5]."',

						 			  '".$data[6]."','".$data[7]."',

						 			  '".$data[8]."','".$data[9]."')";

		/*
		$result = mysqli_query($cadena, $query);

        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }

		*/
		echo mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);
	}

	public function add_valorizacion_oficina($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = "INSERT INTO `valorizacion`(`id_valor`,`direccion`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`,`cod_tipo_prom`,
												`area_construida`,`area_ocupada`,`antiguedad`,

												`cod_acabado`,`cod_zonificacion`,`cod_vista`,

												`piso_ofi`,`cochera_ofi`,
												`ascensor_ofi`, `aire_ofi`)

						 VALUES(null, '".$data[1]."', '".$data[2]."', '".$data[3]."','".$data[4]."',
						 			  '".$data[5]."','".$data[6]."','".$data[7]."',

						 			  '".$data[8]."','".$data[9]."','".$data[10]."',

						 			  '".$data[11]."','".$data[12]."',
						 			  '".$data[13]."','".$data[14]."')";

		/*
		$result = mysqli_query($cadena, $query);

        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }
		*/

		echo mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);
	}

	public function add_valorizacion_local_industrial($data)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = "INSERT INTO `valorizacion`(`id_valor`,`direccion`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`,`cod_tipo_prom`,
												`area_terreno`,`area_construida`,`antiguedad`,

												`cod_acabado`,`cod_tipo_suelo`,

												`frente_lcl_ind`,`nave_lcl_ind`)

						 VALUES(null, '".$data[1]."', '".$data[2]."', '".$data[3]."','".$data[4]."',
						 			  '".$data[5]."','".$data[6]."','".$data[7]."',

						 			  '".$data[8]."','".$data[9]."',
						 			  '".$data[10]."','".$data[11]."')";

		/*
		$result = mysqli_query($cadena, $query);

        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }
		*/

		echo mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);
	}

	public function selectorType_props()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_tipo_inmb, tipo_inmb from tipo_inmuebles where id_tipo_inmb <> -1";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selectorTypes_prop[] = $fila;
		}
		$cnx->cerrarConexion($cadena);

		return $this->selectorTypes_prop;
	}

	public function selector_sub_Type_props()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_sub_tipo_inmb, sub_tipo_inmb from sub_tipo_inmuebles";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selector_sub_Types_prop[] = $fila;
		}
		$cnx->cerrarConexion($cadena);

		return $this->selector_sub_Types_prop;
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

		$query = "SELECT id_ubicacion, tipo_ubic from ubicacion where id_ubicacion <> -1";

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

		$query = "SELECT id_vista, tipo_vista from tipo_vista where id_vista <> -1";

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

		$query = "SELECT id_acabado, tipo_acabado from tipo_acabado where id_acabado <> -1";

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

		$query = "SELECT id_zona, tipo_zona from tipo_zonificacion where id_zona <> -1";

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

		$query = "SELECT id_tipo_suelo, tipo_suelo from tipo_suelo where id_tipo_suelo <> -1";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->selector_suelo[] = $fila;
		}
		$cnx->cerrarConexion($cadena);

		return $this->selector_suelo;
	}
}



?>