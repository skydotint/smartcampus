<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Department</div>

    </div>
	<?php //var_dump($departments); ?>
    <div class="block-content collapse in">
        <div class="span12" id="deptreload">
            <form class="form-horizontal form-groups-bordered validate" id="editdepartmentForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Department Name</label>
                        <div class="controls">
							<input name="departmentid" type="hidden" value="<?php echo $departments['departmentid']; ?>" />
                            <input class="input-xlarge focused" name="departmentname" value="<?php echo $departments['departmentname']; ?>" type="text"> 
                        </div>
                    </div>
                    <hr/>

                    <input id="editdepartmentbtn" name="editdepartmentbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
