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