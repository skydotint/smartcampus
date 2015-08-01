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
								<h1 class="blue">পুরাতন শিক্ষকদের ইনফর্মেশন</h1>
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
					<?php }else{ ?>
						<div class="singlePageContent">
						   <h1 class="blue"> পুরাতন শিক্ষকদের ইনফর্মেশন</h2>
							<div class="col-lg-4">
								<b>শ্রেণী</b> &nbsp;<br>
								<select id="class" name="class" class="form-control">
									<option value="">Select</option>
									<option value="">HSC</option>
									<option value="">Honours</option>
									<option value="">Masters</option>
								</select>
							</div>
							<div class="col-lg-4">
								<b>বিভাগ </b><br>
								<select class="form-control" name="department" id="department">
									<option value="">Select</option>
									<option value="">Science</option>
									<option value="">Arts</option>
									<option value="">Commerce</option>
								</select>
							</div>
							<div class="col-lg-4">
								<button  type="submit" class="btn btn-primary filterSubmit">প্রেরণ করুন</button>
							</div><br><br>

							
							
							<ul>
							<?php foreach ($teachers as $teacher) { ?>
								<li>
									<div class="stdnInfo">
										<div class="stdnInfoLeft">
											<span class="imageWrap">
												<img src="<?php echo base_url(); ?>uploads/teachers/<?php echo $teacher['photo']; ?>">
											</span>
										</div>
										<div class="stdnInfoRight">
											<p class="name"><?php echo $teacher['firstname']; ?></p>
											<p class="roll">Gender: <?php echo $teacher['gender']; ?></p>
										</div>
										<div class="viewDetails">
											<a href="<?php echo base_url(); ?>xteacher/<?php echo $teacher['teacherid']; ?>">বিস্তারিত</a>
										</div>
									</div>
								</li>
								<?php } ?>
							</ul>
							<center>
							<ul class="pagination">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li class="disabled"><a href="#">4</a></li>
								<li><a href="#">5</a></li>
							</ul>
							</center> 
						</div>
					<?php } ?>
                    </div>
                </div>

				
				
				<?php include 'view_rightsidebar.php';?>
				</div>
            </div>
        <?php include 'footer.php';?>