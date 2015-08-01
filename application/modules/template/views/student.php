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
                    <h1 class="blue">ছাত্র ছাত্রীদের তালিকা<span style="float:right;"><?php echo "<b>মোট:  " . $total . ",  ছাত্র:  " . $male . ",  ছাত্রী:  " . $female . "</b>"; ?></span></h1>
                    <form id="studentSearch" action="">
                        <div class="col-lg-4">
                            <b>শ্রেণী</b> &nbsp;<br>
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
                            <b>সেকশন </b><br>
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
                            <button  type="submit" class="btn btn-primary filterSubmit">প্রেরণ করুন</button>
                        </div>

                        <br><br>
                    </form>


                    <ul class="allstdRes  allstdResChange">
                       <?php foreach ($students as $sinstudent) { ?>
                                <li>
                                    <div class="studentChange">
                                        <a href="<?php echo base_url(); ?>studentinfo/<?php echo $sinstudent->studentid; ?>">
                                            <img src="<?php echo base_url(); ?>uploads/students/<?php echo $sinstudent->photo; ?>">
                                            <span>
												নাম: <?php echo $sinstudent->firstname; ?><br />
												রোলঃ: <?php echo $sinstudent->classroll; ?><br />
												শ্রেণী: <?php echo $sinstudent->class; ?>
                                            </span>
                                            
                                            </a>
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