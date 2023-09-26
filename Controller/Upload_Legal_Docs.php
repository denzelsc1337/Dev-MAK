<?php

if (isset($_POST["btn_save_hr"])) {
  // print_r($_POST);

  $dni_client = $_POST["dni_usu_0"];
  $id_client = $_POST["id_cli_0"];
  $_tipo_doc_0 = $_POST["tipo_doc_0"];

  $file_count = count($_FILES["hr_s"]["name"]);

  $archivos_total = 0;

  $archivos_selecc = $_FILES['hr_s'];
  // print_r($archivos_selecc);

  $target_dir = "../Documentos Legal/" . $dni_client . "/H_R/";

  $getFiles_HR = $_POST['DataFiles'];
  $Files_HR = json_decode($getFiles_HR, true);

  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  foreach ($Files_HR as $key => $Files_HR_info) {
    $fileNames = $Files_HR_info['name'];
    $fileType = $Files_HR_info['type'];
    $fileTmp_name = $Files_HR_info['tmp_name'];
    $fileSize = $Files_HR_info['size'];

    $file_ext = explode('.', $fileNames);
    $file_ext = strtolower(end($file_ext));

    $file = explode(",", $fileNames);

    for ($i = 0; $i < $file_count; $i++) {

      $fileName = $archivos_selecc["name"][$i];
      $target_file = $target_dir . basename($archivos_selecc["name"][$i]);

      if (in_array($fileName, $file)) {
        if (move_uploaded_file($_FILES["hr_s"]["tmp_name"][$i], $target_file)) {
          // Agregar código del modelo aquí
          require_once('../Model/Legal.php');
          $olegal = new cLegal();

          // Modificar la llamada a la función del modelo con los nuevos parámetros
          $olegal->upload_documents_clients($fileNames, $fileType, $target_dir, $fileSize, $file_ext, $_tipo_doc_0, $id_client, $dni_client);

          $archivos_total++;
        }
      }
    }
  }

  // if (move_uploaded_file($_FILES["hr_s"]["tmp_name"][$i], $target_file)) {
  //   // Agregar código del modelo aquí
  //   require_once('../Model/Legal.php');
  //   $olegal = new cLegal();

  //   // Modificar la llamada a la función del modelo con los nuevos parámetros
  //   $olegal->upload_documents_clients($file_name, $file_type, $target_dir, $file_size, $file_ext, $_tipo_doc_0, $id_client, $dni_client);

  //   $archivos_total++;
  // }
  // }

}


if (isset($_POST["btn_updt_hr"])) {
  $dni_client = $_POST["dni_usu_0"];
  $id_client = $_POST["id_cli_0"];
  $_tipo_doc_0 = $_POST["tipo_doc_0"];
  $id_solic = $_POST["cod_reg_"];

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

    $target_dir = "../borradores/" . $id_solic . '/' . $dni_client . "/H_R/";

    echo $target_dir;

    if (!file_exists($target_dir)) {
      mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["hr_s"]["name"][$i]);

    if (move_uploaded_file($_FILES["hr_s"]["tmp_name"][$i], $target_file)) {
      // Agregar código del modelo aquí
      /*require_once('../Model/Legal.php');
              $olegal = new cLegal();

              // Modificar la llamada a la función del modelo con los nuevos parámetros
              $olegal->upload_documents_clients($file_name, $file_type, $target_dir, $file_size, $file_ext, $_tipo_doc_0, $id_client, $dni_client);*/

      $archivos_total++;
    }
  }


  if ($archivos_total > 0) {
?>
    <!-- <META http-equiv='Refresh' content='0.2; URL =../Legal/legal_.php'>; -->
    <!-- <script> -->
    <!-- alert("Borrador Actualizado."); -->
    <!-- </script> -->

  <?php
  } else {
    echo '<script> alert("Error al actualizar borrador");</script>';
  }
  print_r($_POST);
}


if (isset($_POST["btn_save_pu"])) {
  // print_r($_POST);

  $dni_client = $_POST["dni_usu_1"];
  $id_client = $_POST["id_cli_1"];
  $_tipo_doc_0 = $_POST["tipo_doc_1"];

  $file_count = count($_FILES["pu_s"]["name"]);

  $archivos_total = 0;

  $archivos_selecc = $_FILES['pu_s'];
  // print_r($archivos_selecc);

  $target_dir = "../Documentos Legal/" . $dni_client . "/P_U/";

  $getFiles_PU = $_POST['DataFiles'];
  $Files_PU = json_decode($getFiles_PU, true);

  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  foreach ($Files_PU as $key => $Files_PU_info) {
    $fileNames = $Files_PU_info['name'];
    $fileType = $Files_PU_info['type'];
    $fileTmp_name = $Files_PU_info['tmp_name'];
    $fileSize = $Files_PU_info['size'];

    $file_ext = explode('.', $fileNames);
    $file_ext = strtolower(end($file_ext));

    $file = explode(",", $fileNames);

    for ($i = 0; $i < $file_count; $i++) {

      $fileName = $archivos_selecc["name"][$i];
      $target_file = $target_dir . basename($archivos_selecc["name"][$i]);

      if (in_array($fileName, $file)) {
        if (move_uploaded_file($_FILES["pu_s"]["tmp_name"][$i], $target_file)) {
          // Agregar código del modelo aquí
          require_once('../Model/Legal.php');
          $olegal = new cLegal();

          // Modificar la llamada a la función del modelo con los nuevos parámetros
          $olegal->upload_documents_clients($fileNames, $fileType, $target_dir, $fileSize, $file_ext, $_tipo_doc_0, $id_client, $dni_client);

          $archivos_total++;
        }
      }
    }
  }
}



