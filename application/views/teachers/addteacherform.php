<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Teacher</div>
<?php //var_dump($users); ?>
    </div>
    <div class="block-content collapse in">
     <form class="form-horizontal form-groups-bordered validate" id="addteacherForm" action="javascript:void(0);" enctype="multipart/form-data">       
	  <div class="teacherinfoleft">
	  <h3>Personal Information</h3>
               <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">First Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="firstname" type="text">
                            <input class="input-xlarge focused" name="userid" type="hidden" value="<?php echo $this->ion_auth->logged_in(); ?>">
							<?php foreach ($users as $user) { ?>
						   <input class="input-xlarge focused" name="teacheruserid" type="hidden" value="<?php echo $user['username'] + 1; ?>">
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
                        <label class="control-label" for="focusedInput">Father's Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="fathername" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Mother's Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mothername" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Designation</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="designation" type="text">
                        </div>
                    </div>
					
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">National ID No</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="nationalid" type="text">
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Mobile No</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="tphone" type="text">
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
                        <label class="control-label" for="focusedInput">Religion</label>
                        <div class="controls">
                            <select name="religion">
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Christian">Christian</option>
                                <option value="Buddhists">Buddhists</option>
                            </select>
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
                        <label class="control-label" for="focusedInput">Date Attended</label>
                        <div class="controls">
                            <select name="dateattended">
                                <option value="Present">Present</option>
                               <?php
								$firstYear = date('Y');
								for($i=$firstYear;$i>1950;$i--)
								{
									echo '<option value='.$i.'>'.$i.'</option>';
								}
							  ?>
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Teacher's Index/MPO Id No.(if any)</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mpoid" type="text">
                        </div>
                    </div>
					
		
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Enrollment Status</label>
                        <div class="controls">
                            <select name="enrollmentstatus">
                                <option value="1">Current Teacher</option>
                                <option value="2">X Teacher</option>
                                <option value="3">X Head Teacher</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Teacher Photo</label>

                        <div class="controls">                            
                            <input type="file" name="photo" id="photo" />
                        </div>
                    </div>
                    <h3>Teaching Information(For examiner appointment)</h3>
					
					 <div class="control-group">
                        <label class="control-label" for="focusedInput">JSC Subject Teaches</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="jscsubjectteacher" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">JSC Teaching Start Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="jscteachingdate" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">SSC Subject Teaches</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sscsubjectteacher" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">SSC Teaching Start Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sscteachingdate" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Subject Teaches</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="hscsubjectteacher" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Teaching Start Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="hscteachingdate" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">JSC want to be</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="jscwanttobe" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">SSC want to be</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sscwanttobe" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC want to be</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="hscwanttobe" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">JSC Child/close Relative Appeared</label>
                        <div class="controls">
							  <select name="jscrelative">
							  <option value="No">No</option>
							  <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">SSC Child/close Relative Appeared</label>
                        <div class="controls">
							  <select name="sscrelative">
							  <option value="No">No</option>
							  <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Child/close Relative Appeared</label>
                        <div class="controls">
							  <select name="hscrelative">
							  <option value="No">No</option>
							  <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <input id="addteacherbtn" name="addteacherbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
        </div>
		
		<div class="teacherinforight">
                   <h3>Academic Information</h3>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">SSC Examination Board</label>
                        <div class="controls">
							  <select name="sscboard">
							  <option value="" selected>Select One</option>
							  <option value="barisal">Barisal</option>
							  <option value="chittagong">Chittagong</option>
							  <option value="comilla">Comilla</option>
							  <option value="dhaka">Dhaka</option>
							  <option value="dinajpur">Dinajpur</option>
							  <option value="jessore">Jessore</option>
							  <option value="rajshahi">Rajshahi</option>
							  <option value="sylhet">Sylhet</option>
							  <option value="madrasah">Madrasah</option>
							  <option value="tec">Technical</option>
							  <option value="dibs">DIBS(Dhaka)</option>
                                
                            </select>
                        </div>
                    </div>

					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">SSC Examination Group</label>
                        <div class="controls">
							  <select name="sscgroup">
							  <option value="" selected>Select One</option>
							  <option value="Science">Science</option>
							  <option value="Business Study">Business Study</option>
							  <option value="Humanistic">Humanistic</option>
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">SSC Result</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sscresult" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">SSC Passing Year</label>
                        <div class="controls">
							  <select name="sscyear">
							  <option value="" selected>Select One</option>
							  <?php
								$firstYear = date('Y');
								for($i=$firstYear;$i>1950;$i--)
								{
									echo '<option value='.$i.'>'.$i.'</option>';
								}
							  ?>
                                
                            </select>
                        </div>
                    </div>

					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Examination Board</label>
                        <div class="controls">
							  <select name="hscboard">
							  <option value="" selected>Select One</option>
							  <option value="barisal">Barisal</option>
							  <option value="chittagong">Chittagong</option>
							  <option value="comilla">Comilla</option>
							  <option value="dhaka">Dhaka</option>
							  <option value="dinajpur">Dinajpur</option>
							  <option value="jessore">Jessore</option>
							  <option value="rajshahi">Rajshahi</option>
							  <option value="sylhet">Sylhet</option>
							  <option value="madrasah">Madrasah</option>
							  <option value="tec">Technical</option>
							  <option value="dibs">DIBS(Dhaka)</option>
                                
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Examination Group</label>
                        <div class="controls">
							  <select name="hscgroup">
							  <option value="" selected>Select One</option>
							  <option value="Science">Science</option>
							  <option value="Business Study">Business Study</option>
							  <option value="Humanistic">Humanistic</option>
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Result</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="hscresult" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Passing Year</label>
                        <div class="controls">
							  <select name="hscyear">
							  <option value="" selected>Select One</option>
							  <?php
								$firstYear = date('Y');
								for($i=$firstYear;$i>1950;$i--)
								{
									echo '<option value='.$i.'>'.$i.'</option>';
								}
							  ?>
                                
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Graduation Institute</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="graduationinstitute" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Graduation Subject</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="graduationsubject" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Graduation Result</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="graduationresult" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Graduation Passing Year</label>
                        <div class="controls">
							  <select name="graduationyear">
							  <option value="" selected>Select One</option>
							  <?php
								$firstYear = date('Y');
								for($i=$firstYear;$i>1950;$i--)
								{
									echo '<option value='.$i.'>'.$i.'</option>';
								}
							  ?>
                                
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Masters Institute</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mastersinstitute" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Masters Subject</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="masterssubject" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Masters Result</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mastersresult" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Masters Passing Year</label>
                        <div class="controls">
							  <select name="mastersyear">
							  <option value="" selected>Select One</option>
							  <?php
								$firstYear = date('Y');
								for($i=$firstYear;$i>1950;$i--)
								{
									echo '<option value='.$i.'>'.$i.'</option>';
								}
							  ?>
                                
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">B.ed Result</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="bedresult" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">B.ed Passing Year</label>
                        <div class="controls">
							  <select name="bedyear">
							  <option value="" selected>Select One</option>
							  <?php
								$firstYear = date('Y');
								for($i=$firstYear;$i>1950;$i--)
								{
									echo '<option value='.$i.'>'.$i.'</option>';
								}
							  ?>
                                
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">M.ed Result</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="medresult" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">M.ed Passing Year</label>
                        <div class="controls">
							  <select name="medyear">
							  <option value="" selected>Select One</option>
							  <?php
								$firstYear = date('Y');
								for($i=$firstYear;$i>1950;$i--)
								{
									echo '<option value='.$i.'>'.$i.'</option>';
								}
							  ?>
                                
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Others Exam.(If Any)</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="Othersexam" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Others Exam Result</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="Othersexamresult" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Others Exam Passing Year</label>
                        <div class="controls">
							  <select name="Othersexamyear">
							  <option value="" selected>Select One</option>
							  <?php
								$firstYear = date('Y');
								for($i=$firstYear;$i>1950;$i--)
								{
									echo '<option value='.$i.'>'.$i.'</option>';
								}
							  ?>
                                
                            </select>
                        </div>
                    </div>
					<h3>Head Examiner(HE)/ Examiner(EX) Information</h3>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">JSC EX/HE(2014)Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="jscexhe" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">JSC Ex Sub Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="jscexsubcode" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">SSC EX/HE(2014)Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sscexhe" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">JSC Ex Sub Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sscexsubcode" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC EX/HE(2014)Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="hscexhe" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Ex Sub Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="hscexsubcode" type="text">
                        </div>
                    </div>
					
					
        </div>
		 </form>
    </div>
</div>
