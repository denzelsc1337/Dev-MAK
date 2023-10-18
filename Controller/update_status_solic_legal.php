<?php
require_once('../Model/Legal.php');

$id_lgl_ = $_POST['_id_doc'];
$status = $_POST['_slct_status'];

$oLegal = new cLegal();
$r = $oLegal->updt_doc_status($id_lgl_, $status);


if ($r) {
    echo "Success";
} else {
    echo "Error";
};
