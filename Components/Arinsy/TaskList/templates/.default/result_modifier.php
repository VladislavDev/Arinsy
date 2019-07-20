<?php
    global $Lang, $USER;
    include_once $workspace.'lang/'.$Lang.'.php';

    $userId =  $USER['id'];


    $query_text = " SELECT
                        tasks.Deadline,
                        tasks.Statement_Date,
                        users.`First Name`,
                        users.`Last Name`,
                        users.Id,
                        tasks.Creator,
                        tasks.Id AS T_ID,
                        tasks.Name AS T_Name
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
    <script>
        var openTD = false;
        var TD_Id = 0;
        function toOpenTD(i){
            $.ajax({
                url: "<?php echo $CONTENT_DIRS['AJAX'].'TaskDetail.php'; ?>",
                method: 'POST',
                data: {t: i},
                success: function(data){
                    $('.TaskDetail_div').html(data);
                    $('.TaskDetail_div').css('display', 'block');
                    openTD = true;
                    TD_Id = i;
                }
            })
        }
        function toCloseTD(){
            $('.TaskDetail_div').css('display', 'none');
            openTD = false;
        }
        function openTaskDetail(i){
            if(openTD){
                toCloseTD();
            }else{
                toOpenTD(i);
            }
            
        }
    </script>
    <?
?>