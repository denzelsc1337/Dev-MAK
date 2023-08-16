<?php
require_once('config/security.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MAK</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="Vista/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="Vista/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vista/dist/css/adminlte.min.css">
  <!-- Style -->
  <link rel="stylesheet" href="Vista/css/style.css">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img src="Vista/images/mak_2.png" alt="AdminLTELogo" height="90" width="15%">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark mak-bg">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="dashboard.php" class="nav-link">Inicio</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">


        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 mak-bg">
      <!-- Brand Logo -->
      <a href="dashboard.php" class="brand-link mak-bg">
        <img src="Vista/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MAK</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="Vista/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['nom_usu'] ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <!--MAK MODULOS-->
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

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <!--MAK MODULOS PARA EL ADMIN-->
            <?php if ($_SESSION['tipo_usu'] == 1) : ?>
              <li class="nav-header">Mis Pendientes</li>

              <li class="nav-item">
                <a href="Valorizacion/Valorizaciones.php" class="nav-link">
                  <i class="nav-icon fas fa-sharp fa-regular fa-check"></i>
                  <p>Revision de Valorizaciones</p>
                </a>
              </li>
            <?php endif ?>

            <li class="nav-item">
              <a href="Config/logout.php" class="nav-link">
                <i class="nav-icon fas fa-sharp fa-regular fa-power-off"></i>
                <p>Cerrar Sesion</p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="content">

        <header class="header-mak">

          <h1 class="title">¡Más de 2,000 propiedades <br> esperan por ti!</h1>
        </header>

        <section class="body-mak">
          <!-- <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    BUSQUEDA
                  </h3>
                </div>
                <div class="card mb-2 bg-gradient-dark">
                  <img class="card-img-top" src="Vista/images/search.jpg" alt="Dist Photo 1">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <a href="Search/Busqueda.php" class="btn btn-block btn-primary">INICIAR</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    VALORIZACION
                  </h3>
                </div>
                <div class="card mb-2 bg-gradient-dark">
                  <img class="card-img-top" src="Vista/images/money.jpg" alt="Dist Photo 1">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <a href="Valorizacion/valorizacion.php" class="btn btn-block btn-primary">INICIAR</a>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    INFORME LEGAL
                  </h3>
                </div>
                <div class="card mb-2 bg-gradient-dark">
                  <img class="card-img-top" src="Vista/images/finance.jpg" alt="Dist Photo 1">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <a href="Legal/InfoLegal.php" class="btn btn-block btn-primary">INICIAR</a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->


          <div class="row justify-content-center" style="gap:20px; padding-bottom: 5rem;">
            <div class="card-mak col-md-4">
              <img class="card-img-top" src="Vista/images/search.jpg" alt="Dist Photo 1">
              <div class="image-overlay"></div>
              <div class="card-intro">
                <div class="card-intro-txt">
                  <h1>Búsqueda</h1>
                  <p class="mak-txt b-text">Contamos con más de 2000 inmuebles disponibles para ti.</p>
                </div>
                <a href="Search/Busqueda.php" class="btn btn-mak mak-bg-sec">INICIAR</a>
              </div>
            </div>
            <div class="card-mak col-md-4">
              <img class="card-img-top" src="Vista/images/money.jpg" alt="Dist Photo 2">
              <div class="image-overlay"></div>
              <div class="card-intro">
                <div class="card-intro-txt">
                  <h1>Valorizaciones</h1>
                  <p class="mak-txt b-text">Analizamos la propiedad y te brindamos el valor exacto de dicha propiedad.</p>
                </div>
                <a href="Valorizacion/" class="btn btn-mak mak-bg-sec">INICIAR</a>
                <!-- <a href="Valorizacion/valorizacion.php" class="btn btn-mak mak-bg">INICIAR</a> -->
              </div>
            </div>
            <div class="card-mak col-md-4">
              <img class="card-img-top" src="Vista/images/finance.jpg" alt="Dist Photo 3">
              <div class="image-overlay"></div>
              <div class="card-intro">
                <div class="card-intro-txt">
                  <h1>Informe Legal</h1>
                  <p class="mak-txt b-text">Te brindamos el apoyo y la orientación legal necesaria.</p>
                </div>
                <a href="Legal/" class="btn btn-mak mak-bg-sec">INICIAR</a>
              </div>
            </div>
            <div class="card-mak col-md-4">
              <img class="card-img-top" src="Vista/images/search.jpg" alt="Dist Photo 4">
              <div class="image-overlay"></div>
              <div class="card-intro">
                <div class="card-intro-txt">
                  <h1>Beneficios</h1>
                  <p class="mak-txt b-text">-</p>
                </div>
                <a href="" class="btn btn-mak mak-bg-sec">INICIAR</a>
              </div>
            </div>
          </div>

        </section>

      </div>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 1986-2023 <a href="https://mak.com.pe/">MAK S.A.C</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>
  </div>


  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="Vista/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="Vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="Vista/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="Vista/dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="Vista/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="Vista/plugins/raphael/raphael.min.js"></script>
  <script src="Vista/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="Vista/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="Vista/plugins/chart.js/Chart.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="Vista/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="Vista/dist/js/pages/dashboard2.js"></script>
</body>

</html>