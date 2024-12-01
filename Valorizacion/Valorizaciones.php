
<?php
require_once('../config/security.php');
require_once('../Controller/controladorListar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../Vista/plugins/fontawesome-free/css/all.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../Vista/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../Vista/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../Vista/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../Vista/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../Vista/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini  sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed">
  <?php include '../Vista/nav_bar_moduls.php' ?>
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Pendientes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Cod Solic.</th>
                      <th>Direccion</th>
                      <th>Tipo Propiedad</th>
                      <th>SubTipo Propiedad</th>
                      <th>Tipo Promo</th>
                      <th>Area Terreno</th>
                      <th>Area Construida</th>
                      <th>Area Ocupada</th>
                      <th>-</th>
                    </tr>
                    </thead>

                    <tbody>
                      <?php foreach ($list_valorizacion as $lst_valrzc): ?>
                        <tr>
                          <td><?php echo $lst_valrzc[0] ?></td>
                          <td><?php echo $lst_valrzc[1] ?></td>
                          <td><?php echo $lst_valrzc[2] ?></td>
                          <td><?php echo $lst_valrzc[3] ?></td>
                          <td><?php echo $lst_valrzc[4] ?></td>
                          <td><?php echo $lst_valrzc[5] ?></td>
                          <td><?php echo $lst_valrzc[6] ?></td>
                          <td><?php echo $lst_valrzc[7] ?></td>
                          <td>
                            <button class="btn btn-rounded btn-success">Revisar</button>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Cod Solic.</th>
                      <th>Direccion</th>
                      <th>Tipo Propiedad</th>
                      <th>SubTipo Propiedad</th>
                      <th>Tipo Promo</th>
                      <th>Area Terreno</th>
                      <th>Area Construida</th>
                      <th>Area Ocupada</th>
                      <th>-</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <strong>Copyright &copy; 1986-2023 <a href="https://mak.com.pe/">MAK S.A.C</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0.0
        </div>
      </footer>
    </div>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="../Vista/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../Vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- DataTables  & Plugins -->
  <script src="../Vista/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../Vista/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../Vista/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../Vista/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../Vista/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../Vista/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../Vista/plugins/jszip/jszip.min.js"></script>
  <script src="../Vista/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../Vista/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../Vista/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../Vista/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../Vista/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


  <!-- overlayScrollbars -->
  <script src="../Vista/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../Vista/dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->

  <!-- jQuery Mapael -->
  <script src="../Vista/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="../Vista/plugins/raphael/raphael.min.js"></script>
  <script src="../Vista/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="../Vista/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="../Vista/plugins/chart.js/Chart.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="../Vista/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="../Vista/dist/js/pages/dashboard2.js"></script>
</body>

</html>
