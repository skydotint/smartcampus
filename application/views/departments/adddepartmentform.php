<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Department</div>

    </div>
    <div class="block-content collapse in">
        <div class="span12" id="deptreload">
            <?php //echo form_open_multipart('adddepartmentajax', array('class'=>'form-horizontal form-groups-bordered validate', 'id' => 'addepartmentForm')); ?>
            <form class="form-horizontal form-groups-bordered validate" id="adddepartmentForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Department Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="departmentname" type="text"> 
                        </div>
                    </div>
                    <hr/>

                    <input id="adddepartmentbtn" name="adddepartmentbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
