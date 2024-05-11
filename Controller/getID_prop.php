<?php
require_once('./../Model/Valorizacion.php');
include_once('./../Config/Conexion.php');

// $oValor = new Valorizacion();
// print_r($_POST);

$id_prop_search = $_POST['id_prop'];

$cnx = new conexion();
$cadena = $cnx->abrirConexion();

// $sql = "SELECT id_valor, CONCAT(cs.nom_client, ' ', cs.ape_client) as 'Cliente', direccion, ti.tipo_inmb, sti.sub_tipo_inmb, tp.tipo_promo, area_terreno, area_construida, area_ocupada, antiguedad, sala_comedor, sala, comedor, cocina, amoblado, piscina_prop, cant_dorm, dormitorio_banho, cant_banho, banho_visita, cuarto_serv, banho_serv, estacionamiento, deposito, ub.tipo_ubic, tv.tipo_vista, ta.tipo_acabado, sala_comedor_dep, sala_dep, comedor_dep, cocina_dep, amob_dep, cant_dorm_dep, dormitorio_banho_dep, cant_banho_dep, banho_visita_dep, cuarto_serv_dep, banho_serv_dep, estac_dep, deposito_dep, ascensor_dep, ascensor_dir_dep, pisos_edif_dep, piso_dep, tz.tipo_zona, ts.tipo_suelo, param_terreno, frent_terreno, izq_terreno, fondo_terreno, der_terreno, piso_ofi, cochera_ofi, ascensor_ofi, aire_ofi, frente_lcl_com, cochera_lcl_com, piso_lcl_com, ascensor_lcl_com, aire_lcl_com, frente_lcl_ind, nave_lcl_ind, comentario,obs
//     FROM valorizacion vl
//     LEFT JOIN clientes_servicios cs ON vl.cod_client = cs.id_client
//     LEFT JOIN tipo_inmuebles ti ON vl.cod_tipo_inmue = ti.id_tipo_inmb
//     LEFT JOIN sub_tipo_inmuebles sti ON vl.cod_sub_tipo_inmue = sti.id_sub_tipo_inmb
//     LEFT JOIN tipo_promocion tp ON vl.cod_tipo_prom = tp.id_promo
//     LEFT JOIN tipo_acabado ta ON vl.cod_acabado = ta.id_acabado
//     LEFT JOIN tipo_vista tv ON vl.cod_vista = tv.id_vista
//     LEFT JOIN ubicacion ub ON vl.cod_ubi = ub.id_ubicacion
//     LEFT JOIN tipo_zonificacion tz ON vl.cod_zonificacion = tz.id_zona
//     LEFT JOIN tipo_suelo ts ON vl.cod_tipo_suelo = ts.id_tipo_suelo
//     WHERE vl.id_valor = $id_prop_search";

$sql = "INSERT INTO propiedades (id_prop) VALUES ($id_prop_search)";

$result = mysqli_query($cadena, $sql);

if ($result) {
    echo "1";
} else {
    echo "Error en la consulta: " . mysqli_error($cadena);
}
