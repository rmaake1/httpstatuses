---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

title: HTTP Status Codes
layout: page
---

[{{ site.home }}]({{ site.home }}) is an easy to reference database of HTTP Status
Codes with their definitions and helpful code references all in one
place. Visit an individual status code via
`{{ site.home}}/<code>` such as
[`{{ site.home }}/418`](./418), or simply browse the list below.

<br>

{%- assign groupNum = 0 -%}
{% for page in site.pages %}{% if page.set > groupNum %}{% assign groupNum = page.set %}{% assign group = groupNum | append: "" %}<span style='color: {{ site.data.groups.colors[group] }}'>{{ group }}&times;&times;</span> - {{ site.data.groups.titles[group] }}<br>{% endif %}<a style='color: {{ site.data.groups.colors[group] }}; font-weight: bold' href="./{{ page.code }}">{{ page.code }}</a> <a href="./{{ page.code }}">{{ page.title }}</a><br>{% endfor %}
