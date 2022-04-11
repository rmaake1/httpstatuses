---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

title: HTTP Status Codes
layout: page
---

[httpstatuses.github.io](https://httpstatuses.github.io) is an easy to reference database of HTTP Status
Codes with their definitions and helpful code references all in one
place. Visit an individual status code via
`httpstatuses.github.io/&lt;code%gt;` such as
[`httpstatuses.github.io/418`](/418) or browse the list below.

<br>
{%- assign groupNum = 0 -%}

{% for page in site.pages %}{% if page.set > groupNum %}{% assign groupNum = page.set %}{% assign group = groupNum | append: "" %}<span style='color: {{ site.data.groups.colors[group] }}'>{{ group }}&times;&times;</span> - {{ site.data.groups.titles[group] }}<br>{% endif %}<a style='color: {{ site.data.groups.colors[group] }}; font-weight: bold' href="{{ page.url | prepend: site.baseurl }}">{{ page.code }}</a> <a href="{{ page.url | prepend: site.baseurl }}">{{ page.title }}</a><br>{% endfor %}
