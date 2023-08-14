<?php require_once('../Config/security.php');
require_once('../Controller/controladorListar.php'); ?>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Data Tables Pluggin -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini  sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed" onload="initAutocomplete()">

    <div class="wrapper">

        <?php include '../Vista/nav_bar_moduls.php' ?>

        <div class="content-wrapper">

            <section class="content">
                <!-- <header class="header-mak">
                    <h1 class="title">¿Más de 2,000 propiedades <br> esperan por ti!</h1>
                </header> -->

                <?php include '../Vista/head-form.php' ?>


                <section class="content body-mak txt-center mak-txt">
                    <div class="container">
                        <div class="b-title">Valorizaciones</div>
                        <p class="b-text mak-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora culpa iste, facere veniam aperiam corporis placeat pariatur, dignissimos, nostrum illum ex adipisci officiis necessitatibus obcaecati doloribus velit sint omnis ipsum!</p>
                    </div>


                    <div class="footer-mak">
                        <div class="container">
                            <div class="flex">
                                <a href="valorizacion.php" class="btn btn-mak mak-bg ml-auto">Continuar</a>
                            </div>
                        </div>
                    </div>

                </section>


                <section class="content body-mak mak-txt position-relative" data-content="historico">

                    <!-- <div class="arrow-left">
                                <i class="fa-solid fa-angle-left"></i>
                            </div> -->

                    <div class="container">
                        <h1 class="text-center">HISTORICO</h1>
                        <div class="row">

                            <div class="menu-filter">
                                <div class="filter-drop shadow ml-auto">
                                    <div class="dropdown">
                                        Filtros &nbsp;
                                        <i class="fa-solid fa-sliders"></i>
                                    </div>
                                    <div class="optn-filter">
                                        <div class="list-group-item">1</div>
                                        <div class="list-group-item">2</div>
                                        <div class="list-group-item">3</div>
                                    </div>
                                </div>
                            </div>

                            <?php


                            if ($_SESSION['tipo_usu'] == 1) {
                                //ocultar el del user y mostrar el del admin
                            ?>

                                <!-- </div> TABLA ADMIN -->

                                <div class="table-responsive">
                                    <div class="col-sm-12">

                                        <table id="tabla" class="table table-borderless" style="width: 100%;">

                                            <thead class="">
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
                                                            echo "<td><span class='badge rounded-pill bg-warning text-dark'>En revision</span></td>";
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
                                                        <?php mostrarData($lst_vlzn[62]) ?>

                                                        <td>
                                                            <button type="button" class="btn btn-rounded btn_get_details scroll-toggle" data-id_solic_val="<?php echo $lst_vlzn[0] ?>" data-id_cli="<?php echo $lst_vlzn[0] ?>" data-dni_cli="<?php echo $lst_vlzn[1] ?>" data-toggle="modal" data-target="#details_v">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                        </td>

                                                        <!--
            <td>

                <button type="button" class="btn editbtn" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-upload"></i></button>
                
            </td>-->
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- </div> TABLA ADMIN -->

                            <?php
                            } else {
                            ?>

                                <!-- </div> TABLA USER -->

                                <div class="col-sm-12">
                                    <div class="table-responsive pl-2 pr-2">
                                        <table class="table table-borderless" style="width: 100%;">
                                            <thead class="">
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
                                                            echo "<td><span class='badge rounded-pill bg-warning text-dark'>En revision</span></td>";
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
                                                            <button type="button" class="btn btn-rounded btn_get_details scroll-toggle" data-id_solic_val="<?php echo $lst_vlzn_[0] ?>" data-id_cli="<?php echo $lst_vlzn_[8] ?>" data-dni_cli="<?php echo $lst_vlzn_[9] ?>" data-toggle="modal" data-target="#details_v">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                        </td>
                                                        <!--
                                                        <td>
                                                            <a href="../Valorizaciones/<?php echo $lst_vlzn_[0] ?>/<?php echo $lst_vlzn_[7] ?>"><i class="fa-solid fa-download"></i></a>
                                                        </td>
                                                        -->
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- </div> TABLA USER -->
                            <?php
                                //ocultar el del admin y mostrar el del user
                            }
                            ?>

                        </div>

                    </div>
                    <div class="footer-mak">
                        <div class="container">
                            <div class="flex">
                                <a href="valorizacion.php" class="btn btn-mak mak-bg ml-auto">Continuar</a>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="modal fade" id="upload_valorizacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Subir Valorizacion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="../Controller/upload_doc_valorizacion.php" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="text" name="id_reg_valor" id="id_reg_valor">
                                    <div class="form-group">
                                        <label>Archivo de Valorizacion</label>
                                        <br>
                                        <input type="file" name="valorizacion_files[]" id="valorizacion_files" multiple>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" name="upload_valor_" class="btn btn-primary">Subir</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>


                <div class="modal fade" id="details_v" tabindex="-1" role="dialog" aria-labelledby="details_v" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h1 class="title-m" id="titulo_docs">Detalles</h1>
                                <div class="row margin">

                                    <div class="col-sm-12">
                                        <ul id="detalles_valor" style="display:none"></ul>
                                        <img src="../Vista/assets/loading_uhd.gif" id="loader_uhd" style="display:none; margin: 0 16rem 5rem">
                                    </div>
                                    <div id="docs_val" style="display:none">
                                        <?php

                                        if ($_SESSION['tipo_usu'] == 1) {

                                        ?>
                                            <form action="../Controller/upload_doc_valorizacion.php" method="POST" enctype="multipart/form-data">

                                                <div class="modal-body">
                                                    <div hidden>
                                                        <input type="text" name="id_solic_arch" id="id_solic_arch">
                                                        <input type="text" name="dni_cli_arch" id="dni_cli_arch">
                                                    </div>
                                                    <div class="form-group">

                                                        <label>Fotos Subidas</label>
                                                        <div>
                                                            <div id="fotos_val">
                                                                <ul id="lst_fotos"></ul>
                                                            </div>
                                                        </div>

                                                        <label>Archivos de esta valorizacion:</label>
                                                        <div>
                                                            <div id="descarga_archivo_m">
                                                                <ul id="archivos_lista"></ul>
                                                            </div>
                                                        </div>

                                                        <br>
                                                        <input type="file" name="valorizacion_files[]" id="valorizacion_files" multiple>

                                                        <select name="status_doc" id="status_doc">
                                                            <option value="500">Pendiente</option>
                                                            <option value="400">En revision</option>
                                                            <option value="200">Finalizado</option>
                                                        </select>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        <button type="submit" name="upload_valor_" class="btn btn-primary">Subir</button>
                                                    </div>
                                                </div>
                                            </form>

                                        <?php } else { ?>
                                            <label>Fotos Subidas</label>
                                            <div>
                                                <div id="fotos_val">
                                                    <ul id="lst_fotos"></ul>
                                                </div>
                                            </div>

                                            <label>Descargar Archivos</label>
                                            <div>
                                                <div id="descarga_archivo_m">
                                                    <ul id="archivos_lista"></ul>
                                                </div>
                                            </div>
                                        <?php   } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>


        <?php include '../Vista/foot-form.php' ?>
        <!-- <footer class="main-footer">
            <strong>Copyright © 1986-2023 <a href="https://mak.com.pe/">MAK S.A.C</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer> -->


    </div>

    <!-- REQUIRED SCRIPTS -->
    <script src="../Vista/js/stepper.js"></script>
    <script src="../Vista/js/resume.js"></script>
    <script src="../Vista/assets/functions.js"></script>


    <!-- jQuery -->
    <script src="../Vista/plugins/jquery/jquery.min.js"></script>
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

    <script>
        $(document).ready(function() {

            $('.editbtn').on('click', function() {
                console.log("test");
                $('#upload_valorizacion').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#id_reg_valor').val(data[0].trim());
            });
        });
    </script>


    <script type="text/javascript">
        $('.btn_get_details').on('click', function() {

            $('#details_v').modal('show');

            var id_solic_v = $(this).data('id_solic_val');
            var id_cli_v = $(this).data('id_cli');
            var dni_cli_v = $(this).data('dni_cli');

            /*var id_solic_v = data[0].trim();
            var id_cli_v = data[1].trim();
            var dni_cli_v = data[2].trim();*/

            var rol = '<?php echo $_SESSION['tipo_usu'] ?>'

            console.log(rol);

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            $("#id_solic_arch").val(data[0].trim());
            $("#dni_cli_arch").val(data[1].trim());

            console.log(id_solic_v, id_cli_v, dni_cli_v);

            if (rol == 1) {
                get_details_solic(id_solic_v, id_cli_v, dni_cli_v)
                get_imgs_valor(id_solic_v, dni_cli_v)
                get_files_valor(id_solic_v, dni_cli_v)
            } else {
                get_details_solic(id_solic_v, id_cli_v, dni_cli_v)
                get_files_valor(id_solic_v, dni_cli_v)
                get_imgs_valor(id_solic_v, dni_cli_v)
                console.log("uwu?");
            }


        });


        function get_details_solic(idsolicitud /*, idclient, dniclient*/ ) {
            $.ajax({
                type: 'POST',
                url: '../Controller/Get_Details_Valorizacion.php',
                data: {
                    id_solic_l: idsolicitud,
                    /*id_client: idclient,
                    dni_client: dniclient,*/
                },

                beforeSend: function() {
                    $("#loader_uhd").show();

                    $("#detalles_valor").hide();
                    $("#docs_val").hide();

                },

                success: function(response) {
                    console.log(response);

                    var detalles = JSON.parse(response);
                    var detalles_valor = detalles.detalles_valor;

                    setTimeout(function() {

                        $("#loader_uhd").hide();
                        $("#detalles_valor").show();
                        $("#docs_val").show();

                        var container = document.getElementById('detalles_valor');

                        container.innerHTML = '';


                        for (var prop in detalles) {
                            if (detalles.hasOwnProperty(prop)) {
                                var valor = detalles[prop];
                                var li = document.createElement('li');
                                li.textContent = valor;
                                container.appendChild(li);
                            }
                        }
                    }, 480);
                },
                error: function(xhr, status, error) {
                    console.log("Error en la solicitud ajax ", error)
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

                    if (response.status === 'error') {
                        var errorMessage = $('<strong>').text(response.mensaje);
                        $('#archivos_lista').empty().append(errorMessage);
                    } else if (response.status === 'empty') {
                        var noFilesMessage = $('<strong>').text(response.mensaje);
                        $('#archivos_lista').empty().append(noFilesMessage);
                    } else {
                        var archivos = response.files;
                        var archivosLista = $('#archivos_lista');

                        archivosLista.empty();

                        archivos.forEach(function(archivo) {
                            if (archivo.trim() !== '') {
                                var link_ = $('<a>')
                                    .attr('href', '../Valorizaciones/' + id_sol_v + '/' + dni + '/' + archivo)
                                    .attr('download', archivo)
                                    .text(archivo);

                                var listItem = $('<li>').append(link_);
                                archivosLista.append(listItem);
                            }
                        });

                    }
                    //$('#descarga_archivo_m').html(link_);

                    //console.log(response);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        }

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

                        archivos.forEach(function(archivo) {
                            if (archivo.trim() !== '') {
                                var link_ = $('<a>')
                                    .attr('href', '../Valorizaciones/' + id_sol_v + '/' + dni + '/fotos_val/' + archivo)
                                    .attr('download', archivo)
                                    .text(archivo);

                                var listItem = $('<li>').append(link_);
                                archivosLista.append(listItem);
                            }
                        });

                    }
                    //$('#descarga_archivo_m').html(link_);

                    //console.log(response);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        }
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
            var texto_pro = select_pro.textContent
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

    <script>
        // DROPDOWN
        const dropDown = document.querySelector(".dropdown");

        const drops = document.querySelector(".position-absolute");

        dropDown.addEventListener("click", () => {
            const filter = document.querySelector(".filter-drop");
            const table = document.querySelector(".table");
            const optnFilter = document.querySelector(".optn-filter");
            const listGroupItem = optnFilter.querySelectorAll(".list-group-item");


            if (drops) {
                if (filter.style.height === "50px") {
                    let items = listGroupItem.length + 1;
                    let dropHeight = items * "49.33" + "50";
                    filter.style.height = dropHeight + "px";
                } else {
                    filter.style.height = "50px";
                }
            } else {
                if (table.style.width === "100%") {
                    let items = listGroupItem.length + 1;
                    let dropHeight = items * "49.33" + "50";

                    table.style.width = "85%";
                    filter.style.height = dropHeight + "px";
                } else {
                    table.style.width = "100%";
                    filter.style.height = "50px";
                }
            }
        });

        // DROPDOWN
    </script>

    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                // NO LOADING
                //stateSave: true,
                // scrollX: true,
                // scrollY: 650,
                //deferRender:    true,
                //scroller:       true,
                //scrollY:        650,
                // dom: `<"row"
                //         <"col-sm-6"f>
                //         <"col-sm-6"l>
                //         >t
                //     <"row"
                //         <"col-sm-6"i>
                //         <"col-sm-6"p>
                //         >`,

                language: {

                    //
                    processing: "Traitement en cours...",
                    search: "Buscar:",
                    lengthMenu: "Mostrar" + `
                                <select class="form-select form-select-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="-1">Todos</option>
                                </select>
                    ` + "por página.",
                    info: "Mostrando del _START_ al _END_ de _TOTAL_ elementos.",
                    infoEmpty: "No se encontraron resultados.",
                    infoFiltered: "(Filtrado de _MAX_ elementos totales)",
                    infoPostFix: "",
                    loadingRecords: "Cargando datos...",
                    zeroRecords: "No se encontro resultados.",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Último"
                    },
                    aria: {
                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }
            });
        });
    </script>

    <!-- REQUIRED SCRIPTS -->
    <script src="../Vista/assets/selection_types.js"></script>
    <!-- Data Tables Pluggin -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap4.min.js"></script>
</body>

</html>