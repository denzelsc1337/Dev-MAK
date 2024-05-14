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

    <!-- daterange picker -->
    <!-- <link rel="stylesheet" href="Vista/plugins/daterangepicker/daterangepicker.css"> -->
    <!-- iCheck for checkboxes and radio inputs -->
    <!-- <link rel="stylesheet" href="Vista/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
    <!-- Bootstrap Color Picker -->
    <!-- <link rel="stylesheet" href="Vista/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <link rel="stylesheet" href="Vista/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
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

    <style>
        html::-webkit-scrollbar {
            width: 1px;
        }
    </style>
</head>

<body class="mak content">

    <!-- <div class="">
        <span class="mak-control"><b>ID de la propiedad: </b> </span>
    </div>
    <br>

    <div class="content-filter justify-between">
        <div class="filter-item d-flex">
            <div class="mak-control mak-primary">Sin anunciar propiedad</div>
            <div class="mak-control">Anunciar propiedad</div>
            <div class="mak-control">Aparecer en búsqueda</div>
        </div>
        <div class="filter-item d-flex">
            <div class="mak-control mak-primary">Guardar cambios</div>
            <div class="mak-control">Limpiar todos los filtros</div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
            <div>
                <span class="mak-control"><b>ID de la propiedad: </b> </span>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
            <div class="content-filter justify-between">
                <div class="filter-item d-flex">
                    <div class="tab mak-control mak-primary btn_button" data-target="sinAnunciar">Sin anunciar propiedad</div>
                    <div class="tab mak-control btn_button" data-target="anunciar">Anunciar propiedad</div>
                    <div class="tab mak-control btn_button" data-target="aparecer">Aparecer en búsqueda</div>
                </div>
                <div class="filter-item d-flex">
                    <div class="mak-control mak-primary btn_button">Guardar cambios</div>
                    <div class="mak-control mak-tertiary btn_button"><i class="fa-solid fa-trash"></i>&nbsp;Limpiar todos los filtros</div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <!-- PROPIEDAD SIN ANUNCIAR -->
        <div id="sinAnunciar" class="tab-content active">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 d-flex">
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 pl-0">
                    <div class="mak-bdr radius-plus">
                        <div class="card-body">
                            <div class="card-head justify-between mb-3">
                                <div class="mak-control d-flex">
                                    <img src="../Vista/images/box.svg" alt="">
                                    Información de la propiedad
                                </div>
                                <div class="mak-control mak-tertiary btn_button">
                                    <i class="fa-solid fa-trash"></i>&nbsp;Limpiar filtro
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <span>Email address</span>
                                    <textarea id="" name="" class="mak-control" oninput="autoResize(this)"></textarea>
                                </div>
                                <div class="">
                                    <span>Descripción</span>
                                    <textarea id="" name="" class="mak-control" rows="15" oninput="autoResize(this)"></textarea>
                                </div>
                                <div class="">
                                    <span>Modalidad</span>
                                    <ul class="nav nav-tabs">
                                        <li class="tp-md mak-control btn_button" data-target="1">Venta</li>
                                        <li class="tp-md mak-control btn_button" data-target="2">Alquiler</li>
                                        <li class="tp-md mak-control btn_button" data-target="3">Proyecto</li>
                                    </ul>
                                    <input id="tp-md" name="tp-md" type="hidden">
                                </div>
                                <div class="mt-2">
                                    <span>Tipo de inmueble</span>
                                    <?php
                                    require_once('../Controller/controladorListar.php');
                                    ?>
                                    <select id="tipo_prop" name="tipo_prop" class="mak-control w100" value="-1"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 pr-0">
                    <div class="mak-bdr radius-plus">
                        <div class="card-body">
                            <div class="card-head justify-between mb-3">
                                <div class="mak-control d-flex">
                                    <img src="../Vista/images/map.svg" alt="">
                                    Dirección
                                </div>
                                <div class="mak-control mak-tertiary btn_button">
                                    <i class="fa-solid fa-trash"></i>&nbsp;Limpiar filtro
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="col-md-12 d-flex"> -->
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-7 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-5 mb-2">
                                    <span>Email address</span>
                                    <select name="" id="" class="mak-control w100">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <!-- <div id="map-dir"></div> -->
                                    <!-- <iframe src="https://www.google.com/maps" frameborder="0"></iframe> -->
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 pr-0">
                    <div class="mak-bdr radius-plus">
                        <div class="card-body">
                            <div class="card-head justify-between mb-3">
                                <div class="mak-control d-flex">
                                    <img src="../Vista/images/map.svg" alt="">
                                    Dirección
                                </div>
                                <div class="mak-control mak-tertiary btn_button">
                                    <i class="fa-solid fa-trash"></i>&nbsp;Limpiar filtro
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="col-md-12 d-flex"> -->
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-7 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-5 mb-2">
                                    <span>Email address</span>
                                    <select name="" id="" class="mak-control w100">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <!-- <div id="map-dir"></div> -->
                                    <!-- <iframe src="https://www.google.com/maps" frameborder="0"></iframe> -->
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 pr-0">
                    <div class="mak-bdr radius-plus">
                        <div class="card-body">
                            <div class="card-head justify-between mb-3">
                                <div class="mak-control d-flex">
                                    <img src="../Vista/images/map.svg" alt="">
                                    Dirección
                                </div>
                                <div class="mak-control mak-tertiary btn_button">
                                    <i class="fa-solid fa-trash"></i>&nbsp;Limpiar filtro
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="col-md-12 d-flex"> -->
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-7 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-5 mb-2">
                                    <span>Email address</span>
                                    <select name="" id="" class="mak-control w100">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <!-- <div id="map-dir"></div> -->
                                    <!-- <iframe src="https://www.google.com/maps" frameborder="0"></iframe> -->
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 pr-0">
                    <div class="mak-bdr radius-plus">
                        <div class="card-body">
                            <div class="card-head justify-between mb-3">
                                <div class="mak-control d-flex">
                                    <img src="../Vista/images/map.svg" alt="">
                                    Dirección
                                </div>
                                <div class="mak-control mak-tertiary btn_button">
                                    <i class="fa-solid fa-trash"></i>&nbsp;Limpiar filtro
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="col-md-12 d-flex"> -->
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-7 mb-2">
                                    <span>Email address</span>
                                    <input type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="col-md-5 mb-2">
                                    <span>Email address</span>
                                    <select name="" id="" class="mak-control w100">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <!-- <div id="map-dir"></div> -->
                                    <!-- <iframe src="https://www.google.com/maps" frameborder="0"></iframe> -->
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PROPIEDAD SIN ANUNCIAR -->
        <!-- ANUNCIAR PROPIEDAD  -->
        <div id="anunciar" class="tab-content">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 d-flex">
                hola 1
            </div>
        </div>
        <!-- ANUNCIAR PROPIEDAD  -->
        <!-- BUSCAR PROPIEDAD -->
        <div id="aparecer" class="tab-content">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 d-flex">
                hola 2
            </div>
        </div>
        <!-- BUSCAR PROPIEDAD -->
    </div>


    <script src="./../Vista/assets/add_property.js"></script>
    <script src="../Vista/assets/selection_types.js"></script>
</body>