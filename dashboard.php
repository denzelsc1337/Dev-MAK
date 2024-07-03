<?php require_once('config/security.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MAK</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vista/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- daterange picker -->
  <link rel="stylesheet" href="Vista/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="Vista/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="Vista/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="Vista/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="Vista/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="Vista/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="Vista/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="Vista/plugins/bs-stepper/css/bs-stepper.min.css">
  <link rel="stylesheet" type="text/css" href="Vista/css/style.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="Vista/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vista/dist/css/adminlte.min.css">
  <!-- Modal -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
    html {
      overflow: hidden;
    }
  </style>

</head>

<body class="mak hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed">


  <!-- <div class="wrapper"> -->
  <!-- NAVBAR -->
  <nav class="main-header navbar navbar-expand mak-bg">

    <ul class="navbar-nav align-content ml-4">
      <a href="dashboard.php" class="d-flex align-items-center mak-bg">
        <img src="Vista/images/Logo_mak.png" alt="AdminLTE Logo" class="brand-image">
      </a>
      <li class="nav-item">
        <a href="#" class="nav-link">Mis servicios</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Mis avisos</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto mr-4">
      <li class="nav-item" data-target="add_property">

        <!-- <div class="mak-control mak-primary btn_button" onclick='linker("views/menu_property.php")'> -->
        <a class="mak-control mak-primary btn_button" href="./views/menu_property.php">
          Subir propiedad
          <i class="fa-solid fa-folder-plus"></i>
        </a>
      </li>
      <li>
        <span class="separador"></span>
      </li>
      <li>
        <div class="notification">
          <i class="fa-regular fa-bell"></i>
        </div>
      </li>
      <li>
        <div class="img_content">
          <div class="img_perfil">
            <!-- <img src="Vista/images/marcador_2.jpg" alt=""> -->
            <img src="" alt="">

          </div>
          <div class="img_text">
            <!-- <span>Moisés</span>
            <p>Ackerman</p> -->
            <span>Moisés <br> Ackerman</span>
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- NAVBAR -->




  <section class="section_content">
    <div class="distribution">
      <?php include 'lateral_bar.php' ?>

      <div id="content">
        <iframe id="paginas" name="contenido" src="views/main.php"></iframe>
      </div>

      <?php include 'lateral_bar_right.php' ?>
    </div>

  </section>

  <!-- </div> -->

  <?php include 'modals.php' ?>


  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="Vista/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="Vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./../Dev-MAK/Vista/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="./Vista/dist/js/demo.js"></script>

  <script src="./Vista/assets/dash.js"></script>
  <!-- script modal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


</body>

</html>