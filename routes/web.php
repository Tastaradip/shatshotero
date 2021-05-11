<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::namespace('Web')->name('web.')->group(function () {
	Route::get('/', 'HomeController@index')->name('index');
	Route::get('/about', 'HomeController@about')->name('about');
});
Route::namespace('Web')->name('web.products.')->prefix('web/products')->group(function () {
	Route::get('/{id}', 'ProductController@show')->name('show');
});

Route::namespace('Auth')->name('web.customer.')->prefix('customer')->group(function () {
	Route::get('register', 'CustomerRegisterController@showRegisterForm')->name('register');
	Route::post('store', 'CustomerRegisterController@create')->name('store');
	Route::get('login', 'CustomerLoginController@showLoginForm')->name('login');
	Route::post('login/submit', 'CustomerLoginController@login')->name('login.submit');
	Route::get('logout', 'CustomerLoginController@logout')->name('logout');
});

Route::middleware(['auth:customer'])->namespace('Web')->name('web.cart.')->group(function (){
	Route::get('/add-to-cart/{product}', 'CartController@addtocart')->name('item.add');
	Route::get('/cart', 'CartController@index')->name('index');
	Route::get('/remove-from-cart/{product}', 'CartController@removefromcart')->name('item.remove');
	Route::get('/cart/{product}/update', 'CartController@update')->name('item.update');
});

Route::middleware(['auth:customer'])->namespace('Web')->name('web.order.')->group(function (){
	Route::get('/checkout', 'OrderController@checkout')->name('checkout');
	Route::post('/store','OrderController@store')->name('store');
});


/* Backend routes 
===============================================
*/
/*Admin Login-logout*/
Route::namespace('Auth')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login-check', 'LoginController@login')->name('login.check');
    Route::get('/logout', 'LoginController@logout')->name('logout');
});
Route::middleware(['auth'])->namespace('Admin')->name('admin.')->prefix('admin')->group(function () {
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::resource('categories', 'CategoryController');
	Route::resource('products', 'ProductController');
	Route::get('products/{id}/images', 'ProductController@images')->name('products.images');
	Route::post('products/{id}/images/store', 'ProductController@images_store')->name('products.images.store');
	Route::get('products/images/delete/{id}','ProductController@images_destroy')->name('products.images.delete');
	Route::get('products/{id}/videos', 'ProductController@videos')->name('products.videos');
	Route::post('products/{id}/videos/store', 'ProductController@videos_store')->name('products.videos.store');
	Route::post('products/videos/delete/{id}','ProductController@videos_destroy')->name('products.videos.delete');
	Route::resource('/types', 'TypeController');
	Route::resource('sliders', 'SliderController');
	Route::resource('customers', 'CustomerController');
	Route::get('/orders/index','OrderController@index')->name('orders.index');
	Route::get('/orders/update/{order}','OrderController@update')->name('orders.update');
	Route::get('/orders/show/{order}', 'OrderController@show')->name('orders.show');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


