<?php
    //File of project settings


    //                           *** DEFAULT SETTINGS ***
    $DEFAULT['LANG']            = 'EN';


    //                             *** Folders PHP ***
    $PHP_DIRS = array();

    $PHP_DIRS['SITE_NAME']      = $_SERVER['DOCUMENT_ROOT'].'/Arinsy/';
    $PHP_DIRS['MAIN_STYLES']    = $PHP_DIRS['SITE_NAME'].'css/';
    $PHP_DIRS['MAIN_JS']        = $PHP_DIRS['SITE_NAME'].'js/';
    $PHP_DIRS['CONTENT_DIR']    = $PHP_DIRS['SITE_NAME'].'content/';
    $PHP_DIRS['MAIN_CONTENT']   = $PHP_DIRS['CONTENT_DIR'].'main/';
    $PHP_DIRS['MAIN_LANG']      = $PHP_DIRS['SITE_NAME'].'Lang/';
    $PHP_DIRS['CORE']           = $PHP_DIRS['SITE_NAME'].'Core/';
    $PHP_DIRS['COMPONENTS']     = $PHP_DIRS['SITE_NAME'].'Components/';
  

    //                            *** Folders Content ***
    $CONTENT_DIRS = array();

    $CONTENT_DIRS['SITE_NAME']      = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/Arinsy/';
    $CONTENT_DIRS['MAIN_STYLES']    = $CONTENT_DIRS['SITE_NAME'].'css/';
    $CONTENT_DIRS['CONTENT_DIR']    = $CONTENT_DIRS['SITE_NAME'].'content/';
    $CONTENT_DIRS['MAIN_CONTENT']   = $CONTENT_DIRS['CONTENT_DIR'].'main/';
    $CONTENT_DIRS['COMPONENTS']     = $CONTENT_DIRS['SITE_NAME'].'Components/';

    //                              *** Functions ****
    function Arinsy_cript($str){
        return md5($str);
    }
    $Lang = 'EN';
?>