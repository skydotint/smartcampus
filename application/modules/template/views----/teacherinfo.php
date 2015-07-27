<?php include 'header.php';?>
        <div class="container">
            <div class="row margin15">
		
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                    <div class="leftinner_content">
					<div class="span9" id="content" >
						<div id="successmsg" class="alert alert-success" style="display: none;"></div>
						<div id="errormsg" class="alert alert alert-error" style="display: none;"></div>
					</div>
							<div class="singlePageContent">
								<h2 class="blue"><?php echo $singleteacher['firstname']; ?> <?php echo $singleteacher['middlename']; ?> <?php echo $singleteacher['lastname']; ?> এর তথ্য </h2>
								<div class="singleStdn">
									<div class="singleStdnInfo">
									<img src="<?php echo base_url(); ?>uploads/teachers/<?php if($singleteacher['photo']){ echo $singleteacher['photo']; }else{echo "noimage.jpg";} ?>">
									<ul class="singleInfoUl">
										<li><span class="stdnSingleSpanLeft">Full Name (Bangla):</span>
											<span class="stdnSingleSpanRight"><?php echo $singleteacher['firstname']; ?> <?php echo $singleteacher['middlename']; ?> <?php echo $singleteacher['lastname']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">Gender</span>
											<span class="stdnSingleSpanRight"><?php echo $singleteacher['gender']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">Birth Date</span>
											<span class="stdnSingleSpanRight"><?php echo $singleteacher['birthdate']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">Present Address</span>
											<span class="stdnSingleSpanRight"><?php echo $singleteacher['mailingaddress']; ?></span>
										</li>
									</ul>    
								</div>
							
							</div>
						</div> 
                    </div>
                </div>

				
				
				<?php include 'view_rightsidebar.php';?>
				</div>
            </div>
        <?php include 'footer.php';?>