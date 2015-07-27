<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewteachers">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Teacher ID</th>
                        <th>Teacher Name</th>
                        <th>Teacher Phone</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Joining Date</th>
                        <th>Action</th>
                    </tr>
                    <?php $sl=1; foreach($teachers as $teacher) { ?>
                    <tr>
                        <td><?php echo $sl++; ?></td>
                        <td>
                            <?php echo $teacher['firstname'] . " " ; ?>
                            <?php if($teacher['middlename']) { ?>
                                <?php echo " " . $teacher['middlename']; ?>
                            <?php } ?>
                            <?php echo $teacher['lastname']; ?>
                        </td>
                        <td><?php echo $teacher['tphone']; ?></td>
                        <td><?php echo $teacher['gender']; ?></td>
                        <td><?php echo $teacher['email']; ?></td>
                        <td><?php echo $teacher['joindate']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editteacher/<?php echo $teacher['teacherid']; ?>"><i class="icon icon-edit"></i></a>
							<a onclick="deleteteacher(<?php echo $teacher['teacherid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>