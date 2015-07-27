<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Student</div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="addtalentedstudentForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">First Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="firstname" type="text">
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
                        <label class="control-label" for="focusedInput">Shift</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="shift" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Department</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="department" type="text">
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Passing Year</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="year" type="text">
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
                        <label class="control-label" for="focusedInput">Email</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="email" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Title</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="title" type="text">
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
											<textarea name="description" id="bootstrap-editor" placeholder="Enter text ..." style="width:98%;height:200px;"></textarea>
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

                    <input id="addtalentedstudentbtn" name="addtalentedstudentbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
