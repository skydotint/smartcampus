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
					//var_dump($singlenotice);
					if($id){ ?>
					<h3><?php echo $singlenotice['noticetitle']; ?></h3>
    					<?php echo $singlenotice['noticedescription']; ?>
						
						<?php if($singlenotice['attachment']){ ?>
						<h3 style="color: #3c763d;">Download File: <a target="_blank" href="<?php echo base_url(); ?>uploads/notice/<?php echo $singlenotice['attachment']; ?>">Click Here</a></h3>
						<?php }else{} ?>
					<?php }else{ ?>
					<h3>নোটিশ বোর্ড</h3>
						<table class="table table-striped table-bordered dataTable">
							<tbody>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Description</th>
									<th>Published</th>
									<th>Download</th>
								</tr>
								<?php $sl=1; foreach ($notices as $notice) { ?>
									<tr>
										<td><?php echo $sl++; ?></td>
										<td><?php echo $notice['noticetitle']; ?></td>
										<td>
										<?php 
										$noticeid=$notice['noticeid'];
										$string = $notice['noticedescription'];
											if (strlen($string) > 200) {
											$trimstring = substr($string, 0, 200). ' <a href="notice/'.$noticeid.'">More...</a>';
											} else {
											$trimstring = $string;
											}
											echo $trimstring;
										?>
										
										</td>
										<td><?php echo $notice['publishdate']; ?></td>
										<td>
										<?php $note=$notice['attachment']; if($note){ ?>
										<a href="<?php echo base_url(); ?>uploads/notice/<?php echo $notice['attachment']; ?>">Download</a>
										<?php }else{echo "N/A";} ?>
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