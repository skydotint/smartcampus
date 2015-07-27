<div class="footer">
            <div class="container">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="phGallery">
                        <h3 style="color: #727272">ফটো গ্যালারী</h3>
                        <ul>
                        <?php foreach($photos as $photo) { ?>
							<li><a href="<?php echo base_url(); ?>uploads/photos/<?php echo $photo['photo']; ?>" rel="prettyPhoto" title="Photo Gallery"><img src="<?php echo base_url(); ?>uploads/photos/<?php echo $photo['photo']; ?>" alt="Photo Gallery"></a></li>
                        <?php } ?>
						</ul>
                    </div>

                </div>
            </div>
            <div class="clear"></div>
            <div class="copyright">© ২০১৫ আইডিয়া টুইকার</div>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="http://users.tpg.com.au/j_birch/plugins/superfish/js/superfish.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>feassets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>feassets/js/custom.js"></script>


        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $.noConflict();

                $('#myTabs a').click(function (e) {
                    e.preventDefault()
                    $(this).tab('show')
                })

                $('.bxslider').bxSlider({
                    auto: true,
                    autoControls: false,
                    //mode: 'fade',
                    captions: true,
                    pager: false
                });

                $("a[rel^='prettyPhoto']").prettyPhoto();

                //bxslider custom pager

            });
        </script>
    </body>
	 
</html>