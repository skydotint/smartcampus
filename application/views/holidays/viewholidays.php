<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div id="viewholidays" class="span12">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>holiday SL</th>
                        <th>holiday Name</th>
                        <th>Action</th>
                    </tr>
                    <?php $slno=1; foreach($holidays as $holiday) { ?>
                    <tr>
                        <td><?php echo $slno++; ?></td>
                        <td><?php echo $holiday['holidayname']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editholiday/<?php echo $holiday['holidayid']; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deleteholiday(<?php echo $holiday['holidayid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>