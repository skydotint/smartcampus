<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Results_model extends Common_model {

    function __construct() {
        parent::__construct();
    }

    public function getAllResults($table, $where) {
        $sql = $this->db->get_where($table, $where);
        foreach ($sql->result() as $rows) {
            $data.="
                <tr>
                    <td>" . $rows->resstudentid . "</td>
                    <td> 
                        <input type='text' id='" . $rows->resultid . "' class='marksupdate' name='marks[]' value='" . $rows->marks . "'>
                        <input type='hidden' class='hiddestudennmark' name='resstudentid_marks[]' value='" . $rows->resstudentid . "'>
                        
                    </td>
                </tr>";
        }
        $datastart = "<form id='updateresult' name='updateresult' action=''  class='updateresult'><table class='table table-striped table-bordered dataTable'>
                <tbody>
                    <tr>
                        <th>StudentID</th>
                        <th>Marks</th>
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
                    </tr></tbody></table></form>";
        if ($data) {
            $datafinal = $datastart . $data . $dataend;
        } else {
            $datafinal = "<p>Result has not generate for this group/section</p>";
        }
        return $datafinal;
    }

}
