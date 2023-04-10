<?php 

require_once('../Model/Cliente_Servicios.php');
$oCli_s= new Cliente_Servicio();
//selector tipo cliente
$selector_types = $oCli_s->selectorType_Client_Service();

//selector tipo propiedad
$selector_types_props = $oCli_s->selectorType_props();

?>