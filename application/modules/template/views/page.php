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
					//var_dump($singlepage);
					if($pageroute){ ?>
					<h1 class="blue"><?php echo $singlepage['pagetitle']; ?></h1>
    					<?php //echo $singlepage['description']; 
						//echo html_entity_decode(htmlspecialchars(htmlentities($singlepage['description'])));
						$original_input = $singlepage['description'];
						$html_encoded = htmlentities($original_input);
						//echo $html_encoded;
						$html_decoded = html_entity_decode($html_encoded);
						echo $html_decoded;
						?>
					<?php } ?>

                    </div>
                </div>
				<?php include 'view_rightsidebar.php';?>
				</div>
            </div>
        <?php include 'footer.php';?>