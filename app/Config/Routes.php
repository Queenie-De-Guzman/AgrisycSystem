<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingpageController::index');
$routes->get('/Contact', 'LandingpageController::Contact');
$routes->get('/About', 'LandingpageController::About');

//login

$routes->post('/register', 'LoginController::register');
$routes->get('/registerview', 'LoginController::registerview');


//register

$routes->get('/signin', 'LoginController::login');
$routes->post('/loginauth', 'LoginController::loginauth');


//userHome

$routes->match(['post', 'get'], '/dashboards', 'LoginController::dashboards', ['filter' => 'authGuard']);
$routes->get('/dashboards', 'LoginController::dashboards', ['filter' => 'authGuard']);
$routes->get('/Chat', 'LoginController::Chat');
$routes->get('/report', 'LoginController::report');
$routes->get('/dashboards', 'DashboardController::damage');



//form

$routes->get('/Forms', 'LoginController::Forms');
$routes->post('/save', 'LoginController::save');


//user Reset password
$routes->get('/ChangePassword', 'LoginController::ChangePassword');



//Admin home


$routes->get('/admindashboard', 'LoginController::admindashboard', ['filter' => 'authGuard']);
$routes->get('/OrMinDash', 'AdminController::OrMinDash');
$routes->get('/OrMinForms', 'AdminController::OrMinForms');
$routes->post('/OrMin', 'AdminController::OrMin');

$routes->get('/OcciDash', 'AdminController::OcciDash');
$routes->get('/OcciForms', 'AdminController::OcciForms');
$routes->post('/Occi', 'AdminController::Occi');


$routes->get('/RomblonDash', 'AdminController::RomblonDash');
$routes->get('/RomblonForm', 'AdminController::RomblonForm');
$routes->post('/Romblon', 'AdminController::Romblon');


$routes->get('/PalawanDash', 'AdminController::PalawanDash');
$routes->get('/PalawanForm', 'AdminController::PalawanForm');
$routes->post('/Palawan', 'AdminController::Palawan');


$routes->get('/MarinduqueDash', 'AdminController::MarinduqueDash');
$routes->get('/MarinduqueForm', 'AdminController::MarinduqueForm');
$routes->post('/Marinduque', 'AdminController::Marinduque');

//admin Reset password
$routes->get('/ChangePass', 'AdminController::ChangePass');


$routes->get('/Form', 'AdminController::Form');

$routes->get('/Table', 'AdminController::Table');
$routes->post('/AllFarmers', 'AdminController::AllFarmers');

$routes->get('/Tables', 'AdminController::Tables');
