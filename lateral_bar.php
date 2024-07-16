<!-- <div class="lateral_bar lateral_left mak-bdr">
    <div class="menu-bar">
        <div class="menu">
            <ul class="nav-list"> 
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
        <li class="nav-item logout-item">
            <!-- <a class="nav-link" href="#" role="button" data-widget="pushmenu"> --
<div class="nav-link" data-widget="pushmenu">

    <i class="fas fa-bars"></i>
</div>
<!-- </a> --
</li>
</div>
</div> -->




<!-- <nav class="lateral_bar lateral_left mak-bdr"> -->
<nav class="sidebar lateral_bar lateral_left mak-bdr">
    <div class="menu-bar">
        <div class="menu">

            <ul class="menu-links">
                <li class="nav-item active">
                    <!-- <a href="#">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a> -->
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

<script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");


    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })

    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
    })

    modeSwitch.addEventListener("click", () => {
        body.classList.toggle("dark");

        if (body.classList.contains("dark")) {
            modeText.innerText = "Light mode";
        } else {
            modeText.innerText = "Dark mode";

        }
    });
</script>