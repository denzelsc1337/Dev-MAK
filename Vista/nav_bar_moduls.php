<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img src="../Vista/images/mak_2.png" alt="AdminLTELogo" height="90" width="15%">
</div>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark mak-bg">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="../dashboard.php" class="nav-link">Inicio</a>
    </li>
  </ul>


</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 mak-bg">
  <!-- Brand Logo -->
  <a href="../dashboard.php" class="brand-link mak-bg">
    <img src="../Vista/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">MAK</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../Vista/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION['nom_usu'] ?></a>
      </div>
    </div>



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <!--MAK MODULOS-->
        <li class="nav-header">SERVICIOS</li>
        <li class="nav-item">
          <a href="../Search/Busqueda.php" class="nav-link">
            <i class="nav-icon fas fa-search"></i>
            <p>Busqueda</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../Valorizacion/" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>Valorización</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../Legal/" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>Informe Legal</p>
          </a>
        </li>
        <!--FIN MAK MODULOS-->

      </ul>
    </nav>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
        <!--MAK MODULOS PARA EL ADMIN-->
          <?php if ($_SESSION['tipo_usu'] == 1): ?>
            <li class="nav-header">Mis Pendientes</li>

            <li class="nav-item">
              <a href="../Valorizacion" class="nav-link">
                <i class="nav-icon fas fa-sharp fa-regular fa-check"></i>
                <p>Revision de Valorizaciones</p>
              </a>
            </li>
          <?php endif ?>

          <li class="nav-item">
            <a href="../Config/logout.php" class="nav-link">
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