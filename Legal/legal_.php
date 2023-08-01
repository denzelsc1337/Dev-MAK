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
                                                <i class="cursor fa-solid fa-eye" data-bs-toggle="modal" data-bs-target="#lst_hr_0"
                                                data-target="#lst_hr_0" data-valor="H_R" data-titulo="Hoja de Resumen" data-id_doc_="1"></i>
                                                <button type="button" class="btn btn-rounded btn-success btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="H_R" data-titulo="Hoja de Resumen" data-id_doc_="1">ver</button>
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

                                        <div class="input-file" id="dropArea">
                                            <div class="file-message">
                                                <i class="fa-solid fa-file"></i>
                                                <span>Arrastre los archivos aquí para subirlos.</span>
                                            </div>
                                            <div class="file-archives"></div>
                                        </div>

                                        <span>O</span>

                                        <div>
                                            <label id="buttonFile" class="btn btn-mak mak-bg buton-file">Seleccionar archivos</label>
                                            <input class="upload" type="file" id="hr_s" name="hr_s[]" multiple hidden>
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
    <div class="modal fade" id="lst_hr_0" tabindex="-1" role="dialog" aria-labelledby="lst_hr_0" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="title-m">HR</h1>
                    <div class="row margin">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>id usu</label>
                                <input type="text" name="usu_dni" id="usu_dni" value="<?php echo $_SESSION['id_usu'] ?>">
                                <br>
                                <label>usuario</label>
                                <input type="text" name="usu_dni" id="usu_dni" value="<?php echo $_SESSION['dni'] ?>">
                                <br>
                                <label>id_tipo_doc_lgl</label>
                                <input type="text" name="_id_tipo_doc_lgl" id="_id_tipo_doc_lgl">
                                <br>
                            </div>

                            <div class="container">
                                <div class="form-group row" id="descarga_archivo_m">

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
                                        <div class="input-file" id="dropArea_2">
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
                                        <div class="input-file" id="dropArea_3">
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
                                        <div class="input-file" id="dropArea_4">
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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


        $(document).ready(function() {

        $('.btn_subir_1').on('click', function() {
            console.log("test");
            $('#upload_doc').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);
            $('#id_doc_type').val(data[1]);
            $('#desc_doc').val(data[2].trim());
        });


        $('.btn_ver_files').on('click', function() {
            console.log("test");
            $('#lst_files').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);

            $('#id_usu_soli').val(data[4]);
            $('#dni_usu_soli').val(data[5]);
        });


        $('.btn_ver_files_2').on('click', function() {
            console.log("test");
            $('#lst_files_2').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);

        });

        function load_documents(){

            var dni = '<?php echo $_SESSION['dni'] ?>';
            var id_cli = '<?php echo $_SESSION['id_usu'] ?>';
            var _id_tipo_doc = $('#_id_tipo_doc_lgl').val();

            $.ajax({
                type: 'POST',
                url: '../Controller/obtener_files.php',
                data: {
                    id_client: id_cli,
                    dni_client: dni,
                    id_tipo_doc:_id_tipo_doc
                },
                success: function(response) {
                    var data  = JSON.parse(response);

                    var archivos = data.archivos;
                    var estado_doc = data.status_doc;

                    var cod_doc_, ruta_doc,nom_file;

                    if (archivos && archivos.length > 0) {
                        var enlaceHtml = '';

                        archivos.forEach(function(archivo) {
                            var ruta = archivo.ruta;
                            var nombreArchivo = archivo.archivo;
                            var estado = archivo.estado;
                            var id_doc_ = archivo.id_doc;
                            var status_r = '';

                            var delete_btn = $('<button>').text('Eliminar').attr('class', 'btn btn-block btn-danger');

                            enlaceHtml += `

                                            <div class="col-sm-4">
                                                <div class="lgl-modal-num">
                                                    1
                                                </div>
                                            </div>

                                            <div class="col-sm-8">
                                                <a href="${ruta}${nombreArchivo}">${nombreArchivo}</a>
                                            </div>

                                            <div class="tw-modal-ots">
                                                <div class="row">
                                                    <div class="brd-rght-blue">
                                                        <i class="cursor fa-solid fa-trash"></i>
                                                        <button id="dlt_file" type="button" class="btn btn-danger dlt_file">Eliminar</button>
                                                    </div>
                                                    <div>

                                                        <i class="cursor fa-solid fa-download"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            `;

                        });

                        document.getElementById('descarga_archivo_m').innerHTML = enlaceHtml;

                    } else {

                        document.getElementById('descarga_archivo_m').textContent = 'Archivo no encontrado';
                    }

                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        }

        function eliminarArchivo($deleteBtn, cod_doc_, ruta_doc, ruta_archivo){

            var dni = '<?php echo $_SESSION['dni'] ?>';
            var id_cli = '<?php echo $_SESSION['id_usu'] ?>';
            var _id_tipo_doc = $('#_id_tipo_doc_lgl').val();

            $.ajax({
                type: 'POST',
                url: '../Controller/eliminarArchivos.php',
                data: {
                    id_client: id_cli,
                    dni_client: dni,
                    cod_doc_: cod_doc_,
                    ruta_doc: ruta_doc,
                    ruta_archivo: ruta_archivo,
                },
                success: function(response) {
                    console.log("archivo eliminado con ID: " + cod_doc_);
                    $deleteBtn.closest('.modal').modal('hide');
                    //load_documents();
                },
                complete: function() {
                    load_documents();
                    setTimeout(function() {
                        $('#lst_hr_0').modal('show');
                    }, 500);

                }
            });
        }

        $(document).on('click', '.dlt_file', function() {
            var $this = $(this);
            console.log("probando botón");

            var confirmar_ = window.confirm('¿Estás seguro de que deseas eliminar este archivo?');

            if (confirmar_) {
                var $parentLi = $(this).closest('li');

                var cod_doc_ = $parentLi.find('#cod_doc_i').val();
                var ruta_doc = $parentLi.find('#ruta_doc_i').val();
                var ruta_archivo = $parentLi.find('#ruta_archivo_i').val();

                eliminarArchivo($this,cod_doc_, ruta_doc, ruta_archivo);

                console.log("archivo eliminado");
            } else {
                console.log("cancelado");
            }
        });


        $('.btn_lst_hr').on('click', function() {
            console.log("Botón seleccionado");

            var valor1 = $(this).data('valor');
            var titulo_ = $(this).data('titulo');
            var _id_doc_lgl = $(this).data('id_doc_');

            $('#_id_tipo_doc_lgl').val(_id_doc_lgl);
            $('#_concept').val(valor1);
            $('#titulo_docs').text(titulo_);

            var concepto = $('#_concept').val();

            var titulo_modal = $('#titulo_docs').val();



            /*console.log(titulo_modal);
            console.log(concepto);*/

            load_documents();

            $('#lst_hr_0').modal('show');


        });


        //codigo para el admin y ver los documentos de cada usuario

        $('.btn_ver_tipos_0').on('click', function() {
            console.log("test");

            $('#lst_docs_1').modal('show');

            //valores de los inputs del modal lst_files
            var id_usu_soli = $('#id_usu_soli').val();
            var dni_usu_soli = $('#dni_usu_soli').val();

            //valores a los inputs en el modal lst_docs_1
            $('#lst_docs_1').find('#id_client_0').val(id_usu_soli);
            $('#lst_docs_1').find('#dni_client_0').val(dni_usu_soli);

            console.log('e?'+id_usu_soli);
            console.log('pop'+dni_usu_soli);

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);


            var id_doc_lgl_0 = $(this).data('id_doc');
            var nom_doc_lgl_0 = $(this).data('nom_doc');

            console.log(id_doc_lgl_0);
            console.log(nom_doc_lgl_0);

            $('#id_tipo_doc_lgl_0').val(id_doc_lgl_0);

            $('#_concept_doc_0').val(nom_doc_lgl_0);


            var concept =  $('#_concept_doc_0').val();
            var id_tipo_doc_ = $('#id_tipo_doc_lgl_0').val();

            $.ajax({
                type: 'POST',
                url: '../Controller/obtener_files_client.php',
                data: {
                    _concept_doc:concept,
                    id_client: id_usu_soli,
                    dni_client: dni_usu_soli,
                    id_tipo_doc: id_tipo_doc_
                },
                success: function(response) {
                    var data  = JSON.parse(response);

                    var archivos = data.archivos;
                    var estado_doc = data.status_doc;


                    if (archivos && archivos.length > 0) {
                        var enlaceHtml = '';

                        archivos.forEach(function(archivo) {
                            var ruta = archivo.ruta;
                            var nombreArchivo = archivo.archivo;
                            var estado = archivo.estado;
                            var status_r = '';

                            enlaceHtml += '<div>';
                            enlaceHtml += '<a href="' + ruta + nombreArchivo+'">' + nombreArchivo + '</a> &nbsp';

                            enlaceHtml += '<i>' + status_r + '</i><br>';

                            enlaceHtml += '<select name="cbo_estados" id="cbo_estados">';

                            if (estado === '500') {
                                enlaceHtml += '<option value=""selected>Pendiente</option>';
                                enlaceHtml += '<option value="">En revisión</option>';
                                enlaceHtml += '<option value="">Finalizado</option>';
                            } else if (estado === '405') {
                                enlaceHtml += '<option value="">Pendiente</option>';
                                enlaceHtml += '<option value="" selected>En revisión</option>';
                                enlaceHtml += '<option value="">Finalizado</option>';
                            } else if (estado === '200') {
                                enlaceHtml += '<option value="">Pendiente</option>';
                                enlaceHtml += '<option value="">En revisión</option>';
                                enlaceHtml += '<option value="" selected>Finalizado</option>';
                            }
                             enlaceHtml += '</select><br>';
                             enlaceHtml += '</div>';
                        });

                        document.getElementById('descarga_archivo_ul').innerHTML = enlaceHtml;

                    } else {

                        document.getElementById('descarga_archivo_ul').textContent = 'Archivo no encontrado';
                    }

                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });

        });
        //codigo para el admin y ver los documentos de cada usuario



        //codigo para el usuario comun vea sus propios documentos

        $('.btn_ver_tipos').on('click', function() {

            $('#lst_docs_0').modal('show');

            var id_doc_lgl = $(this).data('id_doc');
            var nom_doc_lgl = $(this).data('nom_doc');

            console.log(id_doc_lgl);
            console.log(nom_doc_lgl);

            $('#id_tipo_doc_lgl').val(id_doc_lgl);

            $('#_concept_doc').val(nom_doc_lgl);



            var concept =  $('#_concept_doc').val();
            var id_tipo_doc_ = $('#id_tipo_doc_lgl').val();

            var dni = '<?php echo $_SESSION['dni'] ?>';
            var id_cli = '<?php echo $_SESSION['id_usu'] ?>';

            $.ajax({
                type: 'POST',
                url: '../Controller/obtener_files_client.php',
                data: {
                    _concept_doc:concept,
                    id_client: id_cli,
                    dni_client: dni,
                    id_tipo_doc: id_tipo_doc_
                },
                success: function(response) {
                    var data  = JSON.parse(response);

                    var archivos = data.archivos;
                    var estado_doc = data.status_doc;


                    if (archivos && archivos.length > 0) {
                        var enlaceHtml = '';

                        archivos.forEach(function(archivo) {
                            var ruta = archivo.ruta;
                            var nombreArchivo = archivo.archivo;
                            var estado = archivo.estado;
                            var status_r = '';


                            enlaceHtml += '<a href="' + ruta + nombreArchivo+'">' + nombreArchivo + '</a> &nbsp';

                             if (estado==500) {
                                status_r = 'Pendiente'
                            }
                            enlaceHtml += '<i>' + status_r + '</i><br>';
                        });

                        document.getElementById('descarga_archivo_s').innerHTML = enlaceHtml;

                    } else {

                        document.getElementById('descarga_archivo_s').textContent = 'Archivo no encontrado';
                    }

                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });


        });

        //codigo para el usuario comun y ver sus documentos

    });

    </script>


    <script>
        function send_file_upld(drop_id, file_input_id, btn_id) {

            const dropArea = document.getElementById(drop_id);
            const fileInput = document.getElementById(file_input_id);

            // Prevenir el comportamiento predeterminado para los eventos de arrastrar para permitir soltar archivos
            dropArea.addEventListener("dragover", (event) => {
                event.preventDefault();
            });

            // Manejar el evento de soltar archivos
            dropArea.addEventListener("drop", (event) => {
                event.preventDefault();
                const files = event.dataTransfer.files;
                actualizarListaArchivos(files);
                fileInput.files = files;
                habilitarBotonRegistrar(files.length > 0);
            });

            // Manejar el evento de cambio en el input de archivos
            fileInput.addEventListener("change", (event) => {
                const files = event.target.files;
                actualizarListaArchivos(files);
                habilitarBotonRegistrar(files.length > 0);
            });

            // Actualizar la lista de archivos en el área de arrastre
            function actualizarListaArchivos(files) {
                const fileArchives = dropArea.querySelector(".file-archives");
                fileArchives.innerHTML = "";

                for (const file of files) {
                    const fileDiv = document.createElement("div");
                    fileDiv.textContent = file.name;
                    fileArchives.appendChild(fileDiv);
                }
            }

            // Habilitar o deshabilitar el botón de registrar según la cantidad de archivos seleccionados
            function habilitarBotonRegistrar(habilitar) {
                const submitButton = document.getElementById(btn_id);
                submitButton.disabled = !habilitar;
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            send_file_upld("dropArea", "hr_s", "btn_save_hr");
            send_file_upld("dropArea_2", "pu_s", "btn_save_pu");
            send_file_upld("dropArea_3", "cl_s", "btn_save_cl");
            send_file_upld("dropArea_4", "dni_s", "btn_save_dni");
        });
    </script>

</body>

</html>