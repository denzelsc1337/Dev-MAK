<?php 
require_once('../Model/Valorizacion.php');
if(isset($_POST["upload_valor_"])) {
    
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

        /*$oValor = new Valorizacion();
        $r = $oValor->updt_valoc_doc($id_reg,$status_solic);*/
        $archivos_total++;
    }
  }

  if ($archivos_total>0) {
  ?>
      <script>
          alert("Valorizacion correctamente cargada.");
      </script>
      <META http-equiv="Refresh" content="0.3 ; URL =../Valorizacion/">
  <?php 
  }else{
    echo '<script> alert("Error al cargar Valorizacion");</script>';
  }
}
?>