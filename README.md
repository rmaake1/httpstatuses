# [httpstatus.es](http://httpstatus.es)

[httpstatus.es](http://httpstatus.es) is an easy to reference database of HTTP Status Codes
with their definitions and helpful code references.

## Contributing

All contributions are welcome! If you have an idea to improve the website please
submit a pull request or [create an issue][1], or provide your thoughts on any
[open issues][1].

Each status code lives in a Markdown file at [contents/codes](contents/codes),
the easiest way to submit changes is via the GitHub editor. When contributing
changes to the status codes please be mindful of the following:

* Soft line length of 80 for Markdown
* Markdown links should be used as [references instead of inline][2]
* If an RFC or external document is referenced, make the reference a link
* Source information on a status code from the most recent standards available
    (Status Code standards directory is available on [iana.org][3])
* The opening paragraph of a status code should describe the meaning, following
    paragraphs can describe implementation
* Don't edit the meaning of descriptions, but formatting and structural
    changes are a-okay
* [Don't double-space after a period][4], and remove any examples of it
* If the description references a section in the current RFC, always add the RFC
    identifier. For example "Section 6.6" should become "RFC1234 Section 6.6"

[1]: <https://github.com/citricsquid/httpstatus.es/issues>
[2]: <https://daringfireball.net/projects/markdown/syntax#link>
[3]: <http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml>
[4]: <http://www.slate.com/articles/technology/technology/2011/01/space_invaders.html>
