<?php
require_once('../Model/Legal.php');

$id_lgl_ = $_POST['id_legal_solic'];
$status = $_POST['status_solic_legal_cbo'];

$oLegal = new cLegal();
$r = $oLegal->updt_legal_status($id_lgl_, $status);


if ($r) {
    echo "Success";
} else {
    echo "Error";
}
