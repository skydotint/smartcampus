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
					//var_dump($singleacademiccouncill);
					if($id){ ?>						
						<div class="singlePageContent">
								<h1 class="blue"><?php echo $singleacademiccouncill['fullname']; ?>, <?php echo $singleacademiccouncill['title']; ?></h1>
								<div class="singleStdn">
									<div class="singleStdnInfo">
									
												<img src="<?php echo base_url(); ?>uploads/academiccouncillors/<?php if($singleacademiccouncill['photo']){ echo $singleacademiccouncill['photo']; }else{echo "noimage.jpg";} ?>">
									<ul class="singleInfoUl">
										<li><span class="stdnSingleSpanLeft">পুরো নাম </span>
											<span class="stdnSingleSpanRight"><?php echo $singleacademiccouncill['fullname']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">পদবী</span>
											<span class="stdnSingleSpanRight"><?php echo $singleacademiccouncill['title']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">লিঙ্গ</span>
											<span class="stdnSingleSpanRight"><?php echo $singleacademiccouncill['gender']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">মোবাইল নম্বর</span>
											<span class="stdnSingleSpanRight"><?php echo $singleacademiccouncill['sphone']; ?></span>
										</li>
										
										<li><span class="stdnSingleSpanLeft">ইমেইল</span>
											<span class="stdnSingleSpanRight"><?php echo $singleacademiccouncill['email']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">জয়েন্ট  তারিখ</span>
											<span class="stdnSingleSpanRight"><?php echo $singleacademiccouncill['year']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">স্থায়ী ঠিকানা</span>
											<span class="stdnSingleSpanRight"><?php echo $singleacademiccouncill['permanentaddress']; ?></span>
										</li>
										<li><span class="stdnSingleSpanLeft">বর্তমান ঠিকানা </span>
											<span class="stdnSingleSpanRight"><?php echo $singleacademiccouncill['mailingaddress']; ?></span>
										</li>
										
									</ul>    
								</div>
							
							</div>
						</div> 
						
					<?php }else{ ?>
					<h1 class="blue">পরিচালনা পর্ষদ</h2>
						<table class="table table-striped table-bordered dataTable">
							<tbody>
								<tr>
									<th>#</th>
									<th>নাম</th>
									<th>পদবী </th>
									<th>মোবাইল নম্বর</th>
									<th>বিস্তারিত </th>
								</tr>
								<?php $sl=1; foreach ($academiccouncills as $academiccouncill) { ?>
									<tr>
										<td><?php echo $sl++; ?></td>
										<td><?php echo $academiccouncill['fullname']; ?></td>
										<td><?php echo $academiccouncill['title']; ?></td>
										<td><?php echo $academiccouncill['sphone']; ?></td>
										<td>
										<a href="<?php echo base_url(); ?>academiccouncill/<?php echo $academiccouncill['academiccouncillorid']; ?>">বিস্তারিত</a>
										</td>
									</tr>
								<?php } ?>

							</tbody>
						</table>
					<?php } ?>
                    </div>
                </div>
				<?php include 'view_rightsidebar.php';?>
				</div>
            </div>
        <?php include 'footer.php';?>