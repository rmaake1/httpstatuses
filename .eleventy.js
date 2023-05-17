const prune = require('voca/prune');
const _ = require('lodash');

module.exports = function(eleventyConfig) {
  ["contents/**.ico", "contents/**.txt"]
    .forEach(file => eleventyConfig.addPassthroughCopy(file))

  eleventyConfig.addFilter("excerpt", content => prune(content, 400));

  // Manipulate collection to group status codes by category
  eleventyConfig.addCollection("codes", async function(collectionApi) {
    return _.chain(collectionApi.getFilteredByGlob("./contents/codes/*.md"))
      .orderBy((post) => post.data.code)
      .groupBy((post) => post.data.set)
      .value();
  });

  return {
    dir: { input: "contents" }
  }
};
