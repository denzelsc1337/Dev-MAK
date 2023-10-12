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

    // echo $target_dir;

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

  echo $archivos_total;
}



if (isset($_POST["btn_save_cl"])) {

  $dni_client = $_POST["dni_usu_2"];
  $id_client = $_POST["id_cli_2"];
  $_tipo_doc_0 = $_POST["tipo_doc_2"];

  $file_count = count($_FILES["cl_s"]["name"]);

  $archivos_total = 0;

  $archivos_selecc = $_FILES['cl_s'];
  // print_r($archivos_selecc);

  $target_dir = "../Documentos Legal/" . $dni_client . "/C_L/";

  $getFiles_CL = $_POST['DataFiles'];
  $Files_CL = json_decode($getFiles_CL, true);

  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  foreach ($Files_CL as $key => $Files_CL_info) {
    $fileNames = $Files_CL_info['name'];
    $fileType = $Files_CL_info['type'];
    $fileTmp_name = $Files_CL_info['tmp_name'];
    $fileSize = $Files_CL_info['size'];

    $file_ext = explode('.', $fileNames);
    $file_ext = strtolower(end($file_ext));

    $file = explode(",", $fileNames);

    for ($i = 0; $i < $file_count; $i++) {

      $fileName = $archivos_selecc["name"][$i];
      $target_file = $target_dir . basename($archivos_selecc["name"][$i]);

      if (in_array($fileName, $file)) {
        if (move_uploaded_file($_FILES["cl_s"]["tmp_name"][$i], $target_file)) {
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
}



if (isset($_POST["btn_save_dni"])) {

  $dni_client = $_POST["dni_usu_3"];
  $id_client = $_POST["id_cli_3"];
  $_tipo_doc_0 = $_POST["tipo_doc_3"];

  $file_count = count($_FILES["dni_s"]["name"]);

  $archivos_total = 0;

  $archivos_selecc = $_FILES['dni_s'];
  // print_r($archivos_selecc);

  $target_dir = "../Documentos Legal/" . $dni_client . "/DNI/";

  $getFiles_DNI = $_POST['DataFiles'];
  $Files_DNI = json_decode($getFiles_DNI, true);

  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  foreach ($Files_DNI as $key => $Files_DNI_info) {
    $fileNames = $Files_DNI_info['name'];
    $fileType = $Files_DNI_info['type'];
    $fileTmp_name = $Files_DNI_info['tmp_name'];
    $fileSize = $Files_DNI_info['size'];

    $file_ext = explode('.', $fileNames);
    $file_ext = strtolower(end($file_ext));

    $file = explode(",", $fileNames);

    for ($i = 0; $i < $file_count; $i++) {

      $fileName = $archivos_selecc["name"][$i];
      $target_file = $target_dir . basename($archivos_selecc["name"][$i]);

      if (in_array($fileName, $file)) {
        if (move_uploaded_file($_FILES["dni_s"]["tmp_name"][$i], $target_file)) {
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
}

////

if (isset($_POST["btn_isrt_hr"])) {

  $archivos_selecc = $_FILES["hr_s"];

  $_client_dni = $_POST["dni_usu_hr"];
  $_client_id = $_POST["id_cli_hr"];
  $_client_td = $_POST["tipo_doc_hr"];


  $getFiles_HR = $_POST['DataFiles'];
  $Files_HR = json_decode($getFiles_HR, true);

  $target_dir = "../Documentos Legal/" . $_client_dni . "/H_R/";

  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  $archivos_total = 0;
  $file_count = count($archivos_selecc['name']);

  // echo "Número: " . $file_count;

  foreach ($Files_HR as $key => $Files_HR_info) {
    $fileNames = $Files_HR_info['name'];
    $fileType = $Files_HR_info['type'];
    $fileTmp_name = $Files_HR_info['tmp_name'];
    $fileSize = $Files_HR_info['size'];

    $file = explode(",", $fileNames);

    $file_ext = explode('.', $fileNames);
    $file_ext = strtolower(end($file_ext));

    for ($i = 0; $i < $file_count; $i++) {

      $fileName = $archivos_selecc["name"][$i];
      $target_file = $target_dir . basename($archivos_selecc["name"][$i]);

      if (in_array($fileName, $file)) {
        if (move_uploaded_file($archivos_selecc["tmp_name"][$i], $target_file)) {
          $archivos_total++;

          // Agregar código del modelo aquí
          require_once('../Model/Legal.php');
          $olegal = new cLegal();

          // Modificar la llamada a la función del modelo con los nuevos parámetros
          $olegal->upload_documents_clients($fileNames, $fileType, $target_dir, $fileSize, $file_ext, $_client_td, $_client_id, $_client_dni);
        }
      }
    }
  }
  echo $archivos_total;
}

if (isset($_POST["btn_isrt_pu"])) {

  $archivos_selecc = $_FILES["pu_s"];

  $_client_dni = $_POST["dni_usu_pu"];
  $_client_id = $_POST["id_cli_pu"];
  $_client_td = $_POST["tipo_doc_pu"];


  $getFiles_PU = $_POST['DataFiles'];
  $Files_PU = json_decode($getFiles_PU, true);

  $target_dir = "../Documentos Legal/" . $_client_dni . "/P_U/";

  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  $archivos_total = 0;
  $file_count = count($archivos_selecc['name']);

  // echo "Número: " . $file_count;

  foreach ($Files_PU as $key => $Files_PU_info) {
    $fileNames = $Files_PU_info['name'];
    $fileType = $Files_PU_info['type'];
    $fileTmp_name = $Files_PU_info['tmp_name'];
    $fileSize = $Files_PU_info['size'];

    $file = explode(",", $fileNames);

    $file_ext = explode('.', $fileNames);
    $file_ext = strtolower(end($file_ext));

    for ($i = 0; $i < $file_count; $i++) {

      $fileName = $archivos_selecc["name"][$i];
      $target_file = $target_dir . basename($archivos_selecc["name"][$i]);

      if (in_array($fileName, $file)) {
        if (move_uploaded_file($archivos_selecc["tmp_name"][$i], $target_file)) {
          $archivos_total++;

          // Agregar código del modelo aquí
          require_once('../Model/Legal.php');
          $olegal = new cLegal();

          // Modificar la llamada a la función del modelo con los nuevos parámetros
          $olegal->upload_documents_clients($fileNames, $fileType, $target_dir, $fileSize, $file_ext, $_client_td, $_client_id, $_client_dni);
        }
      }
    }
  }
  echo $archivos_total;
}

if (isset($_POST["btn_isrt_cl"])) {

  $archivos_selecc = $_FILES["cl_s"];

  $_client_dni = $_POST["dni_usu_cl"];
  $_client_id = $_POST["id_cli_cl"];
  $_client_td = $_POST["tipo_doc_cl"];


  $getFiles_CL = $_POST['DataFiles'];
  $Files_CL = json_decode($getFiles_CL, true);

  $target_dir = "../Documentos Legal/" . $_client_dni . "/C_L/";

  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  $archivos_total = 0;
  $file_count = count($archivos_selecc['name']);

  // echo "Número: " . $file_count;

  foreach ($Files_CL as $key => $Files_CL_info) {
    $fileNames = $Files_CL_info['name'];
    $fileType = $Files_CL_info['type'];
    $fileTmp_name = $Files_CL_info['tmp_name'];
    $fileSize = $Files_CL_info['size'];

    $file = explode(",", $fileNames);

    $file_ext = explode('.', $fileNames);
    $file_ext = strtolower(end($file_ext));

    for ($i = 0; $i < $file_count; $i++) {

      $fileName = $archivos_selecc["name"][$i];
      $target_file = $target_dir . basename($archivos_selecc["name"][$i]);

      if (in_array($fileName, $file)) {
        if (move_uploaded_file($archivos_selecc["tmp_name"][$i], $target_file)) {
          $archivos_total++;

          // Agregar código del modelo aquí
          require_once('../Model/Legal.php');
          $olegal = new cLegal();

          // Modificar la llamada a la función del modelo con los nuevos parámetros
          $olegal->upload_documents_clients($fileNames, $fileType, $target_dir, $fileSize, $file_ext, $_client_td, $_client_id, $_client_dni);
        }
      }
    }
  }
  echo $archivos_total;
}

if (isset($_POST["btn_isrt_dni"])) {

  $archivos_selecc = $_FILES["dni_s"];

  $_client_dni = $_POST["dni_usu_dni"];
  $_client_id = $_POST["id_cli_dni"];
  $_client_td = $_POST["tipo_doc_dni"];


  $getFiles_DNI = $_POST['DataFiles'];
  $Files_DNI = json_decode($getFiles_DNI, true);

  $target_dir = "../Documentos Legal/" . $_client_dni . "/DNI/";

  if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
  }

  $archivos_total = 0;
  $file_count = count($archivos_selecc['name']);

  foreach ($Files_DNI as $key => $Files_DNI_info) {
    $fileNames = $Files_DNI_info['name'];
    $fileType = $Files_DNI_info['type'];
    $fileTmp_name = $Files_DNI_info['tmp_name'];
    $fileSize = $Files_DNI_info['size'];

    $file = explode(",", $fileNames);

    $file_ext = explode('.', $fileNames);
    $file_ext = strtolower(end($file_ext));

    for ($i = 0; $i < $file_count; $i++) {

      $fileName = $archivos_selecc["name"][$i];
      $target_file = $target_dir . basename($archivos_selecc["name"][$i]);

      if (in_array($fileName, $file)) {
        if (move_uploaded_file($archivos_selecc["tmp_name"][$i], $target_file)) {
          $archivos_total++;

          // Agregar código del modelo aquí
          require_once('../Model/Legal.php');
          $olegal = new cLegal();

          // Modificar la llamada a la función del modelo con los nuevos parámetros
          $olegal->upload_documents_clients($fileNames, $fileType, $target_dir, $fileSize, $file_ext, $_client_td, $_client_id, $_client_dni);
        }
      }
    }
  }
  echo $archivos_total;
}
