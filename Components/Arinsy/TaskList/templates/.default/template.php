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
                        <th><?php echo $Task['Name']; ?>                                            </th>
                        <th><?php echo $Task['Deadline']; ?>                                        </th>
                        <th><?php echo $Task['Creator']; ?>                                         </th>
                        <th><?php echo $Task['Statement']; ?>                                       </th>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</div>