<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $title; ?></title>
		<script type="text/javascript">var baseurl = "<?php echo base_url();?>";</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>feassets/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://users.tpg.com.au/j_birch/plugins/superfish/css/superfish.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>feassets/css/custom1.css" rel="stylesheet">
        <!--Bx slider-->
        <script src="<?php echo base_url(); ?>feassets/js/jquery.bxslider.min.js"></script>
        <link href="<?php echo base_url(); ?>feassets/css/jquery.bxslider.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>feassets/css/magnific-popup.css">
    </head>
	
    <body>
	<?php //var_dump($settings);
	foreach($settings as $setting){ ?>
        <div class="header">
            <div class="container ">
                <div class="banner">
                    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>uploads/settings/<?php echo $setting['instituteheader']; ?>" alt="banner"></a>
                </div>
                
            </div>
			<div class="container">
			<?php include 'view_mainmenus.php';?>
                <?php
                    //$this->load->view($module .'/'. $view_mainmenus);
                ?>
            </div>
			<!-- <div class="container">
				<marquee>
				<?php //foreach($news as $singlenews){ ?>
				 <a href="<?php //echo base_url(); ?>latestnews/<?php //echo $singlenews['newsid']; ?>"><?php //echo $singlenews['newstitle']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php //} ?>
				</marquee>
			</div> -->
        </div>
<?php } ?>
		