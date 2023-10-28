<?php require_once('../Config/security.php');
require_once('../Controller/controladorListar.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAK SERVICE</title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Vista/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">


    <!-- daterange picker -->
    <link rel="stylesheet" href="../Vista/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../Vista/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../Vista/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../Vista/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
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

    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->

    <!-- Data Tables Pluggin -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap4.min.css">



    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

</head>

<body class="hold-transition sidebar-mini  sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed" onload="initAutocomplete()">

    <div class="wrapper">

        <?php include '../Vista/nav_bar_moduls.php' ?>

        <div class="content-wrapper">

            <section class="content" style="margin: 0;">
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
                            <div class="card-body mb-5">
                                <div class="b-title txt-center">VALORIZACIONES</div>
                                <p class="mak-txt b-text">¡Bienvenido <strong><?php echo $_SESSION['nom_usu'] . " " . $_SESSION['ape_usu'] ?></strong>! Para realizar un correcto proceso de valorización, es necesario tener en cuenta los siguientes puntos clave:</p>
                                <label class="mak-txt b-text">1. Documentos requeridos:</label>
                                <ul>
                                    <li>Adjunta una Copia Literal o Partida Registral.</li>
                                    <li>Incluye un Predio Urbano (PU).</li>
                                    <li>Asegúrate de proporcionar la Hoja de Resumen (HR).</li>
                                </ul>
                                <label class="mak-txt b-text">2. Importante: Los documentos no deben ser mayores a 3 meses del presente año.</label>
                                <p class="mak-txt b-text">Además, tienes la opción de adjuntar documentos opcionales, que pueden enriquecer el proceso de valorización:</p>
                                <ul>
                                    <li>Certificado de Parámetros. </li>
                                    <li>Planos.</li>
                                    <li>Tasación Anterior. </li>
                                    <li>Recibo de Agua o Luz.</li>
                                </ul>
                                <p class="mak-txt b-text">Recuerda que tu colaboración es esencial para garantizar la calidad de la información. ¡Agradecemos tu participación en este proceso!</p>

                            </div>
                            <?php
                            if ($_SESSION['tipo_usu'] == 1) {
                            } else { ?>
                                <div class="card-footer">
                                    <div class="form-flex">
                                        <a href="../Dashboard.php" class="btn btn-mak mak-bg-sec">Retroceder</a>
                                        <a href="valorizacion.php" class="btn btn-mak mak-bg">Nueva solicitud</a>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                    </section>

                <?php
                }
                ?>

                <div id="loader_uhd" class="mak_overlay hidden">
                    <img src="../Vista/images/MAK_logo.png" alt="" class="fading-element">
                </div>

                <div class="d-flex overflow-hidden w-100 pddt-5">

                    <div class="mak-content-slide">



                        <section class="content body-mak mak-txt position-relative" data-content="historico">


                            <div class="container">
                                <h1 class="text-center mt-5">HISTORICO</h1>
                                <div class="row">

                                    <?php


                                    if ($_SESSION['tipo_usu'] == 1) {
                                        //ocultar el del user y mostrar el del admin
                                    ?>

                                        <!-- </div> TABLA ADMIN -->

                                        <div class="col-sm-12 p-0">
                                            <table class="table table_ table-responsive table-borderless mb-3 mr-3" style="width: 100%;">

                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Dni</th>
                                                        <th>Cliente</th>
                                                        <th>Direccion</th>
                                                        <th>Tipo Propiedad</th>
                                                        <th>Tipo</th>
                                                        <th>Estado</th>
                                                        <th>Detalles</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php


                                                    function mostrarData($data)
                                                    {
                                                        switch ($data) {
                                                            case "1":
                                                                echo "<td>Si</td>";
                                                                break;
                                                            case "0":
                                                                echo "<td>No</td>";
                                                                break;
                                                            case "500":
                                                                echo "<td><span class='badge rounded-pill bg-secondary'>Pendiente</span></td>";
                                                                break;
                                                            case "400":
                                                                echo "<td><span class='badge rounded-pill bg-warning text-dark'>Observado</span></td>";
                                                                break;
                                                            case "200":
                                                                echo "<td><span class='badge rounded-pill bg-success'> Finalizado</span></td>";
                                                                break;
                                                            default:
                                                                // echo "<td>$data</td>";
                                                                if ($data !== null) {
                                                                    echo  "<td>$data</td>";
                                                                } else {
                                                                    echo "<td>-</td>";
                                                                }
                                                                break;
                                                        }
                                                    }

                                                    foreach ($list_valo as $lst_vlzn) : ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $lst_vlzn[0] ?>
                                                            </td>
                                                            <?php mostrarData($lst_vlzn[1]) ?>
                                                            <?php mostrarData($lst_vlzn[2]) ?>
                                                            <?php mostrarData($lst_vlzn[3]) ?>
                                                            <?php mostrarData($lst_vlzn[4] . ' (' . $lst_vlzn[5] . ')') ?>

                                                            <?php mostrarData($lst_vlzn[6]) ?>
                                                            <?php mostrarData($lst_vlzn[63]) ?>

                                                            <td>

                                                                <?php if ($lst_vlzn[63] == 400) { ?>
                                                                    <button type="button" class="btn btn-rounded scroll-toggle" data-id_solic_val="<?php echo $lst_vlzn[0] ?>" data-id_cli="<?php echo $lst_vlzn[64] ?>" data-dni_cli="<?php echo $lst_vlzn[1] ?>">
                                                                        <i class="fa-solid fa-pencil"></i>
                                                                    </button>

                                                                <?php } else { ?>
                                                                    <button type="button" class="btn btn-rounded scroll-toggle" data-id_solic_val="<?php echo $lst_vlzn[0] ?>" data-id_cli="<?php echo $lst_vlzn[64] ?>" data-dni_cli="<?php echo $lst_vlzn[1] ?>">
                                                                        <i class="fa-solid fa-eye"></i>
                                                                    </button>
                                                                <?php } ?>

                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- </div> TABLA ADMIN -->

                                    <?php
                                    } else {
                                    ?>

                                        <!-- </div> TABLA USER -->

                                        <!-- <div class="table-responsive "> -->
                                        <div class="col-sm-12 p-0">
                                            <table class="table table_ table-responsive table-borderless mb-3 pl-3 pr-3" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Cliente</th>
                                                        <th>Direccion</th>
                                                        <th>Tipo Propiedad</th>
                                                        <th>Tipo</th>
                                                        <th>Estado</th>
                                                        <th>Detalles</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    function mostrarDataUser($data)
                                                    {
                                                        switch ($data) {
                                                            case "1":
                                                                echo "<td>Si</td>";
                                                                break;
                                                            case "0":
                                                                echo "<td>No</td>";
                                                                break;
                                                            case "500":
                                                                echo "<td><span class='badge rounded-pill bg-secondary'>Pendiente</span></td>";
                                                                break;
                                                            case "400":
                                                                echo "<td><span class='badge rounded-pill bg-warning text-dark'>Observado</span></td>";
                                                                break;
                                                            case "200":
                                                                echo "<td><span class='badge rounded-pill bg-success'> Finalizado</span></td>";
                                                                break;

                                                            default:
                                                                // echo "<td>$data</td>";
                                                                if ($data !== null) {
                                                                    echo  "<td>$data</td>";
                                                                } else {
                                                                    echo "<td>-</td>";
                                                                }
                                                                break;
                                                        }
                                                    }


                                                    $list_valo_user = $oValor->list_Valo_Historico_User($_SESSION['id_usu'], $_SESSION['dni']);

                                                    foreach ($list_valo_user as $lst_vlzn_) :
                                                        $cont = 0;
                                                    ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $lst_vlzn_[0] ?>
                                                            </td>

                                                            <?php mostrarDataUser($lst_vlzn_[1]) ?>
                                                            <?php mostrarDataUser($lst_vlzn_[2]) ?>
                                                            <?php mostrarDataUser($lst_vlzn_[3] . ' (' . $lst_vlzn_[4] . ')') ?>

                                                            <?php mostrarDataUser($lst_vlzn_[5]) ?>
                                                            <?php mostrarDataUser($lst_vlzn_[6]) ?>


                                                            <td>
                                                                <div class="row justify-content-evenly">
                                                                    <?php if ($lst_vlzn_[6] == 400) : ?>
                                                                        <div class="col-sm-6 d-flex justify-content-center">
                                                                            <div class="options btn_get_obs_0" title="Observación" data-id_solic_val="<?php echo $lst_vlzn_[0] ?>" data-id_cli="<?php echo $lst_vlzn_[8] ?>" data-dni_cli="<?php echo $lst_vlzn_[9] ?>">
                                                                                <button type="button" class="btn btn-rounded ">
                                                                                    <i class="fa-solid fa-eye"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    <?php else : ?>
                                                                        <div class="col-sm-6 d-flex justify-content-center">
                                                                            <?php if ($lst_vlzn_[6] == 200 && !$lst_vlzn_[7] == null) : ?>
                                                                                <div class="options" title="Descargar archivo">
                                                                                    <a target="_blank" download="../Valorizaciones/<?php echo $lst_vlzn_[0] . '/' . $lst_vlzn_[9] . '/docs_val/' . $lst_vlzn_[7] ?>" href="../Valorizaciones/<?php echo $lst_vlzn_[0] . '/' . $lst_vlzn_[9] . '/docs_val/' . $lst_vlzn_[7] ?>">
                                                                                        <i class="fa-solid fa-download"></i>
                                                                                    </a>
                                                                                </div>
                                                                            <?php else : ?>
                                                                                <div class="options">
                                                                                    <strong title="En pendiente">-</strong>
                                                                                </div>
                                                                            <?php endif ?>
                                                                        </div>
                                                                    <?php endif ?>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- </div> -->

                                        <!-- </div> TABLA USER -->
                                    <?php
                                        //ocultar el del admin y mostrar el del user
                                    }
                                    ?>

                                </div>

                            </div>

                        </section>



                        <section class="body-mak mak-txt col-md-12">

                            <form id="add_data_val" method="POST">

                                <input type="text" name="cod_solic_v" id="cod_solic_v" hidden>
                                <input type="text" name="dni_usu_v" id="dni_usu_v" hidden>



                                <div class="card-body pl-4 pd-4">
                                    <table class="table table-responsive table-borderless">
                                        <thead>
                                            <tr class="t-head">
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
                                                <td id="dir_dist_rsm"></td>
                                                <td id="dir_rsm"></td>
                                                <td id="tip_rsm"></td>
                                                <td id="pro_rsm"></td>
                                                <td id="at_rsm"></td>
                                                <td id="ac_rsm"></td>
                                                <td id="ao_rsm"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-body">
                                            <div>
                                                <label class="mak-txt">Comentario</label>
                                                <textarea id="coment_valr_r" placeholder="Sin comentario." style="resize: none;" readonly></textarea>
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-evenly">
                                                <div class="btn btn-mak mak-bg btn_get_fotos" data-bs-toggle="modal" data-bs-target="#verFotos">Ver Fotos</div>
                                                <div class="btn btn-mak mak-bg btn_get_details" data-bs-toggle="modal" data-bs-target="#verDocs">Ver Documentos</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-box">
                                            <div id="map_resumen" style="height: 250px;">
                                            </div>
                                        </div>
                                        <small id="mensaje_error"></small>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-body">
                                            <div class="card-box data-resume">

                                                <figcaption class="d-flex flex-column pl-2">
                                                    <p class="b-text"><b>Resumen</b></p>

                                                    <div class="input-select">
                                                        <input type="text" id="" name="" class="textBox" readonly>
                                                        <input type="hidden" id="status_solic_val_cbo" name="status_solic_val_cbo" readonly>
                                                        <div class="select-options">
                                                            <div class="bg-secondary" data-value="500">Pendiente</div>
                                                            <div class="bg-warning" data-value="400">Observado</div>
                                                            <div class="bg-success" data-value="200">Finalizado</div>
                                                        </div>
                                                    </div>

                                                    <small class="">Datos de contacto:</small>
                                                </figcaption>

                                                <ul>
                                                    <li><b>Nombre: </b><?php echo $_SESSION['nom_usu']; ?></li>
                                                    <li><b>Email: </b><?php echo $_SESSION['email_usu']; ?></li>
                                                    <li><b>Teléfono: </b><?php echo $_SESSION['telef_usu']; ?></li>
                                                </ul>

                                                <div class="pl-2">
                                                    <!-- <p><strong>Información de la propiedad:</strong></p> -->

                                                    <span class="cursor" id="lst_resume_" data-toggle="modal" data-target="#lst_resume"><small><strong>Ver más detalles.</strong></small></span>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class=" card-footer pt-5">
                                    <div class="form-flex">
                                        <button type="button" class="btn btn-mak mak-bg-sec antPag avanza_pa_atras">Retroceder</button>

                                        <button type="button" class="btn btn-mak mak-bg-sec upld_file_valo" id="subir_valor">Subir Valorizacion</button>

                                        <button type="button" class="btn btn-mak mak-bg-sec add_obs" id="add_obsv_v" data-id_solic>obs</button>

                                        <button type="button" class="btn btn-mak mak-bg dwnld_valo" id="btn_dwnld_valo" name="btn_dwnld_valo" style="display:none;">Descargar Informacion</button>

                                        <button type="button" class="btn btn-mak mak-bg btn_finalizar" id="btnValo_obs_save" name="btnValo_obs_save">Guardar</button>

                                        <!-- <button type="button" class="btn btn-rounded  btn_lst_docs btn_lst_docs_0" data-toggle="modal" data-target="#lst_docs_legal" data-valor="DNI" data-titulo="DNI" data-id_doc_="4" data-id_user_="<?php echo $_SESSION['dni'] ?>">
                                            <i class="cursor fa-solid fa-eye"></i>
                                        </button> -->
                                    </div>
                                </div>

                            </form>
                        </section>

                    </div>
                </div>



                <div class="modal fade" id="upload_valorizacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Subir Valorizacion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <form id="adding_valo_file" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="text" name="id_reg_valor" id="id_reg_valor" hidden>
                                    <input type="text" name="dni_solic_valor" id="dni_solic_valor" hidden>
                                    <div class="form-group">
                                        <label>Archivo de Valorizacion</label>
                                        <br>
                                        <input type="file" name="valorizacion_files[]" id="valorizacion_files" multiple>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" name="btn_save_valo_file" id="btn_save_valo_file" class="btn mak-bg">Subir</button>
                                    </div>
                                </div>

                                <div id="message_aprob"></div>
                            </form>

                        </div>
                    </div>
                </div>


                <div class="modal fade" id="details_v" tabindex="-1" role="dialog" aria-labelledby="details_v" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h1 class="title-m" id="titulo_docs">Detalles</h1>
                                <div class="row">
                                    <div hidden>
                                        <input type="text" name="txt_solic" id="txt_solic">
                                        <input type="text" name="txt_id_cli" id="txt_id_cli">
                                        <input type="text" name="txt_dni" id="txt_dni">
                                    </div>
                                    <div class="col-sm-12">
                                        <ul id="detalles_valor" style="display:none"></ul>

                                    </div>
                                    <div id="">
                                        <label class="pdd-left">Descargar Archivos</label>
                                        <div>
                                            <div id="descarga_archivo_m">
                                                <ul id="archivos_lista"></ul>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="details_fotos" tabindex="-1" role="dialog" aria-labelledby="details_fotos" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h1 class="title-m" id="titulo_docs">Fotos</h1>
                                <div hidden>
                                    <input type="text" name="txt_solic" id="txt_solic">
                                    <input type="text" name="txt_id_cli" id="txt_id_cli">
                                    <input type="text" name="txt_dni" id="txt_dni">
                                </div>
                                <div class="col-sm-12">
                                    <ul id="detalles_valor" style="display:none"></ul>

                                </div>
                                <div id="docs_val">
                                    <label class="pdd-left">Fotos Subidas</label>
                                    <div>
                                        <div id="fotos_val">
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                                                <div id="lst_fotos" class="carousel-inner">
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="modal fade" id="add_obs_valr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Subir Valorizacion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="add_obs_val_0" method="POST">
                                <div class="modal-body">
                                    <input type="hidden" name="id__cod_valor" id="id__cod_valor">
                                    <div class="form-group">
                                        <label>Observacion</label>
                                        <br>
                                        <textarea placeholder="Añadir Observacion" id="obs_send_" name="obs_send_" onkeyup="habilitarBoton()"></textarea>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn mak-bg" data-dismiss="modal" id="btnValo_obs_set" name="btnValo_obs_set" disabled>Listo</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="get_obs_valr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div id="loader_uhd_2" class="mak_overlay hidden">
                        <img src="../Vista/images/MAK_logo.png" alt="" class="fading-element">
                    </div>
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Observaciones</h5>
                            </div>
                            <div class="modal-body" id="modal_obs">
                                <textarea id="obs_sent_" name="obs_sent_" readonly disabled style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="lst_docs_legal" tabindex="-1" role="dialog" aria-labelledby="lst_docs_legal" aria-hidden="true">
                    <div id="loader_uhd_3" class="mak_overlay hidden">
                        <img src="../Vista/images/MAK_logo.png" alt="" class="fading-element">
                    </div>
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h1 class="title-m" id="titulo_docs__"></h1>

                                <div class="row margin" id="lst_docs_lgl" style="display:none">

                                    <div class="col-sm-12" id="descarga_archivo_p">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="lst_resume" tabindex="-1" role="dialog" aria-labelledby="lst_resume" aria-hidden="true">
                    <div id="loader_uhd_3" class="mak_overlay hidden">
                        <img src="../Vista/images/MAK_logo.png" alt="" class="fading-element">
                    </div>
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detalles del resumen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul id="resume_lst"></ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                <button id="exportButton">Exportar a Excel</button>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
        </div>


        <?php include '../Vista/foot-form.php' ?>

    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.14/xlsx.full.min.js"></script>
    <script src="export.js"></script>


    <script>
        function habilitarBoton() {
            const boton = document.getElementById("btnValo_obs_set");
            const boton_ = document.getElementById("btnValo_obs_save");

            const obs = document.getElementById("obs_send_");

            if (obs.value.trim() !== '') {
                boton.disabled = false;
                boton_.disabled = false;
            } else {
                boton.disabled = true;
                boton_.disabled = true;
            }
        }
    </script>

    <!--GOOGLE MAPS TESTING-->
    <script type="text/javascript">
        function onGoogleMapsLoaded() {
            const autocomplete = new google.maps.places.Autocomplete(document.getElementById('direccion_'));
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNO5GraIm8rWrrLbWt-Gv9GxsenRng-8o&callback=initmap&libraries=places" onload="onGoogleMapsLoaded()" async defer>
    </script>



    <script type="text/javascript">
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

    <script>
        $(document).ready(function() {

            $('.upld_file_valo').on('click', function() {
                console.log("test");

                $('#upload_valorizacion').modal('show');

                var __id_solic_v = $("#cod_solic_v").val();
                var cd_solic_v = $("#id_reg_valor").val(__id_solic_v);

                var __dni__solic_v = $("#dni_usu_v").val();
                var dni_solic_v = $("#dni_solic_valor").val(__dni__solic_v);

            });

            $('.add_obs').on('click', function() {
                console.log("test");
                $('#add_obs_valr').modal('show');

                var __id_solic_v = $("#cod_solic_v").val();
                var cd_solic_v = $("#id__cod_valor").val(__id_solic_v);

            });


        });
    </script>

    <script type="text/javascript">
        $('.dwnld_valo').on('click', function() {

            var id_solic_v = $("#cod_solic_v").val();

            console.log(id_solic_v);

            download_excel(id_solic_v);

        });


        $('.btn_get_obs_0').on('click', function() {

            var id_ = $(this).data('id_solic_val');
            var id_cli__ = $(this).data('id_cli');
            var dni_cli__ = $(this).data('dni_cli');

            console.log(id_);


            $('#get_obs_valr').modal('show');

            get_obs_solic(id_, id_cli__, dni_cli__)

        });




        $('.btn_get_details').on('click', function() {

            $('#details_v').modal('show');

            var id_solic_v = $("#cod_solic_v").val();
            var dni_cli_v = $("#dni_usu_v").val();

            console.log(dni_cli_v)

            get_files_valor(id_solic_v, dni_cli_v)


        });


        $('.btn_lst_docs').on('click', function() {

            //var id_cli = $(this).data('id_user_');
            var id_reg = $('#cod_solic_v').val();


            $('#titulo_docs__').text('Mis Documentos: ');

            load_valorizaciones_(id_reg)

            $('#lst_docs_legal').modal('show');

        });

        function download_excel(id_valor_soli) {

            $.ajax({

                type: 'POST',
                url: '../Controller/excel.valorizacion.php',
                data: {
                    id_solc_v: id_valor_soli,
                },

                xhrFields: {
                    responseType: 'blob'
                },

                success: function(response) {
                    // Crear un enlace y simular clic para descargar el archivo
                    var blob = new Blob([response], {
                        type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                    });

                    var link = document.createElement('a');
                    link.href = URL.createObjectURL(blob);
                    link.download = 'Informacion_Valorizacion_' + id_valor_soli + '.xlsx';
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        }

        function get_obs_solic(idsolicitud, idclient, dniclient) {
            $.ajax({
                type: 'POST',
                url: '../Controller/.php',
                data: {
                    id_solic_l: idsolicitud,
                    id_client: idclient,
                    dni_client: dniclient,
                },

                beforeSend: function() {
                    // $("#loader_uhd").show();
                    $("#loader_uhd_2").removeClass("hidden");


                    $("#obs_sent_").hide();

                },

                success: function(response) {

                    try {
                        var detalles = JSON.parse(response);

                        // console.log(detalles);

                        var id_valor = detalles[0][0];
                        var nom_client = detalles[0][1];
                        var obs = detalles[0][63];

                    } catch (error) {
                        console.error("Error al analizar la respuesta JSON: " + error);
                    }


                    setTimeout(function() {

                        // $("#loader_uhd").hide();
                        $("#loader_uhd_2").addClass("hidden");

                        $("#obs_sent_").show();

                        // console.log("ID Valor: " + id_valor);
                        // console.log("Nombre Cliente: " + nom_client);
                        // console.log("Observacion: " + obs);

                        if (obs == null) {
                            $("#obs_sent_").val('Sin Observaciones')
                        } else {
                            $("#obs_sent_").val(obs)
                        }


                    }, 2000);

                },
                error: function(xhr, status, error) {
                    console.log("Error en la solicitud ajax ", error)
                    console.log("Mensaje de error:", error);
                }
            });
        }

        function get_details_solic(idsolicitud, idclient, dniclient) {
            $.ajax({
                type: 'POST',
                url: '../Controller/Get_Details_Valorizacion.php',
                data: {
                    id_solic_l: idsolicitud,
                    id_client: idclient,
                    dni_client: dniclient,
                },

                beforeSend: function() {
                    $("#loader_uhd").removeClass("hidden");

                    $("#add_data_val").addClass("hide");
                },

                success: function(response) {
                    // console.log(response);

                    try {
                        var detalles = JSON.parse(response);

                        // console.log(detalles);

                        var id_valor = detalles[0][0];
                        var nom_client = detalles[0][1];
                        var direccion = detalles[0][2];
                        var tipo_inmb = detalles[0][3];
                        var estado = detalles[0][62];
                        var coment = detalles[0][63];

                    } catch (error) {
                        console.error("Error al analizar la respuesta JSON: " + error);
                    }


                    setTimeout(function() {

                        const tipo_status = document.getElementById("status_solic_val_cbo");

                        var btnDisable = $("#btnValo_obs_save");

                        const add_obs_1 = document.getElementById("add_obsv_v");
                        const add_file_val_1 = document.getElementById("subir_valor");

                        const dwnld_info = document.getElementById("btn_dwnld_valo");

                        // $("#loader_uhd").hide();
                        $("#loader_uhd").addClass("hidden");


                        // if (!$(".mak_overlay").hasClass("hidden")) {
                        $("#add_data_val").removeClass("hide");
                        // }

                        // console.log("ID Valor: " + id_valor);
                        // console.log("Nombre Cliente: " + nom_client);
                        // console.log("Dirección: " + direccion);
                        // console.log("Tipo Inmueble: " + tipo_inmb);
                        // console.log("Estado: " + coment);

                        $("#coment_valr_r").val(coment)

                        switch (estado) {
                            case '400':
                                $("#status_solic_val_cbo").val("400");
                                $(".textBox").val("Observado");
                                $(".textBox").addClass("bg-warning");
                                $(".textBox").removeClass("bg-secondary");
                                $(".textBox").removeClass("bg-success");

                                add_file_val_1.classList.add("hidden");
                                add_file_val_1.style.display = "none";

                                add_obs_1.classList.remove("hidden");
                                add_obs_1.style.display = "block";

                                btnDisable.prop("disabled", true);
                                dwnld_info.style.display = "none";

                                break;
                            case '200':
                                $("#status_solic_val_cbo").val("200");

                                $(".textBox").val("Finalizado");
                                $(".textBox").addClass("bg-success");
                                $(".textBox").removeClass("bg-warning");
                                $(".textBox").removeClass("bg-secondarys");


                                add_obs_1.classList.add("hidden");
                                add_obs_1.style.display = "none";

                                add_file_val_1.classList.remove("hidden");
                                add_file_val_1.style.display = "none";

                                btnDisable.prop("disabled", true);

                                dwnld_info.style.display = "block";
                                break;

                            default:
                                $("#status_solic_val_cbo").val("500");
                                $(".textBox").val("Pendiente");
                                $(".textBox").addClass("bg-secondary");
                                $(".textBox").removeClass("bg-success");
                                $(".textBox").removeClass("bg-warning");


                                add_obs_1.classList.add("hidden");
                                add_obs_1.style.display = "none";

                                add_file_val_1.classList.add("hidden");
                                add_file_val_1.style.display = "none";

                                dwnld_info.style.display = "none";
                        }

                        $("#dir_rsm").text(detalles[0][2]);
                        $("#tip_rsm").text(detalles[0][3]);
                        $("#pro_rsm").text(detalles[0][5]);
                        $("#at_rsm").text(detalles[0][6]);
                        $("#ac_rsm").text(detalles[0][7]);
                        $("#ao_rsm").text(detalles[0][8]);


                        var direccion_val = $("#dir_rsm").text();
                        get_distrito_x_direccion(direccion_val);

                        btnDisable.prop("disabled", true);



                        tipo_status.addEventListener("change", function() {

                            switch (tipo_status.value) {
                                case "400":
                                    console.log("uwu")
                                    add_obs_1.classList.remove("hidden");
                                    add_obs_1.style.display = "block";

                                    //add_file_val_1.classList.add("hidden");
                                    //add_file_val_1.style.display = "none";
                                    break;
                                case "200":
                                    add_obs_1.classList.add("hidden");
                                    add_obs_1.style.display = "none";

                                    //add_file_val_1.classList.remove("hidden");
                                    //add_file_val_1.style.display = "block";
                                    break;
                                default:
                                    add_obs_1.classList.add("hidden");
                                    //add_file_val_1.classList.add("hidden");

                                    add_obs_1.style.display = "none";
                                    //add_file_val_1.style.display = "none";
                                    break;
                            }

                        });

                    }, 1500);

                },
                error: function(xhr, status, error) {
                    console.log("Error en la solicitud ajax ", error)
                    console.log("Mensaje de error:", error);
                }
            });
        }

        function get_distrito_x_direccion(direccion) {
            var geocoder = new google.maps.Geocoder();

            geocoder.geocode({
                address: direccion
            }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    var district = null;
                    for (var i = 0; i < results.length; i++) {
                        var components = results[i].address_components;
                        for (var j = 0; j < components.length; j++) {
                            if (components[j].types.includes("locality")) {
                                district = components[j].long_name;
                                break;
                            }
                        }
                        if (district) {
                            break;
                        }
                    }
                    if (district) {
                        $("#dir_dist_rsm").text(district);

                        var districtLocation = results[0].geometry.location;


                        $("#map_resumen").show();
                        $("#mensaje_error").hide();
                        var map = new google.maps.Map(document.getElementById('map_resumen'), {
                            center: districtLocation,
                            zoom: 18,
                            //disableDefaultUI: true
                        });


                        var iconSize = new google.maps.Size(45, 45);

                        var marker = new google.maps.Marker({
                            position: districtLocation,
                            map: map,
                            title: district,
                            icon: {
                                url: '../Vista/images/GLOBO MAK 2.svg',
                                scaledSize: iconSize
                            }
                        });

                    } else {
                        $("#dir_dist_rsm").text('-');
                        $("#mensaje_error").show();
                        $("#mensaje_error").text("No se pudo encontrar la dirección.");

                        $("#map_resumen").hide();
                        console.log("no se encontro el distrito");
                    }
                } else {
                    $("#dir_dist_rsm").text('- - - -');
                    $("#mensaje_error").show();
                    $("#mensaje_error").text("No se pudo encontrar la dirección.");
                    $("#map_resumen").hide();
                    // console.log("Error al geocodificar la dirección:", status);
                }
            });
        }

        function load_valorizaciones_(id_reg) {

            $.ajax({
                type: 'POST',
                url: '../Controller/Get_files_Valorizacion.php',
                data: {
                    id_solic_v: id_reg

                },
                beforeSend: function() {
                    $("#loader_uhd_3").removeClass("hidden");
                    $("#lst_docs_lgl").hide();
                    //$("#docs_val").hide();
                },
                success: function(response) {

                    //var data = JSON.parse(response);
                    var archivos = response.archivos;

                    console.info(archivos)
                    var cont = 1;

                    setTimeout(function() {

                        $("#loader_uhd_3").addClass("hidden");
                        $("#lst_docs_lgl").show();

                        if (archivos && archivos.length > 0) {
                            var enlaceHtml = '';

                            archivos.forEach(function(archivo) {

                                var ruta = archivo.ruta;
                                var nombreArchivo = archivo.nombre;

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
                                        <a href="${ruta}">${nombreArchivo}</a>
                                    </div>

                                    <div class="col-sm-2 tw-modal-ots">
                                        <div class="row">

                                            <div class="inputs brd-rght-blue">
                                                <input id="ruta_doc_i" type="text" value="${ruta}" readonly hidden>
                                                <input id="ruta_archivo_i" type="text" value="${nombreArchivo}" readonly hidden>

                                                <div class="">
                                                    <button id="dlt_file" type="button" class="btn dlt_file" data-ruta="${ruta}"><i class="cursor fa-solid fa-trash"></i></button>
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



                    }, 900);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        }

        function get_files_valor(id_sol_v, dni) {
            $.ajax({
                type: 'POST',
                url: '../Controller/Get_Valorizacion_files.php',
                data: {
                    id_solic_v: id_sol_v,
                    dni_cli_v: dni,
                },
                success: function(response) {
                    var archivosLista = $('#archivos_lista');
                    archivosLista.empty();

                    // Manejar rutas individuales
                    $.each(response, function(ruta, rutaResponse) {
                        var listaRuta = $('<ul>').addClass('ruta-list');

                        if (rutaResponse.status === 'error') {
                            var errorMessage = $('<strong>').text(rutaResponse.mensaje);
                            listaRuta.append($('<li>').append(errorMessage));
                        } else if (rutaResponse.status === 'empty') {
                            var noFilesMessage = $('<strong>').text(rutaResponse.mensaje);
                            listaRuta.append($('<li>').append(noFilesMessage));
                        } else {

                            var archivos = rutaResponse.files;

                            archivos.forEach(function(archivo) {
                                if (archivo.trim() !== '') {
                                    var link_ = $('<a>')
                                        .attr('href', archivo)
                                        .attr('download', archivo)
                                        .text(archivo);

                                    var btn_dlt = $('<button type="button" class="btn btn-danger dlt_file"><i class="fa-solid fa-trash"></i>')
                                        .attr('data-ruta', archivo.url);

                                    var rol = '<?php echo $_SESSION['tipo_usu'] ?>';

                                    var listItem;

                                    if (rol == 1) {
                                        listItem = $('<li>').append(link_, '&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;', btn_dlt);
                                    } else {
                                        listItem = $('<li>').append(link_);
                                    }

                                    listaRuta.append(listItem);
                                }
                            });
                        }

                        archivosLista.append(listaRuta);
                    });
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        }

        $(document).on('click', '.dlt_file', function() {
            var $this = $(this);

            var ruta_ = $(this).data('ruta');


            console.log(ruta_);

            var confirmar_ = window.confirm('¿Estás seguro de que deseas eliminar este archivo?');

            if (confirmar_) {
                /*var $parentDiv = $(this).closest('.inputs').parent();
                var ruta_doc = $parentDiv.find('#ruta_doc_i').val();
                var ruta_archivo = $parentDiv.find('#ruta_archivo_i').val();*/

                eliminarArchivo($this, ruta_);

                console.log("archivo eliminado");
            } else {
                console.log("cancelado");
            }
        });

        function eliminarArchivo($deleteBtn, ruta_doc) {

            var idsolicitud = $("#cod_solic_v").val();
            var dni_cli_t = $("#txt_dni").val();

            console.log(idsolicitud);

            $.ajax({
                type: 'POST',
                url: '../Controller/eliminarArchivos_Val.php',
                data: {
                    ruta_doc: ruta_doc,
                },
                success: function(response) {
                    console.log("archivo eliminado de la ruta: " + ruta_doc);
                    $deleteBtn.closest('.modal').modal('hide');
                    load_valorizaciones_(idsolicitud);
                },
                complete: function() {
                    load_valorizaciones_(idsolicitud);
                    setTimeout(function() {
                        $('#lst_docs_legal').modal('show');
                    }, 500);

                }
            });
        }

        $(document).ready(function() {
            $('.btn_get_fotos').on('click', function() {

                $('#details_fotos').modal('show');

                var id_solic_v = $("#cod_solic_v").val();
                var dni_cli_v = $("#dni_usu_v").val();

                get_imgs_valor(id_solic_v, dni_cli_v)


            });

            function get_imgs_valor(id_sol_v, dni) {
                $.ajax({
                    type: 'POST',
                    url: '../Controller/Get_Valorizacion_fotos.php',
                    data: {
                        id_solic_v: id_sol_v,
                        dni_cli_v: dni,
                    },
                    success: function(response) {

                        if (response.status === 'error') {
                            var errorMessage = $('<strong>').text(response.mensaje);
                            $('#lst_fotos').empty().append(errorMessage);
                        } else if (response.status === 'empty') {
                            var noFilesMessage = $('<strong>').text(response.mensaje);
                            $('#lst_fotos').empty().append(noFilesMessage);
                        } else {
                            var archivos = response.files;
                            var archivosLista = $('#lst_fotos');

                            archivosLista.empty();

                            console.log(archivos.length);

                            // Crear el elemento de carrusel activo
                            var carouselItemActive = $('<div class="carousel-item active">');
                            var imgActive = $('<img>')
                                .addClass('d-block w-100')
                                .attr('src', '../Valorizaciones/' + id_sol_v + '/' + dni + '/fotos_val/' + archivos[0])
                                .attr('alt', archivos[0]);
                            carouselItemActive.append(imgActive);
                            archivosLista.append(carouselItemActive);

                            // Generar elementos para los archivos restantes
                            for (var i = 1; i < archivos.length; i++) {
                                var carouselItem = $('<div class="carousel-item">');
                                var img = $('<img>')
                                    .addClass('d-block w-100')
                                    .attr('src', '../Valorizaciones/' + id_sol_v + '/' + dni + '/fotos_val/' + archivos[i])
                                    .attr('alt', archivos[i]);
                                carouselItem.append(img);
                                archivosLista.append(carouselItem);
                            }

                        }



                        document.addEventListener("DOMContentLoaded", function() {
                            const carousel = document.querySelector('#lst_fotos');
                            const firstImg = carousel.firstElementChild;
                            console.log(carousel.querySelectorAll(".imagen-slide img")[0]);
                            // const carousel = document.querySelector('#lst_fotos'),
                            //     firstImg = carousel.querySelectorAll(".imagen-slide img")[0];
                            const arrowIcons = document.querySelectorAll('#fotos_val i');


                            let isDragStart = false,
                                prevPageX, prevScrollLeft;

                            let firstImgWidth = firstImg.clientWidth + 15;

                            arrowIcons.forEach(icon => {
                                icon.addEventListener("click", () => {
                                    console.log(firstImgWidth);
                                    carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
                                })

                            });

                            const dragStart = (e) => {
                                isDragStart = true;
                                prevPageX = e.pageX;
                                prevScrollLeft = carousel.scrollLeft;
                            }

                            const dragGing = (e) => {
                                if (!isDragStart) return;
                                e.preventDefault();
                                let positionDiff = e.pageX - prevPageX;
                                carousel.scrollLeft = prevScrollLeft - positionDiff;
                            }

                            const dragStop = () => {
                                isDragStart = false;
                            }

                            carousel.addEventListener("mousedown", dragStart);
                            carousel.addEventListener("mousemove", dragGing);
                            carousel.addEventListener("mouseup", dragStop);
                        });
                    },


                    /* complete: function() {
                        initializeSlider();
                    },*/
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });


            }



            // function initializeSlider() {
            //     var fotos_ = $('#lst_fotos');
            //     console.log(fotos_);

            //     $('#lst_fotos').slick({
            //         infinite: true,
            //         slidesToShow: 1,
            //         slidesToScroll: 1,
            //         prevArrow: '<button type="button" class="slick-prev">Anterior</button>',
            //         nextArrow: '<button type="button" class="slick-next">Siguiente</button>',
            //     });
            // }

        });


        // $('#fotos_val').slick();
        // $('#lst_fotos').slick();
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



    <script>
        const makContentSlide = document.querySelector(".mak-content-slide");
        const goRight = document.querySelectorAll(".scroll-toggle");
        const goLeft = document.querySelector(".avanza_pa_atras");


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

            makContentSlide.style.transform = "translateX(0%)";

            goRight.forEach(element => {
                element.addEventListener("click", () => {
                    makContentSlide.style.transform = "translateX(-100%)";

                    var id_valo_soli = $(element).data('id_solic_val');
                    var id_valo_cli = $(element).data('id_cli');
                    var dni_cli = $(element).data('dni_cli');

                    get_details_solic(id_valo_soli, id_valo_cli, dni_cli);

                    getResumen(id_valo_soli, id_valo_cli, dni_cli);

                    $('#cod_solic_v').val(id_valo_soli);
                    $('#dni_usu_v').val(dni_cli);

                });
            });

            goLeft.addEventListener("click", () => {
                makContentSlide.style.transform = "translateX(0%)";
            });
        });
    </script>

    <script>
        const inputSelect = document.querySelector(".input-select");
        const textBox = document.querySelector(".textBox");
        const textBoxValue = document.querySelector("#status_solic_val_cbo");
        const selectOptions = document.querySelectorAll(".select-options div");
        const btnUpValo = document.querySelector("#subir_valor"),
            btnAddObs = document.querySelector("#add_obsv_v");
        //const btnDisble = document.querySelector("#bnValo_obs_save");
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

                if (dataValue === "200") {
                    textBox.value = "Finalizado";
                    //----
                    textBox.classList.add("bg-success");
                    textBox.classList.remove("bg-warning");
                    textBox.classList.remove("bg-secondary");
                    //----
                    btnUpValo.classList.remove("hidden");
                    btnUpValo.style.display = "block";
                    btnAddObs.classList.add("hidden");
                    btnAddObs.style.display = "none";

                    btnDisble_.disabled = false;

                } else if (dataValue === "400") {
                    textBox.value = "Observado";
                    //----
                    textBox.classList.add("bg-warning");
                    textBox.classList.remove("bg-secondary");
                    textBox.classList.remove("bg-success");
                    //----
                    btnUpValo.classList.add("hidden");
                    btnUpValo.style.display = "none";
                    btnAddObs.classList.remove("hidden");
                    btnAddObs.style.display = "block";

                    btnDisble_.disabled = false;

                } else {
                    textBox.value = "Pendiente";
                    //----
                    textBox.classList.add("bg-secondary");
                    textBox.classList.remove("bg-success");
                    textBox.classList.remove("bg-warning");
                    //----
                    btnUpValo.classList.add("hidden");
                    btnUpValo.style.display = "none";
                    btnAddObs.classList.add("hidden");
                    btnAddObs.style.display = "none";

                    btnDisble_.disabled = true;
                }

            });
        });
        // Cierra el menú desplegable
        inputSelect.classList.remove("active");
    </script>

    <script>
        const nav = document.querySelector(".nav-link");

        nav.addEventListener("click", () => {
            const htmlElement = document.querySelector("html");
            if (htmlElement.style.overflow === "hidden") {
                htmlElement.style.overflow = "auto";
            } else {
                htmlElement.style.overflow = "hidden";
            }
        });
    </script>

    <script>
        // TEXTAREA
        const textareas = document.querySelectorAll("textarea");
        textareas.forEach((textarea) => {
            textarea.addEventListener("keyup", e => {
                textarea.style.height = "auto";
                let scHeight = e.target.scrollHeight;
                textarea.style.height = `${scHeight}px`;
            })
        })
        // TEXTAREA
    </script>

    <!-- REQUIRED SCRIPTS -->
    <script src="../Vista/js/getResume.js"></script>
    <script src="../Vista/assets/functions.js"></script>
    <script src="../Vista/assets/excel.valorizacion.js"></script>

    <!-- jQuery -->
    <script src="../Vista/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../Vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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


    <!-- Data Tables Pluggin -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap4.min.js"></script>


    <script>
        $(document).ready(function() {
            $('.table_').DataTable({
                // responsive: true,
                // "dom": '<"row"<"col-sm-6"l><"col-sm-6"f>>t<"row"<"col-sm-6"i><"col-sm-6"p>>',
                dom: '<"row"<"col-sm-6"l><"col-sm-6"f>>tip',
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json", // URL del archivo de localización
                    "searchPlaceholder": "Buscar en la tabla..." // placeholder del Buscar.
                },
                "lengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "Todos"]
                ],
                // Otras opciones de DataTables
                "drawCallback": function(settings) {
                    $('.dataTables_length select').addClass('form-mak sect tableLenght');
                    $('.dataTables_filter input').addClass('form-mak sect');
                },
                "order": [
                    [0, "desc"]
                ],
            });
        });
    </script>



</body>

</html>