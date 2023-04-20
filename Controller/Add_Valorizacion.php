<?php
//header('Refresh: 0.2; URL=../Valorizacion/valorizacion.php');

//Guardamos los datos el post
$data[1] = $_POST["direccion_"];
$data[2] = $_POST["tipo_prop"];
$data[3] = $_POST["sub_tipo_prop"];
$data[4] = $_POST["tipo_prom"];


$data[5] = $_POST["c_v_frente"];
$data[6] = $_POST["cant_dorm_casa"];
$data[7] = $_POST["cant_ban_casa"];
$data[8] = $_POST["cant_coch_casa"];
$data[9] = $_POST["cant_dorm_b_casa"];
$data[10] = $_POST["cant_dorm_b_v_casa"];
$data[11] = $_POST["cant_cuart_s_casa"];
$data[12] = $_POST["cant_ban_s_casa"];
$data[13] = $_POST["cant_ban_com_casa"];
$data[14] = $_POST["piscina_casa"];

require_once('../Model/Valorizacion.php');

$oValor= new Valorizacion();
$r = $oValor->add_Valorizacion($data);
if($r == 1){
?>
    <script> alert("Valorizacion enviada con éxito");</script>
<?php
}else{
?>
    <script> alert("Error al enviar valorizacion");</script>
<?php
}
?>