<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div id="viewsubjects" class="span12">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Subject SL</th>
                        <th>Subject Name</th>
                        <th>Action</th>
                    </tr>
                    <?php $slno=1; foreach($subjects as $subject) { ?>
                    <tr>
                        <td><?php echo $slno++; ?></td>
                        <td><?php echo $subject['subjectname']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editsubject/<?php echo $subject['subjectid']; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deletesubject(<?php echo $subject['subjectid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>