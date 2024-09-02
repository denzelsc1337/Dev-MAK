<nav class="sidebar lateral_bar lateral_left mak-bdr">
    <div class="menu-bar">
        <div class="menu">

            <ul class="menu-links">
                <li class="nav-item active">
                    <a class="nav-link" role="button" onclick='linker("views/main.php")'>
                        <i class="fas fa-bars"></i>
                        <span>Página principal</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">
                        <i class="fas fa-bars"></i>
                        <span>Propiedades</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./Valorizacion/index.php" role="button">
                        <i class="fas fa-bars"></i>
                        <span>Valorización</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class='bx bx-pie-chart-alt icon'></i>
                        <span class="text nav-text">Analytics</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class='bx bx-heart icon'></i>
                        <span class="text nav-text">Likes</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#">
                        <i class='bx bx-wallet icon'></i>
                        <span class="text nav-text">Wallets</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="bottom-content">
            <li class="nav-item">
                <div>
                    <?php
                    // echo __DIR__ . "/Config/logout.php";
                    // echo "\n";
                    // echo dirname(__FILE__);
                    // echo "\n";
                    // echo $_SERVER['DOCUMENT_ROOT'];
                    // echo "\n";
                    // echo $ruta = $_SERVER['PHP_SELF'];
                    // echo "\n";
                    // echo $_SERVER['SCRIPT_FILENAME'];
                    // echo "\n";
                    // echo getcwd();
                    // echo "\n";
                    // echo strlen($_SERVER['PHP_SELF']);
                    // echo "\n";
                    // echo substr($ruta, 5, 10);
                    // echo "\n";
                    // echo "-> " . substr($_SERVER['PHP_SELF'], 0, 28);
                    // echo "\n";
                    // echo "\n";

                    $directorio = substr($_SERVER['PHP_SELF'], 0, 22);

                    if ($directorio > 22) {
                        $ruta = "../Config/logout.php";
                    } else {
                        $ruta = "Config/logout.php";
                    }
                    ?>
                </div>
                <a href="<?php echo $directorio . $ruta ?>">
                    <i class="fa-solid fa-power-off"></i>
                    <span class="text nav-text">Cerrar sesión</span>
                </a>
            </li>
            <li class="nav-item logout-item">
                <!-- <a class="nav-link" href="#" role="button" data-widget="pushmenu"> -->
                <div class="nav-link" data-widget="pushmenu">

                    <!-- <i class="fas fa-bars"></i> -->
                    <!-- <img src="" alt=""> -->
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="25.5" y="0.5" width="25" height="25" rx="12.5" transform="rotate(90 25.5 0.5)" stroke="#16243E" />
                        <path d="M18.8503 13L8.70008 12.9998" stroke="#16243E" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.45 17.2004L7.59991 13.0003L11.45 8.80029" stroke="#16243E" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>


                </div>
                <!-- </a> -->
            </li>
        </div>
    </div>

</nav>