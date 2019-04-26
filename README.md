# [httpstatuses.com][5]

[![Build Status](https://img.shields.io/circleci/project/citricsquid/httpstatuses.svg)](https://circleci.com/gh/citricsquid/httpstatuses)

[httpstatuses.com][5] is an easy to reference database of HTTP Status Codes with their definitions and helpful code references, each code is at `httpstatuses.com/[code]`. All standard codes are included, as are some non-standard codes that have significant presence in the wild.

## Contributing

To build you need nodejs, run `npm install` to pull in dependencies and then `node build`, a preview will be available at [localhost:4887][8].

All contributions are welcome! If you have an idea to improve the website please submit a pull request or [create an issue][1], or provide your thoughts on [open issues][1].

Each status code lives in a Markdown file at [contents/codes](contents/codes), the easiest way to submit changes is via the GitHub editor. When contributing changes to the status codes please be mindful of the following:

* Markdown links should be used as [references instead of inline][2]
* If an RFC or external document is referenced, make the reference a link
* Source information on a status code from the most recent standards available (Status Code standards directory is available on [iana.org][3])
* The opening paragraph of a status code should describe the meaning, following paragraphs can describe implementation
* Don't edit the meaning of descriptions, but formatting and structural changes are a-okay
* [Don't double-space after a period][4], and remove any examples of it
* If the description references a section in the current RFC, always add the RFC identifier. For example "Section 6.6" should become "RFC1234 Section 6.6"

## httpstatus.es

Previously the project was known as [httpstatus.es][6] but [as per this GitHub issue][7] we migrated to [httpstatuses.com][5] in November 2015 for SEO reasons. The httpstatus.es domain will remain available long term but use of httpstatuses.com is preferred, everything 301's to https://httpstatuses.com. The months following the migration have seen a significant uptake in search engine traffic, if you're running a project on a ccTLD not considered generic by Google and SEO matters it might be worth switching to a generic too.

[1]: <https://github.com/citricsquid/httpstatuses/issues>
[2]: <https://daringfireball.net/projects/markdown/syntax#link>
[3]: <http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml>
[4]: <http://www.slate.com/articles/technology/technology/2011/01/space_invaders.html>
[5]: <https://httpstatuses.com>
[6]: <https://httpstatus.es>
[7]: <https://github.com/citricsquid/httpstatuses/issues/29>
[8]: <http://localhost:4887>
