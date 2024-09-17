<?php
include_once('../Config/Conexion.php');
require_once('../Config/security.php');
include '../Controller/path.php';

require_once('../Controller/controladorListar.php');

$cnx = new conexion();
$cadena = $cnx->abrirConexion();

$ID_prop = mysqli_query($cadena, "SELECT id_prop + 1 AS total_props FROM propiedades ORDER BY id_prop DESC LIMIT 1;");

$ID = mysqli_fetch_object($ID_prop);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAK</title>


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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="../Vista/plugins/jquery/jquery.min.js"></script>

    <style>
        html {
            overflow-x: hidden;
        }

        html::-webkit-scrollbar {
            width: 1px;
        }

        #map {
            height: 200px;
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

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                        <span class="mak-control"><b>ID de la propiedad: <?php //echo $ID->total_props; 
                                                                            if (isset($ID) && $ID !== null) {
                                                                                echo $ID->total_props;
                                                                            } else {
                                                                                echo "1";
                                                                            }
                                                                            ?></b> </span>

                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                        <div class="content-filter justify-between">
                            <div class="filter-item d-flex">
                                <!-- <div class="tab mak-control mak-primary btn_button" data-target="tab-item-1">Sin anunciar propiedad</div> -->
                                <div class="mak-control btn_button" data-tab="tab-item-1"><input type="checkbox" class="tab-checkbox" value="1" />Anunciar propiedad</div>
                                <div class="mak-control btn_button" data-tab="tab-item-2"><input type="checkbox" class="tab-checkbox" value="2" />Aparecer en búsqueda</div>
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
                    <div id="tab-item-1" class="tab-content active">
                        <form method="POST" id="form_prop">

                            <input type="hidden" id="id_usu" name="id_usu" value="<?php echo $_SESSION['id_usu']; ?>">
                            <!-- <input type="hidden" id="dni_usu" name="dni_usu" value="<?php echo $_SESSION['dni_usu']; ?>"> -->
                            <!-- <input type="hidden" id="usu_asig" name="usu_asig" value="<?php echo $_SESSION['id_usu']; ?>"> -->
                            <input class="anunciar" type="hidden">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pr-0 mb-3">
                                        <div class="mak-bdr radius-plus">
                                            <div class="card-body">
                                                <div class="card-head justify-between mb-3">
                                                    <div class="mak-control d-flex">
                                                        <img src="../Vista/images/box.svg" alt="">
                                                        Información de la propiedad
                                                    </div>
                                                    <div class="mak-control mak-tertiary btn_button clear">
                                                        <i class="fa-solid fa-trash"></i>&nbsp;Limpiar filtro
                                                    </div>
                                                </div>
                                                <!-- <div class=""> -->
                                                <div class="control-group">
                                                    <span>Título</span>
                                                    <div class="textarea-container">
                                                        <textarea id="title_prop" name="title_prop" class="mak-control txt-area" maxlength="80" placeholder="Escribir aquí."></textarea>
                                                        <div id="charCounter" class="char-counter">0/80</div>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <span>Descripción</span>
                                                    <div class="textarea-container">
                                                        <textarea id="desc_prop" name="desc_prop" class="mak-control txt-area" maxlength="500" rows="15" placeholder="Escribir aquí."></textarea>
                                                        <div id="charCounter" class="char-counter">0/80</div>
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <span>Modalidad</span>
                                                    <ul class="nav nav-tabs">
                                                        <li class="tp-md mak-control btn_button" data-target="1">Venta</li>
                                                        <li class="tp-md mak-control btn_button" data-target="2">Alquiler</li>
                                                        <li class="tp-md mak-control btn_button" data-target="3">Proyecto</li>
                                                    </ul>
                                                    <input id="modalidad_prop" name="modalidad_prop" type="hidden">
                                                </div>
                                                <div class="control-group mt-2">
                                                    <span>Tipo de inmueble</span>
                                                    <?php
                                                    require_once('../Controller/controladorListar.php');
                                                    ?>

                                                    <!-- <select id="tipo_prop" name="tipo_prop" class="mak-control w-100" value="-1"></select> -->
                                                    <!-- <select class="mak-control w-100" id="tipo_prop_" name="tipo_prop_">
                                                        <option selected disabled>Selecciona</option>
                                                        <?php foreach ($selector_types_props as $selectorTypes_props) : ?>
                                                            <option value="<?php echo $selectorTypes_props[0]; ?>"><?php echo $selectorTypes_props[1] ?></option>
                                                        <?php endforeach ?>
                                                    </select> -->
                                                    <select id="tipo_prop" name="tipo_prop" class="mak-control w-100" value=""></select>
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pr-0 mb-3">
                                        <div class="mak-bdr radius-plus">
                                            <div class="card-body">
                                                <div class="card-head justify-between mb-3">
                                                    <div class="mak-control d-flex">
                                                        <img src="../Vista/images/file-plus.svg" alt="">
                                                        Información adicional
                                                    </div>
                                                    <div class="mak-control mak-tertiary btn_button clear">
                                                        <i class="fa-solid fa-trash"></i>&nbsp;Limpiar filtro
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mak-control-grid">
                                                        <div class="control-group">
                                                            <span>Precio:</span>
                                                            <div class="content-input">
                                                                <span>USD</span>
                                                                <input id="precio_" name="precio_" type="number" class="mak-control w-100" placeholder="Escribe aquí">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <span>Precio por m²:</span>
                                                            <div class="content-input">
                                                                <span>USD</span>
                                                                <input id="precio_m2" name="precio_m2" type="number" class="mak-control w-100" placeholder="Escribe aquí">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <span>Área total:</span>
                                                            <div>
                                                                <input id="area_total" name="area_total" type="number" class="mak-control mr-2" placeholder="Escribe aquí">m²
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <span>Área construida:</span>
                                                            <div>
                                                                <input id="area_construida" name="area_construida" type="number" class="mak-control mr-2" placeholder="Escribe aquí">m²
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <span>Área ocupada:</span>
                                                            <div>
                                                                <input id="area_ocupada" name="area_ocupada" type="number" class="mak-control mr-2" placeholder="Escribe aquí">m²
                                                            </div>
                                                        </div>
                                                        <div class="control-group local_industrial terr_lote">
                                                            <span>Frente:</span>
                                                            <div>
                                                                <input id="frente" name="frente" type="number" class="mak-control mr-2" placeholder="Escribe aquí">m²
                                                            </div>
                                                        </div>
                                                        <div class="control-group departamento">
                                                            <span>Tipo de Departamento:</span>
                                                            <!-- <select class="mak-control w-100" id="tipo_prop_" name="tipo_prop_">
                                                                <option selected disabled>Selecciona</option>
                                                                <?php foreach ($selector__sub_types_props as $selectorSubTypes_props) : ?>
                                                                    <option value="<?php echo $selectorSubTypes_props[0]; ?>"><?php echo $selectorSubTypes_props[1] ?></option>
                                                                <?php endforeach ?>
                                                            </select> -->
                                                            <select id="sub_tipo_prop" name="sub_tipo_prop" class="mak-control w-100" value=""></select>
                                                        </div>
                                                    </div>
                                                    <div class="mak-control-full">

                                                        <div class="control-group departamento casa">
                                                            <span>Dormitorios:</span>
                                                            <div>
                                                                <input id="dormitorios_" name="dormitorios_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div>
                                                        <div class="control-group departamento casa hotel oficina local_comercial local_industrial">
                                                            <span>Baños:</span>
                                                            <div>
                                                                <input id="banos_" name="banos_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div>
                                                        <div class="control-group departamento casa hotel oficina local_comercial local_industrial">
                                                            <span>Cochera:</span>
                                                            <div>
                                                                <input id="cochera_" name="cochera_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div>
                                                        <div class="control-group departamento casa hotel oficina">
                                                            <span>N° de pisos:</span>
                                                            <div>
                                                                <input id="num_pisos_" name="num_pisos_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div>
                                                        <div class="control-group hotel oficina local_comercial local_industrial">
                                                            <span>Ambientes:</span>
                                                            <div>
                                                                <input id="ambientes_" name="ambientes_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div>

                                                        <div class="control-group local_industrial terr_lote">
                                                            <span>Zonificación:</span>
                                                            <div>
                                                                <select name="zonificacion_" id="zonificacion_" class="mak-control w-75">

                                                                    <option selected disabled>Selecciona</option>
                                                                    <?php foreach ($selector_types_zon as $selector_zon) : ?>
                                                                        <option value="<?php echo $selector_zon[0]; ?>"><?php echo $selector_zon[1] ?></option>
                                                                    <?php endforeach ?>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="control-group local_industrial">
                                                            <span>Área de nave:</span>
                                                            <div>
                                                                <input id="area_nave_" name="area_nave_" type="number" class="mak-control w-75 mr-2" placeholder="0"> ml
                                                            </div>
                                                        </div>
                                                        <div class="control-group local_industrial">
                                                            <span>Altura de nave:</span>
                                                            <div>
                                                                <input id="alt_nave_" name="alt_nave_" type="number" class="mak-control w-75 mr-2" placeholder="0"> ml
                                                            </div>
                                                        </div>
                                                        <div class="control-group terr_lote">
                                                            <span>Parámetros:</span>
                                                            <div>
                                                                <input id="parametros_" name="parametros_" type="number" class="mak-control w-75 mr-2" placeholder="0">pisos
                                                            </div>
                                                        </div>
                                                        <div class="mak-control-grid comision">
                                                            <div class="control-group departamento casa oficina hotel terr_lote local_comercial local_industrial">
                                                                <span>Porcentaje de comisión:</span>
                                                                <div>
                                                                    <input id="porcen_comision_" name="porcen_comision_" type="number" class="mak-control mr-2" placeholder="Escribe aquí"> %
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0 mb-3">
                                        <div class="mak-bdr radius-plus">
                                            <div class="card-body">
                                                <div class="card-head justify-between mb-3">
                                                    <div class="mak-control d-flex">
                                                        <img src="../Vista/images/map.svg" alt="">
                                                        HR, PU & Copia Literal&nbsp;<img src="./../Vista/images/alert.svg" alt="" width="15" height="15">
                                                    </div>
                                                    <div class="mak-control mak-tertiary btn_button clear">
                                                        <i class="fa-solid fa-trash"></i>&nbsp;Limpiar filtro
                                                    </div>
                                                    <!-- <button type="button" id="reset-selected">Reset Selected</button> -->
                                                </div>
                                                <div class="row">

                                                    <table id="upTable" class="table table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <input type="checkbox" id="select-all">
                                                                </th>

                                                                <th>Archivo</th>
                                                                <th>Tipo</th>
                                                                <th>Tamaño</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-file-archive">

                                                            <input type="file" id="table-inputFile" name="table-inputFile[]" data-target="" multiple hidden>

                                                            <tr class="tr-list-upfile dni" data-row-target="DNI">
                                                                <td scope="row">
                                                                    <!-- <div class="upfile1 cursor">
                                                            <i class="fa-solid fa-plus"></i>
                                                            
                                                        </div> -->
                                                                    <label for="table-inputFile"><i class="fa-solid fa-plus"></i></label>
                                                                </td>
                                                                <td class="placeholder">
                                                                    <span>Documentos (DNI)</span>
                                                                    <div class="progress-area">
                                                                        <!-- <li class="row">
                                                                <div class="content">
                                                                    <div class="details">
                                                                        <span class="name"></span>
                                                                        <span class="percent"></span>
                                                                    </div>
                                                                    <div class="progress-bar">
                                                                        <div class="progress"></div>
                                                                    </div>
                                                                </div>
                                                            </li> -->
                                                                    </div>
                                                                </td>
                                                                <td class="placeholder">(png, jpg, pdf)</td>
                                                                <td class="placeholder">1 KB</td>
                                                            </tr>
                                                            <tr class="tr-list-upfile" data-row-target="P_U">
                                                                <td scope="row">
                                                                    <!-- <div class="upfile1 cursor">
                                                            <i class="fa-solid fa-plus"></i>
                                                            
                                                        </div> -->
                                                                    <label for="table-inputFile"><i class="fa-solid fa-plus"></i></label>
                                                                </td>
                                                                <td class="placeholder">
                                                                    <span>Documentos (PU)</span>
                                                                    <div class="progress-area">
                                                                        <!-- <li class="row">
                                                                <div class="content">
                                                                    <div class="details">
                                                                        <span class="name"></span>
                                                                        <span class="percent"></span>
                                                                    </div>
                                                                    <div class="progress-bar">
                                                                        <div class="progress"></div>
                                                                    </div>
                                                                </div>
                                                            </li> -->
                                                                    </div>
                                                                </td>
                                                                <td class="placeholder">(png, jpg, pdf)</td>
                                                                <td class="placeholder">1 KB</td>
                                                            </tr>
                                                            <tr class="tr-list-upfile" data-row-target="H_R">
                                                                <td scope="row">
                                                                    <!-- <div class="upfile1 cursor">
                                                            <i class="fa-solid fa-plus"></i>
                                                            
                                                        </div> -->
                                                                    <label for="table-inputFile"><i class="fa-solid fa-plus"></i></label>
                                                                </td>
                                                                <td class="placeholder">
                                                                    <span>Documentos (HR)</span>
                                                                    <div class="progress-area">
                                                                        <!-- <li class="row">
                                                                <div class="content">
                                                                    <div class="details">
                                                                        <span class="name"></span>
                                                                        <span class="percent"></span>
                                                                    </div>
                                                                    <div class="progress-bar">
                                                                        <div class="progress"></div>
                                                                    </div>
                                                                </div>
                                                            </li> -->
                                                                    </div>
                                                                </td>
                                                                <td class="placeholder">(png, jpg, pdf)</td>
                                                                <td class="placeholder">1 KB</td>
                                                            </tr>
                                                            <tr class="tr-list-upfile" data-row-target="C_L">
                                                                <td scope="row">
                                                                    <!-- <div class="upfile1 cursor">
                                                            <i class="fa-solid fa-plus"></i>
                                                            
                                                        </div> -->
                                                                    <label for="table-inputFile"><i class="fa-solid fa-plus"></i></label>
                                                                </td>
                                                                <td class="placeholder">
                                                                    <span>Documentos (Copia Literal)</span>
                                                                    <div class="progress-area">
                                                                        <!-- <li class="row">
                                                                <div class="content">
                                                                    <div class="details">
                                                                        <span class="name"></span>
                                                                        <span class="percent"></span>
                                                                    </div>
                                                                    <div class="progress-bar">
                                                                        <div class="progress"></div>
                                                                    </div>
                                                                </div>
                                                            </li> -->
                                                                    </div>
                                                                </td>
                                                                <td class="placeholder">(png, jpg, pdf)</td>
                                                                <td class="placeholder">1 KB</td>
                                                            </tr>
                                                            <tr class="tr-list-upfile" data-row-target="OTROS">
                                                                <td scope="row">
                                                                    <!-- <div class="upfile1 cursor">
                                                            <i class="fa-solid fa-plus"></i>
                                                            
                                                        </div> -->
                                                                    <label for="table-inputFile"><i class="fa-solid fa-plus"></i></label>
                                                                </td>
                                                                <td class="placeholder">
                                                                    <span>Documentos (Otros documentos)</span>
                                                                </td>
                                                                <td class="placeholder">(png, jpg, pdf)</td>
                                                                <td class="placeholder">1 KB</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- <button id="reset-selected">Reset Selected</button> -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0 mb-3">
                                        <div class="mak-bdr radius-plus">
                                            <div class="card-body">
                                                <div class="card-head justify-between mb-3">
                                                    <div class="mak-control d-flex">
                                                        <img src="../Vista/images/link.svg" alt="">
                                                        Colocar URL de videos
                                                    </div>
                                                    <!-- <div class="mak-control mak-tertiary btn_button">
                                        <https: class="fa-solid fa-trash"></https://pe.indeed.com/viewjob?from=appshareios%2CiaBackPress&jk=e3299165c6acc93ai>&nbsp;Eliminar todos los archivos
                                    </div> -->
                                                </div>

                                                <div class="control-group row">
                                                    <!-- <div class="col-md-12 d-flex"> -->
                                                    <div class="col-md-12 mb-2">
                                                        <span class="mak-title-lbl">Video de YouTube <span class="mak-tertiary">(Opcional)</span></span>
                                                        <input id="vid-yt-prop" name="vid-yt-prop" type="text" class="mak-control w-100" placeholder="Enter email">
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <span class="mak-title-lbl">Vídeo de recorrido <span class="mak-tertiary">(Opcional)</span></span>
                                                        <input id="vid-rec-prop" name="vid-rec-prop" type="text" class="mak-control w-100" placeholder="Enter email">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0 mb-3">
                                        <div class="mak-bdr radius-plus">
                                            <div class="card-body">
                                                <div class="card-head justify-between mb-3">
                                                    <div class="mak-control d-flex">
                                                        <img src="../Vista/images/map.svg" alt="">
                                                        Dirección
                                                    </div>
                                                    <div class="mak-control mak-tertiary btn_button clear">
                                                        <i class="fa-solid fa-trash"></i>&nbsp;Limpiar filtro
                                                    </div>
                                                </div>
                                                <div class="control-group row">
                                                    <!-- <div class="col-md-12 d-flex"> -->
                                                    <div class="col-md-6 mb-2">
                                                        <span>Departamento</span>
                                                        <select id="depa_prop" name="depa_prop" class="mak-control w-100"></select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <span>Provincia</span>
                                                        <select id="prov_prop" name="prov_prop" class="mak-control w-100"></select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <span>Distrito</span>
                                                        <select id="distr_prop" name="distr_prop" class="mak-control w-100"></select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <span>Urbanización <span class="mak-tertiary">(Opcional)</span></span>
                                                        <input id="urbani_" name="urbani_" type="text" class="mak-control w-100" placeholder="Escribe una palabra clave">
                                                    </div>
                                                    <div class="col-md-7 mb-2">
                                                        <span>Localización en el mapa</span>
                                                        <input id="direccion_" name="direccion_" type="text" class="mak-control w-100" id="" placeholder="Escribe una dirección">
                                                    </div>
                                                    <div class="col-md-5 mb-2">
                                                        <span>&nbsp;</span>
                                                        <select name="" id="" class="mak-control w-100">
                                                            <option value="">1</option>
                                                            <option value="">2</option>
                                                            <option value="">3</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">

                                                        <h1>Buscar Dirección en el Mapa</h1>
                                                        <input id="direccion" type="text" placeholder="Ingresa una dirección">
                                                        <button onclick="buscarDireccion()">Buscar</button>
                                                        <div id="map"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="mak-bdr radius-plus">
                                            <div class="card-body">
                                                <div class="card-head justify-between mb-3">
                                                    <div class="mak-control d-flex">
                                                        <img src="../Vista/images/map.svg" alt="">
                                                        Subir fotos
                                                    </div>
                                                    <div class="mak-control mak-tertiary btn_button clear">
                                                        <i class="fa-solid fa-trash"></i>&nbsp;Eliminar todos los archivos
                                                    </div>
                                                </div>

                                                <div class="file-content">
                                                    <div class="up-archive file-item up_pictures">
                                                        <div id="btnFile" class="item-box">
                                                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                                            Subir imágenes
                                                        </div>
                                                        <input id="inputFile" name="inputFile[]" type="file" multiple hidden>
                                                    </div>

                                                    <div class="drop-archive">
                                                        <h1>Soltar Archivos</h1>
                                                    </div>

                                                </div>

                                                <!-- <div class="file-content">
                                                    <div class="up-archive">
                                                        <input type="file" class="file-selector-input" multiple hidden>

                                                        <div id="btnFile" class="item-box file-selector">
                                                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                                            Subir imágenes
                                                        </div>
                                                    </div>
                                                    <div class="drop-archive">
                                                        <div class="drop-here">Soltar aquí</div>
                                                    </div>

                                                </div> -->
                                                <!-- <div class="list-section">
                                                    <div class="list-title">Uploaded Files</div>
                                                    <div class="list"></div>
                                                </div> -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                        <div class="mak-bdr radius-plus">
                                            <div class="card-body chks">
                                                <div class="card-head justify-between mb-3">
                                                    <div class="mak-control d-flex">
                                                        <img src="../Vista/images/map.svg" alt="">
                                                        Características de la propiedad
                                                    </div>
                                                    <div class="mak-control mak-tertiary btn_button clear">
                                                        <i class="fa-solid fa-trash"></i>&nbsp;Limpiar filtros
                                                    </div>
                                                </div>
                                                <h5>Servicios</h5>
                                                <div class="caracteristicas servicios">
                                                    <div class="mak-options details brd-out cursor m-0" data-bs-toggle="modal" data-bs-target="#verOptions_01">
                                                        <i class="fa-solid fa-plus"></i>
                                                        <span>Ver más opciones</span>
                                                    </div>
                                                </div>
                                                <h5>Carácteristicas Generales</h5>
                                                <div class="caracteristicas generales">
                                                    <div class="mak-options details brd-out cursor m-0" data-bs-toggle="modal" data-bs-target="#verOptions_02">
                                                        <i class="fa-solid fa-plus"></i>
                                                        <span>Ver más opciones</span>
                                                    </div>
                                                </div>
                                                <h5>Áreas comunes</h5>
                                                <div class="caracteristicas comunes">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <button id="saveBtn" type="button" class="mak-control mak-primary btn_button">
                                    Guardar cambios
                                </button>
                            </div>

                            <!-- MODALES -->

                            <!-- VER 1RAS OPCIONES ADD_PROPERTY  -->
                            <div class="modal fade" id="verOptions_01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title" id="exampleModalLabel">Más servicios 1</h1>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body chks">
                                            <div class="caracteristicas servicios_plus">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn mak-outline" data-bs-dismiss="modal">Cancelar</button>
                                            <button id="asd" type="button" class="btn mak-primary">Hecho</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- VER 1RAS OPCIONES ADD_PROPERTY  -->

                            <!-- VER 2DAS OPCIONES ADD_PROPERTY  -->
                            <div class="modal fade" id="verOptions_02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title" id="exampleModalLabel">Más servicios 2</h1>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body chks">
                                            <div class="caracteristicas generales_plus">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn mak-outline" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn mak-primary">Hecho</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- VER 2DAS OPCIONES ADD_PROPERTY  -->

                            <!-- MODALES -->



                        </form>
                    </div>
                </div>
            </div>

            <?php include './../lateral_bar_right.php' ?>

        </div>

    </section>


    <!--GOOGLE MAPS TESTING-->
    <script>
        let map;
        let marker;
        let geocoder;
        let autocomplete;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -34.397,
                    lng: 150.644
                },
                zoom: 8
            });

            geocoder = new google.maps.Geocoder();
            autocomplete = new google.maps.places.Autocomplete(document.getElementById('direccion'));

            marker = new google.maps.Marker({
                map: map,
                position: {
                    lat: -34.397,
                    lng: 150.644
                }
            });

            autocomplete.addListener('place_changed', function() {
                const place = autocomplete.getPlace();
                if (!place.geometry) {
                    console.log("No se encontró el lugar");
                    return;
                }

                map.setCenter(place.geometry.location);
                map.setZoom(14);

                marker.setPosition(place.geometry.location);
            });
        }

        function buscarDireccion() {
            const address = document.getElementById('direccion').value;
            geocoder.geocode({
                address: address
            }, function(results, status) {
                if (status === 'OK') {
                    map.setCenter(results[0].geometry.location);
                    marker.setPosition(results[0].geometry.location);
                } else {
                    alert('Geocode no tuvo éxito debido a: ' + status);
                }
            });
        }

        // Inicializa el mapa después de que se cargue la API de Google Maps
        window.initMap = initMap;
    </script>
    <!--GOOGLE MAPS TESTING-->


    <!-- REQUIRED SCRIPTS -->
    <script src="./../Vista/assets/add_property.js"></script>
    <script src="./../Vista/assets/selection_types.js"></script>
    <!-- <script src="./../Vista/js/upFiles.js"></script> -->
    <script src="./../Vista/js/upload.pictures.js"></script>
    <script src="./../Vista/js/upload.files.js"></script>

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
    <!-- Page specific script -->

    <script src="../Vista/assets/dash.js"></script>
    <!-- script modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


</body>