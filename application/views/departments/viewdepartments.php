<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div id="viewdepartments" class="span12">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Department SL</th>
                        <th>Department Name</th>
                        <th>Action</th>
                    </tr>
                    <?php $slno=1; foreach($departments as $department) { ?>
                    <tr>
                        <td><?php echo $slno++; ?></td>
                        <td><?php echo $department['departmentname']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editdepartment/<?php echo $department['departmentid']; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deletedepartment(<?php echo $department['departmentid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>