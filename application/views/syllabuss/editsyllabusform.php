<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Syllabus</div>

    </div>
	<?php //var_dump($syllabuss); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editsyllabusForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Syllabus Title</label>
                        <div class="controls">
							<input name="syllabusid" type="hidden" value="<?php echo $syllabuss['syllabusid']; ?>" />
                            <input class="input-xlarge focused" name="syllabustitle" value="<?php echo $syllabuss['syllabustitle']; ?>" type="text"> 
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Published Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="publishdate" value="<?php echo $syllabuss['publishdate']; ?>" type="text"> 
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
									<textarea name="syllabusdescription" id="bootstrap-editor" placeholder="Enter text ..." style="width:98%;height:200px;"><?php echo $syllabuss['syllabusdescription']; ?></textarea>
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

                    <input id="editsyllabusbtn" name="editsyllabusbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
