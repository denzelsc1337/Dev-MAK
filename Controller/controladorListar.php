<?php 

require_once('../Model/Cliente_Servicios.php');
$oCli_s= new Cliente_Servicio();
//selector tipo cliente
$selector_types = $oCli_s->selectorType_Client_Service();

//selector tipo propiedad
require_once('../Model/Valorizacion.php');
$oValor= new Valorizacion();
$selector_types_props = $oValor->selectorType_props();
$selector__sub_types_props = $oValor->selector_sub_Type_props();
$list_valorizacion = $oValor->listadoValorizacion();

$selector_types_prom = $oValor->selector_type_promo();

$selector_types_ubi = $oValor->selector_type_ubi();
$selector_types_vis = $oValor->selector_type_vista();
$selector_types_acab = $oValor->selector_type_acabado();

$selector_types_zon = $oValor->selector_zonificacion();
$selector_types_suel = $oValor->selector_type_suelo();


require_once('../Model/Legal.php');
$oLegal= new cLegal();
$list_docs_legal= $oLegal->listadoTiposDocsLegal();

?>