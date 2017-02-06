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
$route['default_controller'] = 'Redirect_controller';
// data
$route['home'] = 'Redirect_controller/home';
$route['narkoba'] = 'Redirect_controller/narkoba';
$route['artikel'] = 'Redirect_controller/artikel/';
$route['grid'] = 'Redirect_controller/grid';
$route['data_narkoba'] = 'Redirect_controller/data_narkoba';
$route['contact'] = 'Redirect_controller/contact';
$route['logout'] = 'Redirect_controller/logout';
$route['gambar'] = 'Redirect_controller/gambar';
$route['data_artikel'] = 'Redirect_controller/data_artikel';
$route['efek'] = 'Redirect_controller/data_efek';
$route['detail_narkoba'] = 'Redirect_controller/detail_narkoba';
$route['detail_artikel'] = 'Redirect_controller/detail_artikel';
$route['editor'] = 'Redirect_controller/editor';

//edit
$route['edit_golongan'] = 'Redirect_controller/edit_golongan';
$route['edit_jenis'] = 'Redirect_controller/edit_jenis';
$route['edit_efek'] = 'Redirect_controller/edit_efek';
$route['edit_narkoba'] = 'Redirect_controller/edit_narkoba';
$route['edit_artikel'] = 'Redirect_controller/edit_artikel';

//tambah
$route['tambah_narkoba'] = 'Redirect_controller/tambah_narkoba';
$route['tambah_artikel'] = 'Redirect_controller/tambah_artikel';
$route['tambah_golongan'] = 'Redirect_controller/tambah_golongan';
$route['tambah_jenis'] = 'Redirect_controller/tambah_jenis';
$route['tambah_admin'] = 'Redirect_controller/tambah_admin';
$route['tambah_efek'] = 'Redirect_controller/tambah_efek';

//cetak
$route['cetak_per_narkoba'] = 'Redirect_controller/cetak_per_narkoba';
$route['cetak_semua_narkoba'] = 'Redirect_controller/cetak_semua_narkoba';
$route['cetak_semua_narkoba2'] = 'Redirect_controller/cetak_semua_narkoba2';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
