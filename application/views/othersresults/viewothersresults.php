<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewothersresults">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>SL</th>
                        <th>Result Title</th>
						<th>Published On</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    <?php $id=1; foreach($othersresults as $othersresult) { ?>
                    <tr>
                        <td><?php echo $id++; ?></td>
                        <td><?php echo $othersresult['othersresulttitle']; ?></td>
                        <td><?php echo $othersresult['publishdate']; ?></td>
                        <td><?php echo $othersresult['othersresultdescription']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini textwhite" href="editothersresult/<?php echo $othersresult['othersresultid']; ?>"><i class="icon icon-edit"></i></a>
							<a onclick="deleteothersresult(<?php echo $othersresult['othersresultid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>