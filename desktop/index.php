<?php
    include $_SERVER["DOCUMENT_ROOT"]."/Arinsy/core/header.php";
?>
<script>
    var user_name = "<?php echo $USER['login']; ?>";
</script>

<div class="workspace">
    <?php
        INCLUDE_COMPONENT("Arinsy:Menu-top", "", array());
    ?>
</div>


<?php
    include $PHP_DIRS['CORE']."footer.php";
?>