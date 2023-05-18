const prune = require('voca/prune');
const DEFAULT_LENGTH = 50;

// Extracts the first line of a string, then truncates to `length`
function excerpt(str, length = DEFAULT_LENGTH) {
  if (str.length === 0) {
    return str;
  }

  const firstParagraph = str.split("\n")[0];
  return prune(firstParagraph, length);
}

module.exports = excerpt;