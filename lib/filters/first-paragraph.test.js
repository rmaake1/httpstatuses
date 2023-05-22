const test = require('node:test');
const assert = require('node:assert');

const firstParagraph = require('./first-paragraph.js');

test('returns content before first newline', () => {
  const input = `The quick
  
brown fox
jumped`;
  const want = "The quick";

  const got = firstParagraph(input, 12);
  assert.strictEqual(got, want);
});

test('should strip trailing whitespace on selected line', () => {
  const input = `The quick          
    
brown fox
jumped`;
  const want = "The quick";
  
  const got = firstParagraph(input, 12);
  assert.strictEqual(got, want);
});

test('strips leading whitespace on document', () => {
  const input = `
  
The quick          

brown fox
jumped`;
  const want = "The quick";

  const got = firstParagraph(input, 12);
  assert.strictEqual(got, want);
});
