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