<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @Helper::getJsonEncode()
 * @Author: Idea Tweaker
 * @params:$data
 * @return
 */
function jsonEncode($data) {
    header('Content-Type: application/json');
    return json_encode($data);
}

/**
 * @Helper::jsonDecode()
 * @Author: Idea Tweaker
 * @params:$data
 * @return
 */
function jsonDecode($data) {
    return json_decode($data);
}

/**
 * @Helper::setSerialize()
 * @Author: Idea Tweaker
 * @params:$data
 * @return
 */
function serializeArr($data) {
    return serialize($data);
}

/**
 * @Helper::unserializeArr()
 * @Author: Idea Tweaker
 * @params:$data
 * @return
 */
function unserializeArr($data) {
    return unserialize($data);
}

/**
 * @Helper::base64Encode()
 * @Author: Idea Tweaker
 * @params:$data
 * @return
 */
function base64Encode($data) {
    return base64_encode($data);
}

/**
 * @Helper::base64Decode()
 * @Author: Idea Tweaker
 * @params:$data
 * @return
 */
function base64Decode($data) {
    return base64_decode($data);
}

/**
 * @Helper::implodeArr()
 * @Author: Idea Tweaker
 * @params:$separator
 * @params:$array
 * @return
 */
function implodeArr($separator, $array) {
    return implode($separator, $array);
}

/**
 * @Helper::base64Decode()
 * @Author: Idea Tweaker
 * @params:$min
 * @params:$max
 * @return
 */
function getRange($min, $max) {
    return range($min, $max);
}

/**
 * @Helper::base64Decode()
 * @Author: Idea Tweaker
 * @params:$min
 * @params:$max
 * @return
 */
function strReplace($match, $slag, $str) {
    return str_replace($match, $slag, $str);
}

/**
 * @Helper::sprtf()
 * @Author: Idea Tweaker
 * @params:$num
 * @params:$slag
 * @return
 */
function sprtf($num, $slag) {
    return sprintf('%.' . $slag . 'f', $num);
}

/**
 * @Helper::getDayLists()
 * @Author: Idea Tweaker
 * @return
 */
function getDayLists() {

    $day = '';
    $selected = '';
    $Arr = array(
        '01' => "01",
        '02' => "02",
        '03' => "03",
        '04' => "04",
        '05' => "05",
        '06' => "06",
        '07' => "07",
        '08' => "08",
        '09' => "09",
        '10' => "10",
        '11' => "11",
        '12' => "12",
        '13' => "13",
        '14' => "14",
        '15' => "15",
        '16' => "16",
        '17' => "17",
        '18' => "18",
        '19' => "19",
        '20' => "20",
        '21' => "21",
        '22' => "22",
        '23' => "23",
        '24' => "24",
        '25' => "25",
        '26' => "26",
        '27' => "27",
        '28' => "28",
        '29' => "29",
        '30' => "30",
        '31' => "31"
    );

    foreach ($Arr as $key => $values) {

        if ($values == date('d'))
            $selected = 'selected="selected"';
        else
            $selected = '';

        $day .= "<option value=\"" . $values . "\"";
        $day .= $selected;
        $day .= ">" . $values . "</option>\n";

        if ($values == date('t'))
            break;
    }

    return $day;
}

/**
 * @Helper::getMonthLists()
 * @Author: Idea Tweaker
 * @return
 */
function getMonthLists() {

    $arr = array(
        '01' => "01",
        '02' => "02",
        '03' => "03",
        '04' => "04",
        '05' => "05",
        '06' => "06",
        '07' => "07",
        '08' => "08",
        '09' => "09",
        '10' => "10",
        '11' => "11",
        '12' => "12"
    );

    $monthlist = '';

    foreach ($arr as $key => $val) {
        $monthlist .= "<option value=\"$key\"";
        $monthlist .= ($key == date('m')) ? ' selected="selected"' : '';
        $monthlist .= ">$val</option>\n";
    }

    return $monthlist;
}

/**
 * @Helper::setFirstLetterCapital()
 * @Author: Idea Tweaker
 * @params:$word
 * @return
 */
function setFirstLetterCapital($word) {
    return ucfirst($word);
}

/**
 * @GeneralModel::getToken()
 * @access:public
 * @params:length
 * @Author: Idea Tweaker
 * @return $code
 */
function getToken($length = "") {

    $code = uniqid(rand(), true);
    if ($length != "") {
        return substr($code, 0, $length);
    } else
        return $code;
}

/**
 * @Helper::hashSha1()
 * @Author: Idea Tweaker
 * @params:$data
 * @return
 */
function hashSha1($data) {
    return sha1($data);
}

/**
 * @Helper::getAdminType()
 * @Author: Idea Tweaker
 * @params:$priority
 * @return
 */
