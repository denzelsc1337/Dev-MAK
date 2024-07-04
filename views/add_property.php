<?php
include_once('../Config/Conexion.php');

$cnx = new conexion();
$cadena = $cnx->abrirConexion();

$ID_prop = mysqli_query($cadena, "SELECT COUNT(*) + 1 AS total_props FROM propiedades");

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



    <?php include("../sesion.php") ?>


    <?php include './../header.php' ?>

    <section class="section_content">
        <div class="distribution">

            <?php include './../lateral_bar.php' ?>

            <div class="body-container">

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                        <span class="mak-control"><b>ID de la propiedad: <?php echo $ID->total_props; ?></b> </span>
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
                        <form method="POST" id="form_prop" enctype="multipart/form-data">

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
                                                <div class="">
                                                    <span>Título</span>
                                                    <div class="textarea-container">
                                                        <textarea id="title_prop" name="title_prop" class="mak-control txt-area" maxlength="80" placeholder="Escribir aquí."></textarea>
                                                        <div id="charCounter" class="char-counter">0/80</div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <span>Descripción</span>
                                                    <div class="textarea-container">
                                                        <textarea id="desc_prop" name="desc_prop" class="mak-control txt-area" maxlength="500" rows="15" placeholder="Escribir aquí."></textarea>
                                                        <div id="charCounter" class="char-counter">0/80</div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <span>Modalidad</span>
                                                    <ul class="nav nav-tabs">
                                                        <li class="tp-md mak-control btn_button" data-target="1">Venta</li>
                                                        <li class="tp-md mak-control btn_button" data-target="2">Alquiler</li>
                                                        <li class="tp-md mak-control btn_button" data-target="3">Proyecto</li>
                                                    </ul>
                                                    <input id="modalidad_prop" name="modalidad_prop" type="hidden">
                                                </div>
                                                <div class="mt-2">
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
                                                        <div class="control-group lcli terr">
                                                            <span>Frente:</span>
                                                            <div>
                                                                <input id="area_ocupada" name="area_ocupada" type="number" class="mak-control mr-2" placeholder="Escribe aquí">m²
                                                            </div>
                                                        </div>
                                                        <div class="control-group depa">
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
                                                        <!-- CASA -->
                                                        <div class="control-group depa casa">
                                                            <span>Dormitorios:</span>
                                                            <div>
                                                                <input id="dormitorios_" name="dormitorios_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div>
                                                        <div class="control-group depa casa edif">
                                                            <span>Baños:</span>
                                                            <div>
                                                                <input id="banos_" name="banos_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div>
                                                        <div class="control-group depa casa edif ofic lclc lcli">
                                                            <span>Cochera:</span>
                                                            <div>
                                                                <input id="cochera_" name="cochera_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div>
                                                        <div class="control-group depa casa edif ofic">
                                                            <span>N° de pisos:</span>
                                                            <div>
                                                                <input id="num_pisos_" name="num_pisos_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div>

                                                        <!-- CASA -->
                                                        <!-- OFICINA -->

                                                        <div class="control-group edif ofic lclc lcli">
                                                            <span>Ambientes:</span>
                                                            <div>
                                                                <input id="dormitorios_" name="dormitorios_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div>
                                                        <!-- <div class="control-group">
                                                            <span>Baños:</span>
                                                            <div>
                                                                <input id="banos_" name="banos_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div> -->
                                                        <!-- <div class="control-group">
                                                            <span>Cochera:</span>
                                                            <div>
                                                                <input id="cochera_" name="cochera_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div> -->
                                                        <!-- <div class="control-group edif">
                                                            <span>N° de pisos:</span>
                                                            <div>
                                                                <input id="num_pisos_" name="num_pisos_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div> -->

                                                        <!-- OFICINA -->
                                                        <!-- LOCAL COMERCIAL -->

                                                        <div class="control-group ofic lclc lcli">
                                                            <span>Baños:</span>
                                                            <div>
                                                                <input id="banos_" name="banos_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div>
                                                        <!-- <div class="control-group">
                                                            <span>Cochera:</span>
                                                            <div>
                                                                <input id="cochera_" name="cochera_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div> -->

                                                        <!-- LOCAL COMERCIAL -->
                                                        <!-- LOCAL INDUSTRIAL / ALMACEN -->

                                                        <div class="control-group lcli terr">
                                                            <span>Zonificación:</span>
                                                            <div>
                                                                <select name="" id="" class="mak-control w-75">

                                                                    <option selected disabled>Selecciona</option>
                                                                    <?php foreach ($selector_types_zon as $selector_zon) : ?>
                                                                        <option value="<?php echo $selector_zon[0]; ?>"><?php echo $selector_zon[1] ?></option>
                                                                    <?php endforeach ?>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="control-group lcli">
                                                            <span>Área de nave:</span>
                                                            <div>
                                                                <input id="banos_" name="banos_" type="number" class="mak-control w-75 mr-2" placeholder="0"> ml
                                                            </div>
                                                        </div>
                                                        <div class="control-group lcli">
                                                            <span>Altura de nave:</span>
                                                            <div>
                                                                <input id="alt_nave" name="alt_nave" type="number" class="mak-control w-75 mr-2" placeholder="0"> ml
                                                            </div>
                                                        </div>

                                                        <!-- LOCAL INDUSTRIAL / ALMACEN -->
                                                        <!-- TERRENO -->
                                                        <!-- <div class="control-group">
                                                            <span>Zonificación:</span>
                                                            <div>
                                                                <input id="dormitorios_" name="dormitorios_" type="number" class="mak-control w-75" placeholder="0">
                                                            </div>
                                                        </div> -->
                                                        <div class="control-group  terr">
                                                            <span>Parámetros:</span>
                                                            <div>
                                                                <input id="banos_" name="banos_" type="number" class="mak-control w-75 mr-2" placeholder="0">pisos
                                                            </div>
                                                        </div>
                                                        <!-- TERRENO -->
                                                        <!-- COMISION -->
                                                        <div class="mak-control-grid comision hide">
                                                            <div class="control-group depa casa edif ofic lclc lcli terr">
                                                                <span>Porcentaje de comisión:</span>
                                                                <div>
                                                                    <input id="porcen_comision" name="porcen_comision" type="number" class="mak-control mr-2" placeholder="Escribe aquí"> %
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- COMISION -->
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
                                                    <button type="button" id="reset-selected">Reset Selected</button>
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
                                                    <button id="reset-selected">Reset Selected</button>

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

                                                <div class="row">
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
                                                <div class="row">
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
                                                        <input id="" name="" type="text" class="mak-control w-100" placeholder="Escribe una palabra clave">
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


                                                    <div class="up-archive file-item">
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
                                                <div class="caracteristicas">

                                                    <label class="mak-options cursor m-0 depa" for="aire_acondicionado">
                                                        <input id="aire_acondicionado" name="aire_acondicionado" type="checkbox" class="mak-control-event">
                                                        <span>Aire acondicionado</span>
                                                        <input type="number" min="0" id="cant_aire_acondicionado" name="cant_aire_acondicionado" class="mak-options-brd-bottom p-0">
                                                    </label>

                                                    <label class="mak-options cursor m-0" for="area_juegos">
                                                        <input id="area_juegos" name="area_juegos" type="checkbox" class="mak-control-event">
                                                        <span>Área de juegos infantiles</span>
                                                        <input type="number" min="0" id="cant_area_juegos" name="cant_area_juegos" class="mak-options-brd-bottom p-0">
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="area_lavanderia">
                                                        <input id="area_lavanderia" name="area_lavanderia" type="checkbox" class="">
                                                        <span>Área de lavandería</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="area_verde">
                                                        <input id="area_verde" name="area_verde" type="checkbox" class="">
                                                        <span>Área(s) verde(s)</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="altillo">
                                                        <input id="altillo" name="altillo" type="checkbox" class="">
                                                        <span>Altillos</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="canchas">
                                                        <input id="canchas" name="canchas" type="checkbox" class="">
                                                        <span>Canchas deportivas</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="cer_leed">
                                                        <input id="cer_leed" name="cer_leed" type="checkbox" class="">
                                                        <span>Certificación LEED</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="gym">
                                                        <input id="gym" name="gym" type="checkbox" class="">
                                                        <span>Gimnasio</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="seguridad">
                                                        <input id="seguridad" name="seguridad" type="checkbox" class="">
                                                        <span>Guardería/Seguridad privada</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="ethernet">
                                                        <input id="ethernet" name="ethernet" type="checkbox" class="">
                                                        <span>Internet/Wifi</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="video_vigilancia">
                                                        <input id="video_vigilancia" name="video_vigilancia" type="checkbox" class="">
                                                        <span>Video vigilencia</span>
                                                    </label>
                                                    <div class="mak-options details brd-out cursor m-0" data-bs-toggle="modal" data-bs-target="#verOptions_01">
                                                        <i class="fa-solid fa-plus"></i>
                                                        <span>Ver más opciones</span>
                                                    </div>
                                                </div>
                                                <h5>Carácteristicas Generales</h5>
                                                <div class="caracteristicas">
                                                    <label class="mak-options cursor m-0" for="acabados_lujo">
                                                        <input id="acabados_lujo" name="acabados_lujo" type="checkbox" class="mak-control-event">
                                                        <span>Acabados de lujo</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="amueblado">
                                                        <input id="amueblado" name="amueblado" type="checkbox" class="mak-control-event">
                                                        <span>Amueblado</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="acceso_asfalto">
                                                        <input id="acceso_asfalto" name="acceso_asfalto" type="checkbox" class="mak-control-event">
                                                        <span>Av. acceso asfaltada</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="acceso_afirmado">
                                                        <input id="acceso_afirmado" name="acceso_afirmado" type="checkbox" class="mak-control-event">
                                                        <span>Av. acceso afirmada</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="ascensor">
                                                        <input id="ascensor" name="ascensor" type="checkbox" class="mak-control-event">
                                                        <span>Ascensor</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="banios_servicio">
                                                        <input id="banios_servicio" name="banios_servicio" type="checkbox" class="mak-control-event">
                                                        <span>Baños de servicio</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="guardia">
                                                        <input id="guardia" name="guardia" type="checkbox" class="mak-control-event">
                                                        <span>Caseta de guardia</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="cerca_electrica">
                                                        <input id="cerca_electrica" name="cerca_electrica" type="checkbox" class="mak-control-event">
                                                        <span>Cerca electrica</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="chimenea">
                                                        <input id="chimenea" name="chimenea" type="checkbox" class="mak-control-event">
                                                        <span>Chimenea</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="tipo_cochera">
                                                        <input id="tipo_cochera" name="tipo_cochera" type="checkbox" class="mak-control-event">
                                                        <span>Tipo cochera</span>
                                                    </label>
                                                    <div class="mak-options details brd-out cursor m-0" data-bs-toggle="modal" data-bs-target="#verOptions_02">
                                                        <i class="fa-solid fa-plus"></i>
                                                        <span>Ver más opciones</span>
                                                    </div>
                                                </div>
                                                <h5>Exteriores</h5>
                                                <div class="caracteristicas">
                                                    <label class="mak-options cursor m-0" for="bbq">
                                                        <input id="bbq" name="bbq" type="checkbox" class="mak-control-event">
                                                        <span>Área BBQ</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="balcon">
                                                        <input id="balcon" name="balcon" type="checkbox" class="mak-control-event">
                                                        <span>Balcón(es)</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="acceso_tierra">
                                                        <input id="acceso_tierra" name="acceso_tierra" type="checkbox" class="mak-control-event">
                                                        <span>Acceso por camino a tierra</span>
                                                    </label>
                                                </div>
                                                <h5>Áreas comunes</h5>
                                                <div class="caracteristicas">
                                                    <label class="mak-options cursor m-0" for="bodega">
                                                        <input id="bodega" name="bodega" type="checkbox" class="mak-control-event">
                                                        <span>Bodega(s)</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="comedor_diario">
                                                        <input id="comedor_diario" name="comedor_diario" type="checkbox" class="mak-control-event">
                                                        <span>Comedor diario</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="club_house">
                                                        <input id="club_house" name="club_house" type="checkbox" class="mak-control-event">
                                                        <span>Club house</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="dormitorio_banio">
                                                        <input id="dormitorio_banio" name="dormitorio_banio" type="checkbox" class="mak-control-event">
                                                        <span>Dormitorio principal con baño</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="desague">
                                                        <input id="desague" name="desague" type="checkbox" class="mak-control-event">
                                                        <span>Desagüe</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="equipado">
                                                        <input id="equipado" name="equipado" type="checkbox" class="mak-control-event">
                                                        <span>Equipado</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="ingreso_indepen">
                                                        <input id="ingreso_indepen" name="ingreso_indepen" type="checkbox" class="mak-control-event">
                                                        <span>Ingreso independiente</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="patio">
                                                        <input id="patio" name="patio" type="checkbox" class="mak-control-event">
                                                        <span>Patio</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="parque_interno">
                                                        <input id="parque_interno" name="parque_interno" type="checkbox" class="mak-control-event">
                                                        <span>Parque interno</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="sauna">
                                                        <input id="sauna" name="sauna" type="checkbox" class="mak-control-event">
                                                        <span>Sauna</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="sala_estar">
                                                        <input id="sala_estar" name="sala_estar" type="checkbox" class="mak-control-event">
                                                        <span>Sala de estar</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="sala_entreten">
                                                        <input id="sala_entreten" name="sala_entreten" type="checkbox" class="mak-control-event">
                                                        <span>Sala de entretenimiento</span>
                                                    </label>
                                                    <label class="mak-options cursor m-0" for="solarium">
                                                        <input id="solarium" name="solarium" type="checkbox" class="mak-control-event">
                                                        <span>Solarium</span>
                                                    </label>
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
                                            <div class="caracteristicas">
                                                <label class="mak-options cursor m-0" for="kitchenette">
                                                    <input id="kitchenette" name="kitchenette" type="checkbox" class="">
                                                    <span>Kitchenette</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="parrilla">
                                                    <input id="parrilla" name="parrilla" type="checkbox" class="">
                                                    <span>Parrilla</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="iluminaria">
                                                    <input id="iluminaria" name="iluminaria" type="checkbox" class="">
                                                    <span>Posee iluminarias</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="alarma">
                                                    <input id="alarma" name="alarma" type="checkbox" class="">
                                                    <span>Sistema de alarma</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="serv_basicos">
                                                    <input id="serv_basicos" name="serv_basicos" type="checkbox" class="">
                                                    <span>Servicios básicos (agua/luz)</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="limpieza">
                                                    <input id="limpieza" name="limpieza" type="checkbox" class="">
                                                    <span>Servicio de limpieza</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="telev">
                                                    <input id="telev" name="telev" type="checkbox" class="">
                                                    <span>Televisión por cable</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="aire">
                                                    <input id="aire" name="aire" type="checkbox" class="">
                                                    <span>Tipo de aire</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="uso_comercial">
                                                    <input id="uso_comercial" name="uso_comercial" type="checkbox" class="">
                                                    <span>Uso comercial</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="uso_profesional">
                                                    <input id="uso_profesional" name="uso_profesional" type="checkbox" class="">
                                                    <span>Uso profesional</span>
                                                </label>
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
                                            <div class="caracteristicas">
                                                <label class="mak-options cursor m-0" for="cuartos_servicio">
                                                    <input id="cuartos_servicio" name="cuartos_servicio" type="checkbox" class="">
                                                    <span>Cuartos de servicio</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Centros comerciales cercanos</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Cerca a colegios</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Closet</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Cocina</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Cerca a parque</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Cerco vivo</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Cerco de material vivo</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>En condominio</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Frente a parque</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Frente al mar</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Intercomunicador</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Jacuzzi</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Jardín(es)</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Mascota(s)</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Niveles construidos</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Piscina</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Reposteros en cocina</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Seguridad</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Sistema contra incendios</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Terraza</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Vista a la ciudad</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Vista al mar</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Vista a parque</span>
                                                </label>
                                                <label class="mak-options cursor m-0" for="">
                                                    <input id="" name="" type="checkbox" class="">
                                                    <span>Walk in closet</span>
                                                </label>
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