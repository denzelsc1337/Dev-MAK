<?php
require_once('../Model/Valorizacion.php');

$id_vl_ = $_POST['cod_solic_v'];
$status = $_POST['status_solic_val_cbo'];

$oValor = new Valorizacion();
$r = $oValor->updt_valoc_status($id_vl_,$status);


if ($r) {
  echo "Success";
} else {
  echo "Error";
}

?>