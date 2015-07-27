<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div id="viewslides" class="span12">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Slide SL</th>
                        <th>Slide Title</th>
                        <th>Action</th>
                    </tr>
                    <?php $slno=1; foreach($slides as $slide) { ?>
                    <tr>
                        <td><?php echo $slno++; ?></td>
                        <td><?php echo $slide['slidetitle']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editslide/<?php echo $slide['slideid']; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deleteslide(<?php echo $slide['slideid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>