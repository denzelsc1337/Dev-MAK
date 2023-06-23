<?php
if(isset($_POST["btn_save_hr"])) {
    
  $dni_client = $_POST["dni_usu_0"];

  $target_dir = "../Documentos Legal/".$dni_client."/H_R/";
  echo $target_dir;
  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  $target_file = $target_dir . basename($_FILES["hr_s"]["name"]);

  if (move_uploaded_file($_FILES["hr_s"]["tmp_name"], $target_file)) {
?>
    <META http-equiv='Refresh' content = '0.2; URL =../Legal/InfoLegal.php'>;
    <script>
        alert("Hoja Resumen correctamente cargada.");
    </script>

<?php
  } else {
    echo '<script> alert("Error al cargar H.R");</script>';
  }
}

if(isset($_POST["btn_save_pu"])) {

  $dni_client = $_POST["dni_usu_1"];

  $target_dir = "../Documentos Legal/".$dni_client."/P_U/";
  echo $target_dir;
  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  $target_file = $target_dir . basename($_FILES["pu_s"]["name"]);

  if (move_uploaded_file($_FILES["pu_s"]["tmp_name"], $target_file)) {
?>
    <META http-equiv='Refresh' content = '0.2; URL =../Legal/InfoLegal.php'>;
    <script>
        alert("Predio Urbano correctamente cargada.");
    </script>

<?php
  } else {
    echo '<script> alert("Error al cargar Predio U.");</script>';
  }
}

if(isset($_POST["btn_save_cl"])) {

  $dni_client = $_POST["dni_usu_2"];

  $target_dir = "../Documentos Legal/".$dni_client."/C_L/";
  echo $target_dir;
  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  $target_file = $target_dir . basename($_FILES["cl_s"]["name"]);

  if (move_uploaded_file($_FILES["cl_s"]["tmp_name"], $target_file)) {
?>
    <META http-equiv='Refresh' content = '0.2; URL =../Legal/InfoLegal.php'>;
    <script>
        alert("Copia Literal correctamente cargada.");
    </script>

<?php
  } else {
    echo '<script> alert("Error al cargar Copia L.");</script>';
  }
}
?>