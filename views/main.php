<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="../Vista/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" crossorigin="anonymous" referrerpolicy="no-referrer">

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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


<style>
    html {
        overflow-x: hidden;
    }

    html::-webkit-scrollbar {
        width: 1px;
    }
</style>


<?php
require_once('../Controller/controladorListar.php');
?>

<div class="body-container mak">

    <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3">

            <div class="d-flex align-center ml-2 mt-3 menu-content">
                <div>
                    <img src="../Vista/images/Plataforma/PanelPrincipal/Bienvenido.png" alt="" width="180">
                </div>

                <div class="ml-5">
                    <h1></h1>
                    <span>!Bienvenido a tu intranet MAK¡</span>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
            <div class="card-body">
                <div class="card-head justify-between mb-3">
                    <div>
                        <img src="../Vista/images/home.svg" alt="">
                        Últimas propiedades subidas
                    </div>
                    <div class="pointer">
                        Ver más >
                    </div>
                </div>

                <table class="table table-borderless txt-center mt-4">
                    <thead>
                        <tr>
                            <th class="placeholder">ID Sistema</th>
                            <th class="placeholder">Tipo Propiedad</th>
                            <th class="placeholder">Dirección</th>
                            <th class="placeholder">Distrito</th>
                            <th class="placeholder">Valorización</th>
                            <th class="placeholder">Legal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($showLastPropertys as $slp): ?>
                            <tr class="property-item">
                                <td><?php echo $slp[0] ?></td>
                                <td>
                                    <?php
                                    switch ($slp[1]) {
                                        case 'DEPARTAMENTO':
                                            $class = "dp";
                                            break;
                                        case 'CASA':
                                            $class = "CS";
                                            break;
                                        default:
                                            $class = "";
                                            break;
                                    }
                                    ?>
                                    <span class="badge-tp <?php echo $class ?>">
                                        <?php echo $slp[1] ?>
                                    </span>
                                </td>

                                <td><?php echo $slp[2] === "null" || $slp[2] === "" ? '-' : $slp[2]; ?></td>
                                <td><?php echo $slp[3] === "null" ? '-' : $slp[3]; ?></td>

                                <td>
                                    <?php if ($slp[5] == 1) { ?>

                                        <span class="badge-tp proceso" data-id="<?php echo $slp[0] ?>" data-attr="1">
                                            En proceso
                                        </span>
                                    <?php } else if ($slp[5] == 2) { ?>
                                        <span class="badge-tp solicitar pointer" data-id="<?php echo $slp[0] ?>" data-attr="1">
                                            Descargar
                                        </span>
                                    <?php } else { ?>
                                        <span class="badge-tp solicitar pointer" data-id="<?php echo $slp[0] ?>" data-attr="1">
                                            Solicitar
                                        </span>
                                    <?php } ?>

                                </td>
                                <td>
                                    <?php if ($slp[7] == 1) { ?>

                                        <span class="badge-tp proceso" data-id="<?php echo $slp[0] ?>" data-attr="2">
                                            En proceso
                                        </span>
                                    <?php } else if ($slp[7] == 2) { ?>
                                        <span class="badge-tp solicitar pointer" data-id="<?php echo $slp[0] ?>" data-attr="2">
                                            Descargar
                                        </span>
                                    <?php } else { ?>
                                        <span class="badge-tp solicitar pointer" data-id="<?php echo $slp[0] ?>" data-attr="2">
                                            Solicitar
                                        </span>
                                    <?php } ?>

                                </td>
                                <td>*</td>
                            </tr>

                        <?php endforeach ?>
                        <br>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="./../Vista/js/solicitudes.js"></script>