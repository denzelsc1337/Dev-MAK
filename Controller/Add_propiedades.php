<?php
require_once('../Model/propiedades.php');
include_once('../Config/Conexion.php');

// print_r($_POST);

$cnx = new Conexion();
$cadena = $cnx->abrirConexion();

//Contar los elementos en $_POST
// $num_elements = count($_POST);

//Imprimir la cantidad de elementos recibidos
// echo "Número de elementos recibidos por POST: " . $num_elements . "\n";

$data = [];

$i = 1; // Contador para las claves del array $data

foreach ($_POST as $key => $value) {
    $data[$i] = $value;
    $i++;
}

// Ahora $data contiene todos los elementos de $_POST, y están numerados secuencialmente.
// print_r($data);

// echo "\n";
// echo "\n";
// echo "\n";

// print_r($_POST);


$oProp = new propiedades();
$r = $oProp->add_Propiedades($data, $cadena);



if ($r) {
    echo $r;
    // print_r($_POST);
} else {
    echo "Error al insertar el registro.";
}


// ------------------------------------------------------
// $data[1] = $_POST["title_prop"];
// $data[2] = $_POST["desc_prop"];
// $data[3] = $_POST["modalidad_prop"];
// $data[4] = $_POST["tipo_prop_"];
// ------------------------------------------------------
// $data[5] = $_POST["precio_"];
// $data[6] = $_POST["precio_m2"];
// $data[7] = $_POST["area_total"];
// $data[8] = $_POST["area_construida"];
// $data[9] = $_POST["area_ocupada"];
// $data[10] = $_POST["dormitorios_"];
// $data[11] = $_POST["banos_"];
// $data[12] = $_POST["cochera_"];
// $data[13] = $_POST["num_pisos_"];
// $data[14] = $_POST["porcen_comision"];
// ------------------------------------------------------
// $data[9] = $_POST["vid-yt-prop"];
// $data[9] = $_POST["vid-rec-prop"];
// ------------------------------------------------------
// $data[9] = $_POST["depa_prop"];
// $data[9] = $_POST["prov_prop"];
// $data[9] = $_POST["distr_prop"];
// ------------------------------------------------------
// $data[9] = $_POST["aire_acondicionado"];
// $data[9] = $_POST["cant_aire_acondicionado"];
// $data[9] = $_POST["area_juegos"];
// $data[9] = $_POST["cant_area_juegos"];
// $data[9] = $_POST["cant_area_juegos"];
// $data[9] = $_POST["cant_area_juegos"];
// ------------------------------------------------------





// echo "-------------";
// echo "\n";


// var_dump($_FILES);

// echo "-------------";
// echo "\n";

// print_r($arrayFile = $_POST['arrayFile']);


// echo $archivos_selecc = $_FILES["table-inputFile"];
