<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewbooks">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Book SL</th>
                        <th>Book Name</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                    <?php $slno=1; foreach($books as $book) { ?>
                    <tr>
                        <td><?php echo $slno++; ?></td>
                        <td><?php echo $book['bookname']; ?></td>
                        <td><?php echo $book['author']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editbook/<?php echo $book['bookid']; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deletebook(<?php echo $book['bookid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

