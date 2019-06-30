<?php
    include $_SERVER["DOCUMENT_ROOT"]."/Arinsy/core/header.php";
?>
<script>
    var user_name = "<?php echo $USER['login']; ?>";
</script>

<div class="workspace">
    <?php
        INCLUDE_COMPONENT( 
            "Arinsy:Menu-top",
            "",
            array(
                "CHILD_COMPONENTS" => array(
                    array(
                        "Component" => "Arinsy:Menu-left",
                        "Template" => "ForMainTop",
                        "Params" => array()
                    )
                )
            )
        );
    ?>
</div>


<?php
    include $PHP_DIRS['CORE']."footer.php";
?>