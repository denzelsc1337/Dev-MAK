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
                    <a class="nav-link" href="./Legal/index.php" role="button">
                        <i class="fas fa-bars"></i>
                        <span>Legal</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="bottom-content">

            <?php
            // echo __DIR__ . "/Config/logout.php";
            // echo "\n";
            // echo dirname(__FILE__);
            // echo "\n";
            // echo $_SERVER['DOCUMENT_ROOT'];
            // echo "\n";
            // echo $_SERVER['PHP_SELF'];
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
            // http://localhost/Docs/Dev-MAK/dashboard.php
            // echo "\n";

            $fullPath = $_SERVER['PHP_SELF'];

            // Obtén el directorio padre de la ruta
            $parentDir = dirname($fullPath); // Devuelve "C:/xampp/htdocs/Docs/Dev-MAK"

            // Obtén solo el nombre del directorio "Dev-MAK"
            $targetDir = basename($parentDir); // Devuelve "Dev-MAK"

            // echo $targetDir; // Imprime "Dev-MAK"

            $parts = explode("/", $fullPath);
            // print_r($parts);

            // Usar array_slice para obtener los elementos a partir del índice 2
            $subset = array_slice($parts, 3);
            // Contar los elementos de la porción del array
            $countPathLesss = count($subset);
            // echo "\n";

            if ($countPathLesss > 1) {
                // $ruta = "1";
                $ruta = "../Config/logout.php";
            } else {
                $ruta = "Config/logout.php";
                // $ruta = "2";
            }
            ?>

            <li class="nav-item">
                <a href="<?php echo $ruta ?>">
                    <i class="fa-solid fa-power-off"></i>
                    <span class="text nav-text">Cerrar sesión</span>
                </a>
            </li>
            <li class="nav-item logout-item">
                <span class="text nav-text"><b>MAK </b>vende porque <b>MAK </b>sabe</span>
                <div class="nav-link">
                    <svg data-widget="pushmenu" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="25.5" y="0.5" width="25" height="25" rx="12.5" transform="rotate(90 25.5 0.5)" stroke="#16243E" />
                        <path d="M18.8503 13L8.70008 12.9998" stroke="#16243E" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.45 17.2004L7.59991 13.0003L11.45 8.80029" stroke="#16243E" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </li>
        </div>
    </div>

</nav>