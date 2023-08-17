<!DOCTYPE html>
<html>
<head>
    <!-- ... Tu código HTML ... -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>

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

    <script>
        const socket = new WebSocket('ws://localhost:8080'); // Cambia la URL según tu configuración

        socket.addEventListener('message', (event) => {
            const mensaje = JSON.parse(event.data);
            console.log('Mensaje recibido:', mensaje);
            if (mensaje.tipo === 'nuevo_registro') {
                cargarTabla(); // Carga la tabla actualizada cuando se recibe la notificación
            }
        });

        function cargarTabla() {
            $.ajax({
                url: '../Controller/Get_Data_Total.php', // Cambia la ruta según tu estructura
                success: function (data) {
                    $('#tabla-container').html(data);
                }
            });
        }

        $(document).ready(function () {
            cargarTabla();
        });
    </script>
    <script src="../Vista/assets/functions.js"></script>
</body>
</html>