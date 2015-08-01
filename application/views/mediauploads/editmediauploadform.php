<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Photo</div>

    </div>
	<?php //var_dump($mediauploads); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editmediauploadForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Photo Title</label>
                        <div class="controls">
							<input name="mediauploadid" type="hidden" value="<?php echo $mediauploads['mediauploadid']; ?>" />
                            <input class="input-xlarge focused" name="mediauploadname" value="<?php echo $mediauploads['mediauploadname']; ?>" type="text"> 
                        </div>
                    </div>
					 <div class="control-group">
                        <label for="focusedInput" class="control-label">Photo Photo</label>

                        <div class="controls">                            
                            <input type="file" name="photo" id="photo" />
                        </div>
                    </div>
					<hr/>	
                    <input id="editmediauploadbtn" name="editmediauploadbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
