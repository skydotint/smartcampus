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
                    <h2 class="blue">স্টুডেন্ট ইনফর্মেশন</h2>
                    
                    <form id="studentSearch" action="">
                    
                    <div class="col-lg-4">
                        <b>Class</b> &nbsp;<br>
                        <select class="form-control" name="class">
                            <?php
                            foreach ($classes as $class) {
                                echo '<option value="' . $class['classid'] . '">';
                                echo $class['classname'];
                                echo '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <b>Section </b><br>
                        <select class="form-control" name="section">
                            <?php
                            foreach ($sections as $section) {
                                echo '<option value="' . $section['sectionid'] . '">';
                                echo $section['sectionname'];
                                echo '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <button  type="submit" class="btn btn-primary filterSubmit">Submit</button>
                    </div>
                    
                    <br><br>
                    </form>
                    
                    
                    <ul class="allstdRes">
                        <?php foreach ($students as $sinstudent) { ?>
                            <li>
                                <div class="stdnInfo">
                                    <div class="stdnInfoLeft">
                                        <span class="imageWrap">
                                            <img src="<?php echo base_url(); ?>uploads/students/<?php echo $sinstudent->photo; ?>">
                                        </span>
                                    </div>
                                    <div class="stdnInfoRight">
                                        <p class="name"><?php echo $sinstudent->firstname; ?></p>
                                        <p class="roll">Roll: <?php echo $sinstudent->classroll; ?></p>
                                        <p class="roll">Gender: <?php echo $sinstudent->gender; ?></p>
                                    </div>
                                    <div class="viewDetails">
                                        <a href="<?php echo base_url(); ?>studentinfo/<?php echo $sinstudent->studentid; ?>">View Details</a>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    
                </div>
                <?php echo $links; ?>
            </div>
        </div>
        <?php include 'view_rightsidebar.php'; ?>
    </div>
</div>
<?php include 'footer.php'; ?>