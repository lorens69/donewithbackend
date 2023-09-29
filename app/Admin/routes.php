<?php

use App\Admin\Controllers\RequestForm;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', users::class);
    $router->resource('reservations', Reservation::class);
    $router->resource('categories', Categorys::class);
    $router->resource('products', Products::class);
    $router->resource('services', Service::class);
    $router->resource('carts', Carts::class);
    $router->resource('orders', OrderController::class);
    $router->resource('user-reservations', UserReservationController::class);

});
