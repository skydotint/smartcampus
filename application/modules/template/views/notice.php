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
						<h3 style="color: #3c763d;">ডাউনলোড  ফাইল: <a target="_blank" href="<?php echo base_url(); ?>uploads/notice/<?php echo $singlenotice['attachment']; ?>">ক্লিক করুন</a></h3>
						<?php }else{} ?>
					<?php }else{ ?>
					<h1 class="blue">নোটিশ বোর্ড</h1>
						<table class="table table-striped table-bordered dataTable download">
							<tbody>
								<tr>
									<th>#</th>
									<th>শিরোনাম</th>
									<th>বর্ণনা</th>
									<th>প্রকাশকাল</th>
									<th class="thDownload">ডাউনলোড</th>
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
											$trimstring = substr($string, 0, 200). ' <a href="notice/'.$noticeid.'" >বিস্তারিত ...</a>';
											} else {
											$trimstring = $string;
											}
											echo $trimstring;

										?>
										
										</td>
										<td><?php echo $notice['publishdate']; ?></td>
										<td class="thDownload">
										<?php  
										
										$note=$notice['attachment']; if($note){
											$ext = pathinfo($note, PATHINFO_EXTENSION);
											//echo $ext;
											if($ext=="pdf"){
										?>
										<a href="<?php echo base_url(); ?>uploads/notice/<?php echo $notice['attachment']; ?>" target="_blank"><img src="<?php echo base_url(); ?>feassets/images/pdf.png"></a>
											<?php }elseif($ext=="xls"){ ?>
											<a href="<?php echo base_url(); ?>uploads/notice/<?php echo $notice['attachment']; ?>" target="_blank"><img src="<?php echo base_url(); ?>feassets/images/xls.png"></a>
											<?php }elseif($ext=="xlsx"){ ?>
											<a href="<?php echo base_url(); ?>uploads/notice/<?php echo $notice['attachment']; ?>" target="_blank"><img src="<?php echo base_url(); ?>feassets/images/xls.png"></a>
											<?php }elseif($ext=="doc"){ ?>
											<a href="<?php echo base_url(); ?>uploads/notice/<?php echo $notice['attachment']; ?>" target="_blank"><img src="<?php echo base_url(); ?>feassets/images/docx.png"></a>
											<?php }elseif($ext=="docx"){ ?>
											<a href="<?php echo base_url(); ?>uploads/notice/<?php echo $notice['attachment']; ?>" target="_blank"><img src="<?php echo base_url(); ?>feassets/images/docx.png"></a>
											<?php }else{ ?>
											<a href="<?php echo base_url(); ?>uploads/notice/<?php echo $notice['attachment']; ?>" target="_blank"><img src="<?php echo base_url(); ?>feassets/images/download.png"></a>
											<?php } ?>

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