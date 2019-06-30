<?php
    $GLOBALS["db"] = mysqli_connect('localhost', 'Site', 'Site', 'Arinsy');
    mysqli_query($GLOBALS["db"], 'SET NAMES utf8');
?>