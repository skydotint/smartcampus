<?php
	//error_reporting(0);
    $count_my_page = "hitcounter.txt";
    $hits = file($count_my_page);
    $hits[0] ++;
    $fp = fopen($count_my_page , "w");
    fputs($fp , "$hits[0]");
    fclose($fp);
    $totalvisitor =  $hits[0];         
?>
<div class="footer">
    <div class="container">
		<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <h3 style="color: #727272">ফটো গ্যালারী</h3>
            <ul id="photoGallaryNew">
                <?php foreach ($photos as $photo) { ?>
                <li>
                        <a href="<?php echo base_url(); ?>uploads/photos/<?php echo $photo['photo']; ?>"><img src="<?php echo base_url(); ?>uploads/photos/<?php echo $photo['photo']; ?>" alt="Photo Gallery"></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-lg-2 col-md-5 col-sm-12 col-xs-12">
            <h3 style="color: #727272">মোট পরিদর্শক</h3>
             <p>  
&raquo; <?php echo bn2enNumber($vcount['day_value']) ?> আজ<br>
&raquo; <?php echo bn2enNumber($vcount['yesterday_value']) ?> গতকাল<br>
&raquo; <?php echo bn2enNumber($vcount['week_value'] )?> সপ্তাহ<br>
&raquo; <?php echo bn2enNumber($vcount['month_value']) ?> মাস<br>
&raquo; <?php echo bn2enNumber($vcount['year_value'] )?> বছর<br>
&raquo; <?php echo bn2enNumber($vcount['all_value'] )?> মোট   </p>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-12 col-xs-12">
			<h3 style="color: #727272">ফেসবুক</h3>
				<div class="fb-page" data-href="https://www.facebook.com/pages/Pakutia-Public-School-College/256126211110707" data-width="260" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Pakutia-Public-School-College/256126211110707"><a href="https://www.facebook.com/pages/Pakutia-Public-School-College/256126211110707">Pakutia Public School &amp; College</a></blockquote></div></div>
			</div>
        <!-- -->
    </div>
    <div class="clear"></div>
    <div class="copyright">কপিরাইট  © ২০১৫ পাকুটিয়া পাবলিক স্কুল এন্ড কলেজ । কারিগরী সহায়তা <a href="http://www.ideatweaker.com/" target="_blank">আইডিয়া টুইকার</a></div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="http://users.tpg.com.au/j_birch/plugins/superfish/js/superfish.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>feassets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>feassets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>feassets/js/jquery.magnific-popup.min.js"></script>

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
			adaptiveHeight: false,
            //mode: 'fade',
            captions: true,
            pager: false
        });

        $('#photoGallaryNew').magnificPopup({
            delegate: 'a',
            type: 'image',
            image: {
                cursor: null,
                titleSrc: 'title'
            },
            gallery: {
                enabled: true,
                preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
                navigateByImgClick: true
            }
        });

    });
</script>
</body>

</html>