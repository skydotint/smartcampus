<?php //print_r($results); ?>
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><?php echo $title; ?></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12" id="viewstudents">
            <table class="table table-striped table-bordered dataTable">
                <tbody>
                    <tr>
                        <th>Subject</th>
                        <th>Objective</th>
                        <th>Written</th>
                        <th>Practical</th>
                        <th>Total</th>
                        <th>Grade</th>
                        <th>GPA</th>
                    </tr>
                    <?php 
                        foreach ($results as $result) { 
                        $total = array($result->objectivemarks,$result->writtenmarks,$result->practicalmarks);
                        $totalSum = array_sum($total)
                            ?>
                        <tr>
                            <td><?php echo $result->subjectname ?></td>
                            <td><?php echo $result->objectivemarks ?></td>
                            <td><?php echo $result->writtenmarks ?></td>
                            <td><?php echo $result->practicalmarks ?></td>
                            <td><?php echo $totalSum ?></td>
                            <td><?php echo makeGrade($totalSum) ?></td>
                            <td><?php //echo makeGrade($totalSum) ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
