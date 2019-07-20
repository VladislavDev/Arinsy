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
        var TD_width = 0;
        var TD_left = 100;
        function TDOpenProcess(i, d){
            TD_width += 2;
            TD_left -= 2;
            $('.TaskDetail_div').css('left', TD_left+'%');
            $('.TaskDetail_div').css('width', TD_width+'%');
            if (TD_width < 40){
                if(TD_width == 10){
                    $('.TaskDetail_div').html(d);
                }
                setTimeout(TDOpenProcess, 6, i, d);
            }else{
                $('.TaskDetail_div').css('outline', '2px solid rgb(223, 145, 253)');
                openTD = true;
                TD_Id = i;
            }
        }
        function TDCloseProcess(){
            TD_width -= 2;
            TD_left += 2;
            $('.TaskDetail_div').css('left', TD_left+'%');
            $('.TaskDetail_div').css('width', TD_width+'%');
            if (TD_width > 0){
                if(TD_width == 10){
                    $('.TaskDetail_div').html('');
                }
                setTimeout(TDCloseProcess, 6);
            }else{
                $('.TaskDetail_div').css('display', 'none');
                openTD = false;
            }
        }
        function toOpenTD(i){
            $.ajax({
                url: "<?php echo $CONTENT_DIRS['AJAX'].'TaskDetail.php'; ?>",
                method: 'POST',
                data: {t: i},
                success: function(data){
                    $('.TaskDetail_div').css('display', 'block');
                    TDOpenProcess(i,data);
                }
            })
        }
        function TDNOpenProcess(i){
            TD_width += 2;
            TD_left -= 2;
            $('.TaskDetail_div').css('left', TD_left+'%');
            $('.TaskDetail_div').css('width', TD_width+'%');
            if (TD_width < 40){
                setTimeout(TDNOpenProcess, 6,i);
            }else{
                TD_Id = i;
            }
        }
        function TDReOpenProcess(i){
            TD_width -= 2;
            TD_left += 2;
            $('.TaskDetail_div').css('left', TD_left+'%');
            $('.TaskDetail_div').css('width', TD_width+'%');
            if (TD_width > 10){
                setTimeout(TDReOpenProcess, 6, i);
            }else{
                $.ajax({
                    url: "<?php echo $CONTENT_DIRS['AJAX'].'TaskDetail.php'; ?>",
                    method: 'POST',
                    data: {t: i},
                    success: function(data){
                        $('.TaskDetail_div').html(data);
                        TDNOpenProcess(i);
                    }
                })
            }
        }
        function toCloseTD(){
            $('.TaskDetail_div').css('outline', 'none');
            TDCloseProcess();
        }
        function openTaskDetail(i){
            if(openTD){
                if(i == TD_Id){
                    toCloseTD();
                }else{
                    TDReOpenProcess(i)
                }
            }else{
                toOpenTD(i);
            }
        }
    </script>
    <?
?>