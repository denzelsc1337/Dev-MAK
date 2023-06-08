<?php


  $data[1] = $_POST["desc_doc"];
  $data[2] = $_POST["id_doc_type"];
  $data[3] = $_POST["id_usu"];


  //$mod = $_POST['modulo_'];

  $file = $_FILES["fileToUpload"];

  $dni = $_POST["usu_dni"];

  $concepto = $_POST['desc_doc'];


  $file_name = $file["name"];
  $file_tmp = $file["tmp_name"];
  $file_size = $file["size"];
  $file_error = $file["error"];
  $file_type = $file["type"];

  $file_ext = explode('.', $file_name);
  $file_ext = strtolower(end($file_ext));


  $file_desc = pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_FILENAME);
  $file_ext = pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION);


  $allowed = array('txt', 'jpg', 'jpeg', 'png', 'pdf', 'docx');

  if(in_array($file_ext, $allowed)) {
    if($file_error === 0) {
      if($file_size <= 2097152) {
        $file_name_new = uniqid('', true) . '.' . $file_ext;
        $file_destination = '../Documentos_Legal/'.$dni."/".$concepto."/";

        //echo $file_destination;

          if (!file_exists($file_destination)) {
            mkdir($file_destination, 0777, true);
          }
        //$file_destination = '../Documents/ '.$file_name;
        $target_file = $file_destination . basename($_FILES["fileToUpload"]["name"]);

        if(move_uploaded_file($file_tmp, $target_file)) {

          require_once('../Model/Legal.php');
          $olegal= new cLegal();
          $u = $olegal->upload_files_legal($file_name, $file_type, $file_destination, $file_size,$file_ext,$data);
?>
          <META http-equiv='Refresh' content = '0.2; URL =../Legal/InfoLegal.php'>;
          <script type="text/javascript">
            alert("Archivo subido");
          </script>
<?php
        } else {
          echo "Ocurrio un error al subir el arhivo.";
        }
      } else {
        echo "Tamaño de archivo muy grande. Tamaño maximo 2mb.";
      }
    } else {
      echo "There was an error uploading the file.";
    }
  } else {
    echo "File type not allowed. Allowed types are: txt, jpg, jpeg, png, pdf.";
  }



?>