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



/**
 * Temp view routes to be replaced by controller(s)
 */


Route::get('/', function () {
    return view('home');
});


Route::middleware(['web'])->group(function () {


    Route::get('/signup/compare','SignupController@compare');
    Route::get('/signup/start','SignupController@start');
    Route::get('/signup/setup','SignupController@setup');
    Route::get('/signup/warp','SignupController@warp');


});









Route::get('/home', 'HomeController@index')->name('home');
Route::get('/address', 'Core\AddressController@index');


/**
 * Default laravel routes, to be replaced
 */
Auth::routes();

