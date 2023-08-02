<?php
require_once('../Config/security.php');
require_once('../Controller/controladorListar.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAK SERVICE</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Vista/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- daterange picker -->
    <link rel="stylesheet" href="../Vista/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../Vista/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../Vista/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../Vista/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../Vista/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../Vista/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../Vista/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../Vista/plugins/bs-stepper/css/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="../Vista/css/style.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../Vista/plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../Vista/dist/css/adminlte.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body class="hold-transition sidebar-mini  sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed" onload="initAutocomplete()">

    <div class="wrapper">

        <?php include '../Vista/nav_bar_moduls.php' ?>

        <div class="content-wrapper">

            <section class="content">
                <!-- <header class="header-mak">
                    <h1 class="title">¿Más de 2,000 propiedades <br> esperan por ti!</h1>
                </header> -->

                <?php include '../Vista/head-form.php' ?>


                <section class="body-mak mak-txt">
                    <div class="container">
                        <h1 class="text-center">HISTORICO</h1>
                        <div class="row">
                            <div class="filter-drop shadow ml-auto">
                                Filtros &nbsp;
                                <i class="fa-solid fa-sliders"></i>
                            </div>
                            <div class="col-sm-12">

                                <table class="table table-borderless">
                                    <thead class="">
                                        <tr>
                                            <th>ID</th>
                                            <th>DIRECCIÓN</th>
                                            <th>FECHA</th>
                                            <th>ESTADO</th>
                                            <th>OPCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list_solic_legal as $lst_legal_d): ?>
                                        <tr>
                                            <td><?php echo $lst_legal_d[0] ?></td>
                                            <td><?php echo $lst_legal_d[1] ?></td>
                                            <td><?php echo $lst_legal_d[2] ?></td>
                                            <td>
                                            <?php
                                                if ($lst_legal_d[3] == 10) {
                                            ?>
                                            <span class="badge rounded-pill bg-secondary">Pendiente</span>
                                            <?php
                                            }elseif ($lst_legal_d[3] == 20) {
                                            ?>
                                            <span class="badge rounded-pill bg-warning text-dark">En revision</span>
                                            <?php
                                            }elseif ($lst_legal_d[3] == 90) {
                                            ?>
                                            <span class="badge rounded-pill bg-success">Finalizado</span>
                                            <?php
                                            }
                                            ?>
                                            </td>
                                            <td hidden><?php echo $lst_legal_d[4] ?></td>
                                            <td hidden><?php echo $lst_legal_d[5] ?></td>

                                            <td >
                                                <div class="row justify-content-evenly">
                                                    <div class="col-sm-4 justify-content-center options brd-rght-blue">
                                                        <div class="options">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 justify-content-center options brd-rght-blue">
                                                        <div class="options">
                                                            <i class="fa-solid fa-pencil"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 justify-content-center options">
                                                        <div class="options">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="footer-mak">
                    <div class="container">
                        <div class="flex">
                            <a href="legal_.php" class="btn btn-mak mak-bg ml-auto">Continuar</a>
                        </div>
                    </div>
                </div>

            </section>
        </div>


        <?php include '../Vista/foot-form.php' ?>

    </div>
    <!-- CUSTOM JS -->
    <script type="text/javascript">

    </script>
    <!-- CUSTOM JS -->

    <!-- REQUIRED SCRIPTS -->
    <script src="../Vista/js/stepper.js"></script>
    <script src="../Vista/js/resume.js"></script>
    <script src="../Vista/assets/functions.js"></script>


    <!-- jQuery -->
    <script src="../Vista/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../Vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../Vista/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../Vista/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../Vista/plugins/moment/moment.min.js"></script>
    <script src="../Vista/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../Vista/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../Vista/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../Vista/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../Vista/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../Vista/plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../Vista/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../Vista/dist/js/demo.js"></script>
    <!-- Page specific script -->


    <script src="../Vista/assets/selection_types.js"></script>
</body>

</html>