const express = require('express');
const http = require('http');
const { Server } = require('socket.io');
const cors = require('cors'); // Importa el paquete cors

const app = express();
const server = http.createServer(app);
const io = new Server(server);

// Habilita CORS para permitir solicitudes desde http://localhost
app.use(cors({
  origin: 'http://localhost'
}));

io.on('connection', (socket) => {
  // Resto de tu código para manejar conexiones y mensajes
});

server.listen(8080, () => {
  console.log('Servidor WebSocket escuchando en el puerto 8080');
});

const WebSocket = require('ws');

const wss = new WebSocket.Server({ port: 8080 });

wss.on('connection', (ws) => {
  ws.on('message', (message) => {
    // Manejar el mensaje del cliente (puedes implementar más lógica aquí)
    if (message === 'nuevo_registro') {
      // Envía el mensaje a todos los clientes conectados
      wss.clients.forEach((client) => {
        if (client.readyState === WebSocket.OPEN) {
          client.send(JSON.stringify({ tipo: 'nuevo_registro' }));
        }
      });
    }
  });
});