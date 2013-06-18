            <div class="status_list" id="<?php echo $this->codes['class']; ?>">
                <div class="head">
                    <div class="title"><?php echo $this->codes['class']; ?>xx <?php echo $this->codes['desc']; ?></div>
                    <div class="clear"></div>
                </div>
                <div class="statuses">
                    <?php foreach($this->codes as $code => $info) { if($code == 'desc' || $code == 'class') continue; ?>
                    <div class="status">
                        <div class="st"><a title="<?php echo $info["title"]; ?>" href="/<?php echo $code; ?>"><?php echo $code; ?></a></div>
                        <div class="description"><?php echo $info["summary"]; ?></div>
                    </div>
                    <?php } ?>
                </div>
                <div class="clear"></div>
            </div>
            <div id="return">
                <a href="http://httpstatus.es">&larr; return</a>
            </div>
        </div>
    </body>
</html>