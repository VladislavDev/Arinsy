<?php
    include $_SERVER["DOCUMENT_ROOT"]."/Arinsy/core/header.php";
?>

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
                        "Params" => array(
                            "Buttons" => array(
                                array(
                                    "Name" => "Desktop",
                                    "HREF" => $CONTENT_DIRS["SITE_NAME"].'Desktop'
                                ),
                                array(
                                    "Name" => "Tasks",
                                    "HREF" => "#",
                                    "Active" => "Y"
                                ),
                                array(
                                    "Name" => "Projects",
                                    "HREF" => $CONTENT_DIRS["SITE_NAME"].'Projects'
                                )
                            )
                        )
                    )
                )
            )
        );
        INCLUDE_COMPONENT(
            "Arinsy:TaskList",
            "",
            array()
        )
    ?>
</div>


<?php
    include $PHP_DIRS['CORE']."footer.php";
?>