<?php

if(isset($_POST["btn_save_hr"])) {
    
  $dni_client = $_POST["dni_usu_0"];
  $id_client = $_POST["id_cli_0"];

  $file = $_FILES["hr_s"];


  $file_name = $file["name"];
  $file_tmp = $file["tmp_name"];
  $file_size = $file["size"];
  $file_error = $file["error"];
  $file_type = $file["type"];

  $file_ext = explode('.', $file_name);
  $file_ext = strtolower(end($file_ext));

  $file_desc = pathinfo(basename($_FILES["hr_s"]["name"]), PATHINFO_FILENAME);
  $file_ext = pathinfo(basename($_FILES["hr_s"]["name"]), PATHINFO_EXTENSION);

  $target_dir = "../Documentos Legal/".$dni_client."/H_R/";

  echo $target_dir;

  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  $target_file = $target_dir . basename($_FILES["hr_s"]["name"]);

  if (move_uploaded_file($_FILES["hr_s"]["tmp_name"], $target_file)) {

    //agregar codigo del model aqui

    require_once('../Model/Legal.php');
    $olegal = new cLegal();

    // Modificar la llamada a la función del modelo con los nuevos parámetros
    $olegal->upload_documents_clients($file_name, $file_type, $target_dir, $file_size, $file_ext, $id_client,$dni_client);
    //agregar codigo del model aqui
?>

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

if(isset($_POST["btn_save_dni"])) {

  $dni_client = $_POST["dni_usu_3"];

  $target_dir = "../Documentos Legal/".$dni_client."/DNI/";
  echo $target_dir;
  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  $target_file = $target_dir . basename($_FILES["dni_s"]["name"]);

  if (move_uploaded_file($_FILES["dni_s"]["tmp_name"], $target_file)) {
?>
    <META http-equiv='Refresh' content = '0.2; URL =../Legal/InfoLegal.php'>;
    <script>
        alert("Dni correctamente cargado.");
    </script>

<?php
  } else {
    echo '<script> alert("Error al cargar DNI.");</script>';
  }
}

?>