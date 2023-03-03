<?php
session_start();
if (isset($_SESSION['nom_usu']) == false) {
?>
	<!--echo "no has iniciado sesion, se te redireccionara al login";-->
	<h1>Usuario ni contraseña encontrados. Regresando al login.</h1>
	<META http-equiv="Refresh" content = "2 ; URL =../index.php">
<?php
	exit();
}elseif ($_SESSION["autenticado"] != 1) {
?>
	<!--echo "no estas autenticado, se te redireccionara al login";-->
	<h1>No estas autenticado, Regresando al login...</h1>
	<META http-equiv="Refresh" content = "2 ; URL =../index.php">
<?php
	exit();
}
?>