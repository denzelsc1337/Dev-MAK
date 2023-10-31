<?php

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

		$this->lst_valorizacion = array();
		$this->lst_valo_hist = array();

		$this->lst_zonificacion = array();

		$this->lst_valo_hist_user = array();

		$this->details_valo = array();

		$this->excel_data = array();
	}

	public function add_valorizacion_casa($data, $cadena)
	{
		/*include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();*/

		$query = "INSERT INTO `valorizacion`(`id_valor`,`direccion`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`,`cod_tipo_prom`,
													`area_terreno`, `area_construida`,`antiguedad`,

												`sala_comedor`,`sala`,`comedor`,`cocina`, `amoblado`, `piscina_prop`,

												`cant_dorm`,`dormitorio_banho`,

												`cant_banho`, `banho_visita`,

												`cuarto_serv`,`banho_serv`,

												`estacionamiento`, `deposito`,

												`cod_ubi`, `cod_vista`, `cod_acabado`,`cod_client`, `comentario` )

						 VALUES(null, '" . $data[1] . "',  '" . $data[2] . "', '" . $data[3] . "','" . $data[4] . "',
						 	'" . $data[5] . "', '" . $data[6] . "','" . $data[7] . "',

						 	'" . $data[8] . "','" . $data[9] . "','" . $data[10] . "','" . $data[11] . "', '" . $data[12] . "','" . $data[13] . "',

						 	'" . $data[14] . "','" . $data[15] . "',

						 	'" . $data[16] . "','" . $data[17] . "',

						 	'" . $data[18] . "','" . $data[19] . "',

						 	'" . $data[20] . "','" . $data[21] . "',

						 	'" . $data[22] . "','" . $data[23] . "','" . $data[24] . "', '" . $data[25] . "' ,  '" . $data[26] . "');";

		/*verificacion de error en la consulta*/

		// $result = mysqli_query($cadena, $query);

		// if ($result) {
		//     $num_rows = mysqli_affected_rows($cadena);
		// } else {
		//     echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
		// }

		/*verificacion de error en la consulta */

		/*echo mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);*/

		$result = mysqli_query($cadena, $query);

		if ($result) {
			echo "OK";
			return true;
		} else {
			echo "Error al insertar el registro: " . mysqli_error($cadena);
			return true;
		}
		//return $result;
	}

	public function add_valorizacion_depa($data, $cadena)
	{
		/*include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();*/

		$query = "INSERT INTO `valorizacion`(`id_valor`,`direccion`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`,`cod_tipo_prom`,
													`area_construida`, `area_ocupada`,`antiguedad`,

												`sala_comedor_dep`,`sala_dep`,`comedor_dep`,`cocina_dep`, `amob_dep`, `cant_dorm_dep`,

												`dormitorio_banho_dep`,`cant_banho_dep`,`banho_visita_dep`,

												`cuarto_serv_dep`, `banho_serv_dep`,`estac_dep`,`deposito_dep`,

												`ascensor_dep`,`ascensor_dir_dep`,
												`pisos_edif_dep`, `piso_dep`,

												`cod_ubi`, `cod_vista`, `cod_acabado`,`cod_client`,`comentario`)

						 VALUES(null, '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "','" . $data[4] . "',
						 	'" . $data[5] . "', '" . $data[6] . "','" . $data[7] . "',

						 	'" . $data[8] . "','" . $data[9] . "','" . $data[10] . "','" . $data[11] . "', '" . $data[12] . "','" . $data[13] . "',

						 	'" . $data[14] . "','" . $data[15] . "','" . $data[16] . "',

						 	'" . $data[17] . "','" . $data[18] . "','" . $data[19] . "','" . $data[20] . "',

						 	'" . $data[21] . "','" . $data[22] . "',
						 	'" . $data[23] . "','" . $data[24] . "',

						 	'" . $data[25] . "','" . $data[26] . "','" . $data[27] . "','" . $data[28] . "',
						 	'" . $data[29] . "');";

		/*verificacion de error en la consulta

		$result = mysqli_query($cadena, $query);

        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }

		verificacion de error en la consulta */

		/*echo mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);*/

		$result = mysqli_query($cadena, $query);

		if ($result) {
			echo "OK";
			return true;
		} else {
			echo "Error al insertar el registro: " . mysqli_error($cadena);
			return true;
		}
	}

	public function add_valorizacion_terreno($data, $cadena)
	{

		/*include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();*/

		$query = "INSERT INTO `valorizacion`(`id_valor`,`direccion`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`,`cod_tipo_prom`,

												`area_terreno`,`cod_zonificacion`,`cod_tipo_suelo`,

												`param_terreno`,`frent_terreno`,`cod_client`, `comentario`)

						 VALUES(null, '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "','" . $data[4] . "','" . $data[5] . "',

						 			  '" . $data[6] . "','" . $data[7] . "',

						 			  '" . $data[8] . "','" . $data[9] . "','" . $data[10] . "','" . $data[11] . "')";

		//verificacion de error en la consulta

		/*$result = mysqli_query($cadena, $query);

        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }*/

		//verificacion de error en la consulta

		/*echo mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);*/

		$result = mysqli_query($cadena, $query);

		if ($result) {
			echo "OK";
			return true;
		} else {
			echo "Error al insertar el registro: " . mysqli_error($cadena);
			return true;
		}
	}

	public function add_valorizacion_oficina($data, $cadena)
	{
		/*include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();*/

		$query = "INSERT INTO `valorizacion`(`id_valor`,`direccion`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`,`cod_tipo_prom`,
												`area_construida`,`area_ocupada`,`antiguedad`,

												`cod_acabado`,`cod_zonificacion`,`cod_vista`,

												`piso_ofi`,`cochera_ofi`,
												`ascensor_ofi`, `aire_ofi`, `cod_ubi`, `cod_client`,`comentario` )

						 VALUES(null, '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "','" . $data[4] . "',
						 			  '" . $data[5] . "','" . $data[6] . "','" . $data[7] . "',

						 			  '" . $data[8] . "','" . $data[9] . "','" . $data[10] . "',

						 			  '" . $data[11] . "','" . $data[12] . "',
						 			  '" . $data[13] . "','" . $data[14] . "','" . $data[15] . "','" . $data[16] . "',
						 			  '" . $data[17] . "')";

		/*verificacion de error en la consulta

		$result = mysqli_query($cadena, $query);

        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }

		verificacion de error en la consulta */

		$result = mysqli_query($cadena, $query);

		if ($result) {
			echo "OK";
			return true;
		} else {
			echo "Error al insertar el registro: " . mysqli_error($cadena);
			return true;
		}
	}

	public function add_valorizacion_local_comercial($data, $cadena)
	{
		/*include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();*/

		$query = "INSERT INTO `valorizacion`(`id_valor`,`direccion`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`,`cod_tipo_prom`,
												`area_construida`,`area_ocupada`,`antiguedad`,

												`cod_ubi`,`cod_acabado`,`cod_zonificacion`,

												`frente_lcl_com`,`cochera_lcl_com`, `piso_lcl_com`,
												`ascensor_lcl_com`,`aire_lcl_com`, `cod_client`,`comentario`)

						 VALUES(null, '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "','" . $data[4] . "',
						 			  '" . $data[5] . "','" . $data[6] . "','" . $data[7] . "',

						 			  '" . $data[8] . "','" . $data[9] . "','" . $data[10] . "',

						 			  '" . $data[11] . "','" . $data[12] . "','" . $data[13] . "',
						 			  '" . $data[14] . "','" . $data[15] . "','" . $data[16] . "',
						 			  '" . $data[17] . "')";

		/*verificacion de error en la consulta

		$result = mysqli_query($cadena, $query);

        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }

		verificacion de error en la consulta */

		/*echo mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);*/


		$result = mysqli_query($cadena, $query);

		if ($result) {
			echo "OK";
			return true;
		} else {
			echo "Error al insertar el registro: " . mysqli_error($cadena);
			return true;
		}
	}

	public function add_valorizacion_local_industrial($data, $cadena)
	{
		/*include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();*/

		$query = "INSERT INTO `valorizacion`(`id_valor`,`direccion`, `cod_tipo_inmue`, `cod_sub_tipo_inmue`,`cod_tipo_prom`,
												`area_terreno`,`area_construida`,`antiguedad`,

												`cod_acabado`,`cod_tipo_suelo`,`cod_ubi`,

												`frente_lcl_ind`,`nave_lcl_ind`, `cod_client`,`comentario`)

						 VALUES(null, '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "','" . $data[4] . "',
						 			  '" . $data[5] . "','" . $data[6] . "','" . $data[7] . "',

						 			  '" . $data[8] . "','" . $data[9] . "',
						 			  '" . $data[10] . "','" . $data[11] . "','" . $data[12] . "',
						 			  '" . $data[13] . "','" . $data[14] . "')";

		/*verificacion de error en la consulta

		$result = mysqli_query($cadena, $query);

        if ($result) {
            $num_rows = mysqli_affected_rows($cadena);
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($cadena);
        }

		verificacion de error en la consulta */

		/*echo mysqli_query($cadena, $query);
		$cnx->cerrarConexion($cadena);*/

		$result = mysqli_query($cadena, $query);

		if ($result) {
			echo "OK";
			return true;
		} else {
			echo "Error al insertar el registro: " . mysqli_error($cadena);
			return true;
		}
	}

	public function updt_valoc_doc($id_valo, $status)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = "UPDATE valorizacion
				  set estado_solicitud = '$status'
				  WHERE id_valor = '$id_valo'";

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

	public function updt_valoc_obs($id_valo, $obs)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = "UPDATE valorizacion
				  set obs = '$obs'
				  WHERE id_valor = '$id_valo'";

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

	public function updt_valoc_status($id_valo, $status)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = "UPDATE valorizacion
				  set estado_solicitud = '$status'
				  WHERE id_valor = '$id_valo'";

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

	public function update_doc_nom_valor($id_valo, $dni_client, $file_name)
	{
		include_once('../config/Conexion.php');
		$cnx = new Conexion();
		$cadena = $cnx->abrirConexion();

		$query = "UPDATE valorizacion
				  set nom_doc_valor = '$file_name'
				  WHERE id_valor = '$id_valo' and '$dni_client'";

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

	public function listadoValorizacion()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_valor, direccion, tipo_inmb, sub_tipo_inmb, tipo_promo, area_terreno, area_construida, area_ocupada
			from valorizacion val
			INNER JOIN tipo_inmuebles ti
			on val.cod_tipo_inmue = ti.id_tipo_inmb
			INNER JOIN sub_tipo_inmuebles sti
			on val.cod_sub_tipo_inmue = sti.id_sub_tipo_inmb
			INNER JOIN tipo_promocion tp
			on val.cod_tipo_prom = tp.id_promo
			WHERE estado_solicitud = 500";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->lst_valorizacion[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->lst_valorizacion;
	}

	public function list_Valo_Historico()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT id_valor,cs.dni_client, cs.nom_client, direccion, ti.tipo_inmb, sti.sub_tipo_inmb, tp.tipo_promo, area_terreno, area_construida, area_ocupada, 			 antiguedad, sala_comedor, sala, comedor, cocina, amoblado, piscina_prop, cant_dorm, dormitorio_banho, cant_banho, banho_visita, cuarto_serv,
						 banho_serv, estacionamiento, deposito, ub.tipo_ubic, tv.tipo_vista, ta.tipo_acabado, sala_comedor_dep, sala_dep, comedor_dep, cocina_dep,
						 amob_dep, cant_dorm_dep, dormitorio_banho_dep, cant_banho_dep, banho_visita_dep, cuarto_serv_dep, banho_serv_dep, estac_dep, deposito_dep,
						 ascensor_dep, ascensor_dir_dep, pisos_edif_dep, piso_dep,cod_zonificacion, cod_tipo_suelo, param_terreno, frent_terreno, izq_terreno,
						 fondo_terreno, der_terreno, piso_ofi, cochera_ofi, ascensor_ofi, aire_ofi, frente_lcl_com, cochera_lcl_com, piso_lcl_com, ascensor_lcl_com,
						 aire_lcl_com, frente_lcl_ind, nave_lcl_ind, estado_solicitud,cs.id_client
					FROM valorizacion vl
				 	LEFT JOIN clientes_servicios cs ON vl.cod_client = cs.id_client
					LEFT JOIN tipo_inmuebles ti ON vl.cod_tipo_inmue = ti.id_tipo_inmb
					LEFT JOIN sub_tipo_inmuebles sti ON vl.cod_sub_tipo_inmue = sti.id_sub_tipo_inmb
					LEFT JOIN tipo_promocion tp ON vl.cod_tipo_prom = tp.id_promo
					LEFT JOIN tipo_acabado ta ON vl.cod_acabado = ta.id_acabado
					LEFT JOIN tipo_vista tv ON vl.cod_vista = tv.id_vista
					LEFT JOIN ubicacion ub ON vl.cod_ubi = ub.id_ubicacion
					order by vl.id_valor desc;";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->lst_valo_hist[] = $fila;
		}


		$cnx->cerrarConexion($cadena);

		return $this->lst_valo_hist;
	}

	public function list_Valo_Historico_User($id_client, $dni_client)
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();


		$query = "SELECT id_valor, cs.nom_client, direccion, ti.tipo_inmb, sti.sub_tipo_inmb, tp.tipo_promo,
				estado_solicitud, nom_doc_valor, cs.id_client, cs.dni_client
				FROM valorizacion vl
				 LEFT JOIN clientes_servicios cs ON vl.cod_client = cs.id_client
					LEFT JOIN tipo_inmuebles ti ON vl.cod_tipo_inmue = ti.id_tipo_inmb
					LEFT JOIN sub_tipo_inmuebles sti ON vl.cod_sub_tipo_inmue = sti.id_sub_tipo_inmb
					LEFT JOIN tipo_promocion tp ON vl.cod_tipo_prom = tp.id_promo
					LEFT JOIN tipo_acabado ta ON vl.cod_acabado = ta.id_acabado
					LEFT JOIN tipo_vista tv ON vl.cod_vista = tv.id_vista
					LEFT JOIN ubicacion ub ON vl.cod_ubi = ub.id_ubicacion
				WHERE cs.id_client = $id_client AND cs.dni_client = $dni_client";

		/*$query = "SELECT id_valor, cs.nom_client, direccion, ti.tipo_inmb, sti.sub_tipo_inmb, tp.tipo_promo, area_terreno, area_construida, area_ocupada, antiguedad, sala_comedor, sala, comedor, cocina, amoblado, piscina_prop, cant_dorm, dormitorio_banho, cant_banho, banho_visita, cuarto_serv, banho_serv, estacionamiento, deposito, ub.tipo_ubic, tv.tipo_vista, ta.tipo_acabado, sala_comedor_dep, sala_dep, comedor_dep, cocina_dep, amob_dep, cant_dorm_dep, dormitorio_banho_dep, cant_banho_dep, banho_visita_dep, cuarto_serv_dep, banho_serv_dep, estac_dep, deposito_dep, ascensor_dep, ascensor_dir_dep, pisos_edif_dep, piso_dep
		cod_zonificacion, cod_tipo_suelo, param_terreno, frent_terreno, izq_terreno, fondo_terreno, der_terreno, piso_ofi, cochera_ofi, ascensor_ofi, aire_ofi, frente_lcl_com, cochera_lcl_com, piso_lcl_com, ascensor_lcl_com, aire_lcl_com, frente_lcl_ind, nave_lcl_ind, estado_solicitud, nom_doc_valor
		FROM valorizacion vl
		 INNER JOIN clientes_servicios cs ON vl.cod_client = cs.id_client
		 INNER JOIN tipo_inmuebles ti ON vl.cod_tipo_inmue = ti.id_tipo_inmb
		 INNER JOIN sub_tipo_inmuebles sti ON vl.cod_sub_tipo_inmue = sti.id_sub_tipo_inmb
		 INNER JOIN tipo_promocion tp ON vl.cod_tipo_prom = tp.id_promo
		 INNER JOIN ubicacion ub ON vl.cod_ubi = ub.id_ubicacion
		 INNER JOIN tipo_vista tv ON vl.cod_vista = tv.id_vista
		 INNER JOIN tipo_acabado ta ON vl.cod_acabado = ta.id_acabado
		WHERE cs.id_client = $id_client AND cs.dni_client = $dni_client";*/

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->lst_valo_hist_user[] = $fila;
		}


		$cnx->cerrarConexion($cadena);

		return $this->lst_valo_hist_user;
	}


	public function details_valorizacion($id_reg, $id_client, $dni_client)
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		//$query = "SELECT * FROM valorizacion WHERE id_valor =$id_reg";

		$query = "SELECT id_valor, CONCAT(cs.nom_client, ' ', cs.ape_client) as 'Cliente', direccion, ti.tipo_inmb, sti.sub_tipo_inmb, tp.tipo_promo, area_terreno, area_construida, area_ocupada, antiguedad, sala_comedor, sala, comedor, cocina, amoblado, piscina_prop, cant_dorm, dormitorio_banho, cant_banho, banho_visita, cuarto_serv, banho_serv, estacionamiento, deposito, ub.tipo_ubic, tv.tipo_vista, ta.tipo_acabado, sala_comedor_dep, sala_dep, comedor_dep, cocina_dep, amob_dep, cant_dorm_dep, dormitorio_banho_dep, cant_banho_dep, banho_visita_dep, cuarto_serv_dep, banho_serv_dep, estac_dep, deposito_dep, ascensor_dep, ascensor_dir_dep, pisos_edif_dep, piso_dep, tz.tipo_zona, ts.tipo_suelo, param_terreno, frent_terreno, izq_terreno, fondo_terreno, der_terreno, piso_ofi, cochera_ofi, ascensor_ofi, aire_ofi, frente_lcl_com, cochera_lcl_com, piso_lcl_com, ascensor_lcl_com, aire_lcl_com, frente_lcl_ind, nave_lcl_ind, estado_solicitud, comentario,obs 
		-- ,nom_doc_valor
		FROM valorizacion vl
		LEFT JOIN clientes_servicios cs ON vl.cod_client = cs.id_client
		LEFT JOIN tipo_inmuebles ti ON vl.cod_tipo_inmue = ti.id_tipo_inmb
		LEFT JOIN sub_tipo_inmuebles sti ON vl.cod_sub_tipo_inmue = sti.id_sub_tipo_inmb
		LEFT JOIN tipo_promocion tp ON vl.cod_tipo_prom = tp.id_promo
		LEFT JOIN tipo_acabado ta ON vl.cod_acabado = ta.id_acabado
		LEFT JOIN tipo_vista tv ON vl.cod_vista = tv.id_vista
		LEFT JOIN ubicacion ub ON vl.cod_ubi = ub.id_ubicacion
		LEFT JOIN tipo_zonificacion tz ON vl.cod_zonificacion = tz.id_zona
		LEFT JOIN tipo_suelo ts ON vl.cod_tipo_suelo = ts.id_tipo_suelo
		WHERE vl.id_valor =$id_reg and cs.id_client = $id_client and cs.dni_client = $dni_client";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->details_valo[] = $fila;
		}


		$cnx->cerrarConexion($cadena);

		return $this->details_valo;
	}


	// public function list_Valo_Historico()
	// {
	// 	include_once('../config/Conexion.php');
	// 	$cnx = new conexion();
	// 	$cadena = $cnx->abrirConexion();

	// 	$query = "SELECT id_valor, cs.nom_client, direccion, ti.tipo_inmb, sti.sub_tipo_inmb, tp.tipo_promo, area_terreno, area_construida, area_ocupada, antiguedad, sala_comedor, sala, comedor, cocina, amoblado, piscina_prop, cant_dorm, dormitorio_banho, cant_banho, banho_visita, cuarto_serv, banho_serv, estacionamiento, deposito, ub.tipo_ubic, tv.tipo_vista, ta.tipo_acabado, sala_comedor_dep, sala_dep, comedor_dep, cocina_dep, amob_dep, cant_dorm_dep, dormitorio_banho_dep, cant_banho_dep, banho_visita_dep, cuarto_serv_dep, banho_serv_dep, estac_dep, deposito_dep, ascensor_dep, ascensor_dir_dep, pisos_edif_dep, piso_dep
	// 	cod_zonificacion, cod_tipo_suelo, param_terreno, frent_terreno, izq_terreno, fondo_terreno, der_terreno, piso_ofi, cochera_ofi, ascensor_ofi, aire_ofi, frente_lcl_com, cochera_lcl_com, piso_lcl_com, ascensor_lcl_com, aire_lcl_com, frente_lcl_ind, nave_lcl_ind, estado_solicitud

	// 	FROM valorizacion vl
	// 	INNER JOIN clientes_servicios cs ON vl.cod_client = cs.id_client
	// 	INNER JOIN tipo_inmuebles ti ON vl.cod_tipo_inmue = ti.id_tipo_inmb
	// 	INNER JOIN sub_tipo_inmuebles sti ON vl.cod_sub_tipo_inmue = sti.id_sub_tipo_inmb
	// 	INNER JOIN tipo_promocion tp ON vl.cod_tipo_prom = tp.id_promo
	// 	INNER JOIN ubicacion ub ON vl.cod_ubi = ub.id_ubicacion
	// 	INNER JOIN tipo_vista tv ON vl.cod_vista = tv.id_vista
	// 	INNER JOIN tipo_acabado ta ON vl.cod_acabado = ta.id_acabado;";

	// 	// $query = "SELECT *
	// 	// FROM valorizacion ";



	// 	$resultado = mysqli_query($cadena, $query);

	// 	while ($fila = mysqli_fetch_row($resultado)) {
	// 		$filteredFields = array_filter($fila, function ($value) {
	// 			return $value !== null;
	// 		});

	// 		$this->lst_valo_hist[] = $fila;
	// 	}


	// 	$cnx->cerrarConexion($cadena);

	// 	return $this->lst_valo_hist;
	// }




	public function listadoZonificacion()
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		$query = "SELECT * FROM tipo_zonificacion";

		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->lst_zonificacion[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->lst_zonificacion;
	}

	public function data_excel_val($id)
	{
		include_once('../config/Conexion.php');
		$cnx = new conexion();
		$cadena = $cnx->abrirConexion();

		// $query = "SELECT 


		// -- casa
		// v.id_valor AS 'ID PROPIEDAD', CONCAT(cs.nom_client, ' ', cs.ape_client) AS 'ASESOR', ti.tipo_inmb AS 'TIPO DE INMUEBLE', tp.tipo_promo AS 'TIPO OPERACIÓN', v.direccion AS 'DIRECCIÓN', '' AS 'DISTRITO', '' AS 'LINK DE UBICACIÓN', 

		// (select _sti.sub_tipo_inmb from valorizacion inner join sub_tipo_inmuebles _sti on v.cod_sub_tipo_inmue = _sti.id_sub_tipo_inmb where ti.tipo_inmb = 'casa' limit 1) AS 'SUBTIPO DE INMUEBLE',

		// (select _ubi.tipo_ubic from valorizacion inner join ubicacion _ubi on v.cod_ubi = _ubi.id_ubicacion where ti.tipo_inmb = 'casa' limit 1) AS 'LOCALIZACIÓN',

		// (select _tz.tipo_zona from valorizacion inner join tipo_zonificacion _tz on v.cod_zonificacion = _tz.id_zona where ti.tipo_inmb = 'casa' limit 1) AS 'ZONIFICACIÓN',

		// (select '' from valorizacion where ti.tipo_inmb = 'casa' limit 1) AS 'PRECIO TENTATIVO',

		// (select v.area_terreno from valorizacion where ti.tipo_inmb = 'casa' limit 1) AS 'ÁREA DE TERRENO', 

		// (select v.area_construida from valorizacion where ti.tipo_inmb = 'casa' limit 1) AS 'ÁREA CONSTRUIDA', 

		// (select v.antiguedad from valorizacion where ti.tipo_inmb = 'casa' limit 1) AS 'ANTIGÜEDAD', 

		// (select _tv.tipo_vista from valorizacion inner join tipo_vista _tv on v.cod_vista = _tv.id_vista where ti.tipo_inmb = 'casa' limit 1) AS 'FRENTE',

		// (select '' from valorizacion where ti.tipo_inmb = 'casa' limit 1) AS 'PISO CASA',

		// (select v.cant_dorm from valorizacion where ti.tipo_inmb = 'casa' limit 1) AS 'DORMITORIO(S)',

		// (select v.cant_banho from valorizacion where ti.tipo_inmb = 'casa' limit 1) AS 'BAÑO(S)', 

		// (select v.estacionamiento from valorizacion where ti.tipo_inmb = 'casa' limit 1) AS 'ESTACIONAMIENTOS', 

		// case v.piscina_prop WHEN 1 THEN 'PISCINA' ELSE '' END AS 'OTROS', 
		// -- casa



		// -- departamento
		// (select _sti.sub_tipo_inmb from valorizacion inner join sub_tipo_inmuebles _sti on v.cod_sub_tipo_inmue = _sti.id_sub_tipo_inmb where ti.tipo_inmb = 'departamento' limit 1) AS 'SUBTIPO DE INMUEBLE',

		// (select _ubi.tipo_ubic from valorizacion inner join ubicacion _ubi on v.cod_ubi = _ubi.id_ubicacion where ti.tipo_inmb = 'departamento' limit 1) AS 'LOCALIZACIÓN',

		// (select _ta.tipo_acabado from valorizacion inner join tipo_acabado _ta on v.cod_acabado = _ta.id_acabado where ti.tipo_inmb = 'departamento' limit 1) AS 'ACABADO',

		// (select _tv.tipo_vista from valorizacion inner join tipo_vista _tv on v.cod_vista = _tv.id_vista where ti.tipo_inmb = 'departamento' limit 1) AS 'VISTA',

		// (select '' AS 'PRECIO TENTATIVO' from valorizacion where ti.tipo_inmb = 'departamento' limit 1) AS 'PRECIO TENTATIVO',

		// (select v.area_construida from valorizacion where ti.tipo_inmb = 'departamento' limit 1) AS 'ÁREA CONSTRUIDA', 

		// (select v.area_ocupada from valorizacion where ti.tipo_inmb = 'departamento' limit 1) AS 'ÁREA OCUPADA', 

		// (select v.antiguedad from valorizacion where ti.tipo_inmb = 'departamento' limit 1) AS 'ANTIGÜEDAD', 

		// (select v.pisos_edif_dep from valorizacion where ti.tipo_inmb = 'departamento' limit 1) AS 'PISOS DE EDIFICACIÓN',

		// (select v.piso_dep from valorizacion where ti.tipo_inmb = 'departamento' limit 1) AS 'PISO DONDE SE UBICA',

		// (select v.cant_dorm_dep from valorizacion where ti.tipo_inmb = 'departamento' limit 1) AS 'DORMITORIO(S)',

		// (select v.cant_banho_dep from valorizacion where ti.tipo_inmb = 'departamento' limit 1) AS 'BAÑO(S)', 

		// (select v.estac_dep from valorizacion where ti.tipo_inmb = 'departamento' limit 1) AS 'ESTACIONAMIENTOS',
		// -- departamento


		// -- terreno
		// (select _sti.sub_tipo_inmb from valorizacion inner join sub_tipo_inmuebles _sti on v.cod_sub_tipo_inmue = _sti.id_sub_tipo_inmb where ti.tipo_inmb = 'terreno' limit 1) AS 'SUBTIPO DE INMUEBLE',

		// (select _tz.tipo_zona from valorizacion inner join tipo_zonificacion _tz on v.cod_zonificacion = _tz.id_zona where ti.tipo_inmb = 'terreno' limit 1) AS 'ZONIFICACIÓN',

		// (select _ts.tipo_suelo from valorizacion inner join tipo_suelo _ts on v.cod_tipo_suelo = _ts.id_tipo_suelo where ti.tipo_inmb = 'terreno' limit 1) AS 'TIPO SUELO',

		// (select _ubi.tipo_ubic from valorizacion inner join ubicacion _ubi on v.cod_ubi = _ubi.id_ubicacion where ti.tipo_inmb = 'terreno' limit 1) AS 'LOCALIZACIÓN',

		// (select '' from valorizacion where ti.tipo_inmb = 'terreno' limit 1) AS 'PRECIO TENTATIVO',

		// (select v.area_terreno from valorizacion where ti.tipo_inmb = 'terreno' limit 1) AS 'ÁREA DE TERRENO', 

		// (select v.param_terreno from valorizacion where ti.tipo_inmb = 'terreno' limit 1) AS 'PARÁMETROS', 

		// (select v.frent_terreno from valorizacion where ti.tipo_inmb = 'terreno' limit 1) AS 'FRENTE', 

		// (select v.fondo_terreno from valorizacion where ti.tipo_inmb = 'terreno' limit 1) AS 'FONDO', 

		// (select v.izq_terreno from valorizacion where ti.tipo_inmb = 'terreno' limit 1) AS 'IZQUIERDA', 

		// (select v.der_terreno from valorizacion where ti.tipo_inmb = 'terreno' limit 1) AS 'DERECHA', 
		// -- terreno
		// -- oficina
		// (select _ubi.tipo_ubic from valorizacion inner join ubicacion _ubi on v.cod_ubi = _ubi.id_ubicacion where ti.tipo_inmb = 'oficina' limit 1) AS 'LOCALIZACIÓN',

		// (select _ta.tipo_acabado from valorizacion inner join tipo_acabado _ta on v.cod_acabado = _ta.id_acabado where ti.tipo_inmb = 'oficina' limit 1) AS 'ACABADO',

		// (select _tz.tipo_zona from valorizacion inner join tipo_zonificacion _tz on v.cod_zonificacion = _tz.id_zona where ti.tipo_inmb = 'oficina' limit 1) AS 'ZONIFICACIÓN',

		// (select _tv.tipo_vista from valorizacion inner join tipo_vista _tv on v.cod_vista = _tv.id_vista where ti.tipo_inmb = 'oficina' limit 1) AS 'VISTA',

		// (select '' from valorizacion where ti.tipo_inmb = 'oficina' limit 1) AS 'PRECIO TENTATIVO',

		// (select v.area_construida from valorizacion where ti.tipo_inmb = 'oficina' limit 1) AS 'ÁREA CONSTRUIDA', 

		// (select v.area_ocupada from valorizacion where ti.tipo_inmb = 'oficina' limit 1) AS 'ÁREA OCUPADA', 

		// (select v.antiguedad from valorizacion where ti.tipo_inmb = 'oficina' limit 1) AS 'ANTIGÜEDAD',

		// (select '' from valorizacion where ti.tipo_inmb = 'oficina' limit 1) AS 'PISOS DE EDIFICACIÓN',

		// (select v.piso_ofi from valorizacion where ti.tipo_inmb = 'oficina' limit 1) AS 'PISO DONDE SE UBICA',

		// (select v.cochera_ofi from valorizacion where ti.tipo_inmb = 'oficina' limit 1) AS 'ESTACIONAMIENTOS',

		// CONCAT( case when v.ascensor_ofi = 1 then 'ASCENSOR' else '' end, case when v.ascensor_ofi = 1 and v.aire_ofi = 1 then ', ' else '' end, case when v.aire_ofi = 1 then 'AIRE ACONDICIONADO' else '' end) AS 'OTROS',
		// -- oficina
		// -- local comercial
		// (select _sti.sub_tipo_inmb from valorizacion inner join sub_tipo_inmuebles _sti on v.cod_sub_tipo_inmue = _sti.id_sub_tipo_inmb where ti.tipo_inmb = 'local comercial' limit 1) AS 'SUBTIPO DE INMUEBLE',

		// (select _tz.tipo_zona from valorizacion inner join tipo_zonificacion _tz on v.cod_zonificacion = _tz.id_zona where ti.tipo_inmb = 'local comercial' limit 1) AS 'ZONIFICACIÓN',

		// (select _ubi.tipo_ubic from valorizacion inner join ubicacion _ubi on v.cod_ubi = _ubi.id_ubicacion where ti.tipo_inmb = 'local comercial' limit 1) AS 'LOCALIZACIÓN',

		// (select _ta.tipo_acabado from valorizacion inner join tipo_acabado _ta on v.cod_acabado = _ta.id_acabado where ti.tipo_inmb = 'local comercial' limit 1) AS 'ACABADO',

		// (select '' from valorizacion where ti.tipo_inmb = 'local comercial' limit 1) AS 'PRECIO TENTATIVO',

		// (select v.area_terreno from valorizacion where ti.tipo_inmb = 'local comercial' limit 1) AS 'ÁREA DE TERRENO', 

		// (select v.area_construida from valorizacion where ti.tipo_inmb = 'local comercial' limit 1) AS 'ÁREA CONSTRUIDA', 

		// (select v.area_ocupada from valorizacion where ti.tipo_inmb = 'local comercial' limit 1) AS 'ÁREA OCUPADA', 

		// (select v.antiguedad from valorizacion where ti.tipo_inmb = 'local comercial' limit 1) AS 'ANTIGÜEDAD',

		// (select _tv.tipo_vista from valorizacion inner join tipo_vista _tv on v.cod_vista = _tv.id_vista where ti.tipo_inmb = 'local comercial' limit 1) AS 'FRENTE',

		// (select '' from valorizacion where ti.tipo_inmb = 'local comercial' limit 1) AS 'PISOS DE EDIFICACIÓN',

		// (select v.piso_lcl_com from valorizacion where ti.tipo_inmb = 'local comercial' limit 1) AS 'PISO DONDE SE UBICA',

		// (select v.cochera_lcl_com from valorizacion where ti.tipo_inmb = 'local comercial' limit 1) AS 'ESTACIONAMIENTOS',

		// CONCAT( case when v.ascensor_lcl_com = 1 then 'ASCENSOR' else '' end, case when v.ascensor_lcl_com = 1 and v.aire_lcl_com = 1 then ', ' else '' end, case when v.aire_lcl_com = 1 then 'AIRE ACONDICIONADO' else '' end) AS 'OTROS',
		// -- local comercial
		// -- local industrial
		// (select _tz.tipo_zona from valorizacion inner join tipo_zonificacion _tz on v.cod_zonificacion = _tz.id_zona where ti.tipo_inmb = 'local industrial' limit 1) AS 'ZONIFICACIÓN',

		// (select _ts.tipo_suelo from valorizacion inner join tipo_suelo _ts on v.cod_tipo_suelo = _ts.id_tipo_suelo where ti.tipo_inmb = 'local industrial' limit 1) AS 'TIPO SUELO',

		// (select '' from valorizacion where ti.tipo_inmb = 'local industrial' limit 1) AS 'CERCO PERIMÉTICO',

		// (select v.cod_tipo_suelo from valorizacion where ti.tipo_inmb = 'local industrial' limit 1) AS 'ACCESO',

		// (select '' from valorizacion where ti.tipo_inmb = 'local industrial' limit 1) AS 'PRECIO TENTATIVO',

		// (select v.area_terreno from valorizacion where ti.tipo_inmb = 'local industrial' limit 1) AS 'ÁREA DE TERRENO', 

		// (select v.area_construida from valorizacion where ti.tipo_inmb = 'local industrial' limit 1) AS 'ÁREA CONSTRUIDA', 

		// (select v.nave_lcl_ind from valorizacion where ti.tipo_inmb = 'local industrial' limit 1) AS 'ÁREA DE NAVE', 

		// (select v.antiguedad from valorizacion where ti.tipo_inmb = 'local industrial' limit 1) AS 'ANTIGÜEDAD',

		// (select '' from valorizacion where ti.tipo_inmb = 'local industrial' limit 1) AS 'PISOS DE EDIFICACIÓN',

		// (select '' from valorizacion where ti.tipo_inmb = 'local industrial' limit 1) AS 'ESTACIONAMIENTOS'
		// -- local industrial
		// FROM valorizacion v
		// INNER JOIN clientes_servicios cs ON v.cod_client = cs.id_client
		// INNER JOIN tipo_inmuebles ti ON v.cod_tipo_inmue = ti.id_tipo_inmb
		// INNER JOIN sub_tipo_inmuebles sti ON v.cod_sub_tipo_inmue = sti.id_sub_tipo_inmb
		// INNER JOIN tipo_promocion tp ON v.cod_tipo_prom = tp.id_promo
		// INNER JOIN ubicacion ubi ON v.cod_ubi = ubi.id_ubicacion
		// LEFT JOIN tipo_zonificacion tz ON v.cod_zonificacion = tz.id_zona
		// INNER JOIN tipo_vista tv ON v.cod_vista = tv.id_vista
		// INNER JOIN tipo_acabado ta ON v.cod_acabado = ta.id_acabado

		// WHERE v.id_valor = $id
		// ORDER BY v.id_valor;";

		$query = "SELECT id_valor, cs.nom_client, direccion, ti.tipo_inmb, sti.sub_tipo_inmb, tp.tipo_promo, area_terreno, area_construida, area_ocupada, antiguedad, sala_comedor, sala, comedor, cocina, amoblado, piscina_prop, cant_dorm, dormitorio_banho, cant_banho, banho_visita, cuarto_serv, banho_serv, estacionamiento, deposito, ub.tipo_ubic, tv.tipo_vista, ta.tipo_acabado, sala_comedor_dep, sala_dep, comedor_dep, cocina_dep, amob_dep, cant_dorm_dep, dormitorio_banho_dep, cant_banho_dep, banho_visita_dep, cuarto_serv_dep, banho_serv_dep, estac_dep, deposito_dep, ascensor_dep, ascensor_dir_dep, pisos_edif_dep, piso_dep
		cod_zonificacion, cod_tipo_suelo, param_terreno, frent_terreno, izq_terreno, fondo_terreno, der_terreno, piso_ofi, cochera_ofi, ascensor_ofi, aire_ofi, frente_lcl_com, cochera_lcl_com, piso_lcl_com, ascensor_lcl_com, aire_lcl_com, frente_lcl_ind, nave_lcl_ind, estado_solicitud, comentario,obs
		FROM valorizacion vl
		 LEFT JOIN clientes_servicios cs ON vl.cod_client = cs.id_client
					LEFT JOIN tipo_inmuebles ti ON vl.cod_tipo_inmue = ti.id_tipo_inmb
					LEFT JOIN sub_tipo_inmuebles sti ON vl.cod_sub_tipo_inmue = sti.id_sub_tipo_inmb
					LEFT JOIN tipo_promocion tp ON vl.cod_tipo_prom = tp.id_promo
					LEFT JOIN tipo_acabado ta ON vl.cod_acabado = ta.id_acabado
					LEFT JOIN tipo_vista tv ON vl.cod_vista = tv.id_vista
					LEFT JOIN ubicacion ub ON vl.cod_ubi = ub.id_ubicacion
		WHERE vl.id_valor = $id";




		$resultado = mysqli_query($cadena, $query);

		while ($fila = mysqli_fetch_row($resultado)) {
			$this->excel_data[] = $fila;
		}

		$cnx->cerrarConexion($cadena);

		return $this->excel_data;
	}
}
