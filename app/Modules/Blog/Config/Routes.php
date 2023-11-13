<?php
namespace App\Modules\Blog\Config;

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */


$routes->group('', ['namespace' => 'App\Modules\Blog\Controllers'], static function ($routes) {
    $routes->get('/', 'BlogController::index');


});
