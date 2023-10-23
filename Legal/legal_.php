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
    <!-- Modal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>



    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->


</head>

<body class="hold-transition sidebar-mini  sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">

        <?php include '../Vista/nav_bar_moduls.php' ?>

        <div class="content-wrapper">

            <section class="content">

                <?php include '../Vista/head-form.php' ?>

                <?php

                $dni = $_SESSION['dni'];

                $ruta_base = '../Documentos Legal/';

                $rutas = '';

                if (isset($_SESSION['dni'])) {
                    $dni = $_SESSION['dni'];
                    $rutaCompleta = $ruta_base . $dni . '/';


                    if (is_dir($rutaCompleta)) {
                        $elementos = scandir($rutaCompleta);

                        $elementos = array_diff($elementos, array('.', '..'));

                        foreach ($elementos as $elemento) {
                            if (is_dir($rutaCompleta . $elemento)) {
                                $rutas .= $rutaCompleta . $elemento . "\n";
                            }
                        }

                        // if (empty($rutas)) {
                        //     echo "No hay carpetas disponibles.";
                        // }
                    } else {

                        // echo "La carpeta $dni no existe en la ruta especificada.";
                    }

                    //echo $rutaCompleta;

                }
                ?>


                <div class="overflow-hidden">
                    <div class="d-flex scroll">

                        <section class="body-mak mak-txt position-relative" data-content="legal">


                            <form method="POST" action="../Controller/Add_Solic_Legal.php">
                                <div class="container mt-5">

                                    <div class="card-body">
                                        <div class="row">
                                            <div hidden>
                                                <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $_SESSION['id_usu']; ?>">
                                                <input type="text" class="form-control" id="dni_user_l" name="dni_user_l" value="<?php echo $_SESSION['dni']; ?>">
                                            </div>

                                            <div class="col-md-6 mb-5">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="mak-txt">Nombre</label>
                                                            <input type="text" class="form-mak" id="nom_cli_solic" name="nom_cli_solic" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="mak-txt">Apellidos</label>
                                                            <input type="text" class="form-mak" id="ape_cli_solic" name="ape_cli_solic" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="mak-txt">Correo</label>
                                                            <input type="text" class="form-mak" id="dir_cli_solic" name="dir_cli_solic" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <textarea id="rutas_doscs" name="rutas_doscs" rows="5" cols="50" hidden><?php echo $rutas; ?></textarea>
                                            </div>
                                            <div class="col-md-6 mb-5">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">HR:</label>
                                                            <div class="col-md-8 d-flex">
                                                                <div class="section-input">
                                                                    <div class="upload-file">
                                                                        <label class="upld-file" data-bs-toggle="modal" data-bs-target="#modal_archive_HR">Seleccionar archivos.</label>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group-append">

                                                                    <button type="button" class="btn btn-rounded btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="H_R" data-titulo="Hoja de Resumen" data-id_doc_="1"><i class="cursor fa-solid fa-eye"></i></button>

                                                                    <button type="button" class="btn btn-rounded btn_lst_lyts btn_lst_lyts_0" data-toggle="modal" data-target="#lst_lyts" data-valor="H_R" data-titulo="Hoja de Resumen" data-id_doc_="1" style="display:none"><i class="cursor fa-solid fa-pencil"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-5 col-form-label">PU:</label>
                                                            <div class="col-md-8 d-flex">
                                                                <div class="section-input">
                                                                    <div class="upload-file">
                                                                        <label class="upld-file" data-bs-toggle="modal" data-bs-target="#modal_archive_PU">Seleccionar archivos.</label>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group-append">

                                                                    <button type="button" class="btn btn-rounded btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="P_U" data-titulo="Predio Urbano" data-id_doc_="2"><i class="cursor fa-solid fa-eye"></i></button>

                                                                    <button type="button" class="btn btn-rounded btn_lst_lyts btn_lst_lyts_0" data-toggle="modal" data-target="#lst_lyts" data-valor="P_U" data-titulo="Predio Urbano" data-id_doc_="2" style="display:none"><i class="cursor fa-solid fa-pencil"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-5 col-form-label">COPIA LITERAL:</label>
                                                            <div class="col-md-8 d-flex">
                                                                <div class="section-input">
                                                                    <div class="upload-file">
                                                                        <label class="upld-file" data-bs-toggle="modal" data-bs-target="#modal_archive_CL">Seleccionar archivos.</label>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group-append">

                                                                    <button type="button" class="btn btn-rounded btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="C_L" data-titulo="Copia Literal" data-id_doc_="3"><i class="cursor fa-solid fa-eye"></i></button>


                                                                    <button type="button" class="btn btn-rounded  btn_lst_lyts btn_lst_lyts_0" data-toggle="modal" data-target="#lst_lyts" data-valor="C_L" data-titulo="Copia Literal" data-id_doc_="3" style="display:none"><i class="cursor fa-solid fa-pencil"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-5 col-form-label">DNI:</label>
                                                            <div class="col-md-8 d-flex">
                                                                <div class="section-input">
                                                                    <div class="upload-file">
                                                                        <label class="upld-file" data-bs-toggle="modal" data-bs-target="#modal_archive_DNI">Seleccionar archivos.</label>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group-append">
                                                                    <button type="button" class="btn btn-rounded btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="DNI" data-titulo="DNI" data-id_doc_="4"><i class="cursor fa-solid fa-eye"></i></button>

                                                                    <button type="button" class="btn btn-rounded  btn_lst_lyts btn_lst_lyts_0" data-toggle="modal" data-target="#lst_lyts" data-valor="DNI" data-titulo="DNI" data-id_doc_="4" style="display:none"><i class="cursor fa-solid fa-pencil"></i></button>
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
                                            <a href="./" class="btn btn-mak mak-bg-sec">Retroceder</a>
                                            <button type="submit" class="btn btn-mak mak-bg-sec" id="btn_save_borrador" name="btn_save_borrador">Guardar</button>
                                            <button type="submit" class="btn btn-mak mak-bg" id="btn_save_solic" name="btn_save_solic">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>

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

                                <form id="isrt_HR" method="POST" enctype="multipart/form-data">
                                    <!-- <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data"> -->

                                    <div class="content-file flex flex-column">

                                        <label>H.R</label>
                                        <div hidden>
                                            <input type="text" class="form-control" id="dni_usu_hr" name="dni_usu_hr" value="<?php echo $_SESSION['dni']; ?>">
                                            <input type="text" class="form-control" id="id_cli_hr" name="id_cli_hr" value="<?php echo $_SESSION['id_usu']; ?>">
                                            <input type="text" class="form-control" id="tipo_doc_hr" name="tipo_doc_hr" value="1">
                                        </div>

                                        <div class="input-file" id="dropArea">
                                            <img class="row text-center" src="../Vista/assets/loading_upd.gif" id="loader__hr" style="display:none;">
                                            <div class="file-message">
                                                <div class="file-message_">
                                                    <img src="../Vista/images/document-text-svgrepo-com 1.svg" alt="doc">
                                                    <span>Arrastre los archivos aquí para subirlos.</span>
                                                </div>
                                            </div>
                                            <div class="file-archives" style="display: none;"></div>
                                        </div>

                                        <span>O</span>

                                        <div class="card-footer">
                                            <div class="form-flex">
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_isrt_hr" name="btn_isrt_hr" disabled>Registrar</button>

                                                <label id="buttonFile" class="btn btn-mak mak-bg buton-file">Seleccionar archivos</label>
                                                <input class="upload" type="file" id="hr_s" name="hr_s[]" multiple hidden>
                                            </div>
                                        </div>

                                    </div>


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
                    <h1 class="title-m" id="titulo_docs">HR</h1>
                    <div class="row margin justify-content-center">

                        <div class="form-group" hidden>
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

                        <img class="row text-center" src="../Vista/assets/loading_uhd.gif" id="loader_erase_hr" style="display:none;">
                        <div class="col-sm-12" id="descarga_archivo_m">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="lst_lyts" tabindex="-1" role="dialog" aria-labelledby="lst_lyts" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="title-m" id="titulo_docs_2"></h1>
                    <div class="row margin">

                        <div class="form-group" hidden>
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

                        <div class="col-sm-12" id="descarga_archivo_l">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="lst_docs_legal" tabindex="-1" role="dialog" aria-labelledby="lst_docs_legal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="title-m" id="titulo_docs">HR</h1>
                    <img class="row margin" src="../Vista/assets/loading_uhd.gif" id="loader_uhd" style="display:none; margin: 0 22rem 5rem">
                    <div class="row margin" id="lst_docs_lgl" style="display:none">

                        <div class="col-sm-12" id="descarga_archivo_p">

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

                                <form id="isrt_PU" method="POST" enctype="multipart/form-data">
                                    <!-- <form  method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data"> -->

                                    <div class="content-file flex flex-column">
                                        <label>P.U</label>
                                        <div hidden>
                                            <input type="text" class="form-control" id="dni_usu_pu" name="dni_usu_pu" value="<?php echo $_SESSION['dni']; ?>">
                                            <input type="text" class="form-control" id="id_cli_pu" name="id_cli_pu" value="<?php echo $_SESSION['id_usu']; ?>">
                                            <input type="text" class="form-control" id="tipo_doc_pu" name="tipo_doc_pu" value="2">
                                            <input type="text" name="cod_reg_2" id="cod_reg_2">
                                        </div>
                                        <div class="input-file" id="dropArea_2">
                                            <img class="row text-center" src="../Vista/assets/loading_upd.gif" id="loader__pu" style="display:none;">
                                            <div class="file-message">
                                                <div class="file-message_">
                                                    <img src="../Vista/images/document-text-svgrepo-com 1.svg" alt="doc">
                                                    <span>Arrastre los archivos aquí para subirlos.</span>
                                                </div>
                                            </div>
                                            <div class="file-archives" style="display: none;"></div>
                                        </div>
                                        <span>O</span>

                                        <!-- <div>
                                            <label id="buttonFile" class="btn btn-mak mak-bg buton-file">Seleccionar archivos</label>
                                            <input class="upload" type="file" id="pu_s" name="pu_s[]" multiple hidden>
                                        </div> -->
                                        <div class="card-footer">
                                            <div class="form-flex">
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_updt_pu" name="btn_updt_pu" style="display: none;">Actualizar</button>
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_isrt_pu" name="btn_isrt_pu" disabled>Registrar</button>

                                                <label id="buttonFile" class="btn btn-mak mak-bg buton-file">Seleccionar archivos</label>
                                                <input class="upload" type="file" id="pu_s" name="pu_s[]" multiple hidden>
                                            </div>
                                        </div>
                                    </div>



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
                                <form id="isrt_CL" method="POST" enctype="multipart/form-data">
                                    <!-- <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data"> -->

                                    <div class="content-file flex flex-column">
                                        <label>Copia Literal</label>
                                        <div hidden>
                                            <input type="text" class="form-control" id="dni_usu_cl" name="dni_usu_cl" value="<?php echo $_SESSION['dni']; ?>">
                                            <input type="text" class="form-control" id="id_cli_cl" name="id_cli_cl" value="<?php echo $_SESSION['id_usu']; ?>">
                                            <input type="text" class="form-control" id="tipo_doc_cl" name="tipo_doc_cl" value="3">
                                            <input type="text" name="cod_reg_3" id="cod_reg_3">
                                        </div>
                                        <div class="input-file" id="dropArea_3">
                                            <img class="row text-center" src="../Vista/assets/loading_upd.gif" id="loader__cl" style="display:none;">
                                            <div class="file-message">
                                                <div class="file-message_">
                                                    <img src="../Vista/images/document-text-svgrepo-com 1.svg" alt="doc">
                                                    <span>Arrastre los archivos aquí para subirlos.</span>
                                                </div>
                                            </div>
                                            <div class="file-archives" style="display: none;"></div>
                                        </div>
                                        <span>O</span>
                                        <!-- <div>
                                            <label id="buttonFile" class="btn btn-mak mak-bg buton-file">Seleccionar archivos</label>
                                            <input class="upload" type="file" id="cl_s" name="cl_s[]" multiple hidden>
                                        </div> -->
                                        <div class="card-footer">
                                            <div class="form-flex">
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_updt_cl" name="btn_updt_cl" style="display: none;">Actualizar</button>
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_isrt_cl" name="btn_isrt_cl" disabled>Registrar</button>

                                                <label id="buttonFile" class="btn btn-mak mak-bg buton-file">Seleccionar archivos</label>
                                                <input class="upload" type="file" id="cl_s" name="cl_s[]" multiple hidden>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                <form id="isrt_DNI" method="POST" enctype="multipart/form-data">
                                    <!-- <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data"> -->
                                    <div class="content-file flex flex-column">
                                        <label>DNI</label>
                                        <div hidden>
                                            <input type="text" class="form-control" id="dni_usu_dni" name="dni_usu_dni" value="<?php echo $_SESSION['dni']; ?>">
                                            <input type="text" class="form-control" id="id_cli_dni" name="id_cli_dni" value="<?php echo $_SESSION['id_usu']; ?>">
                                            <input type="text" class="form-control" id="tipo_doc_dni" name="tipo_doc_dni" value="4">
                                            <input type="text" name="cod_reg_4" id="cod_reg_4">
                                        </div>
                                        <div class="input-file" id="dropArea_4">
                                            <img class="row text-center" src="../Vista/assets/loading_upd.gif" id="loader__dni" style="display:none;">
                                            <div class="file-message">
                                                <div class="file-message_">
                                                    <img src="../Vista/images/document-text-svgrepo-com 1.svg" alt="doc">
                                                    <span>Arrastre los archivos aquí para subirlos.</span>
                                                </div>
                                            </div>
                                            <div class="file-archives" style="display: none;"></div>
                                        </div>
                                        <span>O</span>

                                        <!-- <div>
                                            <label id="buttonFile" class="btn btn-mak mak-bg buton-file">Seleccionar archivos</label>
                                            <input class="upload" type="file" id="dni_s" name="dni_s[]" multiple hidden>
                                        </div> -->
                                        <div class="card-footer">
                                            <div class="form-flex">
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_updt_dni" name="btn_updt_dni" style="display: none;">Actualizar</button>
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_isrt_dni" name="btn_isrt_dni" disabled>Registrar</button>

                                                <label id="buttonFile" class="btn btn-mak mak-bg buton-file">Seleccionar archivos</label>
                                                <input class="upload" type="file" id="dni_s" name="dni_s[]" multiple hidden>
                                            </div>
                                        </div>
                                    </div>
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

            function load_documents(valor1) {

                var dni = '<?php echo $_SESSION['dni'] ?>';
                var id_cli = '<?php echo $_SESSION['id_usu'] ?>';
                var _id_tipo_doc = $('#_id_tipo_doc_lgl').val();

                $.ajax({
                    type: 'POST',
                    url: '../Controller/obtener_files_doc.php',
                    data: {
                        id_client: id_cli,
                        dni_client: dni,
                        id_tipo_doc: valor1
                    },
                    success: function(response) {

                        console.log(response);
                        var data = JSON.parse(response);

                        var archivos = data.archivos;
                        var estado_doc = data.status_doc;

                        var cod_doc_, ruta_doc, nom_file;
                        var cont = 1;

                        if (archivos && archivos.length > 0) {
                            var enlaceHtml = '';

                            archivos.forEach(function(archivo) {
                                var ruta = archivo.ruta;
                                var nombreArchivo = archivo.archivo;
                                var estado = archivo.estado;
                                var id_doc_ = archivo.id_doc;
                                var status_r = '';

                                console.log(archivo);


                                var delete_btn = $('<button>').text('Eliminar').attr('class', 'btn btn-block btn-danger');


                                enlaceHtml += `

                                            <div class="row d-flex justify-content-between align-center mb-4">
                                                <div class="col-sm-2">
                                                    <div class="lgl-modal-num">
                                                        ${cont++}
                                                    </div>
                                                </div>

                                                <div class="col-sm-8 archive">
                                                    <img src="#" id="loader" style="display: none;">
                                                    <a href="${ruta}${nombreArchivo}">${nombreArchivo}</a>
                                                </div>

                                                <div class="col-sm-2 tw-modal-ots">
                                                    <div class="inputs">
                                                        <div hidden>
                                                            <input id="ruta_doc_i" type="text" value="${ruta}" readonly>
                                                            <input id="ruta_archivo_i" type="text" value="${nombreArchivo}" readonly>
                                                            <input id="cod_doc_i" type="text" value="${id_doc_}" readonly>
                                                        </div>

                                                        <div class="">
                                                            <button id="dlt_file" type="button" class="btn dlt_file"><i class="cursor fa-solid fa-trash"></i></button>
                                                        </div>
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


            function load_documents_lyt(id_soli_l, id_tipo_doc_) {

                var dni = '<?php echo $_SESSION['dni'] ?>';

                $.ajax({
                    type: 'POST',
                    url: '../Controller/get_lyts.php',
                    data: {
                        id_solic_l: id_soli_l,
                        dni_client: dni,
                        id_tipo_doc: id_tipo_doc_,

                    },
                    success: function(response) {
                        var data = JSON.parse(response);

                        var archivos = data.archivos;
                        var estado_doc = data.status_doc;

                        var cod_doc_, ruta_doc, nom_file;
                        var cont = 1;

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

                                            <div class="row d-flex justify-content-between align-center mb-4">
                                                <div class="col-sm-2">
                                                    <div class="lgl-modal-num">
                                                        ${cont++}
                                                    </div>
                                                </div>

                                                <div class="col-sm-8 archive">
                                                    <img src="#" id="loader" style="display: none;">
                                                    <a href="${ruta}${nombreArchivo}">${nombreArchivo}</a>
                                                </div>

                                                <div class="col-sm-2 tw-modal-ots">
                                                    <div class="row">
                                                        <div class="inputs brd-rght-blue">
                                                            <input id="ruta_doc_i" type="text" value="${ruta}" readonly hidden>
                                                            <input id="ruta_archivo_i" type="text" value="${nombreArchivo}" readonly hidden>
                                                            <input id="cod_doc_i" type="text" value="${id_doc_}" readonly hidden>

                                                            <div class="">
                                                                <button id="dlt_file" type="button" class="btn dlt_file"><i class="cursor fa-solid fa-trash"></i></button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <button id="dlt_file" type="button" class="btn dlt_file"> <i class="cursor fa-solid fa-download"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            `;

                            });

                            document.getElementById('descarga_archivo_l').innerHTML = enlaceHtml;

                        } else {

                            document.getElementById('descarga_archivo_l').textContent = 'Archivo no encontrado';
                        }

                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            }



            function load_documents_legal_(id_reg, id_cli, tipo_doc, id_cli_l, id_tipo_doc) {

                $.ajax({
                    type: 'POST',
                    url: '../Controller/Get_files_solic_legal.php',
                    data: {
                        id_solic_l: id_reg,
                        dni_cli: id_cli,
                        cod_tipo_doc: tipo_doc,

                        id_cli_lgl: id_cli_l,
                        id_tipo_doc: id_tipo_doc

                    },
                    beforeSend: function() {
                        $("#loader_uhd").show();
                        $("#lst_docs_lgl").hide();
                        //$("#docs_val").hide();

                    },
                    success: function(response) {


                        var data = JSON.parse(response);

                        var archivos = data.archivos;
                        var estado_doc = data.status_doc;

                        var dbInfo = data.base_de_datos;
                        var estado_db = data.status_doc_;

                        console.log(dbInfo)
                        var cod_doc_, ruta_doc, nom_file;
                        var cont = 1;

                        setTimeout(function() {
                            $("#loader_uhd").hide();
                            $("#lst_docs_lgl").show();
                            if (archivos && archivos.length > 0) {
                                var enlaceHtml = '';

                                archivos.forEach(function(archivo) {
                                    var ruta = archivo.ruta;
                                    var nombreArchivo = archivo.archivo;
                                    var estado = archivo.estado;
                                    var id_doc_ = archivo.id_doc;
                                    var status_r = '';


                                    var delete_btn = $('<button>').text('Eliminar').attr('class', 'btn btn-block btn-danger');
                                    var estadoHtml = estado === 'estado_desconocido' ? '' : `<span class="estado-archivo">${estado}</span>`;
                                    var estadoDbHtml = estado_db ? `<span class="estado-db">${estado_db}</span>` : '';

                                    //arroshi recontra tarao
                                    enlaceHtml += `

                                            <div class="row d-flex justify-content-between align-center mb-4">
                                                <div class="col-sm-2">
                                                    <div class="lgl-modal-num">
                                                        ${cont++}
                                                    </div>
                                                </div>

                                                <div class="col-sm-8 archive">
                                                    <img src="#" id="loader" style="display: none;">
                                                    <a href="${ruta}${nombreArchivo}">${nombreArchivo}</a>
                                                </div>

                                                <div class="col-sm-2 tw-modal-ots">
                                                    <div class="row">

                                                        ${
                                                        estadoHtml === '500'
                                                            ? `
                                                            <select>
                                                                <option selected>Pendiente</option>
                                                                <option>Revisado</option>
                                                                <option>Rechazado</option>
                                                                <option>Aceptado</option>
                                                            </select>
                                                            `
                                                            : estadoHtml === '200'
                                                                ? `
                                                                <select>
                                                                    <option>Pendiente</option>
                                                                    <option selected>Revisado</option>
                                                                    <option>Rechazado</option>
                                                                    <option>Aceptado</option>
                                                                </select>
                                                                `
                                                                : `
                                                                <select>
                                                                    <option>Pendiente</option>
                                                                    <option>Revisado</option>
                                                                    <option>Rechazado</option>
                                                                    <option>Aceptado</option>
                                                                </select>
                                                                `
                                                        }

                                                        <div class="inputs brd-rght-blue">
                                                            <input id="ruta_doc_i" type="text" value="${ruta}" readonly hidden>
                                                            <input id="ruta_archivo_i" type="text" value="${nombreArchivo}" readonly hidden>
                                                            <input id="cod_doc_i" type="text" value="${id_doc_}" readonly hidden>

                                                            <div class="">
                                                                <button id="dlt_file" type="button" class="btn dlt_file"><i class="cursor fa-solid fa-trash"></i></button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <button id="dlt_file" type="button" class="btn dlt_file"> <i class="cursor fa-solid fa-download"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            `;

                                });

                                document.getElementById('descarga_archivo_p').innerHTML = enlaceHtml;

                            } else {

                                document.getElementById('descarga_archivo_p').textContent = 'Archivo no encontrado';
                            }

                            console.log('Estado de archivos:', estado_doc);
                            console.log('Estado de la base de datos:', estado_db);

                        }, 480);



                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            }


            function eliminarArchivo($deleteBtn, cod_doc_, ruta_doc, ruta_archivo) {

                var dni = '<?php echo $_SESSION['dni'] ?>';
                var id_cli = '<?php echo $_SESSION['id_usu'] ?>';
                var _id_tipo_doc = $('#_id_tipo_doc_lgl').val();

                $.ajax({
                    type: 'POST',
                    url: '../Controller/eliminarArchivos.php',
                    data: {
                        id_client: id_cli,
                        dni_client: dni,
                        ruta_doc: ruta_doc,
                        ruta_archivo: ruta_archivo,
                    },
                    success: function(response) {
                        console.log("archivo eliminado con ID: " + ruta_doc + ruta_archivo);

                        $('#loader_erase_hr').show();
                        $('#descarga_archivo_m').hide();
                        // $deleteBtn.closest('.modal').modal('hide');
                    },
                    complete: function() {
                        setTimeout(function() {
                            // $('#lst_hr_0').modal('show');
                            $('#loader_erase_hr').hide();
                            $('#descarga_archivo_m').show();

                            if (ruta_doc == "../Documentos Legal/" + dni + "/H_R/") {
                                console.log("HR")
                                load_documents('H_R');
                            } else if (ruta_doc == "../Documentos Legal/" + dni + "/P_U/") {
                                console.log("PU")
                                load_documents('P_U');
                            } else if (ruta_doc == "../Documentos Legal/" + dni + "/C_L/") {
                                console.log("CL")
                                load_documents('C_L');
                            } else if (ruta_doc == "../Documentos Legal/" + dni + "/DNI/") {
                                console.log("DNI")
                                load_documents('DNI');
                            }
                        }, 500);

                    }
                });
            }

            $(document).on('click', '.dlt_file', function() {
                var $this = $(this);

                var confirmar_ = window.confirm('¿Estás seguro de que deseas eliminar este archivo?');

                if (confirmar_) {
                    var $parentDiv = $(this).closest('.inputs').parent();

                    var cod_doc_ = $parentDiv.find('#cod_doc_i').val();
                    var ruta_doc = $parentDiv.find('#ruta_doc_i').val();
                    var ruta_archivo = $parentDiv.find('#ruta_archivo_i').val();

                    eliminarArchivo($this, cod_doc_, ruta_doc, ruta_archivo);

                    console.log("archivo eliminado");
                } else {
                    console.log("cancelado");
                }
            });


            $('.btn_lst_hr').on('click', function() {
                console.log("Botón seleccionado hr");

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

                load_documents(valor1);

                // $('#lst_hr_0').modal('show');
            });

            $('.btn_lst_lyts').on('click', function() {
                console.log("Botón seleccionado lyts");

                var titulo_doc = $(this).data('valor');
                console.log(titulo_doc);
                var titulo_ = $(this).data('titulo');
                var _id_doc_lgl = $(this).data('id_doc_');

                $('#_id_tipo_doc_lgl').val(_id_doc_lgl);
                $('#_concept').val(titulo_doc);
                $('#titulo_docs_2').text(titulo_);


                var id_soli_l = $('#cod_reg_l').val();
                var concepto = $('#_concept').val();

                var titulo_modal = $('#titulo_docs').val();



                /*console.log(titulo_modal);
                console.log(concepto);*/

                load_documents_lyt(id_soli_l, titulo_doc)

                $('#lst_lyts').modal('show');
            });


            $('.btn_lst_docs').on('click', function() {
                console.log("Botón seleccionado");

                var tipo_doc = $(this).data('valor');
                var titulo_ = $(this).data('titulo');

                var _id_doc_lgl = $(this).data('id_doc_');

                var id_reg = $('#id_legal_solic').val();
                var id_cli = $(this).data('id_user_');

                var _id_cli_lgl = $('#id_client_l').val();

                $('#lst_docs_legal').modal('show');

                load_documents_legal_(id_reg, id_cli, tipo_doc, _id_cli_lgl, _id_doc_lgl)

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

                console.log('e?' + id_usu_soli);
                console.log('pop' + dni_usu_soli);

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


                var concept = $('#_concept_doc_0').val();
                var id_tipo_doc_ = $('#id_tipo_doc_lgl_0').val();

                $.ajax({
                    type: 'POST',
                    url: '../Controller/obtener_files_client.php',
                    data: {
                        _concept_doc: concept,
                        id_client: id_usu_soli,
                        dni_client: dni_usu_soli,
                        id_tipo_doc: id_tipo_doc_
                    },
                    success: function(response) {
                        var data = JSON.parse(response);

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
                                enlaceHtml += '<a href="' + ruta + nombreArchivo + '">' + nombreArchivo + '</a> &nbsp';

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



                var concept = $('#_concept_doc').val();
                var id_tipo_doc_ = $('#id_tipo_doc_lgl').val();

                var dni = '<?php echo $_SESSION['dni'] ?>';
                var id_cli = '<?php echo $_SESSION['id_usu'] ?>';

                $.ajax({
                    type: 'POST',
                    url: '../Controller/obtener_files_client.php',
                    data: {
                        _concept_doc: concept,
                        id_client: id_cli,
                        dni_client: dni,
                        id_tipo_doc: id_tipo_doc_
                    },
                    success: function(response) {
                        var data = JSON.parse(response);

                        var archivos = data.archivos;
                        var estado_doc = data.status_doc;


                        if (archivos && archivos.length > 0) {
                            var enlaceHtml = '';

                            archivos.forEach(function(archivo) {
                                var ruta = archivo.ruta;
                                var nombreArchivo = archivo.archivo;
                                var estado = archivo.estado;
                                var status_r = '';


                                enlaceHtml += '<a href="' + ruta + nombreArchivo + '">' + nombreArchivo + '</a> &nbsp';

                                if (estado == 500) {
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

</body>

</html>