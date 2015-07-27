<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Financial Department</div>

    </div>
	<?php //var_dump($financialdepartments); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editfinancialdepartmentForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Name</label>
                        <div class="controls">
							<input name="financialdepartmentid" type="hidden" value="<?php echo $financialdepartments['financialdepartmentid']; ?>" />
                            <input class="input-xlarge focused" name="financialdepartmentname" value="<?php echo $financialdepartments['financialdepartmentname']; ?>" type="text"> 
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Description</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="financialdepartmentdescription" value="<?php echo $financialdepartments['financialdepartmentdescription']; ?>" type="text"> 
                        </div>
                    </div>
                    <hr/>

                    <input id="editfinancialdepartmentbtn" name="editfinancialdepartmentbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
