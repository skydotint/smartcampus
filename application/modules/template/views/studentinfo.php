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
								<h1 class="blue"><?php echo $singlestudent['firstname']; ?> <?php echo $singlestudent['middlename']; ?> <?php echo $singlestudent['lastname']; ?> এর তথ্য </h1>
								<div class="singleStdn">
									<div class="singleStdnInfo">
									<img src="<?php echo base_url(); ?>uploads/students/<?php if($singlestudent['photo']){ echo $singlestudent['photo']; }else{echo "noimage.jpg";} ?>">
									<ul class="singleInfoUl">
										<li><span class="stdnSingleSpanLeft">পূর্ণ নাম</span>
											<span class="stdnSingleSpanRight"><?php echo $singlestudent['firstname']; ?> <?php echo $singlestudent['middlename']; ?> <?php echo $singlestudent['lastname']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">লিঙ্গ</span>
											<span class="stdnSingleSpanRight"><?php echo $singlestudent['gender']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">বিভাগ</span>
											<span class="stdnSingleSpanRight"><?php echo $singlestudent['stdgroup']; ?> </span>
										</li>
										<li><span class="stdnSingleSpanLeft">ক্লাস রোল</span>
											<span class="stdnSingleSpanRight"><?php echo $singlestudent['classroll']; ?> </span>
										</li>
										<li><span class="stdnSingleSpanLeft">জন্ম তারিখ</span>
											<span class="stdnSingleSpanRight"><?php echo $singlestudent['birthdate']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">স্থায়ী ঠিকানা</span>
											<span class="stdnSingleSpanRight"><?php echo $singlestudent['mailingaddress']; ?></span>
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