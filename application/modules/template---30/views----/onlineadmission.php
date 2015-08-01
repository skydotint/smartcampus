<?php include 'header.php';?>
		<?php foreach($settings as $setting) { ?>
        <div class="container">
            <div class="row margin15">
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                    <div class="leftinner_content">
					<div class="span9" id="content" >
						<div id="successmsg" class="alert alert-success" style="display: none;"></div>
						<div id="errormsg" class="alert alert alert-error" style="display: none;"></div>
					</div>
                    <h3>ভর্তির আবেদনপত্র</h3>
					<form id="addonlineapplicantForm" action="javascript:void(0);" enctype="multipart/form-data">
					<div class="control-group">
                        <label class="control-label" for="focusedInput">নাম (বাংলায়) </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="namebangla" type="text">
						</div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">নাম (ইংরেজিতে বড় হাতের অক্ষরে) </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="nameenglish" type="text">
						</div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">পিতার নাম (বাংলায়) </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="fathernamebangla" type="text">
						</div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">পিতার নাম (ইংরেজিতে বড় হাতের অক্ষরে) </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="fathernameenglish" type="text">
						</div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">মাতার নাম (বাংলায়) </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mothernamebangla" type="text">
						</div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">মাতার নাম (ইংরেজিতে বড় হাতের অক্ষরে) </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mothernameenglish" type="text">
						</div>
                    </div>
					
					
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">জন্ম তারিখ</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="birthdate" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">মোবাইল নম্বর</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mobileno" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">স্থায়ী ঠিকানা </label>
                        <div class="controls">
                           <textarea class="input-xlarge" name="permanentaddress" placeholdef="Enter address ..."></textarea>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">বর্তমান ঠিকানা </label>
                        <div class="controls">
                           <textarea class="input-xlarge" name="presentaddress" placeholdef="Enter address ..."></textarea>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">পিতার অবর্তমানে অভিভাবকের নাম</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="othersgurdian" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">সম্পর্ক </label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="relation" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">পিতার অবর্তমানে অভিভাবকের স্থায়ী ঠিকানা </label>
                        <div class="controls">
                           <textarea class="input-xlarge" name="othersgurdianpermanentaddress" placeholdef="Enter address ..."></textarea>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">পিতার অবর্তমানে অভিভাবকের বর্তমান ঠিকানা </label>
                        <div class="controls">
                           <textarea class="input-xlarge" name="othersgurdianpresentaddress" placeholdef="Enter address ..."></textarea>
                        </div>
                    </div>
					
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">অভিভাবকের মোবাইল নম্বর</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="gurdianmobileno" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">জাতীয়তা</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="nationality" type="text">
                        </div>
                    </div>
					
					 <div class="control-group">
                        <label class="control-label" for="focusedInput">লিঙ্গ</label>
                        <div class="controls">
                            <select class="input-xlarge" name="gender">
								<option value="" selected>নির্বাচন করুন</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">ধর্ম</label>
                        <div class="controls">
							  <select class="input-xlarge" name="religion">
							  <option value="" selected>নির্বাচন করুন</option>
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
							  <option value="" selected>নির্বাচন করুন</option>
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
							 <option value="" selected>নির্বাচন করুন</option>
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
                        <label class="control-label" for="focusedInput">সেকশন</label>
                        <div class="controls">
                            <select class="input-xlarge" name="section">
							 <option value="" selected>নির্বাচন করুন</option>
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
                        <label for="focusedInput" class="control-label">Student Photo</label>

                        <div class="controls">                            
                            <input class="input-xlarge" type="file" name="photo" id="photo" />
                        </div>
                    </div>	
					<input id="addonlineapplicantbtn" name="addonlineapplicantbtn" type="submit" class="btn btn-primary" value="Submit" />
					</form>	
                    </div>
                </div>
				<?php include 'view_rightsidebar.php';?>
				<?php
                    //$this->load->view($module .'/'. $view_rightsidebar);
                ?>
				</div>
            </div>
			<?php } ?>
        <?php include 'footer.php';?>