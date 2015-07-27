<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Photo</div>

    </div>
	<?php //var_dump($photos); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editphotoForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Gallery Name</label>
                        <div class="controls">
							<input name="photoid" type="hidden" value="<?php echo $photos['photoid']; ?>" />
                        <select name="galleryid">
						<option value="<?php echo $photos['galleryid']; ?>"><?php echo $photos['galleryname']; ?></option>
						<?php foreach($galleries as $gallery) { ?>
						<option value="<?php echo $gallery['galleryid']; ?>"><?php echo $gallery['galleryname']; ?></option>
						<?php } ?>
						</select>
						</div>
                    </div>
					
					
					 <div class="control-group">
                        <label for="focusedInput" class="control-label">Photo</label>

                        <div class="controls">                            
                            <input type="file" name="photo" id="photo" />
                        </div>
                    </div>
					<hr/>	
                    <input id="editphotobtn" name="editphotobtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
