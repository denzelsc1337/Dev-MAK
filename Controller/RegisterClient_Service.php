<?php
header('Refresh: 0.2; URL=../index.php');

//Guardamos los datos el post
$data[1] = $_POST["dni_u"];
$data[2] = $_POST["nombre_u"];
$data[3] = $_POST["apellidos_u"];
$data[4] = $_POST["telef_u"];
$data[5] = $_POST["email_u"];
$data[6] = $_POST["usu_c"];
$data[7] = $_POST["pass_u"];
$data[8] = $_POST["tipo_cli"];
$data[9] = $_POST["cod_corredor"];

require_once('../Model/Cliente_Servicios.php');

$oCli_s= new Cliente_Servicio();
$r = $oCli_s->add_Client_service($data);
if($r == 1){
?>
    <script> alert("Cliente registrado con éxito");</script>
<?php
}else{
?>
    <script> alert("Error al registrar Cliente");</script>
<?php
}
?>