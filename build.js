var Metalsmith = require('metalsmith');
var markdown = require('metalsmith-markdown');
var collections = require('metalsmith-collections');
var layouts = require('metalsmith-layouts');
var branch = require('metalsmith-branch');
var sass = require('metalsmith-sass');
var elevate = require('metalsmith-elevate');
var ignore = require('metalsmith-ignore');
var collectionGrouping = require('metalsmith-collection-grouping');
var fingerprint = require('metalsmith-fingerprint-ignore');
var excerpts = require('metalsmith-better-excerpts');

var metalsmith = Metalsmith(__dirname);
  metalsmith
  .source('contents')
  .destination('build')

  .use(collections({
    pages: {
      pattern: '*.md'
    },
    codes: {
      pattern: 'codes/*.md',
      sortBy: 'code'
    }
  }))

  .use(collectionGrouping({
    codes: {
      groupBy: 'set', // set instead of class, because class is a reserved word...
      meta: 'codes/classes.json'
    }
  }))

  .use(branch('*.scss')
    .use(sass())
  )

  .use(fingerprint({
    pattern: ['style.css', 'favicon.ico']
  }))

  .use(branch('**/*.md')
    .use(markdown())
    .use(excerpts({pruneLength: 400}))
    .use(layouts({
      engine: 'jade',
      directory: 'templates',
      default: 'code.jade',
      pretty: true
    }))
  )

  .use(elevate('codes/*.html'))
  .use(ignore('**/*.json'))

  .build(function (err) {
    if (err) throw err;
    console.log('Build successful!');
  });