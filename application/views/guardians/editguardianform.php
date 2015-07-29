<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Student</div>

    </div>
	<?php //var_dump($guardians); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editguardianForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Full Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="fullname" value="<?php echo $guardians['fullname']; ?>" type="text">
                            <input name="userid" value="<?php echo $guardians['userid']; ?>" type="hidden">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Occupation</label>
                        <div class="controls">
                            <input class="input-xlarge focused" value="<?php echo $guardians['occupation']; ?>" name="occupation" type="text">
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Mobile No</label>
                        <div class="controls">
                            <input class="input-xlarge focused" value="<?php echo $guardians['mobile']; ?>" name="mobile" type="text">
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Gender</label>
                        <div class="controls">
                            <select name="gender">
                                <option value="<?php echo $guardians['gender']; ?>"><?php echo $guardians['gender']; ?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Email</label>
                        <div class="controls">
                            <input class="input-xlarge focused" value="<?php echo $guardians['email']; ?>" name="email" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Permanent Address</label>
                        <div class="controls">
                           <textarea name="permanentaddress" placeholdef="Enter address ..."  style=" width: 270px;"><?php echo $guardians['permanentaddress']; ?></textarea>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Present Address</label>
                        <div class="controls">
                           <textarea name="presentaddress" placeholdef="Enter address ..."  style=" width: 270px;"><?php echo $guardians['presentaddress']; ?></textarea>
                        </div>
                    </div>
				
                    
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Photo</label>

                        <div class="controls">                            
                            <input type="file" name="photo" id="photo" />
                        </div>
                    </div>
                    <hr/>
                    <input id="editguardianbtn" name="editguardianbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
