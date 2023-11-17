<?php
use App\Admin\Controllers\Products;
use App\Admin\Controllers\RequestForm;
use App\Admin\Controllers\Reservation;
use App\Admin\Controllers\UserReservationController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GalleryController;

use App\Http\Controllers\UserController;
use Doctrine\DBAL\Logging\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    Alert::success("Hello");
    return view('login');
})->name('login');


Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/maglogin', [AuthManager::class, 'maglogin'])->name('maglogin');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
// Route::post('/bookingrequests', [RequestForm::class, 'formPost'])->name('form.post');
Route::post('/reservations', [Reservation::class, 'sendrequest'])->name('request.post');
Route::post('/userreservations', [UserReservationController::class, 'usersendrequest'])->name('userrequest.post');
Route::get('/showuserreservations', [UserReservationController::class, 'showreservations'])->name('showuserreservations');
Route::post('/showuserreservations/{id}/cancel', [UserReservationController::class, 'cancel'])->name('showuserreservations.cancel');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/profileinfo', function () {
        return view('profile._profileinfo');
    })->name('profileinfo');

    // Route::post('/addtocart', [ProductController::class, 'addToCart'])->name('addToCart');
    Route::post('/products/{productId}/add-to-cart', [ProductController::class, 'addToCart'])->name('addToCart');
    Route::get('/cart', [ProductController::class, 'cartList'])->name('carts');
    Route::get('/removecart/{id}', [ProductController::class, 'removeCart'])->name('removeCart');
    Route::post('/ordernow', [ProductController::class, 'orderNow'])->name('ordernow');
    Route::get('/myorder', [ProductController::class, 'myOrders'])->name('myOrders');
    Route::get('/userdetails', [UserController::class, 'showuserdetails'])->name('mydetails');
    Route::get('/updateprofile/{id}', [UserController::class, 'updateprofile']);
    // routes/web.php

Route::post('/cart/{cartId}/increase', [ProductController::class, 'increaseQuantity'])->name('cart.increase');
Route::post('/cart/{cartId}/decrease', [ProductController::class, 'decreaseQuantity'])->name('cart.decrease');


});

Route::get('/sortby1', [ProductController::class, 'sortby1'])->name('sortby1');
Route::get('/sortby2', [ProductController::class, 'sortby2'])->name('sortby2');
Route::get('/sortby3', [ProductController::class, 'sortby3'])->name('sortby3');

Route::get('/service', [ServiceController::class, 'showServices'])->name('service');
Route::get('/product', [ProductController::class, 'showProducts'])->name('product');
// Route::get('/showproduct', [Products::class, 'showproducts'])->name('show.product');


// Route::get('/service', function () {
//     return view('service');
// })->name('service');

// Route::get('/product', function () {
//     return view('product');
// })->name('product');


Route::get('/register', function () {
    return view('Register');
})->name('register');


Route::get('/gallery', [GalleryController::class,'showGallery'])->name('gallery');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/bookingrequests', function () {
    return view('profile._bookingrequests');
})->name('bookingrequests');

// Route::get('/purchasehistory', function() {
//     return view('profile._purchasehistory');
// })->name('purchasehistory');

Route::get('/purchasehistory', function(){

    return view('profile._purchasehistory');
})->name('purchasehistory');

Route::get('login', function () {
    return view('Login');
});


Route::get('/book', function () {
    return view('book');
})->name('book');

// Route::get('/cart', function () {
//     return view('cart');
// })->name('carts');

Route::get('/requestform', function () {
    return view('requestform');
})->name('requestform');
