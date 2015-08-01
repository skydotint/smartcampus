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
					//var_dump($singledownload);
					if($id){ ?>
					<h3><?php echo $singledownload['downloadtitle']; ?></h3>
    					<?php echo $singledownload['downloaddescription']; ?>
						
						<?php if($singledownload['attachment']){ ?>
						<h3 style="color: #3c763d;">Download File: <a target="_blank" href="<?php echo base_url(); ?>uploads/downloads/<?php echo $singledownload['attachment']; ?>">Click Here</a></h3>
						<?php }else{} ?>
					<?php }else{ ?>
					<h3>ডাউনলোড কর্নার </h3>
						<table class="table table-striped table-bordered dataTable">
							<tbody>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Description</th>
									<th>Download</th>
								</tr>
								<?php $sl=1; foreach ($downloads as $download) { ?>
									<tr>
										<td><?php echo $sl++; ?></td>
										<td><?php echo $download['downloadtitle']; ?></td>
										<td>
										<?php 
										$downloadid=$download['downloadid'];
										$string = $download['downloaddescription'];
											if (strlen($string) > 200) {
											$trimstring = substr($string, 0, 200). ' <a href="download/'.$downloadid.'">More...</a>';
											} else {
											$trimstring = $string;
											}
											echo $trimstring;
										?>
										
										</td>
										<td>
										<?php $note=$download['attachment']; if($note){ ?>
										<a href="<?php echo base_url(); ?>uploads/downloads/<?php echo $download['attachment']; ?>" target="_blank">Download</a>
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