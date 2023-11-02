<?php

require_once('../Model/Valorizacion.php');
require_once '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

$oValor = new Valorizacion();

$id_solic_v = $_POST['id_solc_v'];

$list_valo_details = $oValor->data_excel_val($id_solic_v);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$filename = 'valorizacion_' . $id_solic_v . '-' . time() . '.csv';

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');

$file = fopen('php://output', 'w');

// Output the CSV header (column names)
$columnNames = [
    'id_valor', 'nom_client', 'direccion', 'tipo_inmb', 'sub_tipo_inmb', 'tipo_promo', 'area_terreno', 'area_construida', 'area_ocupada', 'antiguedad', 'sala_comedor', 'sala', 'comedor', 'cocina', 'amoblado', 'piscina_prop', 'cant_dorm', 'dormitorio_banho', 'cant_banho', 'banho_visita', 'cuarto_serv', 'banho_serv', 'estacionamiento', 'deposito', 'tipo_ubic', 'tipo_vista', 'tipo_acabado', 'sala_comedor_dep',
    'sala_dep', 'comedor_dep', 'cocina_dep', 'amob_dep', 'cant_dorm_dep', 'dormitorio_banho_dep', 'cant_banho_dep', 'banho_visita_dep', 'cuarto_serv_dep', 'banho_serv_dep', 'estac_dep', 'deposito_dep', 'ascensor_dep', 'ascensor_dir_dep', 'pisos_edif_dep', 'piso_dep',
    'cod_zonificacion', 'cod_tipo_suelo', 'param_terreno', 'frent_terreno', 'izq_terreno', 'fondo_terreno', 'der_terreno', 'piso_ofi', 'cochera_ofi', 'ascensor_ofi', 'aire_ofi', 'frente_lcl_com', 'cochera_lcl_com', 'piso_lcl_com', 'ascensor_lcl_com', 'aire_lcl_com', 'frente_lcl_ind',
    'nave_lcl_ind', 'estado_solicitud', 'comentario', 'obs'
];

fputcsv($file, $columnNames);

// Output the data
foreach ($list_valo_details as $data) {
    fputcsv($file, $data);
}

fclose($file);
exit();
