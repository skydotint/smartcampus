<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewsyllabuss">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>SL</th>
                        <th>Syllabus Title</th>
						<th>Published On</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    <?php $id=1; foreach($syllabuss as $syllabus) { ?>
                    <tr>
                        <td><?php echo $id++; ?></td>
                        <td><?php echo $syllabus['syllabustitle']; ?></td>
                        <td><?php echo $syllabus['publishdate']; ?></td>
                        <td><?php echo $syllabus['syllabusdescription']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini textwhite" href="editsyllabus/<?php echo $syllabus['syllabusid']; ?>"><i class="icon icon-edit"></i></a>
							<a onclick="deletesyllabus(<?php echo $syllabus['syllabusid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>