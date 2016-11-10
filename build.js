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
var finalhandler = require('finalhandler');
var http = require('http');
var serveStatic = require('serve-static');
var path = require('path');

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
      meta: path.join('codes', 'classes.json')
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

    if (process.argv[2] != 'without-preview') startPreviewServer();
  });

function startPreviewServer() {
  http.createServer(function(req, res){
    var done = finalhandler(req, res)
    var serve = serveStatic('build', {'index': ['index.html'], 'extensions': ['html']})
    serve(req, res, done)
  }).listen(4887)

  console.log('A local webserver has been launched, visit localhost:4887 in your browser to preview your build.');
  console.log('Exit this process to kill the webserver :-)');
  console.log('To build without the local webserver use `node build without-preview`');
}
