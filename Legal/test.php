<?php 

$data_legal_json = isset($_GET['data_legal']) ? $_GET['data_legal'] : '';
$data_legal = json_decode($data_legal_json, true);

echo "<pre>";
//print_r($data_legal_json);
//print_r($data_legal_json);
//print_r($data_legal);
echo $data_legal['nom_client'];
echo "</pre>";

if (isset($data_legal_json['nom_client']) && isset($data_legal_json['ape_client'])) {
    $nombre_apellido = $data_legal_json['nom_client'] . ' ' . $data_legal_json['ape_client'];
} else {
    $nombre_apellido = 'Datos no disponibles';
}

echo $data_legal['ape_client'];

?>