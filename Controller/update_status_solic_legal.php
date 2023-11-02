<?php
require_once('../Model/Legal.php');
include_once('../Config/Conexion.php');

$cnx = new Conexion();
$cadena = $cnx->abrirConexion();

$id_lgl_ = $_POST['_id_doc'];
$status = $_POST['_slct_status'];

// $oLegal = new cLegal();
// $r = $oLegal->updt_doc_status($id_lgl_, $status);


$sql = "UPDATE documents_clients SET status_doc = $status WHERE id_document = $id_lgl_";


echo $result = mysqli_query($cadena, $sql);
