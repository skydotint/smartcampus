<?php include 'header.php';?>
        <div class="container">
            <div class="row margin15">
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                    <div class="leftinner_content">
					<div class="span9" id="content" >
						<div id="successmsg" class="alert alert-success" style="display: none;"></div>
						<div id="errormsg" class="alert alert alert-error" style="display: none;"></div>
					</div>
					<?php 
					
					//var_dump($id);
					//var_dump($singleteacher);
					if($id){ ?>
							<div class="singlePageContent">
								<h1 class="blue"><?php echo $singleheadteacher['firstname']; ?> <?php echo $singleheadteacher['middlename']; ?> <?php echo $singleheadteacher['lastname']; ?></h1>
								<div class="singleStdn">
									<div class="singleStdnInfo">
									
												<img src="<?php echo base_url(); ?>uploads/teachers/<?php if($singleheadteacher['photo']){ echo $singleheadteacher['photo']; }else{echo "noimage.jpg";} ?>">
									<ul class="singleInfoUl">
										<li><span class="stdnSingleSpanLeft">পূর্ণ নাম </span>
											<span class="stdnSingleSpanRight"><?php echo $singleheadteacher['firstname']; ?> <?php echo $singleheadteacher['middlename']; ?> <?php echo $singleheadteacher['lastname']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">লিঙ্গ</span>
											<span class="stdnSingleSpanRight"><?php echo $singleheadteacher['gender']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">জন্ম তারিখ</span>
											<span class="stdnSingleSpanRight"><?php echo $singleheadteacher['birthdate']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">স্থায়ী ঠিকানা </span>
											<span class="stdnSingleSpanRight"><?php echo $singleheadteacher['mailingaddress']; ?></span>
										</li>
									</ul>    
								</div>
							
							</div>
						</div> 
					<?php }else{ ?>
						<div class="singlePageContent">
						   <h1 class="blue">সাবেক প্রধান শিক্ষকের তালিকা</h2>
							<ul>
							<?php foreach ($headteachers as $headteacher) { ?>
								<li>
									<div class="stdnInfo">
										<div class="stdnInfoLeft">
											<span class="imageWrap">
												<img src="<?php echo base_url(); ?>uploads/teachers/<?php echo $headteacher['photo']; ?>">
											</span>
										</div>
										<div class="stdnInfoRight">
											<p class="name"><?php echo $headteacher['firstname']; ?></p>
											<p class="roll">লিঙ্গ : <?php echo $headteacher['gender']; ?></p>
										</div>
										<div class="viewDetails">
											<a href="<?php echo base_url(); ?>headteacher/<?php echo $headteacher['teacherid']; ?>">বিস্তারিত</a>
										</div>
									</div>
								</li>
								<?php } ?>
							</ul>
						</div>
					<?php } ?>
                    </div>
                </div>
				<?php include 'view_rightsidebar.php';?>
				</div>
            </div>
        <?php include 'footer.php';?>