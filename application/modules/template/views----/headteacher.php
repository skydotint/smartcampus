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
					//var_dump($singleheadteacher);
					if($id){ ?>
					<h3><?php echo $singleheadteacher['firstname']; ?> <?php echo $singleheadteacher['middlename']; ?> <?php echo $singleheadteacher['lastname']; ?></h3>
    					<?php echo $singleheadteacher['firstname']; ?>
					<?php }else{ //var_dump($headteachers); ?>
					<h3>সাবেক প্রধান শিক্ষকের তালিকা</h3>
						<table class="table table-striped table-bordered dataTable">
							<tbody>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Duration</th>
									<th>Picture</th>
									<th>View profile</th>
								</tr>
								<?php $sl=1; foreach ($headteachers as $headteacher) { ?>
									<tr>
										<td><?php echo $sl++; ?></td>
										<td><?php echo $headteacher['firstname']; ?> <?php echo $headteacher['middlename']; ?> <?php echo $headteacher['lastname']; ?></td>
										<td><?php echo $headteacher['joindate']; ?> To <?php echo $headteacher['dateattended']; ?></td>
										<td><img width="100" src="<?php echo base_url(); ?>uploads/teachers/<?php echo $headteacher['photo']; ?>" /></td>
										<td>
										<a href="<?php echo base_url(); ?>headteacher/<?php echo $headteacher['teacherid']; ?>">View</a>
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