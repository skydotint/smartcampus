<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Student</div>

    </div>
	<?php //var_dump($students); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editstudentForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">First Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="firstname" value="<?php echo $students['firstname']; ?>" type="text">
                            <input name="studentid" value="<?php echo $students['studentid']; ?>" type="hidden">
                            <input class="input-xlarge focused" name="userid" type="hidden" value="<?php echo $this->ion_auth->logged_in(); ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Middle Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="middlename" value="<?php echo $students['middlename']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Last Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="lastname" value="<?php echo $students['lastname']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Phone</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sphone" value="<?php echo $students['sphone']; ?>" type="text">
                        </div>
                    </div>
					 <div class="control-group">
                        <label class="control-label" for="focusedInput">Class</label>
                        <div class="controls">
                            <select name="class">
								<option value="<?php echo $students['classid']; ?>"><?php echo $students['classname']; ?></option>
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
							<option value="<?php echo $students['sectionid']; ?>"><?php echo $students['sectionname']; ?></option>
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
							  <option value="<?php echo $students['stdgroup']; ?>" selected><?php echo $students['stdgroup']; ?></option>
							  <option value="Science">Science</option>
							  <option value="Business Study">Business Study</option>
							  <option value="Humanistic">Humanistic</option>
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Class Roll</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="classroll" value="<?php echo $students['classroll']; ?>" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Shift</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="shift" value="<?php echo $students['shift']; ?>" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Department</label>
                        <div class="controls">
                            <select name="department">
							<option value="<?php echo $students['department']; ?>" selected><?php echo $students['department']; ?></option>
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
                            <input class="input-xlarge focused" name="year" value="<?php echo $students['year']; ?>" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Village</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="village" value="<?php echo $students['village']; ?>" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Post Office</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="postoffice" value="<?php echo $students['postoffice']; ?>" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Upazila</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="upazila" value="<?php echo $students['upazila']; ?>" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">District</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="district" value="<?php echo $students['district']; ?>" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Permanent Address</label>
                        <div class="controls">
                           <textarea name="permanentaddress" placeholdef="Enter address ..."  style=" width: 270px;"><?php echo $students['permanentaddress']; ?></textarea>
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Present Address</label>
                        <div class="controls">
                           <textarea name="mailingaddress" style=" width: 270px;"><?php echo $students['mailingaddress']; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Gender</label>
                        <div class="controls">
                            <select name="gender">
								<option value="<?php echo $students['gender']; ?>"><?php echo $students['gender']; ?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Date of Birth</label>
                        <div class="controls">
                            <input class="input-xlarge focused datepicker" name="birthdate" value="<?php echo $students['birthdate']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Email</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="email" value="<?php echo $students['email']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Join Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused datepicker" name="joindate" value="<?php echo $students['joindate']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Enrollment Status</label>
                        <div class="controls">
                            <select name="enrollmentstatus">
							   <option value="<?php echo $students['enrollmentstatus']; ?>"><?php $st=$students['enrollmentstatus']; if($st==1){echo "Current Student";}else{echo "X Student";} ?></option>
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
                    <input id="editstudentbtn" name="editstudentbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
