<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $ptitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <div>
                <div class="span3"> <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
                        <li class="active"><a href="#insinfo" data-toggle="tab">Institute Informations</a></li>
                        <li><a href="#admininfo" data-toggle="tab">Administrator Informations</a></li>
                        <li><a href="#inslogo" data-toggle="tab">Institute Logo</a></li>
                        <li><a href="#insheader" data-toggle="tab">Institute Header</a></li>
                        <li><a href="#adminphoto" data-toggle="tab">Administrator Photo</a></li>
                        <li><a href="#headteacher" data-toggle="tab">Head Teacher Message</a></li>
                        <li><a href="#widgets" data-toggle="tab">Widgets</a></li>
                    </ul>
                </div>
                <div class="span9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="insinfo">
                            <?php foreach ($settings as $setting) { ?>
                            
                                <form class="form-horizontal form-groups-bordered validate" id="settingsFormInsInfo" action="" enctype="multipart/form-data">
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Institute Name</label>
                                        <div class="controls">
                                            <input name="settingsid" type="hidden" value="<?php echo $setting['settingsid']; ?>" />
                                            <input class="input-xlarge focused" name="institutename" type="text" value="<?php echo $setting['institutename']; ?>">
                                        </div>
                                    </div>
									
									<div class="control-group">
                                        <label class="control-label" for="focusedInput">Slogan</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" name="slogan" type="text" value="<?php echo $setting['slogan']; ?>">
                                        </div>
                                    </div>
									
									<div class="control-group">
                                        <label class="control-label" for="focusedInput">Established</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" name="established" type="text" value="<?php echo $setting['established']; ?>">
                                        </div>
                                    </div>
									
									<div class="control-group">
                                        <label class="control-label" for="focusedInput">EIIN Number</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" name="eiinnumber" type="text" value="<?php echo $setting['eiinnumber']; ?>">
                                        </div>
                                    </div>
									
									<div class="control-group">
                                        <label class="control-label" for="focusedInput">MPO Informations</label>
                                        <div class="controls">
                                            <textarea name="mpo"><?php echo $setting['mpo']; ?></textarea>
                                        </div>
                                    </div>
									
									<div class="control-group">
                                        <label class="control-label" for="focusedInput">Important Informations</label>
                                        <div class="controls">
                                            <textarea name="importantinfo"><?php echo $setting['importantinfo']; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Address</label>
                                        <div class="controls">
                                            <textarea name="instituteaddress"><?php echo $setting['instituteaddress']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Phone</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" name="institutephone" type="text" value="<?php echo $setting['institutephone']; ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Email</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" name="instituteemail" type="text" value="<?php echo $setting['instituteemail']; ?>">
                                        </div>
                                    </div>
									
									<div class="control-group">
                                        <label class="control-label" for="focusedInput">School Time</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" name="schooltime" type="text" value="<?php echo $setting['schooltime']; ?>">
                                        </div>
                                    </div>
                                    <hr/>
                                    <input id="savesettingsinsinfobtn" name="savesettingsinsinfobtn" type="submit" class="btn btn-primary" value="Save Changes" />
                                    <button type="reset" class="btn">Cancel</button>
                                </form>
                            <?php } ?>
                        </div>
                        <div class="tab-pane" id="admininfo">
                            <?php foreach ($settings as $setting) { ?>
                                <form class="form-horizontal form-groups-bordered validate" id="savesettingsinsadminForm" action="javascript:void(0);" enctype="multipart/form-data">
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Head of Department</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" name="adminname" type="text" value="<?php echo $setting['adminname']; ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Phone</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" name="adminphone" type="text" value="<?php echo $setting['adminphone']; ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Email</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" name="adminemail" type="text" value="<?php echo $setting['adminemail']; ?>">
                                        </div>
                                    </div>
                                    <hr/>
                                    <input id="savesettingsinsadminbtn" name="savesettingsinsadminbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                                    <button type="reset" class="btn">Cancel</button>
                                </form>
                            <?php } ?>
                        </div>
                        <div class="tab-pane" id="inslogo">
                            <?php foreach ($settings as $setting) { ?>
                                <form class="form-horizontal form-groups-bordered validate" id="logosettingsForm" action="javascript:void(0);" enctype="multipart/form-data">
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Institute Logo</label>
                                        <div class="controls">
											<input name="settingsid" type="hidden" value="<?php echo $setting['settingsid']; ?>" />
                                            <input type="file" name="institutelogo" /><br/>
                                            <img src="<?php echo base_url(); ?>uploads/settings/<?php echo $setting['institutelogo']; ?>" />
                                        </div>
                                    </div>
                                    <hr/>
                                    <input id="logosettingsbtn" name="logosettingsbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                                    <button type="reset" class="btn">Cancel</button>
                                </form>
                            <?php } ?>
                        </div>
                        <div class="tab-pane" id="insheader">
                            <?php foreach ($settings as $setting) { ?>
                                <form class="form-horizontal form-groups-bordered validate" id="instituteheaderForm" action="javascript:void(0);" enctype="multipart/form-data">
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Institute Header</label>
                                        <div class="controls">
											<input name="settingsid" type="hidden" value="<?php echo $setting['settingsid']; ?>" />
                                            <input type="file" name="instituteheader" /><br/>
                                            <img src="<?php echo base_url(); ?>uploads/settings/<?php echo $setting['instituteheader']; ?>" />
                                        </div>
                                    </div>
                                    <hr/>
                                    <input id="instituteheaderbtn" name="instituteheaderbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                                    <button type="reset" class="btn">Cancel</button>
                                </form>
                            <?php } ?>
                        </div>
                        <div class="tab-pane" id="adminphoto">
                            <?php foreach ($settings as $setting) { ?>
                                <form class="form-horizontal form-groups-bordered validate" id="adminphotoForm" action="javascript:void(0);" enctype="multipart/form-data">
                                    <div class="control-group">
                                        <label for="focusedInput" class="control-label">Headmaster/Pricipal Photo</label>
                                        <div class="controls">           
											<input name="settingsid" type="hidden" value="<?php echo $setting['settingsid']; ?>" />										
                                            <input type="file" name="adminphoto" id="photo" /><br/>
                                            <img src="<?php echo base_url(); ?>uploads/settings/<?php echo $setting['adminphoto']; ?>" />
                                        </div>
                                    </div>
                                    <hr/>
                                    <input id="adminphotobtn" name="adminphotobtn" type="submit" class="btn btn-primary" value="Save Changes" />
                                    <button type="reset" class="btn">Cancel</button>
                                </form>
                            <?php } ?>
                        </div>
						
						<div class="tab-pane" id="headteacher">
                            <?php foreach ($settings as $setting) { ?>
                                <form class="form-horizontal form-groups-bordered validate" id="headteacherForm" action="javascript:void(0);" enctype="multipart/form-data">
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Headmaster/Pricipal Message</label>
                                        <div class="controls">
											<input name="settingsid" type="hidden" value="<?php echo $setting['settingsid']; ?>" />	
                                            <textarea name="headmessage" style=" height: 250px; width: 95%;"><?php echo $setting['headmessage']; ?></textarea>
                                        </div>
                                    </div>
									
									<div class="control-group">
                                        <label for="focusedInput" class="control-label">Headmaster/Pricipal Photo</label>
                                        <div class="controls">           									
                                            <input type="file" name="headteacherphoto" id="photo" /><br/>
                                            <img src="<?php echo base_url(); ?>uploads/settings/<?php echo $setting['headteacherphoto']; ?>" />
                                        </div>
                                    </div>
                                    <hr/>
                                    <input id="headteacherbtn" name="headteacherbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                                    <button type="reset" class="btn">Cancel</button>
                                </form>
                            <?php } ?>
                        </div>
						
                        <div class="tab-pane" id="widgets">
                            <?php foreach ($settings as $setting) { ?>
                                <form class="form-horizontal form-groups-bordered validate" id="widgetsForm" action="javascript:void(0);" enctype="multipart/form-data">
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Visitor Counter</label>
                                        <div class="controls">
											<input name="settingsid" type="hidden" value="<?php echo $setting['settingsid']; ?>" />	
                                            <textarea name="visitorcounter"><?php echo $setting['visitorcounter']; ?></textarea>
                                        </div>
                                    </div>
									
									<div class="control-group">
                                        <label class="control-label" for="focusedInput">Important Links On Site</label>
                                        <div class="controls">
                                            <textarea name="importantlinks"><?php echo $setting['importantlinks']; ?></textarea>
                                        </div>
                                    </div>
									
									<div class="control-group">
                                        <label class="control-label" for="focusedInput">Important Links Off Site</label>
                                        <div class="controls">
                                            <textarea name="importantlinksoffsite"><?php echo $setting['importantlinksoffsite']; ?></textarea>
                                        </div>
                                    </div>
									
									<div class="control-group">
                                        <label class="control-label" for="focusedInput">Contact Informations</label>
                                        <div class="controls">
                                            <textarea name="contactinfo"><?php echo $setting['contactinfo']; ?></textarea>
                                        </div>
                                    </div>
									<div class="control-group">
                                        <label class="control-label" for="focusedInput">Google Map</label>
                                        <div class="controls">
                                            <textarea name="googlemap"><?php echo $setting['googlemap']; ?></textarea>
                                        </div>
                                    </div>
                                    <hr/>
                                    <input id="widgetsbtn" name="widgetsbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                                    <button type="reset" class="btn">Cancel</button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>