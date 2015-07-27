<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Book</div>

    </div>
	<?php //var_dump($books); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editbookForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="focusedInput">Book Name</label>
                        <div class="controls">
							<input name="bookid" type="hidden" value="<?php echo $books['bookid']; ?>" />
                            <input class="input-xlarge focused" name="bookname" value="<?php echo $books['bookname']; ?>" type="text"> 
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Author Name</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="author" value="<?php echo $books['author']; ?>" type="text"> 
                        </div>
                    </div>
					
					 <div class="control-group">
                        <label for="focusedInput" class="control-label">Book Photo</label>

                        <div class="controls">                            
                            <input type="file" name="photo" id="photo" />
                        </div>
                    </div>
					<hr/>	
                    <input id="editbookbtn" name="editbookbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
