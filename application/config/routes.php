<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'PagesController';
$route['about'] = 'PagesController/about';
$route['why-stemrx'] = 'PagesController/why_stemrx';

$route['api/appointment/new'] = 'AppointmentDataController/new';
$route['api/contact/new'] = 'AppointmentDataController/new_contact';

$route['contact-us'] = 'PagesController/contact';
$route['blogs'] = 'PagesController/blogs';
$route['service'] = 'PagesController/services';
$route['gallery'] = 'PagesController/gallery';

$route['privacy-policy'] = 'PagesController/privacy_policy';
$route['terms-condition'] = 'PagesController/terms_condition';
$route['return-policy'] = 'PagesController/return_policy';
$route['disclaimer'] = 'PagesController/disclaimer';

$route['patient-testimonial'] = 'PagesController/parent_testmonial';

$route['news'] = 'PagesController/news';
$route['pr-articles'] = 'PagesController/articles';


$route['media/(:any)'] = 'PagesController/media/$1';

$route['our-center/(:any)'] = 'PagesController/center/$1';


$route['about/(:any)'] = 'AboutController/about/$1';
$route['awards'] = 'AboutController/awards';
$route['academics'] = 'AboutController/academics';

$route['team-of-experts'] = 'TeamController/home';
$route['doctor/(:any)'] = 'TeamController/doctor/$1';

$route['shop'] = 'ShopController/home';
$route['product/(:any)'] = 'ShopController/product/$1';

$route['project'] = 'PagesController/services';
$route['team-detail'] = 'PagesController/team_detail';
$route['shop-detail'] = 'PagesController/shop_detail';
$route['blog-detail'] = 'PagesController/blog_detail';
$route['service-details'] = 'PagesController/service_detail';
$route['service/(:any)'] = 'PagesController/service_single/$1';

$route['condition/(:any)'] = 'DiseasesController/condition/$1';
$route['condition/(:any)/(:any)'] = 'DiseasesController/condition_detail/$1/$2';

$route['therapeutics'] = 'ProcedureController/home';
$route['therapeutics/(:any)'] = 'ProcedureController/procedure/$1';

$route['thank-you'] = 'AppointmentDataController/thank_you';

// $route['(:any)'] = 'PagesController/page/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
