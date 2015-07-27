<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New News</div>

    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <?php //echo form_open_multipart('addnewsajax', array('class'=>'form-horizontal form-groups-bordered validate', 'id' => 'adnewsForm')); ?>
            <form class="form-horizontal form-groups-bordered validate" id="addnewsForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">News Title</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="newstitle" type="text"> 
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
									<textarea name="newsdescription" id="bootstrap-editor" placeholder="Enter text ..." style="width:98%;height:200px;"></textarea>
								</div>
							</div>
							<!-- /block -->
						</div>
					</div>
                    <hr/>

                    <input id="addnewsbtn" name="addnewsbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
