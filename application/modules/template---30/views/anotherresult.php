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
					//var_dump($singleanotherresult);
					if($id){ ?>
					<h3><?php echo $singleanotherresult['othersresulttitle']; ?></h3>
    					<?php echo $singleanotherresult['othersresultdescription']; ?>
						
						<?php if($singleanotherresult['attachment']){ ?>
						<h3 style="color: #3c763d;">Download File: <a target="_blank" href="<?php echo base_url(); ?>uploads/othersresult/<?php echo $singleanotherresult['attachment']; ?>">Click Here</a></h3>
						<?php }else{} ?>
					<?php }else{ ?>
					<h1 class="blue">নোটিশ বোর্ড</h1>
						<table class="table table-striped table-bordered dataTable">
							<tbody>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Description</th>
									<th>Published</th>
									<th>Download</th>
								</tr>
								<?php $sl=1; foreach ($anotherresults as $anotherresult) { ?>
									<tr>
										<td><?php echo $sl++; ?></td>
										<td><?php echo $anotherresult['othersresulttitle']; ?></td>
										<td>
										<?php 
										$othersresultid=$anotherresult['othersresultid'];
										$string = $anotherresult['othersresultdescription'];
											if (strlen($string) > 200) {
											$trimstring = substr($string, 0, 200). ' <a href="anotherresult/'.$othersresultid.'">More...</a>';
											} else {
											$trimstring = $string;
											}
											echo $trimstring;
										?>
										
										</td>
										<td><?php echo $anotherresult['publishdate']; ?></td>
										<td>
										<?php $note=$anotherresult['attachment']; if($note){ ?>
										<a target="_blank" href="<?php echo base_url(); ?>uploads/othersresult/<?php echo $anotherresult['attachment']; ?>">Download</a>
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