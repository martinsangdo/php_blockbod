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
$route['default_controller'] = 'Welcome';
$route['404_override'] = 'notfound';
$route['translate_uri_dashes'] = FALSE;
$route['index.html'] = 'Welcome';

//
$route['blockchain-news/(:any)'] = 'news/$1';
$route['ico-detail/(:any)/(:any)'] = 'ico/Detail/$1';

//$route['test/(:any)'] = 'cron/CollectHome/$1';
//ADMIN routes
$route['admin_1/(:any)'] = 'admin/Admin/$1';
$route['admin_1/(:any)/(:any)'] = 'admin/Admin/$1/$2';

$route['admin-article/(:any)'] = 'admin/AdminArticle/$1';
$route['admin-article/(:any)/(:any)'] = 'admin/AdminArticle/$1/$2';

$route['admin-book/(:any)'] = 'admin/AdminBook/$1';
$route['admin-book/(:any)/(:any)'] = 'admin/AdminBook/$1/$2';

$route['admin-paper/(:any)'] = 'admin/AdminPaper/$1';
$route['admin-paper/(:any)/(:any)'] = 'admin/AdminPaper/$1/$2';

$route['admin-my-content/(:any)'] = 'admin/AdminMyContent/$1';
$route['admin-my-content/(:any)/(:any)'] = 'admin/AdminMyContent/$1/$2';

$route['admin-category/(:any)'] = 'admin/AdminCategory/$1';

$route['admin-contact/(:any)'] = 'admin/AdminContact/$1';
$route['admin-newsletter/(:any)'] = 'admin/AdminNewsletter/$1';

$route['publicapi/(:any)'] = 'PublicAPI/$1';
$route['publicapi/(:any)/(:any)'] = 'PublicAPI/$1/$2';

$route['admin-ad/(:any)'] = 'admin/AdminAdvertisement/$1';
