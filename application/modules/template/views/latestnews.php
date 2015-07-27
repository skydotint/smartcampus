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
					//var_dump($singlenews);
					if($id){ ?>
					<h3><?php echo $singlenews['newstitle']; ?></h3>
    					<?php echo $singlenews['newsdescription']; ?>
					<?php }else{ ?>
					<h1 class="blue">সর্বশেষ সংবাদ</h1>
						<table class="table table-striped table-bordered dataTable">
							<tbody>
								<tr>
									<th>#</th>
									<th>শিরোনাম</th>
									<th>বর্ণনা</th>
									<th>প্রকাশকাল</th>
								</tr>
								<?php $sl=1; foreach ($allnews as $news) { ?>
									<tr>
										<td><?php echo $sl++; ?></td>
										<td><?php echo $news['newstitle']; ?></td>
										<td>
										<?php 
										$newsid=$news['newsid'];
										$string = $news['newsdescription'];
											if (strlen($string) > 200) {
											$trimstring = substr($string, 0, 200). ' <a href="latestnews/'.$newsid.'">More...</a>';
											} else {
											$trimstring = $string;
											}
											echo $trimstring;
										?>
										
										</td>
										<td><?php echo $news['publishdate']; ?></td>
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