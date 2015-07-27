<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div id="viewnewss" class="span12">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>News SL</th>
                        <th>News Title</th>
                        <th>Action</th>
                    </tr>
                    <?php $slno=1; foreach($newses as $news) { ?>
                    <tr>
                        <td><?php echo $slno++; ?></td>
                        <td><?php echo $news['newstitle']; ?></td>
                        <td>
                            <a class="btn btn-success btn-mini" href="editnews/<?php echo $news['newsid']; ?>"><i class="icon icon-edit"></i></a>
                            <a onclick="deletenews(<?php echo $news['newsid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>