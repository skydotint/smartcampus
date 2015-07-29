<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model {

    private $user_infos = array();
    private $where = array();
    public $_usersTable = 'users';
    public $_settings = 'settings';
    public $_webpages = 'webpages';
    public $_students = 'students';
    public $_guardians = 'guardians';
    public $_guardianof = 'guardianof';
    public $_teachers = 'teachers';
    public $_staffs = 'staffs';
    public $_classroutine = 'classroutine';
    public $_absence = 'absence';
    public $_classes = 'classes';
    public $_sections = 'sections';
    public $_subjects = 'subjects';
    public $_departments = 'departments';
    public $_library = 'library';
    public $_galleries = 'galleries';
    public $_photos = 'photos';
    public $_books = 'books';
    public $_genders = 'genders';
    public $_academiccalendar = 'academiccalendar';
    public $_noticeboard = 'noticeboard';
    public $_hotels = 'hotels';
    public $_transports = 'transports';
    public $_study_groups = 'study_groups';
    public $_classperiod = 'classperiod';
    public $_classdays = 'classdays';
    public $_financialdepartments = 'financialdepartments';
    public $_accounts = 'accounts';
    public $_notices = 'notices';
    public $_news = 'news';
    public $_downloads = 'downloads';
    public $_applicants = 'applicants';
    public $_exams = 'exams';
    public $_results = 'results';
    public $_slides = 'slides';
    public $_othersresults = 'othersresults';
    public $_talentedstudents = 'talentedstudents';
    public $_academiccouncillors = 'academiccouncillors';
    public $_syllabuss = 'syllabus';
    public $_tcs = 'tcs';
	public $_counter_ips = 'counter_ips';
    public $_counter_values = 'counter_values';
    public $_users_groups = 'users_groups';

    /**
     * @package:EasyTask
     * @Common_model::construct().
     * @Author: Idea Tweaker
     */
    function __construct() {
        parent::__construct();
    }

    /**
     * @Common_model::insertRecords()
     * @access:public
     * @Author: Idea Tweaker
     * @params:$table
     * @params:$records
     */
    public function insertRecords($table, $records) {
        $sql = $this->db->insert($table, $records);
        return ($sql) ? true : false;
    }

    /**
     * @Common_model::isUserExist()
     * @access:public
     * @Author: Idea Tweaker
     * @params:where	
     * @return
     */
    public function isRecordsExists($table, $where) {
        return $this->getNumRows($table, $where);
    }

    /**
     * @Common_model::getNumRows()
     * @access:public
     * @Author: Idea Tweaker
     * @params:$table
     * @params:$where
     */
    public function getNumRows($table, $where = NULL) {
        if (!empty($where))
            $this->db->where($where);
        $this->db->from($table);
        return $this->db->count_all_results();
    }

    public function recordCount($table) {
        return $this->db->count_all($table);
    }

    public function getRecordsLimit($table, $limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($table);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
	
	public function getRecordsWithPager($table, $limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($table);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
	
	
	public function getRecordsWithPagerwhere($table, $where, $limit, $start, $option) {
		$this->db->limit($limit, $start);
		
		if (!empty($where))
            $query = $this->db->get_where($table, $where);
        else
			$query = $this->db->get($table);

        if ($query->num_rows() > 0) {

            if ($option == "all") {

                foreach ($query->result() as $rows) {

                    $data[] = $rows;
                }
            } else {

                $data = $query->row_array();
            }

            return $data;
        } else
            return false;

    }
	

    /**
     * @Common_model::updateRecords()
     * @access:public
     * @Author: Idea Tweaker
     * @params:$table
     * @params:$data
     * @params:$where
     */
    public function updateRecords($table, $data, $where) {
        if (!empty($where))
            $this->db->where($where);
        $sql = $this->db->update($table, $data);

        return ($sql) ? 1 : 0;
    }

    /**
     * @Common_model::getRecords()
     * @Author: Idea Tweaker
     * @access:public
     * @params:$table
     * @params:$where
     * @params:$option
     * @return
     */
    public function getRecords($table, $where, $option) {
        if (!empty($where))
            $sql = $this->db->get_where($table, $where);
        else
            $sql = $this->db->get($table);
        if ($sql->num_rows() > 0) {
            if ($option == "all") {
                foreach ($sql->result() as $rows) {
                    $data[] = $rows;
                }
            } else {
                $data = $sql->row_array();
            }
            return $data;
        } else
            return false;
    }

    /**
     * @Common_model::getRecordsjoinwhere()
     * @Author: Samrat Khan
     * @access:public
     * @params:$table
     * @params:$where
     * @params:$option
     * @return
     */
    public function getRecordsjoinwhere($table, $join, $where, $option) {

        if (!empty($where))
            $sql = $this->db->get_where($table, $where);
        else
            $sql = $this->db->get($table);

        if ($sql->num_rows() > 0) {

            if ($option == "all") {

                foreach ($sql->result() as $rows) {

                    $data[] = $rows;
                }
            } else {

                $data = $sql->row_array();
            }

            return $data;
        } else
            return false;
    }

    /**
     * @Common_model::getAllRecordsJoin()
     * @Author: Samrat Khan
     * @access:public
     * @params:$table
     * @params:$where
     * @params:$option
     * @return
     */
    public function getAllRecordsJoin($table, $join) {
        $sql = $this->db->get_where($table);
        foreach ($sql->result() as $rows) {
            $data[] = $rows;
        }
        return $data;
    }

    /**
     * @Common_model::deleteRecords()
     * @access:public
     * @params:$table
     * @params:$where
     * @Author: Idea Tweaker
     */
    public function deleteRecords($table, $where = '') {
        if (empty($where))
            $del = $this->db->empty_table($table);
        else
            $del = $this->db->delete($table, $where);
        return ($del) ? 1 : 0;
    }

    /**
     * @Common_model::getLastInserted()
     * @access:public
     * @Author: Idea Tweaker
     */
    public function getLastInserted() {
        return $this->db->insert_id();
    }

    /**
     * @Common_model:: getAllRecordsWhere($table, $where);
     * @param type $table
     * @param type $where
     * @return type
     */
    public function getAllRecordsWhere($table, $where) {
        $sql = $this->db->get_where($table, $where);
        foreach ($sql->result() as $rows) {
            $data = $sql->result();
        }
        return $data;
    }

    /**
     * @
     * @param type $table
     * @param type $records
     * @return type
     */
    public function insertBatch($table, $records) {
        $sql = $this->db->insert_batch($table, $records);
        return ($sql) ? true : false;
    }
    /**
     * 
     * @param type $table
     * @param type $records
     * @return type
     */
    public function updateBatch($table, $records) {
        $sql = $this->db->update_batch($table, $records , 'resultid');
        return ($sql) ? true : false;
    }

}
