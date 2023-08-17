<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="Vista/fonts/icomoon/style.css">

  <link rel="stylesheet" href="Vista/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="Vista/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="Vista/css/style.css">

  <title>MAK</title>
</head>

<body>



  <div class="content">
    <div class="container">
      <div class="row m-auto col-md-10">
        <div class="col-md-6">
          <img src="Vista/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h3>Inicio de Sesion</h3>
                <p class="mb-4" hidden>Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
              </div>
              <form action="Controller/login.php" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username">

                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password">

                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Recordar contraseña</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Olvidé mi contraseña</a></span>
                </div>

                <button type="submit" class="btn btn-block btn-primary">Iniciar</button>
                <!--
              <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            -->
              </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


  <script src="Vista/js/jquery-3.3.1.min.js"></script>
  <script src="Vista/js/popper.min.js"></script>
  <script src="Vista/js/bootstrap.min.js"></script>
  <script src="Vista/js/main.js"></script>
</body>

</html>