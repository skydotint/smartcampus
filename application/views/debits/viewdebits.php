<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div id="viewdebits" class="span12">
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
                    <?php $slno=1; foreach($debits as $debit) { ?>
                    <tr>
                        <td><?php echo $slno++; ?></td>
                        <td><?php echo $debit['financialdepartments']; ?></td>
                        <td><?php echo $debit['description']; ?></td>
                        <td><?php echo $debit['paymentdate']; ?></td>
                        <td><?php echo $debit['updatedate']; ?></td>
                        <td><?php echo $debit['amount']; ?></td>
                        <td><?php echo $debit['paymenttype']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editdebit/<?php echo $debit['accountid']; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deletedebit(<?php echo $debit['accountid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>