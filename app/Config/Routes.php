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
// $routes->get('/', 'Home::index');
// admin-index
// auth
// $routes->group('masuk', function ($routes) {
//     $routes->get('/register', 'HomeController::register');
// });



$routes->group('', function ($routes) {
    $routes->get('profile', 'UserController::profile', ['filter' => 'role:admin,user']);
});

// admin-index
// $routes->get('/admin', 'AdminController::index', ['filter' => 'role:admin']);
// admin-article
$routes->group('admin', ['filter' => 'role:admin'], function ($routes) {
    // article Management
    $routes->get('article/', 'ArticleController::index');
    $routes->get('article/create', 'ArticleController::create');
    $routes->get('article/edit/(:segment)', 'ArticleController::edit/$1');
    $routes->post('article/update/(:any)', 'ArticleController::update/$1');
    $routes->post('article/save', 'ArticleController::save');
    $routes->delete('article/(:num)', 'ArticleController::destroy/$1');
    $routes->get('article/(:any)', 'ArticleController::detail/$1');
    // User Management
    $routes->get('userManagement', 'UserManagementController::index');
    $routes->get('userManagement/(:num)', 'UserManagementCOntroller::detail/$1');
    // Category Management
    $routes->get('category/', 'CategoryController::index');
    $routes->get('category/create', 'CategoryController::create');
    $routes->post('category/save', 'CategoryController::save');
    $routes->get('category/edit/(:segment)', 'CategoryController::edit/$1');
    $routes->post('category/update/(:any)', 'CategoryController::update/$1');
    $routes->delete('category/(:num)', 'CategoryController::destroy/$1');
    // portfolio Management
    $routes->get('portfolio/', 'PortfolioController::index');
    $routes->get('portfolio/create', 'PortfolioController::create');
    $routes->post('portfolio/save', 'PortfolioController::save');
    $routes->get('portfolio/detail/(:any)', 'PortfolioController::detail/$1');
    $routes->get('portfolio/edit/(:any)', 'PortfolioController::edit/$1');
    $routes->post('portfolio/update/(:any)', 'PortfolioController::update/$1');
    $routes->delete('portfolio/(:num)', 'PortfolioController::destroy/$1');
});

// home
$routes->group('', function ($routes) {
    $routes->get('/', 'HomeController::index');
    $routes->get('/articles', 'HomeController::articles');
    $routes->get('/search-articles', 'HomeController::search_articles');
    $routes->get('/articles/(:any)', 'HomeController::detailArticle/$1');
    $routes->get('/portfolio', 'HomeController::portfolio');
    $routes->get('/aboutMe', 'HomeController::aboutMe');
    $routes->get('/signUp', 'HomeController::signUp');
    $routes->get('/signIn', 'HomeController::signIn');
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
