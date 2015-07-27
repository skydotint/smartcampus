<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'homepage';
$route['outlet'] = 'auth/login';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['dashboard'] = 'auth/dashboard';
$route['addsysuser'] = 'auth/create_user';
$route['users'] = 'auth/index';
$route['profile'] = 'auth/profile';

// About Idea Tweaker
$route['aboutideatweaker'] = 'ideatweaker/index';
$route['aboutsmart'] = 'ideatweaker/aboutsmartcampus';

// System Settings
$route['systemsettings'] = 'settings/index';
$route['editsettings'] = 'settings/editsettings';
$route['settingsajax'] = 'settings/settingsajax';
$route['settingsinsinfoajax'] = 'settings/settingsinsinfoajax';
$route['savesettingsinsadminajax'] = 'settings/savesettingsinsadminajax';
$route['logosettingsajax'] = 'settings/logosettingsajax';
$route['instituteheaderajax'] = 'settings/instituteheaderajax';
$route['adminphotoajax'] = 'settings/adminphotoajax';
$route['headteacherajax'] = 'settings/headteacherajax';
$route['widgetsajax'] = 'settings/widgetsajax';


// Web Pages
$route['viewpages'] = 'webpages/index';
$route['addnewpage'] = 'webpages/addwebpageform';
$route['addwebpageajax'] = 'webpages/addwebpageajax';
$route['editwebpage/(:num)'] = 'webpages/editpageform';
$route['editwebpageajax'] = 'webpages/editwebpageajax';
$route['deletepage/(:num)'] = 'webpages/deletewebpageajax';

// Students
$route['viewstudents'] = 'outlet_students/index';
$route['viewallstudents'] = 'outlet_students/viewallstudents';
$route['viewxstudents'] = 'outlet_students/viewxstudents';
$route['viewstudentprofile/(:num)'] = 'outlet_students/viewstudentprofile';
$route['addnewstudent'] = 'outlet_students/addstudentform';
$route['addstudentajax'] = 'outlet_students/addstudentajax';
$route['deletestudent/(:num)'] = 'outlet_students/deletestudentajax';
$route['editstudent/(:num)'] = 'outlet_students/editstudentform';
$route['editstudentajax'] = 'outlet_students/editstudentajax';

// Talented Students
$route['viewtalentedstudents'] = 'talentedstudents/index';
$route['addnewtalentedstudent'] = 'talentedstudents/addtalentedstudentform';
$route['addtalentedstudentajax'] = 'talentedstudents/addtalentedstudentajax';
$route['deletetalentedstudent/(:num)'] = 'talentedstudents/deletetalentedstudentajax';
$route['edittalentedstudent/(:num)'] = 'talentedstudents/edittalentedstudentform';
$route['edittalentedstudentajax'] = 'talentedstudents/edittalentedstudentajax';

// Academic Councillors
$route['viewacademiccouncillors'] = 'academiccouncillors/index';
$route['addnewacademiccouncillor'] = 'academiccouncillors/addacademiccouncillorform';
$route['addacademiccouncillorajax'] = 'academiccouncillors/addacademiccouncillorajax';
$route['deleteacademiccouncillor/(:num)'] = 'academiccouncillors/deleteacademiccouncillorajax';
$route['editacademiccouncillor/(:num)'] = 'academiccouncillors/editacademiccouncillorform';
$route['editacademiccouncillorajax'] = 'academiccouncillors/editacademiccouncillorajax';

// Teachers
$route['viewteachers'] = 'teachers/index';
$route['viewallteachers'] = 'teachers/viewallteachers';
$route['viewxteachers'] = 'teachers/viewxteachers';
$route['viewxheadteachers'] = 'teachers/viewxheadteachers';
$route['addnewteacher'] = 'teachers/addteacherform';
$route['addteacherajax'] = 'teachers/addteacherajax';
$route['deleteteacher/(:num)'] = 'teachers/deleteteacherajax';
$route['editteacher/(:num)'] = 'teachers/editteacherform';
$route['editteacherajax'] = 'teachers/editteacherajax';

