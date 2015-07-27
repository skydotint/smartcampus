<?php include 'header.php';?>
        <div class="container">
            <div class="row margin15">
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                    <div class="leftinner_content headmaster">
					<div class="span9" id="content" >
						<div id="successmsg" class="alert alert-success" style="display: none;"></div>
						<div id="errormsg" class="alert alert alert-error" style="display: none;"></div>
					</div>
					<h3>প্রধান শিক্ষকের বানী</h3>
					
    					<?php foreach($settings as $headmastermesg){ ?>
						<img src="<?php echo base_url(); ?>uploads/settings/<?php echo $headmastermesg['headteacherphoto']; ?>" />
						<?php echo $headmastermesg['headmessage']; ?>
						<?php } ?>
					
                    </div>
                </div>
				<?php include 'view_rightsidebar.php';?>
				</div>
            </div>
        <?php include 'footer.php';?>