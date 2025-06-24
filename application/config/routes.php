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
$route['login-data'] = 'welcome/loginData';
$route['find-barcode'] = 'welcome/scanBarcode';
$route['search-barcode'] = 'welcome/searchBarcode';
$route['find-barcode/:any'] = 'welcome/searchBarcodeDetail';
$route['dashboard'] = 'welcome/Dashboard';
//sign up 
$route['sign-up']='welcome/signup';
$route['sign-up-data']='welcome/signupData';
//client add new ipr
$route['add-new-ipr'] = 'welcome/addNewIPR';
$route['add-barcode'] = 'welcome/addNewBarcode';
$route['add-new-barcode'] = 'welcome/addNewBarcodeData';
$route['order-detail-submit-data'] = 'welcome/addNewIPRData';
// Edit and delet order
$route['edit-ipr'] = 'welcome/editIPR';
$route['edit-ipr-product-detail'] = 'welcome/editIPRProductDetail';
$route['delet-ipr'] = 'welcome/deletIPR';

// Update ip order data
$route['update-ipr-data'] = 'welcome/updateIPRData';
$route['update-ipr-product-detail'] = 'welcome/updateIPRProductDetail';
//All ipr Data
$route['all-order-detail']='welcome/OrderDatail';
//--Order Product details
$route['products-detail']='welcome/IprProductView';
//admin side
$route['all-ipr-data']='welcome/IprListData';
$route['admin-dashboard']='welcome/AdminDashboard';

$route['logout'] = 'welcome/LogOut';

$route['default_controller'] = 'welcome';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;