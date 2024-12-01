<?php

require_once('../Model/Legal.php');

$oLegal = new cLegal();

// print_r($_POST);

$id_solic_l = $_POST['id_solic_l'];
$id_clie = $_POST['id_client'];

$list_legal_details = $oLegal->details_legal_solic($id_solic_l, $id_clie);

/*$response = array(
    'mensaje' => 'datos encontrados',
    'detalles_valor' => $list_legal_details
);*/

echo json_encode($list_legal_details);
