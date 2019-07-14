<?php
    global $Lang, $USER;
    include_once $workspace.'lang/'.$Lang.'.php';

    $userId =  $USER['id'];


    $query_text = " SELECT
                        *
                    FROM
                        tasks
                    WHERE
                        tasks.Creator = $userId";
    $query = mysqli_query($GLOBALS["db"], $query_text);
    $userTasks = array();
    for ($i = 0; $i < mysqli_num_rows($query); $i++){
        $userTasks[] = mysqli_fetch_assoc($query);
    }

    
?>