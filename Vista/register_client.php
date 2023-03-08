<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

    <style>
    body {
      zoom: 0.87;
    }
  </style>
</head>

<body>

    <div class="page-wrapper  p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <h1>Bienvenido a Servicios MAK</h1>
            <h2>Registro</h2>
            <form  method="POST" action="../Controller/RegisterClient_Service.php">
            <div class="card card-4">
                <div class="card-body">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Documento</label>
                                    <input class="input--style-4" type="text" id="dni_u" name="dni_u" placeholder="DNI" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Correo</label>
                                    <input class="input--style-4" type="email" id="email_u" name="email_u" placeholder="Correo" required>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nombre</label>
                                    <input class="input--style-4" type="text" id="nombre_u" name="nombre_u" placeholder="Nombre" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Usuario</label>
                                    <input class="input--style-4" type="text" id="usu_c" name="usu_c" placeholder="Usuario" required>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Apellidos</label>
                                    <input class="input--style-4" type="text" id="apellidos_u" name="apellidos_u" placeholder="Apellido" required>
<!--                                     <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Contraseña</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="password" placeholder="Contraseña" required>
                                         <!--<i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
                                    </div>
                                </div>
                            </div>
<!--                             <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Telefono</label>
                                    <input class="input--style-4" id="telef_u" name="telef_u" placeholder="Telefono/celular" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Repetir contraseña</label>
                                    <input class="input--style-4" type="password" id="pass_u" name="pass_u" placeholder="Repetir contraseña" required>
                                </div>
                            </div>
                        </div>
                        <div class="card card-inside">
                            <div class="card-type">
                                <div class="input-group">
                                    <strong>Tipo de cliente</strong>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <script type="text/javascript">
                                            function changeValue(dropdown) {
                                                var option = dropdown.options[dropdown.selectedIndex].value,
                                                    field = document.getElementById('datos_corredor');
                                                    if (option == '1') {
                                                        field.style.display = "block";
                                                    }else if (option == '2'){
                                                        field.style.display = "none";
                                                    }
                                                }
                                        </script>
                                        <?php
                                        require_once('../Controller/controladorListar.php');
                                        ?>
                                        <select name="tipo_cli" id="tipo_cli" onchange="changeValue(this);" required>
                                            <option disabled="disabled" selected="selected">Seleccione un tipo</option>
                                            <?php foreach ($selector_types as $cboTypes) { ?>
                                                <option value="<?php echo $cboTypes[0]; ?>"><?php echo $cboTypes[1]; ?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                    <br>
                                    <div class="col-2">
                                        <div class="input-group" id="datos_corredor" hidden>
                                            <strong>Codigo de corredor</strong>
                                            <input class="input--style-4" type="text" name="cod_corredor" id="cod_corredor">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="btn btn--radius-2 btn--blue" type="submit" >Registrar</button>
                <h4 >Tienes cuenta? <a href="../index.php">Ingresa ahora.</a></h4   >

            </form>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->