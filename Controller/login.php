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
		?>
			<script>
				alert("Autenticacion incorrecta. Vuelve e ingresar Datos")
			</script>;
			<META http-equiv='Refresh' content='0.2; URL = ../index.php'>;

		<?php
		} elseif ($sentencia->rowCount() == 1) {

			$_SESSION['nom_usu'] = $datos->nom_client;
			$_SESSION['ape_usu'] = $datos->ape_client;

			$_SESSION['autenticado'] = 1;

		?>
			<META http-equiv="Refresh" content="0.3 ; URL =../Vista/dashboard.php">
		<?php

		}
	}
}
?>