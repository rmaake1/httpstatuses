function firstParagraph(str) {
    const trimmed = str.trim();
    const firstLine = trimmed.split("\n")[0];
    return firstLine.trim();
}

module.exports = firstParagraph;