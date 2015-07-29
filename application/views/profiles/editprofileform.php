<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Profile</div>

    </div>
	<?php //var_dump($user); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editprofileForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Password</label>
                        <div class="controls">
							<input name="id" type="hidden" value="<?php echo $user->id; ?>" />
                            <input class="input-xlarge focused" name="password" type="text"> 
                        </div>
                    </div>
                    <hr/>

                    <input id="editprofilebtn" name="editprofilebtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
