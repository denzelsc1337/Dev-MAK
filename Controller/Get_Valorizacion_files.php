<?php 

$cod_solic = $_POST['id_solic_v'];
$dni_u = $_POST['dni_cli_v'];

// Directorio donde se encuentran los archivos
$directorio = "../Valorizaciones/".$cod_solic."/".$dni_u."/";

$archivos = scandir($directorio);


$archivos = array_diff($archivos, array('.', '..'));

if (count($archivos) == 0) {
	
}else{
	foreach ($archivos as $archivo) {
    	echo $archivo . "\n";
	}
}

?>