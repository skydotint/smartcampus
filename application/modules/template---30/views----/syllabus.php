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
					//var_dump($singlesyllabus);
					if($id){ ?>
					<h3><?php echo $singlesyllabus['syllabustitle']; ?></h3>
    					<?php echo $singlesyllabus['syllabusdescription']; ?>
						
						<?php if($singlesyllabus['attachment']){ ?>
						<h3 style="color: #3c763d;">Download File: <a target="_blank" href="<?php echo base_url(); ?>uploads/syllabus/<?php echo $singlesyllabus['attachment']; ?>">Click Here</a></h3>
						<?php }else{} ?>
					<?php }else{ ?>
					<h3>পাঠ্যতালিকা</h3>
						<table class="table table-striped table-bordered dataTable">
							<tbody>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Description</th>
									<th>Published</th>
									<th>Download</th>
								</tr>
								<?php $sl=1; foreach ($syllabuss as $syllabus) { ?>
									<tr>
										<td><?php echo $sl++; ?></td>
										<td><?php echo $syllabus['syllabustitle']; ?></td>
										<td>
										<?php 
										$syllabusid=$syllabus['syllabusid'];
										$string = $syllabus['syllabusdescription'];
											if (strlen($string) > 200) {
											$trimstring = substr($string, 0, 200). ' <a href="syllabus/'.$syllabusid.'">More...</a>';
											} else {
											$trimstring = $string;
											}
											echo $trimstring;
										?>
										
										</td>
										<td><?php echo $syllabus['publishdate']; ?></td>
										<td>
										<?php $note=$syllabus['attachment']; if($note){ ?>
										<a target="_blank" href="<?php echo base_url(); ?>uploads/syllabus/<?php echo $syllabus['attachment']; ?>">Download</a>
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