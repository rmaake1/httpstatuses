            <div class="header multi">
                <?php echo $this->group; ?>xx / <span class="status_title"><?php echo $this->codes['group_name']; ?></span>
            </div>
            <?php foreach($this->codes as $key => $value) { if($key == 'group_name') continue; ?>
            <div class="header">
                <a href="/<?php echo $value['code']; ?>"><?php echo $value['code']; ?></a> / <span class="status_title"><?php echo $value['title']; ?></span>
            </div>
            <div class="desc">
                <?php foreach($value['descriptions'] as $type => $description) { ?>
                <p id="<?php echo $type; ?>">
                    &#8220;<?php echo nl2br($description["body"]); ?>&#8220; &mdash; <a class="reference" href="<?php echo $description["link"]; ?>"><?php echo $type; ?></a>
                </p>
                <?php } ?>
            </div>
            <?php } ?>
            <div id="return">
                <a href="http://httpstatus.es">&larr; return</a>
            </div>  
        </div>
    </body>
</html>