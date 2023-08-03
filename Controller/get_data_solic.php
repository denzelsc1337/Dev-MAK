<?php

if (isset($_GET['id_reg'])) {
    $id_reg = $_GET['id_reg'];

    include_once('../Model/Legal.php');

    $oLegal = new cLegal();
    $data_legal = $oLegal->get_data_legal($id_reg);
    
    echo json_encode($data_legal);
}
?>