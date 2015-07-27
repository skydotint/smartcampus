<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Subject</div>

    </div>
	<?php //var_dump($subjects); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editsubjectForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Subject Name</label>
                        <div class="controls">
							<input name="subjectid" type="hidden" value="<?php echo $subjects['subjectid']; ?>" />
                            <input class="input-xlarge focused" name="subjectname" value="<?php echo $subjects['subjectname']; ?>" type="text"> 
                        </div>
                    </div>
                    <hr/>

                    <input id="editsubjectbtn" name="editsubjectbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
