function removeHTMLElements({ str, stripSpaces = true, tags } = { str: "", stripSpaces: true }) {
    for (const tag of tags) {
        const formattedTag = `<${tag}>.*?</${tag}>`;
        const regex = new RegExp(formattedTag, 'g');
        str = str.replace(regex, "");
    }

    if (stripSpaces) {
        str = str.replace(/ {2,}/g, ' ');
        str = str.trim();
    }

    return str;
}

module.exports = removeHTMLElements;