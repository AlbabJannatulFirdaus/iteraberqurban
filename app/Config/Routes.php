<?php

namespace Config;

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);

$routes->add('pemesanan', 'Home::pesan');
$routes->add('pendaftaran', 'Home::daftar');
$routes->add('save', 'Home::save');
$routes->add('save2', 'Home::save2');
$routes->add('berhasil', 'Home::berhasil');
$routes->add('ambil-bagian', 'Home::penilaian');

$routes->add('admin/logout', 'Admin\Admin::logout');
$routes->add('user/logout', 'User\User::logout');

$routes->group('admin', ['filter' => 'noauth'], function ($routes) {
    $routes->add('', 'Admin\Admin::login');
    $routes->add('login', 'Admin\Admin::login');
    $routes->add('lupapassword', 'Admin\Admin::lupapassword');
    $routes->add('resetpassword', 'Admin\Admin::resetpassword');
});

$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->add('sukses', 'Admin\Admin::sukses');
    $routes->add('dashboard', 'Admin\Dashboard::index');
    $routes->add('dashboard/dataqurban', 'Admin\Dashboard::dataqurban');
    $routes->add('dashboard/tabungan', 'Admin\Dashboard::tabungan');
    $routes->add('dashboard/pendaftaran', 'Admin\Dashboard::pendaftaran');
    $routes->add('dashboard/pemesanan', 'Admin\Dashboard::pemesanan');
    $routes->add('dashboard/penerima', 'Admin\Dashboard::penerima');
    $routes->add('dashboard/galeri', 'Admin\Dashboard::galeri');
    $routes->add('dashboard/tambahpenerima', 'Admin\Dashboard::tambah_penerima');
    $routes->add('dashboard/store', 'Admin\Dashboard::store');
    $routes->add('dashboard/tambahgaleri', 'Admin\Dashboard::tambah_galeri');
    $routes->add('dashboard/rekap', 'Admin\Dashboard::rekap');
    $routes->add('dashboard/deletepesan/(:num)', 'Admin\Dashboard::delete_pemesanan/$1');
    $routes->add('dashboard/deletedaftar/(:num)', 'Admin\Dashboard::delete_pendaftaran/$1');
    $routes->add('dashboard/editpesan/(:num)', 'Admin\Dashboard::edit_pemesanan/$1');
    $routes->add('dashboard/updatepesan/(:num)', 'Admin\Dashboard::updatepesan/$1');
    $routes->add('dashboard/editdaftar/(:num)', 'Admin\Dashboard::edit_pendaftaran/$1');
    $routes->add('dashboard/updatedaftar/(:num)', 'Admin\Dashboard::updatedaftar/$1');
    $routes->add('dashboard/detail/(:segment)', 'Admin\Dashboard::detail_tabungan/$1');
    $routes->add('dashboard/deletetabungan/(:num)', 'Admin\Dashboard::delete_tabungan/$1');
    $routes->add('dashboard/editpenerima/(:num)', 'Admin\Dashboard::editpenerima/$1');
    $routes->add('dashboard/updatepenerima/(:num)', 'Admin\Dashboard::updatepenerima/$1');
    $routes->add('dashboard/deletepenerima/(:num)', 'Admin\Dashboard::deletepenerima/$1');
    $routes->add('dashboard/deletegaleri/(:num)', 'Admin\Dashboard::deletegaleri/$1');
});

$routes->group('user', ['filter' => 'noauthuser'], function ($routes) {
    $routes->add('', 'User\User::login');
    $routes->add('login', 'User\User::login');
    $routes->add('lupapassword', 'User\User::lupapassword');
    $routes->add('resetpassword', 'User\User::resetpassword');
    $routes->add('register', 'User\User::register');
    $routes->add('daftar', 'User\User::daftar');
});

$routes->group('user', ['filter' => 'authuser'], function ($routes) {
    $routes->add('hasil', 'User\User::hasil');
    $routes->add('dashboard', 'User\Dashboard::index');
    $routes->add('dashboard/tabungan', 'User\Dashboard::tabungan');
    $routes->add('dashboard/menabung', 'User\Dashboard::menabung');
    $routes->add('dashboard/create', 'User\Dashboard::create');
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
