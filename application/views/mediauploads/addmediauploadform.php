<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Photo</div>

    </div>
    <div class="block-content collapse in">
        <div class="span12">
                <?php //echo form_open_multipart('addmediauploadajax', array('class'=>'form-horizontal form-groups-bordered validate', 'id' => 'admediauploadForm')); ?>
            <form class="form-horizontal form-groups-bordered validate" id="addmediauploadForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Photo Title</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="mediauploadname" type="text"> 
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Photo Photo</label>

                        <div class="controls">                            
                            <input type="file" name="photo" id="photo" />
                        </div>
                    </div>
                    <hr/>

                    <input id="addmediauploadbtn" name="addmediauploadbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
