<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewacademiccouncillors">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Mobile No</th>
                        <th>Gander</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <?php $sl=1; foreach($academiccouncillors as $academiccouncillor) { ?>
                    <tr>
                        <td><?php echo $sl++; ?></td>
                        <td><?php echo $academiccouncillor['fullname']; ?></td>
                        <td><?php echo $academiccouncillor['sphone']; ?></td>
                        <td><?php echo $academiccouncillor['gender']; ?></td>
                        <td><?php echo $academiccouncillor['email']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editacademiccouncillor/<?php echo $academiccouncillor['academiccouncillorid']; ?>"><i class="icon icon-edit"></i></a>
							<a onclick="deleteacademiccouncillor(<?php echo $academiccouncillor['academiccouncillorid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>