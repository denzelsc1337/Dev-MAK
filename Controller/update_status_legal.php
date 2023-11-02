<?php
require_once('../Model/Legal.php');


if (isset($_POST['_slct_status'])) {

    // print_r($_POST);
    // $_status = ["500", "200", "100", "1"];

    $id_doc = $_POST['_id_doc'];
    $state = $_POST['_slct_status'];

    // if (in_array($state, $_status)) {

    $oLegal = new cLegal();
    $r = $oLegal->updt_legal_status_docs($id_doc, $state);

    echo $r;

    // if ($r) {
    //     echo "Success";
    //     echo "\n";
    //     echo $id_doc . " " . $state;
    // } else {
    //     echo "Error";
    // }
    // } else {
    //     echo "no se pudo actualizar";
    // }
}
