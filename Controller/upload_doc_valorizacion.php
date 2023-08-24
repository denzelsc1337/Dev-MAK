<?php 
require_once('../Model/Valorizacion.php');

  $id_reg = $_POST["id_reg_valor"];
  $dni_cli = $_POST["dni_solic_valor"];
  
  $target_dir = "../Valorizaciones/".$id_reg."/".$dni_cli."/docs_val/";

  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  $archivos_selecc = $_FILES["valorizacion_files"];

  $archivos_cont = count($archivos_selecc['name']);

  $archivos_total = 0;

  for ($i=0; $i < $archivos_cont ; $i++) { 
    $ubicacion_save = $target_dir . basename($archivos_selecc["name"][$i]);
    if (move_uploaded_file($archivos_selecc["tmp_name"][$i], $ubicacion_save)) {

        $archivos_total++;
    }
  }
  if ($archivos_total > 0) {
    $response["archivos_total"] = $archivos_total;
  } else {
    $response["error"] = "No se pudieron cargar archivos.";
  }

  echo json_encode($response);

?>