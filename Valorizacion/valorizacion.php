<?php require_once('../Config/security.php'); ?>
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

            <!-- <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Seleccion de datos:</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Seleccion</a></li>
                                <li class="breadcrumb-item active">Registro</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- Main content -->
            <section class="content mak-forms">


                <?php include '../Vista/head-form.php' ?>

                <div class="container">
                    <!-- <div class="row"> -->
                    <!-- <div class="col-md-12"> -->
                    <!-- <div class="card card-default"> -->
                    <!-- <div class="card-header mak-bg mak-wht">
                            <h3 class="card-title">Ingreso de Datos:</h3>
                        </div> -->

                    <!-- SECTION -->
                    <div class="card-body p-0">

                        <div class="bs-stepper">

                            <div class="bs-stepper-header" role="tablist">
                                <div class="step active" data-target="first_step">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="" id="">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label">Seleccion de tipo</span>
                                    </button>
                                </div>

                                <div class="line" data-target="first_step"></div>

                                <div class="step" data-target="second_step">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="" id="">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">TIpo de Inmueble</span>
                                    </button>
                                </div>

                                <div class="line" data-target="second_step"></div>

                                <div class="step" data-target="third_step">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="" id="">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label">Subida de archivos</span>
                                    </button>
                                </div>

                                <div class="line" data-target="third_step"></div>

                                <div class="step" data-target="fourth_step">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="" id="">
                                        <span class="bs-stepper-circle">4</span>
                                        <span class="bs-stepper-label">Resumen de Solicitud</span>
                                    </button>
                                </div>

                                <div class="line" data-target="fourth_step"></div>
                            </div>

                            <div class="bs-stepper-content">
                                <!--<form method="POST" id="form_valor" action="../Controller/Add_Valorizacion.php">-->
                                <form method="POST" id="form_valor">
                                    <!-- SELECCION TIPO -->
                                    <div id="0" class="section col-md-12 movPag show" role="tabpanel" aria-labelledby="logins-part-trigger" data-target="first_step">
                                        <div class="row">

                                            <div class="col-md-3">
                                                <div class="">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <label class="mak-txt">Dirección</label>
                                                                    <input type="text" class="form-mak" placeholder="Ingrese una dirección" id="direccion_" name="direccion_" onkeydown="buscarDireccion(event, 'mapa', 'mapa_2')" autocomplete="off" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="mak-txt">Tipo Inmueble</label>
                                                                    <?php
                                                                    require_once('../Controller/controladorListar.php');
                                                                    ?>
                                                                    <select id="tipo_prop" name="tipo_prop" class="form-mak" value="-1"></select>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <!-- textarea -->
                                                                <div class="form-group">
                                                                    <label class="mak-txt">Subtipo Inmueble</label>
                                                                    <select id="sub_tipo_prop" name="sub_tipo_prop" class="form-mak"></select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <!-- textarea -->
                                                                <div class="form-group">
                                                                    <label>Venta o Alquiler</label>
                                                                    <select class="form-mak" id="tipo_prom" name="tipo_prom">
                                                                        <?php foreach ($selector_types_prom as $cod_type_) : ?>
                                                                            <option value="<?php echo $cod_type_[0]; ?>"><?php echo $cod_type_[1]; ?></option>
                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card card-default">
                                                    <div class="card-body">
                                                        <div id="mapa" style="height: 350px;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="">
                                                    <div class="card-body">
                                                        <!-- Date dd/mm/yyyy -->
                                                        <div class="row" id="a__t">
                                                            <div class="col-sm-12">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <div class="flex">
                                                                        <label class="mak-txt">Area de Terreno</label>
                                                                        <div class="input-group-append">
                                                                            <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                <span class="tooltiptext">
                                                                                    El área del terreno es la medida de la superficie.
                                                                                </span>
                                                                            </i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="number" inputmode="numeric" class="form-mak" min="0" placeholder="00.00m2" id="a_t" name="a_t" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row" id="a__c">
                                                            <div class="col-sm-12">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <div class="flex">
                                                                        <label class="mak-txt">Area Construida</label>
                                                                        <div class="input-group-append">
                                                                            <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                <span class="tooltiptext">
                                                                                    El área construida es la medida de la superficie.
                                                                                </span>
                                                                            </i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="number" inputmode="numeric" class="form-mak" min="0" placeholder="00.00m2" id="a_c" name="a_c" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row" id="a__o">
                                                            <div class="col-sm-12">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <div class="flex">
                                                                        <label class="mak-txt">Area Ocupada</label>
                                                                        <div class="input-group-append">
                                                                            <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                <span class="tooltiptext">
                                                                                    El área ocupada es la medida de la superficie.
                                                                                </span>
                                                                            </i>
                                                                        </div>
                                                                    </div>
                                                                    <input type="number" inputmode="numeric" class="form-mak" min="0" placeholder="00.00m2" id="a_o" name="a_o" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row" id="antig_">
                                                            <div class="col-sm-12">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <label class="mak-txt">Antigüedad</label>
                                                                    <input type="number" inputmode="numeric" class="form-mak" min="0" placeholder="0 años" id="antig" name="antig" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <script>
                                            function pasarValores() {
                                                // Obtener los elementos del formulario
                                                var direccion = document.getElementById("direccion_");
                                                var direccion_casa = document.getElementById("direcc_casa");

                                                // Asignar el valor del primer input al segundo
                                                direccion_casa.value = direccion.value;
                                            }
                                        </script>
                                        <div class="d-grid gap-2 col-3 mx-auto form-flex">
                                            <div type="button" class="btn btn-mak mak-bg nextPag" onclick="agregar_tabla()">Continuar</div>
                                        </div>
                                    </div>
                                    <!-- SELECCION TIPO -->


                                    <!-- CASA - VIVIENDA -->
                                    <div id="1" class="section card card-default col-md-12" role="tabpanel" aria-labelledby="" data-target="second_step">
                                        <!-- <div class="card-header mak-bg mak-wht">
                                            <h1>Casa -</h1>
                                        </div> -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <h3 class="card-title">Generales</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group flex">
                                                                            <div class="col-sm-6 pdd-left">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input class="right custom-control-input" type="checkbox" id="sala_com" name="sala_com" value="">
                                                                                    <label for="sala_com" class="right custom-control-label">Sala Comedor:</label>
                                                                                </div>
                                                                                <br>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input class="right custom-control-input" type="checkbox" id="sala_" name="sala_" value="">
                                                                                    <label for="sala_" class="right custom-control-label">Sala:</label>
                                                                                </div>
                                                                                <br>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input class="right custom-control-input" type="checkbox" id="comedor_" name="comedor_" value="">
                                                                                    <label for="comedor_" class="right custom-control-label">Comedor:</label>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="col-sm-6 pdd-left">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input class="right custom-control-input" type="checkbox" id="cocina_" name="cocina_" value="">
                                                                                    <label for="cocina_" class="right custom-control-label">Cocina:</label>
                                                                                </div>
                                                                                <br>
                                                                                <!-- <div class="custom-control custom-checkbox">
                                                                                                    <input class="right custom-control-input" type="checkbox" id="jardin_t" name="jardin_t" value="true">
                                                                                                    <label for="jardin_t" class="right custom-control-label">Jardín Trasero:</label>
                                                                                                </div> -->
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input class="right custom-control-input" type="checkbox" id="amoblado_" name="amoblado_" value="">
                                                                                    <label for="amoblado_" class="right custom-control-label">Amoblado:</label>
                                                                                </div>
                                                                                <br>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input class="right custom-control-input" type="checkbox" id="piscina_d" name="piscina_d">
                                                                                    <label for="piscina_d" class="right custom-control-label">Piscina propia:</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <div class="flex">
                                                                        <h3 class="card-title">Dormitorios</h3>
                                                                        <div class="input-group-append">
                                                                            <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                <span class="tooltiptext">
                                                                                    No considerar dormitorio de servicio.
                                                                                </span>
                                                                            </i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12 flex">
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <label>Dormitorio(s):</label>
                                                                            <div class="section-input col-sm-5">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/7118/7118098.png" alt="">
                                                                                </span>
                                                                                <input class="form-control input-number" type="number" min="0" id="cant_dorm" name="cant_dorm">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <label>Dormitorio con baño:</label>
                                                                            <div class="section-input col-sm-5">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/5697/5697404.png" alt="">
                                                                                </span>
                                                                                <input class="form-control input-number" type="number" min="0" id="cant_dorm_b_" name="cant_dorm_b_">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <div class="flex">
                                                                        <h3 class="card-title">Baños</h3>
                                                                        <div class="input-group-append">
                                                                            <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                <span class="tooltiptext">
                                                                                    No considerar baño de servicio.
                                                                                </span>
                                                                            </i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12 flex">
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <label>Baño(s):</label>
                                                                            <div class="section-input col-sm-5">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/456/456365.png" alt="">
                                                                                </span>
                                                                                <input class="form-control input-number" type="number" min="0" id="cant_banho" name="cant_banho">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 pdd-left align-center">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="banho_vis" name="banho_vis">
                                                                                <label for="banho_vis" class="right custom-control-label">Baño(s) de visita:</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <h3 class="card-title">Area de Servicio</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12 flex">
                                                                        <div class="col-sm-6 pdd-left align-center">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="cuarto_serv" name="cuarto_serv">
                                                                                <label for="cuarto_serv" class="right custom-control-label">Cuarto de servicio</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 pdd-left align-center">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="banho_serv" name="banho_serv">
                                                                                <label for="banho_serv" class="right custom-control-label">Baño de servicio</label>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <h3 class="card-title">Estacionamiento y Depósito</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12 flex">
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <label>Estacionamiento(s):</label>
                                                                            <div class="section-input col-sm-5">
                                                                                <span class="icon-input"><i class="fa-solid fa-warehouse"></i></span>
                                                                                <input class="form-control input-number" type="number" min="0" id="cant_estac" name="cant_estac">
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-sm-6 pdd-left align-center">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="deposito_" name="deposito_">
                                                                                <label for="deposito_" class="right custom-control-label">Depósito:</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <h3 class="card-title">Otros</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Localización:</label>
                                                                            <div class="section-input col-sm-8">
                                                                                <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                <select class="form-mak" id="ubic_casa" name="ubic_casa">
                                                                                    <option value="-1">Seleccione</option>
                                                                                    <?php foreach ($selector_types_ubi as $cod_type_u) : ?>
                                                                                        <option value="<?php echo $cod_type_u[0]; ?>"><?php echo $cod_type_u[1]; ?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="input-group-append">
                                                                                <i class="fa-solid fa-circle-info tooltipInfo tooltip-left">
                                                                                    <span class="tooltiptext">
                                                                                        Info...
                                                                                    </span>
                                                                                </i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Vista:</label>
                                                                            <div class="section-input col-sm-8">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/3017/3017956.png" alt="">
                                                                                </span>
                                                                                <select class="form-mak" id="vista_casa" name="vista_casa">
                                                                                    <option value="-1">Seleccione</option>
                                                                                    <?php foreach ($selector_types_vis as $cod_type_v) : ?>
                                                                                        <option value="<?php echo $cod_type_v[0]; ?>"><?php echo $cod_type_v[1]; ?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="input-group-append">
                                                                                <i class="fa-solid fa-circle-info tooltipInfo tooltip-left">
                                                                                    <span class="tooltiptext">
                                                                                        Info...
                                                                                    </span>
                                                                                </i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Acabado:</label>
                                                                            <div class="section-input col-sm-8">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                                </span>
                                                                                <select class="form-mak" id="acabado_casa" name="acabado_casa">
                                                                                    <option value="-1">Seleccione</option>
                                                                                    <?php foreach ($selector_types_acab as $cod_type_a) : ?>
                                                                                        <option value="<?php echo $cod_type_a[0]; ?>"><?php echo $cod_type_a[1]; ?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="input-group-append">

                                                                                <i id="test" class="test fa-solid fa-circle-info tooltipInfo tooltip-left">
                                                                                    <span class="tooltiptext" style="width: 450px;">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <b>Edificación en casco</b> - Construcción sin terminar: Estructura básica de la construcción, sin acabados interiores ni instalaciones.
                                                                                            </li>
                                                                                            <li>
                                                                                                <b>Edificación terminada</b> - Construcción completa y lista para su uso: Estructura completa de la construcción, con acabados interiores y exteriores, instalaciones y servicios.
                                                                                            </li>
                                                                                        </ul>
                                                                                    </span>
                                                                                </i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="form-flex">
                                                <button type="button" class="btn btn-mak mak-bg  backPag">Retroceder</button>
                                                <button type="button" class="btn btn-mak mak-bg  sigPag">Continuar</button>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- CASA - VIVIENDA -->

                                    <!-- DEPARTAMENTO - DUPLEX -->
                                    <div id="2" class="section card card-default col-md-12" role="tabpanel" aria-labelledby="" data-target="second_step">

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <h3 class="card-title">Generales</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12 flex">
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="sala_com_d" name="sala_com_d">
                                                                                <label for="sala_com_d" class="right custom-control-label">Sala Comedor:</label>
                                                                            </div>
                                                                            <br>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="sala_d" name="sala_d">
                                                                                <label for="sala_d" class="right custom-control-label">Sala:</label>
                                                                            </div>
                                                                            <br>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="comedor_d" name="comedor_d">
                                                                                <label for="comedor_d" class="right custom-control-label">Comedor:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="cocina_d" name="cocina_d">
                                                                                <label for="cocina_d" class="right custom-control-label">Cocina:</label>
                                                                            </div>
                                                                            <br>
                                                                            <!-- <div class="custom-control custom-checkbox">
                                                                                            <input class="right custom-control-input" type="checkbox" id="jardin_t_d" name="jardin_t_d">
                                                                                            <label for="jardin_t_d" class="right custom-control-label">Jardín Trasero:</label>
                                                                                        </div> -->
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="amoblado_d" name="amoblado_d">
                                                                                <label for="amoblado_d" class="right custom-control-label">Amoblado:</label>
                                                                            </div>
                                                                            <br>
                                                                            <!-- <div class="custom-control custom-checkbox">
                                                                                            <input class="right custom-control-input" type="checkbox" id="ascensor_d" name="ascensor_d">
                                                                                            <label for="ascensor_d" class="right custom-control-label">Ascensor:</label>
                                                                                        </div>
                                                                                        <br>
                                                                                        <div class="custom-control custom-checkbox">
                                                                                            <input class="right custom-control-input" type="checkbox" id="ascensor_directo_d" name="ascensor_directo_d">
                                                                                            <label for="ascensor_directo_d" class="right custom-control-label">Ascensor directo:</label>
                                                                                        </div> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <div class="flex">
                                                                        <h3 class="card-title">Dormitorios</h3>
                                                                        <div class="input-group-append">
                                                                            <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                <span class="tooltiptext">
                                                                                    No considerar dormitorio de servicio.
                                                                                </span>
                                                                            </i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12 flex">
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <label>Dormitorio(s):</label>
                                                                            <div class="section-input col-sm-5">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/7118/7118098.png" alt="">
                                                                                </span>
                                                                                <input class="form-control input-number" type="number" min="0" id="cant_dorm_d" name="cant_dorm_d">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <label>Dormitorio con baño:</label>
                                                                            <div class="section-input col-sm-5">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/5697/5697404.png" alt="">
                                                                                </span>
                                                                                <input class="form-control input-number" type="number" min="0" id="cant_dorm_b_d" name="cant_dorm_b_d">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <div class="flex">
                                                                        <h3 class="card-title">Baños</h3>
                                                                        <div class="input-group-append">
                                                                            <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                <span class="tooltiptext">
                                                                                    No considerar baño de servicio.
                                                                                </span>
                                                                            </i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12 flex">
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <label>Baño(s):</label>
                                                                            <div class="section-input col-sm-5">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/456/456365.png" alt="">
                                                                                </span>
                                                                                <input class="form-control input-number" type="number" min="0" id="cant_banho_d" name="cant_banho_d">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 pdd-left align-center">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="banho_vis_d" name="banho_vis_d">
                                                                                <label for="banho_vis_d" class="right custom-control-label">Baño de visita:</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <h3 class="card-title">Area de Servicio</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12 flex">
                                                                        <div class="col-sm-6 pdd-left align-center">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="cuarto_serv_d" name="cuarto_serv_d">
                                                                                <label for="cuarto_serv_d" class="right custom-control-label">Cuarto de servicio:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 pdd-left align-center">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="banho_serv_d" name="banho_serv_d">
                                                                                <label for="banho_serv_d" class="right custom-control-label">Baño de servicio:</label>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-sm-12">

                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <h3 class="card-title">Estacionamiento y Depósito</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12 flex">
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <label>Estacionamiento(s):</label>
                                                                            <div class="section-input col-sm-5">
                                                                                <span class="icon-input"><i class="fa-solid fa-warehouse"></i></span>
                                                                                <input class="form-control input-number" type="number" min="0" id="cant_estac_d" name="cant_estac_d">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-6 pdd-left align-center">
                                                                            <input class="right custom-control-input" type="checkbox" id="deposito__d" name="deposito__d">
                                                                            <label for="deposito__d" class="right custom-control-label">Depósito:</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <h3 class="card-title">Otros</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Localización:</label>
                                                                            <div class="section-input col-sm-8">
                                                                                <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                <select class="form-mak" id="ubic_depa" name="ubic_depa">
                                                                                    <option value="-1">Seleccione</option>
                                                                                    <?php foreach ($selector_types_ubi as $cod_type_u) : ?>
                                                                                        <option value="<?php echo $cod_type_u[0]; ?>"><?php echo $cod_type_u[1]; ?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="input-group-append">
                                                                                <i class="fa-solid fa-circle-info tooltipInfo tooltip-left">
                                                                                    <span class="tooltiptext">
                                                                                        Info...
                                                                                    </span>
                                                                                </i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Vista:</label>
                                                                            <div class="section-input col-sm-8">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/3017/3017956.png" alt="">
                                                                                </span>
                                                                                <select class="form-mak" id="vista_depa" name="vista_depa">
                                                                                    <option value="-1">Seleccione</option>
                                                                                    <?php foreach ($selector_types_vis as $cod_type_v) : ?>
                                                                                        <option value="<?php echo $cod_type_v[0]; ?>"><?php echo $cod_type_v[1]; ?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="input-group-append">
                                                                                <i class="fa-solid fa-circle-info tooltipInfo tooltip-left">
                                                                                    <span class="tooltiptext">
                                                                                        Info...
                                                                                    </span>
                                                                                </i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Acabado:</label>
                                                                            <div class="section-input col-sm-8">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                                </span>
                                                                                <select class="form-mak" id="acabado_depa" name="acabado_depa">
                                                                                    <option value="-1">Seleccione</option>
                                                                                    <?php foreach ($selector_types_acab as $cod_type_a) : ?>
                                                                                        <option value="<?php echo $cod_type_a[0]; ?>"><?php echo $cod_type_a[1]; ?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="input-group-append">
                                                                                <i class="fa-solid fa-circle-info tooltipInfo tooltip-left">
                                                                                    <span class="tooltiptext" style="width: 450px;">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <b>Edificación en casco</b> - Construcción sin terminar: Estructura básica de la construcción, sin acabados interiores ni instalaciones.
                                                                                            </li>
                                                                                            <li>
                                                                                                <b>Edificación terminada</b> - Construcción completa y lista para su uso: Estructura completa de la construcción, con acabados interiores y exteriores, instalaciones y servicios.
                                                                                            </li>
                                                                                        </ul>
                                                                                    </span>
                                                                                </i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <br>
                                                                    <div class="col-sm-12 flex">
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <div class="custom-control custom-checkbox align-center">
                                                                                <input class="right custom-control-input" type="checkbox" id="ascensor_d" name="ascensor_d">
                                                                                <label for="ascensor_d" class="right custom-control-label">Ascensor:</label>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <div class="custom-control custom-checkbox align-center">
                                                                                <input class="right custom-control-input" type="checkbox" id="ascensor_directo_d" name="ascensor_directo_d">
                                                                                <label for="ascensor_directo_d" class="right custom-control-label">Ascensor directo:</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <h3 class="card-title">Locación</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12 flex">
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <label>Pisos del edificio:</label>
                                                                            <div class="section-input col-sm-5">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/5697/5697404.png" alt="">
                                                                                </span>
                                                                                <input class="form-control input-number" type="number" min="0" id="pisos_edif_d" name="pisos_edif_d">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 pdd-left">
                                                                            <label>Piso del dpto:</label>
                                                                            <div class="section-input col-sm-5">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/5697/5697404.png" alt="">
                                                                                </span>
                                                                                <input class="form-control input-number" type="number" min="0" id="piso_dpto_" name="piso_dpto_">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <div class="d-grid gap-2 col-8 mx-auto form-flex">
                                                <div type="button" class="btn btn-mak mak-bg  backPag">Retroceder</div>
                                                <div type="button" class="btn btn-mak mak-bg  sigPag">Continuar</div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- DEPARTAMENTO - DUPLEX -->

                                    <!-- TERRENO RESIDENCIAL -->
                                    <div id="3" class="section card card-default col-md-12" role="tabpanel" aria-labelledby="" data-target="second_step">

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6 mx-auto">
                                                    <div class="card">
                                                        <div class="card-header mak-bg mak-wht">
                                                            <h3 class="card-title">General</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Zonificación:</label>
                                                                    <div class="section-input col-sm-8">
                                                                        <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                        <!-- <input type="text" id="tipo_zoni_ofi" name="tipo_zoni_ofi"> -->
                                                                        <!-- <select id="opciones_zoni_ofi" name="opciones_zoni_ofi" class="opciones_zoni_ofi"></select> -->
                                                                        <div style="width: 100%">
                                                                            <input type="text" class="form-mak auto-input">
                                                                            <ul class="lista">
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-group-append">
                                                                        <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                            <span class="tooltiptext">
                                                                                Info...
                                                                            </span>
                                                                        </i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Tipo Suelo:</label>
                                                                    <div class="section-input col-sm-8">
                                                                        <span class="icon-input">
                                                                            <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                        </span>
                                                                        <select class="form-mak" id="tipo_suelo_tern" name="tipo_suelo_tern">
                                                                            <option value="-1">Seleccione</option>

                                                                            <?php foreach ($selector_types_suel as $cod_type_suel) : ?>
                                                                                <option value="<?php echo $cod_type_suel[0]; ?>"><?php echo $cod_type_suel[1]; ?></option>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="input-group-append">
                                                                        <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                            <span class="tooltiptext">
                                                                                Info...
                                                                            </span>
                                                                        </i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 flex">
                                                                <div class="col-sm-6 flex align-center" style="padding-right: 0px;padding-left: 0px;">
                                                                    <label class="col-sm-4 col-form-label" style="padding-right: 0px;padding-left: 0px;">Parámetros:</label>
                                                                    <div class=" section-input col-sm-8">
                                                                        <span class="icon-input">
                                                                            <img src="https://cdn-icons-png.flaticon.com/512/3017/3017956.png" alt="">
                                                                        </span>
                                                                        <input class="form-control" type="number" min="0" id="params_tern" name="params_tern">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 flex align-center pdd-left" style="padding-right: 0px;padding-left: 0px;">
                                                                    <label class="col-sm-3 col-form-label" style="padding-right: 0px;padding-left: 0px;">Frente:</label>
                                                                    <div class=" section-input col-sm-5">
                                                                        <span class="icon-input">
                                                                            <img class="rotate-180" src="https://cdn-icons-png.flaticon.com/512/8264/8264013.png" alt="">
                                                                        </span>
                                                                        <input class="form-control input-number" type="number" min="0" step="00.01" id="frnte_tern" name="frnte_tern">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <div class="d-grid gap-2 col-8 mx-auto form-flex">
                                                <div type="button" class="btn btn-mak mak-bg  backPag">Retroceder</div>
                                                <div type="button" class="btn btn-mak mak-bg  sigPag">Continuar</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- TERRENO RESIDENCIAL -->

                                    <!-- OFICINA -->
                                    <div id="4" class="section card card-default col-md-12" role="tabpanel" aria-labelledby="" data-target="second_step">

                                        <div class="card-body">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-sm-12">

                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <h3 class="card-title">
                                                                        Generales
                                                                    </h3>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Localización:</label>
                                                                            <div class="section-input col-sm-8">
                                                                                <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                <select class="form-mak" id="ubic_ofi" name="ubic_ofi">
                                                                                    <option value="-1">Seleccione</option>
                                                                                    <?php foreach ($selector_types_ubi as $cod_type_u) : ?>
                                                                                        <option value="<?php echo $cod_type_u[0]; ?>"><?php echo $cod_type_u[1]; ?>
                                                                                        </option>
                                                                                    <?php endforeach ?>

                                                                                </select>
                                                                            </div>
                                                                            <div class="input-group-append">
                                                                                <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                    <span class="tooltiptext">
                                                                                        Info...
                                                                                    </span>
                                                                                </i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Acabado:</label>
                                                                            <div class="section-input col-sm-8">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                                </span>
                                                                                <select class="form-mak" id="acabado_ofi" name="acabado_ofi">
                                                                                    <option value="-1" selected>Seleccione</option>
                                                                                    <?php foreach ($selector_types_acab as $cod_type_a) : ?>
                                                                                        <option value="<?php echo $cod_type_a[0]; ?>"><?php echo $cod_type_a[1]; ?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="input-group-append">
                                                                                <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                    <span class="tooltiptext" style="width: 450px;">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <b>Edificación en casco</b> - Construcción sin terminar: Estructura básica de la construcción, sin acabados interiores ni instalaciones.
                                                                                            </li>
                                                                                            <li>
                                                                                                <b>Edificación terminada</b> - Construcción completa y lista para su uso: Estructura completa de la construcción, con acabados interiores y exteriores, instalaciones y servicios.
                                                                                            </li>
                                                                                        </ul>
                                                                                    </span>
                                                                                </i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Zonificación:</label>
                                                                            <div class="section-input col-sm-8">
                                                                                <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                <!-- <input type="text" id="tipo_zoni_ofi" name="tipo_zoni_ofi"> -->
                                                                                <!-- <select id="opciones_zoni_ofi" name="opciones_zoni_ofi" class="opciones_zoni_ofi"></select> -->
                                                                                <div style="width: 100%">
                                                                                    <input type="text" class="form-mak auto-input">
                                                                                    <ul class="lista">
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="input-group-append">
                                                                                <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                    <span class="tooltiptext">
                                                                                        Info...
                                                                                    </span>
                                                                                </i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Vista:</label>
                                                                            <div class="section-input col-sm-8">
                                                                                <span class="icon-input">
                                                                                    <img src="https://cdn-icons-png.flaticon.com/512/3017/3017956.png" alt="">
                                                                                </span>
                                                                                <select class="form-mak" id="vista_ofi" name="vista_ofi">
                                                                                    <option value="-1">Seleccione</option>
                                                                                    <?php foreach ($selector_types_vis as $cod_type_v) : ?>
                                                                                        <option value="<?php echo $cod_type_v[0]; ?>"><?php echo $cod_type_v[1]; ?></option>
                                                                                    <?php endforeach ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="card">
                                                                <div class="card-header mak-bg mak-wht">
                                                                    <h3 class="card-title">Otros</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="col-sm-12 flex">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label>Piso de oficina:</label>
                                                                                <div class="section-input col-sm-5">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/6080/6080750.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control input-number" type="number" min="0" id="piso_ofi" name="piso_ofi">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label>Cochera(s):</label>
                                                                                <div class="section-input col-sm-5">
                                                                                    <span class="icon-input"><i class="fa-solid fa-warehouse"></i></span>
                                                                                    <input class="form-control input-number" type="number" min="0" id="coch_ofi" name="coch_ofi">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="col-sm-12 flex">
                                                                        <br>
                                                                        <div class="col-sm-6 pdd-left align-center">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="ascen_ofi" name="ascen_ofi">
                                                                                <label for="ascen_ofi" class="right custom-control-label">Ascensor:</label>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-sm-6 pdd-left align-center">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="aire_ofio" name="aire_ofio">
                                                                                <label for="aire_ofio" class="right custom-control-label">Aire acondicionado:</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <div class="d-grid gap-2 col-8 mx-auto form-flex">
                                                <div type="button" class="btn btn-mak mak-bg  backPag">Retroceder</div>
                                                <div type="button" class="btn btn-mak mak-bg  sigPag">Continuar</div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- OFICINA -->

                                    <!-- LOCAL COMERCIAL -->
                                    <div id="5" class="section card card-default col-md-12" role="tabpanel" aria-labelledby="" data-target="second_step">


                                        <!-- LOCAL COMERCIAL - EXCLUSIVO -->
                                        <div class="lcl exclusivo">

                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-sm-12">

                                                                <div class="card">
                                                                    <div class="card-header mak-bg mak-wht">
                                                                        <h3 class="card-title">
                                                                            Otros
                                                                        </h3>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">Localización:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                    <select class="form-mak" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                        <span class="tooltiptext">
                                                                                            Info...
                                                                                        </span>
                                                                                    </i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">Acabado:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                                    </span>
                                                                                    <select class="form-mak" id="acabado_" name="acabado_">
                                                                                        <option value="-1" selected>Seleccione</option>
                                                                                        <?php foreach ($selector_types_acab as $cod_type_a) : ?>
                                                                                            <option value="<?php echo $cod_type_a[0]; ?>"><?php echo $cod_type_a[1]; ?></option>
                                                                                        <?php endforeach ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                        <span class="tooltiptext">
                                                                                            Info...
                                                                                        </span>
                                                                                    </i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">Zonificación:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                    <!-- <input type="text" id="tipo_zoni_ofi" name="tipo_zoni_ofi"> -->
                                                                                    <!-- <select id="opciones_zoni_ofi" name="opciones_zoni_ofi" class="opciones_zoni_ofi"></select> -->
                                                                                    <div style="width: 100%">
                                                                                        <input type="text" class="form-mak auto-input">
                                                                                        <ul class="lista">
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                        <span class="tooltiptext">
                                                                                            Info...
                                                                                        </span>
                                                                                    </i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header mak-bg mak-wht">
                                                                        <h3 class="card-title">Otros</h3>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="col-sm-12 flex">
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Frente:</label>
                                                                                    <div class="section-input col-sm-5">
                                                                                        <span class="icon-input">
                                                                                            <img class="rotate-180" src="https://cdn-icons-png.flaticon.com/512/8264/8264013.png" alt="">
                                                                                        </span>
                                                                                        <input class="form-control input-number" type="number" min="0" step="00.01" id="frnt_lcl_com" name="frnt_lcl_com">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Cochera(s):</label>
                                                                                    <div class="section-input col-sm-5">
                                                                                        <span class="icon-input"><i class="fa-solid fa-warehouse"></i></span>
                                                                                        <input class="form-control input-number" type="number" min="0" id="coch_lcl_com" name="coch_lcl_com">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="card">
                                                                    <div class="card-header mak-bg mak-wht">
                                                                        <h3 class="card-title">Otros</h3>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Piso del local:</label>
                                                                                <div class="section-input col-sm-5">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/6080/6080750.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control input-number" type="number" min="0" id="piso_lcl_com" name="piso_lcl_com">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-sm-12 flex">

                                                                            <div class="col-sm-6 pdd-left align-center">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input class="right custom-control-input" type="checkbox" id="ascen_lcl_com" name="ascen_lcl_com">
                                                                                    <label for="ascen_lcl_com" class="right custom-control-label">Ascensor:</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 pdd-left align-center">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input class="right custom-control-input" type="checkbox" id="aire_lcl_com" name="aire_lcl_com">
                                                                                    <label for="aire_lcl_com" class="right custom-control-label">Aire acondicionado:</label>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- LOCAL COMERCIAL - EXCLUSIVO -->

                                        <!-- LOCAL COMERCIAL - COMUN -->
                                        <div class="lcl comun">

                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-sm-12">

                                                                <div class="card">
                                                                    <div class="card-header mak-bg mak-wht">
                                                                        <h3 class="card-title">
                                                                            Otros
                                                                        </h3>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">Localización:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                    <select class="form-mak" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                        <span class="tooltiptext">
                                                                                            Info...
                                                                                        </span>
                                                                                    </i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">Acabado:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                                    </span>
                                                                                    <select class="form-mak" id="" name="">
                                                                                        <option value="-1" selected>Seleccione</option>
                                                                                        <?php foreach ($selector_types_acab as $cod_type_a) : ?>
                                                                                            <option value="<?php echo $cod_type_a[0]; ?>"><?php echo $cod_type_a[1]; ?></option>
                                                                                        <?php endforeach ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                        <span class="tooltiptext">
                                                                                            Info...
                                                                                        </span>
                                                                                    </i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">Zonificación:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                    <!-- <input type="text" id="tipo_zoni_ofi" name="tipo_zoni_ofi"> -->
                                                                                    <!-- <select id="opciones_zoni_ofi" name="opciones_zoni_ofi" class="opciones_zoni_ofi"></select> -->
                                                                                    <div style="width: 100%">
                                                                                        <input type="text" class="form-mak auto-input">
                                                                                        <ul class="lista">
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                        <span class="tooltiptext">
                                                                                            Info...
                                                                                        </span>
                                                                                    </i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-header mak-bg mak-wht">
                                                                        <h3 class="card-title">Otros</h3>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="col-sm-12 flex">
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Frente:</label>
                                                                                    <div class="section-input col-sm-5">
                                                                                        <span class="icon-input">
                                                                                            <img class="rotate-180" src="https://cdn-icons-png.flaticon.com/512/8264/8264013.png" alt="">
                                                                                        </span>
                                                                                        <input class="form-control input-number" type="number" min="0" step="00.01" id="" name="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label>Cochera(s):</label>
                                                                                    <div class="section-input col-sm-5">
                                                                                        <span class="icon-input"><i class="fa-solid fa-warehouse"></i></span>
                                                                                        <input class="form-control input-number" type="number" min="0" id="" name="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="card">
                                                                    <div class="card-header mak-bg mak-wht">
                                                                        <h3 class="card-title">Otros</h3>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Piso del local:</label>
                                                                                <div class="section-input col-sm-5">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/6080/6080750.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control input-number" type="number" min="0" id="" name="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="col-sm-12 flex">

                                                                            <div class="col-sm-6 pdd-left align-center">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input class="right custom-control-input" type="checkbox" id="" name="">
                                                                                    <label for="" class="right custom-control-label">Ascensor:</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 pdd-left align-center">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input class="right custom-control-input" type="checkbox" id="" name="">
                                                                                    <label for="" class="right custom-control-label">Aire acondicionado:</label>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- LOCAL COMERCIAL - COMUN -->

                                        <div class="card-footer">
                                            <div class="d-grid gap-2 col-8 mx-auto form-flex">
                                                <div type="button" class="btn btn-mak mak-bg  backPag">Retroceder</div>
                                                <div type="button" class="btn btn-mak mak-bg  sigPag">Continuar</div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- LOCAL COMERCIAL -->


                                    <!-- LOCAL INDUSTRIAL -->
                                    <div id="6" class="section card card-default col-md-12" role="tabpanel" aria-labelledby="" data-target="second_step">

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6 mx-auto">
                                                    <div class="card">

                                                        <div class="card-header mak-bg mak-wht">
                                                            <h3 class="card-title">General</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Localización:</label>
                                                                    <div class="section-input col-sm-8">
                                                                        <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                        <select class="form-mak" id="ubic_lci" name="ubic_lci">
                                                                            <option value="-1">Seleccione</option>
                                                                            <?php foreach ($selector_types_ubi as $cod_type_u) : ?>
                                                                                <option value="<?php echo $cod_type_u[0]; ?>"><?php echo $cod_type_u[1]; ?>
                                                                                </option>
                                                                            <?php endforeach ?>

                                                                        </select>

                                                                    </div>
                                                                    <div class="input-group-append">
                                                                        <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                            <span class="tooltiptext">
                                                                                Info...
                                                                            </span>
                                                                        </i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Acabado:</label>
                                                                    <div class="section-input col-sm-8">
                                                                        <span class="icon-input">
                                                                            <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                        </span>
                                                                        <select class="form-mak" id="acabado_lci" name="acabado_lci">
                                                                            <option value="-1" selected>Seleccione</option>
                                                                            <?php foreach ($selector_types_acab as $cod_type_a) : ?>
                                                                                <option value="<?php echo $cod_type_a[0]; ?>"><?php echo $cod_type_a[1]; ?></option>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Tipo suelo:</label>
                                                                    <div class="section-input col-sm-8">
                                                                        <span class="icon-input">
                                                                            <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                        </span>
                                                                        <select class="form-mak" id="tipo_suelo_lci" name="tipo_suelo_lci">
                                                                            <option value="-1">Seleccione</option>

                                                                            <?php foreach ($selector_types_suel as $cod_type_suel) : ?>
                                                                                <option value="<?php echo $cod_type_suel[0]; ?>"><?php echo $cod_type_suel[1]; ?></option>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Acceso:</label>
                                                                    <div class="section-input col-sm-8">
                                                                        <span class="icon-input">
                                                                            <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                        </span>
                                                                        <select class="form-mak" id="">
                                                                            <option selected disabled>Seleccione</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12 flex">
                                                                <div class="col-sm-6 pdd-left">
                                                                    <label>Frente:</label>
                                                                    <div class="section-input col-sm-5">
                                                                        <span class="icon-input">
                                                                            <img class="rotate-180" src="https://cdn-icons-png.flaticon.com/512/8264/8264013.png" alt="">
                                                                        </span>
                                                                        <input class="form-control input-number" id="frente_lci" name="frente_lci" type="number" min="0" step="00.01" value="00.00">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 pdd-left">
                                                                    <label>Nave:</label>
                                                                    <div class="section-input col-sm-5">
                                                                        <span class="icon-input"><i class="fa-solid fa-warehouse"></i></span>
                                                                        <input class="form-control input-number" id="nave_lci" name="nave_lci" type="number" min="0" step="0.01" min="0" value="00.00">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <div class="d-grid gap-2 col-8 mx-auto form-flex">
                                                <div type="button" class="btn btn-mak mak-bg  backPag">Retroceder</div>
                                                <div type="button" class="btn btn-mak mak-bg  sigPag">Continuar</div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- LOCAL INDUSTRIAL -->


                                    <!-- SUBIDA DE ARCHIVOS -->
                                    <div id="pantalla-SA" class="section col-md-12" role="tabpanel" aria-labelledby="" data-target="third_step">
                                        SUBIDA DE ARCHIVOS
                                        <div class="card-footer">
                                            <div class="d-grid gap-2 col-8 mx-auto form-flex">
                                                <div type="button" class="btn btn-mak mak-bg  atrPag">Retroceder</div>
                                                <div type="button" class="btn btn-mak mak-bg  lstPag">Continuar</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SUBIDA DE ARCHIVOS -->


                                    <!-- RESUMEN DE SOLICITUD -->
                                    <div id="pantalla-RS" class="section col-md-12" role="tabpanel" aria-labelledby="" data-target="fourth_step">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <table class="table table-borderless">
                                                            <thead class="">
                                                                <tr>
                                                                    <th>DISTRITO</th>
                                                                    <th>DIRECCIÓN</th>
                                                                    <th>TIPO</th>
                                                                    <th>PROMOCIÓN</th>
                                                                    <th>AT</th>
                                                                    <th>AC</th>
                                                                    <th>AO</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <!-- <td>MIRAFLORES</td> -->
                                                                    <td id="dir__dist"></td>
                                                                    <!-- <td>AV AREQUIPA 4960</td> -->
                                                                    <td id="dir__"></td>
                                                                    <!-- <td>CASA</td> -->
                                                                    <td id="tip__"></td>
                                                                    <!-- <td>VENTA</td> -->
                                                                    <td id="pro__"></td>
                                                                    <td id="at__"></td>
                                                                    <td id="ac__"></td>
                                                                    <td id="ao__"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <br>
                                                        <!-- <div class="card-body"> -->
                                                        <div class="col-sm-12  card-resume flex">
                                                            <div class="col-sm-6 brd-rght-blue">
                                                                <div class="card-body">
                                                                    <div id="mapa_2" style="height: 400px;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="card-body data-resume">
                                                                    <h2>Resumen</h2>
                                                                    <p><strong>Datos de contacto:</strong></p>
                                                                    <ul>
                                                                        <li>Nombre: <?php echo $_SESSION['nom_usu']; ?></li>
                                                                        <li>Email: <?php echo $_SESSION['email_usu']; ?></li>
                                                                        <li>Teléfono: <?php echo $_SESSION['telef_usu']; ?></li>
                                                                    </ul>
                                                                    <div>
                                                                        <p><strong>Información de la propiedad:</strong></p>
                                                                        <div data-resume>

                                                                        </div>
                                                                    </div>
                                                                    <!-- <p><strong>Información del tipo de propiedad:</strong></p> -->
                                                                </div>
                                                            </div>
                                                            <!-- </div> -->
                                                        </div>

                                                        <!-- <div class="col-md-6">
                                                                <div class="card card-default">
                                                                    <div class="card-body">
                                                                        <div id="mapa_2" style="height: 400px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div> -->

                                                        <!-- resumen de los inputs-->
                                                        <!-- <div class="col-sm-6">
                                                                <div class="card">
                                                                    <div class="card-body data-resume">
                                                                        <h2>Resumen</h2>

                                                                        <p><strong>Datos de contacto:</strong></p>
                                                                        <ul>
                                                                            <li>Nombre: <?php echo $_SESSION['nom_usu']; ?></li>
                                                                            <li>Email: <?php echo $_SESSION['email_usu']; ?></li>
                                                                            <li>Teléfono: <?php echo $_SESSION['telef_usu']; ?></li>
                                                                        </ul>
                                                                        <div>
                                                                            <p><strong>Información de la propiedad:</strong></p>
                                                                            <div data-resume>
                                                                                <ul>
                                                                                    <!--Datos del paso 1--
                                                                                    <li id="dire_resumen"></li>
                                                                                    <li id="tipo_prop_resumen"> </li>
                                                                                    <li id="sub_tipo_prop_resumen"></li>
                                                                                    <li id="tipo_prom_resumen">Tipo de promoción: </li>
                                                                                    <!--Datos del paso 1--


                                                                                    <!--Datos del paso 2 casa--
                                                                                    <li id="sala_com_resumen" style="display: none;"></li>
                                                                                    <li id="cocin_cas_resumen" style="display: none;"></li>
                                                                                    <li id="sala_cas_resumen" style="display: none;"></li>
                                                                                    <li id="amob_cas_resumen" style="display: none;"></li>
                                                                                    <li id="comed_cas_resumen" style="display: none;"></li>
                                                                                    <li id="pisc_cas_resumen" style="display: none;"></li>
                                                                                    <li id="cant_dorm_cas_resumen" style="display: none;"></li>
                                                                                    <li id="banho_vis_resumen" style="display: none;"></li>
                                                                                    <li id="cuarto_serv_resumen" style="display: none;"></li>
                                                                                    <li id="banho_serv_resumen" style="display: none;"></li>
                                                                                    <li id="deposito_resumen" style="display: none;"></li>
                                                                                    <li id="bano_resumen" style="display: none;"></li>
                                                                                    <li id="ascensor_resumen" style="display: none;"></li>
                                                                                    <li id="ascensor_Dir_resumen" style="display: none;"></li>
                                                                                    <li id="aire_acon_resumen" style="display: none;"></li>
                                                                                    <!--Datos del paso 2 casa--
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <p><strong>Información del tipo de propiedad:</strong></p>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        <!-- resumen de los inputs-->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-flex">
                                            <button type="button" class="btn btn-mak mak-bg  antPag">Retroceder</button>

                                            <button type="button" class="btn btn-mak mak-bg " id="btnValo_casa" name="btnValo_casa" style="display:none">
                                                Finalizar Casa
                                            </button>

                                            <button type="button" class="btn btn-mak mak-bg " id="btnValo_depa" name="btnValo_depa" style="display:none">
                                                Finalizar Depa
                                            </button>

                                            <button type="button" class="btn btn-mak mak-bg " id="btnValo_terren" name="btnValo_terren" style="display:none">
                                                Finalizar Terreno
                                            </button>

                                            <button type="button" class="btn btn-mak mak-bg " id="btnValo_ofi" name="btnValo_ofi" style="display:none">
                                                Finalizar Oficina
                                            </button>

                                            <button type="button" class="btn btn-mak mak-bg " id="btnValo_lc_ex" name="btnValo_lc_ex" style="display:none">
                                                Finalizar exclusivo
                                            </button>

                                            <button type="button" class="btn btn-mak mak-bg " id="btnValo_lc_com" name="btnValo_lc_com" style="display:none">
                                                Finalizar comun
                                            </button>

                                            <button type="button" class="btn btn-mak mak-bg " id="btnValo_lc_ind" name="btnValo_lc_ind" style="display:none">
                                                Finalizar local industrial
                                            </button>
                                        </div>

                                    </div>
                                    <!-- RESUMEN DE SOLICITUD -->

                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- END SECTION -->
                    <!-- </div> -->

                    <!-- </div> -->

                    <!-- </div> -->
                </div>
            </section>


        </div>
        <?php include '../Vista/foot-form.php' ?>
    </div>

    <!-- REQUIRED SCRIPTS -->
    <script src="../Vista/js/stepper.js"></script>
    <script src="../Vista/js/resume.js"></script>
    <script src="../Vista/assets/functions.js"></script>


    <!-- jQuery -->
    <script src="../Vista/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../Vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../Vista/plugins/select2/js/select2.full.js"></script>
    <script src="../Vista/plugins/select2/js/select2.full.min.js"></script>
    <script src="../Vista/plugins/select2/js/select2.js"></script>
    <script src="../Vista/plugins/select2/js/select2.min.js"></script>
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

    <!--GOOGLE MAPS TESTING-->
    <script type="text/javascript">
        function initmap() {
            const autocomplete = new google.maps.places.Autocomplete(document.getElementById('direccion_'));
            var map = new google.maps.Map(document.getElementById('mapa'), {
                center: {
                    lat: -34.397,
                    lng: 150.644
                },
                zoom: 18
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: -34.397,
                    lng: 150.644
                },
                map: map
            });

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    map.setCenter(pos);
                    var marker = new google.maps.Marker({
                        position: pos,
                        map: map,
                        title: 'Ubicación actual'
                    });
                }, function() {
                    // Manejar errores de geolocalización aquí
                });
            }
        }

        function onGoogleMapsLoaded() {
            const autocomplete = new google.maps.places.Autocomplete(document.getElementById('direccion_'));
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNO5GraIm8rWrrLbWt-Gv9GxsenRng-8o&callback=initmap&libraries=places" onload="onGoogleMapsLoaded()" async defer>
    </script>


    <script type="text/javascript">
        /*
        function buscarDireccion(event, mapa1Id, mapa2Id) {
            if (event.keyCode === 13) { // 13 es el código de la tecla "Enter"
                event.preventDefault();
                const direccion = document.getElementById('direccion_').value;
                const geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    address: direccion
                }, function(results, status) {
                    if (status === 'OK') {
                        const latitud = results[0].geometry.location.lat();
                        const longitud = results[0].geometry.location.lng();
                        mostrarMapa(latitud, longitud, mapa1Id);
                        mostrarMapa(latitud, longitud, mapa2Id);
                    }
                });
            }
        }*/

        async function buscarDireccion(event, mapa1Id, mapa2Id) {
            const isEnterKey = event.keyCode === 13;
            const isMouseClick = event.type === 'click';

            if (isEnterKey || isMouseClick) {
                event.preventDefault();
                const direccion = document.getElementById('direccion_').value;
                const geocoder = new google.maps.Geocoder();

                try {
                    const results = await geocodeAddress(geocoder, direccion);
                    const {
                        lat,
                        lng
                    } = getLatLngFromGeocodeResult(results);

                    await mostrarMapaAsync(lat, lng, mapa1Id);
                    await mostrarMapaAsync(lat, lng, mapa2Id);
                } catch (error) {
                    console.error('Ocurrió un error al buscar la dirección:', error);
                }
            }
        }

        function geocodeAddress(geocoder, direccion) {
            return new Promise((resolve, reject) => {
                geocoder.geocode({
                    address: direccion
                }, (results, status) => {
                    if (status === 'OK') {
                        resolve(results);
                    } else {
                        reject(status);
                    }
                });
            });
        }

        function getLatLngFromGeocodeResult(results) {
            const location = results[0].geometry.location;
            return {
                lat: location.lat(),
                lng: location.lng()
            };
        }

        function mostrarMapaAsync(latitud, longitud, divId) {
            return new Promise((resolve, reject) => {
                const mapa = new google.maps.Map(document.getElementById(divId), {
                    zoom: 17,
                    center: {
                        lat: latitud,
                        lng: longitud
                    },
                });

                const marcador = new google.maps.Marker({
                    position: {
                        lat: latitud,
                        lng: longitud
                    },
                    map: mapa,
                });

                // Espera un breve período para asegurar que el mapa se haya cargado correctamente
                setTimeout(() => resolve(), 100);
            });
        }


        function mostrarMapa(latitud, longitud, divId) {
            const mapa = new google.maps.Map(document.getElementById(divId), {
                zoom: 17,
                center: {
                    lat: latitud,
                    lng: longitud
                },
            });
            const marcador = new google.maps.Marker({
                position: {
                    lat: latitud,
                    lng: longitud
                },
                map: mapa,
            });
        }

        function initAutocomplete() {
            const input = document.getElementById('direccion_');
            const autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.addListener('place_changed', function() {
                const place = autocomplete.getPlace();
                if (!place.geometry) {
                    //alert("No se encontró la dirección");
                    return;
                }
                const latitud = place.geometry.location.lat();
                const longitud = place.geometry.location.lng();
                mostrarMapa(latitud, longitud, 'mapa');
            });
        }
    </script>
    <!--GOOGLE MAPS TESTING-->

    <script type="text/javascript">
        /*function changeInputs() {
          const tipo_prop = document.getElementById("tipo_prop");

          const tipo_prop_value_selected = tipo_prop.value;


          if (tipo_prop_value_selected === "1") {
            const area_t = document.getElementById("a_t");
            area_t.style.display = "none";
            console.log("testing");

          } else if (tipo_prop_value_selected === "2") {

            console.log("testing2");

          } else if (tipo_prop_value_selected === "3") {

            console.log("testing3");

          }
        }
        const tipo_prop = document.getElementById("tipo_prop");
        tipo_prop.addEventListener("change", changeInputs);*/
    </script>

    <style type="text/css">
        #a__t,
        #a__c,
        #a__o,
        #antig_ {
            opacity: 1;
            height: 100%;
            margin-bottom: 3px;
            transition: opacity 0.3s ease-out, height 0.3s ease-out, margin-bottom 0.3s ease-out;
        }


        #a__t.hidden,
        #a__c.hidden,
        #a__o.hidden,
        #antig_.hidden {
            opacity: 0;
            height: 0;
            margin-bottom: 0;
        }
    </style>

    <script type="text/javascript">
        const tipo_prop = document.getElementById("tipo_prop");
        const sub_tipo_prop = document.getElementById("sub_tipo_prop");

        const area_t = document.getElementById("a__t");
        const area_c = document.getElementById("a__c");
        const area_o = document.getElementById("a__o");
        const antig = document.getElementById("antig_");


        const a_t_ = document.getElementById("a_t");
        const a_c_ = document.getElementById("a_c");
        const a_o_ = document.getElementById("a_o");
        const a_ant_ = document.getElementById("antig");

        //const r1 = document.getElementById("resumen_1");
        //const r2 = document.getElementById("resumen_2");


        tipo_prop.addEventListener("change", function() {
            switch (tipo_prop.value) {
                case "1":
                    area_o.classList.add("hidden");
                    //a_o_.removeAttribute("required");

                    area_t.classList.remove("hidden");
                    area_c.classList.remove("hidden");
                    antig.classList.remove("hidden");


                    //r1.style.display = "block";

                    break;

                case "2":
                    area_t.classList.add("hidden");
                    //a_t_.removeAttribute("required");

                    area_c.classList.remove("hidden");
                    area_o.classList.remove("hidden");
                    antig.classList.remove("hidden");

                    //r2.style.display = "block";
                    break;

                case "3":
                    area_c.classList.add("hidden");
                    //a_c_.removeAttribute("required");

                    area_o.classList.add("hidden");
                    antig.classList.add("hidden");
                    area_t.classList.remove("hidden");
                    break;

                case "4":
                    area_c.classList.remove("hidden");
                    area_o.classList.remove("hidden");
                    antig.classList.remove("hidden");

                    area_t.classList.add("hidden");
                    break;

                case "6":
                    area_t.classList.remove("hidden");
                    area_c.classList.remove("hidden");
                    antig.classList.remove("hidden");

                    area_o.classList.add("hidden");


                    break;

                default:
                    break;
            }

        });


        sub_tipo_prop.addEventListener("change", function() {
            switch (sub_tipo_prop.value) {
                case "13":
                    area_c.classList.remove("hidden");
                    area_o.classList.remove("hidden");
                    antig.classList.remove("hidden");

                    area_t.classList.add("hidden");
                    break;
                case "14":
                    area_c.classList.remove("hidden");
                    area_o.classList.remove("hidden");
                    antig.classList.remove("hidden");

                    area_t.classList.add("hidden");
                    break;

                default:
                    break;
            }

        });

        function agregar_tabla() {
            // DISTRITO - DIRECCION
            var _dir = document.getElementById("direccion_").value;
            var _dir_dist = _dir.split(", ");
            // TIPO
            var _tip = document.getElementById("tipo_prop");
            var select_tip = _tip.selectedOptions[0];
            var texto_tip = select_tip.textContent
            // PROMOCIÓN
            var _pro = document.getElementById("tipo_prom");
            var select_pro = _pro.selectedOptions[0];
            var texto_pro = select_pro.textContent;
            // AT
            var _at = document.getElementById("a_t").value;
            // AC
            var _ac = document.getElementById("a_c").value;
            // AO
            var _ao = document.getElementById("a_o").value;

            document.getElementById("at__").innerHTML = _at;
            document.getElementById("ac__").innerHTML = _ac;
            document.getElementById("ao__").innerHTML = _ao;
            var bla;
            if (_dir_dist[2] === undefined) {
                bla = "";
            } else {
                bla = ", " + _dir_dist[2];
            }
            document.getElementById("dir__dist").innerHTML = _dir_dist[1] + bla;
            document.getElementById("dir__").innerHTML = _dir_dist[0];
            document.getElementById("tip__").innerHTML = texto_tip;
            document.getElementById("pro__").innerHTML = texto_pro;

            // console.log(_at, _ac, _ao);
            console.log(_dir_dist);
            console.log(_dir_dist[0]);
            console.log(_dir_dist[1]);
            console.log(_dir_dist[2]);
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#tipo_zoni_l').on('keyup', function() {
                var letra = $(this).val();
                var opcionesZoni = $('.opciones_zoni_t');

                if (letra.length > 0) {
                    $.ajax({
                        url: '../Controller/getZonas.php',
                        method: 'POST',
                        data: {
                            tipo_zoni_l: letra
                        },
                        success: function(response) {
                            console.log(response);
                            opcionesZoni.html(response);
                        }
                    });
                } else {
                    opcionesZoni.empty();
                }
            });
        });

        $(document).ready(function() {
            $('#tipo_zoni_ofi').on('keyup', function() {
                var letra = $(this).val();
                var opcionesZoni = $('.opciones_zoni_ofi');

                if (letra.length > 0) {
                    $.ajax({
                        url: '../Controller/getZonas.php',
                        method: 'POST',
                        data: {
                            tipo_zoni_l: letra
                        },
                        success: function(response) {
                            console.log(response);
                            opcionesZoni.html(response);
                        }
                    });
                } else {
                    opcionesZoni.empty();
                }
            });
        });
    </script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })
        })
        // BS-Stepper Init
        // document.addEventListener('DOMContentLoaded', function() {
        //     window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        // })

        // // DropzoneJS Demo Code Start
        // Dropzone.autoDiscover = false

        // // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        // var previewNode = document.querySelector("#template");
        // // previewNode.id = "";
        // var previewTemplate = previewNode.parentNode.innerHTML
        // previewNode.parentNode.removeChild(previewNode)

        // var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        //     url: "/target-url", // Set the url
        //     thumbnailWidth: 80,
        //     thumbnailHeight: 80,
        //     parallelUploads: 20,
        //     previewTemplate: previewTemplate,
        //     autoQueue: false, // Make sure the files aren't queued until manually added
        //     previewsContainer: "#previews", // Define the container to display the previews
        //     clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        // })

        // myDropzone.on("addedfile", function(file) {
        //     // Hookup the start button
        //     file.previewElement.querySelector(".start").onclick = function() {
        //         myDropzone.enqueueFile(file)
        //     }
        // })

        // // Update the total progress bar
        // myDropzone.on("totaluploadprogress", function(progress) {
        //     document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        // })

        // myDropzone.on("sending", function(file) {
        //     // Show the total progress bar when upload starts
        //     document.querySelector("#total-progress").style.opacity = "1"
        //     // And disable the start button
        //     file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        // })

        // // Hide the total progress bar when nothing's uploading anymore
        // myDropzone.on("queuecomplete", function(progress) {
        //     document.querySelector("#total-progress").style.opacity = "0"
        // })

        // // Setup the buttons for all transfers
        // // The "add files" button doesn't need to be setup because the config
        // // `clickable` has already been specified.
        // document.querySelector("#actions .start").onclick = function() {
        //     myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        // }
        // document.querySelector("#actions .cancel").onclick = function() {
        //     myDropzone.removeAllFiles(true)
        // }
        // // DropzoneJS Demo Code End
    </script>

    <script src="../Vista/assets/selection_types.js"></script>
</body>

</html>