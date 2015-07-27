<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewapplicants">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Applicant ID</th>
                        <th>Applicant Name</th>
                        <th>Applicant Phone</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Joining Date</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($applicants as $applicant) { ?>
                    <tr>
                        <td><?php echo $applicant['applicantid']; ?></td>
                        <td>
                            <?php echo $applicant['firstname'] . " " ; ?>
                            <?php if($applicant['middlename']) { ?>
                                <?php echo " " . $applicant['middlename']; ?>
                            <?php } ?>
                            <?php echo $applicant['lastname']; ?>
                        </td>
                        <td><?php echo $applicant['tphone']; ?></td>
                        <td><?php echo $applicant['gender']; ?></td>
                        <td><?php echo $applicant['email']; ?></td>
                        <td><?php echo $applicant['joindate']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="viewprofile/<?php echo $applicant['applicantid']; ?>">View Profile</i></a>
                            <a class="btn btn-success btn-mini" href="printapplicantprofile/<?php echo $applicant['applicantid']; ?>"><i class="icon icon-print"></i></a>
                            <a class="btn btn-success btn-mini" href="editapplicant/<?php echo $applicant['applicantid']; ?>"><i class="icon icon-edit"></i></a>
							<a onclick="deleteapplicant(<?php echo $applicant['applicantid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>