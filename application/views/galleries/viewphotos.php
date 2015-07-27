<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewphotos">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
				<?php //var_dump($photos); ?>
                    <tr>
                        <th>Photo ID</th>
                        <th>Gallery</th>
                        <th>Action</th>
                    </tr>
                    <?php $sl=1; foreach($photos as $photo) { ?>
                    <tr>
                        <td><?php echo $sl++; ?></td>
                        <td><?php  echo $photo->galleryname; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editphoto/<?php echo $photo->photoid; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deletephoto(<?php echo $photo->photoid; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>