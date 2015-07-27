<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Tc</div>

    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <?php //echo form_open_multipart('addtcajax', array('class'=>'form-horizontal form-groups-bordered validate', 'id' => 'adtcForm')); ?>
            <form class="form-horizontal form-groups-bordered validate" id="addtcForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Apply For</label>
                        <div class="controls">
                            <select name="tcname">
								<option value="1">ছাড়পত্র</option>
								<option value="2">প্রশংসা পত্র</option>
								<option value="3">প্রত্যয়নপত্র</option>
								<option value="4">টটলিস্ট</option>
							</select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Student User ID</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="studentuserid" type="text"> 
                        </div>
					</div>
						
                    <hr/>

                    <input id="addtcbtn" name="addtcbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
