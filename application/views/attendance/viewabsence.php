<?php //echo $r;        ?>
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
                        <?php foreach ($classes as $class) {
                            $calid = $class['classid'];
                            ?>
                            <div class="tab-pane <?php
                            if ($class['classid'] == 1) {
                                echo "active";
                            }
                            ?>" id="<?php echo $class['classid'] ?>">
                                <h4>Search students for class <?php echo $class['classname'] ?></h4>
                                <form class="form-horizontal form-groups-bordered validate viewabsence" id="addroutine_<?php echo $class['classid'] ?>" action="" enctype="multipart/form-data">
                                    <input type="hidden" name="class" value="<?php echo $class['classid'] ?>" />
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Section</label>
                                        <div class="controls">
                                            <select name="section">
                                                <?php
                                                foreach ($sections as $section) {
                                                    echo '<option value="' . $section['sectionid'] . '">';
                                                    echo $section['sectionname'];
                                                    echo '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

    <?php if ($class['classid'] > 3) { ?>
                                        <div class="control-group sgroup">
                                            <label class="control-label" for="focusedInput">Group</label>
                                            <div class="controls">
                                                <select name="group">
                                                    <?php
                                                    foreach ($studygroups as $studygroup) {
                                                        echo '<option value="' . $studygroup['studygroupsid'] . '">';
                                                        echo $studygroup['studygroupsname'];
                                                        echo '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
    <?php } ?>



                                    <div class="control-group sgroup">
                                        <label class="control-label" for="focusedInput">Date</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused datepicker" id="absencedate" name="absencedate" type="text">
                                        </div>
                                    </div>

                                    <input id="addroutinenew_<?php echo $calid ?>" name="addroutinenew" type="submit" class="btn btn-primary" value="Search Students" />
                                    <button type="reset" class="btn">Cancel</button>
                                    </fieldset>
                                </form>
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