if (isset($_POST["btn_updt_pu"])) {
  $dni_client = $_POST["dni_usu_1"];
  $id_client = $_POST["id_cli_1"];
  $_tipo_doc_0 = $_POST["tipo_doc_1"];
  $id_solic = $_POST["cod_reg_2"];

  $file_count = count($_FILES["pu_s"]["name"]);

  $archivos_total = 0;

  for ($i = 0; $i < $file_count; $i++) {
    $file_name = $_FILES["pu_s"]["name"][$i];
    $file_tmp = $_FILES["pu_s"]["tmp_name"][$i];
    $file_size = $_FILES["pu_s"]["size"][$i];
    $file_error = $_FILES["pu_s"]["error"][$i];
    $file_type = $_FILES["pu_s"]["type"][$i];

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $file_desc = pathinfo(basename($_FILES["pu_s"]["name"][$i]), PATHINFO_FILENAME);
    $file_ext = pathinfo(basename($_FILES["pu_s"]["name"][$i]), PATHINFO_EXTENSION);

    $target_dir = "../borradores/" . $id_solic . '/' . $dni_client . "/P_U/";

    echo $target_dir;

    if (!file_exists($target_dir)) {
      mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["pu_s"]["name"][$i]);

    if (move_uploaded_file($_FILES["pu_s"]["tmp_name"][$i], $target_file)) {
      // Agregar código del modelo aquí
      /*require_once('../Model/Legal.php');
            $olegal = new cLegal();

            // Modificar la llamada a la función del modelo con los nuevos parámetros
            $olegal->upload_documents_clients($file_name, $file_type, $target_dir, $file_size, $file_ext, $_tipo_doc_0, $id_client, $dni_client);*/

      $archivos_total++;
    }
  }
  if ($archivos_total > 0) {
  ?>
    <META http-equiv='Refresh' content='0.2; URL =../Legal/legal_.php'>;
    <script>
      alert("Borrador Actualizado.");
    </script>

  <?php
  } else {
    echo '<script> alert("Error al actualizar borrador");</script>';
  }
}





if (isset($_POST["btn_save_cl"])) {

  $dni_client = $_POST["dni_usu_2"];
  $id_client = $_POST["id_cli_2"];
  $_tipo_doc_0 = $_POST["tipo_doc_2"];

  $file_count = count($_FILES["cl_s"]["name"]);

  $archivos_total = 0;

  for ($i = 0; $i < $file_count; $i++) {
    $file_name = $_FILES["cl_s"]["name"][$i];
    $file_tmp = $_FILES["cl_s"]["tmp_name"][$i];
    $file_size =  $_FILES["cl_s"]["size"][$i];
    $file_error = $_FILES["cl_s"]["error"][$i];
    $file_type = $_FILES["cl_s"]["type"][$i];

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $file_desc = pathinfo(basename($_FILES["cl_s"]["name"][$i]), PATHINFO_FILENAME);
    $file_ext = pathinfo(basename($_FILES["cl_s"]["name"][$i]), PATHINFO_EXTENSION);


    $target_dir = "../Documentos Legal/" . $dni_client . "/C_L/";

    echo $target_dir;

    if (!file_exists($target_dir)) {
      mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["cl_s"]["name"][$i]);

    if (move_uploaded_file($_FILES["cl_s"]["tmp_name"][$i], $target_file)) {
      require_once('../Model/Legal.php');
      $olegal = new cLegal();

      // Modificar la llamada a la función del modelo con los nuevos parámetros
      $olegal->upload_documents_clients($file_name, $file_type, $target_dir, $file_size, $file_ext, $_tipo_doc_0, $id_client, $dni_client);
      $archivos_total++;
    }
  }

  if ($archivos_total > 0) {
  ?>
    <META http-equiv='Refresh' content='0.2; URL =../Legal/legal_.php'>;
    <script>
      alert("Copia(s) Literal(es) subido(s).");
    </script>

  <?php
  } else {
    echo '<script> alert("Error al cargar C.L");</script>';
  }
}


