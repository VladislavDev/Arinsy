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
    ?>
    <div class="TD_Head">
        <div class="TD_Name"><?php echo $Task['Name']; ?>
            <span class="TD_Close">✎</span>
            <span class="TD_Close" onClick="toCloseTD();">✕</span>
        </div>
    </div>
    <div class="TD_Body">
    <?php
        if (isset($Task['Description']) && strlen($Task['Description']) > 0){
        ?>
            <div class="TDDesc_name">Description</div>
            <div class="TD_Desc"><?php echo $Task['Description']; ?></div>
        <?php
        }
        ?>
        <div class="TDDead_name">Deadline: </div>
        <?php
        if (isset($Task['Deadline']) && $Task['Deadline'] !== 0){
            ?>
            <div class="TD_Deadline">
                <?php echo date("d.m.Y", strtotime($Task['Deadline'])); ?>
            </div>
            <?php
        }else{
            ?>
            <div class="TD_Deadline">No</div>
            <?php
        }
        ?>
        <div class="TDDead_name">Priority: </div>
        <div class="TD_Deadline">
            <?php echo $Task['Priority'].'%'; ?>
        </div>
    </div>