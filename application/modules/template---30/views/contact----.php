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
                    <h3>যোগাযোগ</h3>
					<form id="addonlineapplicantForm" action="javascript:void(0);" enctype="multipart/form-data">
					<div class="control-contact">
                        <label class="control-label" for="focusedInput">Full Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="fullname" type="text">
						</div>
                    </div>
					
                    <div class="control-contact">
                        <label class="control-label" for="focusedInput">Mobile No</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mobileno" type="text">
                        </div>
                    </div>
					
					<div class="control-contact">
                        <label class="control-label" for="focusedInput">Email</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="email" type="text">
                        </div>
                    </div>
					
					<div class="control-contact">
                        <label class="control-label" for="focusedInput">Title</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="messagetitle" type="text">
                        </div>
                    </div>
					
					<div class="control-contact">
                        <label class="control-label" for="focusedInput">Message</label>
                        <div class="controls">
                           <textarea class="input-xlarge" name="message" placeholdef="Enter address ..."></textarea>
                        </div>
                    </div> 
 
					<input id="addonlineapplicantbtn" name="addonlineapplicantbtn" type="submit" class="btn btn-primary" value="Send" />
					</form>	
					
					<div class="googlemap">
						<iframe src="<?php echo $setting['googlemap']; ?>" width="95%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> 
					</div>
					
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