<?php
    global $Lang, $USER;
    include_once $workspace.'lang/'.$Lang.'.php';

    $userId =  $USER['id'];


    $query_text = " SELECT
                        *
                    FROM
                        tasks
                    INNER JOIN
                        users
                    WHERE
                            tasks.Creator = $userId
                        AND
                            users.Id = tasks.Creator";
    $query = mysqli_query($GLOBALS["db"], $query_text);
    $userTasks = array();
    for ($i = 0; $i < mysqli_num_rows($query); $i++){
        $userTasks[] = mysqli_fetch_assoc($query);
    }

    foreach ($userTasks as $key => $Task){
        $userTasks[$key]['Creator'] = substr($Task['First Name'], 0, 1).". ".$Task['Last Name'];
        $userTasks[$key]['Deadline'] = date("d.m.Y", strtotime($Task['Deadline']));
        $userTasks[$key]['Statement'] = date("d.m.Y", strtotime($Task['Statement_Date']));
    }
?>