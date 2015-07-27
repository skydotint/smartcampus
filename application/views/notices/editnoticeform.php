<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Subject</div>

    </div>
	<?php //var_dump($notices); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editnoticeForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Notice Title</label>
                        <div class="controls">
							<input name="noticeid" type="hidden" value="<?php echo $notices['noticeid']; ?>" />
                            <input class="input-xlarge focused" name="noticetitle" value="<?php echo $notices['noticetitle']; ?>" type="text"> 
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Published Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="publishdate" value="<?php echo $notices['publishdate']; ?>" type="text"> 
                        </div>
                    </div>
					
					<div class="span12" id="content">
						<div class="row-fluid">
							<!-- block -->
							<div class="block">
								<div class="navbar navbar-inner block-header">
									<div class="muted pull-left">Description</div>
								</div>
								<div class="block-content collapse in">
									<textarea name="noticedescription" id="bootstrap-editor" placeholder="Enter text ..." style="width:98%;height:200px;"><?php echo $notices['noticedescription']; ?></textarea>
								</div>
							</div>
							<!-- /block -->
						</div>
					</div>
					
					<div class="control-group">
                        <label for="focusedInput" class="control-label">Download Attachment</label>

                        <div class="controls">                            
                            <input type="file" name="attachment" id="photo" />
                        </div>
                    </div>
                    <hr/>

                    <input id="editnoticebtn" name="editnoticebtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
