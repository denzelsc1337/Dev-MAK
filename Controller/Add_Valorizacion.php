<?php
require_once('../Model/Valorizacion.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $botonPresionado = $_POST['botonPresionado']; // esto se jala de Valorizacion, el boton tiene un data-accion="agregar"

    if ($botonPresionado === 'agregar') {
        print_r($_POST);
        $data[1] = $_POST["direccion_"];
        $data[2] = $_POST["tipo_prop"];
        $data[3] = $_POST["sub_tipo_prop"];
        $data[4] = $_POST["tipo_prom"];


        $data[5] = $_POST["a_t"];
        $data[6] = $_POST["a_c"];
        $data[7] = $_POST["antig"];

        //form casa
        $data[8] =  isset($_POST['sala_com']) ? true : false;
        $data[9] = isset($_POST['sala_']) ? true : false;
        $data[10] = isset($_POST['comedor_']) ? true : false;
        $data[11] = isset($_POST['cocina_']) ? true : false;
        $data[12] = isset($_POST['amoblado_']) ? true : false;
        $data[13] = isset($_POST['piscina_d']) ? true : false;

        $data[14] = $_POST["cant_dorm"];
        $data[15] = $_POST["cant_dorm_b_"];

        $data[16] =  $_POST["cant_banho"];
        $data[17] = isset($_POST['banho_vis']) ? true : false;

        $data[18] = isset($_POST['cuarto_serv']) ? true : false;
        $data[19] = isset($_POST['banho_serv']) ? true : false;

        $data[20] = $_POST["cant_estac"];
        $data[21] = isset($_POST['deposito_']) ? true : false;

        $data[22] = $_POST["ubic"];
        $data[23] = $_POST["vista_"];
        $data[24] = $_POST["acabado_"];
        //form casa

        $oValor = new Valorizacion();
        $r = $oValor->add_valor($data);
    } elseif ($botonPresionado === 'eliminar') {
        echo "nel";
    }
}
