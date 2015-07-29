<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Guardian</div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="addguardianForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Full Name</label>
                        <div class="controls">
						<?php //var_dump($user); ?>
						<?php //var_dump($students); ?>
						<?php //var_dump($users); ?>
                            <input class="input-xlarge focused" name="fullname" type="text">
                            <input class="input-xlarge focused" name="userid" type="hidden" value="<?php echo $this->ion_auth->logged_in(); ?>">
                            <input class="input-xlarge focused" name="studentuserid" type="hidden" value="<?php echo $students['studentid']; ?>">
                            <?php foreach($users as $u){ ?>
							<input class="input-xlarge focused" name="username" type="hidden" value="<?php $username=$u['username'] + 1; echo $username; ?>">
							<input class="input-xlarge focused" name="id" type="hidden" value="<?php $id=$u['id'] + 1; echo $id; ?>">
							<?php } ?>
							
						</div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Occupation</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="occupation" type="text">
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Mobile No</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mobile" type="text">
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
                        <label class="control-label" for="focusedInput">Email</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="email" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Permanent Address</label>
                        <div class="controls">
                           <textarea name="permanentaddress" placeholdef="Enter address ..."  style=" width: 270px;"></textarea>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Present Address</label>
                        <div class="controls">
                           <textarea name="presentaddress" placeholdef="Enter address ..."  style=" width: 270px;"></textarea>
                        </div>
                    </div>
				
                    
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Photo</label>

                        <div class="controls">                            
                            <input type="file" name="photo" id="photo" />
                        </div>
                    </div>
                    <hr/>

                    <input id="addguardianbtn" name="addguardianbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
