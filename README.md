# [httpstatuses.com][5]

<!--
[![Build Status](https://img.shields.io/circleci/project/DavidBiesack/httpstatuses.svg)](https://circleci.com/gh/DavidBiesack/httpstatuses)
-->

[httpstatuses.github.io][5] is an easy to reference database of HTTP
Status Codes with their definitions and helpful code references, each
code is at `httpstatuses.github.io/<code>` such as
[`httpstatuses.github.io/418`][11]. All standard codes are included, as
are some non-standard codes that have significant presence in the wild.

## Contributing

This GitHub Pages site is built with Jekyll and Ruby bundler.

All contributions are welcome! If you have an idea to improve the
website please submit a pull request or [create an issue][1], or provide
your thoughts on [open issues][1].

Each status code lives in a Markdown file at [docs](docs). The easiest
way to submit changes is via the GitHub editor. When contributing
changes to the status codes please be mindful of the following:

* If an RFC or external document is referenced, make the reference a
  link. When citing RFC, always add the RFC identifier. For example
  "Section 6.6" should become "RFC1234 Section 6.6"
* Markdown links should be used as [references instead of inline][2]
* Source information on a status code from the most recent standards
  available (Status Code standards directory is available on
  [iana.org][3])
* The opening paragraph of a status code should describe the meaning,
  following paragraphs can describe implementation. Don't edit the
  meaning of the descriptions, but formatting and structural changes are
  OK
* [Don't double-space after a period][4], and remove any examples of it
* Use `markdownlint` and ensure all Markdown is clean of lint warnings:
  `npm run lint`

## Notes

To install Jekyll on Mac, need to
[install a private version of `ruby`][9], then install `bundler`, and
[`jekyll`][10]

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

Previously the project was known as `httpstatus.com`, but that sight was
bought by a marketing firm and changed to promote their firm.
See the[original GitHub project, [rmaake1/httpstatuses][6].

[1]: <https://github.com/DavidBiesack/httpstatuses/issues>
[2]: <https://daringfireball.net/projects/markdown/syntax#link>
[3]: <http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml>
[4]: <http://www.slate.com/articles/technology/technology/2011/01/space_invaders.html>
[5]: <https://httpstatuses.github.io>
[6]: <https://github.com/rmaake1/httpstatuses>
[8]: <http://localhost:4887>
[9]: <https://stackoverflow.com/a/54873916>
[10]: <https://jekyllrb.com/docs/>
[11]: <https://httpstatuses.github.io/418>
