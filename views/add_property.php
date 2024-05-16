<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAK</title>

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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

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
                                    <div class="mak-control mak-tertiary btn_button">
                                        <i class="fa-solid fa-trash"></i>&nbsp;Limpiar filtro
                                    </div>
                                </div>
                                <div class="">
                                    <div class="">
                                        <span>Email address</span>
                                        <div class="textarea-container">
                                            <textarea id="" class="mak-control txt-area" maxlength="80" placeholder="Escribir aquí."></textarea>
                                            <div id="charCounter" class="char-counter">0/80</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <span>Descripción</span>
                                        <div class="textarea-container">
                                            <textarea id="" class="mak-control txt-area" maxlength="500" rows="15" placeholder="Escribir aquí."></textarea>
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
                                        <input id="direccion_" name="direccion_" type="email" class="mak-control w100" id="exampleInputEmail1" placeholder="Enter email">
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
                                    <div class="mak-control mak-tertiary btn_button">
                                        <i class="fa-solid fa-trash"></i>&nbsp;Eliminar todos los archivos
                                    </div>
                                </div>

                                <!-- <div class="content-file"> -->
                                <div class="file-content">

                                    <div class="list-file"></div>

                                    <div class="up-archive file-item">
                                        <div id="btnFile" class="item-box">
                                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                            Agregar <br> Fotos
                                        </div>
                                    </div>

                                    <div class="drop-archive">
                                        <h1>Soltar Archivos</h1>
                                    </div>

                                    <input id="inputFile" name="inputFile[]" type="file" multiple hidden>
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
                                    <div class="mak-control mak-tertiary btn_button">
                                        <i class="fa-solid fa-trash"></i>&nbsp;Limpiar filtro
                                    </div>
                                </div>
                                <div class="">
                                    <div class="">
                                        <span>Email address</span>
                                        <div class="textarea-container">
                                            <textarea id="" class="mak-control txt-area" maxlength="80" placeholder="Escribir aquí."></textarea>
                                            <div id="charCounter" class="char-counter">0/80</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <span>Descripción</span>
                                        <div class="textarea-container">
                                            <textarea id="" class="mak-control txt-area" maxlength="500" rows="15" placeholder="Escribir aquí."></textarea>
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

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pr-0 mb-3">
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

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pr-0 mb-3">
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
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0 mb-3">
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

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-0 mb-3">
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
    <script src="./../Vista/assets/selection_types.js"></script>
    <script src="./../Vista/js/upFiles.js"></script>



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