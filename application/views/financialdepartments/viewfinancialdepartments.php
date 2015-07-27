<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div id="viewfinancialdepartments" class="span12">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Department SL</th>
                        <th>Department Name</th>
                        <th>Department Description</th>
                        <th>Action</th>
                    </tr>
                    <?php $slno=1; foreach($financialdepartments as $financialdepartment) { ?>
                    <tr>
                        <td><?php echo $slno++; ?></td>
                        <td><?php echo $financialdepartment['financialdepartmentname']; ?></td>
                        <td><?php echo $financialdepartment['financialdepartmentdescription']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editfinancialdepartment/<?php echo $financialdepartment['financialdepartmentid']; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deletefinancialdepartment(<?php echo $financialdepartment['financialdepartmentid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>