<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Section</div>

    </div>
	<?php //var_dump($sections); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editsectionForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Section Name</label>
                        <div class="controls">
							<input name="sectionid" type="hidden" value="<?php echo $sections['sectionid']; ?>" />
                            <input class="input-xlarge focused" name="sectionname" value="<?php echo $sections['sectionname']; ?>" type="text"> 
                        </div>
                    </div>
					
					 <div class="control-group">
                        <label class="control-label" for="focusedInput">Section Description</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sectiondescription" value="<?php echo $sections['sectiondescription']; ?>" type="text">
                        </div>
                    </div>
                    <hr/>

                    <input id="editsectionbtn" name="editsectionbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
