<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewsections">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Section ID</th>
                        <th>Section Name</th>
                        <th>Section Description</th>
                        <th>Action</th>
                    </tr>
                    <?php $sl=1; foreach($sections as $section) { ?>
                    <tr>
                        <td><?php echo $sl++; ?></td>
                        <td>
                            <?php echo $section['sectionname']; ?>
                        </td>
                        <td><?php echo $section['sectiondescription']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editsection/<?php echo $section['sectionid']; ?>"><i class="icon icon-edit"></i></a>
							<a onclick="deletesection(<?php echo $section['sectionid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>