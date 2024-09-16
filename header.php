<?php include 'Controller/path.php' ?>
<!-- NAVBAR -->
<nav class="main-header navbar navbar-expand mak-bg">

    <ul class="navbar-nav align-content ml-4">
        <a href="../dashboard.php" class="d-flex align-items-center mak-bg">
            <img src="../Vista/images/Logo_mak.png" alt="AdminLTE Logo" class="brand-image">
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
            <a class="mak-control mak-primary btn_button" href="<?php echo VIEWS_PATH . 'menu_property.php' ?>">
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
                    <!-- <span>Moisés <br> Ackerman</span> -->
                    <span> <?php echo $_SESSION['nom_usu'] ?> </span>
                    <span><?php echo $_SESSION['ape_usu'] ?> </span>
                </div>
            </div>
        </li>
    </ul>
</nav>
<!-- NAVBAR -->