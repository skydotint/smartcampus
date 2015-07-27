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
							<h1 class="blue">প্রাক্তন শিক্ষকদের তালিকা </h1>
							
							<ul>
							<?php //var_dump($teachers);
							foreach ($teachers as $sinteacher) { ?>
								<li>
									<div class="stdnInfo">
										<div class="stdnInfoLeft">
											<span class="imageWrap">
												<img src="<?php echo base_url(); ?>uploads/teachers/<?php echo $sinteacher->photo; ?>">
											</span>
										</div>
										<div class="stdnInfoRight">
											<p class="name"><?php echo $sinteacher->firstname; ?></p>
										
										</div>
										<div class="viewDetails">
											<a href="<?php echo base_url(); ?>teacherinfo/<?php echo $sinteacher->teacherid; ?>">বিস্তারিত</a>
										</div>
									</div>
								</li>
								<?php } ?>
							</ul>
							
						</div>
						<?php echo $links; ?>
                    </div>
                </div>

				
				
				<?php include 'view_rightsidebar.php';?>
				</div>
            </div>
        <?php include 'footer.php';?>