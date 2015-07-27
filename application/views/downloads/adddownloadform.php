<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Download</div>

    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <?php //echo form_open_multipart('adddownloadajax', array('class'=>'form-horizontal form-groups-bordered validate', 'id' => 'addownloadForm')); ?>
            <form class="form-horizontal form-groups-bordered validate" id="adddownloadForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Download Title</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="downloadtitle" type="text"> 
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Download Description</label>
                        <div class="controls">
                           <textarea name="downloaddescription" placeholdef="Enter address ..."  style=" width: 270px;"></textarea>
                        </div>
                    </div>
					<div class="control-group">
                        <label for="focusedInput" class="control-label">Download Attachment</label>

                        <div class="controls">                            
                            <input type="file" name="attachment" id="photo" />
                        </div>
                    </div>
                    <hr/>

                    <input id="adddownloadbtn" name="adddownloadbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
