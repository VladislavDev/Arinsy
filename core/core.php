<?php
    //The core of the site. Contains general functions for working with the site.

    //The including of main project settings
    include_once $_SERVER["DOCUMENT_ROOT"]."/Arinsy/core/settings.php";

    include_once $PHP_DIRS['CORE'].'DBConnection.php';

    //The including of main project langs
    $MESS = array();
    include_once $PHP_DIRS['MAIN_LANG'].$Lang.'.php';

    $USER = array();
    include_once $PHP_DIRS['CORE'].'Auth.php';
    
    //The including component function
    function INCLUDE_COMPONENT($nameComponent, $template, $arParams){
        global $PHP_DIRS, $CONTENT_DIRS;
        list($org, $comp) = explode(":", $nameComponent, 2);
        
        if(!(isset($template) && strlen($template) > 0)){
            $template = ".default";
        }

        $workspace = $PHP_DIRS['COMPONENTS'].$org.'/'.$comp.'/templates/'.$template.'/';

        if (file_exists($workspace.'result_modifier.php')){
            include $workspace.'result_modifier.php';
        }
        include $workspace.'template.php';
        if (file_exists($workspace.'component_epilog.php')){
            include $workspace.'component_epilog.php';
        }

        if (is_dir($workspace.'css')){
            $arCSSFiles = scandir($workspace.'css');
            $css_workspace = $CONTENT_DIRS['COMPONENTS'].$org.'/'.$comp.'/templates/'.$template.'/css/';
            for ($i = 2; $i < count($arCSSFiles); $i++){
                echo '<link rel="stylesheet" href="'.$css_workspace.$arCSSFiles[$i].'" type="text/css"/>';
            }
        }
    }

    //The pagetitle rename function
    function ADD_TITLE($newTitle){
        ?>
        <script>
            document.title = '<?php echo $newTitle; ?>';
        </script>
        <?php
    }
?>