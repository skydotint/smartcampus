<div class="schoolSection bxShadow">
    <?php foreach($settings as $setting) { ?>
    <div class="map">
	         <iframe src="<?php echo $setting['googlemap']; ?>"  [removed] allowfullscreen></iframe> 
        <?php //echo $setting['googlemap']; ?>
    </div>
    <div class="schooHeader">
        <div class="schoolLogo">
            <?php echo settingsImg($setting['institutelogo']); ?>
        </div>
        <div class="schoolName">
            <h3 style="font-size:22px;"><?php echo $setting['institutename']; ?></h3>
            <p><span><?php echo $setting['slogan']; ?></span><br /><br />
            <span><a class="btn btn-default btn-sm" href="<?php base_url() ?>gallery">গ্যালারী</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-default btn-sm" href="<?php base_url() ?>contact">যোগাযোগ</a></span></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="schoolInfo">
        <p><?php echo $setting['importantinfo']; ?></p>
        <ul>
        <li><b>স্থাপিত :</b> <?php echo $setting['established']; ?></li>
        <li><b>ই আই আই এন:</b> <?php echo $setting['eiinnumber']; ?></li>
<li><b>সময় :</b> <?php echo $setting['schooltime']; ?></li>
<li><b>ফোন :</b> <?php echo $setting['institutephone']; ?></li>
<li><b>ইমেল:</b> <?php echo $setting['instituteemail']; ?></li>
            <li><b>ঠিকানা :</b>  <?php echo $setting['instituteaddress']; ?></li>
            
            
            
        </ul>
    </div>
    <?php } ?>
</div>