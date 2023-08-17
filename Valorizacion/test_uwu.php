<?php
header("Access-Control-Allow-Origin: *"); // Permite solicitudes desde cualquier origen
header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); // Permite métodos HTTP específicos
header("Access-Control-Allow-Headers: *"); // Permite encabezados personalizados
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.0.1/socket.io.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
  // Conectar al servidor WebSocket
  const socket = io('http://localhost:8080'); // Cambia la URL según tu configuración

  // Escuchar eventos de actualización
  socket.on('nuevo_registro', () => {
    cargarTabla(); // Carga la tabla actualizada cuando se recibe la notificación
  });

  // Función para cargar la tabla
  function cargarTabla() {
    $.ajax({
      url: '../Controller/Get_Data_Total.php', // Cambia la ruta según tu estructura
      success: function (data) {
        // Actualiza el contenido de la tabla con la nueva lista
        $('#tabla-container').html(data);
      }
    });
  }

  // Cargar la tabla cuando se carga la página por primera vez
  $(document).ready(function () {
    cargarTabla();
  });
</script>

<table id="tabla-container" class="table table-borderless mb-3" style="width: 100%;">
  <thead>
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
  <!-- Agregar el contenido de la tabla aquí -->
</table>