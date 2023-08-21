<?php
require_once('../Model/Valorizacion.php');

$id_vl_ = $_POST['id__cod_valor'];
$obs = $_POST['obs_send_'];

$oValor = new Valorizacion();
$r = $oValor->updt_valoc_obs($id_vl_,$obs);


if ($r) {
  echo "Success";
} else {
  echo "Error";
}

?>