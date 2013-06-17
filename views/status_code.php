            <div class="header">
                <?php echo $this->code; ?> / <span class="status_title"><?php echo $this->title; ?></span>
            </div>
            <div id="desc">
                <?php foreach($this->descriptions as $type => $description) { ?>
                <p id="<?php echo $type; ?>">
                    &#8220;<?php echo nl2br($description["body"]); ?>&#8220; &mdash; <a class="reference" href="<?php echo $description["link"]; ?>"><?php echo $type; ?></a>
                </p>
                <?php } ?>
            </div>
            <?php if(isset($this->references)) { ?>
            <div id="code_references">
                <div class="header">
                    <?php echo $this->code; ?> / <span class="status_title">code reference(s)</span>
                </div>
                <div class="info_list">
                    <?php foreach($this->references as $reference) { ?>
                    <div class="info_item">
                        <div class="title">
                            <?php echo $reference["title"]; ?>         
                        </div>
                        <div class="value">
                            <?php echo $reference["value"]; ?>
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