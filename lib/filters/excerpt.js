const prune = require('voca/prune');
const he = require('he');

const firstParagraph = require('./first-paragraph');

const DEFAULT_LENGTH = 50;

// Extracts the first line of a string, then truncates to `length`,
// decodes any HTML entities produced as part of markdown process.
function excerpt(str, length = DEFAULT_LENGTH) {
  const content = firstParagraph(str);
  const decoded = he.decode(content);
  return prune(decoded, length);
}

module.exports = excerpt;