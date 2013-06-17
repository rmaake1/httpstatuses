        <div class="header">
            httpstatus.es
            <div class="share_buttons">
                <!--
                <div class="share_button" id="github">
                    <iframe src="http://ghbtns.com/github-btn.html?user=citricsquid&repo=httpstatus.es&type=watch" allowtransparency="true" frameborder="0" scrolling="0" width="72" height="20"></iframe>
                </div>
                -->
                <div class="share_button" id="twitter">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="citricsquid" data-url="http://httpstatus.es">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
                <div class="share_button" id="facebook">
                    <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhttpstatus.es&amp;send=false&amp;layout=button_count&amp;width=250&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px; text-align:right;" allowTransparency="true"></iframe>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="intro">
            <p>
                Database of HTTP status codes with their IETF + Wikipedia 
                descriptions and helpful code references.
                Maintained by 
                <a href="http://twitter.com/citricsquid">@citricsquid</a>.
                New codes and improvements can be commited via the 
                <a href="https://github.com/citricsquid/httpstatus.es">GitHub repository</a>.
            </p>
        </div>
        <div id="statuses">
            <?php foreach($this->class_list as $id => $class) { ?>
            <div class="status_list" id="<?php echo $id; ?>">
                <div class="head">
                    <a href="/<?php echo $id, 'xx'; ?>"><div class="title"><?php echo $id; ?>xx</a> <?php echo $class["class"]["title"]; ?></div>
                    <div class="clear"></div>
                </div>
                <div class="statuses">
                    <?php foreach($class["codes"] as $code => $info) { ?>
                    <div class="status">
                        <div class="st"><a title="<?php echo $info["title"]; ?>" href="/<?php echo $code; ?>"><?php echo $code; ?></a></div>
                        <div class="description"><?php echo $info["summary"]; ?></div>
                    </div>
                    <?php } ?>
                    <div class="clear"></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
