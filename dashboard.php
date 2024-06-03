<?php require_once('config/security.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MAK</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vista/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <style>
    html {
      overflow: hidden;
    }
  </style>

</head>

<body class="mak hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed">


  <div class="wrapper">
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

          <div class="mak-control mak-primary btn_button" onclick='linker("views/menu_property.php")'>
            <!-- <div class="mak-control mak-primary btn_button" onclick='linker("views/add_property.php")'> -->
            Subir propiedad
            <i class="fa-solid fa-folder-plus"></i>
          </div>
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
              <img src="Vista/images/marcador_2.jpg" alt="">

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

  </div>



  <!-- MODAL PROPIEDADES DASH -->
  <!-- <div class="modal" id="exampleModal" tabindex="-1" data-backdrop="static"> -->
  <!-- <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>

            <div class="form-group">
              <label for="id_prop_search" class="mak-txt">Propiedad</label>
              <input type="text" class="form-mak sect" id="id_prop_search" name="id_prop_search" placeholder="Ingrese la propiedad" required>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id="btn_id_prop" type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> -->
  <!-- MODAL PROPIEDADES DASH -->


  <!-- <div class="wrapper">

    <!-- Preloader --
    <div class="preloader flex-column justify-content-center align-items-center">
      <img src="Vista/images/mak_2.png" alt="MakLogo" width="25%">
    </div>

    <!-- Navbar --
    <nav class="main-header navbar navbar-expand navbar-dark mak-bg">
      <!-- Left navbar links --
      <ul class="navbar-nav">
        <a href="dashboard.php" class="d-flex align-items-center mak-bg pl-4">
          <img src="Vista/images/LOGO.png" alt="AdminLTE Logo" class="brand-image">
        </a>
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="dashboard.php" class="nav-link">Inicio</a>
        </li> --
  </ul>

  <!-- Right navbar links --
      <ul class="navbar-nav ml-auto">

        <!-- <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li> --
  </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container --
    <aside class="main-sidebar sidebar-dark-primary elevation-4 mak-bg">
      <!-- Sidebar --
      <div class="sidebar">
        <!-- Sidebar user panel (optional) --
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="Vista/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info d-flex align-items-center">
            <a href="#" class="d-block"><?php echo $_SESSION['nom_usu'] ?></a>
          </div>
        </div>

        <!-- Sidebar Menu --
        <section>
          <div>
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library --
                <!--MAK MODULOS--
                <li class="nav-header">SERVICIOS</li>
                <li class="nav-item">
                  <a href="Search/Busqueda.php" class="nav-link">
                    <i class="nav-icon fas fa-search"></i>
                    <p>Busqueda</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Valorizacion/" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>Valorización</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Legal/" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>Informe Legal</p>
                  </a>
                </li>

              </ul>
            </nav>
            <?php if ($_SESSION['tipo_usu'] == 1) : ?>
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library --
                  <!--MAK MODULOS PARA EL ADMIN--

                  <li class="nav-header">Mis Pendientes</li>

                  <li class="nav-item">
                    <a href="Valorizacion/" class="nav-link">
                      <i class="nav-icon fas fa-sharp fa-regular fa-check"></i>
                      <p>Valorizaciones</p>
                    </a>
                  </li>
                  <li class="nav-header">Gestion</li>
                  <li class="nav-item">
                    <a href="./Gestion" class="nav-link">
                      <i class="nav-icon fas fa-sharp fa-regular fa-users"></i>
                      <p>Personal</p>
                    </a>
                  </li>
                </ul>
              </nav>
            <?php endif ?>
          </div>

          <div>
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                  <a href="Config/logout.php" class="nav-link">
                    <i class="nav-icon fas fa-sharp fa-regular fa-power-off"></i>
                    <p>Cerrar Sesion</p>
                  </a>
                </li>

              </ul>
            </nav>
          </div>
        </section>
        <!-- /.sidebar-menu --
      </div>
      <!-- /.sidebar --
    </aside>

    <!-- Content Wrapper. Contains page content --
    <div class="content-wrapper">
      <div class="content">

        <header class="header-mak">

          <h1 class="title">¡Más de 2,000 propiedades <br> esperan por ti!</h1>
        </header>

        <section class="body-mak">
          <div class="container">
            <div class="row justify-content-center pt-5">

              <div class="card-mak col-md-6">
                <div class="card-content">
                  <img class="card-img-top" src="Vista/images/search.jpg" alt="Dist Photo 1">
                  <!-- <div class="image-overlay"></div> --
                  <div class="card-intro">
                    <div class="card-intro-txt">
                      <h1>Búsqueda</h1>
                      <p class="mak-txt b-text">Contamos con más de 2000 inmuebles disponibles para ti.</p>
                    </div>
                    <a href="Search/Busqueda.php" class="btn btn-mak mak-bg-sec">INICIAR</a>
                  </div>
                </div>
              </div>

              <div class="card-mak col-md-6">
                <div class="card-content">
                  <img class="card-img-top" src="Vista/images/money.jpg" alt="Dist Photo 2">
                  <!-- <div class="image-overlay"></div> --
                  <div class="card-intro">
                    <div class="card-intro-txt">
                      <h1>Valorizaciones</h1>
                      <p class="mak-txt b-text">Analizamos la propiedad y te brindamos el valor exacto de dicha propiedad.</p>
                    </div>
                    <a href="Valorizacion/" class="btn btn-mak mak-bg-sec">INICIAR</a>
                  </div>
                </div>
              </div>

              <div class="card-mak col-md-6">
                <div class="card-content">
                  <img class="card-img-top" src="Vista/images/finance.jpg" alt="Dist Photo 3">
                  <!-- <div class="image-overlay"></div> --
                  <div class="card-intro">
                    <div class="card-intro-txt">
                      <h1>Informe Legal</h1>
                      <p class="mak-txt b-text">Te brindamos el apoyo y la orientación legal necesaria.</p>
                    </div>
                    <a href="Legal/" class="btn btn-mak mak-bg-sec">INICIAR</a>
                  </div>
                </div>
              </div>

              <div class="card-mak col-md-6">
                <div class="card-content">
                  <img class="card-img-top" src="Vista/images/search.jpg" alt="Dist Photo 4">
                  <!-- <div class="image-overlay"></div> --
                  <div class="card-intro">
                    <div class="card-intro-txt">
                      <h1>Beneficios</h1>
                      <p class="mak-txt b-text">-</p>
                    </div>
                    <a href="" class="btn btn-mak mak-bg-sec">INICIAR</a>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </section>

      </div>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>

    <!-- Main Footer --
    <footer class="main-footer">
      <strong>Copyright &copy; 1986-2023 <a href="https://mak.com.pe/">MAK S.A.C</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>
  </div> -->


  <!-- <?php // include 'modals.php' 
        ?> -->

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel">Más servicios</h1>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="d-flex g-10">
            <label class="mak-control cursor m-0" for="aire_acondicionado">
              <input type="checkbox" name="aire_acondicionado" id="aire_acondicionado">
              <span>Aire acondicionado</span>
            </label>
            <label class="mak-control cursor m-0" for="aire_acondicionado">
              <input type="checkbox" name="aire_acondicionado" id="aire_acondicionado">
              <span>Aire acondicionado</span>
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

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