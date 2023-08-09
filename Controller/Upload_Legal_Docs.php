<?php

if(isset($_POST["btn_save_hr"])) {
    $dni_client = $_POST["dni_usu_0"];
    $id_client = $_POST["id_cli_0"];
    $_tipo_doc_0 = $_POST["tipo_doc_0"];

    $file_count = count($_FILES["hr_s"]["name"]);

    $archivos_total = 0;

    for ($i = 0; $i < $file_count; $i++) {
        $file_name = $_FILES["hr_s"]["name"][$i];
        $file_tmp = $_FILES["hr_s"]["tmp_name"][$i];
        $file_size = $_FILES["hr_s"]["size"][$i];
        $file_error = $_FILES["hr_s"]["error"][$i];
        $file_type = $_FILES["hr_s"]["type"][$i];

        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        $file_desc = pathinfo(basename($_FILES["hr_s"]["name"][$i]), PATHINFO_FILENAME);
        $file_ext = pathinfo(basename($_FILES["hr_s"]["name"][$i]), PATHINFO_EXTENSION);

        $target_dir = "../Documentos Legal/".$dni_client."/H_R/";

        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $target_file = $target_dir . basename($_FILES["hr_s"]["name"][$i]);

        if (move_uploaded_file($_FILES["hr_s"]["tmp_name"][$i], $target_file)) {
            // Agregar código del modelo aquí
            require_once('../Model/Legal.php');
            $olegal = new cLegal();

            // Modificar la llamada a la función del modelo con los nuevos parámetros
            $olegal->upload_documents_clients($file_name, $file_type, $target_dir, $file_size, $file_ext, $_tipo_doc_0, $id_client, $dni_client);

            $archivos_total++;
        }
    }


    if ($archivos_total>0) {
    ?>
    <META http-equiv='Refresh' content='0.2; URL =../Legal/legal_.php'>;
    <script>
        alert("Hoja Resumen correctamente cargada.");
    </script>

    <?php
    }else{
      echo '<script> alert("Error al cargar H.R");</script>';
    }

}


if(isset($_POST["btn_save_pu"])) {

  $dni_client = $_POST["dni_usu_1"];
  $id_client = $_POST["id_cli_1"];
  $_tipo_doc_0 = $_POST["tipo_doc_1"];

  $file_count = count($_FILES["pu_s"]["name"]);

  $archivos_total = 0;

  for ($i=0;  $i < $file_count; $i++) {
    $file_name = $_FILES["pu_s"]["name"][$i];
    $file_tmp = $_FILES["pu_s"]["tmp_name"][$i];
    $file_size = $_FILES["pu_s"]["size"][$i];
    $file_error = $_FILES["pu_s"]["error"][$i];
    $file_type = $_FILES["pu_s"]["type"][$i];

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $file_desc = pathinfo(basename($_FILES["pu_s"]["name"][$i]), PATHINFO_FILENAME);
    $file_ext = pathinfo(basename($_FILES["pu_s"]["name"][$i]), PATHINFO_EXTENSION);


    $target_dir = "../Documentos Legal/".$dni_client."/P_U/";

    if (!file_exists($target_dir)) {
      mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["pu_s"]["name"][$i]);

    if (move_uploaded_file($_FILES["pu_s"]["tmp_name"][$i], $target_file)) {
      //agregar codigo del model aqui
      require_once('../Model/Legal.php');
      $olegal = new cLegal();

      // Modificar la llamada a la función del modelo con los nuevos parámetros
      $olegal->upload_documents_clients($file_name, $file_type, $target_dir, $file_size, $file_ext, $_tipo_doc_0,$id_client,$dni_client);
      //agregar codigo del model aqui

      $archivos_total++;
    }

  }

    if ($archivos_total>0) {
    ?>
    <META http-equiv='Refresh' content='0.2; URL =../Legal/legal_.php'>;
    <script>
        alert("Predio Urbano correctamente cargado.");
    </script>

    <?php
    }else{
      echo '<script> alert("Error al cargar P.U");</script>';
    }

}


