<?php
include_once('../Config/Conexion.php');
require_once('../Config/security.php');

require_once('../Controller/controladorListar.php');

$cnx = new conexion();
$cadena = $cnx->abrirConexion();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAK</title>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Vista/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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


    <style>
        html {
            overflow-x: hidden;
        }

        html::-webkit-scrollbar {
            width: 1px;
        }
    </style>
</head>

<body class="mak content">

    <?php include './../header.php' ?>


    <?php if ($_SESSION['tipo_usu_cod'] == 1) {  ?>

        <section class="section_content">
            <div class="distribution">

                <?php include './../lateral_bar.php' ?>

                <div class="body-container">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                        <h1>Solicitudes 1</h1>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                        <div class="mak-bdr mak-pdd">
                            Que puede ir acá?
                        </div>
                    </div>

                </div>

                <?php include './../lateral_bar_right.php' ?>

            </div>

        </section>

    <?php } else if ($_SESSION['tipo_usu_cod'] == 2) { ?>
        <section class="section_content">
            <div class="distribution">

                <?php include './../lateral_bar.php' ?>

                <div class="body-container mak">

                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3">

                            <div class="d-flex align-center ml-2 mt-3 menu-content">
                                <div>
                                    <img src="../Vista/images/Plataforma/PanelPrincipal/Bienvenido.png" alt="" width="180">
                                </div>

                                <div class="ml-5">
                                    <h1></h1>
                                    <span>!Bienvenido a tu intranet MAK¡</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                            <div class="card-body">
                                <div class="card-head justify-between mb-3">
                                    <div>
                                        <img src="../Vista/images/home.svg" alt="">
                                        Solicitudes 2
                                    </div>
                                </div>

                                <table class="table table-borderless txt-center mt-4">
                                    <thead>
                                        <tr>
                                            <th class="placeholder">Solicitud</th>
                                            <th class="placeholder">Tipo Solicitud</th>
                                            <th class="placeholder">ID Propiedad</th>
                                            <th class="placeholder">Dirección</th>
                                            <th class="placeholder">Distrito</th>
                                            <th class="placeholder">Distrito</th>
                                            <th class="placeholder">Distrito</th>
                                            <th class="placeholder">Distrito</th>
                                            <th class="placeholder">Tipo Propiedad</th>
                                            <th class="placeholder">Sub Tipo Propiedad</th>
                                            <th class="placeholder">Asignado</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($showListSolic as $sas): ?>
                                            <tr class="property-item">
                                                <td><?php echo $sas[0] ?></td>
                                                <td><?php echo $sas[1] ?></td>
                                                <td><?php echo $sas[2] ?></td>
                                                <td><?php echo $sas[3] ?></td>
                                                <td><?php echo $sas[4] ?></td>
                                                <td><?php echo $sas[5] ?></td>
                                                <td><?php echo $sas[6] ?></td>
                                                <td><?php echo $sas[7] ?></td>
                                                <td><?php echo $sas[8] ?></td>
                                                <td><?php echo $sas[9] ?></td>
                                                <td>
                                                    <select name="" id=""></select>
                                                </td>
                                                <td>*</td>
                                            </tr>

                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include './../lateral_bar_right.php' ?>

            </div>

        </section>
    <?php } else {  ?>
        <section class="section_content">
            <div class="distribution">

                <?php include './../lateral_bar.php' ?>

                <div class="body-container mak">

                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3">

                            <div class="d-flex align-center ml-2 mt-3 menu-content">
                                <div>
                                    <img src="../Vista/images/Plataforma/PanelPrincipal/Bienvenido.png" alt="" width="180">
                                </div>

                                <div class="ml-5">
                                    <h1></h1>
                                    <span>!Bienvenido a tu intranet MAK¡</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                            <div class="card-body">
                                <div class="card-head justify-between mb-3">
                                    <div>
                                        <img src="../Vista/images/home.svg" alt="">
                                        Solicitudes 3
                                    </div>
                                </div>

                                <table class="table table-borderless txt-center mt-4">
                                    <thead>
                                        <tr>
                                            <th class="placeholder">Solicitud</th>
                                            <th class="placeholder">Tipo Solicitud</th>
                                            <th class="placeholder">ID Propiedad</th>
                                            <th class="placeholder">Dirección</th>
                                            <th class="placeholder">Distrito</th>
                                            <th class="placeholder">Distrito</th>
                                            <th class="placeholder">Distrito</th>
                                            <th class="placeholder">Distrito</th>
                                            <th class="placeholder">Tipo Propiedad</th>
                                            <th class="placeholder">Sub Tipo Propiedad</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($showListSolic as $sas): ?>
                                            <tr class="property-item">
                                                <td><?php echo $sas[0] ?></td>
                                                <td><?php echo $sas[1] ?></td>
                                                <td><?php echo $sas[2] ?></td>
                                                <td><?php echo $sas[3] ?></td>
                                                <td><?php echo $sas[4] ?></td>
                                                <td><?php echo $sas[5] ?></td>
                                                <td><?php echo $sas[6] ?></td>
                                                <td><?php echo $sas[7] ?></td>
                                                <td><?php echo $sas[8] ?></td>
                                                <td><?php echo $sas[9] ?></td>

                                            </tr>

                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include './../lateral_bar_right.php' ?>

            </div>

        </section>
    <?php } ?>


</body>
<!-- jQuery -->
<!-- <script src="./../Vista/plugins/jquery/jquery.min.js"></script> -->
<script src="./../Vista/assets/add_property.js"></script>

<!-- <script src="./../Vista/js/upFiles.js"></script> -->
<!-- <script src="./../Vista/assets/dash.js"></script> -->
<!-- script modal -->
<!-- <script src="../Vista/dist/js/adminlte.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script> -->


<script>
    // function changeIframeSource(link) {
    //     // Enviar mensaje a la página principal para cambiar el src del iframe
    //     parent.postMessage(link, '*');
    // }

    // document.querySelector('.propiedad').addEventListener('click', function() {
    //     // Enviar mensaje a la página principal para abrir el modal
    //     parent.postMessage('views/menu_property.php', '*');
    // });
</script>