<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Add New Credit</div>

    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <?php //echo form_open_multipart('addcreditajax', array('class'=>'form-horizontal form-groups-bordered validate', 'id' => 'adcreditForm')); ?>
            <form class="form-horizontal form-groups-bordered validate" id="addcreditForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Financial Department</label>
                        <div class="controls">
                            <select name="financialdepartments">
                                <?php foreach($financialdepartments as $department){ ?>
                                <option value="<?php echo $department['financialdepartmentname']; ?>"><?php echo $department['financialdepartmentname']; ?></option>
                               <?php } ?>
                            </select>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Description</label>
                        <div class="controls">
                           <textarea name="description" placeholdef="Enter Payment Description ..."  style=" width: 270px;"></textarea>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Payment Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="paymentdate" type="text"> 
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Amount</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="amount" type="text"> 
                        </div>
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Payment Type</label>
                        <div class="controls">
                            <select name="paymenttype">
                                <option value="Bank">Bank</option>
                                <option value="bKash">bKash</option>
                                <option value="Cash on Hand">Cash on Hand</option>
                                
                            </select>
                        </div>
                    </div>
					
                    <hr/>

                    <input id="addcreditbtn" name="addcreditbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>
