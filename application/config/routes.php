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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Login';
$route['emp_login'] = 'Login/emp_login';
$route['admin'] = 'Login/login';
$route['index'] = 'Login';
$route['login'] = 'Login/logindata';


$route['logout'] = 'Logout/logout';
$route['logouthr'] = 'Logout/logouthr';


$route['edits/(:num)'] = 'Home/editdata/$1';
$route['updateemp'] = 'Home/updateemp';
$route['delete/(:num)'] = 'Home/del_emp/$1';
$route['delete_message/(:num)'] = 'Home/del_message/$1';
$route['edit/(:num)'] = 'Home/editemp/$1';
$route['update_employee'] = 'Home/update';
$route['update_dept'] = 'Home/update_department';
$route['emp_active/(:num)'] = 'Home/active_emp/$1';
$route['emp_inactive/(:num)'] = 'Home/unacitve_emp/$1';
$route['department_active/(:num)'] = 'Home/acitve_dept/$1';
$route['department_inactive/(:num)'] = 'Home/unacitve_dept/$1';


$route['add_leave'] = 'Add/addleave';
$route['addleave'] = 'Add/leaveadd';
$route['add_employee'] = 'Add/employee';
$route['inputdata'] = 'Add/addemployee';
$route['add_message'] = 'Add/addmessage';


$route['leave_list'] = 'Listing/leave';
$route['leave_list_emp'] = 'Listing/leaveemp';
$route['department'] = 'Listing/dept_list';
$route['listing'] = 'Listing/emp_list';
$route['activity_log'] = 'Listing/activity_log';


$route['status/(:any)/(:num)/(:num)/(:num)'] = 'Approve/status/$1/$1/$1/$1';
$route['statusreject/(:num)'] = 'Approve/statusrej/$1';
$route['cancel_leave/(:num)'] = 'Approve/cancellv/$1';


$route['hrpanel'] = 'Dashboard/hrpanel';
$route['home'] = 'Dashboard/home';
$route['read'] = 'Dashboard/read';
$route['unread'] = 'Dashboard/unread';
$route['readed/(:num)'] = 'Dashboard/readed/$1';


$route['add_task'] = 'To_do/todo_task';
$route['task'] = 'To_do/addtask';
$route['task_list'] = 'To_do/task';
$route['deletetask/(:any)/(:num)'] = 'To_do/delete/$1/$1';
$route['edittask/(:num)'] = 'To_do/edit/$1';
$route['update'] = 'To_do/update';
$route['task_emp'] = 'To_do/addtaskemp';
$route['edittaskemp/(:num)'] = 'To_do/edittask/$1';
$route['updatetask'] = 'To_do/updatetaskemp';
$route['to_do_emp'] = 'To_do/todo_emp';
$route['deletetaskemp/(:any)'] = 'To_do/deletetask/$1';													


$route['permission'] = 'Permission/permission_page';
$route['add_permission'] = 'Permission/permission_add';
$route['permission_delete/(:num)'] = 'Permission/delete_permission/$1';
$route['permission_update'] = 'Permission/update_permission';    


$route['attendance'] = 'Attendance/attendance_page'; 
$route['attendance_add'] = 'Attendance/attendance_add';   
$route['attendance_view'] = 'Attendance/attendance_viewpage';
// $route['search_date'] = 'Attendance/attendance_search';

		
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
