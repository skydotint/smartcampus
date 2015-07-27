<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subjects_model extends Common_model {

    function __construct() {
        parent::__construct();
    }

    public function getSubjects() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_subjects);
        $rows = $query->result_array();
        return $rows;
    }

    public function getStudyGroups() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_study_groups);
        $rows = $query->result_array();
        return $rows;
    }

    public function getRoutines() {
        $query = $this->db->query("SELECT class FROM " . $this->common_model->_classroutine);
        $rows = $query->result_array();
        foreach ($rows as $row) {
            
        }


        return $rows;
    }

    public function getDays() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_classdays);
        $rows = $query->result_array();
        return $rows;
    }

    public function getPeriods() {
        $query = $this->db->query("SELECT * FROM " . $this->common_model->_classperiod);
        $rows = $query->result_array();
        return $rows;
    }

    public function allRoutines($table, $join, $where, $option) {
        if (!empty($where))
            $sql = $this->db->get_where($table, $where);
        else
            $sql = $this->db->get($table);
        if ($sql->num_rows() > 0) {
            if ($option == "all") {
                foreach ($sql->result() as $rows) {
                    //$data[] = $rows;
                    $data.="<tr>
                            <td>" . $rows->dayname . "</td>
                            <td>" . $rows->periodname . "</td>
                            <td>" . $rows->sectionname . "</td>
                            <td>" . $rows->studygroupsname . "</td>
                            <td>" . $rows->subjectname . "</td> 
                            <td>" . $rows->firstname . " " . $rows->middlename . " " . $rows->lastname . "</td>
                            <td>
                                <a class='btn  btn-success  btn-mini editRoutine' href='" . base_url() . "editroutine/$rows->classroutineid' id='$rows->classroutineid'><i class='icon icon-edit'></i></a>
                                <a class='btn btn-danger btn-mini deleteRoutine' href='javascript:void(0)' onclick=deleteRoutine($rows->classroutineid)  id='$rows->classroutineid'><i class='icon icon-remove'></i></a>
                            </td>
                            </tr>";
                }
            } else {
                $data = $sql->row_array();
            }
            $datastart = "<table class='table table-striped table-bordered dataTable'>
                <tbody>
                    <tr>
                        <th>Day</th>
                        <th>Period</th>
                        <th>Section</th>
                        <th>Group</th>
                        <th>Subject</th>
                        <th>Teachers</th>
                        <th>Action</th>
                    </tr>";
            $dataend = "</tbody></table>";
            $datafinal = $datastart . $data . $dataend;
            return $datafinal;
        } else
            return false;
    }

}
