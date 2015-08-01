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
                        <th>Class</th>
                        <th>Group</th>
                        <th>Action</th>
                    </tr>
                    <?php $sl=1; foreach($applicants as $applicant) { ?>
                    <tr>
                        <td><?php echo $sl++; ?></td>
                        <td><?php echo $applicant['namebangla']; ?></td>
                        <td><?php echo $applicant['mobileno']; ?></td>
                        <td><?php echo $applicant['gender']; ?></td>
                        <td><?php echo $applicant['class']; ?></td>
                        <td><?php echo $applicant['stdgroup']; ?></td>
                        <td>
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