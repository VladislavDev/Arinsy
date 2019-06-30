<div class="menu-left">
    <?php
        foreach($arParams["Buttons"] as $button){
            if(isset($button["Active"]) && $button["Active"] === "Y"){
            ?>
                <a href="<?php echo $button["HREF"]; ?>">
                    <div class="LBP_button_Active">
                        <?php echo $button["Name"]; ?>
                    </div>
                </a>
            <?php
            }else{
            ?>
                <a href="<?php echo $button["HREF"]; ?>">
                    <div class="LBP_button">
                        <?php echo $button["Name"]; ?>
                    </div>
                </a>
            <?php
            }
        }
    ?>
</div>