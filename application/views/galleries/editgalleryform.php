<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Gallery</div>

    </div>
	<?php //var_dump($galleries); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editgalleryForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Gallery Name</label>
                        <div class="controls">
							<input name="galleryid" type="hidden" value="<?php echo $galleries['galleryid']; ?>" />
                            <input class="input-xlarge focused" name="galleryname" value="<?php echo $galleries['galleryname']; ?>" type="text"> 
                        </div>
                    </div>
                    <hr/>

                    <input id="editgallerybtn" name="editgallerybtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
