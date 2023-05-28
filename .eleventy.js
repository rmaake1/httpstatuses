const {
  decode,
  excerpt,
  firstParagraph,
  removeHTMLElements
} = require('./lib/filters');
const pkg = require('./package.json');
const _ = require('lodash');
const EXCERPT_LENGTH = 400;

module.exports = function(eleventyConfig) {
  eleventyConfig.addGlobalData("site_version", pkg.version);

  ["contents/**.ico", "contents/**.txt"]
    .forEach(file => eleventyConfig.addPassthroughCopy(file))

  eleventyConfig.addFilter("decode", decode);
  eleventyConfig.addFilter("deletehtml", (str => removeHTMLElements({ str, stripSpaces: true, tags: ['sup'] })))
  eleventyConfig.addFilter("firstparagraph", firstParagraph)
  eleventyConfig.addFilter("excerpt", (str) => excerpt(str, EXCERPT_LENGTH));

  // Group status codes by category
  eleventyConfig.addCollection("codes", async function(collectionApi) {
    return _.chain(collectionApi.getFilteredByGlob("./contents/codes/*.md"))
      .orderBy((post) => post.data.code)
      .groupBy((post) => post.data.set)
      .value();
  });

  eleventyConfig.addCollection("codes_json", function(collectionApi) {
    return _.chain(collectionApi.getFilteredByGlob("./contents/codes/*.md"))
      .orderBy((post) => post.data.code)
      .value();
  });

  return { dir: { input: "contents", output: "build" } }
};
