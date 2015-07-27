<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Applicant</div>

    </div>
	<?php //var_dump($applicants); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editapplicantForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">First Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="firstname" value="<?php echo $applicants['firstname']; ?>" type="text">
                            <input name="applicantid" value="<?php echo $applicants['applicantid']; ?>" type="hidden">
                            <input class="input-xlarge focused" name="userid" type="hidden" value="<?php echo $this->ion_auth->logged_in(); ?>">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Middle Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="middlename" value="<?php echo $applicants['middlename']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Last Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="lastname" value="<?php echo $applicants['lastname']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Phone</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="tphone" value="<?php echo $applicants['tphone']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Mailing Address</label>
                        <div class="controls">
                           <textarea name="mailingaddress" style=" width: 270px;"><?php echo $applicants['mailingaddress']; ?></textarea>
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
                            <input class="input-xlarge focused" name="birthdate" value="<?php echo $applicants['birthdate']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Email</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="email" value="<?php echo $applicants['email']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Join Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="joindate" value="<?php echo $applicants['joindate']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Enrollment Status</label>
                        <div class="controls">
                            <select name="enrollmentstatus">
                               <option value="1">Current Applicant</option>
                               <option value="2">X Applicant</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Applicant Photo</label>

                        <div class="controls">                            
                            <input type="file" value="<?php echo $applicants['photo']; ?>" name="photo" id="photo" />
                        </div>
                    </div>
                    <hr/>
                    <input id="editapplicantbtn" name="editapplicantbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
