<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Photo</div>

    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <?php //echo form_open_multipart('addphotoajax', array('class'=>'form-horizontal form-groups-bordered validate', 'id' => 'adphotoForm')); ?>
            <form class="form-horizontal form-groups-bordered validate" id="addphotoForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Select Gallery</label>
                        <div class="controls">
                            <select name="galleryid">
                                <?php foreach ($galleries as $gallery) { ?>
                                    <option value="<?php echo $gallery['galleryid']; ?>"><?php echo $gallery['galleryname']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Photo</label>

                        <div class="controls">                            
                            <input type="file" name="photo" id="photo" />
                        </div>
                    </div>
                    <hr/>

                    <input id="addphotobtn" name="addphotobtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
