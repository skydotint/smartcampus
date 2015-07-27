<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Slide</div>

    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <?php //echo form_open_multipart('addslideajax', array('class'=>'form-horizontal form-groups-bordered validate', 'id' => 'adslideForm')); ?>
            <form class="form-horizontal form-groups-bordered validate" id="addslideForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Slide Title</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="slidetitle" type="text"> 
                        </div>
                    </div>
					
					<div class="control-group">
                        <label for="focusedInput" class="control-label">Slide Image</label>

                        <div class="controls">                            
                            <input type="file" name="attachment" id="photo" />
                        </div>
                    </div>
                    <hr/>

                    <input id="addslidebtn" name="addslidebtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
