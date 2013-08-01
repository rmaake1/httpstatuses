[httpstatus.es](http://httpstatus.es) is an easy to use http status code reference 
site. An individual code can be accessed via httpstatus.es/{status_code}. 

Each individual code is stored in a file specific to the class it is a part of.
For example 404 is stored in 4.json, along with all other 4xx codes.

## json format

```json
{
    "class":{
        "title":"1xx Informational"
    },
    "codes":{
        "100":{
            "title":"Continue",
            "summary":"Client should continue with request",
            "descriptions":{
                "wiki":{
                    "body":"Wikipedia description",
                    "link":"http:\/\/en.wikipedia.org\/wiki\/List_of_HTTP_status_codes#100"
                },
                "ietf":{
                    "body":"IETF Description",
                    "link":"http:\/\/www.ietf.org\/rfc\/rfc2616.txt"
                }
            },
            "references":{
                "item":{
                    "title":"Reference Title",
                    "value":"Reference Value"
                },
                "item2":{
                    "title":"Reference Title",
                    "value":"Reference Value"
                }
            }
        }
    }
}
```

JSON should be formatted as above using four space tab and \r\n for new lines in 
descriptions. There is no validation on the output and the only processing is 
turning new lines into line breaks, if you wish to include HTML that's fine 
(preferably only links though and code tags).

# License

Copyright (C) 2012 - 2013 Samuel Ryan (citricsquid)

Permission is hereby granted, free of charge, to any person obtaining a copy of 
this software and associated documentation files (the "Software"), to deal in 
the Software without restriction, including without limitation the rights to use, 
copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the 
Software, and to permit persons to whom the Software is furnished to do so, 
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all 
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR 
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, 
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE 
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, 
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN 
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.