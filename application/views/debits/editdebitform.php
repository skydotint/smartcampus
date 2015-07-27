<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Edit Subject</div>

    </div>
	<?php //var_dump($debits); ?>
    <div class="block-content collapse in">
        <div class="span12">
            <form class="form-horizontal form-groups-bordered validate" id="editdebitForm" action="javascript:void(0);" enctype="multipart/form-data">
                <fieldset>
					<input name="accountid" type="hidden" value="<?php echo $debits['accountid']; ?>" />
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
                           <textarea name="description"  style=" width: 270px;"><?php echo $debits['description']; ?></textarea>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Payment Date</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="paymentdate" value="<?php echo $debits['paymentdate']; ?>" type="text"> 
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="focusedInput">Amount</label>
                        <div class="controls">
                            <input class="input-xlarge focused" name="amount" value="<?php echo $debits['amount']; ?>" type="text"> 
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

                    <input id="editdebitbtn" name="editdebitbtn" type="submit" class="btn btn-primary" value="Save Changes" />
                    <button type="reset" class="btn">Cancel</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>


