const fs = require('fs');
const path = require('path');
module.exports = (directory, ext, callback) => {
    ext = "." + ext;
    fs.readdir(directory, function(err, files) {
        if (err) return callback(err);
        const filtered = files.filter(file => {
            return path.extname(file) == ext;
        })
        return callback(null, filtered);
    })
}