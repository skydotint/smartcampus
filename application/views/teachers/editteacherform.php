<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Teacher</div>

    </div>
	<?php //var_dump($teachers); ?>
	
	<div class="block-content collapse in">
     <form class="form-horizontal form-groups-bordered validate" id="editteacherForm" action="javascript:void(0);" enctype="multipart/form-data">      
	  <div class="teacherinfoleft">
	  <h3>Personal Information</h3>
               <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">First Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="firstname" value="<?php echo $teachers['firstname']; ?>" type="text">
                            <input name="teacherid" value="<?php echo $teachers['teacherid']; ?>" type="hidden">
                            <input class="input-xlarge focused" name="userid" type="hidden" value="<?php echo $this->ion_auth->logged_in(); ?>">
						</div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Middle Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="middlename" value="<?php echo $teachers['middlename']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Last Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="lastname" value="<?php echo $teachers['lastname']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Father's Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="fathername" value="<?php echo $teachers['fathername']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Mother's Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mothername" value="<?php echo $teachers['mothername']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Designation</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="designation" value="<?php echo $teachers['designation']; ?>" type="text">
                        </div>
                    </div>
					
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">National ID No</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="nationalid" value="<?php echo $teachers['nationalid']; ?>" type="text">
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Mobile No</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="tphone" value="<?php echo $teachers['tphone']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Permanent Address</label>
                        <div class="controls">
							<textarea name="permanentaddress" placeholdef="Enter address ..."  style=" width: 270px;"><?php echo $teachers['permanentaddress']; ?></textarea>
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Present Address</label>
                        <div class="controls">
                           <textarea name="mailingaddress" placeholdef="Enter address ..."  style=" width: 270px;"><?php echo $teachers['mailingaddress']; ?></textarea>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Religion</label>
                        <div class="controls">
                            <select name="religion">
                                <option value="<?php echo $teachers['religion']; ?>"><?php echo $teachers['religion']; ?></option>
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
                                <option value="<?php echo $teachers['gender']; ?>"><?php echo $teachers['gender']; ?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option> 
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Date of Birth</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="birthdate"  value="<?php echo $teachers['birthdate']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Email</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="email"  value="<?php echo $teachers['email']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Join Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="joindate"  value="<?php echo $teachers['joindate']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Date Attended</label>
                        <div class="controls">
                            <select name="dateattended">
                               <option value="<?php echo $teachers['dateattended']; ?>"><?php echo $teachers['dateattended']; ?></option>
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
                            <input class="input-xlarge focused" name="mpoid"  value="<?php echo $teachers['mpoid']; ?>" type="text">
                        </div>
                    </div>
					
		
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Enrollment Status</label>
                        <div class="controls">
                            <select name="enrollmentstatus">
                               <option value="<?php echo $teachers['enrollmentstatus']; ?>"><?php $st=$teachers['enrollmentstatus']; if($st==1){echo "Current Teacher";}elseif($st==2){echo "X Teacher";}else{echo "X Head Teacher";} ?></option>
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
                            <input class="input-xlarge focused" name="jscsubjectteacher"  value="<?php echo $teachers['jscsubjectteacher']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">JSC Teaching Start Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="jscteachingdate"  value="<?php echo $teachers['jscteachingdate']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">SSC Subject Teaches</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sscsubjectteacher"  value="<?php echo $teachers['sscsubjectteacher']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">SSC Teaching Start Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sscteachingdate"  value="<?php echo $teachers['sscteachingdate']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Subject Teaches</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="hscsubjectteacher"  value="<?php echo $teachers['hscsubjectteacher']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Teaching Start Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="hscteachingdate"  value="<?php echo $teachers['hscteachingdate']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">JSC want to be</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="jscwanttobe"  value="<?php echo $teachers['jscwanttobe']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">SSC want to be</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sscwanttobe"  value="<?php echo $teachers['sscwanttobe']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC want to be</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="hscwanttobe"  value="<?php echo $teachers['hscwanttobe']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">JSC Child/close Relative Appeared</label>
                        <div class="controls">
							  <select name="jscrelative">
							  <option value="<?php echo $teachers['jscrelative']; ?>"><?php echo $teachers['jscrelative']; ?></option>
							  <option value="No">No</option>
							  <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">SSC Child/close Relative Appeared</label>
                        <div class="controls">
							  <select name="sscrelative">
							  <option value="<?php echo $teachers['sscrelative']; ?>"><?php echo $teachers['sscrelative']; ?></option>
							  <option value="No">No</option>
							  <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Child/close Relative Appeared</label>
                        <div class="controls">
							  <select name="hscrelative">
							  <option value="<?php echo $teachers['hscrelative']; ?>"><?php echo $teachers['hscrelative']; ?></option>
							  <option value="No">No</option>
							  <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <input id="editteacherbtn" name="editteacherbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
        </div>
		
		<div class="teacherinforight">
                   <h3>Academic Information</h3>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">SSC Examination Board</label>
                        <div class="controls">
							  <select name="sscboard">
							  <option value="<?php echo $teachers['sscboard']; ?>"><?php echo $teachers['sscboard']; ?></option>
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
							  <option value="<?php echo $teachers['sscgroup']; ?>"><?php echo $teachers['sscgroup']; ?></option>
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
							  <option value="<?php echo $teachers['sscyear']; ?>"><?php echo $teachers['sscyear']; ?></option>
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
							  <option value="<?php echo $teachers['hscboard']; ?>"><?php echo $teachers['hscboard']; ?></option>
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
							  <option value="<?php echo $teachers['hscgroup']; ?>"><?php echo $teachers['hscgroup']; ?></option>
							  <option value="Science">Science</option>
							  <option value="Business Study">Business Study</option>
							  <option value="Humanistic">Humanistic</option>
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Result</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="hscresult" value="<?php echo $teachers['hscresult']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Passing Year</label>
                        <div class="controls">
							  <select name="hscyear">
							  <option value="<?php echo $teachers['hscyear']; ?>"><?php echo $teachers['hscyear']; ?></option>
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
                            <input class="input-xlarge focused" name="graduationinstitute" value="<?php echo $teachers['graduationinstitute']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Graduation Subject</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="graduationsubject" value="<?php echo $teachers['graduationsubject']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Graduation Result</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="graduationresult" value="<?php echo $teachers['graduationresult']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Graduation Passing Year</label>
                        <div class="controls">
							  <select name="graduationyear">
							  <option value="<?php echo $teachers['graduationyear']; ?>"><?php echo $teachers['graduationyear']; ?></option>
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
                            <input class="input-xlarge focused" name="mastersinstitute" value="<?php echo $teachers['mastersinstitute']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Masters Subject</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="masterssubject" value="<?php echo $teachers['masterssubject']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Masters Result</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mastersresult" value="<?php echo $teachers['mastersresult']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Masters Passing Year</label>
                        <div class="controls">
							  <select name="mastersyear">
							  <option value="<?php echo $teachers['mastersyear']; ?>"><?php echo $teachers['mastersyear']; ?></option>
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
                            <input class="input-xlarge focused" name="bedresult" value="<?php echo $teachers['bedresult']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">B.ed Passing Year</label>
                        <div class="controls">
							  <select name="bedyear">
							  <option value="<?php echo $teachers['bedyear']; ?>"><?php echo $teachers['bedyear']; ?></option>
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
                            <input class="input-xlarge focused" name="medresult" value="<?php echo $teachers['medresult']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">M.ed Passing Year</label>
                        <div class="controls">
							  <select name="medyear">
							  <option value="<?php echo $teachers['medyear']; ?>"><?php echo $teachers['medyear']; ?></option>
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
                            <input class="input-xlarge focused" name="Othersexam" value="<?php echo $teachers['Othersexam']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Others Exam Result</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="Othersexamresult" value="<?php echo $teachers['Othersexamresult']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Others Exam Passing Year</label>
                        <div class="controls">
							  <select name="Othersexamyear">
							  <option value="<?php echo $teachers['Othersexamyear']; ?>"><?php echo $teachers['Othersexamyear']; ?></option>
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
                            <input class="input-xlarge focused" name="jscexhe" value="<?php echo $teachers['jscexhe']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">JSC Ex Sub Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="jscexsubcode" value="<?php echo $teachers['jscexsubcode']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">SSC EX/HE(2014)Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sscexhe" value="<?php echo $teachers['sscexhe']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">SSC Ex Sub Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sscexsubcode" value="<?php echo $teachers['sscexsubcode']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC EX/HE(2014)Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="hscexhe" value="<?php echo $teachers['hscexhe']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">HSC Ex Sub Code</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="hscexsubcode" value="<?php echo $teachers['hscexsubcode']; ?>" type="text">
                        </div>
                    </div>
					
					
        </div>
		 </form>
    </div> 
</div>
