// Require the http package
const http = require('http');
const url = require('url');

// Use createServe method to handle requests
http.createServer(function onRequest(request, response) {
    let request_url = url.parse(request.url, true);
    console.log("Request for: " + request_url.pathname);
    if (request_url.pathname == "/home") {
        response.writeHead(200, { 'Content-Type': 'text/html' });
        response.write('<h1>Hello World</h1>'); // Use response.write() to write any text
        response.end(); // When done writing, end with response.end()
    } else if (request_url.pathname == "/getData") {
        response.writeHead(200, { "Content-Type": "application/json" });
        response.write(JSON.stringify({ name: "Br. Burton", class: "cs313" }));
        response.end();
    } else if (request_url.pathname == "/add") {
        var q = request_url.query;
        let firstNum = parseInt(q.one);
        let secNum = parseInt(q.two);
        let sum = firstNum + secNum;
        response.writeHead(200, { 'Content-Type': 'text/html' });
        response.write(firstNum + ' + ' + secNum + ' = ' + sum);
        response.end();
    } else {
        response.writeHead(404, { 'Content-Type': 'text/html' });
        response.write('<h1>404 Page Not Found</h1>');
        response.end();
    }
}).listen(8888); // Set it to listen on a port such as 8888
console.log('Server running');