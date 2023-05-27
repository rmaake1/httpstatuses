const removeHTMLElements = require('./remove-html-elements')
const firstParagraph = require('./first-paragraph');
const excerpt = require('./excerpt');
const decode = require('./decode');

module.exports = {
    decode,
    excerpt,
    firstParagraph,
    removeHTMLElements
}