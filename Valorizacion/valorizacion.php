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

    <?php include '../Vista/nav_bar_moduls.php'?>
    <!-- ./wrapper -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Seleccion de datos:</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Seleccion</a></li>
                            <li class="breadcrumb-item active">Registro</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Ingreso de Datos:</h3>
                        </div>

                        <!-- SECTION -->
                        <div class="card-body p-0">
                            <div class="bs-stepper">
                                <div class="bs-stepper-header" role="tablist">
                                    <!-- your steps here -->
                                    <div class="step" data-target="#logins-part">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">Seleccion de tipo</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>

                                    <div class="step" data-target="#information-part">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">TIpo de Inmueble</span>
                                        </button>
                                    </div>

                                    <div class="step" data-target="#information-part">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                            <span class="bs-stepper-circle">3</span>
                                            <span class="bs-stepper-label">TIpo de Inmueble</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- your steps here -->

                                <div class="bs-stepper-content">
                                    <form  method="POST" id="form_valor">
                                        <div class="form-content">

                                            <!-- SELECCION TIPO -->
                                            <div id="0" class="section col-md-12 movPag show" role="tabpanel" aria-labelledby="logins-part-trigger" style="display: block;">

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="card card-warning">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        <!-- text input -->
                                                                        <div class="form-group">
                                                                            <label>Ingrese Direccion</label>
                                                                            <input type="text" class="form-control" placeholder="Ingrese una direccion" id="direccion_" name="direccion_" 
                                                                            onkeydown="buscarDireccion(event)" autocomplete="off">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        <div class="form-group">
                                                                            <label>Tipo Inmueble</label>
                                                                            <?php
                                                                            require_once('../Controller/controladorListar.php');
                                                                            ?>
                                                                            <select id="tipo_prop" name="tipo_prop" class="form-control">
                                                                                <option disabled selected="selected">Seleccione un tipo</option>
                                                                               <!--  <option value="pantalla-C_V">Casa</option>
                                                                                <option value="pantalla-D_D">Departamento</option>
                                                                                <option value="pantalla-T_R">Terreno</option>
                                                                                <option value="pantalla-O">Oficina</option>
                                                                                <option value="pantalla-LC_E">Local Comercial - Exclusivo</option>
                                                                                <option value="pantalla-LI">Local Industrial</option> -->

                                                                        <?php foreach ($selector_types_props as $cod_type): ?>
                                                                            <option value="<?php echo $cod_type[0]; ?>"><?php echo $cod_type[1]; ?></option>
                                                                        <?php endforeach ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        <!-- textarea -->
                                                                        <div class="form-group">
                                                                            <label>Subtipo Inmueble</label>
                                                                            <select id="sub_tipo_prop" name="sub_tipo_prop" class="form-control">
                                                                                <option disabled selected="selected">Seleccione un tipo de inmueble</option>
                                                                                <option value="1">sub_tipo_test</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        <!-- textarea -->
                                                                        <div class="form-group">
                                                                            <label>Promocion</label>
                                                                            <select class="form-control" id="tipo_prom" name="tipo_prom">
                                                                            <?php foreach ($selector_types_prom as $cod_type_): ?>
                                                                            <option value="<?php echo $cod_type_[0]; ?>"><?php echo $cod_type_[1]; ?></option>
                                                                            <?php endforeach ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="card card-primary">
                                                            <div id="mapa" style="height: 400px;"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="card card-primary">
                                                            <div class="card-body">
                                                                <!-- Date dd/mm/yyyy -->
                                                                <div class="row" id="a__t">
                                                                    <div class="col-sm-8">
                                                                        <!-- text input -->
                                                                        <div class="form-group">
                                                                            <label>Area de Terreno</label>
                                                                            <input type="text" class="form-control" placeholder="00.00m2" id="a_t">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row" id="a__c">
                                                                    <div class="col-sm-8">
                                                                        <!-- text input -->
                                                                        <div class="form-group">
                                                                            <label>Area Construida</label>
                                                                            <input type="text" class="form-control" placeholder="00.00m2">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row" id="a__o">
                                                                    <div class="col-sm-8">
                                                                        <!-- text input -->
                                                                        <div class="form-group">
                                                                            <label>Area Ocupada</label>
                                                                            <input type="text" class="form-control" placeholder="00.00m2">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row" id="antig_">
                                                                    <div class="col-sm-8">
                                                                        <!-- text input -->
                                                                        <div class="form-group">
                                                                            <label>Antiguedad</label>
                                                                            <input type="text" class="form-control" placeholder="0 años">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="d-grid gap-2 col-3 mx-auto form-flex">
                                                    <div type="button" class="btn btn-info btn-lg col-md-12 nextPag" 
                                                    onclick="pasarValores()">Continuar</div>
                                                </div>
                                            </div>
                                            <!-- SELECCION TIPO -->
                                            <script>
                                            function pasarValores() {
                                              // Obtener los elementos del formulario
                                              var direccion = document.getElementById("direccion_");
                                              var direccion_casa = document.getElementById("direcc_casa");
                                              
                                              // Asignar el valor del primer input al segundo
                                              direccion_casa.value = direccion.value;
                                            }
                                            </script>
                                            <!-- CASA - VIVIENDA -->
                                            <div id="1" class="section col-md-12" role="tabpanel" aria-labelledby="information-part-trigger">
                                                <h1>Casa - Vivienda</h1>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card card-warning">
                                                            <div class="card-body">

                                                                <br>

                                                                <div class="row">
                                                                    <div class="col-sm-11">
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Localización:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                    <input type="text" id="direcc_casa" name="direcc_casa"
                                                                                    value="">
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text" title="Info..."><i>i</i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <br>

                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">Frente:</label>
                                                                            <div class="form-group row" style="gap: 100px;">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox" id="c_v_frente" name="c_v_frente" value="Parque" checked >
                                                                                    <label for="c_v_frente" class="down custom-control-label">Parque</label>
                                                                                </div>

                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox" id="c_v_frente" name="c_v_frente" value="Mar" checked >
                                                                                    <label for="c_v_frente" class="down custom-control-label">Mar</label>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <br>

                                                                <div class="form-flex">
                                                                    <div class="row">
                                                                        <div class="col-sm-10">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label">Dormitorio(s):</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/7118/7118098.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number" id="cant_dorm_casa" name="cant_dorm_casa">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-10">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label">Baño(s):</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/456/456365.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number"
                                                                                    id="cant_ban_casa" name="cant_ban_casa">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-10">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label">Cochera(s):</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input"><i class="fa-solid fa-warehouse"></i></span>
                                                                                    <input class="form-control" type="number"
                                                                                    id="cant_coch_casa" name="cant_coch_casa">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card card-primary">
                                                            <div class="card-body">
                                                                <div class="body-grid">
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label">Dormitorio(s) con baño:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/5697/5697404.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number"
                                                                                    id="cant_dorm_b_casa" name="cant_dorm_b_casa">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Baño(s) visita:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/456/456365.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number"
                                                                                    id="cant_dorm_b_v_casa" name="cant_dorm_b_v_casa">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Cuarto(s) de servicio:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <input class="form-control" type="number"
                                                                                    id="cant_cuart_s_casa" 
                                                                                    name="cant_cuart_s_casa">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Baño(s) de servicio:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/456/456365.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number"
                                                                                     id="cant_ban_s_casa" 
                                                                                     name="cant_ban_s_casa">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Baño(s) completo(s):</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/456/456365.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number"
                                                                                     id="cant_ban_com_casa" 
                                                                                     name="cant_ban_com_casa">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input class="down custom-control-input" type="checkbox" id="piscina_casa" name="piscina_casa">
                                                                                    <label for="piscina_casa" class="down custom-control-label">Piscina:</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="d-grid gap-2 col-8 mx-auto form-flex">
                                                    <button type="button" class="btn btn-info btn-lg col-md-4 backPag">Retroceder</button>
                                                    <button type="button" class="btn btn-info btn-lg col-md-4 sigPag">Continuar</button>
                                                </div>

                                            </div>
                                            <!-- CASA - VIVIENDA -->


                                            <!-- DEPARTAMENTO - DUPLEX -->
                                            <div id="2" class="section col-md-12" role="tabpanel" aria-labelledby="">
                                                <h1>Departamento - Duplex</h1>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card card-warning">
                                                            <div class="card-body">

                                                                <br>

                                                                <div class="row">
                                                                    <div class="col-sm-11">
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Localización:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text" title="Info..."><i>i</i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Acabado:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                                    </span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text" title="Info..."><i>i</i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Vista:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/3017/3017956.png" alt="">
                                                                                    </span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="body-grid">
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Piso del depa:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/6080/6080750.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Dormitorio(s):</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/5697/5697404.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Baño(s):</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/456/456365.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Cochera(s):</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input"><i class="fa-solid fa-warehouse"></i></span>
                                                                                    <input class="form-control" type="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card card-primary">
                                                            <div class="card-body">
                                                                <div class="body-grid">
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Dormitorio(s) con baño:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/5697/5697404.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Baño(s) de servicio:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/456/456365.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box w-all">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Cuarto(s) de servicio:</label>
                                                                                <div class="section-input col-sm-4">
                                                                                    <input class="form-control" type="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <br>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="ascensor" name="">
                                                                                <label for="ascensor" class="right custom-control-label">Ascensor:</label>
                                                                            </div>
                                                                            <br>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="ascensor_directo" name="">
                                                                                <label for="ascensor_directo" class="right custom-control-label">Ascensor directo:</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <br>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="deposito" name="">
                                                                                <label for="deposito" class="right custom-control-label">Depósito:</label>
                                                                            </div>
                                                                            <br>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="piscina_propia" name="">
                                                                                <label for="piscina_propia" class="right custom-control-label">Piscina propia:</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="d-grid gap-2 col-8 mx-auto form-flex">
                                                    <div type="button" class="btn btn-info btn-lg col-md-4 backPag">Retroceder</div>
                                                    <div type="button" class="btn btn-info btn-lg col-md-4 sigPag">Continuar asd</div>
                                                </div>

                                            </div>
                                            <!-- DEPARTAMENTO - DUPLEX -->


                                            <!-- TERRENO RESIDENCIAL -->
                                            <div id="3" class="section col-md-12" role="tabpanel" aria-labelledby="">
                                                <h1>Terreno - Residencial</h1>
                                                <div class="row">
                                                    <div class="col-md-6 mx-auto">
                                                        <div class="card card-warning">
                                                            <div class="card-body">

                                                                <br>

                                                                <div class="row">
                                                                    <div class="col-sm-11">
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Zonificación:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text" title="Info..."><i>i</i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Tipo Suelo:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                                    </span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text" title="Info..."><i>i</i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Parámetros:</label>
                                                                                <div class="section-input col-sm-4">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/3017/3017956.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control radius-right" type="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-flex">
                                                                    <div class="row">
                                                                        <div class="col-sm-10">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label">Frente:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img class="rotate-180" src="https://cdn-icons-png.flaticon.com/512/8264/8264013.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number" step="00.01" value="00.00">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-10">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label">Izquierdo:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img class="rotate-270" src="https://cdn-icons-png.flaticon.com/512/8264/8264013.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number" step="00.01" value="00.00">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-10">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label">Fondo:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/8264/8264013.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number" step="00.01" value="00.00">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-10">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label">Derecho:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img class="rotate-90" src="https://cdn-icons-png.flaticon.com/512/8264/8264013.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number" step="00.01" value="00.00">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-grid gap-2 col-8 mx-auto form-flex">
                                                    <div type="button" class="btn btn-info btn-lg col-md-4 backPag">Retroceder</div>
                                                    <div type="button" class="btn btn-info btn-lg col-md-4 sigPag">Continuar</div>
                                                </div>

                                            </div>
                                            <!-- TERRENO RESIDENCIAL -->


                                            <!-- OFICINA -->
                                            <div id="4" class="section col-md-12" role="tabpanel" aria-labelledby="">
                                                <h1>Oficina</h1>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card card-warning">
                                                            <div class="card-body">

                                                                <br>

                                                                <div class="row">
                                                                    <div class="col-sm-11">
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Localización:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text" title="Info..."><i>i</i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Acabado:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                                    </span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text" title="Info..."><i>i</i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Zonificación:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/3017/3017956.png" alt="">
                                                                                    </span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Vista:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/3017/3017956.png" alt="">
                                                                                    </span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
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
                                                        <div class="card card-primary">
                                                            <div class="card-body">
                                                                <div class="body-grid">
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Piso de oficina:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/6080/6080750.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Cochera(s):</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input"><i class="fa-solid fa-warehouse"></i></span>
                                                                                    <input class="form-control" type="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <br>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="deposito" name="">
                                                                                <label for="deposito" class="right custom-control-label">Ascensor:</label>
                                                                            </div>
                                                                            <br>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="piscina_propia" name="">
                                                                                <label for="piscina_propia" class="right custom-control-label">Aire acondicionado:</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="d-grid gap-2 col-8 mx-auto form-flex">
                                                    <div type="button" class="btn btn-info btn-lg col-md-4 backPag">Retroceder</div>
                                                    <div type="button" class="btn btn-info btn-lg col-md-4 sigPag">Continuar</div>
                                                </div>

                                            </div>
                                            <!-- OFICINA -->


                                            <!-- LOCAL COMERCIAL - EXCLUSIVO -->
                                            <div id="5" class="section col-md-12" role="tabpanel" aria-labelledby="">
                                                <h1>Local comercial - Exclusivo</h1>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card card-warning">
                                                            <div class="card-body">

                                                                <br>

                                                                <div class="row">
                                                                    <div class="col-sm-11">
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Localización:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text" title="Info..."><i>i</i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Acabado:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                                    </span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text" title="Info..."><i>i</i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Zonificación:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="body-grid">
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label">Frente:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img class="rotate-180" src="https://cdn-icons-png.flaticon.com/512/8264/8264013.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number" step="00.01" value="00.00">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Cochera(s):</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input"><i class="fa-solid fa-warehouse"></i></span>
                                                                                    <input class="form-control" type="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="card card-primary">
                                                            <div class="card-body">
                                                                <div class="body-grid">
                                                                    <div class="grid-box w-all">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>Piso del local:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/6080/6080750.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <br>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="ascensor" name="">
                                                                                <label for="ascensor" class="right custom-control-label">Ascensor:</label>
                                                                            </div>
                                                                            <br>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="right custom-control-input" type="checkbox" id="ascensor_directo" name="">
                                                                                <label for="ascensor_directo" class="right custom-control-label">Aire acondicionado:</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="d-grid gap-2 col-8 mx-auto form-flex">
                                                    <div type="button" class="btn btn-info btn-lg col-md-4 backPag">Retroceder</div>
                                                    <div type="button" class="btn btn-info btn-lg col-md-4 sigPag">Continuar</div>
                                                </div>

                                            </div>
                                            <!-- LOCAL COMERCIAL - EXCLUSIVO -->


                                            <!-- LOCAL INDUSTRIAL -->
                                            <div id="6" class="section col-md-12" role="tabpanel" aria-labelledby="">
                                                <h1>Local industrial</h1>
                                                <div class="row">
                                                    <div class="col-md-6 mx-auto">
                                                        <div class="card card-warning">
                                                            <div class="card-body">

                                                                <br>

                                                                <div class="row">
                                                                    <div class="col-sm-11">
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Localización:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input"><i class="fa-solid fa-location-dot"></i></span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text" title="Info..."><i>i</i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Acabado:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                                    </span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Tipo suelo:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                                    </span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="input-group mb-3">
                                                                                <label class="col-sm-3 col-form-label">Acceso:</label>
                                                                                <div class="section-input col-sm-8">
                                                                                    <span class="icon-input">
                                                                                        <img src="https://cdn-icons-png.flaticon.com/512/1249/1249293.png" alt="">
                                                                                    </span>
                                                                                    <select class="form-control radius-right" id="">
                                                                                        <option selected disabled>Seleccione</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="body-grid">
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label">Frente:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input">
                                                                                        <img class="rotate-180" src="https://cdn-icons-png.flaticon.com/512/8264/8264013.png" alt="">
                                                                                    </span>
                                                                                    <input class="form-control" type="number" step="00.01" value="00.00">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid-box">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label class="col-form-label">Nave:</label>
                                                                                <div class="section-input col-sm-10">
                                                                                    <span class="icon-input"><i class="fa-solid fa-warehouse"></i></span>
                                                                                    <input class="form-control" type="number" step="0.01" min="0" value="00.00" style="--input-suffix: 'm2';">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-grid gap-2 col-8 mx-auto form-flex">
                                                    <div type="button" class="btn btn-info btn-lg col-md-4 backPag">Retroceder</div>
                                                    <div type="button" class="btn btn-info btn-lg col-md-4 sigPag">Continuar</div>
                                                </div>

                                            </div>
                                            <!-- LOCAL INDUSTRIAL -->


                                            <!-- RESUMEN DE SOLICITUD -->
                                            <div id="pantalla-RS" class="section col-md-12" role="tabpanel" aria-labelledby="logins-part-trigger">
                                                <h1>Resumen de solicitud</h1>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card card-warning">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <table class="table table-bordered">
                                                                        <thead class="table-dark">
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
                                                                                <td>MIRAFLORES</td>
                                                                                <td>AV AREQUIPA 4960</td>
                                                                                <td>CASA</td>
                                                                                <td>VENTA</td>
                                                                                <td>200.00</td>
                                                                                <td>100.00</td>
                                                                                <td>100.00</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <br><br>
                                                                <div class="col-md-6">
                                                                    <!-- <div class="card-body"> -->
                                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15607.47206823551!2d-77.04493215!3d-12.0526008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1678375977472!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                                    <!-- </div> -->
                                                                </div>

                                                                <div class="d-grid gap-2 col-3 mx-auto form-flex">
                                                                    <div type="button" class="btn btn-info btn-lg col-md-12 atrPag">Retroceder</div>
                                                                    <button type="submit" class="btn btn-info btn-lg col-md-12" id="btnValo_add" name="btnValo_add">Finalizar</button>
                                                                </div>

                                                            </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- RESUMEN DE SOLICITUD -->
                                        </div>
                                    
                                </div>

                            </div>
                        </div>
                        <!-- END SECTION -->
                        <!-- /.card-body-->
                        <div class="card-footer">
                            <strong>Copyright © 1986-2023 <a href="https://mak.com.pe/">MAK S.A.C</a></strong>
                            All rights reserved.
                        </div> 
                        
                        
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>


    <!-- REQUIRED SCRIPTS -->
    <script src="../Vista/js/stepper.js"></script>
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

    <!--GOOGLE MAPS TESTING-->
    <script type="text/javascript">
        function initmap() {
            const autocomplete = new google.maps.places.Autocomplete(document.getElementById('direccion_'));
            var map = new google.maps.Map(document.getElementById('mapa'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 18
            });
            var marker = new google.maps.Marker({
                position: {lat: -34.397, lng: 150.644},
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
        function buscarDireccion(event) {
          if (event.keyCode === 13) { // 13 es el código de la tecla "Enter"
            event.preventDefault();
            const direccion = document.getElementById('direccion_').value;
            const geocoder = new google.maps.Geocoder();
            geocoder.geocode({address: direccion}, function(results, status) {
              if (status === 'OK') {
                const latitud = results[0].geometry.location.lat();
                const longitud = results[0].geometry.location.lng();
                mostrarMapa(latitud, longitud);
              } else {
                alert('No se encontró la dirección');
              }
            });
          }
        }

        function mostrarMapa(latitud, longitud) {
          const mapa = new google.maps.Map(document.getElementById('mapa'), {
            zoom: 17,
            center: {lat: latitud, lng: longitud},
          });
          const marcador = new google.maps.Marker({
            position: {lat: latitud, lng: longitud},
            map: mapa,
          });
        }

        function initAutocomplete() {
          const input = document.getElementById('direccion_');
          const autocomplete = new google.maps.places.Autocomplete(input);
          autocomplete.addListener('place_changed', function() {
            const place = autocomplete.getPlace();
            if (!place.geometry) {
              alert("No se encontró la dirección");
              return;
            }
            const latitud = place.geometry.location.lat();
            const longitud = place.geometry.location.lng();
            mostrarMapa(latitud, longitud);
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
         #a__t, #a__c, #a__o, #antig_  {
          opacity: 1;
          height: 100%;
          margin-bottom: 3px;
          transition: opacity 0.3s ease-out, height 0.3s ease-out, margin-bottom 0.3s ease-out;
        }


        #a__t.hidden, #a__c.hidden, #a__o.hidden, #antig_.hidden  {
          opacity: 0;
          height: 0;
          margin-bottom: 0;
        }
    </style>

    <script type="text/javascript">
        
        const tipo_prop = document.getElementById("tipo_prop");
        const area_t = document.getElementById("a__t");
        const area_c = document.getElementById("a__c");
        const area_o = document.getElementById("a__o");
        const antig = document.getElementById("antig_");

        tipo_prop.addEventListener("change", function() {
            switch(tipo_prop.value){
            case "1":
                area_o.classList.add("hidden");
                area_t.classList.remove("hidden");
                area_c.classList.remove("hidden");
                antig.classList.remove("hidden");
            break;

            case "2":
              area_t.classList.add("hidden");
              area_c.classList.remove("hidden");
              area_o.classList.remove("hidden");
              antig.classList.remove("hidden");
              break;

            case "3":
              area_c.classList.add("hidden");
              area_o.classList.add("hidden");
              antig.classList.add("hidden");
              area_t.classList.remove("hidden");
              break;

            default:
              break;
            }
          
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

    
</body>

</html>