const prune = require('voca/prune');
const he = require('he');

const DEFAULT_LENGTH = 50;

// Extracts the first line of a string, then truncates to `length`,
// decodes any HTML entities produced as part of markdown process.
function excerpt(str, length = DEFAULT_LENGTH) {
  if (str.length === 0) {
    return str;
  }

  const firstParagraph = str.split("\n")[0];
  const decoded = he.decode(firstParagraph);
  return prune(decoded, length);
}

module.exports = excerpt;