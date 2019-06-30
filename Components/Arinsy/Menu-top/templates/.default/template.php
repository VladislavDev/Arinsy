<div class="menu-top">
<script>
        function OpenCloseClick(){
            if($('.menu-left').css('display') == 'none'){
                $('.menu-left').css('display', 'block');
            }else{
                $('.menu-left').css('display', 'none');
            }
        }
    </script>
    <div class="open_left_button" onClick="OpenCloseClick();">
        <img 
            src="<?php echo $CONTENT_DIRS['MAIN_CONTENT'].'OpenMenu.png'; ?>"
            class="img_in_container"
        />
    </div>
</div>