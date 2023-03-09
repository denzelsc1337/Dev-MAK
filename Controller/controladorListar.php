<?php 

require_once('../Model/Cliente_Servicios.php');
$oCli_s= new Cliente_Servicio();
$selector_types = $oCli_s->selectorType_Client_Service();

$selector_types_props = $oCli_s->selectorType_props();

 ?>