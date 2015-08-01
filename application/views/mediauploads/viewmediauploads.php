<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewmediauploads">
                        <?php foreach($mediauploads as $mediaupload) { ?>
                        <div class="mediaupload">
						<a href="<?php echo base_url(); ?>uploads/mediauploads/<?php echo $mediaupload['photo']; ?>" target="_blank"><img src="<?php echo base_url(); ?>uploads/mediauploads/<?php echo $mediaupload['photo']; ?>" /></a>
						</div>
						<?php } ?>

        </div>
    </div>
</div>