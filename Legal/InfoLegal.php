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
	                                                            <div class="row">
	                                                                <div class="col-sm-10">
	                                                                    <!-- text input -->
	                                                                    <div class="form-group">
	                                                                        <label>H.R</label>
	                                                                        <input type="file" class="form-control" id="hr_s" name="hr_s">
	                                                                        <button type="button" class="btn btn-rounded btn-success btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="H_R">Subir</button>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                            <button type="submit" class="btn btn-info btn-lg col-md-12" id="btn_save_hr" name="btn_save_hr">Registrar</button>
                                                        	</form>

                                                        	<form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data">
                                                        		<input type="text" class="form-control" id="dni_usu_1" name="dni_usu_1" value="<?php echo $_SESSION['dni']; ?>">
	                                                            <div class="row">
	                                                                <div class="col-sm-10">
	                                                                    <!-- text input -->
	                                                                    <div class="form-group">
	                                                                        <label>P.U</label>
	                                                                        <input type="file" class="form-control" id="pu_s" name="pu_s">
	                                                                        <button type="button" class="btn btn-rounded btn-success btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="P_U">Subir</button>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                            <button type="submit" class="btn btn-info btn-lg col-md-12" id="btn_save_pu" name="btn_save_pu">Registrar</button>
	                                                        </form>

	                                                        <form method="POST" action="../Controller/Upload_Legal_Docs.php" enctype="multipart/form-data">
                                                        		<input type="text" class="form-control" id="dni_usu_2" name="dni_usu_2" value="<?php echo $_SESSION['dni']; ?>">
	                                                            <div class="row">
	                                                                <div class="col-sm-10">
	                                                                    <!-- text input -->
	                                                                    <div class="form-group">
	                                                                        <label>Copia Literal</label>
	                                                                        <input type="file" class="form-control" id="cl_s" name="cl_s">
	                                                                        <button type="button" class="btn btn-rounded btn-success btn_lst_hr btn_lst_hr_0" data-toggle="modal" data-target="#lst_hr_0" data-valor="C_L">Subir</button>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                            <button type="submit" class="btn btn-info btn-lg col-md-12" id="btn_save_cl" name="btn_save_cl">Registrar</button>
	                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="card card-default">
                                                        <div class="card-body">
                                                        	<div class="row">
                                                        		<div class="col-sm-10">
                                                        			<label>DNI</label>
                                                        			<div id="dni_resume"></div>
                                                        		</div>
                                                        	</div>

                                                        	<div class="row">
                                                        		<div class="col-sm-10">
                                                        			<label>P.U</label>
                                                        			<div id="pu_resume"></div>
                                                        		</div>
                                                        	</div>

                                                        	<div class="row">
                                                        		<div class="col-sm-10">
                                                        			<label>P.U</label>
                                                        			<div id="pu_resume"></div>
                                                        		</div>
                                                        	</div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4" hidden>
                                                    <div class="card card-default">
                                                        <div class="card-body">
                                                            <!-- Date dd/mm/yyyy -->
                                                            <div class="row" id="a__c">
                                                                <div class="col-sm-8">
                                                                    <!-- text input -->
                                                                    <div class="form-group">
                                                                        <div class="flex">
                                                                            <label>Nombre Completo</label>
                                                                            <div class="input-group-append">
                                                                                <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                    <span class="tooltiptext">
                                                                                        -.
                                                                                    </span>
                                                                                </i>
                                                                            </div>
                                                                        </div>
                                                                        <input type="text" class="form-control"  placeholder="Ingrese nombre" id="nom_cli_l" name="nom_cli_l" >
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row" id="a__o">
                                                                <div class="col-sm-8">
                                                                    <!-- text input -->
                                                                    <div class="form-group">
                                                                        <div class="flex">
                                                                            <label>Direccion</label>
                                                                            <div class="input-group-append">
                                                                                <i class="fa-solid fa-circle-info tooltipInfo tooltip-right">
                                                                                    <span class="tooltiptext">
                                                                                        -.
                                                                                    </span>
                                                                                </i>
                                                                            </div>
                                                                        </div>
                                                                        <input type="text" class="form-control" id="" name=""  >
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row" id="antig_">
                                                                <div class="col-sm-8">
                                                                    <!-- text input -->
                                                                    <div class="form-group">
                                                                        <label>*</label>
                                                                        <input type="text" class="form-control"  id="" name="" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="d-grid gap-2 col-3 mx-auto form-flex">
                                                <button type="submit" class="btn btn-info btn-lg col-md-12" id="btn_save_legal" name="btn_save_legal">Registrar</button>
                                            </div>
                                        </div>
                            		 </form>
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
										<th>SUBIR</th>
										<th hidden>ID DOC</th>
										<th>TIPO DOC LEGAL</th>
										<th>TIEMPO ESPERA</th>
										<th>COSTO</th>
										<th>PROCEDIMIENTO</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($list_docs_legal as $lst_legal_d): ?>
									<tr>
										<td>
			                            	<button type="button" class="btn btn-rounded btn-success btn_subir_1" data-toggle="modal" data-target="#upload_doc">Subir</button>
			                          	</td>
										<td hidden><?php echo $lst_legal_d[0] ?></td>
										<td><?php echo $lst_legal_d[1] ?></td>
										<td><?php echo $lst_legal_d[2] ?></td>
										<td><?php echo $lst_legal_d[3] ?></td>
										<td><?php echo $lst_legal_d[4] ?></td>
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
			              <h4 class="modal-title">Mis Documento</h4>
			              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>
			            <form action="../Controller/upload_docs_legal.php" method="POST" enctype="multipart/form-data">
			            	<div class="modal-body">
			            		<div class="form-group">
	                                    <label>usuario</label>
	                                    <input type="text" name="usu_dni" id="usu_dni" value="<?php echo $_SESSION['dni'] ?>">
	                                    <br>
	                                    <label>concepto</label>
	                                    <input type="text" name="_concept" id="_concept" value="H_R">
	                                    <br>
	                            </div>
			            		<div class="form-group">
		                           <label id="descarga_archivo_m"></label>
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

            console.log(valor1);

            $('#_concept').val(valor1);

            var concepto = $('#_concept').val();

            var dni =  $('#usu_dni').val();

            console.log(concepto);

            $.ajax({
                type: 'POST',
                url: '../Controller/obtener_files.php',
                data: {
                    usu_dni: dni,
                    _concept: concepto
                },
                success: function(response) {

                    if (response.trim() === "Aun no se han subido archivos") {

                        console.log(response);
                        console.log("Sin archivos");

                    } else if (response.trim() === "no se encontraron archivos") {
                        console.log("No se encontraron archivos");
                    } else {


                        var link_ = $('<a>')
                            .attr('href','../Documentos Legal/'+dni+'/'+concepto+'/'+response)
                            .text(response);

                        $('#descarga_archivo_m').html(link_);

                        console.log(response);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });

        });


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