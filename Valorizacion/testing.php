<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 ?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>test</title>

 </head>
 <body bgcolor="#999999">

 	<form method="post" id="form_1">
 	<!--<form method="post" id="form_1" action="../Controller/Add_Valorizacion.php">-->
	    <fieldset>
	        <legend>Test</legend>
	        direccion:<input type="text" id="direccion_" name="direccion_"><br>
	        tipo prop:<input type="text" id="tipo_prop" name="tipo_prop"><br>
	        sub tipo:<input type="text" id="sub_tipo_prop" name="sub_tipo_prop"><br>
	        tipo promo:<input type="text" id="tipo_prom" name="tipo_prom"><br>
	        area t:<input type="text" id="a_t" name="a_t"><br>
	        area c:<input type="text" id="a_c" name="a_c"><br>
	        antig:<input type="text" id="antig" name="antig"><br>
	        sala comedor: <input type="checkbox" id="sala_com" name="sala_com"><br>
	        sala:<input type="checkbox" id="sala_" name="sala_"><br>
	        comedor: <input type="checkbox" id="comedor_" name="comedor_"><br>
	        cocina:<input type="checkbox" id="cocina_" name="cocina_"><br>
	        amoblado:<input type="checkbox" id="amoblado_" name="amoblado_"><br>
	        piscina:<input type="checkbox" id="piscina_d" name="piscina_d"><br>
	        cant dorm: <input type="text" id="cant_dorm" name="cant_dorm"><br>
	        cant dorm b:<input type="text" id="cant_dorm_b_" name="cant_dorm_b_"><br>
	        cant baño:<input type="text" id="cant_banho" name="cant_banho"><br>
	        baño vis:<input type="checkbox" id="banho_vis" name="banho_vis"><br>
	        cuarto serv:<input type="checkbox" id="cuarto_serv" name="cuarto_serv"><br>
	        baño serv:<input type="checkbox" id="banho_serv" name="banho_serv"><br>
	        cant estacion:<input type="text" id="cant_estac" name="cant_estac"><br>
	        deposito:<input type="checkbox" id="deposito_" name="deposito_"><br>
	        ubicacion:<input type="text" id="ubic" name="ubic"><br>
	        vista: <input type="text" id="vista_" name="vista_"><br>
	        acabado<input type="text" id="acabado_" name="acabado_"><br>
	    </fieldset>
	    <button type="submit" id="add" name="add">send</button>
	</form>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 	<script src="../Vista/assets/functions.js"></script>
 </body>
 </html>