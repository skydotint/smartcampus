<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Subject</div>

    </div>
	<?php //var_dump($downloads); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editdownloadForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Subject Name</label>
                        <div class="controls">
							<input name="downloadid" type="hidden" value="<?php echo $downloads['downloadid']; ?>" />
                            <input class="input-xlarge focused" name="downloadtitle" value="<?php echo $downloads['downloadtitle']; ?>" type="text"> 
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Download Description</label>
                        <div class="controls">
                           <textarea name="downloaddescription" style=" width: 270px;"><?php echo $downloads['downloaddescription']; ?></textarea>
                        </div>
                    </div>
					<div class="control-group">
                        <label for="focusedInput" class="control-label">Download Attachment</label>

                        <div class="controls">                            
                            <input type="file" name="attachment" id="photo" />
                        </div>
                    </div>
                    <hr/>

                    <input id="editdownloadbtn" name="editdownloadbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
