<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
   $routes->get('/', 'Home::index');
   $routes->get('Principal', 'Home::index');
   $routes->get('contacto', 'Home::contacto');
   $routes->get('comercializacion','Home::comercializacion');
   $routes->get('quienes','Home::quienessomos');
   $routes->get('terminos','Home::terminos');

   $routes->get('registrarse','usuario_controller::create');
   $routes->post('enviar-form', 'usuario_controller::formValidation');

   $routes->get('login', 'login_controller');
   $routes->post('enviar-login', 'login_controller::auth');
   $routes->get('Salir', 'login_controller::logout');


   $routes->add('productos', 'Home::productos');
 
   

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
