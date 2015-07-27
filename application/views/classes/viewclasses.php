<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewclasses">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Class ID</th>
                        <th>Class Name</th>
                        <th>Action</th>
                    </tr>
                    <?php $id=1; foreach($classes as $class) { ?>
                    <tr>
                        <td><?php echo $id++; ?></td>
                        <td>
                            <?php echo $class['classname']; ?>
                        </td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editclass/<?php echo $class['classid']; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deleteclass(<?php echo $class['classid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>