<?php include 'header.php'; ?>
<div class="container">
    <div class="row margin15">
        <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
            <div class="leftinner_content">
                <div class="span9" id="content" >
                    <div id="successmsg" class="alert alert-success" style="display: none;"></div>
                    <div id="errormsg" class="alert alert alert-error" style="display: none;"></div>
                </div>
                <div class="">
				<?php //var_dump($photospage); ?>
                    <div>
                        <h3 style="color: #727272">ফটো গ্যালারী</h3>
                        <ul id="photoGallaryNew">
                            <?php foreach ($photospage as $photo) { ?>
                            <li >
                                    <a href="<?php echo base_url(); ?>uploads/photos/<?php echo $photo->photo; ?>"><img src="<?php echo base_url(); ?>uploads/photos/<?php echo $photo->photo; ?>" alt="Photo Gallery"></a>
                                </li>
                            <?php } ?>
                        </ul>

                    </div>
					<?php echo $links; ?>
                </div>
               
            </div>
        </div>
        <?php include 'view_rightsidebar.php'; ?>
    </div>
</div>

<?php include 'footer.php'; ?>



