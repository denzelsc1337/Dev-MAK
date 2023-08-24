<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <!-- <link rel="stylesheet" href="Vista/fonts/icomoon/style.css"> -->

  <link rel="stylesheet" href="Vista/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="Vista/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="Vista/css/style.css">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>MAK</title>
</head>

<body>

  <!-- LOGIN -->
  <div class="content display-center">
    <div class="container">
      <div class="row col-md-10 m-auto w-100 card-login" style="border-radius: 20px; padding: 0;">
        <div class="col-md-6 bor-rght-20 mak-bg">
          <div class="header-login">
            <div>
              <img src="Vista/images/mak.png" alt="MAK" height="90" width="100%">
            </div>
            <div>
              <h2>Corredores <br> Aliados</h2>
            </div>
          </div>
          <div class="body-login col-md-9">
            <div class="row justify-content-center">
              <div class="content-login">
                <h1>¡Bienvenido!</h1>
                <p>Somos la empresa peruana lider en el sector inmobiliario con más de 37 años de experiencia, lo que nos ha permitido alcanzar un alto nivel de desarrollo con el objetivo de ofrecer el mejor servicio a nuestros clientes.</p>
              </div>
            </div>
          </div>
          <div class="footer-login">
            <div class="footer-social">
              <span><a href=""><i class="fas fa-globe mak-txt"></i></a></span>
              <span><a href=""><i class="fab fa-facebook mak-txt"></i></a></span>
              <span><a href=""><i class="fab fa-instagram mak-txt"></i></a></span>
              <span><a href=""><i class="fab fa-linkedin-in mak-txt"></i></a></span>
              <span><a href=""><i class="fab fa-youtube mak-txt"></i></a></span>
            </div>
          </div>
        </div>
        <div class="col-md-6 bor-lft-20 mak-txt">
          <div class="mak row justify-content-center">
            <div class="col-md-9">
              <div class="mt-5 mb-5">
                <h1>Inicio Sesión</h1>
              </div>
              <form id="loginForm" method="post">

                <div class="body-login">

                  <div class="section-input">
                    <span class="icon-input"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-mak" id="username" name="username" placeholder="Usuario">
                  </div>

                  <br>

                  <div class="section-input">
                    <span class="icon-input"><i class="fas fa-lock"></i></span>
                    <span id="showPass" class="icon-input rght"><i class="fa-solid fa-eye-slash"></i></span>
                    <input type="password" class="form-mak" id="password" name="password" placeholder="Contraseña">
                  </div>
                </div>


                <div class="footer-login">
                  <button id="loginButton" name="loginButton" type="button" class="btn btn-mak mak-bg">Ingresar</button>
                  <!-- <span><a href="http://" class="mak-txt">¿Olvidaste tu<br> contraseña?</a></span> -->
                  <span id="toForgot" class="mak-txt">¿Olvidaste tu<br> contraseña?</span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- LOGIN -->

  <!-- FORGOT PASS -->
  <div class="content display-center hide forgot">
    <div class="container">
      <div class="row col-md-10 m-auto w-100 card-login forgot" style="border-radius: 20px;">
        <div class="m-auto w-100 bor-rght-20">
          <div class="header-login">
            <div>
              <img src="Vista/images/mak_2.png" alt="MAK" height="70" width="80%">
            </div>
            <div id="toLogin">
              <span class="mak-txt">
                <h2>Corredores <br> Aliados</h2>
              </span>
            </div>
          </div>
          <div class="body-login col-md-10">
            <div class="row justify-content-center">
              <div class="content-login">
                <h1>¿Olvidaste tu contraseña?</h1>
                <p>Podemos ayudarte a restablecerla.</p>
                <p>Ingresa tu correo elecetrónico/usuario y sigue las instrucciones.</p>
                <br>
                <input type="text" class="form-mak" id="" name="" placeholder="Ingrese correo electrónico">
              </div>
            </div>
          </div>
          <div class="footer-login">
            <button type="submit" class="btn btn-mak mak-bg">Restablecer</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FORGOT PASS -->

  <script src="Vista/js/jquery-3.3.1.min.js"></script>
  <script src="Vista/js/popper.min.js"></script>
  <script src="Vista/js/bootstrap.min.js"></script>
  <script src="Vista/js/main.js"></script>

  <script>
    const showPass = document.querySelector("#showPass");
    const iptPass = document.querySelector("#password");

    showPass.addEventListener("click", (e) => {
      let eye = showPass.querySelector(".fa-solid");
      if (eye.classList.contains("fa-eye-slash")) {
        console.log(iptPass.type);
        iptPass.type = "text";
        eye.classList.remove("fa-eye-slash");
        eye.classList.add("fa-eye");
      } else {
        console.log(iptPass.type);
        iptPass.type = "password";
        eye.classList.remove("fa-eye");
        eye.classList.add("fa-eye-slash");
      }
    })
  </script>

  <script src="Vista/assets/functions.js"></script>
</body>

</html>