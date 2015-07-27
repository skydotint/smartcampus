<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Slide</div>

    </div>
	<?php //var_dump($slides); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editslideForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Slide Name</label>
                        <div class="controls">
							<input name="slideid" type="hidden" value="<?php echo $slides['slideid']; ?>" />
                            <input class="input-xlarge focused" name="slidetitle" value="<?php echo $slides['slidetitle']; ?>" type="text"> 
                        </div>
                    </div>

					<div class="control-group">
                        <label for="focusedInput" class="control-label">Slide Image</label>

                        <div class="controls">                            
                            <input type="file" name="attachment" id="photo" />
                        </div>
                    </div>
                    <hr/>

                    <input id="editslidebtn" name="editslidebtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
