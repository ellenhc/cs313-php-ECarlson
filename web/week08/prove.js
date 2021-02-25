// Require the http package
const http = require('http');

// Use createServe method to handle requests
http.createServer(function onRequest(request, response) {
    if (request.url == "/home") {
        response.writeHead(404, { 'Content-Type': 'text/html' });
        response.write('<h1>Hello World</h1>'); // Use response.write() to write any text
        response.end(); // When done writing, end with response.end()
    } else if (request.url == "/getData") {
        response.writeHead(200, { "Content-Type": "application/json" });
        response.write(JSON.stringify({ "name": "Br. Burton", "class": "cs313" }));
        response.end();
    } else {
        response.writeHead(404, { 'Content-Type': 'text/html' });
        response.write('<h1>Error</h1>');
        response.end();
    }
}).listen(8888); // Set it to listen on a port such as 8888