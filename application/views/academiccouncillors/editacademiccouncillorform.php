<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Academic Councillor</div>

    </div>
	<?php //var_dump($academiccouncillors); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editacademiccouncillorForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Full Name</label>
                        <div class="controls">
							<input name="academiccouncillorid" value="<?php echo $academiccouncillors['academiccouncillorid']; ?>" type="hidden">
                            <input class="input-xlarge focused" name="fullname" value="<?php echo $academiccouncillors['fullname']; ?>" type="text">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Phone</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="sphone" value="<?php echo $academiccouncillors['sphone']; ?>" type="text">
                        </div>
                    </div>

					<div class="control-group">
                        <label class="control-label" for="focusedInput">Join Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="year" value="<?php echo $academiccouncillors['year']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Permanent Address</label>
                        <div class="controls">
                           <textarea name="permanentaddress" placeholdef="Enter address ..."  style=" width: 270px;"><?php echo $academiccouncillors['permanentaddress']; ?></textarea>
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Present Address</label>
                        <div class="controls">
                           <textarea name="mailingaddress" style=" width: 270px;"><?php echo $academiccouncillors['mailingaddress']; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Gender</label>
                        <div class="controls">
                            <select name="gender">
								<option value="<?php echo $academiccouncillors['gender']; ?>"><?php echo $academiccouncillors['gender']; ?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Email</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="email" value="<?php echo $academiccouncillors['email']; ?>" type="text">
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Title</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="title" value="<?php echo $academiccouncillors['title']; ?>" type="text">
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
											<textarea name="description" id="bootstrap-editor" placeholder="Enter text ..." style="width:98%;height:200px;"><?php echo $academiccouncillors['description']; ?></textarea>
								</div>
							</div>
							<!-- /block -->
						</div>
		            </div>
    
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Photo</label>

                        <div class="controls">                            
                            <input type="file" name="photo" id="photo" />
                        </div>
                    </div>
                    <hr/>
                    <input id="editacademiccouncillorbtn" name="editacademiccouncillorbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
