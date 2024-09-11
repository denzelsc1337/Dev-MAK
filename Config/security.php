<?php
session_start();

if (!isset($_SESSION['id_usu'])) {
	echo "<h1>Usuario ni contraseña encontrados. Regresando al login.</h1>";
	header("Location: ./index.php");
	exit();
} elseif ($_SESSION["autenticado"] != 1) {
	echo "<h1>No estás autenticado, Regresando al login...</h1>";
	header("Location: ./index.php");
	exit();
}
