<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Gallery</div>

    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <?php //echo form_open_multipart('addgalleryajax', array('class'=>'form-horizontal form-groups-bordered validate', 'id' => 'adgalleryForm')); ?>
            <form class="form-horizontal form-groups-bordered validate" id="addgalleryForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Gallery Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="galleryname" type="text"> 
                        </div>
                    </div>
                    <hr/>

                    <input id="addgallerybtn" name="addgallerybtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
