<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Student</div>
    </div>
	<?php //var_dump($departments); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="addstudentForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">First Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="firstname" type="text">
                            <input class="input-xlarge focused" name="userid" type="hidden" value="<?php echo $this->ion_auth->logged_in(); ?>">
							<?php foreach ($users as $user) { ?>
						   <input class="input-xlarge focused" name="studentuserid" type="hidden" value="<?php echo $user['username'] + 1; ?>">
						   <input class="input-xlarge focused" name="id" type="hidden" value="<?php $id=$user['id'] + 1; echo $id; ?>">
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
                        <label class="control-label" for="focusedInput">Class</label>
                        <div class="controls">
                            <select name="class">
                                <?php foreach($classes as $class) {
                                    echo '<option value="'.$class['classid'].'">';
                                        echo $class['classname'];
                                    echo '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Section</label>
                        <div class="controls">
                            <select name="section">
                                <?php foreach($sections as $section) {
                                    echo '<option value="'.$section['sectionid'].'">';
                                        echo $section['sectionname'];
                                    echo '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Study Group</label>
                        <div class="controls">
							  <select name="stdgroup">
							  <option value="" selected>Select One</option>
							  <option value="Science">Science</option>
							  <option value="Business Study">Business Study</option>
							  <option value="Humanistic">Humanistic</option>
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Class Roll</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="classroll" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Shift</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="shift" type="text">
                        </div>
                    </div>
				
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Department</label>
                        <div class="controls">
                            <select name="department">
                                <?php foreach($departments as $department) {
                                    echo '<option value="'.$department['departmentname'].'">';
                                        echo $department['departmentname'];
                                    echo '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Year</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="year" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Village</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="village" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Post Office</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="postoffice" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Upazila</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="upazila" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">District</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="district" type="text">
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
                           <textarea name="mailingaddress" placeholdef="Enter address ..."  style=" width: 270px;"></textarea>
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
                            <input class="input-xlarge focused datepicker" name="birthdate" type="text">
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
                            <input class="input-xlarge focused datepicker" name="joindate" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Enrollment Status</label>
                        <div class="controls">
                            <select name="enrollmentstatus">
                                <option value="1">Current Student</option>
                                <option value="2">X Student</option>
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

                    <input id="addstudentbtn" name="addstudentbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
