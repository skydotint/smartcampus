<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>School Template</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>feassets/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://users.tpg.com.au/j_birch/plugins/superfish/css/superfish.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>feassets/css/custom1.css" rel="stylesheet">

        <!--Bx slider-->
        <script src="<?php echo base_url(); ?>feassets/js/jquery.bxslider.min.js"></script>
        <link href="<?php echo base_url(); ?>feassets/css/jquery.bxslider.css" rel="stylesheet" />

        <!--Pretty Photo-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>feassets/css/prettyPhoto.css" type="text/css" media="screen"  />
        <script src="<?php echo base_url(); ?>feassets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>



    </head>
	
    <body>
        <div class="header">
            <div class="container">
			<?php include 'view_mainmenus.php';?>
                <?php
                    //$this->load->view($module .'/'. $view_mainmenus);
                ?>
            </div>
        </div>
		<marquee>
		<?php foreach($news as $singlenews){ ?>
         <a href="<?php echo base_url(); ?>latestnews/<?php echo $singlenews['newsid']; ?>"><?php echo $singlenews['newstitle']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php } ?>
		</marquee>