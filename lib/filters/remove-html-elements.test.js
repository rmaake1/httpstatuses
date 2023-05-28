const test = require('node:test');
const assert = require('node:assert');

const removeHTMLElements = require('./remove-html-elements');

test('removes provided HTML element from string input, stripping extra spaces by default', () => {
  const input = "The<b>quick</b> brown fox jumped";
  const want = "The brown fox jumped";

  const got = removeHTMLElements({ str: input, tags: ["b"] });
  assert.strictEqual(got, want);
});

test('supports providing multiple HTML elements to remove', () => {
  const input = "The <b>quick</b> <i>brown</i> <div>fox</div> jumped";
  const want = "The <div>fox</div> jumped";

  const got = removeHTMLElements({ str: input, tags: ["b", "i"] });
  assert.strictEqual(got, want);
});

test('supports preserving spaces created by deletion', () => {
  const input = "The <b>quick</b> <i>brown</i> <div>fox</div> jumped";
  const want = "The   <div>fox</div> jumped";

  const got = removeHTMLElements({ str: input, tags: ["b", "i"], stripSpaces: false });
  assert.strictEqual(got, want);
});