if (isset($_POST["btn_updt_cl"])) {
  $dni_client = $_POST["dni_usu_2"];
  $id_client = $_POST["id_cli_2"];
  $_tipo_doc_0 = $_POST["tipo_doc_2"];
  $id_solic = $_POST["cod_reg_3"];

  $file_count = count($_FILES["cl_s"]["name"]);

  $archivos_total = 0;

  for ($i = 0; $i < $file_count; $i++) {
    $file_name = $_FILES["cl_s"]["name"][$i];
    $file_tmp = $_FILES["cl_s"]["tmp_name"][$i];
    $file_size = $_FILES["cl_s"]["size"][$i];
    $file_error = $_FILES["cl_s"]["error"][$i];
    $file_type = $_FILES["cl_s"]["type"][$i];

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $file_desc = pathinfo(basename($_FILES["cl_s"]["name"][$i]), PATHINFO_FILENAME);
    $file_ext = pathinfo(basename($_FILES["cl_s"]["name"][$i]), PATHINFO_EXTENSION);

    $target_dir = "../borradores/" . $id_solic . '/' . $dni_client . "/C_L/";

    echo $target_dir;

    if (!file_exists($target_dir)) {
      mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["cl_s"]["name"][$i]);

    if (move_uploaded_file($_FILES["cl_s"]["tmp_name"][$i], $target_file)) {
      // Agregar código del modelo aquí
      /*require_once('../Model/Legal.php');
            $olegal = new cLegal();

            // Modificar la llamada a la función del modelo con los nuevos parámetros
            $olegal->upload_documents_clients($file_name, $file_type, $target_dir, $file_size, $file_ext, $_tipo_doc_0, $id_client, $dni_client);*/

      $archivos_total++;
    }
  }
  if ($archivos_total > 0) {
  ?>
    <META http-equiv='Refresh' content='0.2; URL =../Legal/legal_.php'>;
    <script>
      alert("Borrador Actualizado.");
    </script>

  <?php
  } else {
    echo '<script> alert("Error al actualizar borrador");</script>';
  }
}


if (isset($_POST["btn_save_dni"])) {

  $dni_client = $_POST["dni_usu_3"];
  $id_client = $_POST["id_cli_3"];
  $_tipo_doc_0 = $_POST["tipo_doc_3"];

  $file_count = count($_FILES["dni_s"]["name"]);

  $archivos_total = 0;

  for ($i = 0; $i < $file_count; $i++) {

    $file_name = $_FILES["dni_s"]["name"][$i];
    $file_tmp = $_FILES["dni_s"]["tmp_name"][$i];
    $file_size = $_FILES["dni_s"]["size"][$i];
    $file_error = $_FILES["dni_s"]["error"][$i];
    $file_type = $_FILES["dni_s"]["type"][$i];

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $file_desc = pathinfo(basename($_FILES["dni_s"]["name"][$i]), PATHINFO_FILENAME);
    $file_ext = pathinfo(basename($_FILES["dni_s"]["name"][$i]), PATHINFO_EXTENSION);

    $target_dir = "../Documentos Legal/" . $dni_client . "/DNI/";

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
      $olegal->upload_documents_clients($file_name, $file_type, $target_dir, $file_size, $file_ext, $_tipo_doc_0, $id_client, $dni_client);
      //agregar codigo del model aqui
      $archivos_total++;
    }
  }

  if ($archivos_total > 0) {
  ?>
    <META http-equiv='Refresh' content='0.2; URL =../Legal/legal_.php'>;
    <script>
      alert("DNI(s)subido(s) correctamente.");
    </script>

  <?php
  } else {
    echo '<script> alert("Error al cargar C.L");</script>';
  }
}


if (isset($_POST["btn_updt_dni"])) {
  $dni_client = $_POST["dni_usu_3"];
  $id_client = $_POST["id_cli_3"];
  $_tipo_doc_0 = $_POST["tipo_doc_3"];
  $id_solic = $_POST["cod_reg_4"];

  $file_count = count($_FILES["dni_s"]["name"]);

  $archivos_total = 0;

  for ($i = 0; $i < $file_count; $i++) {
    $file_name = $_FILES["dni_s"]["name"][$i];
    $file_tmp = $_FILES["dni_s"]["tmp_name"][$i];
    $file_size = $_FILES["dni_s"]["size"][$i];
    $file_error = $_FILES["dni_s"]["error"][$i];
    $file_type = $_FILES["dni_s"]["type"][$i];

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $file_desc = pathinfo(basename($_FILES["dni_s"]["name"][$i]), PATHINFO_FILENAME);
    $file_ext = pathinfo(basename($_FILES["dni_s"]["name"][$i]), PATHINFO_EXTENSION);

    $target_dir = "../borradores/" . $id_solic . '/' . $dni_client . "/DNI/";

    echo $target_dir;

    if (!file_exists($target_dir)) {
      mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($_FILES["dni_s"]["name"][$i]);

    if (move_uploaded_file($_FILES["dni_s"]["tmp_name"][$i], $target_file)) {
      // Agregar código del modelo aquí
      /*require_once('../Model/Legal.php');
            $olegal = new cLegal();

            // Modificar la llamada a la función del modelo con los nuevos parámetros
            $olegal->upload_documents_clients($file_name, $file_type, $target_dir, $file_size, $file_ext, $_tipo_doc_0, $id_client, $dni_client);*/

      $archivos_total++;
    }
  }
  if ($archivos_total > 0) {
  ?>
    <META http-equiv='Refresh' content='0.2; URL =../Legal/legal_.php'>;
    <script>
      alert("Borrador Actualizado.");
    </script>

<?php
  } else {
    echo '<script> alert("Error al actualizar borrador");</script>';
  }
}

?>