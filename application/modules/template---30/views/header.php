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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    
    
    
    <body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <?php
        //var_dump($settings);
        foreach ($settings as $setting) {
            ?>
            <div class="header">
                <div class="container ">
                    <div class="banner">
                        <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>uploads/settings/<?php echo $setting['instituteheader']; ?>" alt="banner"></a>
                    </div>

                </div>
                <div class="container">
                    <?php include 'view_mainmenus.php'; ?>
                    <?php
                    //$this->load->view($module .'/'. $view_mainmenus);
                    ?>
                </div>
                
            </div>
        <?php } ?>

        <div class="container">
                    <!-- <marquee>
                    <?php //foreach($news as $singlenews){   ?>
                         <a href="<?php //echo base_url();  ?>latestnews/<?php //echo $singlenews['newsid'];  ?>"><?php //echo $singlenews['newstitle'];  ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php //}   ?>
                     </marquee>-->

                   <!-- <marquee>
                        <?php foreach($news as $singlenews){   ?>
                             <a href="<?php echo base_url();  ?>latestnews/<?php echo $singlenews['newsid'];  ?>"><?php echo $singlenews['newstitle'];  ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php }   ?>
                     </marquee>-->
                    <!--
                    <div class="tickercontainer">
                        <div class="mask">
                            <ul id="ticker01">
                                <li><span>10/10/2007</span><a href="#">The first thing ...</a></li>
                                <li><span>10/10/2007</span><a href="#">End up doing is ...</a></li>
                                <li><span>10/10/2007</span><a href="#">The code that you ...</a></li>
                            </ul>
                        </div>
                    </div>-->
                    
                    
                    
                    <div class="inWrap">
                        <div class="ticker">
                                <span>খবরঃ </span>
                                <div  class="caroufredsel_wrapper">
                                    <ul>
                                        <?php foreach($news as $singlenews){   ?>
                                        <li><a href="<?php echo base_url();  ?>latestnews/<?php echo $singlenews['newsid'];  ?>"><?php echo $singlenews['newstitle'];  ?></a></li>
                             
                        <?php }   ?>
                                        <!--<li><a href="#">এই প্রতিষ্ঠানের ওয়েবসাইট এর তথ্য হালনাগাদ এবং সফটওয়্যার অটোমেশন এর কার্যক্রম চলছে, পরিচালনায় ই-সফট-এরিনা লিমিটেড।</a></li>
                                        <li><a href="#">বিভিন্ন পেজ এ সম্পূর্ণ তথ্য না থাকায় আমরা আন্তরিক ভাবে দুঃখিত।</a></li>
                                        <li><a href="#">এই প্রতিষ্ঠানের ওয়েবসাইট এর তথ্য হালনাগাদ এবং সফটওয়্যার অটোমেশন এর কার্যক্রম চলছে, পরিচালনায় ই-সফট-এরিনা লিমিটেড।</a></li>
                                        <li><a href="#">বিভিন্ন পেজ এ সম্পূর্ণ তথ্য না থাকায় আমরা আন্তরিক ভাবে দুঃখিত।</a></li>
                                        <li><a href="#">এই প্রতিষ্ঠানের ওয়েবসাইট এর তথ্য হালনাগাদ এবং সফটওয়্যার অটোমেশন এর কার্যক্রম চলছে, পরিচালনায় ই-সফট-এরিনা লিমিটেড।</a></li>
                                        <li><a href="#">বিভিন্ন পেজ এ সম্পূর্ণ তথ্য না থাকায় আমরা আন্তরিক ভাবে দুঃখিত।</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
                
                
                
                
	
    
		