function getAdminType($priority) {

    switch ($priority) {
        case 1: $designation = 'Moderators';
            break;
        case 3: $designation = 'Staffs';
            break;
        case 5: $designation = 'Teachers';
            break;
        case 9: $designation = 'Students';
            break;
    }

    return $designation;
}

/**
 * @Helper::getAdminStatus()
 * @Author: Idea Tweaker
 * @params:$satus
 * @return
 */
function getAdminStatus($status) {

    switch ($status) {
        case 0: $designation = 'Inactive';
            break;
        case 2: $designation = 'Retired';
            break;
        case 3: $designation = 'Active';
            break;
    }

    return $designation;
}

/**
 * @Helper::getSmsUsers()
 * @Author: Idea Tweaker
 * @return
 */
function getSmsUsers() {

    $ci = & get_instance();
    $ci->db->group_by('user_priority');
    $sql = $ci->db->get("sms_users");

    if ($sql->num_rows() > 0) {

        return $sql->result();
    } else
        return '';
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
function getRecordsHelper($table, $where, $option) {

    $ci = & get_instance();

    if (!empty($where))
        $sql = $ci->db->get_where($table, $where);
    else
        $sql = $ci->db->get($table);

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
 * @package: SmartCampus
 * @helper::mbConvertEncoding().
 * @Author: Idea Tweaker
 */
function mbConvertEncoding($text) {
    return mb_convert_encoding($text, 'ISO-8859-15', 'UTF-8');
}

/**
 * @package: SmartCampus
 * @helper::getArraySum().
 * @Author: Idea Tweaker
 */
function getArraySum($array) {
    return array_sum($array);
}

/**
 * @package: SmartCampus
 * @helper::getCount().
 * @Author: Idea Tweaker
 */
function getCount($array) {
    return count($array);
}

/**
 * @package: SmartCampus
 * @helper::getArraySum().
 * @Author: Idea Tweaker
 */
function getExplode($slag, $str) {
    return explode($slag, $str);
}

/**
 * @package: SmartCampus
 * @helper::getArraySum().
 * @Author: Idea Tweaker
 */
function getImplode($slag, $str) {
    return implode($slag, $str);
}

/**
 * @package: SmartCampus
 * @helper::getRound().
 * @Author: Idea Tweaker
 */
function getRound($num, $decimal_num) {
    return round($num, $decimal_num);
}

/**
 * @package: SmartCampus
 * @helper::add_js().
 * @Author: Idea Tweaker
 */
if (!function_exists('add_js')) {

    function add_js($file = '') {
        $str = '';
        $ci = &get_instance();
        $header_js = $ci->config->item('header_js');

        print_r($header_js);

        if (empty($file)) {
            return;
        }

        if (is_array($file)) {
            if (!is_array($file) && count($file) <= 0) {
                return;
            }
            foreach ($file AS $item) {
                $header_js[] = $item;
            }
            $ci->config->set_item('header_js', $header_js);
        } else {
            $str = $file;
            $header_js[] = $str;
            $ci->config->set_item('header_js', $header_js);
        }
    }

}
/**
 * @package: SmartCampus
 * @helper::add_css().
 * @Author: Idea Tweaker
 */
if (!function_exists('add_css')) {

    function add_css($file = '') {
        $str = '';
        $ci = &get_instance();
        $header_css = $ci->config->item('header_css');

        if (empty($file)) {
            return;
        }

        if (is_array($file)) {
            if (!is_array($file) && count($file) <= 0) {
                return;
            }
            foreach ($file AS $item) {
                $header_css[] = $item;
            }
            $ci->config->set_item('header_css', $header_css);
        } else {
            $str = $file;
            $header_css[] = $str;
            $ci->config->set_item('header_css', $header_css);
        }
    }

}
/**
 * @package: SmartCampus
 * @helper::put_headers().
 * @Author: Idea Tweaker
 */
if (!function_exists('put_headers')) {

    function put_headers() {
        $str = '';
        $ci = &get_instance();
        $header_css = $ci->config->item('header_css');

        foreach ($header_css AS $item) {
            $str_css[] = $item;
            $str .= '<link rel="stylesheet" href="' . base_url() . '' . $item . '" type="text/css" />' . "\n";
        }
        return $str;
    }

}
/**
 * @package: SmartCampus
 * @helper::put_footer().
 * @Author: Idea Tweaker
 */
if (!function_exists('put_footer')) {

    function put_footer() {
        $str = '';
        $ci = &get_instance();
        $footer_js = $ci->config->item('footer_js');

        foreach ($footer_js AS $item) {
            $str .= '<script  type="text/javascript"  src="' . base_url() . '' . $item . '"></script>' . "\n";
        }

        return $str;
    }

}

/**
 * @package: SmartCampus
 * @helper::setOutPut().
 * @Author: Idea Tweaker
 */
function setOutPut() {
    $ci = &get_instance();
    $ci->output->set_output('YES');
}

/**
 * @package: SmartCampus
 * @helper::isSession().
 * @Author: Idea Tweaker
 */
function isSession() {
    $ci = &get_instance();
    $isSession = $ci->session->userdata("token");

    return
            ($isSession) ? $isSession : 0;
}

/**
 * @package: SmartCampus
 * @helper::isArray().
 * @Author: Idea Tweaker
 */
function isArray($array) {
    return is_array($array);
}

/**
 * @package: SmartCampus
 * @helper::isModerator().
 * @Author: Idea Tweaker
 */
function isModerator() {
    return (getSession('token') == 1) ? 1 : 0;
}

/**
 * @package: SmartCampus
 * @helper::isTeacher().
 * @Author: Idea Tweaker
 */
function isTeacher() {
    return (getPriority() == 5) ? 1 : 0;
}

/**
 * @package: SmartCampus
 * @helper::isStaff().
 * @Author: Idea Tweaker
 */
function isStaff() {
    return (getPriority() == 3) ? 1 : 0;
}

/**
 * @package: SmartCampus
 * @helper::isStudent().
 * @Author: Idea Tweaker
 */
function isStudent() {
    return (getPriority() == 9) ? 1 : 0;
}

/**
 * @package: SmartCampus
 * @helper::getPriority().
 * @Author: Idea Tweaker
 */
function getPriority() {
    $ci = getInstance();
    return $ci->session->userdata("priority");
}

/**
 * @package: SmartCampus
 * @helper::getInstance().
 * @Author: Idea Tweaker
 */
function getInstance() {
    $ci = &get_instance();
    return $ci;
}

function loadCommon_model() {
    $ci = getInstance();
    return $ci->load->model("admin/common_model");
}

/**
 * @package: SmartCampus
 * @getOrientedDecision::getMaxArrayValue().
 * @Author: Idea Tweaker
 */
function getMaxArrayValue($array) {
    return max($array);
}

/**
 * @package: SmartCampus
 * @getOrientedDecision::getMinArrayValue().
 * @Author: Idea Tweaker
 */
function getMinArrayValue($array) {
    return min($array);
}

/**
 * @package: SmartCampus
 * @helper::getTime().
 * @Author: Idea Tweaker
 */
function getTime() {
    return date("Y-m-d H:i:s");
}

/**
 * @package: SmartCampus
 * @helper::setRules()
 * @access:private
 * @params:$config
 * @Author: Idea Tweaker
 * @return
 */
function setRules($config) {

    $ci = getInstance();
    return $ci->form_validation->set_rules($config);
}

/**
 * @package: SmartCampus
 * @helper::setCookies()
 * @access:private
 * @Author: Idea Tweaker
 */
function setCookies($cookie) {
    $ci = getInstance();
    $ci->input->set_cookie($cookie);
}

/**
 * @package: SmartCampus
 * @helper::getCookie()
 * @access:private
 * @Author: Idea Tweaker
 * @return:cookie
 */
function getCookie($name) {
    $ci = getInstance();
    return ($ci->input->cookie($name)) ? $ci->input->cookie($name) : 0;
}

/**
 * @package: SmartCampus
 * @helper::storeLogHistory()
 * @params:$data
 * @Author: Idea Tweaker
 * @return:void
 */
function storeLogHistory($data) {
    $ci = getInstance();
    $ci->common_model->insertRecords($ci->common_model->_logTable, $data);
}

/**
 * @helper::getUserIp()
 * @Author: Idea Tweaker
 */
function getUserIp() {
    $ci = getInstance();
    return $ci->input->ip_address();
}

/**
 * @helper::alertShutdown()
 * @Author: Idea Tweaker
 */
function alertShutdown() {
    $ci = getInstance();
    $session = $ci->auth_model->getSession();
    $data = array();
    $data['logout_time'] = getTime();
    $data['logout_type'] = 'Auto';
    $data['ip_address'] = getUserIp();
    $data['userid'] = $session['token'];

    if (connection_aborted())
        storeLogHistory($data);
}

/**
 * @package: SmartCampus
 * @helper::getCurrentsUrl().
 * @Author: Idea Tweaker
 */
function getCurrentsUrl() {
    return (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : base_url();
}

/**
 * @package: SmartCampus
 * @helper::getCurrentsUrl().
 * @Author: Idea Tweaker
 */
function getSession($session = NULL) {
    $ci = getInstance();
    $ci->status_ = $ci->session->userdata("token");

    if ($session)
        $session = $ci->session->userdata($session);
    else
        $session = $ci->session->all_userdata();

    return ($ci->status_ && $session) ? $session : 0;
}

/**
 * @package: SmartCampus
 * @helper::getCurrentsUrl().
 * @Author: Idea Tweaker
 */
function getUserPhoto() {
    $allsession = getSession();
    return $allsession['user_photo'];
}

/**
 * @package: SmartCampus
 * @helper::getCurrentsUrl().
 * @Author: Idea Tweaker
 */
function getMesgNum() {

    $ci = getInstance();
    $allsession = getSession();
    $where = array("id" => $allsession['token']);
    $user_infos = $ci->common_model->getRecords($ci->common_model->_usersTable, $where, 's');

    return $ci->common_model->getNumRows($ci->common_model->_messageTable, array('account' => $user_infos['mailbox']));
}

/**
 * @package: SmartCampus
 * @helper::getUsers().
 * @Author: Idea Tweaker
 */
function getUsers() {
    $ci = getInstance();
    return $ci->common_model->getRecords($ci->common_model->_usersTable, '', 'all');
}

/**
 * @package: SmartCampus
 * @helper::getUserById().
 * @Author: Idea Tweaker
 */
function getUserById($id) {
    $ci = getInstance();
    return $ci->common_model->getRecords($ci->common_model->_usersTable, array('id' => $id), 's');
}

/**
 * @package: SmartCampus
 * @helper::getUsersNum()().
 * @Author: Idea Tweaker
 */
function getUsersNum() {

    $ci = getInstance();
    return $ci->common_model->getNumRows($ci->common_model->_usersTable, '');
}

/**
 * @package: SmartCampus
 * @helper::getUsersNum()().
 * @Author: Idea Tweaker
 */
function isForceChangePwd() {
    $allsession = getSession();
    return (isset($allsession['force_to_change_password']) && $allsession['force_to_change_password'] == 1) ? 1 : 0;
}

/**
 * @package: SmartCampus
 * @helper::getUserAccessPages().
 * @Author: Idea Tweaker
 */
function getUserAccessPages($id) {

    $ci = getInstance();
    $sql_pages = $ci->common_model->getRecords($ci->common_model->_accessPagesTable, '', 'all');
    $pages = array();

    foreach ($sql_pages as $lists) {

        if (in_array($id, getExplode(',', $lists->user_groups))) {
            $pages[] = $lists;
        }
    }

    return $pages;
}

/**
 * @package: SmartCampus
 * @helper::isUserAllowwedToAccessMenu().
 * @Author: Idea Tweaker
 */
function isUserAllowwedToAccessMenu($menu) {

    $ci = getInstance();
    $where = array('page_name' => $menu);

    if (getSession('token') != 1) {
        if ($ci->common_model->isRecordsExists($ci->common_model->_accessPagesTable, $where)) {

            $sql_pages = $ci->common_model->getRecords($ci->common_model->_accessPagesTable, $where, 's');

            return
                    (in_array(getSession('token'), getExplode(',', $sql_pages['user_groups']))) ? 1 : 0;
        } else
            return 0;
    } else
        return 1;
}

function switchCaseForJob($status) {
    switch ($status) {
        case 1:
            $statusVar = "Awaiting review";
            break;
        case 2:
            $statusVar = "Jobs in progress";
            break;
        case 3:
            $statusVar = "Jobs on hold";
            break;
        default:
            break;
    }
    return $statusVar;
}

function anchorLink($route, $url, $text) {
    $html .= "<a href='" . base_url() . "{$route}/{$url}'>{$text}</a>";
    return $html;
}

function settingsImg($imgvar) {
    return '<img src="' . base_url() . 'uploads/settings/' . $imgvar . '" />';
}

/**
 * 
 * @param type $url Google Maps Url
 * @param type $w Width
 * @param type $h Height
 * @param type $frameb Frame Border
 * @return type varchar
 */
function gMapsView($url, $w, $h, $frameb) {
    return '<iframe src="' . $url . '" '
            . 'width="' . $w . '" '
            . 'height="' . $h . '" '
            . 'frameborder="' . $frameb . '" '
            . 'style="border:0" '
            . 'allowfullscreen>'
            . '</iframe>';
}

/**
 * 
 * @param type $limit Limit of Characters
 * @param type $string Limit String
 * @return string Return as String for output
 */
function wordLimit($limit, $string) {
    $string = strip_tags($string);

    if (strlen($string) > $limit) {

        // truncate string
        $stringCut = substr($string, 0, $limit);

        // make sure it ends in a word so assassinate doesn't become ass...
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
    }
    return $string;
}

function bn2enNumber($number) {
        $search_array = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
        $replace_array = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
        $en_number = str_replace($replace_array, $search_array, $number);
        return $en_number;
    }

function sendSms($message, $receiver) {
    $smscontent = urlencode($message);
    $url = "http://app.planetgroupbd.com/api/sendsms/plain?user=habibkhan&password=01673771316&sender=Friend&SMSText=" . $smscontent . "&GSM=88" . $receiver . "";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $data = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
}

/* End of file helper.php */
/* Location: ./application/helpers/helper.php */
?>