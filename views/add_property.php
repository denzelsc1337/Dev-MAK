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

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Vista/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">

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


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNO5GraIm8rWrrLbWt-Gv9GxsenRng-8o&libraries=places" async defer></script>
    <style>
        html {
            overflow-x: hidden;
        }

        html::-webkit-scrollbar {
            width: 1px;
        }

        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body class="mak content">

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
            <span class="mak-control"><b>ID de la propiedad: <?php echo $ID->total_props; ?></b> </span>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
            <div class="content-filter justify-between">
                <div class="filter-item d-flex">
                    <div class="tab mak-control mak-primary btn_button" data-target="tab-item-1">Sin anunciar propiedad</div>
                    <div class="tab mak-control btn_button" data-target="tab-item-2"><input type="checkbox" class="tab-checkbox" value="1" />Anunciar propiedad</div>
                    <div class="tab mak-control btn_button" data-target="tab-item-2"><input type="checkbox" class="tab-checkbox" value="2" />Aparecer en búsqueda</div>
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
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
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
                                        <select id="tipo_prop" name="tipo_prop" class="mak-control w-100" value="-1"></select>
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
                                        </div>
                                        <!-- CASA -->
                                        <div class="mak-control-full casa">
                                            <div class="control-group">
                                                <span>Dormitorios:</span>
                                                <div>
                                                    <input id="dormitorios_" name="dormitorios_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <span>Baños:</span>
                                                <div>
                                                    <input id="banos_" name="banos_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <span>Cochera:</span>
                                                <div>
                                                    <input id="cochera_" name="cochera_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <span>N° de pisos:</span>
                                                <div>
                                                    <input id="num_pisos_" name="num_pisos_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- CASA -->
                                        <!-- OFICINA -->
                                        <div class="mak-control-full oficina">
                                            <div class="control-group">
                                                <span>Ambientes:</span>
                                                <div>
                                                    <input id="dormitorios_" name="dormitorios_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <span>Baños:</span>
                                                <div>
                                                    <input id="banos_" name="banos_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <span>Cochera:</span>
                                                <div>
                                                    <input id="cochera_" name="cochera_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <span>N° de pisos:</span>
                                                <div>
                                                    <input id="num_pisos_" name="num_pisos_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- OFICINA -->
                                        <!-- LOCAL COMERCIAL -->
                                        <div class="mak-control-full comercial">
                                            <div class="control-group">
                                                <span>Ambientes:</span>
                                                <div>
                                                    <input id="dormitorios_" name="dormitorios_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <span>Baños:</span>
                                                <div>
                                                    <input id="banos_" name="banos_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <span>Cochera:</span>
                                                <div>
                                                    <input id="cochera_" name="cochera_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- LOCAL COMERCIAL -->
                                        <!-- LOCAL INDUSTRIAL / ALMACEN -->
                                        <div class="mak-control-full industrial">
                                            <div class="control-group">
                                                <span>Zonificación:</span>
                                                <div>
                                                    <select name="" id="" class="mak-control w-75"></select>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <span>Área de nave:</span>
                                                <div>
                                                    <input id="banos_" name="banos_" type="number" class="mak-control w-75 mr-2" placeholder="0"> ml
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <span>Altura de nave:</span>
                                                <div>
                                                    <input id="cochera_" name="cochera_" type="number" class="mak-control w-75 mr-2" placeholder="0"> ml
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mak-control-full industrial">
                                            <div class="control-group">
                                                <span>Ambientes:</span>
                                                <div>
                                                    <input id="dormitorios_" name="dormitorios_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <span>Baños:</span>
                                                <div>
                                                    <input id="banos_" name="banos_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <span>Cochera:</span>
                                                <div>
                                                    <input id="cochera_" name="cochera_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- LOCAL INDUSTRIAL / ALMACEN -->
                                        <!-- TERRENO -->
                                        <div class="mak-control-full terreno">
                                            <div class="control-group">
                                                <span>Zonificación:</span>
                                                <div>
                                                    <input id="dormitorios_" name="dormitorios_" type="number" class="mak-control w-75" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <span>Parámetros:</span>
                                                <div>
                                                    <input id="banos_" name="banos_" type="number" class="mak-control w-75 mr-2" placeholder="0">pisos
                                                </div>
                                            </div>
                                        </div>
                                        <!-- TERRENO -->
                                        <div class="mak-control-grid">
                                            <div class="control-group">
                                                <span>Porcentaje de comisión:</span>
                                                <div>
                                                    <input id="porcen_comision" name="porcen_comision" type="number" class="mak-control mr-2" placeholder="Escribe aquí"> %
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
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
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                            <div class="mak-bdr radius-plus">
                                <div class="card-body">
                                    <div class="card-head justify-between mb-3">
                                        <div class="mak-control d-flex">
                                            <img src="../Vista/images/link.svg" alt="">
                                            Colocar URL de videos
                                        </div>
                                        <!-- <div class="mak-control mak-tertiary btn_button">
                                        <i class="fa-solid fa-trash"></i>&nbsp;Eliminar todos los archivos
                                    </div> -->
                                    </div>

                                    <div class="row">
                                        <!-- <div class="col-md-12 d-flex"> -->
                                        <div class="col-md-6 mb-2">
                                            <span class="mak-title-lbl">Video de YouTube <span class="mak-tertiary">(Opcional)</span></span>
                                            <input id="vid-yt-prop" name="vid-yt-prop" type="text" class="mak-control w-100" placeholder="Enter email">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <span class="mak-title-lbl">Vídeo de recorrido <span class="mak-tertiary">(Opcional)</span></span>
                                            <input id="vid-rec-prop" name="vid-rec-prop" type="text" class="mak-control w-100" placeholder="Enter email">
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
                                            Características de la propiedad
                                        </div>
                                        <div class="mak-control mak-tertiary btn_button clear">
                                            <i class="fa-solid fa-trash"></i>&nbsp;Limpiar filtros
                                        </div>
                                    </div>
                                    <div>
                                        <label class="mak-control cursor" for="aire_acondicionado">
                                            <input type="checkbox" name="aire_acondicionado" id="aire_acondicionado">
                                            <span>Aire acondicionado</span>
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

            </form>
        </div>
        <!-- PROPIEDAD SIN ANUNCIAR -->
        <!-- ANUNCIAR PROPIEDAD  -->
        <div id="tab-item-2" class="tab-content">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
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
                                    <select id="tipo_prop" name="tipo_prop" class="mak-control w-100" value="-1"></select>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
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
                                        <!-- 
                                        <h1>Buscar Dirección en el Mapa</h1>
                                        <input id="direccion" type="text" placeholder="Ingresa una dirección">
                                        <button onclick="buscarDireccion()">Buscar</button>
                                        <div id="map"></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ANUNCIAR PROPIEDAD  -->
        <!-- BUSCAR PROPIEDAD -->
        <!-- <div id="aparecer" class="tab-content">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 d-flex">
                hola 2
            </div>
        </div> -->
        <!-- BUSCAR PROPIEDAD -->
    </div>




    <!-- jQuery -->
    <script src="./../Vista/plugins/jquery/jquery.min.js"></script>
    <script src="./../Vista/assets/add_property.js"></script>
    <script src="./../Vista/assets/selection_types.js"></script>
    <script src="./../Vista/js/upFiles.js"></script>


    <script>

    </script>

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

</body>