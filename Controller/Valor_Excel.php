<?php

require_once('../Model/Valorizacion.php');
require_once '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Fill;

$oValor = new Valorizacion();

$id_solic_v = $_POST['id_solc_v'];


$list_valo_details = $oValor->data_excel_val($id_solic_v);

$excel = new Spreadsheet();
$hoja = $excel->getActiveSheet();
$hoja->setTitle('Valorización');


$cabecera = [
    'id_valor', 'cs.nom_client', 'direccion', 'ti.tipo_inmb', 'sti.sub_tipo_inmb', 'tp.tipo_promo', 'area_terreno', 'area_construida', 'area_ocupada', 'antiguedad', 'sala_comedor', 'sala', 'comedor', 'cocina', 'amoblado', 'piscina_prop', 'cant_dorm', 'dormitorio_banho', 'cant_banho', 'banho_visita', 'cuarto_serv', 'banho_serv', 'estacionamiento', 'deposito', 'ub.tipo_ubic', ' tv.tipo_vista', 'ta.tipo_acabado', 'sala_comedor_dep', 'sala_dep', 'comedor_dep', 'cocina_dep', 'amob_dep', 'cant_dorm_dep', 'dormitorio_banho_dep', 'cant_banho_dep', 'banho_visita_dep', 'cuarto_serv_dep', 'banho_serv_dep', 'estac_dep', 'deposito_dep', 'ascensor_dep', 'ascensor_dir_dep', 'pisos_edif_dep', 'piso_dep',

    'cod_zonificacion', 'cod_tipo_suelo', 'param_terreno', 'frent_terreno', 'izq_terreno', 'fondo_terreno', 'der_terreno', 'piso_ofi', 'cochera_ofi', 'ascensor_ofi', 'aire_ofi', 'frente_lcl_com', 'cochera_lcl_com', 'piso_lcl_com', 'ascensor_lcl_com', 'aire_lcl_com', 'frente_lcl_ind', 'nave_lcl_ind', 'estado_solicitud', 'comentario', 'obs'
];
$hoja->fromArray($cabecera, null, 'A1');

$styleCabecera = [
    'fill' => [
        'fillType' => Fill::FILL_SOLID,
        'color' => ['rgb' => 'FFFF00']
    ],

    'alignment' => [
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ]
];
$hoja->getStyle('A1:BM1')->applyFromArray($styleCabecera);

$row = 2;


foreach ($list_valo_details as $data) {
    $col = 'A';
    foreach ($data as $value) {
        $hoja->setCellValue($col . $row, $value);
        $col++;
    }
    $row++;
}


$writer = new Xlsx($excel);

$filename = 'valorizacion_' . $id_solic_v . '-' . time() . '.xlsx';


//var_dump($filename);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');


$writer->save('php://output');

exit();
