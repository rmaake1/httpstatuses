const prune = require('voca/prune');
const he = require('he');

const firstParagraph = require('./first-paragraph');

const DEFAULT_LENGTH = 50;

// Extracts the first line of a string, then truncates to `length`,
function excerpt(str, length = DEFAULT_LENGTH) {
  const content = firstParagraph(str);
  return prune(content, length);
}

module.exports = excerpt;