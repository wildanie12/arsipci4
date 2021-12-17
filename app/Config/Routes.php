<?php

namespace Config;

use App\Models\TUK\TUKModel;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
// $routes->get('/', 'User::index');
$routes->get('/', function () {
	dd((new TUKModel())->findAll());
});

// $routes->get('asesi', 'Asesi\AsesiController::index');
// $routes->get('asesi/(:any)', 'Asesi\AsesiController::$1');

$routes->get('dashboard', 'Dashboard\DashboardController::index');
$routes->get('profil', 'Dashboard\ProfilController::index');
$routes->get('lampiran', 'Dashboard\LampiranController::index');

$routes->get('tuk', 'TUK\TUKController::index');
$routes->get('tuk/(:any)', 'TUK\TUKController::$1');

$routes->get('mitra_kerja', 'MitraKerja\MitraKerjaController::index');
$routes->get('mitra_kerja/(:any)', 'MitraKerja\MitraKerjaController::$1');

$routes->get('asesor', 'Asesor\AsesorInternalController::index');
$routes->get('asesor/internal', 'Asesor\AsesorInternalController::index');
$routes->get('asesor/internal/(:any)', 'Asesor\AsesorInternalController::$1');
$routes->get('asesor/eksternal', 'Asesor\AsesorEksternalController::index');
$routes->get('asesor/eksternal/(:any)', 'Asesor\AsesorEksternalController::$1');

$routes->get('personil', 'Personil\PersonilController::index');
$routes->get('personil/(:any)', 'Personil\PersonilController::$1');

$routes->get('asesi', 'Asesi\AsesiController::index');
$routes->get('asesi/asesi', 'Asesi\AsesiController::index');
$routes->get('asesi/asesi/(:any)', 'Asesi\AsesiController::$1');
$routes->get('asesi/surveilance', 'Asesi\SurveilanceController::index');
$routes->get('asesi/surveilance/(:any)', 'Asesi\SurveilanceController::$1');

$routes->group('resource', function($routes) {
	$routes->resource('tuk', ['controller' => 'Resources\TUK\TUKResource']);
	$routes->resource('mitra_kerja', ['controller' => 'Resources\MitraKerja\MitraKerjaResource']);
	$routes->resource('asesor', ['controller' => 'Resources\Asesor\AsesorResource']);
	$routes->resource('personil', ['controller' => 'Resources\Personil\PersonilResource']);
	$routes->resource('jabatan', ['controller' => 'Resources\JabatanResource']);
	$routes->resource('asesi', ['controller' => 'Resources\Asesi\AsesiResource']);
	$routes->resource('skema_sertifikasi', ['controller' => 'Resources\SkemaSertifikasiResource']);
	$routes->resource('lampiran', ['controller' => 'Resources\LampiranResource']);
});

$routes->group('export', function($routes) {
	$routes->post('tuk/spreadsheet', 'Exports\TUKExport::spreadsheet');
	$routes->post('mitra_kerja/spreadsheet', 'Exports\MitraKerjaExport::spreadsheet');
	$routes->post('asesor/spreadsheet', 'Exports\AsesorExport::spreadsheet');
	$routes->post('personil/spreadsheet', 'Exports\PersonilExport::spreadsheet');
	$routes->post('asesi/spreadsheet', 'Exports\AsesiExport::spreadsheet');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
