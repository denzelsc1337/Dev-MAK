<?php

require_once('../Model/Valorizacion.php');

$oValor = new Valorizacion();

$id_solic_l = $_POST['id_solic_l'];
$id_clie = $_POST['id_client'];
$dni_cli = $_POST['dni_client'];

$list_valo_details = $oValor->details_valorizacion($id_solic_l, $id_clie, $dni_cli);

/*$response = array(
    'mensaje' => 'datos encontrados',
    'detalles_valor' => $list_valo_details
);*/

echo json_encode($list_valo_details);
