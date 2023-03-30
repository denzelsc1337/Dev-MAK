<?php require_once('../config/security.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>

<body class="hold-transition sidebar-mini  sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed">
    <?php include 'nav_bar_moduls.php' ?>
    <!-- ./wrapper -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Collapsed Sidebar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Layout</a></li>
                            <li class="breadcrumb-item active">Collapsed Sidebar</li>
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
                            <h3 class="card-title">bs-stepper</h3>
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
                                    <!--seleccion de inmueble--><!--seleccion de inmueble-->

                                    <div id="logins-part" class="" role="tabpanel" aria-labelledby="logins-part-trigger">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="card card-warning">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <label>Ingrese Direccion</label>
                                                                    <input type="text" class="form-control" placeholder="Ingrese una direccion">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-group">
                                                                    <label>Tipo Inmueble</label>
                                                                    <select id="tipo_prop" class="form-control">
                                                                        <option disabled selected="selected">Seleccione un tipo</option>
                                                                        <option value="casa.php">Casa</option>
                                                                        <option value="departamento.php">Departamento</option>
                                                                        <option value="terreno.php">Terreno</option>
                                                                        <option value="#">Oficina</option>
                                                                        <option value="#">Local Comercial - Exclusivo</option>
                                                                        <option value="#">Local Industrial</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <!-- textarea -->
                                                                <div class="form-group">
                                                                    <label>Subtipo Inmueble</label>
                                                                    <select id="sub_tipo_prop" class="form-control">
                                                                        <option disabled selected="selected">Seleccione un tipo de inmueble</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- <script type="text/javascript">
                                                            function updateSecondSelect() {
                                                                const tipo_prop_ = document.getElementById("tipo_prop");
                                                                const sub_tipo_prop_ = document.getElementById("sub_tipo_prop");

                                                                // Obtener el valor seleccionado del primer select
                                                                const tipo_prop_value_selected = tipo_prop_.value;

                                                                // Obtener el valor seleccionado del segundo select
                                                                const sub_tipo_prop_value_selected = sub_tipo_prop_.value;

                                                                // Limpiar las opciones del segundo select
                                                                sub_tipo_prop_.innerHTML = "";

                                                                // Agregar nuevas opciones al segundo select
                                                                if (tipo_prop_value_selected === "casa.php") {
                                                                    // Agregar opciones para la selección 1
                                                                    const option1 = document.createElement("option");
                                                                    option1.value = "1-1";
                                                                    option1.text = "Vivienda";
                                                                    sub_tipo_prop_.add(option1);

                                                                    const option2 = document.createElement("option");
                                                                    option2.value = "1-2";
                                                                    option2.text = "De campo";
                                                                    sub_tipo_prop_.add(option2);

                                                                } else if (tipo_prop_value_selected === "departamento.php") {
                                                                    // Agregar opciones para la selección 1
                                                                    const option1 = document.createElement("option");
                                                                    option1.value = "1-1";
                                                                    option1.text = "Departamento Oficina";
                                                                    sub_tipo_prop_.add(option1);

                                                                    const option2 = document.createElement("option");
                                                                    option2.value = "1-2";
                                                                    option2.text = "Departamento Vivienda";
                                                                    sub_tipo_prop_.add(option2);

                                                                    const option3 = document.createElement("option");
                                                                    option3.value = "1-3";
                                                                    option3.text = "Duplex";
                                                                    sub_tipo_prop_.add(option3);

                                                                } else if (tipo_prop_value_selected === "terreno.php") {
                                                                    // Agregar opciones para la selección 1
                                                                    const option1 = document.createElement("option");
                                                                    option1.value = "1-1";
                                                                    option1.text = "Residencial";
                                                                    sub_tipo_prop_.add(option1);

                                                                }
                                                            }
                                                            const tipo_prop_ = document.getElementById("tipo_prop");
                                                            tipo_prop_.addEventListener("change", updateSecondSelect);
                                                        </script> -->

                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <!-- textarea -->
                                                                <div class="form-group">
                                                                    <label>Promocion</label>
                                                                    <select class="form-control">
                                                                        <option>option 1</option>
                                                                        <option>option 2</option>
                                                                        <option>option 3</option>
                                                                        <option>option 4</option>
                                                                        <option>option 5</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="card card-primary">
                                                    <div class="card-body">
                                                        <strong>Mapa</strong>
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15607.47206823551!2d-77.04493215!3d-12.0526008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1678375977472!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="card card-primary">
                                                    <div class="card-body">
                                                        <!-- Date dd/mm/yyyy -->
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <label>Area de Terreno</label>
                                                                    <input type="text" class="form-control" placeholder="00.00m2">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <label>Area Construida</label>
                                                                    <input type="text" class="form-control" placeholder="00.00m2">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <label>Area Ocupada</label>
                                                                    <input type="text" class="form-control" placeholder="00.00m2">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
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
                                        <button id="go_to" class="btn btn-block btn-info btn-lg" onclick="">Continuar</button>
                                    </div>

                                    <div id="information-part" class="" role="tabpanel" aria-labelledby="information-part-trigger">
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
                                                                            <select class="form-control radius-right" id="">
                                                                                <option selected disabled>Seleccione</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text" title="Info..."><i>i</i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="form-group row">
                                                                    <div class="input-group">
                                                                        <label>Localización:</label>
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <select class="form-control radius-right" id="">
                                                                                <option selected disabled>Seleccione</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>

                                                        <br>

                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-4 col-form-label">Frente:</label>
                                                                    <div class="form-group row" style="gap: 100px;">
                                                                        <div class="custom-control custom-radio">
                                                                            <input class="down custom-control-input" type="radio" id="parque" name="radio">
                                                                            <label for="parque" class="down custom-control-label">Parque</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input class="down custom-control-input" type="radio" id="mar" name="radio">
                                                                            <label for="mar" class="down custom-control-label">Mar</label>
                                                                        </div>
                                                                        <div class="custom-control custom-radio">
                                                                            <input class="down custom-control-input" type="radio" id="ninguno" name="radio" checked>
                                                                            <label for="ninguno" class="down custom-control-label">Ninguno</label>
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
                                                                            <input class="form-control" type="number">
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
                                                                            <input class="form-control" type="number">
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
                                                                        <label class="col-form-label">Dormitorio(s) con baño:</label>
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
                                                                        <label>Baño(s) visita:</label>
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
                                                                        <label>Cuarto(s) de servicio:</label>
                                                                        <div class="section-input col-sm-10">
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
                                                            <div class="grid-box">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>Baño(s) completo(s):</label>
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
                                                                        <div class="custom-control custom-radio">
                                                                            <input class="down custom-control-input" type="radio" id="piscina" name="radio1">
                                                                            <label for="piscina" class="down custom-control-label">Piscina:</label>
                                                                        </div>
                                                                        <!-- <div class="form-check">
                                                                            <label for="piscina" class="form-check-label">Piscina:</label>
                                                                            <input class="form-check-input" type="radio" id="piscina" name="radio1" checked="">
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                        <button id="go_to" class="btn btn-block btn-info btn-lg" onclick="stepper.next()">Continuar</button> -->
                                        <!-- <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="button" class="btn btn-info btn-lg">Continuar</button>
                                        </div> -->
                                        <div class="d-grid gap-2 col-2 mx-auto">
                                            <button type="button" class="btn btn-info btn-lg btn-block">Continuar</button>
                                        </div>

                                    </div>

                                    <!-- <button id="go_to" class="btn btn-block btn-info btn-lg" onclick="stepper.next()">Continuar</button> -->





                                    <!-- <script type="text/javascript">
                                        // Obtener el elemento select y el formulario
                                        const select = document.getElementById('tipo_prop');
                                        const button = document.getElementById('go_to');

                                        // Agregar un event listener al botón para detectar clics
                                        button.addEventListener('click', () => {
                                            // Obtener el valor seleccionado
                                            const selectedValue = select.value;

                                            // Si se selecciona la opción por defecto, no hacer nada
                                            if (selectedValue === '') {
                                                return;
                                            }

                                            // Cambiar la ubicación actual de la ventana del navegador para redirigir a la página seleccionada
                                            window.location.href = selectedValue;
                                            console.log("La dirección se ha cambiado a: " + selectedValue);
                                        });
                                    </script> -->


                                    <div id="" class="" role="tabpanel" aria-labelledby="">
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
                                                                <div>
                                                                    <br>
                                                                    <div class="custom-control custom-radio">
                                                                        <input class=" custom-control-input" type="radio" id="ascensor" name="">
                                                                        <label for="ascensor" class=" custom-control-label">Ascensor:</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio">
                                                                        <input class=" custom-control-input" type="radio" id="ascensor_directo" name="">
                                                                        <label for="ascensor_directo" class=" custom-control-label">Ascensor directo:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid-box">
                                                                <div>
                                                                    <br>
                                                                    <div class="custom-control custom-radio">
                                                                        <input class=" custom-control-input" type="radio" id="deposito" name="">
                                                                        <label for="deposito" class=" custom-control-label">Depósito:</label>
                                                                    </div>
                                                                    <div class="custom-control custom-radio">
                                                                        <input class=" custom-control-input" type="radio" id="piscina_propia" name="">
                                                                        <label for="piscina_propia" class=" custom-control-label">Piscina propia:</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                        <button id="go_to" class="btn btn-block btn-info btn-lg" onclick="stepper.next()">Continuar</button> -->
                                        <!-- <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="button" class="btn btn-info btn-lg">Continuar</button>
                                        </div> -->
                                        <div class="d-grid gap-2 col-2 mx-auto">
                                            <button type="button" class="btn btn-info btn-lg btn-block">Continuar</button>
                                        </div>

                                    </div>




                                    <div id="" class="" role="tabpanel" aria-labelledby="">
                                        <h1>Terreno - Residencial</h1>
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
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Piso del depa:</label>
                                                                        <input class="form-control col-sm-10" type="number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid-box">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Dormito:</label>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid-box">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Cuarto(s) de servicio:</label>
                                                                        <input class="form-control col-sm-10" type="number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid-box">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Baño(s) de servicio:</label>
                                                                        <input class="form-control col-sm-10" type="number">
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
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Dormitorio(s) con baño:</label>
                                                                        <input class="form-control col-sm-10" type="number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid-box">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Baño(s) visita:</label>
                                                                        <input class="form-control col-sm-10" type="number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid-box">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Cuarto(s) de servicio:</label>
                                                                        <input class="form-control col-sm-10" type="number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid-box">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Baño(s) de servicio:</label>
                                                                        <input class="form-control col-sm-10" type="number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid-box">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Baño(s) completo(s):</label>
                                                                        <input class="form-control col-sm-10" type="number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="grid-box">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                        <button id="go_to" class="btn btn-block btn-info btn-lg" onclick="stepper.next()">Continuar</button> -->
                                        <!-- <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="button" class="btn btn-info btn-lg">Continuar</button>
                                        </div> -->
                                        <div class="d-grid gap-2 col-2 mx-auto">
                                            <button type="button" class="btn btn-info btn-lg btn-block">Continuar</button>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- END SECTION -->
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>


    <!-- REQUIRED SCRIPTS -->
    <script src="../AdminLTE-master/plugins/bs-stepper/js/stepper.js"></script>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- BS-Stepper -->
    <script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page specific script -->
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
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template");
        // previewNode.id = "";
        // var previewTemplate = previewNode.parentNode.innerHTML
        // previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
</body>

</html>