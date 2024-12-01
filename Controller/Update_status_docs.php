<?php
require_once('../Model/Legal.php');

$id_vl_ = $_POST['cod_solic_v'];
$status = $_POST['status_solic_val_cbo'];

$oLegal = new cLegal();
$r = $oLegal->updt_doc_status($id_vl_,$status);

if ($r) {
  echo "Success";
} else {
  echo "Error";
}

?>