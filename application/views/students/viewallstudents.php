<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewstudents">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Student Phone</th>
                        <th>Class</th>
                        <th>Gander</th>
                        <th>Joining Date</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <?php $sl=1; foreach($students as $student) { ?>
                    <tr>
                        <td><?php echo $sl++; ?></td>
                        <td>
                            <?php echo $student['firstname'] . " " ; ?>
                            <?php if($student['middlename']) { ?>
                                <?php echo " " . $student['middlename']; ?>
                            <?php } ?>
                            <?php echo $student['lastname']; ?>
                        </td>
                        <td><?php echo $student['sphone']; ?></td>
                        <td><?php echo $student['classname']; ?></td>
                        <td><?php echo $student['gender']; ?></td>
                        <td><?php echo $student['joindate']; ?></td>
                        <td><?php echo $student['email']; ?></td>
                        <td>
						<?php if($student['studguardianid']){ ?>
							<a class="btn btn-success btn-mini" href="editguardian/<?php echo $student['studguardianid']; ?>"><i class="icon icon-thumbs-up"></i></a>
						<?php }else{ ?>
                            <a class="btn btn-success btn-mini" href="addnewguardian/<?php echo $student['studentid']; ?>"><i class="icon icon-user"></i></a>
                        <?php } ?>    
                            <a class="btn btn-success btn-mini" href="editstudent/<?php echo $student['studentid']; ?>"><i class="icon icon-edit"></i></a>
							<a onclick="deletestudent(<?php echo $student['studentid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>