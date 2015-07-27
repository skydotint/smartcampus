<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo lang('create_user_heading'); ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">

            <div id="infoMessage"><?php echo $message; ?></div>

            <?php echo form_open("auth/create_user"); ?>

            <p>
                <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
                <?php echo form_input($first_name); ?>
            </p>

            <p>
                <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
                <?php echo form_input($last_name); ?>
            </p>

            <p>
                <?php echo lang('create_user_company_label', 'company'); ?> <br />
                <?php echo form_input($company); ?>
            </p>

            <p>
                <?php echo lang('create_user_email_label', 'email'); ?> <br />
                <?php echo form_input($email); ?>
            </p>

            <p>
                <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
                <?php echo form_input($phone); ?>
            </p>

            <p>
                <?php echo lang('create_user_password_label', 'password'); ?> <br />
                <?php echo form_input($password); ?>
            </p>

            <p>
                <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
                <?php echo form_input($password_confirm); ?>
            </p>


            <p><?php echo form_submit('submit', lang('create_user_submit_btn'), "class='btn btn-primary'"); ?></p>

            <?php echo form_close(); ?>
            
        </div>
    </div>
</div>