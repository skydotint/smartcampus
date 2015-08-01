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
						   <h1 class="blue">ছাত্র ছাত্রীদের তথ্য </h1>
							<div class="col-lg-4">
								<b>Class</b> &nbsp;<br>
								<select id="class" name="class" class="form-control">
									<option value="">Select</option>
									<option value="">HSC</option>
									<option value="">Honours</option>
									<option value="">Masters</option>
								</select>
							</div>
							<div class="col-lg-4">
								<b>Department </b><br>
								<select class="form-control" name="department" id="department">
									<option value="">Select</option>
									<option value="">Science</option>
									<option value="">Arts</option>
									<option value="">Commerce</option>
								</select>
							</div>
							<div class="col-lg-4">
								<button  type="submit" class="btn btn-primary filterSubmit">Submit</button>
							</div><br><br>
							<ul>
							<?php foreach ($students as $sinstudent) { ?>
								<li>
									<div class="stdnInfo">
										<div class="stdnInfoLeft">
											<span class="imageWrap">
												<img src="<?php echo base_url(); ?>uploads/students/<?php echo $sinstudent->photo; ?>">
											</span>
										</div>
										<div class="stdnInfoRight">
											<p class="name"><?php echo $sinstudent->firstname; ?></p>
											<p class="roll">Roll: <?php echo $sinstudent->classroll; ?></p>
											<p class="roll">Gender: <?php echo $sinstudent->gender; ?></p>
										</div>
										<div class="viewDetails">
											<a href="<?php echo base_url(); ?>studentinfo/<?php echo $sinstudent->studentid; ?>">View Details</a>
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