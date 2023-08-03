<?php
require_once('../Model/Legal.php');
if (isset($_POST['btn_save_solic'])) {
    $rutas = $_POST["rutas_doscs"];
    $data[1] = $_POST["nom_cli_solic"];
    $data[2] = $_POST["ape_cli_solic"];
    $data[3] = $_POST["dir_cli_solic"];
    $data[4] = $_POST["id_user"];

    $oLegal = new cLegal();
    $r = $oLegal->save_solic_legal($rutas,$data);


    if ($r == 1) {
    ?>
    <script type="text/javascript"> alert("Solicitud guardada") </script>
    <META http-equiv='Refresh' content = '0.2; URL =../Legal/legal_historico.php'>
  <?php
    }else{
  ?>
    <script type="text/javascript"> alert("error") </script>
  <?php
  }

}
?>