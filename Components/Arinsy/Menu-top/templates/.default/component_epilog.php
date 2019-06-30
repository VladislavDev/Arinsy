<?php
    if(isset($arParams["CHILD_COMPONENTS"])){
        foreach($arParams["CHILD_COMPONENTS"] as $cComponent){
            INCLUDE_COMPONENT(
                $cComponent['Component'],
                $cComponent['Template'],
                $cComponent['Params']
            );
        }
    }
?>