// Applicantss
$route['viewapplicants'] = 'applicants/index';
$route['addnewapplicant'] = 'applicants/addapplicantform';
$route['addapplicantajax'] = 'applicants/addapplicantajax';
$route['deleteapplicant/(:num)'] = 'applicants/deleteapplicantajax';
$route['editapplicant/(:num)'] = 'applicants/editapplicantform';
$route['editapplicantajax'] = 'applicants/editapplicantajax';

// Academic Calendar
$route['academiccalendar'] = 'academiccalendar/index';

// Classes
$route['viewclasses'] = 'classes/index';
$route['addnewclass'] = 'classes/addclassform';
$route['addclassajax'] = 'classes/addclassajax';
$route['deleteclass/(:num)'] = 'classes/deleteclassajax';
$route['editclass/(:num)'] = 'classes/editclassform';
$route['editclassajax'] = 'classes/editclassajax';


// Class Routine
$route['viewroutine'] = 'classroutine/viewroutine';
$route['addroutine'] = 'classroutine/addroutine';
$route['routineajax'] = 'classroutine/routineajax';
$route['getroutineajax'] = 'classroutine/getroutineajax';
$route['deleteroutine/(:num)'] = 'classroutine/deleteroutine';
$route['editroutine/(:num)'] = 'classroutine/editroutine';
$route['editroutineajax'] = 'classroutine/editroutineajax';

// Attendance
$route['attendance'] = 'attendance/attendance';
$route['attendanceajax'] = 'attendance/attendanceajax';
$route['sendnotification'] = 'attendance/sendnotification';

// Class Results 
$route['generateresults'] = 'results/generateresults';
$route['generateresultajax'] = 'results/generateresultajax';
$route['addresults'] = 'results/addresults';
$route['addresultajax'] = 'results/addresultajax';
$route['viewresults'] = 'results/viewresults';
$route['viewresults'] = 'results/viewresults';
$route['viewresultajax'] = 'results/viewresultajax';
$route['updateresult'] = 'results/updateresult';
$route['resultchangeajax'] = 'results/resultchangeajax';


// Sections
$route['viewsections'] = 'sections/index';
$route['addnewsection'] = 'sections/addsectionform';
$route['addsectionajax'] = 'sections/addsectionajax';
$route['deletesection/(:num)'] = 'sections/deletesectionajax';
$route['editsection/(:num)'] = 'sections/editsectionform';
$route['editsectionajax'] = 'sections/editsectionajax';

// Subjects
$route['viewsubjects'] = 'subjects/index';
$route['addnewsubject'] = 'subjects/addsubjectform';
$route['addsubjectajax'] = 'subjects/addsubjectajax';
$route['deletesubject/(:num)'] = 'subjects/deletesubjectajax';
$route['editsubject/(:num)'] = 'subjects/editsubjectform';
$route['editsubjectajax'] = 'subjects/editsubjectajax';

// Departments
$route['viewdepartments'] = 'departments/index';
$route['addnewdepartment'] = 'departments/adddepartmentform';
$route['adddepartmentajax'] = 'departments/adddepartmentajax';
$route['deletedepartment/(:num)'] = 'departments/deletedepartmentajax';
$route['editdepartment/(:num)'] = 'departments/editdepartmentform';
$route['editdepartmentajax'] = 'departments/editdepartmentajax';

// Holidays
$route['viewholidays'] = 'holidays/index';
$route['addnewholiday'] = 'holidays/addholidayform';
$route['addholidayajax'] = 'holidays/addholidayajax';
$route['deleteholiday/(:num)'] = 'holidays/deleteholidayajax';
$route['editholiday/(:num)'] = 'holidays/editholidayform';
$route['editholidayajax'] = 'holidays/editholidayajax';

