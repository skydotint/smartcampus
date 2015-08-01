<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Staff</div>

    </div>
    <div class="block-content collapse in">
        <div class="span12">
                <?php //echo form_open_multipart('addstuffajax', array('class'=>'form-horizontal form-groups-bordered validate', 'id' => 'adstuffForm')); ?>
            <form class="form-horizontal form-groups-bordered validate" id="addstaffForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">First Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="firstname" type="text">
                            <input class="input-xlarge focused" name="userid" type="hidden" value="<?php echo $this->ion_auth->logged_in(); ?>">
							<?php foreach ($users as $user) { ?>
						   <input class="input-xlarge focused" name="staffuserid" type="hidden" value="<?php echo $user['username'] + 1; ?>">
						   <input class="input-xlarge focused" name="id" type="hidden" value="<?php echo $user['id'] + 1; ?>">
							<?php } ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Middle Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="middlename" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Last Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="lastname" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Phone</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sphone" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Mailing Address</label>
                        <div class="controls">
                           <textarea name="mailingaddress" placeholdef="Enter address ..." style=" width: 270px;"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Gender</label>
                        <div class="controls">
                            <select name="gender">
                                
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Date of Birth</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="birthdate" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Email</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="email" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Join Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="joindate" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Enrollment Status</label>
                        <div class="controls">
                            <select name="enrollmentstatus">
                                <option value="1">Current Staff</option>
                                <option value="2">X Staff</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Student Photo</label>

                        <div class="controls">                            
                            <input type="file" name="photo" id="photo" />
                        </div>
                    </div>
                    <hr/>

                    <input id="addstaffbtn" name="addstuffbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
