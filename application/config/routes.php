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
//$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['default_controller'] = 'pages';
$route['puja/book-pandit'] = 'page/book_pandit';

/*$route["dashboard"] = "profile";
$route['404_override'] = 'fuel/page_router';
$route['signin'] = '/login';
$route['signup'] = '/login/register';
$route['consult-online'] = 'pages/valentine.htm';

$route['puja'] = '/category/puja';
$route['astrology'] = '/category/astrology';
$route['article/(:any)'] = 'articles/view/$1';
$route['service/(:any)'] = 'services/view/$1';
$route['puja/(:any)'] = 'services/newview/$1';
$route['astrology/(:any)'] = 'services/newview/$1';

$route['puja/book-pandit'] = 'profile/pandit';
$route['articles/10-ncr-restaurants-to-break-your-fast'] = 'articles/view/16';

$route['aboutus.htm'] = 'page/about-us';
$route['terms-condition.htm'] = 'pages/terms-condition';
$route['privacy-policy.htm'] = 'pages/privacy-policy';
$route['thankyou.htm'] = 'pages/thankyou';
$route['offer.htm'] = 'pages/offer';


////////////////////////////////////////////////
$route['astrology/marriage-kundali-matching'] = 'pages/marriage-kundali-matching';
$route['astrology/online-marriage-prediction'] = 'pages/online-marriage-prediction';
$route['astrology/manglik-dosha-solution'] = 'pages/manglik-dosha-solution';
$route['astrology/child-pregnancy'] = 'pages/child-pregnancy';
$route['astrology/love-marriage-relationships'] = 'pages/love-marriage-relationships';
$route['astrology/medical-and-health'] = 'pages/medical-and-health';
$route['astrology/online-career-and-job'] = 'pages/online-career-and-job';
$route['translate_uri_dashes'] = FALSE;
*/