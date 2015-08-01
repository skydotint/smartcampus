<?php include 'header.php'; ?>
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
                //var_dump($singletalentstudent);
                if ($id) {
                    ?>    					
                    <div class="singlePageContent">
                        <h1 class="blue"><?php echo $singletalentstudent['firstname']; ?> <?php echo $singletalentstudent['middlename']; ?> <?php echo $singletalentstudent['lastname']; ?> এর তথ্য </h1>
                        <div class="singleStdn">
                            <div class="singleStdnInfo">
                                <img src="<?php echo base_url(); ?>uploads/students/<?php
                                if ($singletalentstudent['photo']) {
                                    echo $singletalentstudent['photo'];
                                } else {
                                    echo "noimage.jpg";
                                }
                                ?>">
                                <ul class="singleInfoUl">
                                    <li><span class="stdnSingleSpanLeft">পূর্ণ নাম</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singletalentstudent['firstname']; ?> <?php echo $singletalentstudent['middlename']; ?> <?php echo $singletalentstudent['lastname']; ?></span>
                                    </li>
                                    <li><span class="stdnSingleSpanLeft">লিঙ্গ</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singletalentstudent['gender']; ?></span>
                                    </li>
                                    <li><span class="stdnSingleSpanLeft">বিভাগ</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singletalentstudent['stdgroup']; ?> </span>
                                    </li>
                                    <li><span class="stdnSingleSpanLeft">স্থায়ী ঠিকানা</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singletalentstudent['mailingaddress']; ?></span>
                                    </li>
                                    <li><span class="stdnSingleSpanLeft">শিরোনাম</span>
                                        <span class="stdnSingleSpanRight"><?php echo $singletalentstudent['title']; ?></span>
                                    </li>
                                    <li><span class="stdnSingleSpanLeft">বিস্তারিত </span>
                                        <span class="stdnSingleSpanRight"><?php echo $singletalentstudent['description']; ?></span>
                                    </li>
                                </ul>    
                            </div>

                        </div>
                    </div> 
<?php } else { ?>
                    <h1 class="blue">কৃতি শিক্ষার্থীদের তালিকা</h1>
                    <table class="table table-striped table-bordered dataTable">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Phone No</th>
                                <th>View Details</th>
                            </tr>
    <?php $sl = 1;
    foreach ($talentstudents as $talentstudent) {
        ?>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo $talentstudent['firstname']; ?></td>
                                    <td>
                                        <?php
                                        $talentstudentid = $talentstudent['talentedstudentid'];
                                        $string = $talentstudent['description'];
                                        if (strlen($string) > 200) {
                                            $trimstring = substr($string, 0, 200);
                                        } else {
                                            $trimstring = $string;
                                        }
                                        echo $trimstring;
                                        ?>

                                    </td>
                                    <td><?php echo $talentstudent['sphone']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>talentstudent/<?php echo $talentstudent['talentedstudentid']; ?>">View Details</a>
                                    </td>
                                </tr>
                    <?php } ?>

                        </tbody>
                    </table>
        <?php } ?>
            </div>
        </div>
<?php include 'view_rightsidebar.php'; ?>
    </div>
</div>
<?php include 'footer.php'; ?>