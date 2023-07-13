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
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<script>
		/*
        window.onload = function() {
            var dniInput = document.getElementById('dni_user').value;
            
            if (dniInput !== '') {

                var rutaBase = '../Documentos Legal/';
                var rutaCompleta = rutaBase + dniInput + '/';
                console.log("Ruta: " + rutaCompleta);
            }
        };*/
    </script>

</head>

<body class="hold-transition sidebar-mini  sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed">



	<?php include '../Vista/nav_bar_moduls.php' ?>
	<!-- ./wrapper -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>Seleccion de datos:</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
							<li class="breadcrumb-item"><a href="#">Seleccion</a></li>
							<li class="breadcrumb-item active">Registro</li>
						</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Ingreso de Datos:</h3>
                            <input type="text" class="form-control" id="dni_user" name="dni_user" value="<?php echo $_SESSION['dni']; ?>">
                            <?php

								$dni = $_SESSION['dni'];

								$ruta_base ='../Documentos Legal/';

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

							            if (empty($rutas)) {
							                echo "No hay carpetas disponibles.";
							            }
								    }else{

								    	echo "La carpeta $dni no existe en la ruta especificada.";
								    }

								    //echo $rutaCompleta;

								}
							 ?>
                        </div>
                        <br>
                        <div class="card-body p-0">
                            <div class="bs-stepper">
                            	<div class="bs-stepper-content">
                            		 	<div id="0" class="section col-md-12 movPag show" role="tabpanel" aria-labelledby="logins-part-trigger" data-target="first_step">


                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="card card-default">
                                                        <div class="card-body">
                                                        	<form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data">
                                                        		<input type="text" class="form-control" id="dni_usu_0" name="dni_usu_0" value="<?php echo $_SESSION['dni']; ?>">
                                                        		<input type="text" class="form-control" id="id_cli_0" name="id_cli_0" value="<?php echo $_SESSION['id_usu']; ?>">
	                                                            <div class="row">
	                                                                <div class="col-sm-10">
	                                                                    <!-- text input -->
	                                                                    <div class="form-group">
	                                                                        <label>H.R</label>
	                                                                        <input type="file" class="form-control" id="hr_s" name="hr_s[]" multiple>
	                                                                        <input type="text" class="form-control" id="tipo_doc_0" name="tipo_doc_0" value="1">
	                                                                        <button type="button" class="btn btn-rounded btn-success btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="H_R" data-titulo="Hoja de Resumen">ver</button>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                            <button type="submit" class="btn btn-info btn-lg col-md-12" id="btn_save_hr" name="btn_save_hr" disabled>Registrar</button>
                                                        	</form>

                                                        	<form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data">
                                                        		<input type="text" class="form-control" id="dni_usu_1" name="dni_usu_1" value="<?php echo $_SESSION['dni']; ?>">
                                                        		<input type="text" class="form-control" id="id_cli_1" name="id_cli_1" value="<?php echo $_SESSION['id_usu']; ?>">
	                                                            <div class="row">
	                                                                <div class="col-sm-10">
	                                                                    <!-- text input -->
	                                                                    <div class="form-group">
	                                                                        <label>P.U</label>
	                                                                        <input type="file" class="form-control" id="pu_s" name="pu_s">
	                                                                        <input type="text" class="form-control" id="tipo_doc_1" name="tipo_doc_1" value="2">
	                                                                        <button type="button" class="btn btn-rounded btn-success btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="P_U" data-titulo="Predio Urbano">ver</button>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                            <button type="submit" class="btn btn-info btn-lg col-md-12" id="btn_save_pu" name="btn_save_pu" disabled>Registrar</button>
	                                                        </form>

	                                                        <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data">
                                                        		<input type="text" class="form-control" id="dni_usu_2" name="dni_usu_2" value="<?php echo $_SESSION['dni']; ?>">
                                                        		<input type="text" class="form-control" id="id_cli_2" name="id_cli_2" value="<?php echo $_SESSION['id_usu']; ?>">
	                                                            <div class="row">
	                                                                <div class="col-sm-10">
	                                                                    <!-- text input -->
	                                                                    <div class="form-group">
	                                                                        <label>Copia Literal</label>
	                                                                        <input type="file" class="form-control" id="cl_s" name="cl_s">
	                                                                        <input type="text" class="form-control" id="tipo_doc_2" name="tipo_doc_2" value="3">
	                                                                        <button type="button" class="btn btn-rounded btn-success btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="C_L" data-titulo="Copia Literal">ver</button>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                            <button type="submit" class="btn btn-info btn-lg col-md-12" id="btn_save_cl" name="btn_save_cl" disabled>Registrar</button>
	                                                        </form>

	                                                        <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data">
                                                        		<input type="text" class="form-control" id="dni_usu_3" name="dni_usu_3" value="<?php echo $_SESSION['dni']; ?>">
                                                        		<input type="text" class="form-control" id="id_cli_3" name="id_cli_3" value="<?php echo $_SESSION['id_usu']; ?>">
	                                                            <div class="row">
	                                                                <div class="col-sm-10">
	                                                                    <!-- text input -->
	                                                                    <div class="form-group">
	                                                                        <label>DNI</label>
	                                                                        <input type="file" class="form-control" id="dni_s" name="dni_s">
	                                                                        <input type="text" class="form-control" id="tipo_doc_3" name="tipo_doc_3" value="4">
	                                                                        <button type="button" class="btn btn-rounded btn-success btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="DNI" data-titulo="DNI">ver</button>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                            <button type="submit" class="btn btn-info btn-lg col-md-12" id="btn_save_dni" name="btn_save_dni" disabled>Registrar</button>
	                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-4">
                                                    <div class="card card-default">
                                                        <div class="card-body">
                                                        	<form method="POST" action="../Controller/Add_Solic_Legal.php">
	                                                            <div class="row" id="a__c">
	                                                                <div class="col-sm-8">
	                                                                    <!-- text input -->
	                                                                    <div class="form-group">
	                                                                        <div class="flex">
	                                                                            <label>Nombre Completo</label>
	                                                                            <div class="input-group-append">
	                                                                                <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
	                                                                                    <span class="tooltiptext">-.</span>
	                                                                                </i>
	                                                                            </div>
	                                                                        </div>
	                                                                        <input type="text" class="form-control"  placeholder="Ingrese nombre" id="nom_cli_solic" name="nom_cli_solic" >
	                                                                    </div>
	                                                                </div>
	                                                            </div>

	                                                            <div class="row" id="antig_">
	                                                                <div class="col-sm-8">
	                                                                    <!-- text input -->
	                                                                    <div class="form-group">
	                                                                        <label>Apellido Completo</label>
	                                                                        <input type="text" class="form-control"  placeholder="Ingrese apellido" id="ape_cli_solic" name="ape_cli_solic" >
	                                                                    </div>
	                                                                </div>
	                                                            </div>

	                                                            <div class="row" id="antig_">
	                                                                <div class="col-sm-8">
	                                                                    <!-- text input -->
	                                                                    <div class="form-group">
	                                                                        <label>Direccion Completo</label>
	                                                                        <input type="text" class="form-control"  placeholder="Ingrese apellido" id="dir_cli_solic" name="dir_cli_solic" >
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                            <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $_SESSION['id_usu']; ?>">

	                                                            <textarea id="rutas_doscs" name="rutas_doscs" rows="5" cols="50"><?php echo $rutas;?></textarea>

                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
	                                            <div class="d-grid gap-2 col-3 mx-auto form-flex">
	                                                <button type="submit" class="btn btn-info btn-lg col-md-12" id="btn_save_solic" name="btn_save_solic">Registrar</button>
	                                            </div>
                                            </form>
                                        </div>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-default">
		        <div class="modal-dialog">
		          <div class="modal-content">
		            <div class="modal-header">
		              <h4 class="modal-title">Default Modal</h4>
		              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                <span aria-hidden="true">&times;</span>
		              </button>
		            </div>
		            <div class="modal-body">
		              <p>One fine body&hellip;</p>
		            </div>
		            <div class="modal-footer justify-content-between">
		              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		              <button type="button" class="btn btn-primary">Save changes</button>
		            </div>
		          </div>
		          <!-- /.modal-content -->
		        </div>
		        <!-- /.modal-dialog -->
		   </div>

			<div class="row">
				<div class="col-md-12">
					<div class="card card-default">
						<div class="card-header">
							<strong class="card-title">Informe Legal</strong>
						</div>

						<!-- SECTION -->
						<div class="card-body">
							<h3 class="card-title">Subir documentos .pdf, .png, .jpg, .jpeg</h3>
							<br>
							<br>
							<table class="table">
								<thead class="table-dark">
									<tr>
										<th>ID DOC</th>
										<th>direccion</th>
										<th>fecha_reg</th>
										<th>estado</th>
										<th>Editar</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($list_solic_legal as $lst_legal_d): ?>
									<tr>
										
										<td><?php echo $lst_legal_d[0] ?></td>
										<td><?php echo $lst_legal_d[1] ?></td>
										<td><?php echo $lst_legal_d[2] ?></td>
										<td>
										<?php
											if ($lst_legal_d[3] == 10) {
										?>
										<span class="badge rounded-pill bg-secondary">Pendiente</span>
										<?php
										}elseif ($lst_legal_d[3] == 20) {
										?>
										<span class="badge rounded-pill bg-warning text-dark">En revision</span>
										<?php
										}elseif ($lst_legal_d[3] == 90) {
										?>
										<span class="badge rounded-pill bg-success">Finalizado</span>
										<?php
										}
										?>
										</td>
										<td><?php echo $lst_legal_d[4] ?></td>
										<td><?php echo $lst_legal_d[5] ?></td>
										<td>
			                            	<button type="button" class="btn btn-rounded btn-success btn_ver_files" data-toggle="modal" data-target="#ver_docs">
			                            		<i class="fa-regular fa-eye"></i>
			                            	</button>
			                          	</td>
									</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
						<!-- END SECTION -->

						<!-- SECTION -->
						<div class="card-body">
							<h3 class="card-title">Subir documentos .pdf, .png, .jpg, .jpeg</h3>
							<br>
							<br>
							<table class="table">
								<thead class="table-dark">
									<tr>
										<th>ID DOC</th>
										<th>direccion</th>
										<th>fecha_reg</th>
										<th>estado</th>
										<th>Editar</th>
									</tr>
								</thead>
								<tbody>

									<?php
									$list_solic_legal_client= $oLegal->listadoSolicDocsLegal_clients($_SESSION['id_usu'], $_SESSION['dni']);
									foreach ($list_solic_legal_client as $lst_legal_d): ?>
									<tr>

										<td><?php echo $lst_legal_d[0] ?></td>
										<td><?php echo $lst_legal_d[1] ?></td>
										<td><?php echo $lst_legal_d[2] ?></td>
										<td>
										<?php
											if ($lst_legal_d[3] == 10) {
										?>
										<span class="badge rounded-pill bg-secondary">Pendiente</span>
										<?php
										}elseif ($lst_legal_d[3] == 20) {
										?>
										<span class="badge rounded-pill bg-warning text-dark">En revision</span>
										<?php
										}elseif ($lst_legal_d[3] == 90) {
										?>
										<span class="badge rounded-pill bg-success">Finalizado</span>
										<?php
										}
										?>
										</td>
										<td><?php echo $lst_legal_d[4] ?></td>
										<td><?php echo $lst_legal_d[5] ?></td>
										<td>
			                            	<button type="button" class="btn btn-rounded btn-success btn_ver_files_2" data-toggle="modal" data-target="#ver_docs">
			                            		<i class="fa-regular fa-eye"></i>
			                            	</button>
			                          	</td>
									</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
						<!-- END SECTION -->
					</div>

				</div>

			</div>

			<div class="modal fade" id="upload_doc">
		        <div class="modal-dialog">
		        	<div class="modal-content">
			            <div class="modal-header">
			              <h4 class="modal-title">Subir Documento</h4>
			              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>
			            <form action="../Controller/upload_docs_legal.php" method="POST" enctype="multipart/form-data">
			            	<div class="modal-body">
			            		<div class="form-group" hidden>
	                                    <label>usuario</label>
	                                    <input type="text" name="usu_dni" id="usu_dni" value="<?php echo $_SESSION['dni'] ?>">
	                                    <br>
	                                    <label>secuence</label>
	                                    <input type="text" name="id_usu" id="id_usu" value="<?php echo $_SESSION['id_usu'] ?>">
	                                    <br>
	                                    <label>id doc type</label>
	                                    <input type="text" name="id_doc_type" id="id_doc_type">
	                                    <br>
	                                    <label>desc</label>
	                                    <input type="text" name="desc_doc" id="desc_doc">
	                            </div>
			            		<div class="form-group">
		                            <input type="file" name="fileToUpload" id="fileToUpload">
		                        </div>
		                        <div class="modal-footer justify-content-between">
					              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					              <button id="save_doc_legal" type="save_doc_legal" name="submit" class="btn btn-primary">Subir</button>
					            </div>
			            	</div>
			            </form>
		          	</div>
		          <!-- /.modal-content -->
		        </div>
		        <!-- /.modal-dialog -->
		    </div>

		    <div class="modal fade" id="lst_hr_0">
		        <div class="modal-dialog">
		        	<div class="modal-content">
			            <div class="modal-header">
			              <h4 class="modal-title">Mis Documentos: <strong id="titulo_docs"></strong></h4>
			              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>
			            <form action="../Controller/upload_docs_legal.php" method="POST" enctype="multipart/form-data">
			            	<div class="modal-body">
			            		<div class="form-group" hidden>
	                                    <label>usuario</label>
	                                    <input type="text" name="usu_dni" id="usu_dni" value="<?php echo $_SESSION['dni'] ?>">
	                                    <br>
	                                    <label>concepto</label>
	                                    <input type="text" name="_concept" id="_concept">
	                                    <br>
	                            </div>
			            		<div class="form-group">
		                           <div id="descarga_archivo_m"></div>
		                        </div>
		                        <div class="modal-footer justify-content-between">
					              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					              <button id="save_doc_legal" type="save_doc_legal" name="submit" class="btn btn-primary">Subir</button>
					            </div>
			            	</div>
			            </form>
		          	</div>
		          <!-- /.modal-content -->
		        </div>
		        <!-- /.modal-dialog -->
		    </div>

		    <div class="modal fade" id="lst_files">
		        <div class="modal-dialog">
		        	<div class="modal-content">
			            <div class="modal-header">
			              <h4 class="modal-title">Mis Documentos: <strong id="titulo_docs"></strong></h4>
			              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>
		            		<div class="modal-body">
			            		<div class="form-group">
			            			<input type="text" name="id_usu_soli" id="id_usu_soli">
			            			<input type="text" name="dni_usu_soli" id="dni_usu_soli">



			            			<label>Hoja de Resumen</label>

			            			<!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->
			            			<button type="button" class="btn btn-rounded btn-success btn_ver_tipos" data-toggle="modal" data-target="#ver_docs" data-id_doc="1" data-nom_doc="H_R">
			                            <i class="fa-regular fa-eye">user</i>
			                        </button>
			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->



			                        <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)-->
			                        <button type="button" class="btn btn-rounded btn-success btn_ver_tipos_0" data-toggle="modal" data-target="#ver_docs" data-id_doc="1" data-nom_doc="H_R">
			                            <i class="fa-regular fa-eye"> admin</i>
			                        </button><br>
			                        <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)-->



			                        <label>Predio Urbano</label>

			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->
			            			<button type="button" class="btn btn-rounded btn-success btn_ver_tipos" data-toggle="modal" data-target="#ver_docs" data-id_doc="2" data-nom_doc="P_U">
			                            <i class="fa-regular fa-eye">user</i>
			                        </button>
			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->



			                        <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)-->
			                        <button type="button" class="btn btn-rounded btn-success btn_ver_tipos_0" data-toggle="modal" data-target="#ver_docs" data-id_doc="2" data-nom_doc="P_U">
			                            <i class="fa-regular fa-eye"> admin</i>
			                        </button><br>
			                        <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)-->




			                        <label>Copia Literal</label>
			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->
			            			<button type="button" class="btn btn-rounded btn-success btn_ver_tipos" data-toggle="modal" data-target="#ver_docs" data-id_doc="3" data-nom_doc="C_L">
			                            <i class="fa-regular fa-eye">user</i>
			                        </button>
			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->


			                        <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)-->
			                        <button type="button" class="btn btn-rounded btn-success btn_ver_tipos_0" data-toggle="modal" data-target="#ver_docs" data-id_doc="3" data-nom_doc="C_L">
			                            <i class="fa-regular fa-eye"> admin</i>
			                        </button><br>
			                        <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)-->

			                        <label>DNI</label>

			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->
			            			<button type="button" class="btn btn-rounded btn-success btn_ver_tipos" data-toggle="modal" data-target="#ver_docs" data-id_doc="4" data-nom_doc="DNI">
			                            <i class="fa-regular fa-eye">user</i>
			                        </button>
			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->

			                        <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)-->
			                        <button type="button" class="btn btn-rounded btn-success btn_ver_tipos_0" data-toggle="modal" data-target="#ver_docs" data-id_doc="4" data-nom_doc="DNI">
			                            <i class="fa-regular fa-eye"> admin</i>
			                        </button><br>
			                        <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)-->


		                        </div>
		                        <div class="modal-footer justify-content-between">
					              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					            </div>
		            		</div>
		          	</div>
		          <!-- /.modal-content -->
		        </div>
		        <!-- /.modal-dialog -->
		    </div>


		    <div class="modal fade" id="lst_files_2">
		        <div class="modal-dialog">
		        	<div class="modal-content">
			            <div class="modal-header">
			              <h4 class="modal-title">Mis Documentos: <strong id="titulo_docs"></strong></h4>
			              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>
		            		<div class="modal-body">
			            		<div class="form-group">
			            			<label>Hoja de Resumen</label>
			            			<!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->
			            			<button type="button" class="btn btn-rounded btn-success btn_ver_tipos" data-toggle="modal" data-target="#ver_docs" data-id_doc="1" data-nom_doc="H_R">
			                            <i class="fa-regular fa-eye">user</i>
			                        </button>
			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->


			                        <label>Predio Urbano</label>

			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->
			            			<button type="button" class="btn btn-rounded btn-success btn_ver_tipos" data-toggle="modal" data-target="#ver_docs" data-id_doc="2" data-nom_doc="P_U">
			                            <i class="fa-regular fa-eye">user</i>
			                        </button>
			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->


			                        <label>Copia Literal</label>
			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->
			            			<button type="button" class="btn btn-rounded btn-success btn_ver_tipos" data-toggle="modal" data-target="#ver_docs" data-id_doc="3" data-nom_doc="C_L">
			                            <i class="fa-regular fa-eye">user</i>
			                        </button>
			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->

			                        <label>DNI</label>

			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->
			            			<button type="button" class="btn btn-rounded btn-success btn_ver_tipos" data-toggle="modal" data-target="#ver_docs" data-id_doc="4" data-nom_doc="DNI">
			                            <i class="fa-regular fa-eye">user</i>
			                        </button>
			                        <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->


		                        </div>
		                        <div class="modal-footer justify-content-between">
					              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					            </div>
		            		</div>
		          	</div>
		          <!-- /.modal-content -->
		        </div>
		        <!-- /.modal-dialog -->
		    </div>

		    <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->
		    <div class="modal fade" id="lst_docs_0">
		        <div class="modal-dialog">
		        	<div class="modal-content">
			            <div class="modal-header">
			              <h4 class="modal-title">Mis Documentos: <strong id="titulo_docs"></strong></h4>
			              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>
			            <form action="../Controller/upload_docs_legal.php" method="POST" enctype="multipart/form-data">
			            	<div class="modal-body">
			            		<div class="form-group">
			            				<label>id</label>
	                                    <input type="text" name="id_client" id="id_client" value="<?php echo $_SESSION['id_usu'] ?>">
	                                    <br>
	                                    <label>dni</label>
	                                    <input type="text" name="dni_client" id="dni_client" value="<?php echo $_SESSION['dni'] ?>">
	                                    <br>
	                                    <label>id_tipo_doc_lgl</label>
	                                    <input type="text" name="id_tipo_doc_lgl" id="id_tipo_doc_lgl">
	                                    <br>
	                                    <label>concepto</label>
	                                    <input type="text" name="_concept_doc" id="_concept_doc">
	                                    <br>
	                            </div>
			            		<div class="form-group">
		                           <div id="descarga_archivo_s"></div>
		                        </div>

		                        <div class="modal-footer justify-content-between">
					              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					              <button id="save_doc_legal" type="save_doc_legal" name="submit" class="btn btn-primary">Subir</button>
					            </div>
			            	</div>
			            </form>
		          	</div>
		          <!-- /.modal-content -->
		        </div>
		        <!-- /.modal-dialog -->
		    </div>
		    <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)--> <!--(modo usuario comun)-->



		    <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)-->
		    <div class="modal fade" id="lst_docs_1">
		        <div class="modal-dialog">
		        	<div class="modal-content">
			            <div class="modal-header">
			              <h4 class="modal-title">Mis Documentos: <strong id="titulo_docs"></strong></h4>
			              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>
			            <form action="../Controller/upload_docs_legal.php" method="POST" enctype="multipart/form-data">
			            	<div class="modal-body">
			            		<div class="form-group">
			            				<label>id</label>
	                                    <input type="text" name="id_client_0" id="id_client_0">
	                                    <br>
	                                    <label>dni</label>
	                                    <input type="text" name="dni_client_0" id="dni_client_0">
	                                    <br>
	                                    <label>id_tipo_doc_lgl</label>
	                                    <input type="text" name="id_tipo_doc_lgl_0" id="id_tipo_doc_lgl_0">
	                                    <br>
	                                    <label>concepto</label>
	                                    <input type="text" name="_concept_doc_0" id="_concept_doc_0">
	                                    <br>
	                            </div>
			            		<div class="form-group">
		                           <div id="descarga_archivo_ul"></div>
		                        </div>

		                        <select name="cbo_estados" id="cbo_estados">

		                        	<optgroup label="Estado Actual:">
		                        		<option value="">xd</option>
		                        	</optgroup>

		                        	<option value="">xd2</option>
								    <option value="">Pendiente</option>

								</select>

		                        <div class="modal-footer justify-content-between">
					              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					              <button id="save_doc_legal" type="save_doc_legal" name="submit" class="btn btn-primary">Subir</button>
					            </div>
			            	</div>
			            </form>
		          	</div>
		          <!-- /.modal-content -->
		        </div>
		        <!-- /.modal-dialog -->
		    </div>
		    <!--(modo admin)--> <!--(modo admin)--> <!--(modo admin)--> <!--(modo usuario comun)-->



		</section>

		<!-- /.card-body-->
		<div class="card-footer">
			<strong>Copyright © 1986-2023 <a href="https://mak.com.pe/">MAK S.A.C</a></strong>
			All rights reserved.
		</div>

	</div>


	<!-- REQUIRED SCRIPTS -->
	<!--<script src="../Vista/js/resume.js"></script>-->
	<script src="../Vista/assets/functions.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/viewerjs/dist/viewer.min.css">
	<script src="https://cdn.jsdelivr.net/npm/viewerjs/dist/viewer.min.js"></script>


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

	<script>

	  //inputs
	  var hr_inpt = document.getElementById('hr_s');
	  var pu_inpt = document.getElementById('pu_s');
	  var cl_inpt = document.getElementById('cl_s');
	  var dni_inpt = document.getElementById('dni_s');



	  var btn_hr = document.getElementById('btn_save_hr');
	  var btn_pu = document.getElementById('btn_save_pu');
	  var btn_cl = document.getElementById('btn_save_cl');
	  var btn_dni = document.getElementById('btn_save_dni');




	  hr_inpt.addEventListener('change', function() {

	    if (hr_inpt.files.length > 0) {

	      btn_hr.disabled = false;
	    } else {

	      btn_hr.disabled = true;
	    }
	  });

	  pu_inpt.addEventListener('change', function() {

	    if (pu_inpt.files.length > 0) {

	      btn_pu.disabled = false;
	    } else {

	      btn_pu.disabled = true;
	    }
	  });

	  cl_inpt.addEventListener('change', function() {

	    if (cl_inpt.files.length > 0) {

	      btn_cl.disabled = false;
	    } else {

	      btn_cl.disabled = true;
	    }
	  });

	  dni_inpt.addEventListener('change', function() {

	    if (dni_inpt.files.length > 0) {

	      btn_dni.disabled = false;
	    } else {

	      btn_dni.disabled = true;
	    }
	  });


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



        $('.btn_lst_hr').on('click', function() {
            console.log("test");


            $('#lst_hr_0').modal('show');


            var valor1 = $(this).data('valor');
            var titulo_ = $(this).data('titulo');

            console.log(valor1);

            $('#_concept').val(valor1);
            $('#titulo_docs').text(titulo_);

            var concepto = $('#_concept').val();

            var titulo_modal = $('#titulo_docs').val();

            var dni =  $('#usu_dni').val();


            console.log(titulo_modal);
            console.log(concepto);

            $.ajax({
			    type: 'POST',
			    url: '../Controller/obtener_files.php',
			    data: {
			        usu_dni: dni,
			        _concept: concepto
			    },
			    success: function(response) {
			        var files = JSON.parse(response);

			        if (Array.isArray(files) && files.length === 0) {
			             $('#descarga_archivo_m').html('<p>No se han subido archivos.</p>');
			        } else {
			            var fileList = $('<ol>');

			            if (Array.isArray(files)) {
			                files.forEach(function(file) {
			                    if (typeof file === 'string') {
						            var link_ = $('<a>')
						                .attr('href', '../Documentos Legal/' + dni + '/' + concepto + '/' + file)
						                .text(file);

						            var listItem = $('<li>').append(link_);
						            fileList.append(listItem);
						        }
			                });
			            } else if (typeof files === 'string'){
			                var link_ = $('<a>')
			                    .attr('href','../Documentos Legal/'+dni+'/'+concepto+'/'+files)
			                    .text(files);

			                var listItem = $('<li>').append(link_);
			                fileList.append(listItem);

			                console.log("entra aqui");
			            }

			            $('#descarga_archivo_m').empty();
			            $('#descarga_archivo_m').html(fileList);

			            console.log(files);

			            console.log(fileList.html());
			        }
			    },
			    error: function(xhr, status, error) {
			        console.log(error);
			    }
			});

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

		    console.log('e?'+id_usu_soli);
		    console.log('pop'+dni_usu_soli);

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


            var concept =  $('#_concept_doc_0').val();
            var id_tipo_doc_ = $('#id_tipo_doc_lgl_0').val();

            $.ajax({
			    type: 'POST',
			    url: '../Controller/obtener_files_client.php',
			    data: {
			    	_concept_doc:concept,
			        id_client: id_usu_soli,
			        dni_client: dni_usu_soli,
			        id_tipo_doc: id_tipo_doc_
			    },
			    success: function(response) {
			        var data  = JSON.parse(response);

			        var archivos = data.archivos;
        			var estado_doc = data.status_doc;


				    if (archivos && archivos.length > 0) {
				        var enlaceHtml = '';

				        archivos.forEach(function(archivo) {
				            var ruta = archivo.ruta;
				            var nombreArchivo = archivo.archivo;
				            var estado = archivo.estado;


				            enlaceHtml += '<a href="' + ruta + nombreArchivo+'">' + nombreArchivo + '</a> &nbsp';

				            enlaceHtml += '<i>' + status_r + '</i><br>';
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



            var concept =  $('#_concept_doc').val();
            var id_tipo_doc_ = $('#id_tipo_doc_lgl').val();

            var dni = '<?php echo $_SESSION['dni'] ?>';
            var id_cli = '<?php echo $_SESSION['id_usu'] ?>';

            $.ajax({
			    type: 'POST',
			    url: '../Controller/obtener_files_client.php',
			    data: {
			    	_concept_doc:concept,
			        id_client: id_cli,
			        dni_client: dni,
			        id_tipo_doc: id_tipo_doc_
			    },
			    success: function(response) {
			        var data  = JSON.parse(response);

			        var archivos = data.archivos;
        			var estado_doc = data.status_doc;


				    if (archivos && archivos.length > 0) {
				        var enlaceHtml = '';

				        archivos.forEach(function(archivo) {
				            var ruta = archivo.ruta;
				            var nombreArchivo = archivo.archivo;
				            var estado = archivo.estado;
				            var status_r = '';


				            enlaceHtml += '<a href="' + ruta + nombreArchivo+'">' + nombreArchivo + '</a> &nbsp';

				             if (estado==500) {
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

   <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
	<script>
		/*
	    document.getElementById('dni_l').addEventListener('change', function(e) {
	        var file = e.target.files[0];
	        var fileReader = new FileReader();

	        fileReader.onload = function(e) {
	            var arrayBuffer = e.target.result;
	            var data = new Uint8Array(arrayBuffer);
	            var workbook = XLSX.read(data, { type: 'array' });

	            // Obtener el contenido de la primera hoja del archivo Excel
	            var sheetName = workbook.SheetNames[0];
	            var worksheet = workbook.Sheets[sheetName];
	            var html = XLSX.utils.sheet_to_html(worksheet);

	            // Insertar el contenido HTML en el div de vista previa
	            document.getElementById('dni_resume').innerHTML = html;
	        };

	        fileReader.readAsArrayBuffer(file);
	    });*/
	</script>

</body>

</html>