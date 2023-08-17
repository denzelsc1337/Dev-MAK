<!DOCTYPE html>
<html>
<head>
    <title>Cliente WebSocket</title>
</head>
<body>

<h1>Cliente WebSocket</h1>

<script>
    // Crear una instancia del objeto WebSocket y especificar la URL del servidor
    const socket = new WebSocket('ws://localhost:8080'); // Cambia la URL según la ubicación de tu servidor

    // Escuchar el evento de conexión exitosa
    socket.addEventListener('open', (event) => {
        console.log('Conectado al servidor WebSocket');
        
        // Enviar un mensaje al servidor
        socket.send('¡Hola, servidor!');
    });

    // Escuchar el evento de mensaje entrante
    socket.addEventListener('message', (event) => {
        console.log('Mensaje del servidor:', event.data);
    });

    // Escuchar el evento de cierre de la conexión
    socket.addEventListener('close', (event) => {
        console.log('Conexión cerrada');
    });
</script>

</body>
</html>