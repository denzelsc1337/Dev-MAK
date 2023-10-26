<?php
require_once('../Model/Valorizacion.php');
include_once('../Config/Conexion.php');

$oValor = new Valorizacion();

$id_solic_l = $_POST['id_solic_l'];
$id_clie = $_POST['id_client'];
$dni_cli = $_POST['dni_client'];

$cnx = new conexion();
$cadena = $cnx->abrirConexion();

$sql = "SELECT id_valor, CONCAT(cs.nom_client, ' ', cs.ape_client) as 'Cliente', direccion, ti.tipo_inmb, sti.sub_tipo_inmb, tp.tipo_promo, area_terreno, area_construida, area_ocupada, antiguedad, sala_comedor, sala, comedor, cocina, amoblado, piscina_prop, cant_dorm, dormitorio_banho, cant_banho, banho_visita, cuarto_serv, banho_serv, estacionamiento, deposito, ub.tipo_ubic, tv.tipo_vista, ta.tipo_acabado, sala_comedor_dep, sala_dep, comedor_dep, cocina_dep, amob_dep, cant_dorm_dep, dormitorio_banho_dep, cant_banho_dep, banho_visita_dep, cuarto_serv_dep, banho_serv_dep, estac_dep, deposito_dep, ascensor_dep, ascensor_dir_dep, pisos_edif_dep, piso_dep, tz.tipo_zona, ts.tipo_suelo, param_terreno, frent_terreno, izq_terreno, fondo_terreno, der_terreno, piso_ofi, cochera_ofi, ascensor_ofi, aire_ofi, frente_lcl_com, cochera_lcl_com, piso_lcl_com, ascensor_lcl_com, aire_lcl_com, frente_lcl_ind, nave_lcl_ind, estado_solicitud, comentario,obs 
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
    WHERE vl.id_valor =$id_solic_l and cs.id_client = $id_clie and cs.dni_client = $dni_cli";


$result = mysqli_query($cadena, $sql);

$response = array();

if ($result) {
    $info_campos = mysqli_fetch_fields($result);

    while ($fila = mysqli_fetch_assoc($result)) {
        $fila_info = array();
        foreach ($info_campos as $campo) {
            $nombre_campo = $campo->name;
            $tipo_campo = obtenerTipoDato($campo->type);
            $valor_campo = $fila[$nombre_campo];

            $fila_info[] = array(
                'valor' => $valor_campo,
                'tipo' => $tipo_campo
            );
        }
        $response[] = $fila_info;
    }
} else {
    echo "Error en la consulta: " . mysqli_error($cadena);
}


function obtenerTipoDato($tipo)
{
    switch ($tipo) {
        case MYSQLI_TYPE_STRING:
            return "VARCHAR";
        case MYSQLI_TYPE_LONG:
            return "INTEGER";
        case MYSQLI_TYPE_DECIMAL:
            return "DECIMAL";
        case MYSQLI_TYPE_TINY:
            return "BOOLEAN";
            // Agrega más casos según tus necesidades
        default:
            return "Desconocido";
    }
}


// Ahora, $response contiene tanto la información de los campos como los datos de la tabla
echo json_encode($response);
