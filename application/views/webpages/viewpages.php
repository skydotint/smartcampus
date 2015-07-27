<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $tbltitle; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <div class="span12" id="viewwebpages">
                <table class="table table-striped table-bordered dataTable">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Page Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        <?php $sl=1; foreach ($pages as $page) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $page['pagetitle']; ?></td>
                                <td>
									<?php 
										$string = strip_tags($page['description']);
										if (strlen($string) > 200) {
										$trimstring = substr($string, 0, 200);
										} else {
										$trimstring = $string;
										}
										echo $trimstring;
									?>
								</td>
                                <td>
                                    <a class="btn btn-success btn-mini textwhite" href="editwebpage/<?php echo $page['pageid']; ?>"><i class="icon icon-edit"></i></a>
                                    <a onclick="deletewebpage(<?php echo $page['pageid']; ?>)" class="btn btn-danger btn-mini" href="javascript:void(0)"><i class="icon icon-remove"></i></a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>