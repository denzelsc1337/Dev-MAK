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
    <!-- Data Tables Pluggin -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini  sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">

        <?php include '../Vista/nav_bar_moduls.php' ?>

        <div class="content-wrapper">


            <div id="loader_uhd" class="mak_overlay" style="display: none;">
                <img src="../Vista/images/MAK_logo.png" alt="" class="fading-element">
            </div>

            <section class="content">
                <!-- <header class="header-mak">
                    <h1 class="title">¿Más de 2,000 propiedades <br> esperan por ti!</h1>
                </header> -->

                <?php include '../Vista/head-form.php' ?>

                <?php
                if ($_SESSION['tipo_usu'] != 1) {
                    //ocultar el del user y mostrar el del admin
                ?>


                    <section class="content body-mak mak-txt">
                        <div class="container">
                            <div class="b-title txt-center">Resumen Legal</div>
                            <p class="mak-txt b-text">¡Bienvenido <strong><?php echo $_SESSION['nom_usu'] . " " . $_SESSION['ape_usu'] ?></strong>! Para tener una buena experiencia con nuestro servicio legal es necesario brindar lo siguiente:</p>

                            <ul>
                                <li><strong>Hoja de Resumen (HR): </strong>Asegúrate de contar con la Hoja de Resumen actualizada.</li>
                                <li><strong>Predio Urbano (PU): </strong>Proporciona el Predio Urbano vigente para que podamos evaluar aspectos importantes de la ubicación y las regulaciones urbanas.</li>
                                <li><strong>Copia Literal: </strong>Adjunta una Copia Literal actualizada o Partida Registral de la propiedad.</li>
                                <li><strong>DNI: </strong>Para validar tu identidad y garantizar la seguridad, necesitamos una copia de tu Documento Nacional de Identidad (DNI).</li>
                            </ul>

                            <p class="mak-txt b-text">Estos documentos son esenciales para ofrecerte un servicio legal personalizado y eficiente.</p>



                            <div class="card-footer">
                                <div class="form-flex">
                                    <a href="../Dashboard.php" class="btn btn-mak mak-bg-sec">Retroceder</a>
                                    <a href="legal_.php" class="btn btn-mak mak-bg">Continuar</a>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php
                }
                ?>


                <div class="d-flex overflow-hidden w-100 pddt-5">
                    <div class="mak-content-slide">

                        <section class="mak-txt position-relative body-slide" data-content="legal">


                            <form id="updt_files" method="POST" enctype="multipart/form-data">
                                <!-- <form id="updt_files" method="POST" action="../Controller/Add_Solic_Legal.php"> -->
                                <div class="container mt-5">

                                    <div class="arrow-right">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="row" hidden>
                                                <input type="text" class="form-control" id="id_legal_solic" name="id_legal_solic" readonly>
                                                <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $_SESSION['id_usu']; ?>">
                                                <input type="text" class="form-control" id="dni_user_l" name="dni_user_l" value="<?php echo $_SESSION['dni']; ?>">
                                                <input type="text" class="form-control" id="cod_reg_l" name="cod_reg_l">
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
                                                            <input type="text" class="form-mak" id="data_direcion_1" name="data_direccion_1" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <textarea id="rutas_doscs" name="rutas_doscs" rows="5" cols="50" hidden></textarea>
                                            </div>
                                            <div class="col-md-6 mb-5">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">HR:</label>
                                                            <div class="col-md-8 d-flex">
                                                                <div class="section-input">
                                                                    <div class="upload-file">
                                                                        <label class="upld-file" data-valor="HR" data-bs-toggle="modal" data-bs-target="#modal_archive_HR">Seleccionar archivos.</label>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group-append">

                                                                    <button type="button" class="btn btn-rounded btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="H_R" data-titulo="Hoja de Resumen" data-id_doc_="1"><i class="cursor fa-solid fa-eye"></i></button>

                                                                    <button type="button" class="btn btn-rounded btn_lst_lyts btn_lst_lyts_0" data-toggle="modal" data-target="#lst_lyts" data-valor="H_R" data-titulo="Hoja de Resumen" data-id_doc_="1" data-testeo="ola" style="display:none"><i class="cursor fa-solid fa-pencil"></i></button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">PU:</label>
                                                            <div class="col-md-8 d-flex">
                                                                <div class="section-input">
                                                                    <div class="upload-file">
                                                                        <label class="upld-file" data-bs-toggle="modal" data-bs-target="#modal_archive_PU">Seleccionar archivos.</label>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group-append">

                                                                    <button type="button" class="btn btn-rounded btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="P_U" data-titulo="Predio Urbano" data-id_doc_="2"><i class="cursor fa-solid fa-eye"></i></button>

                                                                    <button type="button" class="btn btn-rounded  btn_lst_lyts btn_lst_lyts_0" data-toggle="modal" data-target="#lst_lyts" data-valor="P_U" data-titulo="Predio Urbano" data-id_doc_="2" style="display:none"><i class="cursor fa-solid fa-pencil"></i></button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <label class="col-sm-4 col-form-label">COPIA LITERAL:</label>
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
                                                            <label class="col-sm-4 col-form-label">DNI:</label>
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

                                    <div class="card-footer card-footer_">
                                        <div class="form-flex">
                                            <button type="submit" class="btn btn-mak mak-bg-sec" id="btn_save_borrador" name="btn_save_borrador">Guardar</button>
                                            <button type="submit" class="btn btn-mak mak-bg-sec" id="btn_updt_borrador" name="btn_updt_borrador" style="display: none;">Actualizar</button>
                                            <button type="submit" class="btn btn-mak mak-bg" id="btn_save_solic" name="btn_save_solic">Enviar</button>
                                            <button type="submit" class="btn btn-mak mak-bg" id="btn_updt_solic" name="btn_updt_solic" style="display: none;">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>

                        <section class="mak-txt position-relative body-slide" data-content="historico">
                            <div class="container">
                                <h1 class="text-center">HISTORICO</h1>
                                <div class="row">

                                    <?php


                                    if ($_SESSION['tipo_usu'] == 1) {
                                        //ocultar el del user y mostrar el del admin
                                    ?>


                                        <div class="col-sm-12 p-0">
                                            <table id="table" class="table table-responsive table-borderless" style="width: 100%;">
                                                <thead class="">
                                                    <tr>
                                                        <th></th>
                                                        <th>NOMBRES</th>
                                                        <th>CORREO</th>
                                                        <th>FECHA</th>
                                                        <th>ESTADO</th>
                                                        <th hidden>id_user</th>
                                                        <th>DNI</th>
                                                        <th>COMENTARIO</th>
                                                        <th>OPCIONES</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($list_solic_legal as $lst_legal_d) : ?>
                                                        <tr>
                                                            <td><?php $lst_legal_d[0] ?></td>
                                                            <td><?php echo $lst_legal_d[1] ?></td>
                                                            <td><?php echo $lst_legal_d[2] ?></td>
                                                            <td><?php echo $lst_legal_d[3] ?></td>
                                                            <td>
                                                                <?php
                                                                $estado = $lst_legal_d[4];
                                                                switch ($estado) {
                                                                    case '10':
                                                                        echo '<span class="badge rounded-pill bg-info">Pendiente</span>';
                                                                        break;
                                                                    case '20':
                                                                        echo '<span class="badge rounded-pill bg-warning text-dark">En revisión</span>';
                                                                        break;
                                                                    case '30':
                                                                        echo '<span class="badge rounded-pill bg-secondary">Borrador</span>';
                                                                        break;
                                                                    case '40':
                                                                        echo '<span class="badge rounded-pill bg-danger">Rechazado</span>';
                                                                        break;
                                                                    case '90':
                                                                        echo '<span class="badge rounded-pill bg-success">Finalizado</span>';
                                                                        break;
                                                                    default:
                                                                        echo '<span class="badge rounded-pill bg-lightblue">Procesando</span>';
                                                                        break;
                                                                }
                                                                ?>
                                                            </td>
                                                            <td hidden><?php echo $lst_legal_d[5] ?></td>
                                                            <td><?php echo $lst_legal_d[6] ?></td>
                                                            <td><?php echo $lst_legal_d[7] ?></td>
                                                            <td>
                                                                <div class="row justify-content-evenly">

                                                                    <div class="col-sm-4 justify-content-center">
                                                                        <div class="options get_data_soli_legl" data-cod_solic="<?php echo $lst_legal_d[0] ?>" data-cod_client="<?php echo $lst_legal_d[5] ?>">
                                                                            <button type="button" class="btn btn-rounded" id="">
                                                                                <i class="fa-solid fa-eye"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    <?php
                                    } else {
                                    ?>

                                        <div class="col-sm-12">
                                            <table id="table" class="table table-responsive table-borderless" style="width: 100%;">
                                                <thead class="">
                                                    <tr>
                                                        <th></th>
                                                        <th>NOMBRE CLIENTE</th>
                                                        <th>APELLIDO CLIENTE</th>
                                                        <th>ASESOR</th>
                                                        <th>CORREO</th>
                                                        <th>FECHA</th>
                                                        <th>ESTADO</th>
                                                        <th hidden>id_user</th>
                                                        <th>DNI</th>
                                                        <th>COMTENTARIO</th>
                                                        <th>OPCIONES</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $list_solic_legal_client = $oLegal->listadoSolicDocsLegal_clients($_SESSION['id_usu'], $_SESSION['dni']);

                                                    foreach ($list_solic_legal_client as $lst_legal_d) :
                                                        //print_r($lst_legal_d)
                                                    ?>
                                                        <tr>
                                                            <td><?php $lst_legal_d[0] ?></td>
                                                            <td><?php echo $lst_legal_d[1] ?></td>
                                                            <td><?php echo $lst_legal_d[2] ?></td>
                                                            <td><?php echo $lst_legal_d[3] ?></td>
                                                            <td><?php echo $lst_legal_d[4] ?></td>
                                                            <td><?php echo $lst_legal_d[5] ?></td>
                                                            <td>
                                                                <?php
                                                                $estado = $lst_legal_d[6];
                                                                //echo $estado; 
                                                                switch ($estado) {
                                                                    case '10':
                                                                        echo '<span class="badge rounded-pill bg-info">Pendiente</span>';
                                                                        break;
                                                                    case '20':
                                                                        echo '<span class="badge rounded-pill bg-warning text-dark">En revision</span>';
                                                                        break;
                                                                    case '30':
                                                                        echo '<span class="badge rounded-pill bg-secondary">Borrador</span>';
                                                                        break;
                                                                    case '90':
                                                                        echo '<span class="badge rounded-pill bg-success">Finalizado</span>';
                                                                        break;
                                                                    default:
                                                                        echo '<span class="badge rounded-pill bg-lightblue">Procesando</span>';
                                                                        break;
                                                                }
                                                                ?>
                                                            </td>
                                                            <td hidden><?php echo $lst_legal_d[7] ?></td>
                                                            <td><?php echo $lst_legal_d[8] ?></td>
                                                            <td><?php echo $lst_legal_d[9] ?></td>
                                                            <td>
                                                                <div class="row justify-content-evenly">
                                                                    <?php if ($lst_legal_d[6] == 30) { ?>
                                                                        <div class="options show_data_soli_legl" data-cod_solic=" <?php echo $lst_legal_d[0] ?>" data-cod_client="<?php echo $lst_legal_d[7] ?>">
                                                                            <button type="button" class="btn btn-rounded arrow-left_1" id="">
                                                                                <i class="fa-solid fa-pencil"></i>
                                                                            </button>
                                                                        </div>
                                                                    <?php  } else { ?>
                                                                        <!--vista usuario -->

                                                                        <?php if ($lst_legal_d[6] == 90) {

                                                                            $ruta = "../Informes Legal/{$lst_legal_d[0]}/{$_SESSION['dni']}/";

                                                                            $archivos = scandir($ruta);
                                                                            $archivoMasReciente = null;
                                                                            $fechaMasReciente = 0;

                                                                            foreach ($archivos as $archivo) {
                                                                                if ($archivo != "." && $archivo != "..") {
                                                                                    $rutaArchivo = $ruta . '/' . $archivo;
                                                                                    $fechaArchivo = filemtime($rutaArchivo);

                                                                                    if ($fechaArchivo > $fechaMasReciente) {
                                                                                        $archivoMasReciente = $archivo;
                                                                                        $fechaMasReciente = $fechaArchivo;
                                                                                    }
                                                                                }
                                                                            }

                                                                            // if ($archivoMasReciente !== null) {
                                                                            //     echo "El archivo más reciente es: " . $archivoMasReciente;
                                                                            // } else {
                                                                            //     echo "No se encontraron archivos en la carpeta.";
                                                                            // }

                                                                        ?>


                                                                            <div class="options" title="Descargar archivo">
                                                                                <a target="_blank" download="<?php echo $archivoMasReciente ?>" href="../Informes Legal/<?php echo $lst_legal_d[0] . '/' . $_SESSION['dni'] . '/' . $archivoMasReciente ?>">
                                                                                    <i class="fa-solid fa-download"></i>
                                                                                </a>
                                                                            </div>
                                                                        <?php } else { ?>
                                                                            <div class="options get_data_soli_legl" data-cod_solic=" <?php echo $lst_legal_d[0] ?>" data-cod_client="<?php echo $lst_legal_d[7] ?>">
                                                                                <button type="button" class="btn btn-rounded" id="">
                                                                                    <i class="fa-solid fa-eye"></i>
                                                                                </button>
                                                                            </div>

                                                                        <?php } ?>
                                                                    <?php } ?>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    <?php
                                        //ocultar el del admin y mostrar el del user
                                    }
                                    ?>

                                </div>
                            </div>
                        </section>

                        <section class="mak-txt position-relative body-slide" data-content="files">


                            <form method="POST" id="updt_status">

                                <div class="container">
                                    <div class="card-body">

                                        <div class="arrow-left arrow-left_1">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-6 pt-5">
                                                <?php

                                                if ($_SESSION['tipo_usu'] == 1) {
                                                    //habilitar al admin
                                                ?>
                                                    <div hidden>
                                                        <input type="text" class="form-mak" id="id_solic_doc" name="id_solic_doc" readonly>
                                                        <input type="text" class="form-mak" id="id_client_l" readonly>
                                                        <input type="text" class="form-mak" id="dni_client_l" readonly>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="mak-txt">Nombres</label>
                                                                <input type="text" class="form-mak" id="data_names_" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="mak-txt">Apellidos</label>
                                                                <input type="text" class="form-mak" id="data_lnames_" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="mak-txt">Correo</label>
                                                                <input type="text" class="form-mak" id="data_direcion_2" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" id="_coment">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="mak-txt">Comentario</label>
                                                                <textarea name="coment_" id="coment_" onkeyup="habilitarBoton()"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>


                                                <?php
                                                } else {
                                                    //deshabilitar al user
                                                ?>

                                                    <div hidden>
                                                        <input type="text" class="form-mak" id="id_legal_solic" name="id_legal_solic" readonly>
                                                        <input type="text" class="form-mak" id="id_client_l" readonly>
                                                        <input type="text" class="form-mak" id="dni_client_l" readonly>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="mak-txt">Nombres</label>
                                                                <input type="text" class="form-mak" id="data_names_" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="mak-txt">Apellidos</label>
                                                                <input type="text" class="form-mak" id="data_lnames_" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="mak-txt">Correo</label>
                                                                <input type="text" class="form-mak" id="data_direcion_3" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="mak-txt">Comentario</label>
                                                                <textarea name="coment_" id="coment_" readonly></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>

                                            <div class="col-md-6">

                                                <?php if ($_SESSION['tipo_usu'] == 1) { ?>
                                                    <div class="d-flex justify-content-end pb-3">
                                                        <div class="input-select">
                                                            <input type="text" id="" name="" class="textBox" readonly>
                                                            <input type="text" id="status_solic_legal_cbo" name="status_solic_legal_cbo" hidden readonly>
                                                            <div class="select-options">
                                                                <div class="bg-info" data-value="10">Pendiente</div>
                                                                <div class="bg-warning" data-value="20">En revisión</div>
                                                                <!-- <div class="bg-secondary" data-value="30">Borrador</div> -->
                                                                <!-- <div class="bg-danger" data-value="40">Rechazado</div> -->
                                                                <div class="bg-success" data-value="90">Finalizado</div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                <?php } ?>

                                                <div class="card-body" id="carpeta_l">
                                                    <div class="row card-resume">
                                                        <div class="col-sm-2">
                                                            <div class="lgl-modal-num">
                                                                1
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 brd-rght-blue d-flex align-items-center">
                                                            <span class="mak-txt bld">Hoja de Resumen</span>
                                                        </div>
                                                        <div class="col-sm-2 justify-content-center">
                                                            <div class="options btn-rounded  btn_lst_docs btn_lst_docs_0" data-valor="H_R" data-titulo="Hoja de Resumen" data-id_doc_="1" data-id_user_="<?php echo $_SESSION['dni'] ?>">
                                                                <button type="button" class="btn">
                                                                    <i class="cursor fa-solid fa-eye"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row card-resume">
                                                        <div class="col-sm-2">
                                                            <div class="lgl-modal-num">
                                                                2
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 brd-rght-blue d-flex align-items-center">
                                                            <span class="mak-txt bld">Predio Urbano</span>
                                                        </div>
                                                        <div class="col-sm-2 justify-content-center">
                                                            <div class="options  btn-rounded  btn_lst_docs btn_lst_docs_0" data-toggle="modal" data-target="#lst_docs_legal" data-valor="P_U" data-titulo="Predio Urbano" data-id_doc_="2" data-id_user_="<?php echo $_SESSION['dni'] ?>">
                                                                <button type="button" class="btn">
                                                                    <i class="cursor fa-solid fa-eye"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row card-resume">
                                                        <div class="col-sm-2">
                                                            <div class="lgl-modal-num">
                                                                3
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 brd-rght-blue d-flex align-items-center">
                                                            <span class="mak-txt bld">Copia Literal</span>
                                                        </div>
                                                        <div class="col-sm-2 justify-content-center">
                                                            <div class="options btn-rounded  btn_lst_docs btn_lst_docs_0" data-toggle="modal" data-target="#lst_docs_legal" data-valor="C_L" data-titulo="Copia Literal" data-id_doc_="3" data-id_user_="<?php echo $_SESSION['dni'] ?>">
                                                                <button type="button" class="btn">
                                                                    <i class="cursor fa-solid fa-eye"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row card-resume">
                                                        <div class="col-sm-2">
                                                            <div class="lgl-modal-num">
                                                                4
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 brd-rght-blue d-flex align-items-center">
                                                            <span class="mak-txt bld">DNI</span>
                                                        </div>
                                                        <div class="col-sm-2 justify-content-center">
                                                            <div class="options btn-rounded  btn_lst_docs btn_lst_docs_0" data-toggle="modal" data-target="#lst_docs_legal" data-valor="DNI" data-titulo="DNI" data-id_doc_="4" data-id_user_="<?php echo $_SESSION['dni'] ?>">
                                                                <button type="button" class="btn">
                                                                    <i class="cursor fa-solid fa-eye"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>


                                    </div>

                                    <?php

                                    if ($_SESSION['tipo_usu'] == 1) {
                                        //habilitar al admin
                                    ?>
                                        <div class="card-footer">
                                            <div class="form-flex">
                                                <button type="button" class="btn btn-mak mak-bg-sec" id="btn_upld_solic_l" name="btn_upld_solic_l" data-bs-toggle="modal" data-bs-target="#modal_upld_File" style="display: none;">Subir archivo</button>
                                                <button type="submit" class="btn btn-mak mak-bg" id="btn_updt_solic_l" name="btn_updt_solic_l" disabled>Guardar Solicitud</button>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
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
    <div class="modal fade" id="modal_archive_HR" tabindex="-1" role="dialog" aria-labelledby="modal_archive_HRLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
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

                                <form id="updt_HR" method="POST" enctype="multipart/form-data">
                                    <!-- <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data"> -->

                                    <div class="content-file flex flex-column">

                                        <label>H.R</label>
                                        <div hidden>
                                            <input type="text" class="form-control" id="dni_usu_0" name="dni_usu_0" value="<?php echo $_SESSION['dni']; ?>">
                                            <input type="text" class="form-control" id="id_cli_0" name="id_cli_0" value="<?php echo $_SESSION['id_usu']; ?>">
                                            <input type="text" class="form-control" id="tipo_doc_0" name="tipo_doc_0" value="1">
                                            <input type="text" name="cod_reg_" id="cod_reg_">
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

                                        <!-- <div>
                                            <label id="buttonFile" class="btn btn-mak mak-bg buton-file">Seleccionar archivos</label>
                                            <input class="upload" type="file" id="hr_s" name="hr_s[]" multiple hidden>
                                        </div> -->
                                        <div class="card-footer">
                                            <div class="form-flex">
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_updt_hr" name="btn_updt_hr" style="display: none;" disabled>Actualizar</button>
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_save_hr" name="btn_save_hr" disabled>Registrar</button>

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
    <!-- modal para borradores -->
    <div class="modal fade" id="lst_lyts" tabindex="-1" role="dialog" aria-labelledby="lst_lyts" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="title-m" id="titulo_docs_2"></h1>
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

                        <div class="col-sm-12" id="descarga_archivo_l">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal para borradores -->
    <!-- modal para los archivos de Solicitud -->
    <div class="modal fade" id="lst_docs_legal" tabindex="-1" role="dialog" aria-labelledby="lst_docs_legal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="title-m" id="titulo_docs"></h1>
                    <img class="row margin" src="../Vista/assets/loading_uhd.gif" id="loader_soli" style="display:none;">

                    <form id="statusChange" method="POST" enctype="multipart/form-data">

                        <div class="row margin" id="lst_docs_lgl">

                            <div class="col-sm-12" id="descarga_archivo_p">

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal para los archivos de Solicitud -->
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

                                <form id="updt_PU" method="POST" enctype="multipart/form-data">
                                    <!-- <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data"> -->

                                    <div class="content-file flex flex-column">
                                        <label>P.U</label>
                                        <div hidden>
                                            <input type="text" class="form-control" id="dni_usu_1" name="dni_usu_1" value="<?php echo $_SESSION['dni']; ?>">
                                            <input type="text" class="form-control" id="id_cli_1" name="id_cli_1" value="<?php echo $_SESSION['id_usu']; ?>">
                                            <input type="text" class="form-control" id="tipo_doc_1" name="tipo_doc_1" value="2">
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
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_updt_pu" name="btn_updt_pu" style="display: none;" disabled>Actualizar</button>
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_save_pu" name="btn_save_pu" disabled>Registrar</button>

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
                                <form id="updt_CL" method="POST" enctype="multipart/form-data">
                                    <!-- <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data"> -->

                                    <div class="content-file flex flex-column">
                                        <label>Copia Literal</label>
                                        <div hidden>
                                            <input type="text" class="form-control" id="dni_usu_2" name="dni_usu_2" value="<?php echo $_SESSION['dni']; ?>">
                                            <input type="text" class="form-control" id="id_cli_2" name="id_cli_2" value="<?php echo $_SESSION['id_usu']; ?>">
                                            <input type="text" class="form-control" id="tipo_doc_2" name="tipo_doc_2" value="3">
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
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_updt_cl" name="btn_updt_cl" style="display: none;" disabled>Actualizar</button>
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_save_cl" name="btn_save_cl" disabled>Registrar</button>

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
                                <form id="updt_DNI" method="POST" enctype="multipart/form-data">
                                    <!-- <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data"> -->
                                    <div class="content-file flex flex-column">
                                        <label>DNI</label>
                                        <div hidden>
                                            <input type="text" class="form-control" id="dni_usu_3" name="dni_usu_3" value="<?php echo $_SESSION['dni']; ?>">
                                            <input type="text" class="form-control" id="id_cli_3" name="id_cli_3" value="<?php echo $_SESSION['id_usu']; ?>">
                                            <input type="text" class="form-control" id="tipo_doc_3" name="tipo_doc_3" value="4">
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
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_updt_dni" name="btn_updt_dni" style="display: none;" disabled>Actualizar</button>
                                                <button type="submit" class="btn btn-mak mak-bg buton-file" id="btn_save_dni" name="btn_save_dni" disabled>Registrar</button>

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

    <!-- Modal upldFile -->
    <div class="modal fade" id="modal_upld_File" tabindex="-1" role="dialog" aria-labelledby="modal_upld_File" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_upld_File">Subir archivo</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <form id="adding_legal_file" method="POST" enctype="multipart/form-data">

                    <div class="modal-body">
                        <div hidden>
                            <input type="text" name="id_reg_lgl" id="id_reg_lgl">
                            <input type="text" name="dni_solic_lgl" id="dni_solic_lgl">
                        </div>
                        <div class="form-group text-center">
                            <img class="row margin" src="../Vista/assets/loading_uhd.gif" id="loader_add_legal" style="display:none;">
                            <div class="adding_legal_content">
                                <label>Archivo del informe legal</label>
                                <br>
                                <input type="file" name="legal_files[]" id="legal_files" onkeyup="habilitarBoton()">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> -->
                        <button type="button" class="btn btn-secondary" id="limpiarBoton">Limpiar</button>
                        <button type="submit" name="btn_save_legal_file" id="btn_save_legal_file" class="btn mak-bg">Subir</button>
                    </div>

                    <!-- <div id="message_aprob"></div> -->
                </form>

            </div>
        </div>
    </div>
    <!-- Modal upldFile -->
    <!-- MODALES -->

    <!-- REQUIRED SCRIPTS -->
    <script src="../Vista/assets/functions.js"></script>


    <!-- jQuery -->
    <script src="../Vista/plugins/jquery/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Data Tables Pluggin -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap4.min.js"></script>


    <script>
        $(document).ready(function() {

            $('.btn_subir_1').on('click', function() {
                $('#upload_doc').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                $('#id_doc_type').val(data[1]);
                $('#desc_doc').val(data[2].trim());
            });


            $('.btn_ver_files').on('click', function() {
                $('#lst_files').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                $('#id_usu_soli').val(data[4]);
                $('#dni_usu_soli').val(data[5]);
            });


            $('.btn_ver_files_2').on('click', function() {
                $('#lst_files_2').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

            });

            function load_documents(dataValue) {

                var dni = '<?php echo $_SESSION['dni'] ?>';
                var id_cli = '<?php echo $_SESSION['id_usu'] ?>';
                var _id_tipo_doc = $('#_id_tipo_doc_lgl').val();

                var titulo_ = $(this).data('titulo');


                var _id_tipo_doc = $('#_id_tipo_doc_lgl').val();
                var docCode = "";

                if (_id_tipo_doc === "1") {
                    docCode = "H_R";
                } else if (_id_tipo_doc === "2") {
                    docCode = "P_U";
                }

                $.ajax({
                    type: 'POST',
                    url: '../Controller/obtener_files.php',
                    data: {
                        id_client: id_cli,
                        dni_client: dni,
                        id_tipo_doc: _id_tipo_doc,
                        valor: dataValue,
                        bla: docCode
                    },
                    success: function(response) {


                        var data = JSON.parse(response);

                        // console.log(data);

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

                                $('#titulo_docs__').text(titulo_);

                                var delete_btn = $('<button>').text('Eliminar').attr('class', 'btn btn-block btn-danger');


                                enlaceHtml += `

            <div class="row d-flex justify-content-between align-center mb-4 w-100">
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
                        <div>
                            <button id="" type="button" class="btn"> <i class="cursor fa-solid fa-download"></i></button>
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
                    complete: function() {

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

                        // console.log(response);
                        var data = JSON.parse(response);

                        var archivos = data.archivos;
                        var estado_doc = data.status_doc;

                        var cod_doc_, ruta_doc, nom_file;
                        var cont = 1;

                        if (archivos && archivos.length > 0) {
                            var enlaceHtml = '';

                            archivos.forEach(function(archivo) {

                                // console.log(archivo);

                                var ruta = archivo.ruta;
                                var nombreArchivo = archivo.archivo;
                                var estado = archivo.estado;
                                var id_doc_ = archivo.id_doc;
                                var status_r = '';


                                var delete_btn = $('<button>').text('Eliminar').attr('class', 'btn btn-block btn-danger');


                                enlaceHtml += `

                                            <div class="row d-flex justify-content-evenly align-center mb-4 w-100">
                                                <div class="col-sm-1">
                                                    <div class="lgl-modal-num">
                                                        ${cont++}
                                                    </div>
                                                </div>

                                                <div class="col-sm-8 archive">
                                                    <img src="#" id="loader" style="display: none;">
                                                    <a href="${ruta}${nombreArchivo}" target="_blank">${nombreArchivo}</a>
                                                </div>

                                                <div class="col-sm-1 tw-modal-ots">
                                                    <div class="row">
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
                        $("#loader_soli").show();
                        $("#lst_docs_lgl").hide();
                        //$("#docs_val").hide();

                    },
                    success: function(response) {
                        var data = JSON.parse(response);
                        // console.log(data);

                        var archivos = data.archivos;
                        // var estado_doc = data.archivos[0].estado;
                        // var estado_doc = data.status_doc;
                        // console.log(estado_doc);

                        var dbInfo = data.base_de_datos;
                        var estado_db = data.status_doc_;

                        // var id_doc = data.base_de_datos[0].id_document;

                        // console.log(dbInfo)
                        var cod_doc_, ruta_doc, nom_file;
                        var cont = 1;

                        setTimeout(function() {


                            // if (estado_db === 'Carpeta no encontrada.') {
                            if (archivos && archivos.length > 0) {
                                var enlaceHtml = '';

                                archivos.forEach(function(archivo) {
                                    // console.log(archivo);

                                    var ruta = archivo.ruta;
                                    var nombreArchivo = archivo.archivo;
                                    var estado = archivo.estado;
                                    var id_doc_ = archivo.id_doc_;
                                    // console.log(id_doc_);
                                    var status_r = '';



                                    var delete_btn = $('<button>').text('Eliminar').attr('class', 'btn btn-block btn-danger');
                                    // var estadoHtml = estado === 'estado_desconocido' ? '' : `<span class="estado-archivo">${estado}</span>`;
                                    var estadoHtml = estado;
                                    // console.log(estadoHtml);
                                    var estadoDbHtml = estado_db ? `<span class="estado-db">${estado_db}</span>` : '';

                                    //arroshi recontra tarao
                                    enlaceHtml += `
                                   
                                    <div hidden>
                                        <input type="text" class="form-mak" id="_id_doc_" value="${id_doc_}" readonly>
                                    </div>

                                    <div class="row d-flex justify-content-evenly align-center mb-4 w-100">
                                        <div class="col-sm-1">
                                            <div class="lgl-modal-num">
                                                ${cont++}
                                            </div>
                                        </div>

                                        <div class="col-sm-6 archive">
                                            <img src="#" id="loader" style="display: none;">
                                            <a href="${ruta}${nombreArchivo}">${nombreArchivo}</a>
                                        </div>

                                        <div class="col-sm-3 tw-modal-ots p-0">

                                            <div class="d-flex content_status">
                                            <?php if ($_SESSION['tipo_usu'] == 1) { ?>
                                                ${
                                                estadoHtml === '500'
                                                    ? `
                                                    <select id="_slct_status" name="_slct_status" class="form-mak">
                                                        <option value="500" selected>Pendiente</option>
                                                        <option value="200">Revisado</option>
                                                        <option value="100">Rechazado</option>
                                                        <option value="1">Aceptado</option>
                                                    </select>
                                                    `
                                                : estadoHtml === '200'
                                                    ? `
                                                    <select id="_slct_status" name="_slct_status" class="form-mak">
                                                        <option value="500">Pendiente</option>
                                                        <option value="200" selected>Revisado</option>
                                                        <option value="100">Rechazado</option>
                                                        <option value="1">Aceptado</option>
                                                    </select>
                                                    `
                                                : estadoHtml === '100'
                                                    ? `
                                                    <select id="_slct_status" name="_slct_status" class="form-mak">
                                                        <option value="500">Pendiente</option>
                                                        <option value="200">Revisado</option>
                                                        <option value="100" selected>Rechazado</option>
                                                        <option value="1">Aceptado</option>
                                                    </select>
                                                    `
                                                : `
                                                    <select id="_slct_status" name="_slct_status" class="form-mak">
                                                        <option value="500">Pendiente</option>
                                                        <option value="200">Revisado</option>
                                                        <option value="100">Rechazado</option>
                                                        <option value="1" selected>Aceptado</option>
                                                    </select>
                                                    `
                                                }
                                                <?php } else { ?>
                                                ${

                                                    estadoHtml === '500'
                                                    ? `
                                                    <span class="badge rounded-pill bg-info">Pendiente</span>
                                                    `
                                                    : estadoHtml === '200'
                                                    ? `
                                                    <span class="badge rounded-pill bg-warning">Revisado</span>
                                                    `
                                                    : estadoHtml === '100'
                                                    ? `
                                                    <span class="badge rounded-pill bg-danger">Rechazado</span>
                                                    `
                                                    :
                                                    `
                                                    <span class="badge rounded-pill bg-success">Finalizado</span>
                                                    `
                                                }
                                                <?php } ?>

                                                <div class="d-flex">
                                                    <div hidden>
                                                        <input id="ruta_doc_i" type="text" value="${ruta}" readonly>
                                                        <input id="ruta_archivo_i" type="text" value="${nombreArchivo}" readonly>
                                                        <input id="cod_doc_i" type="text" value="${id_doc_}" readonly>
                                                    </div>
                                                <?php if ($_SESSION['tipo_usu'] == 1) { ?>
                                                    <div class="inputs">
                                                        <div class="options">
                                                            <button id="dlt_file" type="button" class="btn dlt_file"><i class="cursor fa-solid fa-trash"></i></button>
                                                        </div>
                                                    </div>
                                                    <?php } else { ?>
                                                    <div class="options">
                                                        <a href="${ruta + nombreArchivo}" target="_blank" class="mak-txt" title="Descargar archivo"><i class="cursor fa-solid fa-download"></i></a>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    `;

                                });

                                document.getElementById('lst_docs_lgl').innerHTML = enlaceHtml;

                            } else {
                                document.getElementById('lst_docs_lgl').textContent = 'Archivo no encontrado';
                            }

                            // console.log('Estado de archivos:', estado_doc);
                            // console.log('Estado de la base de datos:', estado_db);

                        }, 1500);



                    },
                    complete: function() {
                        setTimeout(() => {
                            $("#loader_soli").hide();
                            $("#lst_docs_lgl").show();
                        }, 1500);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            }


            function eliminarArchivo($deleteBtn, cod_doc_, ruta_doc, ruta_archivo, docCode) {

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
                        // console.log(response);
                        // console.log("archivo eliminado con ID: " + ruta_doc + ruta_archivo);

                        $('#loader_erase_hr').show();
                        $('#descarga_archivo_l').hide();
                        // $deleteBtn.closest('.modal').modal('hide');

                        // Cargar documents
                        load_documents(docCode);

                        setTimeout(() => {

                        }, 2000);
                    },
                    complete: function() {
                        setTimeout(function() {
                            $('#loader_erase_hr').hide();
                            $('#descarga_archivo_l').show();
                            // if (ruta_doc == "../Documentos Legal/" + dni + "/H_R/") {
                            //     console.log("HR")
                            //     load_documents('H_R');
                            // } else if (ruta_doc == "../Documentos Legal/" + dni + "/P_U/") {
                            //     console.log("PU")
                            //     load_documents('P_U');
                            // } else if (ruta_doc == "../Documentos Legal/" + dni + "/C_L/") {
                            //     console.log("CL")
                            //     load_documents('C_L');
                            // } else if (ruta_doc == "../Documentos Legal/" + dni + "/DNI/") {
                            //     console.log("DNI")
                            //     load_documents('DNI');
                            // }
                        }, 2000);

                    }
                });
            }

            $(document).on('click', '.dlt_file', function() {
                var $this = $(this);
                // console.log("probando botón");

                var confirmar_ = window.confirm('¿Estás seguro de que deseas eliminar este archivo?');

                if (confirmar_) {
                    var $parentDiv = $(this).closest('.inputs').parent();

                    var cod_doc_ = $parentDiv.find('#cod_doc_i').val();
                    var ruta_doc = $parentDiv.find('#ruta_doc_i').val();
                    var ruta_archivo = $parentDiv.find('#ruta_archivo_i').val();


                    eliminarArchivo($this, cod_doc_, ruta_doc, ruta_archivo);



                    // console.log("archivo eliminado");
                }
                // else {
                // console.log("cancelado");
                // }
            });


            $('.btn_lst_hr').on('click', function() {
                // console.log("Botón seleccionado");

                var valor1 = $(this).data('valor');
                var dataValue = $(this).data('valor');
                var titulo_ = $(this).data('titulo');
                var _id_doc_lgl = $(this).data('id_doc_');

                $('#_id_tipo_doc_lgl').val(_id_doc_lgl);
                $('#_concept').val(valor1);
                $('#titulo_docs').text(titulo_);

                var concepto = $('#_concept').val();

                var titulo_modal = $('#titulo_docs').val();



                /*console.log(titulo_modal);
                console.log(concepto);*/

                load_documents(titulo_);

                // $('#lst_hr_0').modal('show');
            });

            $('.btn_lst_lyts').on('click', function() {
                // console.log("Botón seleccionado");

                var titulo_doc = $(this).data('valor');
                var titulo_ = $(this).data('titulo');
                var _id_doc_lgl = $(this).data('id_doc_');
                var testeo = $(this).data('testeo');

                $('#_id_tipo_doc_lgl').val(_id_doc_lgl);
                $('#_concept').val(titulo_doc);
                $('#titulo_docs_2').text(titulo_);


                var id_soli_l = $('#cod_reg_l').val();
                var concepto = $('#_concept').val();

                var titulo_modal = $('#titulo_docs').val();

                /*console.log(titulo_modal);
                console.log(concepto);*/

                load_documents_lyt(id_soli_l, titulo_doc);

            });


            $('.btn_lst_docs').on('click', function() {


                var id_reg = $('#id_legal_solic').val();
                var tipo_doc = $(this).data('valor');
                var _titulo = $(this).data('titulo');
                var _id_cli_lgl = $('#id_client_l').val();
                var _id_doc_lgl = $(this).data('id_doc_');

                var _dni_cli_lgl = $('#dni_client_l').val();
                var titulo_modal = $('#titulo_docs').text(_titulo);

                // $('#_id_doc_').val(_id_cli_lgl);

                ///////
                // console.log(tipo_doc);
                // console.log(_titulo);
                // console.log(_id_cli_lgl);
                // console.log(_id_doc_lgl);

                // console.log(_dni_cli_lgl);
                // console.log(titulo_modal);



                load_documents_legal_(id_reg, _dni_cli_lgl, tipo_doc, _id_cli_lgl, _id_doc_lgl)

                $('#lst_docs_legal').modal('show');


            });


            //codigo para el admin y ver los documentos de cada usuario

            $('.btn_ver_tipos_0').on('click', function() {
                // console.log("test");

                $('#lst_docs_1').modal('show');

                //valores de los inputs del modal lst_files
                var id_usu_soli = $('#id_usu_soli').val();
                var dni_usu_soli = $('#dni_usu_soli').val();

                //valores a los inputs en el modal lst_docs_1
                $('#lst_docs_1').find('#id_client_0').val(id_usu_soli);
                $('#lst_docs_1').find('#dni_client_0').val(dni_usu_soli);

                // console.log('e?' + id_usu_soli);
                // console.log('pop' + dni_usu_soli);

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                // console.log(data);


                var id_doc_lgl_0 = $(this).data('id_doc');
                var nom_doc_lgl_0 = $(this).data('nom_doc');

                // console.log(id_doc_lgl_0);
                // console.log(nom_doc_lgl_0);

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
                                    enlaceHtml += '<option value=""selected>Pendientes</option>';
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

                // console.log(id_doc_lgl);
                // console.log(nom_doc_lgl);

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

        });
    </script>

    <script>
        const makContentSlide = document.querySelector(".mak-content-slide");
        const goLeft = document.querySelector(".arrow-left");
        const goLeft_1 = document.querySelectorAll(".arrow-left_1");
        const goRight = document.querySelector(".arrow-right");
        const goDetails = document.querySelectorAll(".get_data_soli_legl");
        const goUpdate = document.querySelectorAll(".show_data_soli_legl");


        makContentSlide.addEventListener("keydown", function(event) {
            if (event.keyCode === "Tab") {
                // Previene la acción predeterminada de "Tab"
                event.preventDefault();
            }
            if (event.keyCode === 9) {
                // Previene la acción predeterminada de "Tab"
                event.preventDefault();
            }
        });

        document.addEventListener('DOMContentLoaded', function() {

            makContentSlide.style.transform = "translateX(-100%)";

            goLeft.addEventListener("click", () => {
                makContentSlide.style.transform = "translateX(0%)";


            });

            goRight.addEventListener("click", () => {
                makContentSlide.style.transform = "translateX(-100%)";
            });

            goDetails.forEach(element => {
                element.addEventListener("click", () => {
                    makContentSlide.style.transform = "translateX(-200%)";


                    //code
                    var _id_soli = $(element).data('cod_solic');
                    var _idcli = $(element).data('cod_client');

                    // console.log(_idcli)

                    $('#id_solic_doc').val(_id_soli);


                    get_details_solic_legal(_id_soli, _idcli)
                });
            });
            goLeft_1.forEach(element => {
                element.addEventListener("click", () => {
                    makContentSlide.style.transform = "translateX(-100%)";
                });
            });

            goUpdate.forEach(element => {
                element.addEventListener("click", function() {
                    makContentSlide.style.transform = "translateX(0%)";

                    //code
                    var _id_soli = $(element).data('cod_solic');
                    var _idcli = $(element).data('cod_client');

                    get_details_solic_legal(_id_soli, _idcli)

                    // code
                    $tr = $(this).closest('tr');

                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();

                    // console.log(data);

                    $('#cod_reg_l').val(_id_soli.trim());

                    $('#nom_cli_solic').val(data[1]);
                    $('#ape_cli_solic').val(data[2]);

                    var btnLstHr = $('.btn_lst_hr');

                    if (btnLstHr.length > 0) {
                        btnLstHr.hide();
                    }

                    var btnLstLyts = $('.btn_lst_lyts');
                    if (btnLstLyts.length > 0) {
                        btnLstLyts.show();
                    }


                    // el lapiz hace que salga el boton actualizar
                    var contenido = document.querySelectorAll(".content-file").forEach(element => {
                        var buttons = element.querySelectorAll("button");
                        // console.log(buttons);
                        buttons.forEach((btns, indice) => {
                            if (indice % 2 === 1) { // Los índices pares tienen resto 1 al dividir por 2
                                btns.style.display = "none";

                            } else {
                                btns.style.display = "block";

                            }
                        });
                    });
                    // el lapiz hace que salga el boton actualizar

                    // el lapiz hace que se oculte y muestren los botones
                    var cardFooter = document.querySelector(".card-footer_");
                    var botones = cardFooter.querySelectorAll("button");
                    // console.log(cardFooter);
                    // console.log(botones);
                    botones.forEach((botones, indice) => {
                        if (indice % 2 === 0) { // Los índices pares tienen resto 1 al dividir por 2
                            botones.style.display = "none";
                        } else {
                            botones.style.display = "block";

                        }
                    });
                    // el lapiz hace que se oculte y muestren los botones




                });

                var upldFile = document.querySelectorAll(".upld-file").forEach(element => {
                    element.addEventListener("click", () => {
                        /////
                        var contenido = document.querySelectorAll(".content-file").forEach(element => {
                            var cod_l = $('#cod_reg_l').val();


                            // var buttons = element.querySelectorAll("button");
                            // buttons.forEach(btns => {
                            //     console.log(btns);

                            // });

                            $('#cod_reg_').val(cod_l)
                            $('#cod_reg_2').val(cod_l)
                            $('#cod_reg_3').val(cod_l)
                            $('#cod_reg_4').val(cod_l)

                            //     // var buttons = element.querySelectorAll("button");
                            //     // console.log(buttons);
                            // console.log(cod_l);
                            // console.log(element);
                        });
                        /////
                    })
                });
            });


        });


        function get_details_solic_legal(idsolicitud, idclient) {
            $.ajax({
                type: 'POST',
                url: '../Controller/Get_Details_Legal.php',
                data: {
                    id_solic_l: idsolicitud,
                    id_client: idclient
                },

                beforeSend: function() {
                    // $("#loader_uhd").show();
                    $("#loader_uhd").show();
                    // $("#loader_uhd").removeClass("hidden");
                    $("#updt_files").hide();
                    $("#updt_status").hide();

                    $("#form_files").hide();
                    /*$("#docs_val").hide();*/

                    // if ($(".mak_overlay").hasClass("hidden")) {
                    // $("#add_data_val").addClass("hide");
                    // }

                },

                success: function(response) {
                    // console.log(response);

                    var save_file_leg_ = document.getElementById("btn_updt_solic_l");
                    var upld_file_leg_ = document.getElementById("btn_upld_solic_l");
                    var coment = document.getElementById("coment_");

                    try {
                        var detalles = JSON.parse(response);

                        console.log(detalles);

                        var id_valor = detalles[0][0];
                        var nom_client = detalles[0][1];
                        var apellido = detalles[0][2];
                        var correo = detalles[0][3];
                        var id_client = detalles[0][4];
                        var dni_client = detalles[0][5];
                        var status_ = detalles[0][6];
                        var coment = detalles[0][7];



                    } catch (error) {
                        console.error("Error al analizar la respuesta JSON: " + error);
                    }


                    setTimeout(function() {

                        $("#loader_uhd").hide();
                        $("#add_data_val").removeClass("hide");

                        // console.log("ID Valor: " + id_valor);
                        // console.log("Nombre Cliente: " + nom_client);
                        // console.log("Apellido: " + apellido);
                        // console.log("email: " + correo);
                        // console.log("id cliente: " + id_client);
                        // console.log("dni cliente: " + dni_client);
                        // console.log("comment: " + coment);
                        // console.log("estado: " + status_);

                        $("#id_legal_solic").val(id_valor);
                        $("#id_client_l").val(id_client);
                        $("#dni_client_l").val(dni_client);

                        $("#data_names_").val(nom_client);
                        $("#data_lnames_").val(apellido);

                        $("#data_direcion_1").val(correo);
                        $("#data_direcion_2").val(correo);
                        $("#data_direcion_3").val(correo);

                        $("#coment_").val(coment);


                        function habilitarComent() {
                            const fil = document.getElementById("legal_files");
                            const boton_ = document.getElementById("btn_updt_solic_l");
                            var bla = document.getElementById("_coment"),
                                blabla = document.getElementById("coment_");



                            if (status_ !== "20") {
                                // Añade el atributo readonly
                                blabla.setAttribute('readonly', 'readonly');
                            } else {
                                blabla.removeAttribute('readonly');
                            }
                        }





                        switch (status_) {
                            case '10':
                                $("#status_solic_legal_cbo").val("10");
                                //
                                $(".textBox").val("Pendiente");
                                $(".textBox").addClass("bg-info");
                                $(".textBox").removeClass("bg-warning");
                                $(".textBox").removeClass("bg-secondary");
                                $(".textBox").removeClass("bg-success");

                                upld_file_leg_.style.display = "none";

                                habilitarComent();

                                break;
                            case '20':
                                $("#status_solic_legal_cbo").val("20");
                                //
                                $(".textBox").val("En revisión");
                                $(".textBox").addClass("bg-warning");
                                $(".textBox").removeClass("bg-secondary");
                                $(".textBox").removeClass("bg-success");
                                $(".textBox").removeClass("bg-info");

                                upld_file_leg_.style.display = "none";

                                habilitarComent();

                                break;
                            case '30':
                                $("#status_solic_legal_cbo").val("30");
                                //
                                $(".textBox").val("Borrador");
                                $(".textBox").addClass("bg-secondary");
                                $(".textBox").removeClass("bg-success");
                                $(".textBox").removeClass("bg-info");
                                $(".textBox").removeClass("bg-warning");

                                upld_file_leg_.style.display = "none";

                                habilitarComent();

                                break;
                            case '40':
                                $("#status_solic_legal_cbo").val("40");
                                //
                                $(".textBox").val("Rechazado");
                                $(".textBox").addClass("bg-danger");
                                $(".textBox").removeClass("bg-success");
                                $(".textBox").removeClass("bg-info");
                                $(".textBox").removeClass("bg-warning");
                                $(".textBox").removeClass("bg-secondary");

                                upld_file_leg_.style.display = "none";

                                habilitarComent();

                                break;
                            default:
                                $("#status_solic_legal_cbo").val("90");
                                //
                                $(".textBox").val("Finalizado");
                                $(".textBox").addClass("bg-success");
                                $(".textBox").removeClass("bg-info");
                                $(".textBox").removeClass("bg-warning");
                                $(".textBox").removeClass("bg-secondary");

                                upld_file_leg_.style.display = "block";

                                habilitarComent();

                                break;
                        }

                        $("#dir_rsm").text(detalles[0][2]);
                        $("#tip_rsm").text(detalles[0][3]);
                        $("#pro_rsm").text(detalles[0][5]);
                        $("#at_rsm").text(detalles[0][6]);
                        $("#ac_rsm").text(detalles[0][7]);
                        $("#ao_rsm").text(detalles[0][8]);


                        // var direccion_val = $("#dir_rsm").text();
                        // get_distrito_x_direccion(direccion_val);

                        // btnDisable.prop("disabled", true);

                    }, 1500);

                },
                complete: function() {
                    setTimeout(function() {
                        $("#form_files").show();
                        $("#updt_files").show();
                        $("#updt_status").show();
                    }, 1500);
                },
                error: function(xhr, status, error) {
                    console.log("Error en la solicitud ajax ", error)
                    console.log("Mensaje de error:", error);
                }
            });
        }
    </script>

    <script>
        const inputSelect = document.querySelector(".input-select");
        const textBox = document.querySelector(".textBox");
        const textBoxValue = document.querySelector("#status_solic_legal_cbo");
        const selectOptions = document.querySelectorAll(".select-options div");
        var btnDisble_ = document.getElementById("btnValo_obs_save");

        inputSelect.addEventListener("click", function() {
            inputSelect.classList.toggle("active");
            textBox.classList.toggle("radius");

        });
        document.addEventListener("click", function(event) {

            if (!inputSelect.contains(event.target)) {
                inputSelect.classList.remove("active");
                textBox.classList.remove("radius");
            }
        });

        selectOptions.forEach(option => {
            option.addEventListener("click", function() {
                const dataValue = option.getAttribute("data-value");
                textBoxValue.value = dataValue; // Cambia el valor de textBoxValue

                var add_file_leg_ = document.getElementById("btn_upld_solic_l");

                var coment = document.getElementById("coment_");

                switch (dataValue) {
                    case '10':
                        textBox.value = "Pendiente";
                        //----
                        textBox.classList.add("bg-info");
                        //
                        textBox.classList.remove("bg-warning");
                        textBox.classList.remove("bg-secondary");
                        textBox.classList.remove("bg-success");

                        add_file_leg_.style.display = "none";
                        // coment.style.display = "none";
                        coment.setAttribute('readonly', 'readonly');
                        break;
                    case '20':
                        textBox.value = "En revisión";
                        //----
                        textBox.classList.add("bg-warning");
                        //
                        textBox.classList.remove("bg-secondary");
                        textBox.classList.remove("bg-success");
                        textBox.classList.remove("bg-info");

                        add_file_leg_.style.display = "none";
                        // coment.style.display = "block";
                        coment.removeAttribute('readonly');
                        break;
                    case '30':
                        textBox.value = "Borrador";
                        //----
                        textBox.classList.add("bg-secondary");
                        //
                        textBox.classList.remove("bg-success");
                        textBox.classList.remove("bg-info");
                        textBox.classList.remove("bg-warning");

                        coment.setAttribute('readonly', 'readonly');
                        // coment.style.display = "none";
                        break;
                    case '40':


                        coment.removeAttribute('readonly');
                        break;
                    case '90':
                        textBox.value = "Finalizado";
                        //----
                        textBox.classList.add("bg-success");
                        //
                        textBox.classList.remove("bg-info");
                        textBox.classList.remove("bg-warning");
                        textBox.classList.remove("bg-secondary");

                        // coment.style.display = "none";
                        coment.setAttribute('readonly', 'readonly');
                        add_file_leg_.style.display = "block";
                        break;
                    default:
                        break;
                }

            });
        });
        // Cierra el menú desplegable
        inputSelect.classList.remove("active");
    </script>

    <script>
        $(document).ready(function() {
            var table = $('#table').DataTable({
                // responsive: true,
                // autoWidth: false,
                // "dom": '<"row"<"col-sm-6"l><"col-sm-6"f>>t<"row"<"col-sm-6"i><"col-sm-6"p>>',
                dom: '<"row"<"col-sm-6"l><"col-sm-6"f>>tip',
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json", // URL del archivo de localización
                    "searchPlaceholder": "Buscar en la tabla..." // placeholder del Buscar.
                },
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "Todos"]
                ],
                // Otras opciones de DataTables
                "drawCallback": function(settings) {
                    $('.dataTables_length select').addClass('form-mak sect tableLenght');
                    $('.dataTables_filter input').addClass('form-mak sect');
                },
                columnDefs: [{
                    searchable: false,
                    orderable: false,
                    targets: 0
                }],
                "order": [
                    [0, "desc"]
                ],
            });
            // Agregar números secuenciales a la primera columna
            table.on('order.dt search.dt', function() {
                $('table').DataTable().column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();
            ////
        });
    </script>

    <script>
        function isRefused() {
            // const txt_status_soli = document.getElementById("textBox");
            // const cbo_status_soli = document.getElementById("status_solic_legal_cbo");

            // txt_status_soli.innerText("Rechazado");
            // cbo_status_soli.innerText("40");
            $('.textBox').val("Rechazado");
            $("#status_solic_legal_cbo").val("40");

            $('.textBox').addClass("bg-danger");
            $(".textBox").removeClass("bg-success");
            $(".textBox").removeClass("bg-info");
            $(".textBox").removeClass("bg-warning");

            $("#coment_").removeAttr('readonly');

        }

        document.getElementById("lst_docs_legal").addEventListener("click", function() {
            // Abre el modal

            $("#_slct_status").change(function() {
                var _data_cbo = {
                    _status: true,
                    _id_doc: $('#_id_doc_').val(),
                    _slct_status: $("#_slct_status").val(),
                };
                // var seleccion = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "../Controller/update_status_solic_legal.php",
                    // url: "../Controller/update_status_legal.php",
                    data: _data_cbo,
                    dataType: "JSON",
                    success: function(data) {
                        console.log(data);
                        if (data === 100) {
                            //     alert("Estado cambiado correctamente.");
                            isRefused();
                        } else {
                            //     alert("Hubo un problema.")
                        }
                    },
                    complete: function() {

                    }
                });
                return false;
            });
        });
    </script>


    <script>
        $('#btn_upld_solic_l').on('click', function() {

            var __id_solic_v = $("#id_solic_doc").val();
            var cd_solic_v = $("#id_reg_lgl").val(__id_solic_v);

            var __dni__solic_v = $("#dni_client_l").val();
            var dni_solic_v = $("#dni_solic_lgl").val(__dni__solic_v);

        });

        function habilitarBoton() {

            const fil = document.getElementById("legal_files");
            const boton_ = document.getElementById("btn_updt_solic_l");
            const coment = document.getElementById("coment_");

            if (fil.value !== '' || coment.value !== '') {
                boton_.disabled = false;
            } else {
                boton_.disabled = true;
            }

            // if (coment.value !== '') {
            //     boton_.disabled = false;
            // } else {
            //     boton_.disabled = true;
            // }
        }

        $(document).ready(function() {
            // Cuando cambia el input file
            $("#legal_files").on("change", function() {
                var inputFile = $(this)[0];
                if (inputFile.files.length > 0) {
                    $("#btn_updt_solic_l").prop("disabled", false); // Habilita el botón
                } else {
                    $("#btn_updt_solic_l").prop("disabled", true); // Deshabilita el botón
                }
            });

            $("#limpiarBoton").on("click", function() {
                $("#legal_files").val(""); // Borra el valor del input file
                $("#btn_updt_solic_l").prop("disabled", true); // Deshabilita el botón
            });
        });
    </script>
</body>

</html>