    <?php foreach($slides as $slide) { ?>
    <li><img src="<?php echo base_url(); ?>uploads/slides/<?php echo $slide['attachment']; ?>" alt="<?php echo $slide['slidetitle']; ?>" title="<?php echo $slide['slidetitle']; ?>" /></li>
    <?php } ?>