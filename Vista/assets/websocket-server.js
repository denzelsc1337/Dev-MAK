const WebSocket = require('ws');

const server = new WebSocket.Server({ port: 8081 });

server.on('connection', (socket) => {
  console.log('Cliente conectado');

  socket.on('message', (message) => {
    console.log('Mensaje recibido: ', message);

    // Aquí puedes agregar la lógica para emitir actualizaciones a otros clientes
  });

  socket.on('close', () => {
    console.log('Cliente desconectado');
  });
});