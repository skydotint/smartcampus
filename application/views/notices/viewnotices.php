<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewnotices">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>SL</th>
                        <th>Notice Title</th>
						<th>Published On</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    <?php $id=1; foreach($notices as $notice) { ?>
                    <tr>
                        <td><?php echo $id++; ?></td>
                        <td><?php echo $notice['noticetitle']; ?></td>
                        <td><?php echo $notice['publishdate']; ?></td>
                        <td><?php echo $notice['noticedescription']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini textwhite" href="editnotice/<?php echo $notice['noticeid']; ?>"><i class="icon icon-edit"></i></a>
							<a onclick="deletenotice(<?php echo $notice['noticeid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>