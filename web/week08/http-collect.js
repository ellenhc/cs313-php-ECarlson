//Baby steps
/*let sum = 0;
for (i = 2; i < process.argv.length; i++) {
    sum += Number(process.argv[i]);
}
console.log(sum)*/

//My first I/O
/*const fs = require('fs');
var buf = fs.readFileSync(process.argv[2]);
const str = buf.toString();
var res = str.split('\n'); //splits a string into an array of substrings
console.log(res.length - 1); //the test file doesn't have a newline character at the end of the last line*/

//My first async
/*const fs = require('fs');
var filename = process.argv[2];
var buf = fs.readFile(filename, 'utf8', function callback(err, buf) {
    const str = buf.toString();
    var res = str.split('\n');
    console.log(res.length - 1);
});*/

//Filtered LS
/*const fs = require('fs');
const path = require('path'); //what is this?
let directory = process.argv[2];
let ext = '.' + process.argv[3]; //the file ext provided will not incldue the . prefix

fs.readdir(directory, function callback(err, files) {
    files.forEach(function(file) {
        if (path.extname(file) == ext) {
            console.log(file);
        }
    })
}); //takes a pathname as 1st parameter, callback as 2nd*/

//Make it modular
/*const myModule = require('./myModule.js');
let directory = process.argv[2];
let ext = process.argv[3];
myModule(directory, ext, (err, filteredList) => {
    if (err) return console.error(err);
    filteredList.forEach(function(file) {
        console.log(file);
    })
});*/

//HTTP Client
/*const http = require('http'); //module
const url = process.argv[2];
http.get(url, function callback(response) {
    response.on('error', function(err) {
        console.error(err);
    })
    response.setEncoding('utf8');
    response.on('data', data => {
        console.log(data);
    })
})*/

//HTTP Collect
/*const http = require('http');
const url = process.argv[2];
http.get(url, function callback(response) {
    let result = "";
    response.setEncoding('utf8');
    response.on('error', function(err) {
        console.error(err);
    })
    response.on('data', (data) => {
        result += data;
    })
    response.on('end', () => {
        console.log(result.length);
        console.log(result);
    })
})*/