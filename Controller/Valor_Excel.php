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

$cabecera = ['id_valor', 'cod_client', 'direccion'];
$hoja->fromArray($cabecera, null, 'A1');

$styleCabecera = [
    'fill' => [
        'fillType' => Fill::FILL_SOLID,
        'color' => ['rgb' => 'FFFF00']
    ],

    'alignment' => [
        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
    ],

    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ]
];
$hoja->getStyle('A1:C1')->applyFromArray($styleCabecera);

$row = 2;

foreach ($list_valo_details as $data) {
    $hoja->setCellValue('A' . $row, $data['0']);
    $hoja->setCellValue('B' . $row, $data['1']);
    $hoja->setCellValue('C' . $row, $data['2']);
    $row++;
}

/*foreach ($list_valo_details as $data) {
    $col = 'A';
    foreach ($data as $value) {
        $hoja->setCellValue($col . $row, $value);
        $col++;
    }
    $row++;
}*/


$writer = new Xlsx($excel);

$filename = 'valorizacion_' . $id_solic_v .'-'. time() . '.xlsx';


var_dump($filename);
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');

$writer->save('php://output');

exit();

?>