// Downloads
$route['viewdownloads'] = 'downloads/index';
$route['addnewdownload'] = 'downloads/adddownloadform';
$route['adddownloadajax'] = 'downloads/adddownloadajax';
$route['deletedownload/(:num)'] = 'downloads/deletedownloadajax';
$route['editdownload/(:num)'] = 'downloads/editdownloadform';
$route['editdownloadajax'] = 'downloads/editdownloadajax';

// News
$route['viewnews'] = 'news/index';
$route['addnewnews'] = 'news/addnewsform';
$route['addnewsajax'] = 'news/addnewsajax';
$route['deletenews/(:num)'] = 'news/deletenewsajax';
$route['editnews/(:num)'] = 'news/editnewsform';
$route['editnewsajax'] = 'news/editnewsajax';

//Finance Department
$route['viewfinancialdepartments'] = 'financialdepartments/index';
$route['addnewfinancialdepartment'] = 'financialdepartments/addfinancialdepartmentform';
$route['addfinancialdepartmentajax'] = 'financialdepartments/addfinancialdepartmentajax';
$route['deletefinancialdepartment/(:num)'] = 'financialdepartments/deletefinancialdepartmentajax';
$route['editfinancialdepartment/(:num)'] = 'financialdepartments/editfinancialdepartmentform';
$route['editfinancialdepartmentajax'] = 'financialdepartments/editfinancialdepartmentajax';

// Credits
$route['viewcredits'] = 'credits/index';
$route['addnewcredit'] = 'credits/addcreditform';
$route['addcreditajax'] = 'credits/addcreditajax';
$route['deletecredit/(:num)'] = 'credits/deletecreditajax';
$route['editcredit/(:num)'] = 'credits/editcreditform';
$route['editcreditajax'] = 'credits/editcreditajax';

// Debits
$route['viewdebits'] = 'debits/index';
$route['addnewdebit'] = 'debits/adddebitform';
$route['adddebitajax'] = 'debits/adddebitajax';
$route['deletedebit/(:num)'] = 'debits/deletedebitajax';
$route['editdebit/(:num)'] = 'debits/editdebitform';
$route['editdebitajax'] = 'debits/editdebitajax';

// Staff
$route['viewstaffs'] = 'staffs/index';
$route['addnewstaff'] = 'staffs/addstaffform';
$route['addstaffajax'] = 'staffs/addstaffajax';
$route['deletestaff/(:num)'] = 'staffs/deletestaffajax';
$route['editstaff/(:num)'] = 'staffs/editstaffform';
$route['editstaffajax'] = 'staffs/editstaffajax';

// Books
$route['viewbooks'] = 'books/index';
$route['addnewbook'] = 'books/addbookform';
$route['addbookajax'] = 'books/addbookajax';
$route['deletebook/(:num)'] = 'books/deletebookajax';
$route['editbook/(:num)'] = 'books/editbookform';
$route['editbookajax'] = 'books/editbookajax';

// Gallerys
$route['viewgalleries'] = 'galleries/index';
$route['addnewgallery'] = 'galleries/addgalleryform';
$route['addgalleryajax'] = 'galleries/addgalleryajax';
$route['deletegallery/(:num)'] = 'galleries/deletegalleryajax';
$route['editgallery/(:num)'] = 'galleries/editgalleryform';
$route['editgalleryajax'] = 'galleries/editgalleryajax';

// Notice
$route['viewnotices'] = 'notices/index';
$route['addnewnotice'] = 'notices/addnoticeform';
$route['addnoticeajax'] = 'notices/addnoticeajax';
$route['deletenotice/(:num)'] = 'notices/deletenoticeajax';
$route['editnotice/(:num)'] = 'notices/editnoticeform';
$route['editnoticeajax'] = 'notices/editnoticeajax';


