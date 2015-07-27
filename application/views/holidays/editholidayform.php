<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Holiday</div>

    </div>
	<?php //var_dump($holidays); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editholidayForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Holiday Name</label>
                        <div class="controls">
							<input name="holidayid" type="hidden" value="<?php echo $holidays['holidayid']; ?>" />
                            <input class="input-xlarge focused" name="holidayname" value="<?php echo $holidays['holidayname']; ?>" type="text"> 
                        </div>
                    </div>
                    <hr/>

                    <input id="editholidaybtn" name="editholidaybtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
