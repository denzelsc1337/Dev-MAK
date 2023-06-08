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
		</section>

		<!-- /.card-body-->
		<div class="card-footer">
			<strong>Copyright © 1986-2023 <a href="https://mak.com.pe/">MAK S.A.C</a></strong>
			All rights reserved.
		</div>

	</div>


	<!-- REQUIRED SCRIPTS -->
	<script src="../Vista/js/stepper.js"></script>
	<!--<script src="../Vista/js/resume.js"></script>-->
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
	<script src="../Vista/assets/selection_types.js"></script>

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
    });
    </script>
</body>

</html>