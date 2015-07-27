<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Webpage</div>

    </div>
	<?php //var_dump($webpages); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editwebpageForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
					
					<div class="control-group">
                                <label class="control-label" for="focusedInput">Page Title</label>
                                <div class="controls">
                                    <input name="pageid" type="hidden" value="<?php echo $webpages['pageid']; ?>" >
                                    <input class="input-xlarge focused" name="pagetitle" id="pagetitle" type="text" value="<?php echo $webpages['pagetitle']; ?>" >
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Page Route</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="pageroute" id="pageroute" type="text" value="<?php echo $webpages['pageroute']; ?>">
                                </div>
                            </div>
							
                            <div class="span12" id="content">
		                    <div class="row-fluid">
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Webpage content</div>
		                            </div>
		                            <div class="block-content collapse in">
                                        <textarea name="xxx" id="ckeditor_full" style="width:98%;height:200px;"></textarea>
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
                    <hr/>

                    <input id="editwebpagebtn" name="editwebpagebtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
