<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Tc</div>

    </div>
	<?php //var_dump($tcs); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="edittcForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Tc Name</label>
                        <div class="controls">
							<input name="tcid" type="hidden" value="<?php echo $tcs['tcid']; ?>" />
							<select name="tcname">
								<option value="<?php echo $tcs['tcname']; ?>">
								<?php $tc=$tcs['tcname']; if($tc==1){echo "ছাড়পত্র";}elseif($tc==2){echo "প্রশংসা পত্র";}elseif($tc==3){echo "প্রত্যয়নপত্র";}else{echo "টটলিস্ট";} ?>
								</option>
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
                            <input class="input-xlarge focused" name="studentuserid" value="<?php echo $tcs['studentuserid']; ?>" type="text"> 
                        </div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="focusedInput">Status</label>
							<div class="controls">
								<select name="isActive">
									<option value="0">Not Done</option>
									<option value="1">Done</option>
								</select>
							</div>
						</div>
                    <hr/>

                    <input id="edittcbtn" name="edittcbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
