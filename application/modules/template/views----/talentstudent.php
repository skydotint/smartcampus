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
					//var_dump($singletalentstudent);
					if($id){ ?>
					<h3><?php echo $singletalentstudent['title']; ?></h3>
    					<?php echo $singletalentstudent['description']; ?>
					<?php }else{ ?>
					<h3>কৃতি শিক্ষার্থীদের তালিকা</h3>
						<table class="table table-striped table-bordered dataTable">
							<tbody>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Description</th>
									<th>Phone No</th>
									<th>View Details</th>
								</tr>
								<?php $sl=1; foreach ($talentstudents as $talentstudent) { ?>
									<tr>
										<td><?php echo $sl++; ?></td>
										<td><?php echo $talentstudent['firstname']; ?></td>
										<td>
										<?php 
										$talentstudentid=$talentstudent['talentedstudentid'];
										$string = $talentstudent['description'];
											if (strlen($string) > 200) {
											$trimstring = substr($string, 0, 200);
											} else {
											$trimstring = $string;
											}
											echo $trimstring;
										?>
										
										</td>
										<td><?php echo $talentstudent['sphone']; ?></td>
										<td>
										<a href="<?php echo base_url(); ?>talentstudent/<?php echo $talentstudent['talentedstudentid']; ?>">View Details</a>
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