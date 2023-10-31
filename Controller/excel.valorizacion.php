<?php
header('Content-Type: application/json');
require_once('../Model/Valorizacion.php');

$oValor = new Valorizacion();
$id_solic_v = $_POST['id_solc_v'];
$list_valo_details = $oValor->data_excel_val($id_solic_v);

echo json_encode($list_valo_details);
