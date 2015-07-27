<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Student</div>

    </div>
	<?php //var_dump($talentedstudents); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="edittalentedstudentForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">First Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="firstname" value="<?php echo $talentedstudents['firstname']; ?>" type="text">
                            <input name="talentedstudentid" value="<?php echo $talentedstudents['talentedstudentid']; ?>" type="hidden">
                            <input class="input-xlarge focused" name="userid" type="hidden" value="<?php echo $this->ion_auth->logged_in(); ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Middle Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="middlename" value="<?php echo $talentedstudents['middlename']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Last Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="lastname" value="<?php echo $talentedstudents['lastname']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Phone</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sphone" value="<?php echo $talentedstudents['sphone']; ?>" type="text">
                        </div>
                    </div>
					 
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Study Group</label>
                        <div class="controls">
							  <select name="stdgroup">
							  <option value="<?php echo $talentedstudents['stdgroup']; ?>" selected><?php echo $talentedstudents['stdgroup']; ?></option>
							  <option value="Science">Science</option>
							  <option value="Business Study">Business Study</option>
							  <option value="Humanistic">Humanistic</option>
                            </select>
                        </div>
                    </div>
					
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Shift</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="shift" value="<?php echo $talentedstudents['shift']; ?>" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Department</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="department" value="<?php echo $talentedstudents['department']; ?>" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Year</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="year" value="<?php echo $talentedstudents['year']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Permanent Address</label>
                        <div class="controls">
                           <textarea name="permanentaddress" placeholdef="Enter address ..."  style=" width: 270px;"><?php echo $talentedstudents['permanentaddress']; ?></textarea>
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Present Address</label>
                        <div class="controls">
                           <textarea name="mailingaddress" style=" width: 270px;"><?php echo $talentedstudents['mailingaddress']; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Gender</label>
                        <div class="controls">
                            <select name="gender">
								<option value="<?php echo $talentedstudents['gender']; ?>"><?php echo $talentedstudents['gender']; ?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Email</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="email" value="<?php echo $talentedstudents['email']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Title</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="title" value="<?php echo $talentedstudents['title']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="span12" id="content">
						<div class="row-fluid">
							<!-- block -->
							<div class="block">
								<div class="navbar navbar-inner block-header">
									<div class="muted pull-left">Description</div>
								</div>
								<div class="block-content collapse in">
											<textarea name="description" id="bootstrap-editor" placeholder="Enter text ..." style="width:98%;height:200px;"><?php echo $talentedstudents['description']; ?></textarea>
								</div>
							</div>
							<!-- /block -->
						</div>
		            </div>
    
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Student Photo</label>

                        <div class="controls">                            
                            <input type="file" name="photo" id="photo" />
                        </div>
                    </div>
                    <hr/>
                    <input id="edittalentedstudentbtn" name="edittalentedstudentbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
