<?php
require_once('../Model/Valorizacion.php');

//try {
    //if (isset($_POST['btnValo_add'])) {
        $data[1] = $_POST["direccion_"];
        $data[2] = $_POST["tipo_prop"];
        $data[3] = $_POST["sub_tipo_prop"];
        $data[4] = $_POST["tipo_prom"];


        $data[5] = $_POST["a_t"];
        $data[6] = $_POST["a_c"];
        $data[7] = $_POST["antig"];

        //form casa
        $data[8] =  isset($_POST['sala_com'])? true : false;
        $data[9] = isset($_POST['sala_'])? true : false;
        $data[10] = isset($_POST['comedor_'])? true : false;
        $data[11] = isset($_POST['cocina_'])? true : false;
        $data[12] = isset($_POST['amoblado_'])? true : false;
        $data[13] = isset($_POST['piscina_d'])? true : false;

        $data[14] = $_POST["cant_dorm"];
        $data[15] = $_POST["cant_dorm_b_"];

        $data[16] =  $_POST["cant_banho"];
        $data[17] = isset($_POST['banho_vis'])? true : false;

        $data[18] = isset($_POST['cuarto_serv'])? true : false;
        $data[19] = isset($_POST['banho_serv'])? true : false;

        $data[20] = $_POST["cant_estac"];
        $data[21] = isset($_POST['deposito_'])? true : false;

        $data[22] = $_POST["ubic"];
        $data[23] = $_POST["vista_"];
        $data[24] = $_POST["acabado_"];
        //form casa

        $oValor= new Valorizacion();
        $r = $oValor->add_Valorizacion($data);

        //var_dump($data);

    //}
/*} catch (Exception $e) {
    echo $e->getMessage();
}*/


//Guardamos los datos el post


/*
$data[26] = isset($_POST['sala_com_d'])? true : false;
$data[27] = isset($_POST['sala_d'])? true : false;
$data[28] = isset($_POST['comedor_d'])? true : false;
$data[29] = isset($_POST['cocina_dep'])? true : false;


$data[30] = $_POST["cant_dorm_d"];
$data[31] = $_POST["cant_dorm_b_d"];

$data[32] = $_POST["cant_banho_d"];
$data[33] = isset($_POST['banho_vis_d'])? true : false;


$data[34] = isset($_POST['cuarto_serv_d'])? true : false;
$data[35] = isset($_POST['banho_serv_d'])? true : false;

$data[36] = $_POST["cant_estac_d"];
$data[37] = isset($_POST['deposito__d'])? true : false;

$data[38] = isset($_POST['ascensor_d'])? true : false;
$data[39] = isset($_POST['ascensor_directo_d'])? true : false;

$data[40] = $_POST["pisos_edif_d"];
$data[41] = $_POST["piso_dpto_"];

$data[42] = $_POST["opciones_zoni"];
$data[43] = $_POST["tipo_suelo"];

$data[44] = $_POST["params_"];
$data[45] = $_POST["frnte_"];

$data[46] = $_POST["piso_ofi"];
$data[47] = $_POST["coch_ofi"];
$data[48] = isset($_POST['ascen_ofi'])? true : false;
$data[49] = isset($_POST['aire_ofio'])? true : false;
*/

?>