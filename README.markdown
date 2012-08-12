[httpstatus.es](http://httpstatus.es) is an easy to use http status code reference 
site. An individual code can be accessed via httpstatus.es/{status_code}. 

Each individual code is stored in a file specific to the class it is a part of.
For example 404 is stored in 4.json, along with all other 4xx codes.

I have yet to decide on the criteria that a status code must meet to be included. 
I am unsure if including vendor specific status codes is sensible (eg: Twitter
and Facebook API have their own status codes) or if it's confusing. For now I
will accept any that have some form of notability, long term I would like to
have a toggle for whether to show "real" only, or to include "vendor specific".

If you have any feedback please supply it via the github issue system.

(note: I am not 100% happy with the current code store format ({class}.json) 
however I've been unable to formulate a better idea that allows for the class
information (summary) to be stored with the codes. I am open to suggestions, but
it must remain a flat file solution to allow new codes and changes to the codes
via git)

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
turning new lines into linebreaks, if you wish to include HTML that's fine 
(preferably only links though and code tags)

## to do
- clean up the HTML and CSS  
- Add some sort of "global reference" system, where a code reference can be 
added that applies to all status codes based on a property, eg: adding an http 
status cats (http://httpcats.herokuapp.com/) link to each code page
- configure httpstatuses.com to redirect
- Decide on whether or not to add a method to return a specific class of error
codes, eg: 4xx, 5xx. Not sure if httpstatus.es/{class} makes sense (eg:
httpstatus.es/5) or httpstatus.es/{class}xx (eg: httpstatus.es/5xx)
- Favicon (maybe someone else will donate one? :-))
- Some sort of templating, why have I got the (uniform) head in 3 separate views!
- Languages?

## notes

httpstatus.es is built with [klein.php](https://raw.github.com/chriso/klein.php)
and designed by myself. This is my first attempt at open sourcing anything that 
I have made.