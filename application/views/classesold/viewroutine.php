<?php //echo $r;      ?>
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $title; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <div>
                <div class="span3"> 
                    <ul class="nav nav-tabs tabs-left classSideMenu">
                        <?php foreach ($classes as $class) { ?>
                            <li class="<?php
                            if ($class['classid'] == 1) {
                                echo "active";
                            }
                            ?>"><a href="#<?php echo $class['classid'] ?>" data-toggle="tab"><?php echo $class['classname'] ?></a></li>
                            <?php } ?>
                    </ul>
                </div>
                <div class="span9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <?php foreach ($classes as $class) { $calid = $class['classid']; ?>
                            <div class="tab-pane <?php
                            if ($class['classid'] == 1) {
                                echo "active";
                            }
                            ?>" id="<?php echo $class['classid'] ?>">
                                <h4>View Routine for class <?php echo $class['classname'] ?></h4>

                                <form class="form-horizontal form-groups-bordered validate dynamicaddroutine" id="addroutine_<?php echo $class['classid'] ?>" action="" enctype="multipart/form-data">
                                    
                                </form>
                                
                                <?php //echo getRoutines('classroutine/getRoutines',1); ?>
                                
                                <div class="showRoutineClass">
                                    
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
/*foreach ($classes as $class) {
    echo '<option value="' . $class['classid'] . '">';
    echo $class['classname'];
    echo '</option>';
}*/
?>