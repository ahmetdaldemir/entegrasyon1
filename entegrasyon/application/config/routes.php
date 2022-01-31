<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
$route['default_controller'] = 'WelcomeB';
$route['Beta'] = 'WelcomeB';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['sepetim'] = 'Checkout';


$route['urun/(:any)/(:num)'] = 'View/product_detail/$1/$2';
$route['marka/(:any)/(:num)'] = 'View/marka/$1/$2';
$route['hesabim/(:num)/(:any)'] = 'View/hesabim/$1/$2';