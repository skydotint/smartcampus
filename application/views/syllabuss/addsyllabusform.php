
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Add New Syllabus</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form class="form-horizontal form-groups-bordered validate" id="addsyllabusForm" action="javascript:void(0);">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Syllabus Title</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="syllabustitle" type="text" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Published Date </label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="publishdate" type="text">
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
                                                <textarea name="syllabusdescription" id="bootstrap-editor" placeholder="Enter text ..." style="width:98%;height:200px;"></textarea>
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
                            <input id="addsyllabusbtn" name="addsyllabusbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                            <button type="reset" class="btn">Cancel</button>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
        