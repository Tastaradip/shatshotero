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
});
Route::namespace('Web')->name('web.products')->prefix('web/products')->group(function () {
	Route::get('/{id}', 'ProductController@show')->name('show');
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
Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function () {
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::resource('categories', 'CategoryController');
	Route::resource('products', 'ProductController');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


