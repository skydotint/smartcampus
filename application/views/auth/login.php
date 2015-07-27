<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <!-- Bootstrap -->

        <?php echo put_headers(); ?>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?php echo add_js('modernizr-2.6.2-respond-1.1.0.min.js'); ?>
    </head>
    <body id="login">
        <div class="container">
            <div id="infoMessage"><?php echo $message; ?></div>

            <?php echo form_open("auth/login", array('class' => 'form-signin')); ?>
            <?php if(isset($title)) { ?>
                <center><img src="<?php echo $title; ?>" alt="Samrat Campus" /></center>
                <br/><br/>
            <?php } else { ?>
                <h3><?php echo lang('login_heading'); ?></h3>
            <?php } ?>
            <p><?php echo lang('login_subheading'); ?></p>
            <p>
                <?php echo lang('login_identity_label', 'identity'); ?>
                <?php echo form_input($identity); ?>
            </p>

            <p>
                <?php echo lang('login_password_label', 'password'); ?>
                <?php echo form_input($password); ?>
            </p>

            <label class="checkbox">
                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?> Remember me
            </label>
            
            <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>

            <p><?php echo form_submit('submit', lang('login_submit_btn'), "class='btn btn-primary'"); ?></p>

            <?php echo form_close(); ?>


        </div> <!-- /container -->
        <?php echo put_footer(); ?>
    </body>
</html>