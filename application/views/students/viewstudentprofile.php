<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">View <?php echo $students['firstname']; ?> Profile</div>

    </div>
	<?php //var_dump($students); ?>
    <div class="block-content collapse in">
        <div class="span12">
             	<div class="control-group">First Name <?php echo $students['firstname']; ?></div>
					<div class="control-group">Middle Name <?php echo $students['middlename']; ?></div>
					<div class="control-group">Last Name <?php echo $students['lastname']; ?></div>
					<div class="control-group">Phone<?php echo $students['sphone']; ?></div>
					<div class="control-group">Class<?php echo $students['class']; ?></div>
					<div class="control-group">Section<?php echo $students['section']; ?></div>
					<div class="control-group">Mailing Address<?php echo $students['mailingaddress']; ?></div>
					<div class="control-group">Gender<?php echo $students['gender']; ?></div>
					<div class="control-group">Date of Birth<?php echo $students['birthdate']; ?></div>
					<div class="control-group">Email<?php echo $students['email']; ?></div>
					<div class="control-group">Join Date<?php echo $students['joindate']; ?></div>
					<div class="control-group">Student Type<?php echo $students['enrollmentstatus']; ?></div>
					<div class="control-group">Student Photo <img src="<?php echo base_url(); ?>uploads/<?php echo $students['photo']; ?>" /></div>
                    <hr/>
        </div>
    </div>
</div>
