<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewgallerys">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Gallery ID</th>
                        <th>Gallery Name</th>
                        <th>Action</th>
                    </tr>
                    <?php $sl=1; foreach($galleries as $gallery) { ?>
                    <tr>
                        <td><?php echo $sl++; ?></td>
                        <td><?php echo $gallery['galleryname']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="viewprofile/<?php echo $gallery['galleryid']; ?>">View Profile</i></a>
                            <a class="btn btn-success btn-mini" href="editgallery/<?php echo $gallery['galleryid']; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deletegallery(<?php echo $gallery['galleryid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>