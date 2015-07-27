<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div id="viewtcs" class="span12">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>SL</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Student Class</th>
                        <th>Action</th>
                    </tr>
                    <?php
					//var_dump($tcs);
					$slno=1; foreach($tcs as $tc) { ?>
                    <tr>
                        <td><?php echo $slno++; ?></td>
                        <td><?php echo $tc['studentuserid']; ?></td>
                        <td><?php echo $tc['firstname']; ?> <?php echo $tc['middlename']; ?> <?php echo $tc['lastname']; ?></td>
                        <td><?php echo $tc['classname']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="edittc/<?php echo $tc['tcid']; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deletetc(<?php echo $tc['tcid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>