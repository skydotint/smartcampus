<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Department</div>

    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <?php //echo form_open_multipart('addfinancialdepartmentajax', array('class'=>'form-horizontal form-groups-bordered validate', 'id' => 'adfinancialdepartmentForm')); ?>
            <form class="form-horizontal form-groups-bordered validate" id="addfinancialdepartmentForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="financialdepartmentname" type="text"> 
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Description</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="financialdepartmentdescription" type="text"> 
                        </div>
                    </div>
                    <hr/>

                    <input id="addfinancialdepartmentbtn" name="addfinancialdepartmentbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
