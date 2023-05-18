const test = require('node:test');
const assert = require('node:assert');

const excerpt = require('./excerpt.js');

test('should strip whitespace', () => {
  const input = "The quick        brown fox jumped";
  const want = "The quick...";

  const got = excerpt(input, 12);
  assert.strictEqual(got, want);
});

test('should not truncate strings shorter than the provided limit', () => {
  const input = "The quick brown fox";

  const got = excerpt(input, 50);
  assert.strictEqual(got, input);
});

test('should use the first paragraph to build the excerpt', () => {
  const input = `The fast snake.
  
Jumped over the lazy dog.
The moon was bright.
`;
  const want = "The fast snake.";
  const got = excerpt(input, 140);
  assert.strictEqual(got, want);
});

test('should return empty string if called with empty string', () => {
  const input = '';
  const want = '';

  const got = excerpt(input, 10);
  assert.strictEqual(got, want);
});
