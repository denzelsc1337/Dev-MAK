<?php
require_once('../Model/Legal.php');

if (isset($_POST['btn_save_solic_l'])) {

	$id_soli_l = $_POST['id_legal_solic'];
	$coment = $_POST['coment_'];

	$oLegal = new cLegal();
	$r = $oLegal->updateSolicLegalDocs($id_soli_l,$coment);

	if ($r == 1) {
	?>
	<script type="text/javascript"> alert("Comentario Agregado") </script>
	<META http-equiv='Refresh' content = '0.2; URL =../Legal/'>
	<?php
	  }else{
	?>
	  <script type="text/javascript"> alert("error") </script>
	<?php
	}
}

?>