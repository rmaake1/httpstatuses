<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $this->code; ?> &mdash; httpstatus.es</title>
        <link rel="stylesheet" href="assets/css/style.min.css" type="text/css" />
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-29439846-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
        <meta name="description" content="HTTP Status code list / directory with wikipedia and ietf descriptions"/>
    </head>
    <body>
        <div id="wrapper">
            <div class="header">
                <?php echo $this->code; ?> / <span class="status_title"><?php echo $this->title; ?></span>
            </div>
            <div id="desc">
                <?php foreach($this->descriptions as $type => $description) { ?>
                <p id="<?php echo $type; ?>">
                    &#8220;<?php echo $description["body"]; ?>&#8220; &mdash; <a class="reference" href="<?php echo $description["link"]; ?>"><?php echo $type; ?></a>
                </p>
                <?php } ?>
            </div>
            <?php if($this->references) { ?>
            <div id="code_references">
                <div class="header">
                    <?php echo $this->code; ?> / <span class="status_title">code references</span>
                </div>
                <div class="info_list">
                    <?php foreach($this->references as $reference) { ?>
                    <div class="info_item">
                        <div class="title">
                            <?php echo $reference["title"]; ?>         
                        </div>
                        <div class="value">
                            &#8220;<?php echo $reference["value"]; ?>&#8221;
                        </div>
                        <div class="clear"></div>
                    </div>
                    <?php } ?>
                    <div class="clear"></div>
                </div>
            </div>
            <?php } ?>
            <div id="return">
                <a href="http://httpstatus.es">&larr; return</a>
            </div>  
        </div>
    </body>
</html>