<?php

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

Route::get('/', function () {
    return view('home');
});
/**
 * Temp view routes to be replaced by controller(s)
 */
Route::get('/signup.html', function () {
    return view('sales.packageCompare');
});
Route::get('/start.html', function () {
    return view('sales.startSignup');
});
Route::get('/setup.html', function () {
    return view('sales.setupAccount');
});
Route::get('/warp.html', function () {
    return view('sales.finishSignup');
});

Route::get('/address', 'Core\AddressController@index');


/**
 * Default laravel routes, to be replaced
 */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

