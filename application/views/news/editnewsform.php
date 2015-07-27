<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit News</div>

    </div>
	<?php //var_dump($newses); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editnewsForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">News Title</label>
                        <div class="controls">
							<input name="newsid" type="hidden" value="<?php echo $newses['newsid']; ?>" />
                            <input class="input-xlarge focused" name="newstitle" value="<?php echo $newses['newstitle']; ?>" type="text"> 
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
									<textarea name="newsdescription" id="bootstrap-editor" placeholder="Enter text ..." style="width:98%;height:200px;"><?php echo $newses['newsdescription']; ?></textarea>
								</div>
							</div>
							<!-- /block -->
						</div>
					</div>
                    <hr/>

                    <input id="editnewsbtn" name="editnewsbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
