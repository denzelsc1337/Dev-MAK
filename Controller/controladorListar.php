<?php 

require_once('../Model/Cliente_Servicios.php');
$oCli_s= new Cliente_Servicio();
//selector tipo cliente
$selector_types = $oCli_s->selectorType_Client_Service();

//selector tipo propiedad
require_once('../Model/Valorizacion.php');
$oValor= new Valorizacion();
$selector_types_props = $oValor->selectorType_props();
$selector_types_prom = $oValor->selector_type_promo();



?>