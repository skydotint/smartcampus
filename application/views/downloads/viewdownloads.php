<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div id="viewdownloads" class="span12">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Download SL</th>
                        <th>Download Name</th>
                        <th>Action</th>
                    </tr>
                    <?php $slno=1; foreach($downloads as $download) { ?>
                    <tr>
                        <td><?php echo $slno++; ?></td>
                        <td><?php echo $download['downloadtitle']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editdownload/<?php echo $download['downloadid']; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deletedownload(<?php echo $download['downloadid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>