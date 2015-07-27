<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Book</div>

    </div>
    <div class="block-content collapse in">
        <div class="span12">
                <?php //echo form_open_multipart('addbookajax', array('class'=>'form-horizontal form-groups-bordered validate', 'id' => 'adbookForm')); ?>
            <form class="form-horizontal form-groups-bordered validate" id="addbookForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Book Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="bookname" type="text"> 
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Author Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="author" type="text">
                        </div>
                    </div>
					
                    <div class="control-group">
                        <label for="focusedInput" class="control-label">Book Photo</label>

                        <div class="controls">                            
                            <input type="file" name="photo" id="photo" />
                        </div>
                    </div>
                    <hr/>

                    <input id="addbookbtn" name="addbookbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
