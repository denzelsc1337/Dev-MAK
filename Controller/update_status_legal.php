<?php
require_once('../Model/Legal.php');


if (isset($_POST['_slct_status'])) {

    // print_r($_POST);

    $id_doc = $_POST['_id_doc'];
    $state = $_POST['_slct_status'];
    $coment = $_POST['_coment'];


    if (isset($coment)) {
        $oLegal = new cLegal();
        $r = $oLegal->updt_legal_coment_docs($id_doc, $coment);
    }

    $oLegal = new cLegal();
    $r = $oLegal->updt_legal_status_docs($id_doc, $state);

    // $oLegal = new cLegal();
    // $r = $oLegal->updt_legal_status_docs($id_doc, $state);

    // echo $r;

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