if(isset($_POST["btn_save_cl"])) {

  $dni_client = $_POST["dni_usu_2"];
  $id_client = $_POST["id_cli_2"];
  $_tipo_doc_0 = $_POST["tipo_doc_2"];

  $file_count = count($_FILES["cl_s"]["name"]);

  $archivos_total = 0;

  for ($i=0;  $i < $file_count; $i++) { 
    $file_name = $_FILES["cl_s"]["name"][$i];
    $file_tmp = $_FILES["cl_s"]["tmp_name"][$i];
    $file_size =  $_FILES["cl_s"]["size"][$i];
    $file_error = $_FILES["cl_s"]["error"][$i];
    $file_type = $_FILES["cl_s"]["type"][$i];

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $file_desc = pathinfo(basename($_FILES["cl_s"]["name"][$i]), PATHINFO_FILENAME);
    $file_ext = pathinfo(basename($_FILES["cl_s"]["name"][$i]), PATHINFO_EXTENSION);


    $target_dir = "../Documentos Legal/".$dni_client."/C_L/";

    echo $target_dir;

    if (!file_exists($target_dir)) {
      mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["cl_s"]["name"][$i]);

    if (move_uploaded_file($_FILES["cl_s"]["tmp_name"][$i], $target_file)) {
      require_once('../Model/Legal.php');
      $olegal = new cLegal();

      // Modificar la llamada a la función del modelo con los nuevos parámetros
      $olegal->upload_documents_clients($file_name, $file_type, $target_dir, $file_size, $file_ext, $_tipo_doc_0,$id_client,$dni_client);
      $archivos_total++;

    }
  }

    if ($archivos_total>0) {
    ?>
    <META http-equiv='Refresh' content='0.2; URL =../Legal/legal_.php'>;
    <script>
        alert("Copia(s) Literal(es) subido(s).");
    </script>

    <?php
    }else{
      echo '<script> alert("Error al cargar C.L");</script>';
    }
}



if(isset($_POST["btn_save_dni"])) {

  $dni_client = $_POST["dni_usu_3"];
  $id_client = $_POST["id_cli_3"];
  $_tipo_doc_0 = $_POST["tipo_doc_3"];

  $file_count = count($_FILES["dni_s"]["name"]);

  $archivos_total = 0;

  for ($i=0;  $i < $file_count; $i++) { 
    
    $file_name =$_FILES["dni_s"]["name"][$i];
    $file_tmp =$_FILES["dni_s"]["tmp_name"][$i];
    $file_size =$_FILES["dni_s"]["size"][$i];
    $file_error =$_FILES["dni_s"]["error"][$i];
    $file_type =$_FILES["dni_s"]["type"][$i];

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $file_desc = pathinfo(basename($_FILES["dni_s"]["name"][$i]), PATHINFO_FILENAME);
    $file_ext = pathinfo(basename($_FILES["dni_s"]["name"][$i]), PATHINFO_EXTENSION);

    $target_dir = "../Documentos Legal/".$dni_client."/DNI/";

    //echo $target_dir;

    if (!file_exists($target_dir)) {
      mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["dni_s"]["name"][$i]);

    if (move_uploaded_file($_FILES["dni_s"]["tmp_name"][$i], $target_file)) {
      //agregar codigo del model aqui
      require_once('../Model/Legal.php');
      $olegal = new cLegal();

      // Modificar la llamada a la función del modelo con los nuevos parámetros
      $olegal->upload_documents_clients($file_name, $file_type, $target_dir, $file_size, $file_ext, $_tipo_doc_0,$id_client,$dni_client);
      //agregar codigo del model aqui
      $archivos_total++;
    }
  }

  if ($archivos_total>0) {
  ?>
  <META http-equiv='Refresh' content='0.2; URL =../Legal/legal_.php'>;
  <script>
      alert("DNI(s)subido(s) correctamente.");
  </script>

  <?php
  }else{
    echo '<script> alert("Error al cargar C.L");</script>';
  }

}

?>