// syllabus
$route['viewsyllabuss'] = 'syllabuss/index';
$route['addnewsyllabus'] = 'syllabuss/addsyllabusform';
$route['addsyllabusajax'] = 'syllabuss/addsyllabusajax';
$route['deletesyllabus/(:num)'] = 'syllabuss/deletesyllabusajax';
$route['editsyllabus/(:num)'] = 'syllabuss/editsyllabusform';
$route['editsyllabusajax'] = 'syllabuss/editsyllabusajax';


// Others Result
$route['viewothersresults'] = 'othersresults/index';
$route['addnewothersresult'] = 'othersresults/addothersresultform';
$route['addothersresultajax'] = 'othersresults/addothersresultajax';
$route['deleteothersresult/(:num)'] = 'othersresults/deleteothersresultajax';
$route['editothersresult/(:num)'] = 'othersresults/editothersresultform';
$route['editothersresultajax'] = 'othersresults/editothersresultajax';

// Photos
$route['viewphotos'] = 'photos/index';
$route['addnewphoto'] = 'photos/addphotoform';
$route['addphotoajax'] = 'photos/addphotoajax';
$route['deletephoto/(:num)'] = 'photos/deletephotoajax';
$route['editphoto/(:num)'] = 'photos/editphotoform';
$route['editphotoajax'] = 'photos/editphotoajax';

// Users Panel
$route['chngp'] = 'auth/change_password';
$route['forgp'] = 'auth/forgot_password';
$route['adduser'] = 'auth/create_user';


// Slideshows
$route['viewslides'] = 'slides/index';
$route['addnewslide'] = 'slides/addslideform';
$route['addslideajax'] = 'slides/addslideajax';
$route['deleteslide/(:num)'] = 'slides/deleteslideajax';
$route['editslide/(:num)'] = 'slides/editslideform';
$route['editslideajax'] = 'slides/editslideajax';

// TCS
$route['viewtcs'] = 'tcs/index';
$route['viewtestimonials'] = 'tcs/viewtestimonials';
$route['viewprottoyans'] = 'tcs/viewprottoyans';
$route['viewtotlists'] = 'tcs/viewtotlists';
$route['viewprevious'] = 'tcs/viewprevious';
$route['addnewtc'] = 'tcs/addtcform';
$route['addtcajax'] = 'tcs/addtcajax';
$route['deletetc/(:num)'] = 'tcs/deletetcajax';
$route['edittc/(:num)'] = 'tcs/edittcform';
$route['edittcajax'] = 'tcs/edittcajax';


// Web Pages in Front
$route['page/(:any)'] = 'page/page';
$route['notice/(:any)'] = 'notice/notice';
$route['download/(:any)'] = 'download/download';
$route['latestnews/(:any)'] = 'latestnews/latestnews';
$route['headmastermessage/(:any)'] = 'headmastermessage/headmastermessage';
$route['headteacher/(:any)'] = 'headteacher/headteacher';
$route['anotherresult/(:any)'] = 'anotherresult/anotherresult';
$route['talentstudent/(:any)'] = 'talentstudent/talentstudent';
$route['academiccouncill/(:any)'] = 'academiccouncill/academiccouncill';
$route['syllabus/(:any)'] = 'syllabus/syllabus';
$route['gallery/(:any)'] = 'gallery/index';
$route['student/(:any)'] = 'student/index';
$route['xstudent/(:any)'] = 'xstudent/xstudent';
$route['studentinfo/(:any)'] = 'student/studentinfo';
$route['searchstudent'] = 'student/searchstudentajax';
$route['teacher/(:any)'] = 'teacher/index';
$route['xteacher/(:any)'] = 'xteacher/xteacher';
$route['teacherinfo/(:any)'] = 'teacher/teacherinfo';
$route['staff/(:any)'] = 'staff/index';
$route['xstaff/(:any)'] = 'xstaff/xstaff';
$route['staffinfo/(:any)'] = 'staff/staffinfo';
$route['xheadteacher/(:any)'] = 'xheadteacher/xheadteacher';
$route['addonlineapplicantajax'] = 'onlineadmission/addonlineapplication';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

