<?php
    $Task = $_REQUEST['t'];

    $GLOBALS["db"] = mysqli_connect('localhost', 'Site', 'Site', 'Arinsy');
    mysqli_query($GLOBALS["db"], 'SET NAMES utf8');

    $query_text = " SELECT
                        *
                    FROM
                        tasks
                    WHERE
                        tasks.Id = $Task
                    LIMIT
                        1";
    $query = mysqli_query($GLOBALS["db"], $query_text);
    $Task = mysqli_fetch_assoc($query);

    $res = '<div class="TD_Name">'.$Task['Name'].'</div>';

    $res = $res.'<div class="TD_Desc">'.$Task['Description'].'<div>';

    echo $res;
?>