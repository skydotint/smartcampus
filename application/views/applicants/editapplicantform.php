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
                        <label class="control-label" for="focusedInput">নাম (বাংলায়) </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="namebangla" value="<?php echo $applicants['namebangla']; ?>" type="text">
                            <input name="applicantid" value="<?php echo $applicants['applicantid']; ?>" type="hidden">
						</div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">নাম (ইংরেজিতে বড় হাতের অক্ষরে) </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="nameenglish" value="<?php echo $applicants['nameenglish']; ?>" type="text">
						</div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">পিতার নাম (বাংলায়) </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="fathernamebangla" value="<?php echo $applicants['fathernamebangla']; ?>" type="text">
						</div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">পিতার নাম (ইংরেজিতে বড় হাতের অক্ষরে) </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="fathernameenglish" value="<?php echo $applicants['fathernameenglish']; ?>" type="text">
						</div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">মাতার নাম (বাংলায়) </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mothernamebangla" value="<?php echo $applicants['mothernamebangla']; ?>" type="text">
						</div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">মাতার নাম (ইংরেজিতে বড় হাতের অক্ষরে) </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mothernameenglish" value="<?php echo $applicants['mothernameenglish']; ?>" type="text">
						</div>
                    </div>
					
					
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">জন্ম তারিখ</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="birthdate" value="<?php echo $applicants['birthdate']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">মোবাইল নম্বর</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mobileno" value="<?php echo $applicants['mobileno']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">স্থায়ী ঠিকানা </label>
                        <div class="controls">
                           <textarea class="input-xlarge" name="permanentaddress" placeholdef="Enter address ..."><?php echo $applicants['permanentaddress']; ?></textarea>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">বর্তমান ঠিকানা </label>
                        <div class="controls">
                           <textarea class="input-xlarge" name="presentaddress" placeholdef="Enter address ..."><?php echo $applicants['presentaddress']; ?></textarea>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">পিতার অবর্তমানে অভিভাবকের নাম</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="othersgurdian" value="<?php echo $applicants['othersgurdian']; ?>" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">সম্পর্ক </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="relation" value="<?php echo $applicants['relation']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">পিতার অবর্তমানে অভিভাবকের স্থায়ী ঠিকানা </label>
                        <div class="controls">
                           <textarea class="input-xlarge" name="othersgurdianpermanentaddress" placeholdef="Enter address ..."><?php echo $applicants['othersgurdianpermanentaddress']; ?></textarea>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">পিতার অবর্তমানে অভিভাবকের বর্তমান ঠিকানা </label>
                        <div class="controls">
                           <textarea class="input-xlarge" name="othersgurdianpresentaddress" placeholdef="Enter address ..."><?php echo $applicants['othersgurdianpresentaddress']; ?></textarea>
                        </div>
                    </div>
					
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">অভিভাবকের মোবাইল নম্বর</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="gurdianmobileno" value="<?php echo $applicants['gurdianmobileno']; ?>"  type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">জাতীয়তা</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="nationality" value="<?php echo $applicants['nationality']; ?>" type="text">
                        </div>
                    </div>
					
					 <div class="control-group">
                        <label class="control-label" for="focusedInput">লিঙ্গ</label>
                        <div class="controls">
                            <select class="input-xlarge" name="gender">
								<option value="<?php echo $applicants['gender']; ?>" selected><?php echo $applicants['gender']; ?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">ধর্ম</label>
                        <div class="controls">
							  <select class="input-xlarge" name="religion">
							  <option value="<?php echo $applicants['religion']; ?>" selected><?php echo $applicants['religion']; ?></option>
							  <option value="ইসলাম">ইসলাম</option>
							  <option value="হিন্দু">হিন্দু</option>
							  <option value="খ্রিস্ট">খ্রিস্ট</option>
							  <option value="বৌদ্ধ">বৌদ্ধ</option>
							  <option value="অন্যান্য">অন্যান্য</option>
							  
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">বিভাগ</label>
                        <div class="controls">
							  <select class="input-xlarge" name="stdgroup">
							  <option value="<?php echo $applicants['stdgroup']; ?>" selected><?php echo $applicants['stdgroup']; ?></option>
							  <option value="Science">Science</option>
							  <option value="Business Study">Business Study</option>
							  <option value="Humanistic">Humanistic</option>
                            </select>
                        </div>
                    </div>
					        
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">ক্লাস</label>
                        <div class="controls">
                            <select class="input-xlarge" name="class">
							 <option value="<?php echo $applicants['class']; ?>" selected><?php echo $applicants['class']; ?></option>
                                <?php foreach($classes as $class) {
                                    echo '<option value="'.$class['classname'].'">';
                                        echo $class['classname'];
                                    echo '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">সেকশন</label>
                        <div class="controls">
                            <select class="input-xlarge" name="section">
							 <option value="<?php echo $applicants['section']; ?>" selected><?php echo $applicants['section']; ?></option>
                                <?php foreach($sections as $section) {
                                    echo '<option value="'.$section['sectionname'].'">';
                                        echo $section['sectionname'];
                                    echo '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
					
                   
 
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">শিক্ষার্থীর ছবি</label>

                        <div class="controls">                            
                            <input class="input-xlarge" type="file" name="photo" id="photo" />
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
