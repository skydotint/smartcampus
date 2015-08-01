<?php include 'header.php';?>
		<?php foreach($settings as $setting) { ?>
        <div class="container">
            <div class="row marginTop30">
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="sliderSection">
                        <div class="topSlider">
                            <ul class="bxslider">
							<?php
								$this->load->view($module .'/'. $view_slides);
							?>
                            </ul>
                            <a href="#" class="pager-prev"><i class="icon-chevron-left"></i></a>
                            <a href="#" class="pager-next"><i class="icon-chevron-right"></i></a>
                        </div>
                        <div class="clear"></div>
                        <div class="schoolCorner">
                            <h2>শিক্ষক, শিক্ষার্থী ও অভিভাবক কর্ণার</h2>
                            <div class="clear"></div>
                            <div class="columnOne"><a href="<?php echo base_url(); ?>login"><img src="<?php echo base_url(); ?>feassets/images/tcorner.jpg" alt="tcorner" /></a></div>
                            <div class="columnTwo"><a href="<?php echo base_url(); ?>login"><img src="<?php echo base_url(); ?>feassets/images/stcorner.jpg" alt="stcorner" /></a></div>
                            <div class="columnThree"><a href="<?php echo base_url(); ?>login"><img src="<?php echo base_url(); ?>feassets/images/stacorner.jpg" alt="stacorner" /></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <?php
                        $this->load->view($module .'/'. $view_settings);
                    ?>
                </div>
            </div>
            <div class="clear"></div>
            <div class="row margin15">
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                    <div class="headmasterQuote">
                        <h1 class="blue">প্রতিষ্ঠান প্রধানের বার্তা - (<?php echo $setting['adminname']; ?>)</h1>
                        <div class="clear"></div>

                        <p>
                            <img class="alignRight" src="<?php echo base_url(); ?>uploads/settings/<?php echo $setting['headteacherphoto']; ?>" alt="Head Teacher">
							<?php 
							//echo $setting['headmessage'];
							$settingsid=$setting['settingsid'];
							$string = $setting['headmessage'];
								if (strlen($string) > 1800) {
								$trimstring = substr($string, 0, 1800). ' <a href="page/messageofheadteacher">বিস্তারিত...</a>';
								} else {
								$trimstring = $string;
								}
								echo $trimstring;
							?>
                        </p>

                    </div>
                    <div class="clear"></div>
                    <div class="impLinksWrap">
                        <div class="firstColumn">
                            <h4 style="background: #278AF0">প্রয়োজনীয় লিঙ্কস (অন সাইট)</h4>
                            <ul>
				<?php echo $setting['importantlinks']; ?>
                            </ul>
                        </div>
                        <div class="secondColumn">
                            <h4 style="background: #7AB700">প্রয়োজনীয় লিঙ্কস (অফ সাইট)</h4>
                            <ul>
				<?php echo $setting['importantlinksoffsite']; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <a href="<?php echo base_url(); ?>onlineadmission"><button class="admission">অনলাইন ভর্তির আবেদন</button></a>
                    <a href="<?php echo base_url(); ?>download"><button class="formDownload">ভর্তির ফর্ম ডাউনলোড</button></a>
                    <a href="<?php echo base_url(); ?>academiccouncill"><button class="managingCommettee">পরিচালনা পর্ষদ</button></a>
                    <div class="clear"></div>

                    <div class="customTab">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">সর্বশেষ সংবাদ</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">নোটিশ বোর্ড</a></li>
                            <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">ডাউনলোড</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <ul>
								<?php foreach($news as $singlenews){ ?>
                                    <li><a href="<?php echo base_url(); ?>latestnews/<?php echo $singlenews['newsid']; ?>"><?php echo $singlenews['newstitle']; ?></a></li>
								<?php } ?>
								<li><a href="<?php echo base_url(); ?>latestnews">সকল সংবাদ</a></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <ul>
                                    <?php foreach($notices as $notice){ ?>
                                    <li><a href="<?php echo base_url(); ?>notice/<?php echo $notice['noticeid']; ?>"><?php echo $notice['noticetitle']; ?></a></li>
								<?php } ?>
								<li><a href="<?php echo base_url(); ?>notice">সকল নোটিশ</a></li>

                                </ul>
                            </div>
							<div role="tabpanel" class="tab-pane" id="tab3">
                                <ul>
                                    <?php foreach($downloads as $download){ ?>
                                    <li><a href="<?php echo base_url(); ?>uploads/downloads/<?php echo $download['attachment']; ?>" target="_blank"><?php echo $download['downloadtitle']; ?></a></li>
								<?php } ?>
								<li><a href="<?php echo base_url(); ?>download">সকল ডাউনলোড</a></li>
								

                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div>
		<?php } ?>
 <?php include 'footer.php';?>