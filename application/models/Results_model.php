<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Results_model extends Common_model {
    function __construct() {
        parent::__construct();
    }

    public function getAllMarks($table, $where) {
        $sql = $this->db->get_where($table, $where);
        foreach ($sql->result() as $rows) {
            $data.="
                <tr>
                    <td>" . $rows->resstudentid . "</td>
                    <td> 
                        <input data='objectivemarks' type='text' id='" . $rows->resultid . "' class='commonmarks objectivemarks' name='objectivemarks[]' value='" . $rows->objectivemarks . "'>
                        <input type='hidden' class='hiddenobjectivemarks' name='resstudentid_hiddenobjectivemarks[]' value='" . $rows->resstudentid . "'>
                    </td>
                   <td> 
                        <input data='writtenmarks' type='text' id='" . $rows->resultid . "' class='commonmarks writtenmarks' name='writtenmarks[]' value='" . $rows->writtenmarks . "'>
                        <input type='hidden' class='hiddenwrittenmarks' name='resstudentid_hiddenwrittenmarks[]' value='" . $rows->resstudentid . "'>
                    </td>
                    <td> 
                        <input data='practicalmarks' type='text' id='" . $rows->resultid . "' class='commonmarks practicalmarks' name='practicalmarks[]' value='" . $rows->practicalmarks . "'>
                        <input type='hidden' class='hiddenpracticalmarks' name='resstudentid_hiddenpracticalmarks[]' value='" . $rows->resstudentid . "'>
                    </td>
                </tr>";
        }
        $datastart = "<form id='updateresult' name='updateresult' action=''  class='updateresult newResUpdate'><table class='table table-striped table-bordered dataTable'>
                <tbody>
                    <tr>
                        <th>StudentID</th>
                        <th>Objective</th>
                        <th>Written</th>
                        <th>Practical</th>
                    </tr>";
        $dataend = "<tr>
                        <th>
                            <input type='hidden' name='class' value='" . $rows->class . "'>
                            <input type='hidden' name='exam' value='" . $rows->exam . "'>
                            <input type='hidden' name='section' value='" . $rows->section . "'>
                            <input type='hidden' name='stdgroup' value='" . $rows->stdgroup . "'>
                            <input type='hidden' name='subjects' value='" . $rows->subjects . "'>
                            <input type='submit' value='Submit' name='submit' class='btn btn-primary editres'>
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr></tbody></table></form>";
        if ($data) {
            $datafinal = $datastart . $data . $dataend;
        } else {
            $datafinal = "<p>Result has not generate for this group/section</p>";
        }
        return $datafinal;
    }
    
    public function getAllResults($table, $where) {
        $studentstable = "students";
        $class = $where['class'];
        $exam = $where['exam'];
        $section = $where['section'];
        $group = $where['group'];
        
        //echo $table;
        
        if($class > 3){
            $wherestd  = array( 'class' => $class,'section' => $section,'group' => $group);
        } else{
            $wherestd  = array( 'class' => $class,'section' => $section);
        }
        
        
        $students = $this->db->get_where($studentstable, $wherestd);
        foreach($students->result() as $student){
            $std =  $student->studentid ;
            if($class > 3){
                $wheresub  = array( 'class' => $class,'section' => $section,'group' => $group, 'resstudentid' =>$std);
            } else{
                $wheresub  = array( 'class' => $class,'section' => $section, 'resstudentid' =>$std);
            }
            
            
            
            /*$simsql = "SELECT DISTINCT subjects FROM results";
            $query = $this->db->query($simsql, $wheresub);
            $rows = $query->result_array();
            
            foreach($rows as $row){
                $subjects .= $row['subjects'];
            }*/
            
            //$this->db->select(*);
            
            
            $sqlsub = $this->db->distinct('subjects');
            $sqlsub = $this->db->get_where('results', $wheresub); 
            foreach($sqlsub->result() as $subs){
               $allArr[] = array(
                        'subjects' => $subs->subjects,
                        'objectivemarks' => $subs->objectivemarks,
                        'writtenmarks' => $subs->writtenmarks,
                        'practicalmarks' => $subs->practicalmarks
                       );
            }
        }
        
        //$c = count($subjects);
        
        foreach($allArr as $allAr){
            $s .= "<tr><td>".$allAr['objectivemarks']." ".$allAr['writtenmarks']." ".$allAr['practicalmarks']." ".$allAr['objectivemarks']."</td></tr>";
        }
        
        
        /*foreach($subjects as $subject){
            $sub .= $subject;
        }*/
        
        return  $s;
        
        
        
        
        /*$th = "<tr><td><b>StudentID</b></td>
    <td>
    	<b>Bangla 1</b>
        <p>
            <em>O</em>
            <em>W</em>
            <em>P</em>
        </p>
    </td>
    <td>
    	<b>Bangla 2</b>
        <p>
            <em>O</em>
            <em>W</em>
            <em>P</em>
        </p>
    </td>
    <td>
    	<b>English 1</b>
        <p>
            <em>O</em>
            <em>W</em>
            <em>P</em>
        </p>
    </td>
    <td>
    	<b>English 2</b>
        <p>
            <em>O</em>
            <em>W</em>
            <em>P</em>
        </p>
    </td></tr>";
        
          $tc =   "<tr><td><td>".$std."</td></td>
    <td>
    	<b>Bangla 1</b>
        <p>
            <em>O</em>
            <em>W</em>
            <em>P</em>
        </p>
    </td>
    <td>
    	<b>Bangla 2</b>
        <p>
            <em>O</em>
            <em>W</em>
            <em>P</em>
        </p>
    </td>
    <td>
    	<b>English 1</b>
        <p>
            <em>O</em>
            <em>W</em>
            <em>P</em>
        </p>
    </td>
    <td>
    	<b>English 2</b>
        <p>
            <em>O</em>
            <em>W</em>
            <em>P</em>
        </p>
    </td></tr>";   */
                
        //return "<tr>". $std ."</tr>";
        
        
        
        
        
        /*if ($class > 3) {
            echo $section;
        }else{
            echo $section;
        }
        return $section;
        */
        
  
        //return print_r($where);
        
        
       /* $sql = $this->db->get_where($table, $where);
        foreach ($sql->result() as $rows) {
            $data.="
                <tr>
                    <td>" . $rows->resstudentid . "</td>
                    <td> 
                        
                    </td>
                   <td> 
                        
                    </td>
                    <td> 
                        
                    </td>
                </tr>";
        }
        $datastart = "<form id='updateresult' name='updateresult' action=''  class='updateresult newResUpdate'><table class='table table-striped table-bordered dataTable'>
                <tbody>
                    <tr>
                        <th>StudentID</th>
                        <th>Objective</th>
                        <th>Written</th>
                        <th>Practical</th>
                    </tr>";
        $dataend = "<tr>
                        <th>
                            <input type='hidden' name='class' value='" . $rows->class . "'>
                            <input type='hidden' name='exam' value='" . $rows->exam . "'>
                            <input type='hidden' name='section' value='" . $rows->section . "'>
                            <input type='hidden' name='stdgroup' value='" . $rows->stdgroup . "'>
                            <input type='hidden' name='subjects' value='" . $rows->subjects . "'>
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr></tbody></table></form>";
        if ($data) {
            $datafinal = $datastart . $data . $dataend;
        } else {
            $datafinal = "<p>Result has not generate for this group/section</p>";
        }
        return $datafinal;*/
    }
}
