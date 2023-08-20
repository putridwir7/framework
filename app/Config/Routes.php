<?php

namespace Config;

use CodeIgniter\Commands\Utilities\Routes;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login','Auth::login');
$routes->get('/register','Auth::register');
$routes->post('/registration','Auth::registration');
$routes->get('/logout','Auth::logout');
$routes->post('/authetication', 'Auth::authetication');

// beranda admin
$routes->group('admin',['filter'=>'loginadmin'],static function($routes){
$routes->get('dashboard','Admin::index'); 
$routes->get('jadwal','Admin::jadwal'); 
$routes->get('permintaan','Admin::permintaan'); 
$routes->get('ruangan', 'Ruang::index');
$routes->get('ruangan/create', 'Ruang::create');
$routes->post('ruangan/add', 'Ruang::add');
$routes->get('ruangan/show/(:any)', 'Ruang::show/$1');
$routes->post('ruangan/update/(:any)', 'Ruang::update/$1');
$routes->get('ruangan/delete/(:any)', 'Ruang::delete/$1');
$routes->get('login','Admin::login');
$routes->get('form','Admin::form');


});
// beranda user
$routes->group('user',['filter'=>'login'],static function($routes){
$routes->get('dashboard','Users::index'); 
$routes->get('jadwal','Users::jadwal'); 
$routes->get('profile','Users::profile'); 
$routes->get('jadwal','Users::jadwal'); 
$routes->get('permintaan','Users::permintaan'); 
$routes->get('ruangan/create', 'Ruang::create');
$routes->post('ruangan/add', 'Ruang::add');
$routes->get('ruangan/show/(:any)', 'Ruang::show/$1');
$routes->post('ruangan/update/(:any)', 'Ruang::update/$1');
$routes->get('ruangan/delete/(:any)', 'Ruang::delete/$1');
$routes->get('kelolaDataUser','Users::kelolaDataUser'); 
$routes->get('laporan','Users::laporan');
$routes->get('password','Admin::password');
$routes->get('login','Admin::login');
$routes->get('form','Admin::form');


});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
