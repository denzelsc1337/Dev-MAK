<?php
session_start();

$conexion = new PDO('mysql:host=localhost;dbname=mak','root','');

if (isset($_POST['username']) && isset($_POST['password'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];


	if ($user == "" || $pass == "") {
?>
		<META http-equiv="Refresh" content=" 0.2; URL = index.php">

		<?php
	} else {
		$sentencia = $conexion->prepare('select * from clientes_servicios where usu_client = ? and pass_client = ?');

		$sentencia->execute([$user, $pass]);

		$datos = $sentencia->fetch(PDO::FETCH_OBJ);

		if ($datos === FALSE) {
			echo "incorrect_auth";

		} elseif ($sentencia->rowCount() == 1) {

			$_SESSION['id_usu'] = $datos->id_client;
			$_SESSION['dni'] = $datos->dni_client;
			$_SESSION['nom_usu'] = $datos->nom_client;
			$_SESSION['ape_usu'] = $datos->ape_client;
			$_SESSION['email_usu'] = $datos->email_client;
			$_SESSION['telef_usu'] = $datos->telef_client;
			$_SESSION['tipo_usu'] = $datos->tipo_usu_cod;

			$_SESSION['autenticado'] = 1;

			echo "success";

		}
	}
}
?>