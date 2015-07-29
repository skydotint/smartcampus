<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Attendance_model extends Common_model {

    function __construct() {
        parent::__construct();
    }

    public function getStudentsForAbsence($table, $join, $where, $option) {
        if (!empty($where))
            $sql = $this->db->get_where($table, $where);
        else
            $sql = $this->db->get($table);
        if ($sql->num_rows() > 0) {
            if ($option == "all") {
                foreach ($sql->result() as $rows) {
                    $data.="
                <tr>
                    <td>" . $rows->studentid . "</td>
                    <td>" . $rows->sf_phone . "</td>
                    <td> <input type='checkbox' class='absencecheck' name='absencenotify[]' value='" . $rows->studentid . "_" . $rows->sf_phone . "' /></td>
                </tr>";
                }
            } else {
                $data = $sql->row_array();
            }
            $datastart = "<form id='sendnotification' name='sendnotification' action=''  class='sendnotification'><table class='table table-striped table-bordered dataTable'>
                <tbody>
                    <tr>
                        <th>StudentID</th>
                        <th>Guardians Contact</th>
                        <th>Absence</th>
                    </tr>";
            $dataend = "<tr>
                    <td>Select All</td>
                    <td></td>
                    <td><input type='checkbox' id='allcheck' name='allabsence' value='all' /></td>
                </tr>
                <tr>
                <td>Message</td>
                <td><textarea name='message'></textarea></td>
                <td></td>
                </tr>
                <tr>
                        <th>
                            <input type='hidden' name='class' value='" . $rows->class . "'>
                            <input type='hidden' name='exam' value='" . $rows->exam . "'>
                            <input type='hidden' name='section' value='" . $rows->section . "'>
                            <input type='hidden' name='stdgroup' value='" . $rows->stdgroup . "'>
                            <input type='hidden' name='subjects' value='" . $rows->subjects . "'>
                            <input type='submit' value='Send Notification' name='submit' class='btn btn-primary'>
                        </th>
                        <th></th>
                    </tr></tbody></table>
                    </form>";
            $datafinal = $datastart . $data . $dataend;
            return $datafinal;
        } else
            return false;
    }
    
    public function viewAbsenceList($table, $join, $where, $option) {
        if (!empty($where))
            $sql = $this->db->get_where($table, $where);
        else
            $sql = $this->db->get($table);
        if ($sql->num_rows() > 0) {
            if ($option == "all") {
                foreach ($sql->result() as $rows) {
                    $data.="
                <tr>
                    <td>" . $rows->studentid . "</td>
                    <td>" . $rows->firstname." ".$rows->middlename ." " .$rows->lastname."</td>
                    <td>" . $rows->sf_phone . "</td>
                    
                </tr>";
                }
            } else {
                $data = $sql->row_array();
            }
            $datastart = "<form id='sendnotification' name='sendnotification' action=''  class='sendnotification'><table class='table table-striped table-bordered dataTable'>
                <tbody>
                    <tr>
                        <th>StudentID</th>
                        <th>Student Name</th>
                        <th>Guardians Contact</th>
                    </tr>";
            $dataend = "</tbody></table></form>";
            $datafinal = $datastart . $data . $dataend;
            return $datafinal;
        } else
            return false;
    }

    public function getStudentsForAbsenceNew($table, $join, $where, $option) {
        if (!empty($where))
            $sql = $this->db->get_where($table, $where);
        else
            $sql = $this->db->get($table);
        if ($sql->num_rows() > 0) {
            if ($option == "all") {
                foreach ($sql->result() as $rows) {
                    $data.="
                <tr>
                    <td>" . $rows->studentid . "</td>
                    <td>" . $rows->sf_phone . "</td>
                    <td> <input type='checkbox' class='absencecheck' name='absencenotify[]' value='" . $rows->studentid . "_" . $rows->sf_phone . "' /></td>
                </tr>";
                }
            } else {
                $data = $sql->row_array();
            }
            $datastart = "<form id='sendnotification' name='sendnotification' action=''  class='sendnotification'><table class='table table-striped table-bordered dataTable'>
                <tbody>
                    <tr>
                        <th>StudentID</th>
                        <th>Guardians Contact</th>
                        <th>Absence</th>
                    </tr>";
            $dataend = "<tr>
                    <td>Select All</td>
                    <td></td>
                    <td><input type='checkbox' id='allcheck' name='allabsence' value='all' /></td>
                </tr>
                <tr>
                <td>Message</td>
                <td><textarea name='message'></textarea></td>
                <td></td>
                </tr>
                <tr>
                        <th>
                            <input type='hidden' name='class' value='" . $rows->class . "'>
                            <input type='hidden' name='exam' value='" . $rows->exam . "'>
                            <input type='hidden' name='section' value='" . $rows->section . "'>
                            <input type='hidden' name='stdgroup' value='" . $rows->stdgroup . "'>
                            <input type='hidden' name='subjects' value='" . $rows->subjects . "'>
                            <input type='submit' value='Send Notification' name='submit' class='btn btn-primary'>
                        </th>
                        <th></th>
                    </tr></tbody></table>
                    </form>";
            $datafinal = $datastart . $data . $dataend;
            return $datafinal;
        } else
            return false;
    }

}
