<div class="TaskList">
    <div class="TaskListName">
        <?php echo $MESS['TASKLIST_NAME'];?>
    </div>

    <div class="Tasks">
        <table class="TaskTable">
            <tr class="TT_Headers">
                <th class="TT_Header_th"><?php echo $MESS['TASKLIST_HEADER_NAME']; ?>           </th>
                <th class="TT_Header_th"><?php echo $MESS['TASKLIST_HEADER_DEADLINE']; ?>       </th>
                <th class="TT_Header_th"><?php echo $MESS['TASKLIST_HEADER_Creator']; ?>        </th>
                <th class="TT_Header_th"><?php echo $MESS['TASKLIST_HEADER_StatementDate']; ?>  </th>
            </tr>
            <?php
                foreach($userTasks as $Task){
                    ?>
                    <tr>
                        <td
                            onClick="openTaskDetail(<?php echo $Task['T_ID']; ?>);"
                            class="openTaskDetail"
                        >
                            <?php echo $Task['T_Name']; ?>
                        </td>
                        <td><?php echo $Task['Deadline']; ?>                                        </td>
                        <td><?php echo $Task['Creator']; ?>                                         </td>
                        <td><?php echo $Task['Statement']; ?>                                       </td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</div>

<div class="TaskDetail_div">
    <div class="TD_Name">
        777
    </div>
</div>