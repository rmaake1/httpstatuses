# [httpstatuses.com](https://httpstatuses.github.io)

<!--
[![Build Status](https://img.shields.io/circleci/project/DavidBiesack/httpstatuses.svg)](https://circleci.com/gh/DavidBiesack/httpstatuses)
-->

[httpstatuses.github.io][5] is an easy to reference database of HTTP
Status Codes with their definitions and helpful code references, each
code is at `httpstatuses.github.io/<code>` such as
[`httpstatuses.github.io/418`][/418]. All standard codes are included, as
are some non-standard codes that have significant presence in the wild.

This site and the content therein is distributed under the MIT license.

## Contributing

This GitHub Pages site is built with Jekyll and Ruby.

All contributions are welcome! If you have an idea to improve the
website please submit a pull request or
[create an issue][https://github.com/DavidBiesack/httpstatuses/issues],
or provide your thoughts on open issues.

Each status code lives in a Markdown file at [docs](docs). The easiest
way to submit changes is via the GitHub editor. When contributing
changes to the status codes please be mindful of the following:

* If an RFC or external document is referenced, make the reference a
  link. When citing RFC, always add the RFC identifier. For example
  "Section 6.6" should become "RFC1234 Section 6.6"
* Markdown links should be used as [references instead of inline](https://daringfireball.net/projects/markdown/syntax#link)
* Source information on a status code from the most recent standards
  available (Status Code standards directory is available on
  [iana.org](http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml))
* The opening paragraph of a status code should describe the meaning,
  following paragraphs can describe implementation. Don't edit the
  meaning of the descriptions, but formatting and structural changes are
  OK
* [Don't double-space after a period](http://www.slate.com/articles/technology/technology/2011/01/space_invaders.html), and remove any examples of it
* Use `markdownlint` and ensure all Markdown is clean of lint warnings:
  `npm run lint`

## Notes

To install Jekyll on Mac, need to
[install a private version of `ruby`](https://stackoverflow.com/a/54873916), then install `bundler`, and
[`jekyll`](https://jekyllrb.com/docs/)

```bash
brew install ruby
export GEM_HOME="$HOME/.gem"
PATH=$GEM_HOME/bin:/usr/local/opt/ruby/bin:$PATH
gem install bundler jekyll
```

Once `bundler` and `jekyll` are running, you can start a local server to preview the site:

```bash
npm i
npm run start
```

## httpstatus.com

Previously, the project was known as `httpstatus.com`, but that site was
bought by a marketing firm and changed to promote their firm.
See the [original GitHub project, [rmaake1/httpstatuses][https://github.com/rmaake1/httpstatuses] where
the main HTTP status codes in this repo originated.
