<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div id="viewcredits" class="span12">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>SL</th>
                        <th>Financial Department</th>
                        <th>Description</th>
                        <th>Payment Date</th>
                        <th>Update Date</th>
                        <th>Amount</th>
                        <th>Payment Type</th>
                        <th>Action</th>
                    </tr>
                    <?php $slno=1; foreach($credits as $credit) { ?>
                    <tr>
                        <td><?php echo $slno++; ?></td>
                        <td><?php echo $credit['financialdepartments']; ?></td>
                        <td><?php echo $credit['description']; ?></td>
                        <td><?php echo $credit['paymentdate']; ?></td>
                        <td><?php echo $credit['updatedate']; ?></td>
                        <td><?php echo $credit['amount']; ?></td>
                        <td><?php echo $credit['paymenttype']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editcredit/<?php echo $credit['accountid']; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deletecredit(<?php echo $credit['accountid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>