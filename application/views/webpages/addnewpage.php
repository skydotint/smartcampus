
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Add new web page</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form class="form-horizontal form-groups-bordered validate" id="addwebpageForm" action="javascript:void(0);">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Page Title</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="pagetitle" id="pagetitle" type="text" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Page Route</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" name="pageroute" id="pageroute" type="text">
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
                                                <textarea name="pagedescription" id="ckeditor_full" placeholder="Enter text ..." style="width:98%;height:200px;"></textarea>
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
                            <input id="createpagebtn" name="addwebpagebtn" type="submit" class="btn btn-primary" value="Save Changes" />
                            <button type="reset" class="btn">Cancel</button>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
        