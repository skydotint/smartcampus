<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Class</div>

    </div>
	<?php //var_dump($classs); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editclassForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Class Name</label>
                        <div class="controls">
							<input name="classid" type="hidden" value="<?php echo $classes['classid']; ?>" />
                            <input class="input-xlarge focused" name="classname" value="<?php echo $classes['classname']; ?>" type="text"> 
                        </div>
                    </div>
                    <hr/>

                    <input id="editclassbtn" name="editclassbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
