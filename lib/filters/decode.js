const he = require('he');

// decodes any HTML entities produced as part of markdown process
const decode = str => he.decode(str);

module.exports = decode;