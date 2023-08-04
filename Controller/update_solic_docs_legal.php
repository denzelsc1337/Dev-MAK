<?php

$coment = $_POST['coment_'];


require_once('../Model/Legal.php');

$oLegal = new cLegal();
$r = $oLegal->updateSolicLegalDocs($coment);


?>