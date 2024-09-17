<?php
session_start();
include_once('../Config/Conexion.php');
include '../Controller/path.php';

$cnx = new conexion();
$cadena = $cnx->abrirConexion();

$ID_prop = mysqli_query($cadena, "SELECT COUNT(*) + 1 AS total_props FROM propiedades");

$ID = mysqli_fetch_object($ID_prop);
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

        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body class="mak content">

    <?php include './../header.php' ?>

    <section class="section_content">
        <div class="distribution">

            <?php include './../lateral_bar.php' ?>

            <div class="body-container">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                    <div class="d-flex align-center ml-2">
                        <div class="">
                            <img src="./../Vista/images/Plataforma/Menu/Speech_Bubble.png" alt="" width="180">
                        </div>
                        <div>
                            <span>¿Listo para vender tu propiedad?</span>
                            <span>Identifica que tipo de modalidad deseas realizar.</span>
                            <span>Recuerda que una vez seleccionada una opción el ID será único.</span>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                            <div class="mak-bdr mak-pdd">
                                <div class="menu_container">
                                    <img src="./../Vista/images/Plataforma/Menu/Frame717.png" alt="" width="70">
                                    <div>
                                        <span><b>Venta o Alquiler</b></span>
                                        <span>Sube un aviso de tu casa, departamento, oficina, terreno o local.</span>
                                    </div>
                                    <!-- <button class="mak-control mak-primary btn_button propiedad" onclick='changeIframeSource("views/add_property.php")'>Publicar</button> -->
                                    <a href="./add_property.php" class="mak-control mak-primary btn_button">Publicar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                            <div class="mak-bdr mak-pdd">
                                <div class="menu_container">
                                    <img src="./../Vista/images/Plataforma/Menu/Frame718.png" alt="" width="70">
                                    <div>
                                        <span><b>Proyecto</b></span>
                                        <span>Sube tu desarrollo inmoibliario de departamento, casa o lote.</span>
                                    </div>
                                    <button class="mak-control mak-primary btn_button">Publicar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php include './../lateral_bar_right.php' ?>

        </div>

    </section>

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