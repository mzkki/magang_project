<?php

namespace Config;

use CodeIgniter\Controller;
use Myth\Auth\Filters\RoleFilter;
use PhpParser\Node\Stmt\Echo_;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'user::index' );

//admin page routes
$routes->get('/admin', 'admin::laporan', ['filter' => 'role:admin']);
$routes->get('/admin/pelajar', 'admin::pelajar', ['filter' => 'role:admin']);
$routes->get('/admin/guru', 'admin::guru', ['filter' => 'role:admin']);
$routes->get('/admin/sekolah', 'admin::sekolah', ['filter' => 'role:admin']);
$routes->get('/admin/laporan', 'admin::laporan', ['filter' => 'role:admin']);

//pelajar page routes
$routes->get('/pelajar', 'pelajar::laporan', ['filter' => 'role:pelajar']);
$routes->get('/pelajar/insert', 'pelajar::insert', ['filter' => 'role:pelajar']);
$routes->get('/pelajar/pengaturan', 'pelajar::pengaturan', ['filter' => 'role:pelajar']);
$routes->get('/pelajar/laporan', 'pelajar::laporan', ['filter' => 'role:pelajar']);

//guru dan pembimbing page routes
$routes->get('/guru', 'guru::laporan', ['filter' => 'role:guru,pembimbing']);
$routes->get('/guru/pelajar', 'guru::pelajar', ['filter' => 'role:guru,pembimbing']);
$routes->get('/guru/pengaturan', 'guru::pengaturan', ['filter' => 'role:guru,pembimbing']);
$routes->get('/guru/laporan', 'guru::laporan', ['filter' => 'role:guru,pembimbing']);

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
