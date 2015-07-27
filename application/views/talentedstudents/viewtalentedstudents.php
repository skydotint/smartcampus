<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewtalentedstudents">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Student Phone</th>
                        <th>Gander</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <?php $sl=1; foreach($talentedstudents as $talentedstudent) { ?>
                    <tr>
                        <td><?php echo $sl++; ?></td>
                        <td>
                            <?php echo $talentedstudent['firstname'] . " " ; ?>
                            <?php if($talentedstudent['middlename']) { ?>
                                <?php echo " " . $talentedstudent['middlename']; ?>
                            <?php } ?>
                            <?php echo $talentedstudent['lastname']; ?>
                        </td>
                        <td><?php echo $talentedstudent['sphone']; ?></td>
                        <td><?php echo $talentedstudent['gender']; ?></td>
                        <td><?php echo $talentedstudent['email']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="edittalentedstudent/<?php echo $talentedstudent['talentedstudentid']; ?>"><i class="icon icon-edit"></i></a>
							<a onclick="deletetalentedstudent(<?php echo $talentedstudent['talentedstudentid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>