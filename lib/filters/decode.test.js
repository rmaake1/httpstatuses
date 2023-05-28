const test = require('node:test');
const assert = require('node:assert');

const decode = require('./decode.js');

test('should decode entities', () => {
  const input = "That&apos;s my box";
  const want = "That's my box";

  const got = decode(input);
  assert.strictEqual(got, want);
});

