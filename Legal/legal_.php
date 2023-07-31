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
    <!-- Modal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>



    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->


</head>

<body class="hold-transition sidebar-mini  sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed" onload="initAutocomplete()">

    <div class="wrapper">

        <?php include '../Vista/nav_bar_moduls.php' ?>

        <div class="content-wrapper">

            <section class="content mak-forms legal">


                <?php include '../Vista/head-form.php' ?>

                <div class="container">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="mak-txt">Nombres y Apellidos</label>
                                            <input type="text" class="form-mak">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="mak-txt">Dirección</label>
                                            <input type="text" class="form-mak">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="mak-txt">Distrito</label>
                                            <select name="" id="" class="form-mak">
                                                <option value="-1">Seleccione distrito</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">HR:</label>
                                            <div class="section-input col-sm-6">
                                                <div class="upload-file">
                                                    <label data-bs-toggle="modal" data-bs-target="#modal_archive_HR">Seleccionar archivos.</label>
                                                </div>
                                            </div>
                                            <div class="input-group-append">
                                                <i class="cursor fa-solid fa-eye" data-bs-toggle="modal" data-bs-target="#modal_hr"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">PU:</label>
                                            <div class="section-input col-sm-6">
                                                <div class="upload-file">
                                                    <label data-bs-toggle="modal" data-bs-target="#modal_archive_PU">Seleccionar archivos.</label>
                                                </div>
                                            </div>
                                            <div class="input-group-append">
                                                <i class="cursor fa-solid fa-eye" data-bs-toggle="modal" data-bs-target="#modal_pu"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">COPIA LITERAL:</label>
                                            <div class="section-input col-sm-6">
                                                <div class="upload-file">
                                                    <label data-bs-toggle="modal" data-bs-target="#modal_archive_CL">Seleccionar archivos.</label>
                                                </div>
                                            </div>
                                            <div class="input-group-append">
                                                <i class="cursor fa-solid fa-eye" data-bs-toggle="modal" data-bs-target="#modal_cl"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">DNI:</label>
                                            <div class="section-input col-sm-6">
                                                <div class="upload-file">
                                                    <label data-bs-toggle="modal" data-bs-target="#modal_archive_DNI">Seleccionar archivos.</label>
                                                </div>
                                            </div>
                                            <div class="input-group-append">
                                                <i class="cursor fa-solid fa-eye" data-bs-toggle="modal" data-bs-target="#modal_dni"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="form-flex">
                            <button type="button" class="btn btn-mak mak-bg-sec">Guardar</button>
                            <button type="button" class="btn btn-mak mak-bg">Enviar</button>
                        </div>
                    </div>
                </div>
            </section>


        </div>
        <?php include '../Vista/foot-form.php' ?>
    </div>


    <!-- MODALES -->


    <!-- Modal_HR -->
    <!-- Modal -->
    <div class="modal fade" id="modal_archive_HR" tabindex="-1" aria-labelledby="modal_archive_HRLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_archive_HRLabel">Carga archivos máximo de 2MB.</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">

                                <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data">

                                <div class="content-file flex flex-column">

                                    <label>H.R</label>
                                    <div hidden>
                                        <input type="text" class="form-control" id="dni_usu_0" name="dni_usu_0" value="<?php echo $_SESSION['dni']; ?>">
                                        <input type="text" class="form-control" id="id_cli_0" name="id_cli_0" value="<?php echo $_SESSION['id_usu']; ?>">
                                        <input type="text" class="form-control" id="tipo_doc_0" name="tipo_doc_0" value="1">
                                    </div>    

                                    <div class="input-file">
                                        <div class="file-message">
                                            <i class="fa-solid fa-file"></i>
                                            <span>Arrastre los archivos aquí para subirlos.</span>
                                        </div>
                                        <div class="file-archives"></div>
                                    </div>

                                    <span>O</span>

                                    <div>
                                        <label id="buttonFile" class="btn btn-mak mak-bg buton-file">Seleccionar archivos</label>
                                        <input class="upload" type="file" id="hr_s" name="hr_s[]" multiple>
                                    </div>

                                </div>

                                    <button type="submit" class="btn btn-info btn-lg col-md-12" id="btn_save_hr" name="btn_save_hr" disabled>Registrar</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal_hr" tabindex="-1" role="dialog" aria-labelledby="modal_hr" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="title-m">HR</h1>
                    <div class="row margin">
                        <div class="col-sm-12">
                            <div class="container">
                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <div class="lgl-modal-num">
                                            1
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-mak">
                                    </div>
                                    <div class="tw-modal-ots">
                                        <div class="row">
                                            <div class="brd-rght-blue">
                                                <i class="cursor fa-solid fa-trash"></i>
                                            </div>
                                            <div>
                                                <i class="cursor fa-solid fa-download"></i>
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
    <!-- Modal -->
    <!-- Modal_HR -->

    <!-- Modal_PU -->
    <!-- Modal -->
    <div class="modal fade" id="modal_archive_PU" tabindex="-1" aria-labelledby="modal_archive_PULabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_archive_PULabel">Carga archivos máximo de 2MB.</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">

                                <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data">
                                    
                                <div class="content-file flex flex-column">
                                    <label>P.U</label>
                                    <div hidden>
                                        <input type="text" class="form-control" id="dni_usu_1" name="dni_usu_1" value="<?php echo $_SESSION['dni']; ?>">
                                        <input type="text" class="form-control" id="id_cli_1" name="id_cli_1" value="<?php echo $_SESSION['id_usu']; ?>">
                                        <input type="text" class="form-control" id="tipo_doc_1" name="tipo_doc_1" value="2">
                                    </div>
                                    <div class="input-file">
                                        <div class="file-message">
                                            <i class="fa-solid fa-file"></i>
                                            <span>Arrastre los archivos aquí para subirlos.</span>
                                        </div>
                                        <div class="file-archives"></div>
                                    </div>
                                    <span>O</span>

                                    <div>
                                        <label id="buttonFile" class="btn btn-mak mak-bg buton-file">Seleccionar archivos</label>
                                        <input class="upload" type="file" id="pu_s" name="pu_s[]" multiple hidden>
                                    </div>
                                </div>
                                    <button type="submit" class="btn btn-info btn-lg col-md-12" id="btn_save_pu" name="btn_save_pu" disabled>Registrar</button>
                                </form>
                                <div id="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal_pu" tabindex="-1" role="dialog" aria-labelledby="modal_pu" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="title-m">PU</h1>
                    <div class="row margin">
                        <div class="col-sm-12">
                            <div class="container">
                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <div class="lgl-modal-num">
                                            1
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-mak">
                                    </div>
                                    <div class="tw-modal-ots">
                                        <div class="row">
                                            <div class="brd-rght-blue">
                                                <i class="cursor fa-solid fa-trash"></i>
                                            </div>
                                            <div>
                                                <i class="cursor fa-solid fa-download"></i>
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
    <!-- Modal -->
    <!-- Modal_PU -->

    <!-- Modal_CL -->
    <!-- Modal -->
    <div class="modal fade" id="modal_archive_CL" tabindex="-1" aria-labelledby="modal_archive_CLLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_archive_CLLabel">Carga archivos máximo de 2MB.</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data">

                                <div class="content-file flex flex-column">
                                    <label>Copia Literal</label>
                                    <div hidden>
                                        <input type="text" class="form-control" id="dni_usu_2" name="dni_usu_2" value="<?php echo $_SESSION['dni']; ?>">
                                        <input type="text" class="form-control" id="id_cli_2" name="id_cli_2" value="<?php echo $_SESSION['id_usu']; ?>">
                                        <input type="text" class="form-control" id="tipo_doc_2" name="tipo_doc_2" value="3">
                                    </div>
                                    <div class="input-file">
                                        <div class="file-message">
                                            <i class="fa-solid fa-file"></i>
                                            <span>Arrastre los archivos aquí para subirlos.</span>
                                        </div>
                                        <div class="file-archives"></div>
                                    </div>
                                    <span>O</span>
                                    <div>
                                        <label id="buttonFile" class="btn btn-mak mak-bg buton-file">Seleccionar archivos</label>
                                        <input class="upload" type="file" id="cl_s" name="cl_s[]" multiple hidden>
                                    </div>
                                </div>
                                    <button type="submit" class="btn btn-info btn-lg col-md-12" id="btn_save_cl" name="btn_save_cl" disabled>Registrar</button>
                                </form>
                                <div id="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal_cl" tabindex="-1" role="dialog" aria-labelledby="modal_cl" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="title-m">Copia Literal</h1>
                    <div class="row margin">
                        <div class="col-sm-12">
                            <div class="container">
                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <div class="lgl-modal-num">
                                            1
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-mak">
                                    </div>
                                    <div class="tw-modal-ots">
                                        <div class="row">
                                            <div class="brd-rght-blue">
                                                <i class="cursor fa-solid fa-trash"></i>
                                            </div>
                                            <div>
                                                <i class="cursor fa-solid fa-download"></i>
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
    <!-- Modal -->
    <!-- Modal_CL -->

    <!-- Modal_DNI -->
    <!-- Modal -->
    <div class="modal fade" id="modal_archive_DNI" tabindex="-1" aria-labelledby="modal_archive_DNILabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_archive_DNILabel">Carga archivos máximo de 2MB.</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data">
                                    <div class="content-file flex flex-column">
                                        <label>DNI</label>
                                        <div hidden>
                                            <input type="text" class="form-control" id="dni_usu_3" name="dni_usu_3" value="<?php echo $_SESSION['dni']; ?>">
                                            <input type="text" class="form-control" id="id_cli_3" name="id_cli_3" value="<?php echo $_SESSION['id_usu']; ?>">
                                            <input type="text" class="form-control" id="tipo_doc_3" name="tipo_doc_3" value="4">
                                        </div>
                                        <div class="input-file">
                                            <div class="file-message">
                                                <i class="fa-solid fa-file"></i>
                                                <span>Arrastre los archivos aquí para subirlos.</span>
                                            </div>
                                            <div class="file-archives">
                                            </div>
                                        </div>
                                        <span>O</span>

                                        <div>
                                            <label id="buttonFile" class="btn btn-mak mak-bg buton-file">Seleccionar archivos</label>
                                            <input class="upload" type="file" id="dni_s" name="dni_s[]" multiple hidden>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-lg col-md-12" id="btn_save_dni" name="btn_save_dni" disabled>Registrar</button>
                                </form>
                                <div id="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modal_dni" tabindex="-1" role="dialog" aria-labelledby="modal_dni" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="title-m">DNI</h1>
                    <div class="row margin">
                        <div class="col-sm-12">
                            <div class="container">
                                <div class="form-group row">
                                    <div class="col-sm-2">
                                        <div class="lgl-modal-num">
                                            1
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-mak">
                                    </div>
                                    <div class="tw-modal-ots">
                                        <div class="row">
                                            <div class="brd-rght-blue">
                                                <i class="cursor fa-solid fa-trash"></i>
                                            </div>
                                            <div>
                                                <i class="cursor fa-solid fa-download"></i>
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
    <!-- Modal -->
    <!-- Modal_DNI -->


    <!-- MODALES -->

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
        // $(document).ready(function() {

        //     $('.modal_archive').on('click', function() {
        //         $('#modal_archive').modal('show');

        //         var whatIDis = $(this).data('modal');

        //         console.log(whatIDis);
        //     });


        // });

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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>

      //inputs
      var hr_inpt = document.getElementById('hr_s');
      var pu_inpt = document.getElementById('pu_s');
      var cl_inpt = document.getElementById('cl_s');
      var dni_inpt = document.getElementById('dni_s');


      var btn_hr = document.getElementById('btn_save_hr');
      var btn_pu = document.getElementById('btn_save_pu');
      var btn_cl = document.getElementById('btn_save_cl');
      var btn_dni = document.getElementById('btn_save_dni');

      hr_inpt.addEventListener('change', function() {

        if (hr_inpt.files.length > 0) {

          btn_hr.disabled = false;
        } else {

          btn_hr.disabled = true;
        }
      });

      pu_inpt.addEventListener('change', function() {

        if (pu_inpt.files.length > 0) {

          btn_pu.disabled = false;
        } else {

          btn_pu.disabled = true;
        }
      });


      cl_inpt.addEventListener('change', function() {

        if (cl_inpt.files.length > 0) {

          btn_cl.disabled = false;
        } else {

          btn_cl.disabled = true;
        }
      });

      dni_inpt.addEventListener('change', function() {

        if (dni_inpt.files.length > 0) {

          btn_dni.disabled = false;
        } else {

          btn_dni.disabled = true;
        }
      });


  </script>

</body>

</html>