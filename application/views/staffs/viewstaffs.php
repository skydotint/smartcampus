<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewstaffs">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Staff ID</th>
                        <th>Staff Name</th>
                        <th>Staff Phone</th>
                        <th>Designation</th>
                        <th>Qualification</th>
                        <th>Joining Date</th>
                        <th>Expert</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($staffs as $staff) { ?>
                    <tr>
                        <td><?php echo $staff['staffid']; ?></td>
                        <td>
                            <?php echo $staff['firstname'] . " " ; ?>
                            <?php if($staff['middlename']) { ?>
                                <?php echo " " . $staff['middlename']; ?>
                            <?php } ?>
                            <?php echo $staff['lastname']; ?>
                        </td>
                        <td><?php echo $staff['sphone']; ?></td>
                        <td><?php echo $staff['sphone']; ?></td>
                        <td><?php echo $staff['sphone']; ?></td>
                        <td><?php echo $staff['sphone']; ?></td>
                        <td><?php echo $staff['sphone']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editstaff/<?php echo $staff['staffid']; ?>"><i class="icon icon-edit"></i></a>
							<a onclick="deletestaff(<?php echo $staff['staffid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>