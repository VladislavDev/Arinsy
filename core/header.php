<?php
    //prolog file including
    include_once $_SERVER["DOCUMENT_ROOT"]."/Arinsy/core/prolog.php";
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Arinsy</title>

        <meta charset="utf-8">
        <meta name="description" content="<?php echo  $MESS['site_description']; ?>">
        <meta name="keywords" lang="en" content="<?php echo  $MESS['site_keywords']; ?>">

        <link rel="shortcut icon" href="<?php echo $CONTENT_DIRS['MAIN_CONTENT'].'favicon.ico';?>" type="image/x-icon">
        <!-- including of main css files -->
        <?php
            //getting a list of files
            $arCSSFiles = scandir($PHP_DIRS['MAIN_STYLES']);
            //including each file from the list
			for ($i = 2; $i < count($arCSSFiles); $i++){
				echo '<link rel="stylesheet" href="'.$CONTENT_DIRS['MAIN_STYLES'].$arCSSFiles[$i].'" type="text/css"/>';
            }
        ?>

        <?php
            //getting a list of files
            $arJSLibsFiles = scandir($PHP_DIRS['MAIN_JS'].'Libs');
            //including each file from the list
			for ($i = 2; $i < count($arJSLibsFiles); $i++){
				echo '<script type="text/javascript" src="'.$CONTENT_DIRS['MAIN_JS'].'Libs/'.$arJSLibsFiles[$i].'"></script>';
            }
		?>
    </head>

    
    <body>
        <!-- including of js libs -->
        
        <div class="wrapper">
        <!-- the block caps of the website -->
            <div class="header">
                <div class="logo-container">
                    <img
                        src="<?php echo $CONTENT_DIRS['MAIN_CONTENT']; ?>logo.png"
                        class="img_in_container"
                    />
                </div>
            </div>