<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Holiday</div>

    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <?php //echo form_open_multipart('addholidayajax', array('class'=>'form-horizontal form-groups-bordered validate', 'id' => 'adholidayForm')); ?>
            <form class="form-horizontal form-groups-bordered validate" id="addholidayForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Holiday Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="holidayname" type="text"> 
                        </div>
                    </div>
                    <hr/>

                    <input id="addholidaybtn" name="addholidaybtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
