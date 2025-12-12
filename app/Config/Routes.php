<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// DEFAULT IMPORTANT SETTINGS
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

// ================================
// HOME & DASHBOARD
// ================================
$routes->get('/', 'Dashboard::index');          
$routes->get('/dashboard', 'Dashboard::index'); 


// ================================
// AUTH (LOGIN / REGISTER / LOGOUT)
// ================================
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');

$routes->get('login', 'Login::index');
$routes->get('login/index', 'Login::index');
$routes->post('login/process', 'Login::process');
$routes->get('logout', 'Login::logout');



// ================================
// GROUP ROUTE "table"
// ================================
$routes->group('table', function($routes){

    // ========== TABLE 5.2 (PRASARANA) ==========
    $routes->get('table5_2', 'Table5_2::index');
    $routes->post('table5_2/new', 'Table5_2::create');
    $routes->get('table5_2/(:num)/edit', 'Table5_2::edit/$1');
    $routes->post('table5_2/(:num)/edit', 'Table5_2::edit/$1');
    $routes->get('table5_2/(:num)/delete', 'Table5_2::delete/$1');


    // ========== TABLE 3B71 ==========
    $routes->get('table3b71', 'Table3b71::index');
    $routes->get('table3b71/(:segment)/preview', 'Table3b71::preview/$1');
    $routes->add('table3b71/new', 'Table3b71::create');
    $routes->add('table3b71/(:segment)/edit', 'Table3b71::edit/$1');
    $routes->get('table3b71/(:segment)/delete', 'Table3b71::delete/$1');
    $routes->get('table3b71/cari', 'Table3b71::cari');


    // ========== TABLE 3B72 ==========
    $routes->get('table3b72', 'Table3b72::index');
    $routes->get('table3b72/(:segment)/preview', 'Table3b72::preview/$1');
    $routes->add('table3b72/new', 'Table3b72::create');
    $routes->add('table3b72/(:segment)/edit', 'Table3b72::edit/$1');
    $routes->get('table3b72/(:segment)/delete', 'Table3b72::delete/$1');
    $routes->get('table3b72/cari', 'Table3b72::cari');


    // ========== TABLE 3B73 ==========
    $routes->get('table3b73', 'Table3b73::index');
    $routes->get('table3b73/(:segment)/preview', 'Table3b73::preview/$1');
    $routes->add('table3b73/new', 'Table3b73::create');
    $routes->add('table3b73/(:segment)/edit', 'Table3b73::edit/$1');
    $routes->get('table3b73/(:segment)/delete', 'Table3b73::delete/$1');
    $routes->get('table3b73/cari', 'Table3b73::cari');


    // ========== TABLE 3B74 ==========
    $routes->get('table3b74', 'Table3b74::index');
    $routes->get('table3b74/(:segment)/preview', 'Table3b74::preview/$1');
    $routes->add('table3b74/new', 'Table3b74::create');
    $routes->add('table3b74/(:segment)/edit', 'Table3b74::edit/$1');
    $routes->get('table3b74/(:segment)/delete', 'Table3b74::delete/$1');
    $routes->get('table3b74/cari', 'Table3b74::cari');


    // ========== TABLE 5A ==========
    $routes->get('table5a', 'Table5a::index');
    $routes->get('table5a/(:segment)/preview', 'Table5a::preview/$1');
    $routes->add('table5a/new', 'Table5a::create');
    $routes->add('table5a/(:segment)/edit', 'Table5a::edit/$1');
    $routes->get('table5a/(:segment)/delete', 'Table5a::delete/$1');
    $routes->get('table5a/cari', 'Table5a::cari');


    // ========== TABLE 5B ==========
    $routes->get('table5b', 'Table5b::index');
    $routes->get('table5b/(:segment)/preview', 'Table5b::preview/$1');
    $routes->add('table5b/new', 'Table5b::create');
    $routes->add('table5b/(:segment)/edit', 'Table5b::edit/$1');
    $routes->get('table5b/(:segment)/delete', 'Table5b::delete/$1');
    $routes->get('table5b/cari', 'Table5b::cari');


    // ========== TABLE 5C ==========
    $routes->get('table5c', 'Table5c::index');
    $routes->get('table5c/(:segment)/preview', 'Table5c::preview/$1');
    $routes->add('table5c/new', 'Table5c::create');
    $routes->add('table5c/(:segment)/edit', 'Table5c::edit/$1');
    $routes->get('table5c/(:segment)/delete', 'Table5c::delete/$1');
    $routes->get('table5c/cari', 'Table5c::cari');

});
