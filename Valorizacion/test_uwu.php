<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>

<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .buton-icon {
        width: 50px;
        height: 50px;
        border: 2px solid;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        cursor: pointer;
    }

    .contenedor {
        max-width: 100%;
        display: flex;
        overflow: hidden;
    }

    .section {
        min-width: 0;
        height: 100vh;
        transition: all 1s ease;
        overflow: hidden;
    }

    .section div {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
    }

    .section.active {
        min-width: 100%;
    }

    .red {
        background-color: red;
    }

    .blue {
        background-color: blue;
    }

    .green {
        background-color: green;
    }
</style>

<body>


    <div class="buton-icon left"> left </div>

    <div class="contenedor">

        <div class="red section" data-position="first" data-number="1">
            <div>
                red
            </div>
        </div>

        <div class="blue section active" data-position="second" data-number="2">
            <div>
                blue
            </div>
        </div>


        <section class="green section body-mak mak-txt position-relative body-slide" data-content="files" data-position="third" data-number="3">
            <div class="arrow-left arrow-left_1">
                <i class="fa-solid fa-angle-left"></i>
            </div>
            <form method="POST" action="../Controller/update_solic_docs_legal.php">

                <div class="container">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-sm-6">

                                <input type="text" class="form-mak" id="id_legal_solic" name="id_legal_solic" readonly>
                                <input type="text" class="form-mak" id="id_client_l" readonly>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="mak-txt">Nombres y Apellidos</label>
                                            <input type="text" class="form-mak" id="data_names_" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="mak-txt">Dirección</label>
                                            <input type="text" class="form-mak" id="data_direcion_" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="mak-txt">Distrito</label>
                                            <select name="" id="" class="form-mak">
                                                <option value="-1" disabled>Seleccione distrito</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="mak-txt">Comentario</label>
                                            <textarea name="coment_" id="coment_"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class=" d-flex justify-content-end">
                                    <div class="btn btn-mak bg-success">Aprobado</div>
                                </div>

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
                                        <div class="col-sm-2 justify-content-center options">
                                            <div class="options">
                                                <button type="button" class="btn btn-rounded  btn_lst_docs btn_lst_docs_0" data-toggle="modal" data-target="#lst_docs_legal" data-valor="H_R" data-titulo="Hoja de Resumen" data-id_doc_="1" data-id_user_="<?php echo $_SESSION['dni'] ?>">
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
                                        <div class="col-sm-2 justify-content-center options">
                                            <div class="options">
                                                <button type="button" class="btn btn-rounded  btn_lst_docs btn_lst_docs_0" data-toggle="modal" data-target="#lst_docs_legal" data-valor="P_U" data-titulo="Predio Urbano" data-id_doc_="2" data-id_user_="<?php echo $_SESSION['dni'] ?>">
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
                                        <div class="col-sm-2 justify-content-center options">
                                            <div class="options">
                                                <button type="button" class="btn btn-rounded  btn_lst_docs btn_lst_docs_0" data-toggle="modal" data-target="#lst_docs_legal" data-valor="C_L" data-titulo="Copia Literal" data-id_doc_="3" data-id_user_="<?php echo $_SESSION['dni'] ?>">
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
                                        <div class="col-sm-2 justify-content-center options">
                                            <div class="options">
                                                <button type="button" class="btn btn-rounded  btn_lst_docs btn_lst_docs_0" data-toggle="modal" data-target="#lst_docs_legal" data-valor="DNI" data-titulo="DNI" data-id_doc_="4" data-id_user_="<?php echo $_SESSION['dni'] ?>">
                                                    <i class="cursor fa-solid fa-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>


                    </div>
                 
                </div>
            </form>
        </section>

    </div>

    <div class="buton-icon right"> right </div>


</body>

<script>
    const butonIconLeft = document.querySelector('.buton-icon.left');
    const butonIconRight = document.querySelector('.buton-icon.right');

    butonIconRight.addEventListener("click", () => {
        dondeEstoy("right");
    });

    butonIconLeft.addEventListener("click", () => {
        dondeEstoy("left");
    });

    function dondeEstoy(direction) {
        // Obtener todas las secciones
        var sections = document.querySelectorAll('.section');

        // Encontrar la sección activa actual
        var currentSection;
        sections.forEach(function(section) {
            if (section.classList.contains('active')) {
                currentSection = section;
            }
        });

        // Determinar la dirección y encontrar la siguiente sección
        var nextSection;
        if (direction === 'left') {
            nextSection = currentSection.previousElementSibling;
            if (!nextSection) {
                // Si no hay una siguiente sección a la izquierda, selecciona la última
                nextSection = sections[sections.length - 1];
            }
        } else if (direction === 'right') {
            nextSection = currentSection.nextElementSibling;
            if (!nextSection) {
                // Si no hay una siguiente sección a la derecha, selecciona la primera
                nextSection = sections[0];
            }
        }

        // Evitar la transición de verde a rojo y viceversa
        if (currentSection.classList.contains('green') && nextSection.classList.contains('red')) {
            return;
        }

        if (currentSection.classList.contains('red') && nextSection.classList.contains('green')) {
            return;
        }

        // Cambiar las clases 'active' para la sección actual y la siguiente
        if (currentSection && nextSection) {
            currentSection.classList.remove('active');
            nextSection.classList.add('active');
        }
    }
</script>


</html>