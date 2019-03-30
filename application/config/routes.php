<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['projects'] = 'pages/projects';
$route['projects/abcd-egg'] = 'pages/abcdegg';
$route['projects/juamaji'] = 'pages/juamaji';
$route['projects/defluridated'] = 'pages/defluridated';
$route['discussions'] = 'pages/discussions';
$route['new-discussion'] = 'pages/create_discussion';
$route['discussion/(:num)/(:any)'] = 'pages/discussion_single/$1';
$route['thank-you'] = 'pages/thankyou';
$route['members'] = 'pages/members';
$route['uk-india-social-innovation-challenge'] = 'pages/in_challenge';
$route['international-conference'] = 'pages/in_conference';
$route['follow-on-meeting'] = 'pages/follow_meeting';
$route['meeting-and-seminar'] = 'pages/meetingSeminar';
$route['seep-network'] = 'pages/se_network';
$route['contact-us'] = 'pages/contact';

/*SOCIAL LOGIN*/
$route['social/auth/linkedin'] = 'auth/social_login';
$route['social/auth/login'] = 'auth/process';
$route['social/auth/login/failed'] = 'auth/failure';

$route['register'] = 'auth/user_register';
$route['account/activate/(:any)'] = 'auth/activation/$1';
$route['forgot-password'] = 'auth/forgot_pwd';
$route['account/forgot/(:any)'] = 'auth/do_forgot/$1';
$route['account/reset/success'] = 'auth/forgot_success';
$route['login'] = 'auth/user_login';
$route['my-account/profile'] = 'auth/my_account';
$route['my-account/change-password'] = 'auth/change_password';
$route['my-account/create-password'] = 'auth/create_password';
$route['logout'] = 'auth/logout';

/*ADMIN PAGE*/
$route['administrator'] = 'admin/ukiseen_admin';
$route['administrator/dashboard'] = 'admin/ukiseen_dashboard';
$route['administrator/discussion'] = 'admin/discussion';
$route['administrator/discussion/(:num)'] = 'admin/edit_discussion/$1';
$route['administrator/change-password'] = 'admin/change_password';
$route['administrator/users'] = 'admin/users_list';
$route['administrator/users/(:num)/block'] = 'admin/user_handler/$1';
$route['administrator/users/(:num)/activate'] = 'admin/user_handler/$1/activate';
$route['administrator/logout'] = 'admin/ukiseen_logout';
$route['administrator/status-changed'] = 'admin/discussion_status_modified';
$route['administrator/comments-changed'] = 'admin/comments_modified';
// $route['administrator/remove-discussion'] = 'admin/remove_discussion';