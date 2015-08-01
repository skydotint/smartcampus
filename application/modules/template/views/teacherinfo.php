<?php include 'header.php'; ?>
<div class="container">
    <div class="row margin15">

        <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
            <div class="leftinner_content">
                <div class="span9" id="content" >
                    <div id="successmsg" class="alert alert-success" style="display: none;"></div>
                    <div id="errormsg" class="alert alert alert-error" style="display: none;"></div>
                </div>
                <div class="singlePageContent">
                    <h1 class="blue"><?php echo $singleteacher['firstname']; ?> <?php echo $singleteacher['middlename']; ?> <?php echo $singleteacher['lastname']; ?> এর তথ্য </h2>
                        <div class="singleStdn">
                            <div class="singleStdnInfo">
                                <div class="singImageAll">
                                    <img src="<?php echo base_url(); ?>uploads/teachers/<?php
                                    if ($singleteacher['photo']) {
                                        echo $singleteacher['photo'];
                                    } else {
                                        echo "noimage.jpg";
                                    }
                                    ?>">
                                </div>
                                <div class="sinImageDetails">
                                    <ul class="singleInfoUl">
                                        <li><span class="stdnSingleSpanLeft">পূর্ণ নাম</span>
                                            <span class="stdnSingleSpanRight"><?php echo $singleteacher['firstname']; ?> <?php echo $singleteacher['middlename']; ?> <?php echo $singleteacher['lastname']; ?></span>
                                        </li>
                                        <li>
											<span class="stdnSingleSpanLeft">পদবী </span>
											<span class="stdnSingleSpanRight"><?php echo $singleteacher['designation']; ?></span>
										</li>
										<li>
											<span class="stdnSingleSpanLeft">বাবার নাম </span>
											<span class="stdnSingleSpanRight"><?php echo $singleteacher['fathername']; ?></span>
										</li>
										<li>
											<span class="stdnSingleSpanLeft">মাতার নাম </span>
											<span class="stdnSingleSpanRight"><?php echo $singleteacher['mothername']; ?></span>
										</li>
                                        <li>
											<span class="stdnSingleSpanLeft">মোবাইল নম্বর</span>
											<span class="stdnSingleSpanRight"><?php echo $singleteacher['tphone']; ?></span>
										</li>
                                    </ul>    
                                </div>
                            </div>



                            <div class="singleStdnInfo">
                                <h2 class="blue bluenone">ব্যক্তিগত তথ্য</h2>
                                <ul class="singleInfoUl">
                                    <li><span class="stdnSingleSpanLeft">পূর্ণ নাম</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singleteacher['firstname']; ?> <?php echo $singleteacher['middlename']; ?> <?php echo $singleteacher['lastname']; ?></span>
                                    </li>
                                    <li><span class="stdnSingleSpanLeft">বাবার নাম </span>
                                        <span class="stdnSingleSpanRight"><?php echo $singleteacher['fathername']; ?></span>
                                    </li>
									<li><span class="stdnSingleSpanLeft">মাতার নাম </span>
                                        <span class="stdnSingleSpanRight"><?php echo $singleteacher['mothername']; ?></span>
                                    </li>
									<li><span class="stdnSingleSpanLeft">পদবী </span>
                                        <span class="stdnSingleSpanRight"><?php echo $singleteacher['designation']; ?></span>
                                    </li>
									<li><span class="stdnSingleSpanLeft">মোবাইল নম্বর</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singleteacher['tphone']; ?></span>
                                    </li>
									<li><span class="stdnSingleSpanLeft">জাতীয় পরিচয়পত্র নম্বর</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singleteacher['nationalid']; ?></span>
                                    </li>
									<li><span class="stdnSingleSpanLeft">স্থায়ী ঠিকানা </span>
                                        <span class="stdnSingleSpanRight"><?php echo $singleteacher['permanentaddress']; ?></span>
                                    </li>
									<li><span class="stdnSingleSpanLeft">বর্তমান ঠিকানা</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singleteacher['mailingaddress']; ?></span>
                                    </li>
									<li><span class="stdnSingleSpanLeft">ধর্ম</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singleteacher['religion']; ?></span>
                                    </li>
									<li><span class="stdnSingleSpanLeft">লিঙ্গ</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singleteacher['gender']; ?></span>
                                    </li>
									<li><span class="stdnSingleSpanLeft">জন্ম তারিখ</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singleteacher['birthdate']; ?></span>
                                    </li>
									<li><span class="stdnSingleSpanLeft">ইমেইল</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singleteacher['email']; ?></span>
                                    </li>
									<li><span class="stdnSingleSpanLeft">এম পি ও  আইডি  নম্বর</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singleteacher['mpoid']; ?></span>
                                    </li> 
                                </ul>    
                            </div>

                            <div class="singleStdnInfo">
                                <h2 class="blue bluenone">শিক্ষাগত যোগ্যতা</h2>
                                <ul class="singleInfoUl">
                                    <li>
										<span class="stdnSingleSpanLeft">এস এস সি</span>
                                        <span class="stdnSingleSpanRight">বোর্ড : <?php echo $singleteacher['sscboard']; ?> গ্রুপ : <?php echo $singleteacher['sscgroup']; ?> রেজাল্ট : <?php echo $singleteacher['sscresult']; ?> পাসের সন : <?php echo $singleteacher['sscyear']; ?></span>
                                    </li>
									<li>
										<span class="stdnSingleSpanLeft">এইচ এস সি</span>
                                        <span class="stdnSingleSpanRight">বোর্ড : <?php echo $singleteacher['sscboard']; ?> গ্রুপ : <?php echo $singleteacher['sscgroup']; ?> রেজাল্ট : <?php echo $singleteacher['sscresult']; ?> পাসের সন : <?php echo $singleteacher['sscyear']; ?></span>
                                    </li>
									<li>
										<span class="stdnSingleSpanLeft">বি.এ (পাশ)</span>
                                        <span class="stdnSingleSpanRight">বোর্ড : <?php echo $singleteacher['sscboard']; ?> গ্রুপ : <?php echo $singleteacher['sscgroup']; ?> রেজাল্ট : <?php echo $singleteacher['sscresult']; ?> পাসের সন : <?php echo $singleteacher['sscyear']; ?></span>
                                    </li>
									
									<li>
										<span class="stdnSingleSpanLeft">এম.এ</span>
                                        <span class="stdnSingleSpanRight">বোর্ড : <?php echo $singleteacher['sscboard']; ?> গ্রুপ : <?php echo $singleteacher['sscgroup']; ?> রেজাল্ট : <?php echo $singleteacher['sscresult']; ?> পাসের সন : <?php echo $singleteacher['sscyear']; ?></span>
                                    </li>
									<li>
										<span class="stdnSingleSpanLeft">বি.এড</span>
                                        <span class="stdnSingleSpanRight">বোর্ড : <?php echo $singleteacher['sscboard']; ?> গ্রুপ : <?php echo $singleteacher['sscgroup']; ?> রেজাল্ট : <?php echo $singleteacher['sscresult']; ?> পাসের সন : <?php echo $singleteacher['sscyear']; ?></span>
                                    </li>
                                    
                                </ul>    
                            </div>




                        </div>
                </div> 
            </div>
        </div>



        <?php include 'view_rightsidebar.php'; ?>
    </div>
</div>
<?php include 'footer.php'; ?>