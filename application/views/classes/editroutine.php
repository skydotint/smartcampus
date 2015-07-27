<?php //echo $r;      ?>

<?php //echo $rotine['class'];?>
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
                        <li <?php if ($class['classid'] == $rotine['class']) {}else{?>style="display: none;" <?php } ?> class="<?php if ($class['classid'] == $rotine['class']) { echo "active";}?>"><a href="#<?php echo $class['classid'] ?>" data-toggle="tab"><?php echo $class['classname'] ?></a></li>
                            <?php } ?>
                    </ul>
                </div>
                <div class="span9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <?php foreach ($classes as $class) { $calid = $class['classid']; ?>
                            <div class="tab-pane <?php
                            if ($class['classid'] == $rotine['class']) {
                                echo "active";
                            }
                            ?>" id="<?php echo $class['classid'] ?>">
                                <h4>Add Routine for class <?php echo $class['classname'] ?></h4>
                                <form class="form-horizontal form-groups-bordered validate editroutinedy" id="addroutine_<?php echo $class['classid'] ?>" action="" enctype="multipart/form-data">
                                    <input type="hidden" name="class" value="<?php echo $class['classid'] ?>" />
                                    <input type="hidden" name="classroutineid" value="<?php echo $rotine['classroutineid'] ?>" />
                                    <fieldset>
                                        <div class="control-group">
                                            <label class="control-label" for="focusedInput">Period</label>
                                            <div class="controls">
                                                <select name="period">
                                                  <?php foreach ($periods as $period) {?>
                                                    <option <?php if($period['classperiodid'] == $rotine['period']){ ?> selected="selected" <?php } ?> value="<?php echo $period['classperiodid'] ?>"><?php echo $period['periodname']; ?></option>
                                                   <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="focusedInput">Section</label>
                                            <div class="controls">
                                                <select name="section">
                                                  <?php foreach ($sections as $section) {?>
                                                    <option <?php if($section['sectionid'] == $rotine['section']){ ?> selected="selected" <?php } ?> value="<?php echo $section['sectionid'] ?>"><?php echo $section['sectionname']; ?></option>
                                                   <?php }?>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="control-group sgroup">
                                            <label class="control-label" for="focusedInput">Group</label>
                                            <div class="controls">
                                                <select name="group">
                                                <?php foreach ($studygroups as $studygroup) {?>
                                                    <option <?php if($studygroup['studygroupsid'] == $rotine['stdgroup']){ ?> selected="selected" <?php } ?> value="<?php echo $studygroup['studygroupsid'] ?>"><?php echo $studygroup['studygroupsname']; ?></option>
                                                   <?php }?>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="focusedInput">Days</label>
                                            <div class="controls">
                                                <select name="days">
        
                                                <?php foreach ($days as $day) {?>
                                                    <option <?php if($day['dayid'] == $rotine['days']){ ?> selected="selected" <?php } ?> value="<?php echo $day['dayid'] ?>"><?php echo $day['dayname']; ?></option>
                                                   <?php }?>
                                                    </select>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="focusedInput">Teachers</label>
                                            <div class="controls">
                                                <select name="teachers">
                           
                                                 <?php foreach ($teachers as $teacher) {?>
                                                    <option <?php if($teacher['teacherid']== $rotine['teachers']){ ?> selected="selected" <?php } ?> value="<?php echo $teacher['teacherid'] ?>"><?php echo $teacher['firstname'] . " " . $teacher['middlename']; ?></option>
                                                   <?php }?>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="focusedInput">Subjects</label>
                                            <div class="controls">
                                                <select name="subjects">
                                                 <?php foreach ($subjects as $subject) {?>
                                                    <option <?php if($subject['subjectid']== $rotine['subjects']){ ?> selected="selected" <?php } ?> value="<?php echo $subject['subjectid'] ?>"><?php echo $subject['subjectname']; ?></option>
                                                   <?php }?>
                                                    </select>
                                            </div>
                                        </div> 
                                        <input id="addroutinenew_<?php echo $calid ?>" name="addroutinenew" type="submit" class="btn btn-primary" value="Save Changes" />
                                        <button type="reset" class="btn">Cancel</button>
                                    </fieldset>
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