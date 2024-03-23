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



//form

$routes->match(['post','get'],'/Forms', 'FormController::Forms');
$routes->match(['post', 'get'],'/save', 'FormController::save');
$routes->post('viewreport/delete/(:num)', 'FormController::deletereport/$1');
$routes->post('/edit/(:num)', 'FormController::edit/$1');
$routes->post('/Forms/update/(:num)', 'FormController::update');






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


//User DashBoard 
$routes->get('/TotalDamage', 'ChartController::TotalDamage', ['filter' => 'authGuard']);
$routes->get('/calculateFarmers', 'ChartController::calculateFarmers', ['filter' => 'authGuard']);
$routes->get('/calculatestanding', 'ChartController::calculatestanding', ['filter' => 'authGuard']);
$routes->get('/calculatecrop', 'ChartController::calculatecrop', ['filter' => 'authGuard']);
$routes->get('/ed', 'ChartController::ed', ['filter' => 'authGuard']);
$routes->get('/totalcrop', 'ChartController::totalcrop', ['filter' => 'authGuard']);
$routes->get('/totaltransplate', 'ChartController::totaltransplate', ['filter' => 'authGuard']);
$routes->get('/totallocation', 'ChartController::totallocation', ['filter' => 'authGuard']);




$routes->get('/farmers', 'AdminDashboardController::farmers', ['filter' => 'authGuard']);
$routes->get('/damage', 'AdminDashboardController::damage', ['filter' => 'authGuard']);
$routes->get('/standing', 'AdminDashboardController::standing', ['filter' => 'authGuard']);
$routes->get('/crop', 'AdminDashboardController::crop', ['filter' => 'authGuard']);
$routes->get('/seedling', 'AdminDashboardController::seedling', ['filter' => 'authGuard']);
$routes->get('/total', 'AdminDashboardController::total', ['filter' => 'authGuard']);
$routes->get('/location', 'AdminDashboardController::location', ['filter' => 'authGuard']);
$routes->get('/transplate', 'AdminDashboardController::transplate', ['filter' => 'authGuard']);







$routes->get('/OrientalFarmers', 'OrientalDashboardController::OrientalFarmers', ['filter' => 'authGuard']);
$routes->get('/OrientalDamage', 'OrientalDashboardController::OrientalDamage', ['filter' => 'authGuard']);
$routes->get('/OrientalStanding', 'OrientalDashboardController::OrientalStanding', ['filter' => 'authGuard']);
$routes->get('/OrientalCrop', 'OrientalDashboardController::OrientalCrop', ['filter' => 'authGuard']);
$routes->get('/OrientalSeedling', 'OrientalDashboardController::OrientalSeedling', ['filter' => 'authGuard']);
$routes->get('/OrientalTotal', 'OrientalDashboardController::OrientalTotal', ['filter' => 'authGuard']);
$routes->get('/OrientalLocation', 'OrientalDashboardController::OrientalLocation', ['filter' => 'authGuard']);
$routes->get('/OrientalTransplate', 'OrientalDashboardController::OrientalTransplate', ['filter' => 'authGuard']);





$routes->get('/OcciFarmers', 'OccidentalDashboardController::OcciFarmers', ['filter' => 'authGuard']);
$routes->get('/OcciDamage', 'OccidentalDashboardController::OcciDamage', ['filter' => 'authGuard']);
$routes->get('/OcciStanding', 'OccidentalDashboardController::OcciStanding', ['filter' => 'authGuard']);
$routes->get('/OcciCrop', 'OccidentalDashboardController::OcciCrop', ['filter' => 'authGuard']);
$routes->get('/OcciSeedling', 'OccidentalDashboardController::OcciSeedling', ['filter' => 'authGuard']);
$routes->get('/OcciTotal', 'OccidentalDashboardController::OcciTotal', ['filter' => 'authGuard']);
$routes->get('/OcciLocation', 'OccidentalDashboardController::OcciLocation', ['filter' => 'authGuard']);
$routes->get('/OcciTransplate', 'OccidentalDashboardController::OcciTransplate', ['filter' => 'authGuard']);



$routes->get('/RomblonFarmers', 'RomblonDashboardController::RomblonFarmers', ['filter' => 'authGuard']);
$routes->get('/RomblonDamage', 'RomblonDashboardController::RomblonDamage', ['filter' => 'authGuard']);
$routes->get('/RomblonStanding', 'RomblonDashboardController::RomblonStanding', ['filter' => 'authGuard']);
$routes->get('/RomblonCrop', 'RomblonDashboardController::RomblonCrop', ['filter' => 'authGuard']);
$routes->get('/RomblonSeedling', 'RomblonDashboardController::RomblonSeedling', ['filter' => 'authGuard']);
$routes->get('/RomblonTotal', 'RomblonDashboardController::RomblonTotal', ['filter' => 'authGuard']);
$routes->get('/RomblonLocation', 'RomblonDashboardController::RomblonLocation', ['filter' => 'authGuard']);
$routes->get('/RomblonTransplate', 'RomblonDashboardController::RomblonTransplate', ['filter' => 'authGuard']);



$routes->get('/PalawanFarmers', 'PalawanDashboardController::PalawanFarmers', ['filter' => 'authGuard']);
$routes->get('/PalawanDamage', 'PalawanDashboardController::PalawanDamage', ['filter' => 'authGuard']);
$routes->get('/PalawanStanding', 'PalawanDashboardController::PalawanStanding', ['filter' => 'authGuard']);
$routes->get('/PalawanCrop', 'PalawanDashboardController::PalawanCrop', ['filter' => 'authGuard']);
$routes->get('/PalawanSeedling', 'PalawanDashboardController::PalawanSeedling', ['filter' => 'authGuard']);
$routes->get('/PalawanTotal', 'PalawanDashboardController::PalawanTotal', ['filter' => 'authGuard']);
$routes->get('/PalawanLocation', 'PalawanDashboardController::PalawanLocation', ['filter' => 'authGuard']);
$routes->get('/PalawanTransplate', 'PalawanDashboardController::PalawanTransplate', ['filter' => 'authGuard']);





$routes->get('/MarinduqueFarmers', 'MarinduqueDashboardController::MarinduqueFarmers', ['filter' => 'authGuard']);
$routes->get('/MarinduqueDamage', 'MarinduqueDashboardController::MarinduqueDamage', ['filter' => 'authGuard']);
$routes->get('/MarinduqueStanding', 'MarinduqueDashboardController::MarinduqueStanding', ['filter' => 'authGuard']);
$routes->get('/MarinduqueCrop', 'MarinduqueDashboardController::MarinduqueCrop', ['filter' => 'authGuard']);
$routes->get('/MarinduqueSeedling', 'MarinduqueDashboardController::MarinduqueSeedling', ['filter' => 'authGuard']);
$routes->get('/MarinduqueTotal', 'MarinduqueDashboardController::MarinduqueTotal', ['filter' => 'authGuard']);
$routes->get('/MarinduqueLocation', 'MarinduqueDashboardController::MarinduqueLocation', ['filter' => 'authGuard']);
$routes->get('/MarinduqueTransplate', 'MarinduqueDashboardController::MarinduqueTransplate', ['filter' => 'authGuard']);



$routes->get('/Damage', 'ReportController::Damage', ['filter' => 'authGuard']);


$routes->get('/HeavyRains', 'ReportController::HeavyRains', ['filter' => 'authGuard']);

$routes->get('/CANS', 'ReportController::CANS', ['filter' => 'authGuard']);









