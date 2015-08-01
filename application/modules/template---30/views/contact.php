<?php include 'header.php'; ?>
<?php foreach ($settings as $setting) { ?>
    <div class="container">
        <div class="row margin15">
            <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                <div class="leftinner_content">
                    <div class="span9" id="content" >
                        <div id="successmsg" class="alert alert-success" style="display: none;"></div>
                        <div id="errormsg" class="alert alert alert-error" style="display: none;"></div>
                    </div>
                    <h1 class="blue">যোগাযোগ</h1>
                    <form id="emailsendform"  enctype="multipart/form-data">
                        <div class="control-contact">
                            <label class="control-label" for="focusedInput">পুরো নাম</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="fullname" type="text">
                            </div>
                        </div>

                        <div class="control-contact">
                            <label class="control-label" for="focusedInput">মোবাইল নম্বর</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="mobileno" type="text">
                            </div>
                        </div>

                        <div class="control-contact">
                            <label class="control-label" for="focusedInput">ইমেইল</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="email" type="text">
                            </div>
                        </div>

                        <div class="control-contact">
                            <label class="control-label" for="focusedInput">বিষয়</label>
                            <div class="controls">
                                <input class="input-xlarge focused" name="subject" type="text">
                            </div>
                        </div>

                        <div class="control-contact">
                            <label class="control-label" for="focusedInput">বার্তা</label>
                            <div class="controls">
                                <textarea class="input-xlarge" name="message" placeholdef="Enter address ..."></textarea>
                            </div>
                        </div> 

                        <input name="addonlineapplicantbtn" type="submit" class="btn btn-primary" value="প্রেরণ করুন" />
                    </form>	

                    <div class="googlemap">
                        <iframe src="<?php echo $setting['googlemap']; ?>" width="95%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> 
                    </div>

                </div>
            </div>
            <?php include 'view_rightsidebar.php'; ?>
            <?php
            //$this->load->view($module .'/'. $view_rightsidebar);
            ?>
        </div>
    </div>
<?php } ?>
<?php include 'footer.php'; ?>