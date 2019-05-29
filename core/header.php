<?php
    //prolog file including
    include_once $_SERVER["DOCUMENT_ROOT"]."/Arinsy/core/prolog.php";
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Arinsy</title>

        <meta charset="utf-8">
        <meta name="description" content="CRM for your business">
        <meta name="keywords" lang="en" content="CRM, business-process">

        <!-- including of main css files -->
        <?php
            //getting a list of files
            $arCSSFiles = scandir(MAIN_STYLES);
            //including each file from the list
			for ($i = 2; $i < count($arCSSFiles); $i++){
				echo '<link rel="stylesheet" href="css/'.$arCSSFiles[$i].'" type="text/css"/>';
            }
		?>

    </head>
    <body>
        <!-- the block caps of the website -->
        <div class="header">
            <div class="logo-container">
                <img
                    src="content/main/logo.png"
                    class="img_in_container"
                />
            </div>
        </div>